Title: Encrypt your Dropbox
Date: 2018-11-15 21:04
Modified: 2018-11-15 21:07
Category: Cyberduck
Categories: Cyberduck, Mountain Duck
Author: Laura Vogt
Slug: encrypt-your-dropbox
Summary: Mountain Duck and Cyberduck allow Cryptomator client-side encryption of your data which is missing in Dropbox and all other popular cloud storage solutions. You will find a description of how to use Cryptomator Vaults in Dropbox and access your documents from your computer and mobile in the following sections. Encrypt your data with Mountain Duck and Cyberduck Connect

[Mountain Duck](https://mountainduck.io/) and [Cyberduck](https://cyberduck.io/) allow [Cryptomator](https://cyberduck.io/cryptomator/) client-side encryption of your data which is missing in Dropbox and all other popular cloud storage solutions. You will find a description of how to use Cryptomator Vaults in Dropbox and access your documents from your computer and mobile in the following sections.

**Encrypt your data with Mountain Duck and Cyberduck**

-   Connect to your bookmark and navigate to the location where you want to store your secured data.
-   Right-click on white space and choose *New Encrypted Vault* in the context menu.

[![](/2018/11/Dropbox_Step2.png)](/2018/11/Dropbox_Step2.png)

-   As described in the appearing window enter a name for your encrypted folder. Afterward, choose a password and confirm it by retyping it in the last field.

[![](/2018/11/Dropbox_Step3.png)](/2018/11/Dropbox_Step3.png)

-   Double-click on your newly created Vault and unlock it by typing the password into the corresponding field.

[![](/2018/11/Dropbox_Step4.png)](/2018/11/Dropbox_Step4.png)

-   The Vault opens. Now you can create or copy the documents you want to secure into the Vault to encrypt them.

**Access your encrypted data with the Cryptomator app on your mobile.**

-   Install the Cryptomator App on your mobile (IOS, Android).
-   Tab on the plus symbol and choose the option *Add existing vault*.
-   To open the previously created Cryptomator Vault choose the cloud service Dropbox, log into your account and navigate to the Vault.
-   Open the Vault folder and select the masterkey file which is named *masterkey.cryptomator*. After that, the app should show automatically the landing page of the Cryptomator app with the previously selected Vault pinned.
-   Tab on the pinned Vault and type the password into the corresponding field. The Vault should open right after you have unlocked it with the password and you have access to your secured data.

This process does not only work with Dropbox but with any other [connection](https://trac.cyberduck.io/wiki/help/en/howto/connection) supported in Cyberduck and Mountain Duck. You can find more information on Cryptomator support in our [wiki](https://trac.cyberduck.io/wiki/help/en/howto/cryptomator).
