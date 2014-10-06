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

class FileDetails
{
    /**
     * @var string
     */
    private $fileName;

    /**
     * @var integer
     */
    private $fileSize;

    /**
     * @var string
     */
    private $fileType;

    /**
     * @var string
     */
    private $container;

    /**
     * @var array
     */
    private $videoStreams;

    /**
     * @var array
     */
    private $audioStreams;

    /**
     * @var integer
     */
    private $durationMs;

    /**
     * @var integer
     */
    private $bitrateBps;

    /**
     * @var \Nekland\YoutubeApi\Transformer\Model\Standard\Location
     */
    private $recordingLocation;

    private $creationTime;
}
