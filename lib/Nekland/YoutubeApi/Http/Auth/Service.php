<?php

/**
 * This file is a part of nekland youtube api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\YoutubeApi\Http\Auth;


use Guzzle\Http\Client;
use Namshi\JOSE\JWS;
use Nekland\BaseApi\Http\Auth\AuthInterface;
use Nekland\BaseApi\Http\Auth\AuthStrategyInterface;
use Nekland\BaseApi\Http\Event\RequestEvent;
use Nekland\YoutubeApi\Exception\AuthException;
use Nekland\YoutubeApi\Exception\MissingOptionException;

class Service implements AuthStrategyInterface
{
    /**
     * @var array
     */
    private $options;

    /**
     * @param RequestEvent $request
     */
    public function auth(RequestEvent $requestEvent)
    {
        $request = $requestEvent->getRequest();
        if (!$request->hasHeader('Authorization')) {
            $token = $this->getToken();
            $request->addHeader('Authorization', 'Bearer '.$token);
        }
    }

    /**
     * @return string
     */
    private function getToken()
    {
        $jws = new JWS('RS256');
        $jws->setPayload(array(
            'iss'   => $this->getOption('email'),
            'scope' => 'https://www.googleapis.com/auth/youtube',
            'aud'   =>'https://accounts.google.com/o/oauth2/token',
            'exp'   => time() + 60,
            'iat'   => time()
        ));

        $jws->sign($this->getPrivateKey());

        $response = $this->client->post(
            'https://accounts.google.com/o/oauth2/token',
            ['Content-Type' => 'application/x-www-form-urlencoded'],
            [
                'grant_type' => 'urn:ietf:params:oauth:grant-type:jwt-bearer',
                'assertion'  => $jws->getTokenString()
            ],
            ['debug' => true]
        );

        $finalArray = json_decode((string) $response->send()->getBody(), true);

        return $finalArray['access_token'];
    }

    /**
     * @return string
     * @throws \Nekland\YoutubeApi\Exception\AuthException
     */
    private function getPrivateKey()
    {
        $file            = $this->getOption('cert_file');
        $res             = array();
        $brutCertificate = file_get_contents($file);

        $worked = openssl_pkcs12_read($brutCertificate, $res, $this->getOption('cert_password', 'notasecret'));

        if ($worked) {
            return $res['pkey'];
        }

        throw new AuthException(sprintf('The certificate "%" looks wrong PHP cannot open it.', $file));
    }

    /**
     * @param string $option
     * @param mixed  $default
     * @return mixed
     * @throws \Nekland\YoutubeApi\Exception\MissingOptionException
     */
    private function getOption($option, $default=null)
    {
        if (isset($this->options[$option])) {
            return $this->options[$option];
        }

        if (null !== $default) {
            return $default;
        }

        throw new MissingOptionException(sprintf('The option "%s" is missing on the configuration of "%".', $option, get_class($this)));
    }

    /**
     * @param array $options
     * @return AuthInterface
     */
    public function setOptions(array $options)
    {
        $this->options = $options;

        return $this;
    }
}
