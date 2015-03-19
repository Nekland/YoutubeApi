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


use Nekland\YoutubeApi\Transformer\Model\Snippet\VideoSnippet;

class Video extends Item
{
    /**
     * @var VideoSnippet
     */
    private $snippet;

    /**
     * @var Details\VideoDetails
     */
    private $contentDetails;

    /**
     * @var Status\VideoStatus
     */
    private $status;

    /**
     * @var Statistics\VideoStatistics
     */
    private $statistics;

    /**
     * @var Standard\Player
     */
    private $player;

    /**
     * @var Details\TopicDetails
     */
    private $topicDetails;

    /**
     * @var Details\RecordingDetails
     */
    private $recordingDetails;

    /**
     * @var Details\FileDetails
     */
    private $fileDetails;

    /**
     * @var Details\ProcessingDetails
     */
    private $processingDetails;

    /**
     * @var Suggestions\VideoSuggestions
     */
    private $suggestions;

    /**
     * @var Details\LiveStreamingDetails
     */
    private $liveStreamingDetails;

    /**
     * @return Details\VideoDetails
     */
    public function getContentDetails()
    {
        return $this->contentDetails;
    }

    /**
     * @param Details\VideoDetails $contentDetails
     * @return self
     */
    public function setContentDetails(Details\VideoDetails $contentDetails)
    {
        $this->contentDetails = $contentDetails;

        return $this;
    }

    /**
     * @return Details\FileDetails
     */
    public function getFileDetails()
    {
        return $this->fileDetails;
    }

    /**
     * @param Details\FileDetails $fileDetails
     * @return self
     */
    public function setFileDetails(Details\FileDetails $fileDetails)
    {
        $this->fileDetails = $fileDetails;

        return $this;
    }

    /**
     * @return Details\LiveStreamingDetails
     */
    public function getLiveStreamingDetails()
    {
        return $this->liveStreamingDetails;
    }

    /**
     * @param Details\LiveStreamingDetails $liveStreamingDetails
     * @return self
     */
    public function setLiveStreamingDetails(Details\LiveStreamingDetails $liveStreamingDetails)
    {
        $this->liveStreamingDetails = $liveStreamingDetails;

        return $this;
    }

    /**
     * @return Standard\Player
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * @param Standard\Player $player
     * @return self
     */
    public function setPlayer(Standard\Player $player)
    {
        $this->player = $player;

        return $this;
    }

    /**
     * @return Details\ProcessingDetails
     */
    public function getProcessingDetails()
    {
        return $this->processingDetails;
    }

    /**
     * @param Details\ProcessingDetails $processingDetails
     * @return self
     */
    public function setProcessingDetails(Details\ProcessingDetails $processingDetails)
    {
        $this->processingDetails = $processingDetails;

        return $this;
    }

    /**
     * @return Details\RecordingDetails
     */
    public function getRecordingDetails()
    {
        return $this->recordingDetails;
    }

    /**
     * @param Details\RecordingDetails $recordingDetails
     * @return self
     */
    public function setRecordingDetails(Details\RecordingDetails $recordingDetails)
    {
        $this->recordingDetails = $recordingDetails;
        return $this;
    }

    /**
     * @return VideoSnippet
     */
    public function getSnippet()
    {
        return $this->snippet;
    }

    /**
     * @param VideoSnippet $snippet
     * @return self
     */
    public function setSnippet(VideoSnippet $snippet)
    {
        $this->snippet = $snippet;

        return $this;
    }

    /**
     * @return Statistics\VideoStatistics
     */
    public function getStatistics()
    {
        return $this->statistics;
    }

    /**
     * @param Statistics\VideoStatistics $statistics
     * @return self
     */
    public function setStatistics(Statistics\VideoStatistics $statistics)
    {
        $this->statistics = $statistics;

        return $this;
    }

    /**
     * @return Status\VideoStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param Status\VideoStatus $status
     * @return self
     */
    public function setStatus(Status\VideoStatus $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return Suggestions\VideoSuggestions
     */
    public function getSuggestions()
    {
        return $this->suggestions;
    }

    /**
     * @param Suggestions\VideoSuggestions $suggestions
     * @return self
     */
    public function setSuggestions(Suggestions\VideoSuggestions $suggestions)
    {
        $this->suggestions = $suggestions;

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
