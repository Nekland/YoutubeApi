<?php

/**
 * This file is a part of nekland youtube api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\YoutubeApi\Transformer\Model\BrandingSettings;


class BrandingSettings
{
    /**
     * @var Channel
     */
    private $channel;

    /**
     * @var Image
     */
    private $image;

    /**
     * @var array
     */
    private $hints;

    /**
     * @return Channel
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * @param Channel $channel
     * @return self
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * @return array
     */
    public function getHints()
    {
        return $this->hints;
    }

    /**
     * @param array $hints
     * @return self
     */
    public function setHints(array $hints)
    {
        $this->hints = $hints;

        return $this;
    }

    /**
     * @return Image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param Image $image
     * @return self
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }
}
