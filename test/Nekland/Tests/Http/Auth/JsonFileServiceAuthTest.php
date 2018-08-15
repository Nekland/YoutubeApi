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
use Guzzle\Http\Message\Request;
use Nekland\YoutubeApi\Http\Auth\JsonFileServiceAuth;

class JsonFileServiceAuthTest extends \PHPUnit_Framework_TestCase
{
    use AuthServiceTrait;

    public function testItConstructWithOrWithoutClient()
    {
        $auth = new JsonFileServiceAuth();
        $this->assertInstanceOf(JsonFileServiceAuth::class, $auth);

        $auth = new JsonFileServiceAuth($this->prophesize(ClientInterface::class)->reveal());
        $this->assertInstanceOf(JsonFileServiceAuth::class, $auth);
    }

    public function testItAddsATokenToTheRequest()
    {
        $auth = new JsonFileServiceAuth($this->getClientMock());

        // This file is a fake, of course.
        $file = __DIR__ . '/../../../../test_data/given_by_google.json';

        $auth->setOptions(['json_file' => $file]);
        $request = new Request('POST', 'http://fake.com');
        $auth->auth($request);

        $this->assertContains('ya29.1.AADHN_WnGjqYiAcnONRLFDOfXia5XZLFO4RSyEhWtQPAvYpgPYiQj89c7UsrAs5_',(string)$request->getHeader('Authorization'));
    }

    /**
     * @expectedException \Nekland\YoutubeApi\Exception\MissingOptionException
     */
    public function testItThrowsExceptionIfOptionMissing()
    {
        $auth = new JsonFileServiceAuth($this->prophesize(ClientInterface::class)->reveal());
        $request = new Request('POST', 'http://fake.com');
        $auth->auth($request);
    }
}
