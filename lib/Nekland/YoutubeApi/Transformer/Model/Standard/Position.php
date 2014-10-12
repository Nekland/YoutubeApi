<?php
/**
 * This file is a part of a nekland library
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\YoutubeApi\Transformer\Model\Standard;


class Position
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $cornerPosition;

    /**
     * @return string
     */
    public function getCornerPosition()
    {
        return $this->cornerPosition;
    }

    /**
     * @param string $cornerPosition
     * @return self
     */
    public function setCornerPosition($cornerPosition)
    {
        $this->cornerPosition = $cornerPosition;

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
