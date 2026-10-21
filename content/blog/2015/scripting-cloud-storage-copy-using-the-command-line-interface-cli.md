Title: Scripting cloud storage copy using the command line interface (CLI)
Date: 2015-06-24 12:09
Modified: 2015-06-24 12:09
Category: Cyberduck
Author: David Kocher
Slug: scripting-cloud-storage-copy-using-the-command-line-interface-cli
Summary: Cyberduck supports transfers between servers regardless of the protocol by simply opening two browser windows connected to different hosts and drag file and folders between. With Cyberduck CLI, there is now also the option to automate such tasks with a script running on Mac, Windows or Linux to keep a current copy of files on

Cyberduck supports [transfers between servers](https://trac.cyberduck.io/wiki/help/en/howto/browser#Copyfilesandfolderstodifferentserver) regardless of the protocol by simply opening two browser windows connected to different hosts and drag file and folders between.

With [Cyberduck CLI](https://duck.sh), there is now also the option to automate such tasks with a script running on Mac, Windows or Linux to keep a current copy of files on a different host for failsafe access. Use the `--copy` option to do the same but allowing you to automate the task. Consider you want to copy files from [Amazon S3](https://trac.cyberduck.io/wiki/help/en/howto/s3) to [Rackspace CloudFiles](https://trac.cyberduck.io/wiki/help/en/howto/cloudfiles) running OpenStack Swift, all you need is the command

`duck --copy s3://<Access Key ID>@<bucket>/ rackspace://<Username>@<container>/`  
to copy all files. Use the `--existing compare` option for subsequent invocations to only transfer new and changed files.
