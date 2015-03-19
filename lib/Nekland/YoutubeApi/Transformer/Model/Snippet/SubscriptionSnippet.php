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


class SubscriptionSnippet extends Snippet
{
    /**
     * @var string
     */
    private $channelTitle;

    /**
     * @var string
     */
    private $channelId;

    /**
     * @var array
     */
    private $resourceId;

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
     * @return array
     */
    public function getResourceId()
    {
        return $this->resourceId;
    }

    /**
     * @param array $resourceId
     * @return self
     */
    public function setResourceId($resourceId)
    {
        $this->resourceId = $resourceId;

        return $this;
    }
}
