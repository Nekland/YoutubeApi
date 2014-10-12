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

    private $statistics;

    private $topicDetails;

    private $status;

    private $brandingSettings;

    private $position;

    private $items;

    private $auditDetails;

    private $contentOwnerDetails;
}
