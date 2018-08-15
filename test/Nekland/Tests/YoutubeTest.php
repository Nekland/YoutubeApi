<?php

/**
 * This file is a part of nekland youtube api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\Tests;


use Nekland\YoutubeApi\Youtube;

class YoutubeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldNotHaveToPassHttpClientToConstructor()
    {
        $api = new Youtube();
        $this->assertInstanceOf('Nekland\\YoutubeApi\\Http\\HttpClient', $api->getClient());
    }

    /**
     * @test
     */
    public function shouldAllowToPassHttpClientToConstructor()
    {
        $api = new Youtube($this->prophesize('Nekland\\BaseApi\\Http\\ClientInterface')->reveal());
        $this->assertInstanceOf('Nekland\\BaseApi\\Http\\ClientInterface', $api->getClient());
    }
}
