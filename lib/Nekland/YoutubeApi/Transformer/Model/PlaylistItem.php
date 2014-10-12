<?php

/**
 * This file is a part of nekland youtube api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\YoutubeApi\Transformer\Model;


class PlaylistItem extends Item
{
    /**
     * @var Snippet\PlaylistItemSnippet
     */
    private $snippet;

    /**
     * @var Status\SimpleStatus
     */
    private $status;

    /**
     * @var Details\PlaylistItemDetails
     */
    private $contentDetails;

    /**
     * @return Details\PlaylistItemDetails
     */
    public function getContentDetails()
    {
        return $this->contentDetails;
    }

    /**
     * @param Details\PlaylistItemDetails $contentDetails
     * @return self
     */
    public function setContentDetails(Details\PlaylistItemDetails $contentDetails)
    {
        $this->contentDetails = $contentDetails;

        return $this;
    }

    /**
     * @return Snippet\PlaylistItemSnippet
     */
    public function getSnippet()
    {
        return $this->snippet;
    }

    /**
     * @param Snippet\PlaylistItemSnippet $snippet
     * @return self
     */
    public function setSnippet(Snippet\PlaylistItemSnippet $snippet)
    {
        $this->snippet = $snippet;

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
