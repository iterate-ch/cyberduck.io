Title: Cyberduck swimming in the cloud
Date: 2008-12-01 01:27
Modified: 2008-12-01 01:27
Category: Cyberduck
Author: David Kocher
Slug: cyberduck-swimming-in-the-cloud
Summary: What follows is a newsflash of the current roadmap for features targeted in the 3.1 release. The latest 3.0.3 release improved stability and performance. We now look ahead for new features which complement the existing functionality already available: The next release is all about integration with recently announced cloud services. In particular, this means first

What follows is a newsflash of the current [roadmap](http://trac.cyberduck.ch/roadmap) for features targeted in the 3.1 release. The [latest 3.0.3 release](http://lists.cyberduck.ch/pipermail/cyberduck-news/2008-October/000042.html) improved stability and performance. We now look ahead for new features which complement the existing functionality already available: The next release is all about integration with recently announced *cloud* services. In particular, this means first class support for Amazon [CloudFront](http://aws.amazon.com/cloudfront/) and Mosso [Cloud Files](http://www.mosso.com/cloudfiles.jsp). Both services offer hosting solutions to deliver content at network edge locations nearest to the customer on a payment-per-use basis. Both are innovative solutions but implement proprietary protocols which lack support in commonly used client applications.

Cyberduck will try to facilitate the use of both content-delivery network (CDN), making them available for the rest of us. It greatly simplifies the configuration of your distributions for both providers. In practice, the workflow in Cyberduck is as follows:

-   Access your remote storage using the familiar Cyberduck browser interface creating containers (in Mosso Cloud Files) or buckets (in the Amazon S3 terminology) as you would create folders on a FTP server. Upload your original content using drag and drop.
-   Create a distribution to register that container with Amazon CloudFront or the Limelight Networks Content Distribution Network through a simple API call *by a single click in the Info panel of the browser*. When end users thereafter request a file, they are automatically routed to the nearest edge location for the fastest possible delivery of your content. Distribution can be toggled on or off at any time.

Try it out yourself using the latest available [nightly build](http://update.cyberduck.ch/nightly/) of Cyberduck. Feedback most appreciated!
