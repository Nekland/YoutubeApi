<?php

/**
 * This file is a part of nekland youtube api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\YoutubeApi\Transformer\Model\Details;


class ChannelSectionDetails
{
    /**
     * @var array
     */
    private $playlists;

    /**
     * @var array
     */
    private $channels;

    /**
     * @return array
     */
    public function getChannels()
    {
        return $this->channels;
    }

    /**
     * @param array $channels
     * @return self
     */
    public function setChannels(array $channels)
    {
        $this->channels = $channels;

        return $this;
    }

    /**
     * @return array
     */
    public function getPlaylists()
    {
        return $this->playlists;
    }

    /**
     * @param array $playlists
     * @return self
     */
    public function setPlaylists(array $playlists)
    {
        $this->playlists = $playlists;

        return $this;
    }
}
