<?php

/**
 * This file is a part of nekland youtube api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\YoutubeApi\Transformer\Model\Snippet;


class VideoCategorySnippet
{
    /**
     * @var string
     */
    private $channelId;

    /**
     * @var string
     */
    private $title;

    /**
     * @var bool
     */
    private $assignable;

    /**
     * @return boolean
     */
    public function isAssignable()
    {
        return $this->assignable;
    }

    /**
     * @param boolean $assignable
     * @return self
     */
    public function setAssignable($assignable)
    {
        $this->assignable = $assignable;

        return $this;
    }

    /**
     * @return string
     */
    public function getChannelId()
    {
        return $this->channelId;
    }

    /**
     * @param string $channelId
     * @return self
     */
    public function setChannelId($channelId)
    {
        $this->channelId = $channelId;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }
}
