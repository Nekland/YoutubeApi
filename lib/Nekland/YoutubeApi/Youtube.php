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
use Nekland\BaseApi\Http\HttpClientFactory;

/**
 * @method \Nekland\YoutubeApi\Api\Videos getVideosApi
 * @method \Nekland\YoutubeApi\Api\Playlists getPlaylistsApi
 */
class Youtube extends ApiFactory
{
    /**
     * @var array
     */
    private $options = [
        'base_url'   => 'https://www.googleapis.com/',
        'user_agent' => 'php-youtube-api (https://github.com/Nekland/YoutubeApi)'
    ];

    public function __construct(array $option = [])
    {
        $this->options = array_merge_recursive($this->options, $option);
        parent::__construct(new HttpClientFactory($this->options));

        $this->getAuthFactory()->addNamespace('Nekland\YoutubeApi\Http\Auth');
    }

    /**
     * Return array of namespaces where AbstractApi instance are localized
     *
     * @return string[] Example: ['Nekland\BaseApi\Api']
     */
    protected function getApiNamespaces()
    {
        return ['Nekland\YoutubeApi\Api'];
    }
}
