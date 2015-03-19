<?php

/**
 * This file is a part of nekland youtube api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\YoutubeApi\Transformer\Model\Status;


class ChannelStatus extends SimpleStatus
{
    /**
     * @var bool
     */
    private $isLinked;

    /**
     * @var string
     */
    private $longUploadsStatus;

    /**
     * @return boolean
     */
    public function isIsLinked()
    {
        return $this->isLinked;
    }

    /**
     * @param boolean $isLinked
     * @return self
     */
    public function setIsLinked($isLinked)
    {
        $this->isLinked = $isLinked;

        return $this;
    }

    /**
     * @return string
     */
    public function getLongUploadsStatus()
    {
        return $this->longUploadsStatus;
    }

    /**
     * @param string $longUploadsStatus
     * @return self
     */
    public function setLongUploadsStatus($longUploadsStatus)
    {
        $this->longUploadsStatus = $longUploadsStatus;

        return $this;
    }
}
