<?php

/**
 * This file is a part of nekland youtube api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\YoutubeApi\Transformer\Model\Snippet;


class PlaylistItemSnippet extends PlaylistSnippet
{
    /**
     * @var string
     */
    private $playlistId;

    /**
     * @var int
     */
    private $position;

    /**
     * @var array
     */
    private $resourceId;

    /**
     * @return string
     */
    public function getPlaylistId()
    {
        return $this->playlistId;
    }

    /**
     * @param string $playlistId
     * @return self
     */
    public function setPlaylistId($playlistId)
    {
        $this->playlistId = $playlistId;

        return $this;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param int $position
     * @return self
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return array
     */
    public function getResourceId()
    {
        return $this->resourceId;
    }

    /**
     * @param array $resourceId
     * @return self
     */
    public function setResourceId(array $resourceId)
    {
        $this->resourceId = $resourceId;

        return $this;
    }
}
