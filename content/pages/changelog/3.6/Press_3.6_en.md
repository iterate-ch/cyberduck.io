Title: Press Release Cyberduck 3.6
Slug: changelog/pr/3.6
Status: hidden

### FOR IMMEDIATE RELEASE

## Cyberduck 3.6 Released

_Bern, Sep 06, 2010_

A major new version of Cyberduck is now available, with a plethora of new features and bugfixes but most promimently support for Google Storage and file versioning in Amazon S3.

Among the newest additions is also the integration of Access Control List (ACL) editing for S3 and Google Storage in Cyberduck. This allows the definition of fine grained permissions to be granted to different individual users. Google Storage allows the use of email address registered with Google Accounts as grant identifiers. Using Cyberduck, one can limit access to files stored in Google Storage selectively to anyone who has an email address registered with Google. Access is granted only when logged in using a Google Account and authenticated against the ACL. This makes secure sharing of potentially big files with collaborators a snap.

File versioning support for S3 is now available in a most user friendly way. Choosing to show hidden files in the browser also displays all revisions, allowing to revert back to a previous version making it current. Versioning can be enabled per bucket in the S3 tab of the Browser Info panel. Additional support to selectively enable S3 Multi-Factor Authentication (MFA) Delete per bucket in Cyberduck, secures files from deletion by requesting a one-time passcode from a hardware token.

For users migrating to Cyberduck from third-party software, bookmarks of various other FTP clients can now be imported.

For security improvements, users are now warned when opening an unsecure connection to a server transmitting user credentials in plaintext. A prompt to switch to a secured connection if the FTP server supports SSL/TLS is displayed.

Please refer to http://cyberduck.ch/changelog/ for a more detailed list of the many additional features and bufixes in this release not discussed here. Users can upgrade using the automatic 'Check for Update...' feature. Mac OS X 10.5 or later required.

This is the last version to be Mac only. A preview of Cyberduck for Windows will be available later this month [1]. Signup for the private beta now! Version 4.0 and onward will be on par for both Mac and Windows.

[1] https://blog.cyberduck.io/2010/08/25/cyberduck-for-windows-is-coming/

#### About Cyberduck

Cyberduck is an open source FTP, SFTP, WebDAV, Cloud Files, Google Docs & S3 browser for the Mac. It features an easy to use interface with quickly accessible bookmarks. The outline view of the browser allows to browse large folder structures efficiently and you can quickly preview files with Quick Look. To edit files, a seamless integration with any external editor application makes it easy to change content quickly. Both Amazon CloudFront and Cloud Files from Rackspace can be easily configured to distribute your content in the cloud. Many OS X core system technologies such as Spotlight, Bonjour and the Keychain are supported and 30 translations make you feel at home.

#### Contact

iterate GmbH  
David Kocher  
[support@cyberduck.io](mailto:support@cyberduck.io)  
