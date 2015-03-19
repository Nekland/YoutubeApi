<?php

/**
 * This file is a part of nekland youtube api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\YoutubeApi\Transformer\Model\BrandingSettings;


class Channel
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $keyword;

    /**
     * @var string
     */
    private $defaultTab;

    /**
     * @var string
     */
    private $trackingAnalyticsAccountId;

    /**
     * @var bool
     */
    private $moderateComments;

    /**
     * @var bool
     */
    private $showRelatedChannels;

    /**
     * @var bool
     */
    private $showBrowseView;

    /**
     * @var string
     */
    private $featuredChannelsTitle;

    /**
     * @var array
     */
    private $featuredChannelsUrls;

    /**
     * @var string
     */
    private $unsubscribedTrailer;

    /**
     * @var string
     */
    private $profileColor;

    /**
     * @return string
     */
    public function getDefaultTab()
    {
        return $this->defaultTab;
    }

    /**
     * @param string $defaultTab
     * @return self
     */
    public function setDefaultTab($defaultTab)
    {
        $this->defaultTab = $defaultTab;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getFeaturedChannelsTitle()
    {
        return $this->featuredChannelsTitle;
    }

    /**
     * @param string $featuredChannelsTitle
     * @return self
     */
    public function setFeaturedChannelsTitle($featuredChannelsTitle)
    {
        $this->featuredChannelsTitle = $featuredChannelsTitle;

        return $this;
    }

    /**
     * @return array
     */
    public function getFeaturedChannelsUrls()
    {
        return $this->featuredChannelsUrls;
    }

    /**
     * @param array $featuredChannelsUrls
     * @return self
     */
    public function setFeaturedChannelsUrls(array $featuredChannelsUrls)
    {
        $this->featuredChannelsUrls = $featuredChannelsUrls;

        return $this;
    }

    /**
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * @param string $keyword
     * @return self
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isModerateComments()
    {
        return $this->moderateComments;
    }

    /**
     * @param boolean $moderateComments
     * @return self
     */
    public function setModerateComments($moderateComments)
    {
        $this->moderateComments = $moderateComments;

        return $this;
    }

    /**
     * @return string
     */
    public function getProfileColor()
    {
        return $this->profileColor;
    }

    /**
     * @param string $profileColor
     * @return self
     */
    public function setProfileColor($profileColor)
    {
        $this->profileColor = $profileColor;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isShowBrowseView()
    {
        return $this->showBrowseView;
    }

    /**
     * @param boolean $showBrowseView
     * @return self
     */
    public function setShowBrowseView($showBrowseView)
    {
        $this->showBrowseView = $showBrowseView;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isShowRelatedChannels()
    {
        return $this->showRelatedChannels;
    }

    /**
     * @param boolean $showRelatedChannels
     * @return self
     */
    public function setShowRelatedChannels($showRelatedChannels)
    {
        $this->showRelatedChannels = $showRelatedChannels;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getTrackingAnalyticsAccountId()
    {
        return $this->trackingAnalyticsAccountId;
    }

    /**
     * @param string $trackingAnalyticsAccountId
     * @return self
     */
    public function setTrackingAnalyticsAccountId($trackingAnalyticsAccountId)
    {
        $this->trackingAnalyticsAccountId = $trackingAnalyticsAccountId;

        return $this;
    }

    /**
     * @return string
     */
    public function getUnsubscribedTrailer()
    {
        return $this->unsubscribedTrailer;
    }

    /**
     * @param string $unsubscribedTrailer
     * @return self
     */
    public function setUnsubscribedTrailer($unsubscribedTrailer)
    {
        $this->unsubscribedTrailer = $unsubscribedTrailer;

        return $this;
    }
}
