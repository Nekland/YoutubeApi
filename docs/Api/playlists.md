The Playlist API
================

First retrieve the playlist api object (`Nekland\YoutubeApi\Api\Playlists`).

```php
<?php

$youtube = new Youtube();
$playlistApi = $youtube->api('playlists');
```

List playlists
--------------

You can refer to this page of doc: https://developers.google.com/youtube/v3/docs/playlists/list

### List by id

```php
<?php

array public Playlists::listById($id [, array $parts = ['snippet'] [, array $otherParameters= [] ]])
```

* `id` is the id of the playlist you want to retrieve
* `parts` is an array of data types you want (see [part parameter here](https://developers.google.com/youtube/v3/docs/playlists/list))
  Example: `['snippet', 'suggestion']`
* `otherParameters` is an array of optional parameters, see the google documentation to checkout [optional parameters](https://developers.google.com/youtube/v3/docs/playlists/list).

The response given is this one: https://developers.google.com/youtube/v3/docs/playlists/list#response

> The list of `item` will of course be with only one.

### Get By Id

```php
<?php

array public Playlists::getById(string $id [, array $parts = ['snippet'] [, array $otherParameters = [] ]])
```

This is an alias for `listById` method returning only a [playlist resource](https://developers.google.com/youtube/v3/docs/playlists#resource).

### Find By

```php
<?php

array public Playlists::listBy(array $filters [, array $parts = ['snippet'] [, array $otherParameters = [] ]])
```

* `filters` is an array of filter data (see [part parameter here](https://developers.google.com/youtube/v3/docs/playlists/list))
  Example: `['id' => 'ID_OF_YOUTUBE_PLAYLIST']`
* `parts` is an array of data types you want (see [part parameter here](https://developers.google.com/youtube/v3/docs/playlists/list))
  Example: `['snippet', 'suggestion']`
* `otherParameters` is an array of optional parameters, see the google documentation to checkout [optional parameters](https://developers.google.com/youtube/v3/docs/playlists/list).


The response given is this one: https://developers.google.com/youtube/v3/docs/playlists/list#response .

Quota
-----

You can't infinitely retrieve playlists. The "cost" in "quota" of youtube api work is documented by Google on his own documentation.

This quota cost is different depending on the `parts` you ask on each query.

The day this lines are written, it's:

* contentDetails: 2
* id: 0
* player: 0
* snippet: 2
*status: 2

> For now the playlist api only retrieve information. More coming ! PRs are accepted on the topic :) .
