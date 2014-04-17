<?php

/**
 * This file is a part of nekland youtube api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\YoutubeApi\Http;

use Nekland\BaseApi\Http\HttpClient as BaseHttpClient;

class HttpClient extends BaseHttpClient
{
    /**
     * @param array $options
     */
    public function __construct(array $options = [])
    {
        $options = array_merge([
            'base_url'   => 'https://www.googleapis.com/',
            'user_agent' => 'php-youtube-api (https://github.com/Nekland/YoutubeApi)'
        ], $options);

        parent::__construct($options);
        $this->getAuthFactory()->addNamespace('Nekland\\YoutubeApi\\Http\\Auth');
    }

}
