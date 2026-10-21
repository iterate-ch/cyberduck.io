Title: New command line options
Date: 2015-02-24 08:44
Modified: 2015-02-24 08:45
Category: Cyberduck
Author: David Kocher
Slug: new-command-line-options
Summary: We have put some more love into duck, the CLI version of Cyberduck. There are now several new options to facilitate automation jobs. –retry <count> allows to repeat failed connections. -y will dismiss all prompts and warnings with Yes by default. –throttle <bytes/second> allows to throttle transfers. plus the most interesting to improve throughput is

We have put some more love into *duck*, the [CLI version of Cyberduck](https://duck.sh). There are now several new options to facilitate automation jobs.

-   `--retry <count>` allows to repeat failed connections.
-   `-y` will dismiss all prompts and warnings with *Yes* by default.
-   `--throttle <bytes/second>` allows to throttle transfers.

plus the most interesting to improve throughput is

-   `--parallel <connections>`

to open multiple concurrent connections for transfers ([#1135](https://trac.cyberduck.io/ticket/1135)). For downloads, larger files will be segmented into multiple parts ([#4498](https://trac.cyberduck.io/ticket/4498)) to transfer with multiple connections and assembled again when complete. This feature will also find its way into version [4.7](https://trac.cyberduck.io/milestone/4.7) of Cyberduck.
