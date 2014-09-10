1.0.0 (2014-09-XX)
==================

Most changes are because of the new base api release.

New features
------------

* Compatibility with HHVM

Changes
-----------

* Configuring authentication is now possible by using the method `useAuthentication`
* Getting API classes is done via getter, before: `->api('videos')`, now: `->getVideosApi()` this method is IDE-friendly
