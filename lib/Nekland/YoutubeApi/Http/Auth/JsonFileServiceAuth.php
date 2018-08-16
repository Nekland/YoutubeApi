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

/**
 * Class JsonfileServiceAuth
 *
 * Options:
 *      json_file: the path to the json file given by Google
 */
final class JsonFileServiceAuth extends ServiceAuth
{
    /**
     * @var array
     */
    private $json;

    /**
     * {@inheritdoc}
     */
    protected function getIss()
    {
        $this->loadFile();

        return $this->json['client_email'];
    }

    /**
     * {@inheritdoc}
     */
    protected function getPrivateKey()
    {
        $this->loadFile();

        return $this->json['private_key'];

    }

    /**
     * @return array
     * @throws \Nekland\YoutubeApi\Exception\MissingOptionException if the required option is not set.
     */
    private function loadFile()
    {
        if ($this->json) {
            return $this->json;
        }

        $json = file_get_contents($this->getOption('json_file'));

        return $this->json = json_decode($json, true);
    }
}
