<?php

/**
 * This file is a part of nekland youtube api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\YoutubeApi\Transformer\Model\Status;


class SimpleStatus
{
    /**
     * @var string
     */
    private $privacyStatus;

    /**
     * @return string
     */
    public function getPrivacyStatus()
    {
        return $this->privacyStatus;
    }

    /**
     * @param string $privacyStatus
     * @return self
     */
    public function setPrivacyStatus($privacyStatus)
    {
        $this->privacyStatus = $privacyStatus;

        return $this;
    }
}
