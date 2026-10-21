Title: Full Terminal Access for SSH connections
Date: 2008-12-09 13:50
Modified: 2008-12-09 13:50
Category: Cyberduck
Author: David Kocher
Slug: full-terminal-access-for-ssh-connections
Summary: Previously, it was only possible to send custom commands to a server when connected over FTP. As of the latest 3.1 nightly builds, you can choose Go → Send Command… for SFTP connections which allows you to execute an arbitrary command on the server. It is nevertheless still possible to conviniently open a proper shell

Previously, it was only possible to send custom commands to a server when connected over FTP. As of the latest 3.1 nightly builds, you can choose *Go → Send Command…* for SFTP connections which allows you to execute an arbitrary command on the server.

It is nevertheless still possible to conviniently open a proper shell with Terminal.app for the current working directory. Use *View → Customize Toolbar…* to add the *Terminal.app* button to your browser windows.

In the screenshot below a `ps` command has been executed:  
[![Send custom command over SSH](http://sudo.ch/wp/uploads/2008/12/command-500x369.png "Send custom command over SSH")](http://sudo.ch/wp/uploads/2008/12/command.png)

**Note**: This feature is meant for advanced users who are familiar with UNIX shells.

Try it out yourself using the latest available [nightly build](http://update.cyberduck.ch/nightly/) of Cyberduck.
