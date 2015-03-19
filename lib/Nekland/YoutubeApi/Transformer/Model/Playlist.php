<?php

/**
 * This file is a part of nekland base api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\YoutubeApi\Transformer\Model;


class Playlist extends Item
{
    /**
     * @var Snippet\PlaylistSnippet
     */
    private $snippet;

    /**
     * @var Status\SimpleStatus
     */
    private $status;

    /**
     * @var Details\PlaylistDetails
     */
    private $contentDetails;

    /**
     * @var Standard\Player
     */
    private $player;

    /**
     * @return Snippet\PlaylistSnippet
     */
    public function getSnippet()
    {
        return $this->snippet;
    }

    /**
     * @param Snippet\PlaylistSnippet $snippet
     * @return self
     */
    public function setSnippet(Snippet\PlaylistSnippet $snippet)
    {
        $this->snippet = $snippet;

        return $this;
    }

    /**
     * @return Details\PlaylistDetails
     */
    public function getContentDetails()
    {
        return $this->contentDetails;
    }

    /**
     * @param Details\PlaylistDetails $contentDetails
     * @return self
     */
    public function setContentDetails(Details\PlaylistDetails $contentDetails)
    {
        $this->contentDetails = $contentDetails;

        return $this;
    }

    /**
     * @return Standard\Player
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * @param Standard\Player $player
     * @return self
     */
    public function setPlayer(Standard\Player $player)
    {
        $this->player = $player;

        return $this;
    }

    /**
     * @return Status\SimpleStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param Status\SimpleStatus $status
     * @return self
     */
    public function setStatus(Status\SimpleStatus $status)
    {
        $this->status = $status;

        return $this;
    }
}
