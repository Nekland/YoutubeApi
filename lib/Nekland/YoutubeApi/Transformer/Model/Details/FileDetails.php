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
     * @var int
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
     * @var int
     */
    private $durationMs;

    /**
     * @var int
     */
    private $bitrateBps;

    /**
     * @var \Nekland\YoutubeApi\Transformer\Model\Standard\Location
     */
    private $recordingLocation;

    /**
     * @var string
     */
    private $creationTime;

    /**
     * @return array
     */
    public function getAudioStreams()
    {
        return $this->audioStreams;
    }

    /**
     * @param array $audioStreams
     * @return self
     */
    public function setAudioStreams(array $audioStreams)
    {
        $this->audioStreams = $audioStreams;

        return $this;
    }

    /**
     * @return int
     */
    public function getBitrateBps()
    {
        return $this->bitrateBps;
    }

    /**
     * @param int $bitrateBps
     * @return self
     */
    public function setBitrateBps($bitrateBps)
    {
        $this->bitrateBps = $bitrateBps;

        return $this;
    }

    /**
     * @return string
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * @param string $container
     * @return self
     */
    public function setContainer($container)
    {
        $this->container = $container;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreationTime()
    {
        return $this->creationTime;
    }

    /**
     * @param string $creationTime
     * @return self
     */
    public function setCreationTime($creationTime)
    {
        $this->creationTime = $creationTime;

        return $this;
    }

    /**
     * @return int
     */
    public function getDurationMs()
    {
        return $this->durationMs;
    }

    /**
     * @param int $durationMs
     * @return self
     */
    public function setDurationMs($durationMs)
    {
        $this->durationMs = $durationMs;

        return $this;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param string $fileName
     * @return self
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * @return int
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }

    /**
     * @param int $fileSize
     * @return self
     */
    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;

        return $this;
    }

    /**
     * @return string
     */
    public function getFileType()
    {
        return $this->fileType;
    }

    /**
     * @param string $fileType
     * @return self
     */
    public function setFileType($fileType)
    {
        $this->fileType = $fileType;

        return $this;
    }

    /**
     * @return \Nekland\YoutubeApi\Transformer\Model\Standard\Location
     */
    public function getRecordingLocation()
    {
        return $this->recordingLocation;
    }

    /**
     * @param \Nekland\YoutubeApi\Transformer\Model\Standard\Location $recordingLocation
     * @return self
     */
    public function setRecordingLocation($recordingLocation)
    {
        $this->recordingLocation = $recordingLocation;

        return $this;
    }

    /**
     * @return array
     */
    public function getVideoStreams()
    {
        return $this->videoStreams;
    }

    /**
     * @param array $videoStreams
     * @return self
     */
    public function setVideoStreams(array $videoStreams)
    {
        $this->videoStreams = $videoStreams;

        return $this;
    }
}
