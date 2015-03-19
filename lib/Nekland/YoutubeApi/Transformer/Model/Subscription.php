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


class Subscription extends Item
{
    /**
     * @var Snippet\SubscriptionSnippet
     */
    private $snippet;

    /**
     * @var Details\SubscriptionDetails
     */
    private $contentDetails;

    /**
     * @var Snippet\SubscriberSnippet
     */
    private $subscriberSnippet;

    /**
     * @return Details\SubscriptionDetails
     */
    public function getContentDetails()
    {
        return $this->contentDetails;
    }

    /**
     * @param Details\SubscriptionDetails $contentDetails
     * @return self
     */
    public function setContentDetails(Details\SubscriptionDetails $contentDetails)
    {
        $this->contentDetails = $contentDetails;

        return $this;
    }

    /**
     * @return Snippet\SubscriptionSnippet
     */
    public function getSnippet()
    {
        return $this->snippet;
    }

    /**
     * @param Snippet\SubscriptionSnippet $snippet
     * @return self
     */
    public function setSnippet(Snippet\SubscriptionSnippet $snippet)
    {
        $this->snippet = $snippet;

        return $this;
    }

    /**
     * @return Snippet\SubscriberSnippet
     */
    public function getSubscriberSnippet()
    {
        return $this->subscriberSnippet;
    }

    /**
     * @param Snippet\SubscriberSnippet $subscriberSnippet
     * @return self
     */
    public function setSubscriberSnippet(Snippet\SubscriberSnippet $subscriberSnippet)
    {
        $this->subscriberSnippet = $subscriberSnippet;

        return $this;
    }
}
