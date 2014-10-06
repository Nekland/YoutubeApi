<?php

/**
 * This file is a part of nekland youtube api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

use Nekland\BaseApi\Cache\CacheStrategyInterface;
use Nekland\BaseApi\Http\Event\RequestEvent;
use Nekland\BaseApi\Cache\Provider\CacheProviderInterface;

class Etag implements CacheStrategyInterface
{
    /**
     * @var CacheProviderInterface
     */
    private $provider;

    public function execute(RequestEvent $event)
    {
        $request = $event->getRequest();
        $etag = $this->provider->get($request->getId());

        if ($etag) {
            $request->setHeader('If-None-Match', $etag);
        }
    }

    public function cache(RequestEvent $event)
    {
        $body = json_decode($event->getResponse()->getBody(), true);
        $this->provider->set($event->getRequest()->getId(), $body['etag']);
    }

    public function setProvider(CacheProviderInterface $provider)
    {
        $this->provider = $provider;
    }
}
