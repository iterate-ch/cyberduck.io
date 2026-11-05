Title: Sign in to Azure Blob Storage with Microsoft Entra ID
Date: 2026-11-05 10:00
Modified: 2026-11-05 10:00
Category: Cyberduck
Categories: Cyberduck
Author: David Kocher
Slug: azure-blob-storage-microsoft-entra-id
Summary: Connecting to Azure Blob Storage no longer requires sharing storage account keys. Cyberduck 9.6 supports authentication with Microsoft Entra ID, authorizing access to blob data with Azure role-based access control.

Connecting to Azure Blob Storage no longer requires sharing storage account keys or Shared Access Signature tokens. With support for Microsoft Entra ID in Cyberduck [9.6](https://cyberduck.io/changelog/), you sign in with your Microsoft account and access to blob data is authorized with Azure role-based access control (Azure RBAC).

<div class="alert alert-success" role="alert"><strong>Note:</strong> This feature will be available in <a href="https://mountainduck.io/">Mountain Duck</a> 6.</div>

## Why Use Microsoft Entra ID?

Access keys grant full access to a storage account and are easily leaked or shared. Authenticating with Microsoft Entra ID instead gives you:

-   **No shared secrets**: Nothing to copy, store or rotate. Cyberduck uses an OAuth 2.0 access token.
-   **Least privilege**: Assign a read-only or read-write role to individual users or groups.
-   **Centralized management**: Grant and revoke access in Azure, using the accounts and policies of your organization.

## Connect in Cyberduck

1.  Create a new bookmark and choose the **Azure (Microsoft Entra ID)** connection profile. It is bundled by default and can also be installed from *Preferences → Profiles*.
2.  Edit the hostname to connect to your account in the format `<account>.blob.core.windows.net`.
3.  Choose *Connect* and log in to your Microsoft account in your web browser. Allow to open Cyberduck to submit the authorization code.

Subsequent connections will not require authorization again, unless the refresh token expired due to inactivity. Tokens are saved in your keychain separately for every storage account.

## Set Up Permissions

The signed-in user needs two permissions on the storage account:

-   A data role such as *Storage Blob Data Reader* or *Storage Blob Data Contributor* for browsing and transferring files.
-   The permission to read the account information, which Cyberduck uses to detect whether the account has a hierarchical namespace enabled. None of the built-in data roles include it, so grant it with a small custom role instead of the far more powerful *Storage Account Contributor*. Without it, connecting fails with `AuthorizationPermissionMismatch`.

Our tutorial [Set Up Permissions for Microsoft Entra ID Authentication to Azure Blob Storage](https://docs.cyberduck.io/tutorials/azure_entra_id_permissions/) walks through creating the role and assigning both roles with the Azure CLI or the Azure portal, and lists troubleshooting steps.

## Get Started

See the [Azure Blob Storage documentation](https://docs.cyberduck.io/protocols/azure/#microsoft-entra-id) for details.
