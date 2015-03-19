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


class ContentOwnerDetails
{
    /**
     * @var string
     */
    private $contentOwner;

    /**
     * @var \DateTime
     */
    private $timeLinked;

    /**
     * @return string
     */
    public function getContentOwner()
    {
        return $this->contentOwner;
    }

    /**
     * @param string $contentOwner
     * @return self
     */
    public function setContentOwner($contentOwner)
    {
        $this->contentOwner = $contentOwner;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimeLinked()
    {
        return $this->timeLinked;
    }

    /**
     * @param \DateTime $timeLinked
     * @return self
     */
    public function setTimeLinked(\DateTime $timeLinked)
    {
        $this->timeLinked = $timeLinked;

        return $this;
    }
}
