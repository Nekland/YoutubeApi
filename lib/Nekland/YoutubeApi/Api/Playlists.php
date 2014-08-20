<?php

/**
 * This file is a part of nekland youtube api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\YoutubeApi\Api;

use Nekland\BaseApi\Api\AbstractApi;
use Nekland\YoutubeApi\Api\Behavior\ListTrait;

/**
 * Class Playlists
 *
 * Note about the "parts" array: it can take the following values:
 * id, contentDetails, player, snippet, status.
 *
 * @see https://developers.google.com/youtube/v3/docs/playlists/list for more information about paramaters
 * @see https://developers.google.com/youtube/v3/docs/playlists#resource for more information about json format
 */
class Playlists extends AbstractApi
{
    const URL = 'youtube/v3/playlists';

    use ListTrait;
}
