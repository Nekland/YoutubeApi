<?php

/**
 * This file is a part of nekland youtube api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\YoutubeApi\Transformer\Model\Statistics;


class ChannelStatistics extends Statistics
{
    /**
     * @var int
     */
    private $subscriberCount;

    /**
     * @var bool
     */
    private $hiddenSubscriberCount;

    /**
     * @var int
     */
    private $videoCount;

    /**
     * @return boolean
     */
    public function isHiddenSubscriberCount()
    {
        return $this->hiddenSubscriberCount;
    }

    /**
     * @param boolean $hiddenSubscriberCount
     * @return self
     */
    public function setHiddenSubscriberCount($hiddenSubscriberCount)
    {
        $this->hiddenSubscriberCount = $hiddenSubscriberCount;

        return $this;
    }

    /**
     * @return int
     */
    public function getSubscriberCount()
    {
        return $this->subscriberCount;
    }

    /**
     * @param int $subscriberCount
     * @return self
     */
    public function setSubscriberCount($subscriberCount)
    {
        $this->subscriberCount = $subscriberCount;

        return $this;
    }

    /**
     * @return int
     */
    public function getVideoCount()
    {
        return $this->videoCount;
    }

    /**
     * @param int $videoCount
     * @return self
     */
    public function setVideoCount($videoCount)
    {
        $this->videoCount = $videoCount;

        return $this;
    }
}
