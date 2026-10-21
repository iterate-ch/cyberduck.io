Title: Connecting using AssumeRole from AWS Security Token Service (STS)
Date: 2018-08-07 11:54
Modified: 2018-08-07 11:54
Category: Cyberduck
Categories: Cyberduck, Mountain Duck
Author: David Kocher
Slug: connecting-using-assumerole-from-aws-security-token-service-sts
Summary: Instead of providing Access Key ID and Secret Access Key, authenticate using temporary credentials from AWS Security Token Service (STS) with optional Multi-Factor Authentication (MFA), making Cyberduck and Mountain Duck more friendly to enterprise deployments. You will need to install the custom connection profile S3 (Credentials from AWS Security Token Service) available from our website.

Instead of providing Access Key ID and Secret Access Key, authenticate using temporary credentials from AWS Security Token Service (STS) with optional Multi-Factor Authentication (MFA), making Cyberduck and Mountain Duck more friendly to enterprise deployments. You will need to install the custom connection profile *S3 (Credentials from AWS Security Token Service)* available from our [website](https://cyberduck.io/s3/).

Our implementation to obtain temporary credentials is interoperable with standard AWS CLI configuration in `~/.aws/credentials`. Refer to our [wiki](https://trac.cyberduck.io/wiki/help/en/howto/s3#ConnectingusingAssumeRolefromAWSSecurityTokenServiceSTS) for documentation.
