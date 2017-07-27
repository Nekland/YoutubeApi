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

use Nekland\YoutubeApi\Exception\NotFoundItemException;

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
        $parameters = array_merge(
            ['part' => implode(',', $parts), 'id' => $id],
            $otherParameters
        );

        return $this->get(static::URL, $parameters);
    }

    /**
     * Get automatically only the video data array
     *
     * @param  string $id
     * @param  array  $parts
     * @param  array  $otherParameters
     * @return array
     * @throws NotFoundItemException
     */
    public function getById($id, array $parts = ['snippet'], array $otherParameters = [])
    {
        $data = $this->listById($id, $parts, $otherParameters);
        if (empty($data['items'])) {
            throw new NotFoundItemException();
        }

        return $data['items'][0];
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
            ['part' => implode(',', $parts)],
            $filters,
            $otherParameters
        );

        return $this->get(static::URL, $parameters);
    }
}
