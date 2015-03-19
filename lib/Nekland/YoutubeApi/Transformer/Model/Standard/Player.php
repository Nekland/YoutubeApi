<?php

/**
 * This file is a part of nekland base api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\YoutubeApi\Transformer\Model\Standard;


class Player
{
    /**
     * @var string
     */
    private $embedHtml;

    /**
     * @return string
     */
    public function getEmbedHtml()
    {
        return $this->embedHtml;
    }

    /**
     * @param string $embedHtml
     * @return self
     */
    public function setEmbedHtml($embedHtml)
    {
        $this->embedHtml = $embedHtml;

        return $this;
    }
}
