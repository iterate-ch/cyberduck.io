Title: Terminal
Date: 2015-01-15 17:11
Modified: 2015-01-15 17:11
Category: Cyberduck
Author: David Kocher
Slug: terminal
Summary: We have readied a command line interface (CLI) version of Cyberduck for power users. It is named duck and runs in your shell on Linux and OS X or your Windows command line prompt. The CLI version includes the power features of Cyberduck ready to be used in scripts and automated deployments. Edit files on

We have readied a [command line interface (CLI) version of Cyberduck](https://duck.sh) for power users. It is named *duck* and runs in your shell on Linux and OS X or your Windows command line prompt.

[![duck](/2015/01/duck.png)](/2015/01/duck.png)

The CLI version includes the power features of Cyberduck ready to be used in scripts and automated deployments. Edit files on remote servers, download, upload and copy between servers with FTP, SFTP or WebDAV plus support for cloud storage Amazon S3 & OpenStack Swift deployments. Let’s looks at some examples what in particular `duck` is useful for.

### Copy a file from an FTPS server to a Rackspace Cloud container

Note the URI syntax `protocol://container/key` used for OpenStack Swift, Microsoft Azure and Amazon S3.

> `osaka:~ dkocher$ duck --copy ftps://dkocher@cyberduck.io/update.cyberduck.io/Cyberduck-4.6.1.zip rackspace://sandbox/Cyberduck-4.6.1.zip`

> `FTP-SSL connection opened… Login cyberduck.io with username and password. No login credentials could be found in the Keychain. Username (dkocher): Login as dkocher Password: Cloud Files connection opened… Login identity.api.rackspacecloud.com with username and password. No login credentials could be found in the Keychain. Username (dkocher): dkocher Login as dkocher API Key: [▮▮▮▮▮▮▮▮▮▮▮▮▮▮▮▮▮▮▮           ] 37.4 MiB (39,239,680 bytes) of 55.1 MiB (67%, 694.9 KB/sec, 27 seconds remaining)`

### Upload a website

Recursively upload a folder to a remote location. An overwrite prompt will ask the action to take for existing files or can be specified using the `--existing` option.

> `osaka:duck.sh dkocher$ duck --username dkocher --upload ftps://cyberduck.io/duck.sh/ output/`

> `FTP-SSL connection opened… Login cyberduck.io with username and password. No login credentials could be found in the Keychain. Username (dkocher): Login as dkocher Password: Login successful… The remote file duck.sh already exists. Choose what action to take:`
>
> Resume Append existing files (resume)  
> Compare Skip files that match size, modification date or checksum (compare)  
> Rename existing Rename existing files with timestamp appended to filename (rename)  
> Overwrite Overwrite all files (overwrite)  
> Cancel (cancel)  
> Skip Skip transfer of files that already exist (skip)  
> Rename Rename transferred files with a timestamp appended to the filename (similar)
>
> Action \[resume, compare, rename, overwrite, cancel, skip, similar\]: compare  
> \[▮▮▮▮▮▮▮▮▮▮▮▮▮▮▮▮▮▮▮▮▮▮▮▮▮▮▮▮▮▮▮\] 1.0 MiB (1,067,009 bytes) of 1.0 MiB (100%, 88.6 KB/sec)  

### Edit a remote file over SSH

Connect using public key authentication using `--identity` for the private key.

> `osaka:~ dkocher$ duck --username dkocher --identity ~/.ssh/cyberduck.io-rsa --edit sftp://cyberduck.io/etc/httpd/vhosts.d/duck.sh.conf`

### List all buckets in a given region in S3

Note the `--region` parameter that limits the output to containers that are in the Frankfurt (eu-central-1) AWS data center.

> `osaka:~ dkocher$ duck --username <access-key-id> --password <secret-access-key> --list s3:/// --region eu-central-1`

### List files in a Rackspace container

Using the `--retry` option to retry the task on a networking failure.

> `osaka:~ dkocher$ duck --list rackspace://sandbox/ --retry Cloud Files connection opened… Login identity.api.rackspacecloud.com with username and password. No login credentials could be found in the Keychain. Username (dkocher): rackcloud Login as rackcloud API Key: Login successful… Cyberduck-4.6.1.zip`

Check out the output of `duck --help` and the [Cyberduck Wiki](https://trac.cyberduck.io/wiki/help/en/howto/cli) for more help about available commands and options.

To provide a seamless setup we provide [Homebrew](http://brew.sh/) packages on OS X, package repositories for YUM and APT on Linux and a [Chocolatey](https://chocolatey.org/) package on Windows. Besides there are regular installers for all platforms available if you use no package manager.
