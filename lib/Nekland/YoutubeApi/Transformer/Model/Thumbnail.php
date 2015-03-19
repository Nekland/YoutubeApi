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

use Nekland\YoutubeApi\Transformer\Model\Standard\Thumbnail as StandardThumbnail;

class Thumbnail
{
    /**
     * @var StandardThumbnail
     */
    private $default;

    /**
     * @var StandardThumbnail
     */
    private $medium;

    /**
     * @var StandardThumbnail
     */
    private $high;

    /**
     * @return StandardThumbnail
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * @param StandardThumbnail $default
     * @return self
     */
    public function setDefault(StandardThumbnail $default)
    {
        $this->default = $default;

        return $this;
    }

    /**
     * @return StandardThumbnail
     */
    public function getHigh()
    {
        return $this->high;
    }

    /**
     * @param StandardThumbnail $high
     * @return self
     */
    public function setHigh(StandardThumbnail $high)
    {
        $this->high = $high;

        return $this;
    }

    /**
     * @return StandardThumbnail
     */
    public function getMedium()
    {
        return $this->medium;
    }

    /**
     * @param StandardThumbnail $medium
     * @return self
     */
    public function setMedium(StandardThumbnail $medium)
    {
        $this->medium = $medium;

        return $this;
    }
}
