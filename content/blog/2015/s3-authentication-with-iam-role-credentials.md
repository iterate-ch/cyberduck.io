Title: S3 Authentication with IAM Role credentials
Date: 2015-03-05 13:53
Modified: 2015-03-05 13:53
Category: Cyberduck
Tags: aws, ec2, iam, s3
Author: David Kocher
Slug: s3-authentication-with-iam-role-credentials
Summary: This is a technical post for users that are familiar with AWS EC2. When you are launching an EC2 instance you can assign it with an IAM role with specific permissions to AWS resources. This enables you to use security credentials on EC2 to access S3 that are temporary and rotated automatically. Refer to IAM

*This is a technical post for users that are familiar with AWS EC2.*

When you are launching an EC2 instance you can assign it with an IAM role with specific permissions to AWS resources. This enables you to use security credentials on EC2 to access S3 that are temporary and rotated automatically. Refer to [IAM Roles for Amazon EC2](http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/iam-roles-for-amazon-ec2.html "IAM Roles for Amazon EC2").

We have now added a login option to the current snapshot builds of [4.7](https://trac.cyberduck.io/milestone/4.7) available through a [connection profile](https://trac.cyberduck.io/wiki/help/en/howto/profiles) that allows to connect from EC2 with Cyberduck on Windows or the [CLI](https://duck.sh/) version on Linux instances with IAM role credentials obtained from instance metadata.

The S3 (Temporary Credentials) profile can be installed from the wiki. See [Connecting with temporary access credentials from EC2](https://trac.cyberduck.io/wiki/help/en/howto/s3#ConnectingwithtemporaryaccesscredentialsfromEC2). Make sure to edit the role name in the profile to match your IAM configuration.

[![AWS Authentication with IAM Role on EC2](/2015/03/AWS-Authentication-with-IAM-Role-on-EC2.png)](/2015/03/AWS-Authentication-with-IAM-Role-on-EC2.png)

We think this will make deployments of the [duck](https://duck.sh/) to EC2 a lot easier without the need to distribute credentials along with.
