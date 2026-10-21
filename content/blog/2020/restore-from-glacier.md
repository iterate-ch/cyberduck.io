Title: Restore from Glacier
Date: 2020-09-10 16:28
Modified: 2021-01-09 16:35
Category: Cyberduck
Author: David Kocher
Slug: restore-from-glacier
Summary: We have made available a feature in Cyberduck 7.6 and later to restore files from Glacier storage class in S3. You can temporarily restore files from Glacier using File → Restore for files with the storage class set to Glacier. The file will be restored using standard retrieval and expire in 2 days after retrieval. Restoring

We have made available a feature in Cyberduck [7.6](https://trac.cyberduck.io/milestone/7.6.0) and later to restore files from Glacier storage class in [S3](https://trac.cyberduck.io/wiki/help/en/howto/s3#RestorefromGlacier). You can temporarily restore files from Glacier using *File → Restore* for files with the storage class set to *Glacier*. The file will be restored using standard retrieval and expire in 2 days after retrieval. Restoring takes some time and attempting to download an item not yet restored will lead to an error *The operation is not valid for the object’s storage class. *

![](/2021/01/S3-Glacier-Storage-Class.png)
