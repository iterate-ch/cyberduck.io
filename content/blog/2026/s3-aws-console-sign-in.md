Title: Sign in to Amazon S3 with your AWS Console credentials
Date: 2026-11-05 11:00
Modified: 2026-11-05 11:00
Category: Cyberduck
Categories: Cyberduck
Author: David Kocher
Slug: s3-aws-console-sign-in
Summary: Connecting to Amazon S3 no longer requires creating access keys. Cyberduck 9.6 and Mountain Duck 6.0.0 let you sign in with the same credentials you use for the AWS Management Console.

Connecting to Amazon S3 no longer requires creating or storing access keys. With the new *Amazon S3 (AWS Console Sign-In)* connection profile in Cyberduck [9.6](https://cyberduck.io/changelog/), you sign in with the same credentials you use for the AWS Management Console.

<div class="alert alert-success" role="alert"><strong>Note:</strong> This feature will be available in <a href="https://mountainduck.io/">Mountain Duck</a> 6.</div>

## How It Works

Your web browser opens to authorize access and temporary credentials are issued for your IAM user, federated identity or root user. There are no long-lived secrets to copy, rotate or leak.

## Connect in Cyberduck

1.  Add a new bookmark and choose *Amazon S3 (AWS Console Sign-In)* in the protocol dropdown.
2.  Choose *Connect*. The default web browser opens the AWS sign-in page. Sign in to AWS and approve the authorization request.

The web browser redirects to a local address to continue with the connection setup. You can close the browser window afterwards.

## Set Up Permissions

The identity you sign in with must have a permissions policy granting access to S3, such as *AmazonS3FullAccess* or *AmazonS3ReadOnlyAccess*.

## Get Started

See the [S3 documentation](https://docs.cyberduck.io/protocols/s3/#connecting-with-aws-console-sign-in) for details.
