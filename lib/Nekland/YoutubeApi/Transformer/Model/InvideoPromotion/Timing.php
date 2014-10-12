<?php

/**
 * This file is a part of nekland youtube api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\YoutubeApi\Transformer\Model\InvideoPromotion;


class Timing
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var int
     */
    private $offsetMs;

    /**
     * @var int
     */
    private $durationMs;

    /**
     * @return int
     */
    public function getDurationMs()
    {
        return $this->durationMs;
    }

    /**
     * @param int $durationMs
     * @return self
     */
    public function setDurationMs($durationMs)
    {
        $this->durationMs = $durationMs;

        return $this;
    }

    /**
     * @return int
     */
    public function getOffsetMs()
    {
        return $this->offsetMs;
    }

    /**
     * @param int $offsetMs
     * @return self
     */
    public function setOffsetMs($offsetMs)
    {
        $this->offsetMs = $offsetMs;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}
