<?php

/**
 * This file is a part of nekland youtube api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\YoutubeApi;

use Nekland\BaseApi\Api;
use Nekland\BaseApi\ApiFactory;
use Nekland\BaseApi\Http\ClientInterface;
use Nekland\YoutubeApi\Http\HttpClient;

/**
 * Class Youtube
 * @method \Nekland\YoutubeApi\Api\Videos getVideosApi
 */
class Youtube extends ApiFactory
{
    /**
     * Return array of namespaces where AbstractApi instance are localized
     *
     *
     * @return string[] Example: ['Nekland\BaseApi\Api']
     */
    protected function getApiNamespaces()
    {
        return ['Nekland\YoutubeApi\Api'];
    }
}
