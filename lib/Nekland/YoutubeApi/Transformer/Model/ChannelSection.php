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


class ChannelSection extends Item
{
    /**
     * @var Snippet\ChannelSectionSnippet
     */
    private $snippet;

    /**
     * @var Details\ChannelSectionDetails
     */
    private $contentDetails;

    /**
     * @return Details\ChannelSectionDetails
     */
    public function getContentDetails()
    {
        return $this->contentDetails;
    }

    /**
     * @param Details\ChannelSectionDetails $contentDetails
     * @return self
     */
    public function setContentDetails(Details\ChannelSectionDetails $contentDetails)
    {
        $this->contentDetails = $contentDetails;

        return $this;
    }

    /**
     * @return Snippet\ChannelSectionSnippet
     */
    public function getSnippet()
    {
        return $this->snippet;
    }

    /**
     * @param Snippet\ChannelSectionSnippet $snippet
     * @return self
     */
    public function setSnippet(Snippet\ChannelSectionSnippet $snippet)
    {
        $this->snippet = $snippet;

        return $this;
    }
}
