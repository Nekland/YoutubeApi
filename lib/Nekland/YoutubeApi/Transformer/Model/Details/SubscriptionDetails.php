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


class SubscriptionDetails
{
    /**
     * @var int
     */
    private $totalItemCount;

    /**
     * @var int
     */
    private $newItemCount;

    /**
     * @var string
     */
    private $activityType;

    /**
     * @return string
     */
    public function getActivityType()
    {
        return $this->activityType;
    }

    /**
     * @param string $activityType
     * @return self
     */
    public function setActivityType($activityType)
    {
        $this->activityType = $activityType;

        return $this;
    }

    /**
     * @return int
     */
    public function getNewItemCount()
    {
        return $this->newItemCount;
    }

    /**
     * @param int $newItemCount
     * @return self
     */
    public function setNewItemCount($newItemCount)
    {
        $this->newItemCount = $newItemCount;

        return $this;
    }

    /**
     * @return int
     */
    public function getTotalItemCount()
    {
        return $this->totalItemCount;
    }

    /**
     * @param int $totalItemCount
     * @return self
     */
    public function setTotalItemCount($totalItemCount)
    {
        $this->totalItemCount = $totalItemCount;

        return $this;
    }
}
