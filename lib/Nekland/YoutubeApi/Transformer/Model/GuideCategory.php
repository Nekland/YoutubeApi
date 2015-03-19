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


class GuideCategory extends Item
{
    /**
     * @var Snippet\GuideCategorySnippet
     */
    private $snippet;

    /**
     * @return Snippet\GuideCategorySnippet
     */
    public function getSnippet()
    {
        return $this->snippet;
    }

    /**
     * @param Snippet\GuideCategorySnippet $snippet
     * @return self
     */
    public function setSnippet(Snippet\GuideCategorySnippet $snippet)
    {
        $this->snippet = $snippet;

        return $this;
    }
}
