<?php

/**
 * This file is a part of nekland youtube api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\YoutubeApi\Transformer\Hydrator;


interface HydratorInterface
{
    /**
     * Hydrate a class
     * Create sub classes and hydrate them if needed
     *
     * @param string $class
     * @param mixed  $data
     * @param array  $exclude
     * @return mixed
     */
    public function hydrate($class, $data, array $exclude = []);

    /**
     * @param string $class
     * @param array  $data
     * @return \Nekland\YoutubeApi\Transformer\Model\Collection
     */
    public function hydrateCollection($class, $data);
}
