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


class I18nRegion extends Item
{
    /**
     * @var Snippet\I18nRegionSnippet
     */
    private $snippet;

    /**
     * @return Snippet\I18nRegionSnippet
     */
    public function getSnippet()
    {
        return $this->snippet;
    }

    /**
     * @param Snippet\I18nRegionSnippet $snippet
     * @return self
     */
    public function setSnippet(Snippet\I18nRegionSnippet $snippet)
    {
        $this->snippet = $snippet;

        return $this;
    }
}
