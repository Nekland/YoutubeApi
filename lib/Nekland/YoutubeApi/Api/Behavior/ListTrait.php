<?php

/**
 * This file is a part of nekland youtube api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\YoutubeApi\Api\Behavior;

use Nekland\YoutubeApi\Transformer\Model\Collection;

trait ListTrait
{
    /**
     * @param  string $id
     * @param  array  $parts
     * @param  array  $otherParameters
     * @return array
     */
    public function listById($id, array $parts = ['snippet'], array $otherParameters = [])
    {
        $body = array_merge(
            ['part' => implode(',', $parts), 'id' => $id],
            $otherParameters
        );

        return $this->get($this->getUrl(), $body);
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
        $res = $this->listById($id, $parts, $otherParameters);

        if ($res instanceof Collection) {
            return $res[0];
        }

        return $res['items'][0];
    }

    /**
     * @param  array $filters
     * @param  array $parts
     * @param  array $otherParameters
     * @return array
     */
    public function listBy(array $filters, array $parts = ['snippet'], array $otherParameters = [])
    {
        $body = array_merge(
            ['part' => $parts],
            $filters,
            $otherParameters
        );

        return $this->get($this->getUrl(), $body);
    }
}
