<?php

namespace spec\Nekland\YoutubeApi\Http\Auth;

use Nekland\BaseApi\Http\Event\RequestEvent;
use Nekland\BaseApi\Http\Request;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PublicApiAccessSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Nekland\YoutubeApi\Http\Auth\PublicApiAccess');
        $this->shouldHaveType('Nekland\BaseApi\Http\Auth\AuthStrategyInterface');
    }

    public function it_should_add_a_key_to_the_url_of_the_request(RequestEvent $requestEvent, Request $request)
    {
        $requestEvent->getRequest()->willReturn($request);

        $request->getPath()->willReturn('http://foo.bar/api');
        $request->setParameter('key','my_custom_api_key')->shouldBeCalled();

        $this->setOptions(['key' => 'my_custom_api_key']);
        $this->auth($requestEvent);
    }
}
