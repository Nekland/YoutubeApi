<?php

namespace spec\Nekland\YoutubeApi;

use Nekland\BaseApi\Http\Auth\AuthFactory;
use Nekland\BaseApi\Http\HttpClientFactory;
use Nekland\BaseApi\Transformer\TransformerInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Symfony\Component\EventDispatcher\EventDispatcher;

class YoutubeSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Nekland\YoutubeApi\Youtube');
    }

    public function let(
        HttpClientFactory $httpClientFactory,
        EventDispatcher $dispatcher,
        TransformerInterface $transformer,
        AuthFactory $authFactory
    ) {
        $this->beConstructedWith(
            [],
            $httpClientFactory,
            $dispatcher,
            $transformer,
            $authFactory
        );
    }
}
