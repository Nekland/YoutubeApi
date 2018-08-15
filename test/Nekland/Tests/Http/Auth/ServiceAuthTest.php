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
    use AuthServiceTrait;

    /**
     * @test
     */
    public function shouldBeConstructWithOrWithoutClient()
    {
        $auth = new ServiceAuth();
        $this->assertInstanceOf('Nekland\\YoutubeApi\\Http\\Auth\\ServiceAuth', $auth);

        $auth = new ServiceAuth($this->prophesize('Guzzle\\Http\\ClientInterface')->reveal());
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
}
