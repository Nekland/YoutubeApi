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

class TopicDetails
{
    /**
     * @var string[]
     */
    private $topicIds;

    /**
     * @var string[]
     */
    private $relevantTopicIds;

    /**
     * @return \string[]
     */
    public function getRelevantTopicIds()
    {
        return $this->relevantTopicIds;
    }

    /**
     * @param \string[] $relevantTopicIds
     * @return self
     */
    public function setRelevantTopicIds($relevantTopicIds)
    {
        $this->relevantTopicIds = $relevantTopicIds;

        return $this;
    }

    /**
     * @return \string[]
     */
    public function getTopicIds()
    {
        return $this->topicIds;
    }

    /**
     * @param \string[] $topicIds
     * @return self
     */
    public function setTopicIds($topicIds)
    {
        $this->topicIds = $topicIds;

        return $this;
    }
}
