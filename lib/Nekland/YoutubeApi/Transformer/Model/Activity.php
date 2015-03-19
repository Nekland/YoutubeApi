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


class Activity extends Item
{
    /**
     * @var Snippet\ActivitySnippet
     */
    private $snippet;

    /**
     * @var Details\ActivityDetails
     */
    private $contentDetails;

    /**
     * @return Details\ActivityDetails
     */
    public function getContentDetails()
    {
        return $this->contentDetails;
    }

    /**
     * @param Details\ActivityDetails $contentDetails
     * @return self
     */
    public function setContentDetails(Details\ActivityDetails $contentDetails)
    {
        $this->contentDetails = $contentDetails;

        return $this;
    }

    /**
     * @return Snippet\ActivitySnippet
     */
    public function getSnippet()
    {
        return $this->snippet;
    }

    /**
     * @param Snippet\ActivitySnippet $snippet
     * @return self
     */
    public function setSnippet(Snippet\ActivitySnippet $snippet)
    {
        $this->snippet = $snippet;

        return $this;
    }
}
