Title: Testing against real servers: much extended test coverage with Testcontainers
Date: 2026-11-05 13:00
Modified: 2026-11-05 13:00
Category: Cyberduck
Categories: Cyberduck
Author: David Kocher
Slug: extended-test-coverage-testcontainers
Summary: Cyberduck's integration tests now run against disposable containers of over a dozen server implementations, from MinIO and Ceph to Nextcloud, vsftpd and OpenSSH, and have already uncovered bugs that are fixed.

Cyberduck speaks to a lot of servers, and every server interprets a protocol slightly differently. To catch incompatibilities before you do, we have greatly extended the automated test coverage. Integration tests now run against disposable containers started with [Testcontainers](https://testcontainers.com/), instead of a handful of hosted accounts and embedded test servers.

## Why Containers

Tests against hosted services depend on shared credentials, network access and the state of someone else's server. Containers are reproducible: each server is started on first use, shared for the lifetime of the test run and thrown away afterwards. Anyone can run the same tests on their own machine with Docker.

## What Is Covered

-   **Amazon S3 and compatible storage.** The S3 tests run against LocalStack, MinIO, Ceph RGW, RustFS, SeaweedFS and Scality CloudServer, in addition to AWS. See [#18622](https://github.com/iterate-ch/cyberduck/pull/18622).
-   **SFTP.** OpenSSH, ProFTPD with `mod_sftp` and SFTPGo. See [#18622](https://github.com/iterate-ch/cyberduck/pull/18622).
-   **WebDAV.** Apache httpd with `mod_dav` and SFTPGo. See [#18622](https://github.com/iterate-ch/cyberduck/pull/18622).
-   **Nextcloud, ownCloud and ownCloud Infinite Scale (OpenCloud), OpenStack Swift.** See [#18601](https://github.com/iterate-ch/cyberduck/pull/18601).

The same test is run once per server implementation, and the Cryptomator vault tests additionally per vault version. Where a server legitimately does not implement a feature, such as server side copy, symbolic links or partial uploads, the test is skipped with a stated reason rather than silently passing.

## Get Involved

The tests are part of the [source code](https://github.com/iterate-ch/cyberduck). If a server you rely on is missing, or you see a difference in behavior between implementations, open an issue or send a pull request.
