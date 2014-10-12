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


class ChannelDetails
{
    /**
     * @var array
     */
    private $relatedPlaylists;

    /**
     * @var string
     */
    private $googlePlusUserId;

    /**
     * @return string
     */
    public function getGooglePlusUserId()
    {
        return $this->googlePlusUserId;
    }

    /**
     * @param string $googlePlusUserId
     * @return self
     */
    public function setGooglePlusUserId($googlePlusUserId)
    {
        $this->googlePlusUserId = $googlePlusUserId;

        return $this;
    }

    /**
     * @return array
     */
    public function getRelatedPlaylists()
    {
        return $this->relatedPlaylists;
    }

    /**
     * @param array $relatedPlaylists
     * @return self
     */
    public function setRelatedPlaylists(array $relatedPlaylists)
    {
        $this->relatedPlaylists = $relatedPlaylists;

        return $this;
    }
}
