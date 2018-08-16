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
use Nekland\YoutubeApi\Exception\AuthException;
use Nekland\YoutubeApi\Exception\MissingOptionException;

/**
 * Class ServiceAuth
 *
 * Options:
 *      email: google api service account
 *      cert_file: path to the file that contain the certificate
 *      cert_password: password to decrypt the (p12) certificate
 */
class ServiceAuth implements AuthInterface
{
    /**
     * @var array
     */
    protected $options;

    /**
     * @var \Guzzle\Http\ClientInterface
     */
    protected $client;

    /**
     * @param \Guzzle\Http\ClientInterface $client
     */
    public function __construct(\Guzzle\Http\ClientInterface $client = null)
    {
        if (null === $client) {
            $this->client = new Client();
        } else {
            $this->client = $client;
        }
    }

    /**
     * @param \Guzzle\Http\Message\Request $request
     */
    public function auth(\Guzzle\Http\Message\Request $request)
    {
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
            'iss'   => $this->getIss(),
            'scope' => 'https://www.googleapis.com/auth/youtube',
            'aud'   =>'https://www.googleapis.com/oauth2/v4/token',
            'exp'   => time() + 60,
            'iat'   => time()
        ));

        $jws->sign($this->getPrivateKey());

        $response = $this->client->post(
            'https://www.googleapis.com/oauth2/v4/token',
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
     */
    protected function getIss()
    {
        return $this->getOption('email');
    }

    /**
     * @return string
     * @throws \Nekland\YoutubeApi\Exception\AuthException
     */
    protected function getPrivateKey()
    {
        $file            = $this->getOption('cert_file');
        $res             = array();
        $brutCertificate = file_get_contents($file);

        $worked = openssl_pkcs12_read($brutCertificate, $res, $this->getOption('cert_password', 'notasecret'));

        if ($worked) {
            return $res['pkey'];
        }

        throw new AuthException(sprintf('The key to open the p12 "%" file looks wrong, or the file is malformed.', $file));
    }

    /**
     * @param string $option
     * @param mixed  $default
     * @return mixed
     * @throws \Nekland\YoutubeApi\Exception\MissingOptionException
     */
    protected function getOption($option, $default=null)
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
