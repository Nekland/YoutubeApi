<?php

/**
 * This file is a part of nekland youtube api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\YoutubeApi\Http\Auth;


use Nekland\BaseApi\Http\Auth\AuthInterface;
use Nekland\YoutubeApi\Exception\MissingOptionException;

class PublicApiAccessAuth implements AuthInterface
{
    /**
     * @var array
     */
    private $options;

    /**
     * @param array $options
     * @return self
     * @throws \Nekland\YoutubeApi\Exception\MissingOptionException
     */
    public function setOptions(array $options)
    {
        if (empty($options['key'])) {
            throw new MissingOptionException(
                sprintf('You have to define the "key" option in order to make %s auth work.', get_class($this))
            );
        }

        $this->options = $options;
    }

    /**
     * @param \Guzzle\Http\Message\Request $request
     */
    public function auth(\Guzzle\Http\Message\Request $request)
    {
        $url = $request->getUrl();

        $url .= (false === strpos($url, '?') ? '?' : '&');
        $url .= utf8_encode('key='.$this->options['key']);

        $request->setUrl($url);
    }
}
