<?php

/**
 * This file is a part of nekland youtube api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\YoutubeApi\Transformer\Model\Standard;


class Url
{
    /**
     * @var string
     */
    private $default;

    /**
     * @var array
     */
    private $localized;

    /**
     * @param string $localization
     * @return string
     * @throws \InvalidArgumentException
     */
    public function getUrl($localization = null)
    {
        if (!$localization) {
            return $this->default;
        }

        foreach ($this->localized as $localeUrl) {
            if ($localeUrl['language'] === $localization) {
                return $localeUrl['value'];
            }
        }

        throw new \InvalidArgumentException(sprintf(
            'The language "%s" is not known for url "%s"', $localization, $this->default
        ));
    }

    /**
     * @return string
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * @param string $default
     * @return self
     */
    public function setDefault($default)
    {
        $this->default = $default;

        return $this;
    }

    /**
     * @return array
     */
    public function getLocalized()
    {
        return $this->localized;
    }

    /**
     * @param array $localized
     * @return self
     */
    public function setLocalized(array $localized)
    {
        $this->localized = $localized;

        return $this;
    }
}
