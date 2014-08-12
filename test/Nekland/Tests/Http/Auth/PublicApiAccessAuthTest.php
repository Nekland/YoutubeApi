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

use Nekland\YoutubeApi\Http\Auth\PublicApiAccessAuth;

class PublicApiAccessAuthTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldBeConstructWithoutAnyParameter()
    {
        $auth = new PublicApiAccessAuth();
        $this->assertInstanceOf('Nekland\\YoutubeApi\\Http\\Auth\\PublicApiAccessAuth', $auth);

        $auth = new PublicApiAccessAuth($this->getMock('Guzzle\\Http\\ClientInterface'));
        $this->assertInstanceOf('Nekland\\YoutubeApi\\Http\\Auth\\PublicApiAccessAuth', $auth);
    }

    /**
     * @test
     */
    public function shouldAddParameterToUrl()
    {
        $auth = new PublicApiAccessAuth();
        $auth->setOptions(['key' => 'SOME_YOUTUBE_API_KEY']);

        $request = $this->getMockBuilder('Guzzle\Http\Message\Request')->disableOriginalConstructor()->getMock();
        $request
            ->expects($this->once())
            ->method('getUrl')
            ->willReturn('http://fake.com')
        ;
        $request
            ->expects($this->once())
            ->method('setUrl')
            ->with($this->equalTo('http://fake.com?key=SOME_YOUTUBE_API_KEY'))
        ;
        $auth->auth($request);
    }
}
