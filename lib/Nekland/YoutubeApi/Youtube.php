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
use Nekland\BaseApi\Http\ClientInterface;
use Nekland\YoutubeApi\Http\HttpClient;

class Youtube extends Api
{
    /**
     * @param ClientInterface $httpClient
     */
    public function __construct(ClientInterface $httpClient=null)
    {
        if (null === $httpClient) {
            parent::__construct(new HttpClient());
        } else {
            parent::__construct($httpClient);
        }
    }

    /**
     * @param string $name
     * @return Api\AbstractApi
     * @throws \InvalidArgumentException
     */
    public function api($name)
    {
        switch($name) {
            case 'videos':
                return new \Nekland\YoutubeApi\Api\Videos($this);
            case 'playlists':
                return new \Nekland\YoutubeApi\Api\Playlists($this);
            default:
                throw new \InvalidArgumentException(sprintf('Undefined api instance called: "%s"', $name));
        }
    }
}
