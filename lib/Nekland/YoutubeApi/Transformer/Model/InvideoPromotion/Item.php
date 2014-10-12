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


use Nekland\YoutubeApi\Transformer\Model\Standard\Timing;

class Item
{
    /**
     * @var array
     */
    private $id;

    /**
     * @var Timing
     */
    private $timing;

    /**
     * @var string
     */
    private $customMessage;

    /**
     * @var string
     */
    private $promotedByContentOwner;

    /**
     * @return string
     */
    public function getCustomMessage()
    {
        return $this->customMessage;
    }

    /**
     * @param string $customMessage
     * @return self
     */
    public function setCustomMessage($customMessage)
    {
        $this->customMessage = $customMessage;

        return $this;
    }

    /**
     * @return array
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param array $id
     * @return self
     */
    public function setId(array $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getPromotedByContentOwner()
    {
        return $this->promotedByContentOwner;
    }

    /**
     * @param string $promotedByContentOwner
     * @return self
     */
    public function setPromotedByContentOwner($promotedByContentOwner)
    {
        $this->promotedByContentOwner = $promotedByContentOwner;

        return $this;
    }

    /**
     * @return Timing
     */
    public function getTiming()
    {
        return $this->timing;
    }

    /**
     * @param Timing $timing
     * @return self
     */
    public function setTiming(Timing $timing)
    {
        $this->timing = $timing;

        return $this;
    }
}
