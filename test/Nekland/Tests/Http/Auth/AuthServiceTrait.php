<?php
/**
 * This file is a part of YoutubeApi package.
 *
 * (c) Nekland <dev@nekland.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\Tests\Http\Auth;


use Guzzle\Http\ClientInterface;
use Guzzle\Http\Message\EntityEnclosingRequestInterface;
use Guzzle\Http\Message\Response;
use Prophecy\Argument;

trait AuthServiceTrait
{
    protected function getClientMock()
    {
        $client = $this->prophesize(ClientInterface::class);
        $request = $this->prophesize(EntityEnclosingRequestInterface::class);
        $response = $this->prophesize(Response::class);

        $response->getBody(Argument::cetera())->willReturn($this->getGoogleResponse());
        $request->send(Argument::any())->shouldBeCalled()->willReturn($response->reveal());
        $client->post(Argument::cetera())->willReturn($request->reveal());

        return $client->reveal();
    }

    protected function getGoogleResponse()
    {
        return '{
    "access_token" : "ya29.1.AADHN_WnGjqYiAcnONRLFDOfXia5XZLFO4RSyEhWtQPAvYpgPYiQj89c7UsrAs5_",
    "token_type" : "Bearer",
    "expires_in" : 3600
}';
    }
}
