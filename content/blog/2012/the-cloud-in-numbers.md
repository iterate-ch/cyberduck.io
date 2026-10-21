Title: The cloud in numbers
Date: 2012-03-23 14:10
Modified: 2012-03-23 14:10
Category: Cyberduck
Tags: access log, analytics, aws, statistics
Author: David Kocher
Slug: the-cloud-in-numbers
Summary: Guest post from Qloudstat. Cyberduck has for a long time supported access logging configuration for AWS S3 & CloudFront, Rackspace Cloudfiles CDN and recently Google Storage. Qloudstat comes to the rescue when it comes to draw a conclusion from the thousands of log files written to your logging container every day plotting data in beautiful graphs.

*Guest post from [Qloudstat](https://qloudstat.com "Qloudstat – The cloud in numbers. Plotted.").*

Cyberduck has for a [long time supported](/2009/08/14/latest-s3-improvements-for-content-distribution-fine-tuning/) access logging configuration for AWS S3  & CloudFront, Rackspace [Cloudfiles](http://trac.cyberduck.ch/wiki/help/en/howto/akamai#DistributionAccessLogging) CDN and [recently](/2011/11/07/activate-access-logs-for-google-cloud-storage/) Google Storage.

[Qloudstat](https://qloudstat.com "Qloudstat – The cloud in numbers. Plotted.") comes to the rescue when it comes to draw a conclusion from the thousands of log files written to your logging container every day plotting data in beautiful graphs.

[![](/2012/03/qloudstat-logo-black.png "qloudstat-logo-black")](/2012/03/qloudstat-logo-black.png)

> Qloudstat is doing analytics for not only hits but other crucial metrics such as bandwidth and transfer costs. Data is plotted in an interactive chart, timeline, table or geographical map split up by different dimensions in a user friendly web interface. Gain insight of URIs and filetypes used. List referring sites and search keywords. Analyze HTTP user agents, operations and status codes. Compare CDN edge locations. Visualize requests on a country, region or city map. The analytics provided are not static but queries can be made for for any given daily time period with custom filters applied. Dynamic reports are rendered instantaneously not dependent on the time period chosen to be visualized.
>
> Reports are updated continuously around the clock to give instant and always up to date statistics no matter of access volume or the number and size of log files. Qloudstat copes with the rapidly growing traffic using highly optimized scalable systems without any installation, administration, maintenance and infrastructure required by clients. During the 3 months private beta the service was already operational with customers facing up to 25 million hits per day.
>
> Qloudstat integrates with the market leaders in cloud storage and content delivery networks (CDN) currently supporting AWS S3, AWS CloudFront, Google Cloud Storage and Rackspace CloudFiles (Akamai CDN).
>
> Security is a pivotal requirement for cloud based applications. Qloudstat accesses log files in third party accounts using dedicated security credentials either using OAuth authentication for Google Cloud Storage or a user managed under the Identity and Access Management (IAM) for integration with Amazon Web Services. Log files are fetched using a TLS secured connection and the website to access reports is only available with HTTPS as well.
>
> Pricing is based on raw log data volume with four different monthly subscription plans offered. Additionally a free plan allows to use the service at zero costs for sites with less than 100’000 hits per month. With data liberation in mind, export formats for further external processing are provided.

Give it a try, there is a [zero cost](https://qloudstat.com/plans "Plans & Pricing") plan to get you started.
