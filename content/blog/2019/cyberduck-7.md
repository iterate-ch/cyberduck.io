Title: Cyberduck 7
Date: 2019-06-05 08:00
Modified: 2019-06-05 11:32
Category: Cyberduck
Author: Laura Vogt
Slug: cyberduck-7
Summary: With Cyberduck 7 we introduce the possibility of a multi-segmented download. Multi-Segmented downloads offer the functionality to download one file over several connections. This has the advantage that some files can be downloaded faster and the download process is less error-prone. In previous versions of Cyberduck, there was only the possibility to run downloads over

With Cyberduck 7 we introduce the possibility of a multi-segmented download. Multi-Segmented downloads offer the functionality to download one file over several connections. This has the advantage that some files can be downloaded faster and the download process is less error-prone.

In previous versions of Cyberduck, there was only the possibility to run downloads over a single serial connection, the multisegmented download feature multiplies the connections making a parallel download process possible. The following diagram visualizes the two types of download described.

You can expect at least a **doubled download speed** if you use the multisegment download functionality. Some additional time is required to concatenate the downloaded segments after the download itself is complete. We have collected the following data in download tests with downloads from Amazon S3 and a [Minio](https://min.io/) server running locally.

|                        |              |                   |
|------------------------|--------------|-------------------|
|                        | **AWS EC2**¹ | **Local System**² |
| **Regular Download**   | 20 MByte/s   | 200 Mbyte/s       |
| **Segmented Download** | 40 Mbyte/s   | 1 GByte/s         |

¹ AWS EC2: T2.Medium against a regular S3 endpoint

² Local Minio S3 Server feeding data from local NVMe-PCIe-SSD

The described feature can be turned on or off in *Preferences* *→ Transfers* *→* *General → Downloads*.

![](/2019/03/Segmented-Download-Prefrences.png)

Refer to the full [changelog](https://cyberduck.io/changelog/) for many more enhancements and bug fixes.
