Title: Skip writing temporary application files to remote volume
Date: 2017-11-27 20:47
Modified: 2017-11-27 20:48
Category: Mountain Duck
Author: David Kocher
Slug: skip-writing-temporary-application-files-to-remote-volume
Summary: We have taken a big leap forward in performance working on remote volumes with Mountain Duck from applications that read and write temporary files when saving documents. Extended attributes and temporary files from applications are no longer saved on the remote volume but in a local temporary cache only. This change in version 2.1 significantly speeds up

We have taken a big leap forward in performance working on remote volumes with [Mountain Duck](https://mountainduck.io/) from applications that read and write temporary files when saving documents. Extended attributes and temporary files from applications are no longer saved on the remote volume but in a local temporary cache only.

This change in version [2.1](https://mountainduck.io/changelog/) significantly speeds up read and write operations from applications.
