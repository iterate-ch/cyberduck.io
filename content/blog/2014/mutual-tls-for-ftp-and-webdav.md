Title: Mutual TLS for FTP and WebDAV
Date: 2014-06-13 13:52
Modified: 2014-06-13 13:52
Category: Cyberduck
Author: David Kocher
Slug: mutual-tls-for-ftp-and-webdav
Summary: We have just finished with the implementation of mutual (two-way) TLS connections (#5883) for secured FTP and WebDAV (HTTPS) connections. When a server requests a client certificate for authentication, a prompt is displayed to choose a certificate with a private key that matches the given issuer name requested from the server. Matching certificates are searched

We have just finished with the implementation of mutual (two-way) TLS connections ([#5883](https://trac.cyberduck.io/ticket/5883)) for secured FTP and WebDAV (HTTPS) connections. When a server requests a client certificate for authentication, a prompt is displayed to choose a certificate with a private key that matches the given issuer name requested from the server. Matching certificates are searched for in the Keychain on OS X or the [Windows Certificate Manager](http://windows.microsoft.com/en-ie/windows-vista/view-or-manage-your-certificates) respectively.

 [![Windows Security Prompt](/2014/06/Windows-Security-Prompt.png)![Keychain Prompt](/2014/06/Keychain-Prompt.png)](/2014/06/Windows-Security-Prompt.png)

 

To configure your server for mutual TLS authentication, refer to corresponding documentation.

-   [Apache HTTPD](http://httpd.apache.org/docs/current/ssl/ssl_howto.html#accesscontrol) Client Authentication and Access Control
-   [ProFTPD](http://www.proftpd.org/docs/howto/TLS.html) TLS Client Authentication
-   The configuration options *validate\_cert*, *ca\_certs\_file *in [vsftpd](https://security.appspot.com/vsftpd/vsftpd_conf.html)
-   Mutual SSL authentication should also work with [OpenStack Keystone deployment using PKI](http://docs.openstack.org/developer/keystone/configuration.html#ssl) deployments.

This feature is currently available in the latest [4.5](https://trac.cyberduck.io/milestone/4.5) [beta](https://trac.cyberduck.io/wiki/help/en/howto/preferences#Update) build.
