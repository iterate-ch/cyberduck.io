Title: Connect to OpenCloud with OpenID Connect and browse storage spaces
Date: 2026-11-05 12:00
Modified: 2026-11-05 12:00
Category: Cyberduck
Categories: Cyberduck
Author: David Kocher
Slug: opencloud-openid-connect-spaces
Summary: Cyberduck 9.6 and Mountain Duck 5.4.0 connect to OpenCloud and ownCloud Infinite Scale using OpenID Connect and list your personal space, project spaces and shares.

Cyberduck [9.6](https://cyberduck.io/changelog/) improves support for *[OpenCloud](https://opencloud.eu/)* and *[ownCloud Infinite Scale](https://owncloud.com/de/infinite-scale/)*. You can sign in using OpenID Connect and browse all the storage spaces available to your account.

<div class="alert alert-success" role="alert"><strong>Note:</strong> This feature will be available in <a href="https://mountainduck.io/">Mountain Duck</a> 6.</div>

## Sign In with OpenID Connect

OpenID Connect is the default authentication scheme for OpenCloud. For deployments using the built-in identity provider, use the ready-made connection profile with the OAuth client registered by default.

1.  Open *Preferences… → Profiles* in Cyberduck or Mountain Duck.
2.  Enable the *OpenCloud (OpenID Connect)* connection profile.
3.  Add a new bookmark and choose *OpenCloud (OpenID Connect)* in the protocol dropdown. Enter the hostname of your OpenCloud server in *Server*.
4.  Connect to the bookmark and log in with your OpenCloud account in the web browser. Allow access for *OpenCloud Desktop Client* when prompted.

For deployments using Keycloak or Microsoft Entra ID as the identity provider, follow the [step-by-step instructions](https://docs.cyberduck.io/tutorials/owncloud_opencloud_oidc/) to write a custom connection profile.

## Storage Spaces

When connecting to OpenCloud or ownCloud Infinite Scale, the root folder lists virtual folders for the storage spaces available to your account:

-   *Personal*. Your personal space. Not available to users with the role *User Light*.
-   *Spaces*. Project spaces you are a member of, listed by name. Project spaces with clashing names are ignored.
-   *Shares*. Files and folders shared with you by other users.

A bookmark with a default path opens relative to *Personal*, and quota is reported for the personal space. The virtual folders cannot be renamed or moved, and server side move is not supported between spaces.

## Get Started

See the [documentation](https://docs.cyberduck.io/protocols/webdav/nextcloud/) for details.
