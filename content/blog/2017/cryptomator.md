Title: Cryptomator
Date: 2017-01-19 13:01
Modified: 2017-03-10 08:15
Category: Cyberduck
Author: Yves Langisch
Slug: cryptomator
Summary: We are thrilled to announce the availability of transparent, client-side encryption support for Cyberduck to secure your data on any server or cloud storage. The new encryption feature is based on the excellent concepts and work of Cryptomator. Cryptomator also offers apps for iOS and Android to access your encrypted data. All vaults either created by Cyberduck, Cryptomator

We are thrilled to announce the availability of transparent, client-side encryption support for Cyberduck to **secure your data on any server or cloud storage**. The new encryption feature is based on the excellent concepts and work of [Cryptomator](https://cryptomator.org/). Cryptomator also offers apps for iOS and Android to access your encrypted data. All vaults either created by Cyberduck, Cryptomator or their mobile apps are fully interoperable.

Compared to other client-side encryption solutions on the market, ​the Cryptomator security architecture has many crucial advantages:

-   Open source software that can be audited independently for security. You can rest assured there are no backdoors and no hidden vulnerabilities.
-   In addition to file content encryption, file and directory names are encrypted, directory structures are obfuscated.
-   Other than disk encryption utilities, each file is encrypted for its own.
-   No online service subscription or account required. You will always have access to your data without the risk of a dependent service shutting down.

Starting to secure your data is as easy as creating a new Cryptomator Vault by selecting *New Encrypted Vault* and providing a passphrase. As soon as you try to open a folder containing a vault Cyberduck will prompt for the passphrase to unlock it. Inside a unlocked vault you can work as you are used to with Cyberduck. Uploads and downloads are transparently encrypted and decrypted respectively with no change in your usual workflow required. You can have encrypted vaults and non-encrypted folders reside along on your storage location.

[![Encrypted folder contents](/2017/01/Cryptomator-Vault-Encrypted.png)](/2017/01/Cryptomator-Vault-Encrypted.png)

*Encrypted folder contents*

[![Unlock Vault](/2017/01/Cryptomator-Vault-Prompt.png)](/2017/01/Cryptomator-Vault-Prompt.png)

*Unlock Vault*

[![Decrypted Folder Contents](/2017/01/Cryptomator-Vault-Decrypted.png)](/2017/01/Cryptomator-Vault-Decrypted.png)

*Decrypted Folder Contents*

 

You can find our full [documentation in the wiki](https://trac.cyberduck.io/wiki/help/en/howto/cryptomator).

A  beta version is available for testing. You either download it directly for [macOS](https://update.cyberduck.io/beta/Cyberduck-6.0.0.23694.zip) and [Windows](https://update.cyberduck.io/windows/beta/Cyberduck-Installer-6.0.0.23694.exe) or you switch to beta updates in your [Cyberduck Preferences](https://trac.cyberduck.io/wiki/help/en/howto/preferences#Update). Give it a try and let us know what you like and what you think – curious about your feedback! Support in [Mountain Duck](https://mountainduck.io) will follow later this month that will allow you to open Cryptomator Vaults in Finder and Windows Explorer.

**Please note that this is beta software. For now, please use the Cryptomator Vault feature only with data you have a backup available.**
