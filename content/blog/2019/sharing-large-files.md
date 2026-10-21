Title: Sharing Large Files
Date: 2019-01-30 20:00
Modified: 2019-04-24 20:08
Category: Cyberduck
Categories: Cyberduck, Mountain Duck
Author: Laura Vogt
Slug: sharing-large-files
Summary: You want to grant one or several people temporary access to large files? Email is not an option and providers offering a web interface are costly, limit the file size or tend to be unreliable. Cyberduck or Mountain Duck in combination with cloud storage providers allows you to share files without relying on a third-party website. Auto

You want to grant one or several people temporary access to large files? Email is not an option and providers offering a web interface are costly, limit the file size or tend to be unreliable. [Cyberduck](https://cyberduck.io/) or [Mountain Duck](https://mountainduck.io) in combination with cloud storage providers allows you to share files without relying on a third-party website.

### Auto Expiring Links

With Cyberduck or Mountain Duck and those cloud storage providers, you can share links with third parties that expire after an hour, days or months. Between the protocols, the expiration time of the shared links may vary. Contrary to other solutions there is no restrictions on bandwidth or the number of downloads.

### Supported Providers

In the following section, you will find a short guide on how to share large files with *Amazon S3*, *Microsoft Azure*, *Dropbox* or *OpenStack Swift* cloud storage providers.

### **Step by Step**

-   Open Cyberduck or Mountain Duck and connect to your Amazon S3, Microsoft Azure, Dropbox or OpenStack Swift bookmark.
-   Navigate to or upload the file you want to share
-   Right-click on the file, choose the option *Copy URL* in the context menu and click on the *Pre-Signed URL* (within Dropbox it is named *Temporary URL*) with the wanted expiration time. In Cyberduck the same option is available in *Edit → Copy URL→ Signed URL.* Share the link with anyone you want to give access to.

![](/2018/10/Cyberduck_Share_Templink_Contextmenu.png)

![](/2019/02/Mountain-Duck_Templink.png)

> **Update** See also our [documentation](https://trac.cyberduck.io/wiki/help/en/howto/share) on sharing options for different storage service providers.
