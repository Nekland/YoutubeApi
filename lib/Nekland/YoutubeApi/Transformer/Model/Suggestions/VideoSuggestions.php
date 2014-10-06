<?php

/**
 * This file is a part of nekland youtube api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\YoutubeApi\Transformer\Model\Suggestions;

class VideoSuggestions
{
    /**
     * @var string[]
     */
    private $processingErrors;

    /**
     * @var string[]
     */
    private $processingWarnings;

    /**
     * @var string[]
     */
    private $processingHints;

    /**
     * @var array
     */
    private $tagSuggestions;

    /**
     * @var string
     */
    private $editorSuggestions;
}
