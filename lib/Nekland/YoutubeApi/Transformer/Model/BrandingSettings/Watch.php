<?php

/**
 * This file is a part of nekland youtube api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\YoutubeApi\Transformer\Model\BrandingSettings;


class Watch
{
    /**
     * @var string
     */
    private $textColor;

    /**
     * @var string
     */
    private $backgroundColor;

    /**
     * @var string
     */
    private $featuredPlaylistId;

    /**
     * @return string
     */
    public function getBackgroundColor()
    {
        return $this->backgroundColor;
    }

    /**
     * @param string $backgroundColor
     * @return self
     */
    public function setBackgroundColor($backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }

    /**
     * @return string
     */
    public function getFeaturedPlaylistId()
    {
        return $this->featuredPlaylistId;
    }

    /**
     * @param string $featuredPlaylistId
     * @return self
     */
    public function setFeaturedPlaylistId($featuredPlaylistId)
    {
        $this->featuredPlaylistId = $featuredPlaylistId;

        return $this;
    }

    /**
     * @return string
     */
    public function getTextColor()
    {
        return $this->textColor;
    }

    /**
     * @param string $textColor
     * @return self
     */
    public function setTextColor($textColor)
    {
        $this->textColor = $textColor;

        return $this;
    }
}
