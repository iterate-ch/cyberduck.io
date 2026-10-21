Title: Local Cache Size Limitation
Date: 2022-06-29 13:30
Modified: 2022-06-29 13:30
Category: Mountain Duck
Author: David Kocher
Slug: local-cache-size-limitation
Summary: Mountain Duck 4.12 introduces new settings to allow cache management — a top requested feature. In Smart Synchronization connect mode all files you work with (e.g. open, save, upload or explicitly choose to keep offline) are saved in the local cache to shorten access times and to make them editable when offline. Depending on the

[Mountain Duck 4.12](https://mountainduck.io/changelog/) introduces new settings to allow [cache management](https://docs.cyberduck.io/mountainduck/preferences/#cache-limitations) — a top requested feature.

In *Smart Synchronization* [connect mode](https://docs.cyberduck.io/mountainduck/sync/) all files you work with (e.g. open, save, upload or explicitly choose to [keep offline](https://docs.cyberduck.io/mountainduck/sync/#keep-offline)) are saved in the local cache to shorten access times and to make them editable when offline. Depending on the size of your files, this might eat up your local disk space. This can be problematic in particular for computers with a small SSD disk. The new cache management feature gives you the ability to define a retention time for files and to limit the size of the cache in general. Both settings can be enabled either separately or in combination.


<div class="wp-block-image">
<figure class="aligncenter size-large is-resized"><a href="/2022/06/Preferences_Cache_Size_Limitaion.png"><img src="/2022/06/Preferences_Cache_Size_Limitaion.png" alt="" class="wp-image-2634" width="610" height="666" /></a></figure>
</div>


The first option defines the retention time in days after which a file is purged from the cache when it was not accessed during this period. The size option is a soft limit that does apply on a bookmark basis and excludes files marked to be kept offline by the user. In any case, older files are always purged first.
