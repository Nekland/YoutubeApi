<?php

namespace spec\Nekland\YoutubeApi\Http\Auth;

use Nekland\BaseApi\Http\AbstractHttpClient;
use Nekland\BaseApi\Http\Event\RequestEvent;
use Nekland\BaseApi\Http\Request;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ServiceSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Nekland\YoutubeApi\Http\Auth\Service');
        $this->shouldHaveType('Nekland\BaseApi\Http\Auth\AuthStrategyInterface');
    }

    public function it_should_do_nothing_if_header_already_defined(RequestEvent $requestEvent, Request $request)
    {
        $requestEvent->getRequest()->willReturn($request);
        $request->hasHeader('Authorization')->willReturn(true);
        $requestEvent->getClient()->shouldNotBeCalled();

        $this->auth($requestEvent);
    }

    public function it_should_send_a_request_and_add_a_header(RequestEvent $requestEvent, Request $request, AbstractHttpClient $client)
    {
        $requestEvent->getRequest()->willReturn($request);
        $requestEvent->getClient()->willReturn($client);

        $request->hasHeader(Argument::any())->willReturn(false);
        $request->setHeader('Authorization', 'Bearer foobar')->shouldBeCalled();
        $client->send(Argument::type('Nekland\BaseApi\Http\Request'), Argument::any())->willReturn('{"access_token": "foobar"}');

        // Notice: this certificate is a fake one
        $this->setOptions([
            'cert_file' => __DIR__ . '/../../../../fixtures/cert.p12',
            'email'     => 'myemail_for_google_service@googleapi_etc.com'
        ]);
        $this->auth($requestEvent);
    }
}
