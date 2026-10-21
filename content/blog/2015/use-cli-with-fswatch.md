Title: Use Cyberduck CLI with fswatch
Date: 2015-04-23 13:00
Modified: 2015-04-23 13:00
Category: Cyberduck
Author: David Kocher
Slug: use-cli-with-fswatch
Summary: With Cyberduck CLI there are many new ways automate tasks that require to transfer files to a remote server with duck.. We have added a section to our wiki to show use cases. One such is making use of fswatch, a file change monitor that receives notifications when the contents of the specified files or directories are

With [Cyberduck CLI](https://duck.sh) there are many new ways automate tasks that require to transfer files to a remote server with *duck.*. We have added a section to our [wiki](https://trac.cyberduck.io/wiki/help/en/howto/cli#Samples) to show use cases.

One such is making use of [fswatch](https://github.com/emcrisostomo/fswatch), a file change monitor that receives notifications when the contents of the specified files or directories are modified. Used together with Cyberduck CLI, you can keep a remote directory in sync with local changes.

`` fswatch -0 ~/Sites/mywebsite/ | xargs -0 -I {} -t sh -c 'f="{}"; duck --upload ftps:///sandbox`basename "${f}"` "${f}" -existing overwrite' ``

The command will make *fswatch* listen for changes in directory *~/Sites/mywebsite/* and upload any changed file into the remote folder *ftps:///sandbox* using a [FTP-TLS connection](https://trac.cyberduck.io/wiki/help/en/howto/connection) overwriting any existing files.
