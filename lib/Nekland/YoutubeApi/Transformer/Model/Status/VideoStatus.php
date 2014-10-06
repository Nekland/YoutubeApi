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

class VideoStatus
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
     * @var string
     */
    private $privacyStatus;

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
}
