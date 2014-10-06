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


class Hydrator implements HydratorInterface
{
    /**
     * @param string $class
     * @param array  $data
     * @return \Nekland\YoutubeApi\Transformer\Model\Collection
     */
    public function hydrateCollection($class, $data)
    {
        $collection = $this->hydrate('\Nekland\YoutubeApi\Transformer\Model\Collection', $data, ['items']);

        foreach ($data['items'] as $item) {
            $collection->add($this->hydrate($class, $item));
        }

        return $collection;
    }

    /**
     * Hydrate a class
     * Create sub classes and hydrate them if needed
     *
     * @param string $class
     * @param mixed  $data
     * @param array  $exclude
     * @return mixed
     */
    public function hydrate($class, $data, array $exclude = [])
    {
        if ($class === 'DateTime') {
            return new \DateTime($data);
        }

        $item = new $class();
        $reflection = new \ReflectionClass($item);

        foreach ($data as $dataKey => $dataItem) {
            if (in_array($dataKey, $exclude)) {
                continue;
            }

            $setter = 'set' . ucfirst($dataKey);

            $method = $reflection->getMethod($setter);
            $parameter = $method->getParameters();
            $parameter = $parameter[0];

            if ($parameter->getClass() !== null) {
                $subItemClass = $parameter->getClass();
                $item->$setter($this->hydrate($subItemClass->getName(), $dataItem));
            } else {
                $item->$setter($dataItem);
            }
        }

        return $item;
    }
}
