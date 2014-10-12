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


class ActivityDetails
{
    /**
     * @var array
     */
    private $upload;

    /**
     * @var array
     */
    private $like;

    /**
     * @var array
     */
    private $favorite;

    /**
     * @var array
     */
    private $comment;

    /**
     * @var array
     */
    private $subscription;

    /**
     * @var array
     */
    private $playlistItem;

    /**
     * @var array
     */
    private $recommendation;

    /**
     * @var array
     */
    private $bulletin;

    /**
     * @var array
     */
    private $social;

    /**
     * @var array
     */
    private $channelItem;

    /**
     * @return array
     */
    public function getBulletin()
    {
        return $this->bulletin;
    }

    /**
     * @param array $bulletin
     * @return self
     */
    public function setBulletin(array $bulletin)
    {
        $this->bulletin = $bulletin;

        return $this;
    }

    /**
     * @return array
     */
    public function getChannelItem()
    {
        return $this->channelItem;
    }

    /**
     * @param array $channelItem
     * @return self
     */
    public function setChannelItem(array $channelItem)
    {
        $this->channelItem = $channelItem;

        return $this;
    }

    /**
     * @return array
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param array $comment
     * @return self
     */
    public function setComment(array $comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * @return array
     */
    public function getFavorite()
    {
        return $this->favorite;
    }

    /**
     * @param array $favorite
     * @return self
     */
    public function setFavorite(array $favorite)
    {
        $this->favorite = $favorite;

        return $this;
    }

    /**
     * @return array
     */
    public function getLike()
    {
        return $this->like;
    }

    /**
     * @param array $like
     * @return self
     */
    public function setLike(array $like)
    {
        $this->like = $like;

        return $this;
    }

    /**
     * @return array
     */
    public function getPlaylistItem()
    {
        return $this->playlistItem;
    }

    /**
     * @param array $playlistItem
     * @return self
     */
    public function setPlaylistItem(array $playlistItem)
    {
        $this->playlistItem = $playlistItem;

        return $this;
    }

    /**
     * @return array
     */
    public function getRecommendation()
    {
        return $this->recommendation;
    }

    /**
     * @param array $recommendation
     * @return self
     */
    public function setRecommendation(array $recommendation)
    {
        $this->recommendation = $recommendation;

        return $this;
    }

    /**
     * @return array
     */
    public function getSocial()
    {
        return $this->social;
    }

    /**
     * @param array $social
     * @return self
     */
    public function setSocial(array $social)
    {
        $this->social = $social;

        return $this;
    }

    /**
     * @return array
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * @param array $subscription
     * @return self
     */
    public function setSubscription(array $subscription)
    {
        $this->subscription = $subscription;

        return $this;
    }

    /**
     * @return array
     */
    public function getUpload()
    {
        return $this->upload;
    }

    /**
     * @param array $upload
     * @return self
     */
    public function setUpload(array $upload)
    {
        $this->upload = $upload;

        return $this;
    }
}
