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


class Watermark
{
    /**
     * @var Timing
     */
    private $timing;

    /**
     * @var Position
     */
    private $position;

    /**
     * @var string
     */
    private $imageUrl;

    /**
     * @var int
     */
    private $imageBytes;

    /**
     * @var string
     */
    private $targetChannelId;
}
