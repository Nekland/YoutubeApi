Nekland Youtube Api
===================

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Nekland/YoutubeApi/badges/quality-score.png?s=eaea1fb6e36355023b61e50da0143f144e2e9e57)](https://scrutinizer-ci.com/g/Nekland/YoutubeApi/) [![Build Status](https://travis-ci.org/Nekland/YoutubeApi.svg?branch=master)](https://travis-ci.org/Nekland/YoutubeApi) [![Gitter chat](https://badges.gitter.im/Nekland/YoutubeApi.png)](https://gitter.im/Nekland/YoutubeApi)

Let's make usage of youtube easy, cool, and maintainable !



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
$info = $youtube->api('videos')->getById('RnpyRe_7jZA');
```

### More

We have a more complete documentation in the [docs](docs/1.index.md) folder.

Thanks
------

This library is inspired by [php-github-api](https://github.com/KnpLabs/php-github-api) from KnpLabs.

Any contribution is lovely accepted. And contributors, we love you.
