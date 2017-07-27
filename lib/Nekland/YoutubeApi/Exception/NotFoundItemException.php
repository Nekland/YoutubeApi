<?php
/**
 * This file is a part of a nekland library
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\YoutubeApi\Exception;


class NotFoundItemException extends \Exception
{
    public function __construct()
    {
        parent::__construct('The required item is not found, the ID you asked for is probably wrong.');
    }
}
