Nekland Youtube Api
===================

Let's make usage of youtube easy, cool, and maintainable !

***This library is inspired by [php-github-api](https://github.com/KnpLabs/php-github-api) from KnpLabs.***


Getting Started
---------------

### Installation

You should use composer to install it, and it's sooooo easy to install:

```bash
composer require 'nekland/youtube-api'
```

### Usage

```php
<?php

$youtube = new Youtube();

// You have to authenticate to access the youtube api
$youtube->authenticate(
    'ServiceAuth',
    ['cert_file' => 'my_google_certificate', 'email' => 'myemail_for_google_service@googleapi_etc.com']
);

// The info variable will contains an array of data returned by google
$info = $youtube->api('video')->findVideoById('RnpyRe_7jZA');
```