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


class InvideoPromotion
{
    /**
     * @var Timing
     */
    private $defaultTiming;

    /**
     * @var array
     */
    private $position;

    /**
     * @var Item[]
     */
    private $items;

    /**
     * @var boolean
     */
    private $useSmartTiming;

    public function __construct()
    {
        $this->items = [];
    }

    /**
     * @return Timing
     */
    public function getDefaultTiming()
    {
        return $this->defaultTiming;
    }

    /**
     * @param Timing $defaultTiming
     * @return self
     */
    public function setDefaultTiming(Timing $defaultTiming)
    {
        $this->defaultTiming = $defaultTiming;

        return $this;
    }

    /**
     * @return Item[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param Item[] $items
     * @return self
     */
    public function setItems(array $items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @param Item $item
     * @return self
     */
    public function addItem(Item $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * @return array
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param array $position
     * @return self
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isUseSmartTiming()
    {
        return $this->useSmartTiming;
    }

    /**
     * @param boolean $useSmartTiming
     * @return self
     */
    public function setUseSmartTiming($useSmartTiming)
    {
        $this->useSmartTiming = $useSmartTiming;

        return $this;
    }
}
