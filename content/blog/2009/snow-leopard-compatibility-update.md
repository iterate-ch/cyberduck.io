Title: Snow Leopard Compatibility Update
Date: 2009-08-26 13:27
Modified: 2009-08-26 13:27
Category: Cyberduck
Author: David Kocher
Slug: snow-leopard-compatibility-update
Summary: Update. Cyberduck 3.3 has been released. The new cat will be let out of the bag next month earlier than anticipated. Cyberduck is getting ready. Lot of work has been put into Snow Leopard compatibility recently with a shift to Rococoa instead of the deprecated bindings used before. Thanks to Duncan McGregor and the Rococoa

**Update**. [Cyberduck 3.3 has been released](http://lists.cyberduck.ch/pipermail/cyberduck-news/2009-November/000050.html).

The new cat will be let out of the bag next month earlier than anticipated. Cyberduck is getting [ready](http://trac.cyberduck.ch/milestone/3.3). Lot of work has been put into [Snow Leopard](http://www.apple.com/macosx/snowleopard/) compatibility recently with a shift to [Rococoa](http://code.google.com/p/rococoa/) instead of the deprecated bindings used before. Thanks to Duncan McGregor and the Rococoa community for their work which serves as the new solid foundation for Cyberduck to build upon.

Please test the [latest beta release](http://update.cyberduck.ch/beta) to help make the transition as smooth as possible. Be sure to [report](http://trac.cyberduck.ch/newticket) any rough edges you may find.

The beta currently has the following limitations:

-   No MobileMe bookmark synchronization when running as 64bit application. Use the Finder Info panel to select *Open in 32-bit mode* for the Cyberduck.app application bundle if you need this feature.
-   No AppleScript support beside basic *Open URL* events from third party applications like web browsers.
-   No Dashboard Widget whatsoever as this uses the AppleScript interface.

The current beta requires an Intel processor and Mac OS X 10.5 or later. Progress is tracked in ticket [#3039](http://trac.cyberduck.ch/ticket/3039).
