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


class ActivitySnippet extends Snippet
{
    /**
     * @var string
     */
    private $channelTitle;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $groupId;

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
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * @param string $groupId
     * @return self
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}
