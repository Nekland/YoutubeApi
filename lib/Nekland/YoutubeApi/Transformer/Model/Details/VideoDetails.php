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

class VideoDetails
{
    /**
     * @var string
     */
    private $duration;

    /**
     * @var string
     */
    private $dimension;

    /**
     * @var string
     */
    private $definition;

    /**
     * @var string
     */
    private $caption;

    /**
     * @var boolean
     */
    private $licensedContent;

    /**
     * @var array[]
     */
    private $regionRestriction;

    /**
     * @var string[]
     */
    private $contentRating;

    /**
     * @return string
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * @param string $caption
     * @return self
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * @return \string[]
     */
    public function getContentRating()
    {
        return $this->contentRating;
    }

    /**
     * @param \string[] $contentRating
     * @return self
     */
    public function setContentRating(array $contentRating)
    {
        $this->contentRating = $contentRating;

        return $this;
    }

    /**
     * @return string
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * @param string $definition
     * @return self
     */
    public function setDefinition($definition)
    {
        $this->definition = $definition;

        return $this;
    }

    /**
     * @return string
     */
    public function getDimension()
    {
        return $this->dimension;
    }

    /**
     * @param string $dimension
     * @return self
     */
    public function setDimension($dimension)
    {
        $this->dimension = $dimension;

        return $this;
    }

    /**
     * @return string
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param string $duration
     * @return self
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isLicensedContent()
    {
        return $this->licensedContent;
    }

    /**
     * @param boolean $licensedContent
     * @return self
     */
    public function setLicensedContent($licensedContent)
    {
        $this->licensedContent = $licensedContent;

        return $this;
    }

    /**
     * @return \array[]
     */
    public function getRegionRestriction()
    {
        return $this->regionRestriction;
    }

    /**
     * @param \array[] $regionRestriction
     * @return self
     */
    public function setRegionRestriction(array $regionRestriction)
    {
        $this->regionRestriction = $regionRestriction;

        return $this;
    }
}
