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

class ProcessingDetails
{
    /**
     * @var string
     */
    private $processingStatus;

    /**
     * @var array
     */
    private $processingProgress;

    /**
     * @var string
     */
    private $processingFailureReason;

    /**
     * @var string
     */
    private $fileDetailsAvailability;

    /**
     * @var string
     */
    private $processingIssuesAvailability;

    /**
     * @var string
     */
    private $tagSuggestionsAvailability;

    /**
     * @var string
     */
    private $editorSuggestionsAvailability;

    /**
     * @var string
     */
    private $thumbnailsAvailability;
}
