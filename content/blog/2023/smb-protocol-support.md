Title: SMB Protocol Support
Date: 2023-10-18 15:14
Modified: 2023-10-18 15:14
Category: Cyberduck
Categories: Cyberduck, Mountain Duck
Tags: smb
Author: David Kocher
Slug: smb-protocol-support
Summary: SMB (Server Message Block) is used to access Windows File Shares or a Samba Linux Server. Cyberduck 8.7.0 adds support to access SMB shares as an light-weight, performant alternative to built-in support in macOS and Windows. Support in Mountain Duck is forthcoming in version 5. Connecting to SMB To connect to your SMB (formerly known

[SMB (Server Message Block)](https://en.wikipedia.org/wiki/Server_Message_Block) is used to access Windows File Shares or a Samba Linux Server. Cyberduck [8.7.0](https://cyberduck.io/changelog/) adds support to access SMB shares as an light-weight, performant alternative to built-in support in macOS and Windows. Support in [Mountain Duck](https://mountainduck.io/) is forthcoming in version 5.

![](/2023/10/SMB_Connection.png)

## Connecting to SMB

To connect to your SMB (formerly known as CIFS (Common Internet File System) server such as a NAS (Network Attached Storage) using NTLM authentication, select *SMB (Server Message Block)* in *[Open Connection](https://docs.cyberduck.io/cyberduck/connection/)* or the *Bookmark* configuration. The default domain name is set to “WORKGROUP” and can be [changed](https://docs.cyberduck.io/protocols/smb/#authentication) to meet the username format requirement depending on the server setup.

### SMB Share

You will provided with a list of available shares from the server or alternatively if not supported prompted to input the share name manually. Specify the share name as a *[Path](https://docs.cyberduck.io/cyberduck/bookmarks/#bookmark-options)* in the bookmark to avoid connect to a single share.

![](/2023/10/SMB_Share.png)

Up-to-date information about SMB interoperability can be found in out [documentation](https://docs.cyberduck.io/protocols/smb/).
