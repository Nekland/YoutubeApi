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

class VideoSnippet extends Snippet
{
    /**
     * @var string
     */
    private $channelId;

    /**
     * @var string
     */
    private $channelTitle;

    /**
     * @var string[]
     */
    private $tags;

    /**
     * @var string
     */
    private $categoryId;

    /**
     * @var string
     */
    private $liveBroadcastContent;

    /**
     * @return string
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param string $categoryId
     * @return self
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

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
    public function getChannelTitle()
    {
        return $this->channelTitle;
    }

    /**
     * @param string $channelTitle
     * @return self
     */
    public function setChannelTitle($channelTitle)
    {
        $this->channelTitle = $channelTitle;

        return $this;
    }

    /**
     * @return string
     */
    public function getLiveBroadcastContent()
    {
        return $this->liveBroadcastContent;
    }

    /**
     * @param string $liveBroadcastContent
     * @return self
     */
    public function setLiveBroadcastContent($liveBroadcastContent)
    {
        $this->liveBroadcastContent = $liveBroadcastContent;

        return $this;
    }

    /**
     * @return \string[]
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param \string[] $tags
     * @return self
     */
    public function setTags(array $tags)
    {
        $this->tags = $tags;

        return $this;
    }
}
