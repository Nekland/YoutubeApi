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


class Search extends Item
{
    /**
     * @var array
     */
    private $id;

    /**
     * @var Snippet\SearchSnippet
     */
    private $snippet;

    /**
     * @return array
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param array $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return Snippet\SearchSnippet
     */
    public function getSnippet()
    {
        return $this->snippet;
    }

    /**
     * @param Snippet\SearchSnippet $snippet
     * @return self
     */
    public function setSnippet($snippet)
    {
        $this->snippet = $snippet;

        return $this;
    }
}
