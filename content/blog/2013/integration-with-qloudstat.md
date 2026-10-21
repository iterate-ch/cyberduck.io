Title: Integration with Qloudstat
Date: 2013-04-25 15:09
Modified: 2013-04-25 15:09
Category: Cyberduck
Author: David Kocher
Slug: integration-with-qloudstat
Summary: (Cross posted from Qloudstat) If you already use Cyberduck to configure access logging for CloudFront distributions, S3 buckets or containers in Rackspace Cloudfiles, getting reports in Qloudstat just got a lot easier with the new Read Access for Qloudstat checkbox in the Info panel tab for CDN or S3 buckets. For Amazon S3 buckets or CloudFront distributions, this will

*(Cross posted from [Qloudstat](http://blog.qloudstat.com))*

If you already use Cyberduck to configure access logging for CloudFront distributions, S3 buckets or containers in Rackspace Cloudfiles, getting reports in Qloudstat just got a lot easier with the new *Read Access for Qloudstat *checkbox in the Info panel tab for CDN or S3 buckets. For Amazon S3 buckets or CloudFront distributions, this will create a dedicated IAM user with a read only IAM policy for Qloudstat to fetch log files. Unchecking the *Read Access for Qloudstat* checkbox will remove the IAM user again revoking all access for Qloudstat. When enabled, a clickable link is displayed that redirects to Qloudstat to confirm the new setup.

[![Rackspace Analytics Setup for Qloudstat in Cyberduck](/2013/04/Rackspace-Analytics-Setup-for-Qloudstat-in-Cyberduck.png)](/2013/04/Rackspace-Analytics-Setup-for-Qloudstat-in-Cyberduck.png)[![S3 Analytics Setup for Qloudstat in Cyberduck.png](/2013/04/S3-Analytics-Setup-for-Qloudstat-in-Cyberduck.png)](/2013/04/S3-Analytics-Setup-for-Qloudstat-in-Cyberduck.png)
