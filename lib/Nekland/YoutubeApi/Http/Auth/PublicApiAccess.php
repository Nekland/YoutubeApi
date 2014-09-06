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


use Nekland\BaseApi\Http\Auth\AuthStrategyInterface;
use Nekland\BaseApi\Http\Event\RequestEvent;
use Nekland\YoutubeApi\Exception\MissingOptionException;

class PublicApiAccess implements AuthStrategyInterface
{
    /**
     * @var array
     */
    private $options;

    public function setOptions(array $options)
    {
        if (empty($options['key'])) {
            throw new MissingOptionException(
                sprintf('You have to define the "key" option in order to make %s auth work.', get_class($this))
            );
        }

        $this->options = $options;
    }

    public function auth(RequestEvent $event)
    {
        $request = $event->getRequest();
        $url     = $request->getPath();

        $url .= (false === strpos($url, '?') ? '?' : '&');
        $url .= 'key=' . $this->options['key'];

        $request->setPath($url);
    }
}
