<?php

/**
 * This file is a part of nekland base api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\YoutubeApi\Transformer\Model\Details;


class PlaylistDetails
{
    /**
     * @var string
     */
    private $itemCount;

    /**
     * @return string
     */
    public function getItemCount()
    {
        return $this->itemCount;
    }

    /**
     * @param string $itemCount
     * @return self
     */
    public function setItemCount($itemCount)
    {
        $this->itemCount = $itemCount;

        return $this;
    }
}
