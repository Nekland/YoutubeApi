<?php

/**
 * This file is a part of nekland youtube api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\Tests\Api;


use Nekland\YoutubeApi\Youtube;

class PlaylistsTest extends TestCase
{

    /**
     * @test
     */
    public function shouldReturnYoutubeArrayAsJson()
    {
        $youtube = $this->getYoutubeMock(['get' => $this->getPlaylistsList()]);
        /** @var \Nekland\YoutubeApi\Api\Videos $videos */
        $videos  = $youtube->api('videos');

        $this->assertEquals($videos->listById('PLXONb89nemXsCa5-v7kO8qbLnCjG9O80f')['etag'], '"gMjDJfS6nsym0T-NKCXALC_u_rM/OS-dz8DrzAjFW7CsH_RCbY99MJc"');
        $this->assertEquals($videos->getById('PLXONb89nemXsCa5-v7kO8qbLnCjG9O80f')['id'], 'PLXONb89nemXsCa5-v7kO8qbLnCjG9O80f');
        $this->assertEquals($videos->listBy(['id' => 'PLXONb89nemXsCa5-v7kO8qbLnCjG9O80f'])['etag'], '"gMjDJfS6nsym0T-NKCXALC_u_rM/OS-dz8DrzAjFW7CsH_RCbY99MJc"');
    }

    private function getPlaylistsList()
    {
        return <<<JSON
{
    "kind": "youtube#playlistListResponse",
    "etag": "\\"gMjDJfS6nsym0T-NKCXALC_u_rM/OS-dz8DrzAjFW7CsH_RCbY99MJc\\"",
    "pageInfo": {
        "totalResults": 1,
        "resultsPerPage": 1
    },
    "items": [
        {
            "kind": "youtube#playlist",
            "etag": "\\"gMjDJfS6nsym0T-NKCXALC_u_rM/Ax_bKA8m_sB2PAeyA93DR4_icZE\\"",
            "id": "PLXONb89nemXsCa5-v7kO8qbLnCjG9O80f",
            "snippet": {
                "publishedAt": "2014-07-19T21:10:24.000Z",
                "channelId": "UCKTI_JRpt8G14YIwe7isYvw",
                "title": "Découvertes",
                "description": "",
                "thumbnails": {
                    "default": {
                        "url": "https://i.ytimg.com/vi/KD5fLb-WgBU/default.jpg",
                        "width": 120,
                        "height": 90
                    },
                    "medium": {
                        "url": "https://i.ytimg.com/vi/KD5fLb-WgBU/mqdefault.jpg",
                        "width": 320,
                        "height": 180
                    },
                    "high": {
                        "url": "https://i.ytimg.com/vi/KD5fLb-WgBU/hqdefault.jpg",
                        "width": 480,
                        "height": 360
                    },
                    "standard": {
                        "url": "https://i.ytimg.com/vi/KD5fLb-WgBU/sddefault.jpg",
                        "width": 640,
                        "height": 480
                    },
                    "maxres": {
                        "url": "https://i.ytimg.com/vi/KD5fLb-WgBU/maxresdefault.jpg",
                        "width": 1280,
                        "height": 720
                    }
                },
                "channelTitle": "Maxime Veber"
            }
        }
    ]
}
JSON;
    }
}
