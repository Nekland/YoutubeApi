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


class PlaylistItemDetails
{
    /**
     * @var string
     */
    private $videoId;

    /**
     * @var string
     */
    private $startAt;

    /**
     * @var string
     */
    private $endAt;

    /**
     * @var string
     */
    private $note;

    /**
     * @return string
     */
    public function getEndAt()
    {
        return $this->endAt;
    }

    /**
     * @param string $endAt
     * @return self
     */
    public function setEndAt($endAt)
    {
        $this->endAt = $endAt;

        return $this;
    }

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param string $note
     * @return self
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * @return string
     */
    public function getStartAt()
    {
        return $this->startAt;
    }

    /**
     * @param string $startAt
     * @return self
     */
    public function setStartAt($startAt)
    {
        $this->startAt = $startAt;

        return $this;
    }

    /**
     * @return string
     */
    public function getVideoId()
    {
        return $this->videoId;
    }

    /**
     * @param string $videoId
     * @return self
     */
    public function setVideoId($videoId)
    {
        $this->videoId = $videoId;

        return $this;
    }
}
