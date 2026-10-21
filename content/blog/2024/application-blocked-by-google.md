Title: Application blocked by Google
Date: 2024-08-18 18:39
Modified: 2024-09-25 09:43
Category: Cyberduck
Categories: Cyberduck, Mountain Duck
Author: David Kocher
Slug: application-blocked-by-google
Summary: This issue has been resolved as of September 11th with the OAuth App Verification completed including the paid CASA assessment. To access Google Drive or Google Cloud Storage using Cyberduck or Mountain Duck we have registered an OAuth 2.0 Client ID with Google that is required to show users a consent screen to access files

> **This issue has been resolved as of September 11th with the [OAuth App Verification](https://github.com/iterate-ch/cyberduck/issues/16178) completed including the paid [CASA assessment](https://github.com/iterate-ch/cyberduck/issues/16192).**

To access [Google Drive](https://docs.cyberduck.io/protocols/googledrive/) or [Google Cloud Storage](https://docs.cyberduck.io/protocols/googlecloudstorage/) using [Cyberduck](https://cyberduck.io/) or [Mountain Duck](https://mountainduck.io/) we have registered an OAuth 2.0 Client ID with Google that is required to show users a consent screen to access files from these cloud storage services using the respective APIs.

Google recently blocked the consent screen and now shows the following error when trying to open a new connection:

> This app tried to access sensitive info in your Google Account. To keep your account safe, Google blocked this access.

We are aware of the [problem](https://github.com/iterate-ch/cyberduck/issues/16178) and are currently working on getting the consent screen re-approved by Google.

No user data is collected or shared when you access your data in Google Drive or Google Cloud Storage using Cyberduck or Mountain duck. We do not transfer or disclose your information to third parties. Any data accessed is processed solely on your device.

As a workaround you can register your own [Custom OAuth 2.0 Client ID for Google Cloud Storage and Google Drive](https://docs.cyberduck.io/protocols/profiles/google_client_id/) and using with a custom connection profile instead.
