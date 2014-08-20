The Video API
=============

First retrieve the video api object (`Nekland\YoutubeApi\Api\Videos`).

```php
<?php

$youtube = new Youtube();
$videoApi = $youtube->api('videos');
```

List videos
-----------

You can refer to this page of doc: https://developers.google.com/youtube/v3/docs/videos/list

### List by id

```php
<?php

array public Videos::listById($id [, array $parts = ['snippet'] [, array $otherParameters= [] ]])
```

* `id` is the id of the video you want to retrieve
* `parts` is an array of data types you want (see [part parameter here](https://developers.google.com/youtube/v3/docs/videos/list))
  Example: `['snippet', 'suggestion']`
* `otherParameters` is an array of optional parameters, see the google documentation to checkout [optional parameters](https://developers.google.com/youtube/v3/docs/videos/list).

The response given is this one: https://developers.google.com/youtube/v3/docs/videos/list#response

> The list of `item` will of course be with only one.

### Get By Id

```php
<?php

array public Videos::getById(string $id [, array $parts = ['snippet'] [, array $otherParameters = [] ]])
```

This is an alias for `listById` method returning only a [video resource](https://developers.google.com/youtube/v3/docs/videos#resource).

### Find By

```php
<?php

array public Videos::listBy(array $filters [, array $parts = ['snippet'] [, array $otherParameters = [] ]])
```

* `filters` is an array of filter data (see [part parameter here](https://developers.google.com/youtube/v3/docs/videos/list))
  Example: `['id' => 'ID_OF_YOUTUBE_VIDEO']`
* `parts` is an array of data types you want (see [part parameter here](https://developers.google.com/youtube/v3/docs/videos/list))
  Example: `['snippet', 'suggestion']`
* `otherParameters` is an array of optional parameters, see the google documentation to checkout [optional parameters](https://developers.google.com/youtube/v3/docs/videos/list).


The response given is this one: https://developers.google.com/youtube/v3/docs/videos/list#response .

Quota
-----

You can't infinitely retrieve videos. The "cost" in "quota" of youtube api work is documented by Google on his own documentation.

This quota cost is different depending on the `parts` you ask on each query.

The day this lines are written, it's:

* contentDetails: 2
* fileDetails: 1
* id: 0
* liveStreamingDetails: 2
* player: 0
* processingDetails: 1
* recordingDetails: 2
* snippet: 2
* statistics: 2
* status: 2
* suggestions: 1
* topicDetails: 2

> For now the video api only retrieve information. More coming ! PRs are accepted on the topic :) .
