<?php

/**
 * This file is a part of nekland youtube api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\Tests\Http\Auth;


use Guzzle\Http\Message\Request;
use Nekland\YoutubeApi\Http\Auth\ServiceAuth;

class ServiceAuthTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldBeConstructWithOrWithoutClient()
    {
        $auth = new ServiceAuth();
        $this->assertInstanceOf('Nekland\\YoutubeApi\\Http\\Auth\\ServiceAuth', $auth);

        $auth = new ServiceAuth($this->getMock('Guzzle\\Http\\ClientInterface'));
        $this->assertInstanceOf('Nekland\\YoutubeApi\\Http\\Auth\\ServiceAuth', $auth);
    }

    /**
     * @test
     */
    public function shouldAddTokenToRequest()
    {
        $auth = new ServiceAuth($this->getClientMock());
        $auth->setOptions(['cert_file' => __DIR__ . '/../../../../test_data/cert.p12', 'email' => 'myemail_for_google_service@googleapi_etc.com']);
        $request = new Request('POST', 'http://fake.com');
        $auth->auth($request);

        $this->assertContains('ya29.1.AADHN_WnGjqYiAcnONRLFDOfXia5XZLFO4RSyEhWtQPAvYpgPYiQj89c7UsrAs5_',(string)$request->getHeader('Authorization'));
    }

    private function getClientMock()
    {
        $client = $this->getMock('Guzzle\\Http\\ClientInterface');

        $request = $this->getMock('Guzzle\\Http\\Message\\EntityEnclosingRequestInterface');

        $response = $this
            ->getMockBuilder('Guzzle\\Http\\Message\\Response')
            ->disableOriginalConstructor()
            ->getMock()
        ;
        $response
            ->expects($this->any())
            ->method('getBody')
            ->willReturn($this->getGoogleResponse())
        ;

        $request
            ->expects($this->any())
            ->method('send')
            ->willReturn($response)
        ;

        $client
            ->expects($this->any())
            ->method('post')
            ->willReturn($request)
        ;

        return $client;
    }

    private function getGoogleResponse()
    {
        return '{
    "access_token" : "ya29.1.AADHN_WnGjqYiAcnONRLFDOfXia5XZLFO4RSyEhWtQPAvYpgPYiQj89c7UsrAs5_",
    "token_type" : "Bearer",
    "expires_in" : 3600
}';
    }
}
