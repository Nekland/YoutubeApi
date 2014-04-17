<?php

/**
 * This file is a part of nekland youtube api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\Tests\Http;


use Nekland\YoutubeApi\Http\HttpClient;

class HttpClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function isInitializable()
    {
        $client = new HttpClient();
        $this->assertInstanceOf('Nekland\\YoutubeApi\\Http\\HttpClient', $client);
    }

    /**
     * @test
     */
    public function shouldAcceptASetOfOptions()
    {
        $client = new HttpClient(['user_agent' => 'Nekland Website']);
        $this->assertInstanceOf('Nekland\\YoutubeApi\\Http\\HttpClient', $client);
    }
}
