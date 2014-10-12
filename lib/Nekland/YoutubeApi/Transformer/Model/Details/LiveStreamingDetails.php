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

class LiveStreamingDetails
{
    /**
     * @var \DateTime
     */
    private $actualStartTime;

    /**
     * @var \DateTime
     */
    private $actualEndTime;

    /**
     * @var \DateTime
     */
    private $scheduledStartTime;

    /**
     * @var \DateTime
     */
    private $scheduledEndTime;

    /**
     * @var integer
     */
    private $concurrentViewers;

    /**
     * @return \DateTime
     */
    public function getActualEndTime()
    {
        return $this->actualEndTime;
    }

    /**
     * @param \DateTime $actualEndTime
     * @return self
     */
    public function setActualEndTime(\DateTime $actualEndTime)
    {
        $this->actualEndTime = $actualEndTime;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getActualStartTime()
    {
        return $this->actualStartTime;
    }

    /**
     * @param \DateTime $actualStartTime
     * @return self
     */
    public function setActualStartTime(\DateTime $actualStartTime)
    {
        $this->actualStartTime = $actualStartTime;

        return $this;
    }

    /**
     * @return int
     */
    public function getConcurrentViewers()
    {
        return $this->concurrentViewers;
    }

    /**
     * @param int $concurrentViewers
     * @return self
     */
    public function setConcurrentViewers($concurrentViewers)
    {
        $this->concurrentViewers = $concurrentViewers;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getScheduledEndTime()
    {
        return $this->scheduledEndTime;
    }

    /**
     * @param \DateTime $scheduledEndTime
     * @return self
     */
    public function setScheduledEndTime(\DateTime $scheduledEndTime)
    {
        $this->scheduledEndTime = $scheduledEndTime;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getScheduledStartTime()
    {
        return $this->scheduledStartTime;
    }

    /**
     * @param \DateTime $scheduledStartTime
     * @return self
     */
    public function setScheduledStartTime(\DateTime $scheduledStartTime)
    {
        $this->scheduledStartTime = $scheduledStartTime;

        return $this;
    }
}
