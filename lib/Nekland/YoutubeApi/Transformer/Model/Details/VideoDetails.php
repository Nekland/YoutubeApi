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

class VideoDetails
{
    /**
     * @var string
     */
    private $duration;

    /**
     * @var string
     */
    private $dimension;

    /**
     * @var string
     */
    private $definition;

    /**
     * @var string
     */
    private $caption;

    /**
     * @var boolean
     */
    private $licensedContent;

    /**
     * @var array[]
     */
    private $regionRestriction;

    /**
     * @var string[]
     */
    private $contentRating;
}
