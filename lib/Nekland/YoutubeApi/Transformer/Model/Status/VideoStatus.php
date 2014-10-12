<?php

/**
 * This file is a part of nekland youtube api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\YoutubeApi\Transformer\Model\Status;

class VideoStatus extends SimpleStatus
{
    /**
     * @var string
     */
    private $uploadStatus;

    /**
     * @var string
     */
    private $failureReason;

    /**
     * @var string
     */
    private $rejectionReason;

    /**
     * @var \DateTime
     */
    private $publishedAt;

    /**
     * @var string
     */
    private $license;

    /**
     * @var boolean
     */
    private $embeddable;

    /**
     * @var boolean
     */
    private $publicStatsViewable;

    /**
     * @return boolean
     */
    public function isEmbeddable()
    {
        return $this->embeddable;
    }

    /**
     * @param boolean $embeddable
     * @return self
     */
    public function setEmbeddable($embeddable)
    {
        $this->embeddable = $embeddable;

        return $this;
    }

    /**
     * @return string
     */
    public function getFailureReason()
    {
        return $this->failureReason;
    }

    /**
     * @param string $failureReason
     * @return self
     */
    public function setFailureReason($failureReason)
    {
        $this->failureReason = $failureReason;

        return $this;
    }

    /**
     * @return string
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * @param string $license
     * @return self
     */
    public function setLicense($license)
    {
        $this->license = $license;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isPublicStatsViewable()
    {
        return $this->publicStatsViewable;
    }

    /**
     * @param boolean $publicStatsViewable
     * @return self
     */
    public function setPublicStatsViewable($publicStatsViewable)
    {
        $this->publicStatsViewable = $publicStatsViewable;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    /**
     * @param \DateTime $publishedAt
     * @return self
     */
    public function setPublishedAt(\DateTime $publishedAt)
    {
        $this->publishedAt = $publishedAt;

        return $this;
    }

    /**
     * @return string
     */
    public function getRejectionReason()
    {
        return $this->rejectionReason;
    }

    /**
     * @param string $rejectionReason
     * @return self
     */
    public function setRejectionReason($rejectionReason)
    {
        $this->rejectionReason = $rejectionReason;

        return $this;
    }

    /**
     * @return string
     */
    public function getUploadStatus()
    {
        return $this->uploadStatus;
    }

    /**
     * @param string $uploadStatus
     * @return self
     */
    public function setUploadStatus($uploadStatus)
    {
        $this->uploadStatus = $uploadStatus;

        return $this;
    }
}
