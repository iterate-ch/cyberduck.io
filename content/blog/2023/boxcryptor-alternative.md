Title: Boxcryptor Alternative
Date: 2023-01-03 16:20
Modified: 2023-01-05 15:12
Category: Cyberduck
Categories: Cyberduck, Mountain Duck
Tags: boxcryptor, cryptomator
Author: David Kocher
Slug: boxcryptor-alternative
Summary: Boxcryptor has been acquired by Dropbox and will terminate free accounts as of January 31, 2023. Till then, all users have to look for an alternative. It is not clear how customers with existing contracts are served in the future and no new accounts are accepted. So why not use Mountain Duck with support for the

Boxcryptor has been acquired by Dropbox and will [terminate](https://www.boxcryptor.com/en/blog/post/new-chapter-with-dropbox/) free accounts as of **January 31, 2023**. Till then, all users have to look for an alternative. It is not clear how customers with existing contracts are served in the future and no new accounts are accepted. So why not use [Mountain Duck](https://mountainduck.io/) with support for the [Cryptomator](https://cyberduck.io/cryptomator/) vault format independent from a single provider?

## Smart Synchronization

[Mountain Duck](https://mountainduck.io/) allows you to mount multiple cloud storages and servers as network drives on macOS and Windows using [Smart Synchronization](https://docs.mountainduck.io/mountainduck/sync/) for offline access. Use the built-in, fully interoperable support for [Cryptomator](https://cyberduck.io/cryptomator/) vaults to encrypt your sensitive data in password-protected vaults with end-to-end and zero-knowledge encryption. You *do not need* to have the Cryptomator apps installed but *can* access the same vault using [Cryptomator for iOS](https://apps.apple.com/us/app/cryptomator/id953086535) for example.

## Interoperable

[Cryptomator](https://cryptomator.org/) is free and open-source software with no security by obscurity, no hidden backdoors from third parties, no need to trust anyone except yourself. No online services, no subscriptions, no accounts.

## Migration

Follow these steps to migrate documents currently in Boxcryptor to a Cryptomator vault accessible through Mountain Duck:

-   Decrypt all existing files in Boxcryptor by following [Off-Migration Guide: Decrypt all Boxcryptor encrypted files](https://support.boxcryptor.com/en/help/faq-and-troubleshooting/macos/#migration-guide).
-   [Download](https://mountainduck.io/changelog/) and install Mountain Duck for macOS or Windows.
-   Create a new connection to any service provider supporting one of the many available [protocols](https://docs.mountainduck.io/protocols/) including S3, Dropbox, OneDrive & Google Drive or any WebDAV and SFTP compatible storage.
-   Create a [new vault](https://docs.mountainduck.io/cryptomator/#create-new-vault) in on your preferred storage.

## Documentation

Follow our [documentation](https://docs.mountainduck.io/cryptomator/) for step-by-step instructions to create a new vault or access an existing vault stored on your preferred cloud storage (including [Dropbox](https://docs.cyberduck.io/protocols/dropbox/)).
