<?php

/**
 * This file is a part of nekland youtube api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\Tests\Api;


use Nekland\YoutubeApi\Youtube;

class TestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * @param array $data an array of method => return for the httpclient mocked
     * @return Youtube
     */
    protected function getYoutubeMock(array $data)
    {
        $httpClient = $this->getMock('Nekland\BaseApi\Http\ClientInterface');

        foreach($data as $method => $return) {
            $httpClient->expects($this->any())
                ->method($method)
                ->willReturn($return)
            ;
        }

        return new Youtube($httpClient);
    }
}
