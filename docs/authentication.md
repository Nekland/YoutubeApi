Authentication Reference
========================

There is not a single way to authenticate into YoutubeAPI. You can choose the authentication you want to use into your
project.

Public API access
-----------------

To make this authentication work, you just have to generate an APIKEY from the google developer console.
You can do it like that:

1. Go to [https://console.developers.google.com/project](https://console.developers.google.com/project);
2. Create your project if it's not already in the project list (we do not care about the project id);
3. Click on the name of your project in the list;
4. Click on APIS & AUTH > API and on "YouTube Data API v3" in the API list and click on "OFF" button to make it becoming "ON";
5. Click on APIS & AUTH > Credentials;
6. In the section `Public API access`, create a new key of type `Server Key` and specify your IP address.

> Be careful, Google take care of IPv6.

> This procedure can change since we do not decide of the google website usability :) .


Now you have your `APIKEY` everything is easy :) .

```php
<?php

$youtube = new Youtube();
$youtube->authenticate(
    'PublicApiAccessAuth',
    ['key' => 'MY_YOUTUBE_APIKEY']
);
```

Service Account (via OAuth)
----------------------------

To make this authentication work, you need to generate a P12 key certificate and an API email from the google developer console.
You can do it like that:

1. Go to [https://console.developers.google.com/project](https://console.developers.google.com/project);
2. Create your project if it's not already in the project list (we do not care about the project id);
3. Click on the name of your project in the list;
4. Click on APIS & AUTH > API and on "YouTube Data API v3" in the API list and click on "OFF" button to make it becoming "ON";
5. Click on APIs & AUTH > Credentials;
6. In the section `OAuth`, create a new Client ID of type `Service Account`
7. Click on "Generate new P12 key" to download your certificate key

> This procedure can change since we do not decide of the google website usability :) .

Now you have your key file you can use `YoutubeApi` like that:

```php
<?php

$youtube = new Youtube();
$youtube->authenticate(
    'ServiceAuth',
    ['cert_file' => 'my_google_certificate', 'email' => 'myemail_for_google_service@googleapi_etc.com']
);
```
