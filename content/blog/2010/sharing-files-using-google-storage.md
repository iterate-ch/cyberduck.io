Title: Sharing files using Google Storage
Date: 2010-08-09 16:24
Modified: 2010-08-09 16:24
Category: Cyberduck
Author: David Kocher
Slug: sharing-files-using-google-storage
Summary: Securely sharing files with selected persons using Cyberduck is easier than you might guess. Using Cyberduck, you can grant access to files stored in your Google Storage account selectively to anyone who has an email address registered with Google. Browse your Google Storage account by opening a new connection with Cyberduck. Upload the file you

Securely sharing files with selected persons using Cyberduck is easier than you might guess. Using Cyberduck, you can grant access to files stored in your Google Storage account selectively to anyone who has an email address registered with [Google](https://www.google.com/accounts).

-   Browse your [Google Storage](http://trac.cyberduck.ch/wiki/help/en/howto/googlestorage) account by opening a new connection with Cyberduck.

-   Upload the file you want to share and select *File → Info*.

-   Choose the *Permissions* tab to edit the access control list (ACL) of the file.

-   Choose to add a grant for an *Email Address* from the ACL tool menu.

-   Enter the email address registered with Google of the person you want to grant access to the file. Choose *READ* for the permission drop-down menu.

    [![](http://sudo.ch/wp/uploads/2010/08/Google-Storage-Authenticated-URL.png "Google Storage Authenticated URL")](http://sudo.ch/wp/uploads/2010/08/Google-Storage-Authenticated-URL.png)

-   Copy the *Authenticated URL* above the ACL table in the *Info* window starting with *https://sandbox.google.com/storage/* and share it with the person you want to give access to the file. The link will redirect to the file only after the user has successfully logged in to their Google Account and is listed in the ACL you have just edited.
