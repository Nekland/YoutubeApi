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

class VideoStatistics extends Statistics
{
    /**
     * @var integer
     */
    private $likeCount;

    /**
     * @var integer
     */
    private $dislikeCount;

    /**
     * @var integer
     */
    private $favoriteCount;

    /**
     * @return int
     */
    public function getDislikeCount()
    {
        return $this->dislikeCount;
    }

    /**
     * @param int $dislikeCount
     * @return self
     */
    public function setDislikeCount($dislikeCount)
    {
        $this->dislikeCount = $dislikeCount;

        return $this;
    }

    /**
     * @return int
     */
    public function getFavoriteCount()
    {
        return $this->favoriteCount;
    }

    /**
     * @param int $favoriteCount
     * @return self
     */
    public function setFavoriteCount($favoriteCount)
    {
        $this->favoriteCount = $favoriteCount;

        return $this;
    }

    /**
     * @return int
     */
    public function getLikeCount()
    {
        return $this->likeCount;
    }

    /**
     * @param int $likeCount
     * @return self
     */
    public function setLikeCount($likeCount)
    {
        $this->likeCount = $likeCount;

        return $this;
    }
}
