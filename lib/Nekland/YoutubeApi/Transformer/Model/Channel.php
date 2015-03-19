<?php

/**
 * This file is a part of nekland youtube api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\YoutubeApi\Transformer\Model;


class Channel extends Item
{
    /**
     * @var Snippet\Snippet
     */
    private $snippet;

    /**
     * @var Details\ChannelDetails
     */
    private $contentDetails;

    /**
     * @var Statistics\ChannelStatistics
     */
    private $statistics;

    /**
     * @var Details\TopicDetails
     */
    private $topicDetails;

    /**
     * @var Status\ChannelStatus
     */
    private $status;

    /**
     * @var BrandingSettings\BrandingSettings
     */
    private $brandingSettings;

    /**
     * @var InvideoPromotion\InvideoPromotion
     */
    private $invideoPromotion;

    /**
     * @var Details\AuditDetails
     */
    private $auditDetails;

    /**
     * @var Details\ContentOwnerDetails
     */
    private $contentOwnerDetails;

    /**
     * @return Details\AuditDetails
     */
    public function getAuditDetails()
    {
        return $this->auditDetails;
    }

    /**
     * @param Details\AuditDetails $auditDetails
     * @return self
     */
    public function setAuditDetails(Details\AuditDetails $auditDetails)
    {
        $this->auditDetails = $auditDetails;

        return $this;
    }

    /**
     * @return BrandingSettings\BrandingSettings
     */
    public function getBrandingSettings()
    {
        return $this->brandingSettings;
    }

    /**
     * @param BrandingSettings\BrandingSettings $brandingSettings
     * @return self
     */
    public function setBrandingSettings(BrandingSettings\BrandingSettings $brandingSettings)
    {
        $this->brandingSettings = $brandingSettings;

        return $this;
    }

    /**
     * @return Details\ChannelDetails
     */
    public function getContentDetails()
    {
        return $this->contentDetails;
    }

    /**
     * @param Details\ChannelDetails $contentDetails
     * @return self
     */
    public function setContentDetails(Details\ChannelDetails $contentDetails)
    {
        $this->contentDetails = $contentDetails;

        return $this;
    }

    /**
     * @return Details\ContentOwnerDetails
     */
    public function getContentOwnerDetails()
    {
        return $this->contentOwnerDetails;
    }

    /**
     * @param Details\ContentOwnerDetails $contentOwnerDetails
     * @return self
     */
    public function setContentOwnerDetails(Details\ContentOwnerDetails $contentOwnerDetails)
    {
        $this->contentOwnerDetails = $contentOwnerDetails;

        return $this;
    }

    /**
     * @return InvideoPromotion\InvideoPromotion
     */
    public function getInvideoPromotion()
    {
        return $this->invideoPromotion;
    }

    /**
     * @param InvideoPromotion\InvideoPromotion $invideoPromotion
     * @return self
     */
    public function setInvideoPromotion(InvideoPromotion\InvideoPromotion $invideoPromotion)
    {
        $this->invideoPromotion = $invideoPromotion;

        return $this;
    }

    /**
     * @return Snippet\Snippet
     */
    public function getSnippet()
    {
        return $this->snippet;
    }

    /**
     * @param Snippet\Snippet $snippet
     * @return self
     */
    public function setSnippet(Snippet\Snippet $snippet)
    {
        $this->snippet = $snippet;

        return $this;
    }

    /**
     * @return Statistics\ChannelStatistics
     */
    public function getStatistics()
    {
        return $this->statistics;
    }

    /**
     * @param Statistics\ChannelStatistics $statistics
     * @return self
     */
    public function setStatistics(Statistics\ChannelStatistics $statistics)
    {
        $this->statistics = $statistics;

        return $this;
    }

    /**
     * @return Status\ChannelStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param Status\ChannelStatus $status
     * @return self
     */
    public function setStatus(Status\ChannelStatus $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return Details\TopicDetails
     */
    public function getTopicDetails()
    {
        return $this->topicDetails;
    }

    /**
     * @param Details\TopicDetails $topicDetails
     * @return self
     */
    public function setTopicDetails(Details\TopicDetails $topicDetails)
    {
        $this->topicDetails = $topicDetails;

        return $this;
    }
}
