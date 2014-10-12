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
 * Class Activities
 *
 * Note about the "parts" array: it can take the following values:
 * id, contentDetails, snippet.
 *
 * @see https://developers.google.com/youtube/v3/docs/activities/list for more information about paramaters
 * @see https://developers.google.com/youtube/v3/docs/activities#resource for more information about json format
 */
class Activities extends AbstractApi
{
    use ListTrait;

    public function getUrl()
    {
        return 'youtube/v3/activities';
    }

    public function getType()
    {
        return 'playlist';
    }
}
