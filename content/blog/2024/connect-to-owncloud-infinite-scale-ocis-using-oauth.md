Title: Connect to ownCloud Infinite Scale (oCIS) using OAuth
Date: 2024-04-02 09:12
Modified: 2024-04-02 09:12
Category: Cyberduck
Categories: Cyberduck, Mountain Duck
Author: David Kocher
Slug: connect-to-owncloud-infinite-scale-ocis-using-oauth
Summary: ownCloud Infinite Scale is a user-centric, cloud-native, open source, file sharing and collaboration platform that offers infinite scalability and enables complete digital sovereignty. ownCloud Infinite Scale uses federated authentication with Keycloak as the identity provider by default. To connect using Cyberduck or Mountain Duck. We will provide sample steps to connect to ownCloud Infinite Scale (oCIS)

> [ownCloud Infinite Scale](https://owncloud.com/infinite-scale-4-0/) is a user-centric, cloud-native, open source, file sharing and collaboration platform that offers infinite scalability and enables complete digital sovereignty. 

ownCloud Infinite Scale uses federated authentication with [Keycloak](https://www.keycloak.org/) as the identity provider by default. To connect using [Cyberduck](https://cyberduck.io/) or [Mountain Duck](https://mountainduck.io/).

We will provide sample steps to connect to ownCloud Infinite Scale (oCIS) using OAuth 2.0/OpenID Connect (OIDC). It requires the client registration in the identity provider in ownCloud and a custom connection profile for Cyberduck & Mountain Duck. To allow to test this without a custom deployment, the sample makes use of the public instance running at [ocis.ocis-keycloak.latest.owncloud.works](https://ocis.ocis-keycloak.latest.owncloud.works) with the identity provider at [keycloak.ocis-keycloak.latest.owncloud.works](https://keycloak.ocis-keycloak.latest.owncloud.works). You can login with the username “admin” and password “admin”. Note that these demo instances are wiped periodically and all data and configuration is temporarily available only.

![](/2024/04/Keycloak-Login.png)

## Import client configuration

You will need to import a [client configuration](https://github.com/owncloud/ocis/blob/7af9cd9e53183acbaac2ffbc6414402bdef1f5d4/deployments/examples/ocis_keycloak/config/keycloak/clients/cyberduck.json) for Keycloak to allow OAuth authentications from Cyberduck & Mountain Duck. The configuration registers a OAuth Client ID with the redirect URIs `x-cyberduck-action:oauth` and `x-mountainduck-action:oauth` set to allow a seamless login integration.

![](/2024/04/Keycloak-Import-Client-Configuration.png)

## Connection Profile

The [connection profile](https://docs.cyberduck.io/protocols/profiles/) defines the custom OAuth Client ID to be used to connect to ownCloud including the authorization and token URLs used for authentication with the Keycloak identity provider. The connection profile matching the above client registration is

``` wp-block-code
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE plist PUBLIC "-//Apple//DTD PLIST 1.0//EN" "http://www.apple.com/DTDs/PropertyList-1.0.dtd">
<plist version="1.0">
    <dict>
        <key>Protocol</key>
        <string>owncloud</string>
        <key>Vendor</key>
        <string>owncloud.works</string>
        <key>Description</key>
        <string>ownCloud Infinite Scale</string>
        <key>Default Nickname</key>
        <string>ownCloud Infinite Scale</string>
        <key>Default Hostname</key>
        <string>ocis.ocis-keycloak.latest.owncloud.works</string>
        <key>Default Path</key>
        <string>/remote.php/webdav/</string>
        <key>Path Configurable</key>
        <true/>
        <key>Hostname Configurable</key>
        <true/>
        <key>OAuth Configurable</key>
        <true/>
        <key>OAuth Authorization Url</key>
        <string>https://keycloak.ocis-keycloak.latest.owncloud.works/realms/oCIS/protocol/openid-connect/auth</string>
        <key>OAuth Token Url</key>
        <string>https://keycloak.ocis-keycloak.latest.owncloud.works/realms/oCIS/protocol/openid-connect/token</string>
        <key>Scopes</key>
        <array>
            <string>openid</string>
            <string>email</string>
            <string>offline_access</string>
        </array>
        <key>OAuth Client ID</key>
        <string>3keLfua0olYvW1zKXTDB3OjAMPEYWEQNuiscli395GKJOiPnPURNQWGvGCJZf4Hw</string>
        <key>OAuth Client Secret</key>
        <string>yoqICbLIeYbpZPqDH4D8k4NKb04HqnrWBntEeVZEQ5gO1RmaUlln0Aqu1dj2UoF4</string>
        <key>OAuth Redirect Url</key>
        <string>${oauth.handler.scheme}:oauth</string>
        <key>Password Configurable</key>
        <false/>
        <key>Username Configurable</key>
        <false/>
    </dict>
</plist>
```

[Save the file](https://github.com/iterate-ch/profiles/pull/83/files) with the suffix `.cyberduckprofile` and double click to install and register with Cyberduck & Mountain Duck. This will enable the protocol option *ownCloud Infinite Scale* in the bookmark configuration.

![](/2024/04/Cyberduck-Connection.png)
