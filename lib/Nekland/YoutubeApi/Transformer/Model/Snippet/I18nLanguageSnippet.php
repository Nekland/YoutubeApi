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


class I18nLanguageSnippet
{
    /**
     * @var string
     */
    private $hl;

    /**
     * @var string
     */
    private $name;

    /**
     * @return string
     */
    public function getHl()
    {
        return $this->hl;
    }

    /**
     * @param string $hl
     * @return self
     */
    public function setHl($hl)
    {
        $this->hl = $hl;

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
