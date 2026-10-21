Title: Box
Date: 2021-12-23 15:49
Modified: 2022-11-02 18:36
Category: Cyberduck
Categories: Cyberduck, Mountain Duck
Author: David Kocher
Slug: box
Summary: Cyberduck 8.2 and Mountain Duck 4.10.0 introduce support for accessing Box not only through their FTP or WebDAV gateway but using the native Box API. This should not only improve performance but additionally allow enabling two-factor authentication (2FA) for the account. The new implementation allows to create download and upload shares of files or folders for people who

![](/2021/12/icon_512x512@2x.png)

Cyberduck [8.2](https://cyberduck.io/changelog/) and Mountain Duck [4.10.0](https://mountainduck.io/changelog/) introduce support for [accessing Box](https://docs.cyberduck.io/protocols/box/) not only through their [FTP or WebDAV](https://docs.cyberduck.io/protocols/box/#alternate-connection-options) gateway but using the native Box API. This should not only improve performance but additionally allow enabling two-factor authentication ([2FA](https://support.box.com/hc/en-us/articles/360043697154-Multi-Factor-Authentication-Set-Up-for-Your-Account)) for the account. The new implementation allows to create download and upload [shares](https://docs.cyberduck.io/cyberduck/share/#box) of files or folders for people who are not Box users by using *File → Share…*in Cybereduck or *Create Download Share* or *Create Upload Share* from the Mountain Duck [context menu](https://docs.cyberduck.io/mountainduck/interface/#share) respectively.

![](/2021/12/Box-Download-Share.png)

> Download [Mountain Duck](https://mountainduck.io/) as an alternative to *Box Drive*.
