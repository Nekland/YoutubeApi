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

class LiveStreamingDetails
{
    /**
     * @var \DateTime
     */
    private $actualStartTime;

    /**
     * @var \DateTime
     */
    private $actualEndTime;

    /**
     * @var \DateTime
     */
    private $scheduledStartTime;

    /**
     * @var \DateTime
     */
    private $scheduledEndTime;

    /**
     * @var integer
     */
    private $concurrentViewers;
}
