Title: Accessing OneDrive & Sharepoint
Date: 2019-01-16 08:00
Modified: 2019-03-01 08:31
Category: Cyberduck
Categories: Cyberduck, Mountain Duck
Author: Laura Vogt
Slug: accessing-onedrive-sharepoint
Summary: The number of different possible options for cloud storage provided by services available from Microsoft Office 365 is confusing and merits some further ado. There are two services available from Microsoft – OneDrive and SharePoint – which are hidden in a diversity of different packages. SharePoint is a cloud storage service which is only integrated

The number of different possible options for cloud storage provided by services available from Microsoft Office 365 is confusing and merits some further ado. There are two services available from Microsoft – **OneDrive** and **SharePoint** – which are hidden in a diversity of different packages. SharePoint is a cloud storage service which is only integrated in business packages while OneDrive is existing for personal and business usages. Every person who has a Microsoft Account does have access to the personal version of OneDrive. You can detect if you have a personal or business profile by looking at the email address. If you have a business profile the email address contains onmicrosoft.com.

In the following chart an overview of the most common business profile packages and whether the packages contain OneDrive, SharePoint or both is shown.

[TABLE]

Cyberduck and Mountain Duck support OneDrive in personal and business edition as well as SharePoint through the default bundled connection profiles *Microsoft OneDrive* and *Microsoft SharePoint*. It doesn’t make any difference if you are using OneDrive personal or business there is only one profile that works for both. To connect to OneDrive or SharePoint with Cyberduck or Mountain Duck you have to create a corresponding bookmark which will connect to the services via Microsoft Graph.

## **Connecting to OneDrive Personal and Business**

-   Click on “New Bookmark” if you are using Mountain Duck or on the “+” symbol in the browser window if you are using Cyberduck to create a new bookmark.
-   Choose the profile *Microsoft OneDrive*.
-   Type in the Username field your account email address and connect to the bookmark.

![](/2018/10/OneDrive_Step3.png)

-   A window appears and prompts for an authentication code. Alongside with the authentication code prompt, a web browser window should open with the login page of Microsoft. Log into your account in the web browser window and copy the afterward appearing authentication code into the field in the authentication prompt window.

![](/2018/10/OneDrive_Step4.png)

-   If you are using Cyberduck a browser window will appear. If you are using Mountain Duck Windows Explorer or Finder are opened revealing your OneDrive.

## **Connecting to SharePoint**

-   Click on “New Bookmark” if you using Mountain Duck or on the “+” symbol in the browser window if you using Cyberduck to create a new bookmark.
-   Choose the previously installed profile ​*Microsoft Sharepoint Document Library* or the bundled profile *Microsoft SharePoint*.
-   Log in with your \*.onmicrosoft.com account to login.microsoftonline.com to connect to your SharePoint document library. If you want to connect to SharePoint online you have to use your OneDrive personal account.

More information can be found in the Help Wiki for both [OneDrive](https://trac.cyberduck.io/wiki/help/en/howto/onedrive) and [Sharepoint](https://trac.cyberduck.io/wiki/help/en/howto/sharepoint).
