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


class I18nRegionSnippet
{
    /**
     * @var string
     */
    private $gl;

    /**
     * @var string
     */
    private $name;

    /**
     * @return string
     */
    public function getGl()
    {
        return $this->gl;
    }

    /**
     * @param string $gl
     * @return self
     */
    public function setGl($gl)
    {
        $this->gl = $gl;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
