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


/**
 * Class Videos
 *
 * Note about the "parts" array: it can take the following values:
 * id, snippet, contentDetails, fileDetails, liveStreamingDetails, player, processingDetails,
 * recordingDetails, statistics, status, suggestions, and topicDetails.
 *
 * @see https://developers.google.com/youtube/v3/docs/videos/list for more information about paramaters
 * @see https://developers.google.com/youtube/v3/docs/videos#resource for more information about json format
 *
 * @package Nekland\YoutubeApi\Api
 */
class Videos extends AbstractApi
{
    const URL = 'youtube/v3/videos';

    /**
     * @param  string $id
     * @param  array  $parts
     * @param  array  $otherParameters
     * @return array
     */
    public function listById($id, array $parts = ['snippet'], array $otherParameters = [])
    {
        $parameters = array_merge(
            ['part' => implode(',', $parts), 'id' => $id],
            $otherParameters
        );

        return $this->get(self::URL, $parameters);
    }

    /**
     * Get automatically only the video data array
     *
     * @param  string $id
     * @param  array  $parts
     * @param  array  $otherParameters
     * @return array
     */
    public function getById($id, array $parts = ['snippet'], array $otherParameters = [])
    {
        return $this->listById($id, $parts, $otherParameters)['items'][0];
    }

    /**
     * @param  array $filters
     * @param  array $parts
     * @param  array $otherParameters
     * @return array
     */
    public function listBy(array $filters, array $parts = ['snippet'], array $otherParameters = [])
    {
        $parameters = array_merge(
            ['part' => $parts],
            $filters,
            $otherParameters
        );

        return $this->get(self::URL, $parameters);
    }

}
