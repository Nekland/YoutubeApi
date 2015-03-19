<?php

namespace spec\Nekland\YoutubeApi\Transformer;

use Nekland\YoutubeApi\Transformer\Hydrator\HydratorInterface;
use PhpSpec\ObjectBehavior;

class ModelTransformerSpec extends ObjectBehavior
{
    public function let(HydratorInterface $hydrator)
    {
        $this->beConstructedWith($hydrator);
    }

    public function it_can_hydrate_collections(HydratorInterface $hydrator)
    {
        // Data
        $rawData = '{"kind": "youtube#videoListResponse"}';
        $data    = json_decode($rawData, true);

        // what should happens
        $hydrator->hydrateCollection('\Nekland\YoutubeApi\Transformer\Model\Video', $data)->shouldBeCalled();

        $this->transform($rawData);
    }
}
