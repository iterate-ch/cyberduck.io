<?php include "../lang.php"; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<?php include "../functions.php"; ?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<?php echo(echoheader("..")); ?>
	<title><?php echo(echotitle("Changelog")); ?></title>
</head>

<body id="changelog">
	<div id="header">
		<?php echo(echologo(".."));?><?php echo(echocaption(".."));?><?php echo(echosubmenu(".."));?>
	</div>

	<div id="container">
		<div id="maincolumn">
			<?php echo(echogoogle());?>
			<div id="content">
				<table cellpadding="0" cellspacing="0">
					<tr>
						<td width="150" valign="top">
							<p><strong><a href="http://trac.cyberduck.ch/milestone/4.0.1">4.0.1</a> (8510)</strong> <em>Mar-08-2011</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-4.0.1.zip" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.zip', '/Cyberduck-4.0.1.zip']);">Download (Mac)</a>
							<a href="http://update.cyberduck.ch/windows/Cyberduck-Installer-4.0.1.exe" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.exe', '/Cyberduck-Installer-4.0.1.exe']);">Download (Windows)</a></p>
						</td>

						<td>
							<ul>
							    <li>[Bugfix] Uploading folders fails to create directories (<a
							            href="http://trac.cyberduck.ch/ticket/5749">#5749</a>)
							    </li>
						   </ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong><a href="http://trac.cyberduck.ch/milestone/4.0">4.0</a> (8505)</strong> <em>Mar-08-2011</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-4.0.zip" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.zip', '/Cyberduck-4.0.zip']);">Download (Mac)</a>
							<a href="http://update.cyberduck.ch/windows/Cyberduck-Installer-4.0.exe" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.exe', '/Cyberduck-Installer-4.0.exe']);">Download (Windows)</a></p>
							<p><strong><a href="4.0/Press_4.0_en.txt">Press Release (en)</a></strong><br />
							<strong><a href="4.0/Press_4.0_ja.txt">Press Release (ja)</a></strong></p>
						</td>

						<td>
							<ul>
							    <li>[Localize] Ukrainian Localization</li>
							    <li>[Feature] Version for Microsoft Windows XP, Windows Vista & Windows 7.</li>
							    <li>[Feature] Replaced protocol implementation (FTP)</li>
							    <li>[Feature] Connecting to Windows Azure Blob Storage (Azure) (<a
							            href="http://trac.cyberduck.ch/ticket/3938">#3938</a>)
							    </li>
							    <li>[Feature] Connecting to Dropbox</li>
							    <li>[Feature] Copy and paste files using menu item to duplicate</li>
							    <li>[Feature] Multipart Uploads with parallelism (S3) (<a
							            href="http://trac.cyberduck.ch/ticket/5487">#5487</a>)
							    </li>
							    <li>[Feature] Support new 5TB Object Size Limit (S3)</li>
							    <li>[Feature] Upload item in Finder context menu to upload selected file (Mac)</li>
							    <li>[Feature] Upload item in Services menu of thirdparty programs main menu supporting files and folders (Mac)</li>
							    <li>[Feature] Select bookmark to upload to when dragging files to application</li>
							    <li>[Feature] User interface to create symbolic links (SFTP) (<a
							            href="http://trac.cyberduck.ch/ticket/1724">#1724</a>)
							    </li>
							    <li>[Feature] Support for Asia Pacific (Tokyo) location (S3)</li>
							    <li>[Feature] Website endpoint configuration option for buckets (S3)</li>
							    <li>[Feature] CDN configuration for website endpoints as custom origin (CloudFront)</li>
							    <li>[Feature] Invalidation (Purge) of files in CDN (Cloud Files/Akamai)</li>
							    <li>[Feature] Skip option not available in transfer prompt (<a
							            href="http://trac.cyberduck.ch/ticket/1159">#1159</a>)
							    </li>
								<li>[Feature] Open connection in PuTTY Terminal for current working directory (SFTP) (#5593) (Windows)</li>
							    <li>[Bugfix] Limit number of concurrent transfers (<a
							            href="http://trac.cyberduck.ch/ticket/5539">#5539</a>)
							    </li>
							    <li>[Bugfix] Qeued transfers start in random order (#5632)</li>
							    <li>[Bugfix] Dragging into topmost folder in browser (<a
							            href="http://trac.cyberduck.ch/ticket/1945">#1945</a>)
							    </li>
							    <li>[Bugfix] ACLs getting dropped when updating metadata (S3) (<a
							            href="http://trac.cyberduck.ch/ticket/5571">#5571</a>)
							    </li>
							    <li>[Bugfix] .CDN_ACCESS_LOGS folder listing is empty (Cloud Files) (<a
							            href="http://trac.cyberduck.ch/ticket/5350">#5350</a>)
							    <li>[Bugfix] Unicode normalization for filenames in upload (<a
							            href="http://trac.cyberduck.ch/ticket/5162">#5162</a>)
							    </li>
							    <li>[Bugfix] Duplicate file breaks editing (<a
							            href="http://trac.cyberduck.ch/ticket/5524">#5524</a>)
							    </li>
							    <li>[Bugfix] Large transfer history causes slowdown (<a
							            href="http://trac.cyberduck.ch/ticket/2889">#2889</a>)
							    </li>
							    <li>[Bugfix] List all files regardless of document ownership (<a
							            href="http://trac.cyberduck.ch/ticket/5570">#5570</a>) (Google Docs)
							    </li>
							    <li>[Bugfix] Images always converted to documents (<a
							            href="http://trac.cyberduck.ch/ticket/5601">#5601</a>) (Google Docs)
							    </li>
							    <li>[Bugfix] Preserve symbolic links in uploads (<a
							            href="http://trac.cyberduck.ch/ticket/1860">#1860</a>) (SFTP)
							    </li>
							    <li>[Bugfix] High CPU usage after transfer has completed (<a
							            href="http://trac.cyberduck.ch/ticket/5640">#5640</a>)
							    </li>
							    <li>[Bugfix] Multiple distributions created (CloudFront) (<a
							            href="http://trac.cyberduck.ch/ticket/5675">#5675</a>)
							    </li>
								<li>[Bugfix] Passwords not saved when custom port set (#5623) (Windows)</li>
								<li>[Bugfix] Switching application interface language (#5718) (Windows)</li>
								<li>[Bugfix] Uploads with reduced redunandency fail (#5694) (S3) (Windows)</li>							
						   </ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong><a href="http://trac.cyberduck.ch/milestone/4.0">4.0 (Public Beta)</a> (8071)</strong> <em>Dec-13-2010</em><br />
							<a href="http://update.cyberduck.ch/windows/beta/Cyberduck-Installer-4.0b8.8071.exe" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.exe', '/Cyberduck-Installer-4.0b8.8071.exe']);">Download</a></p>
							</p><span class="version">Windows XP, Windows Vista or Windows 7 required.</span></p>
							<p><strong><a href="4.0/Press_4.0b8_en.txt">Press Release (en)</a></strong><br />
							<strong><a href="4.0/Press_4.0b8_ja.txt">Press Release (ja)</a></strong></p>
						</td>

						<td>
							<ul>
							    <li>[Feature] Version for Microsoft Windows XP, Windows Vista &amp; Windows 7.</li>
							    <li>[Feature] Connecting to Windows Azure Blob Storage (Azure) (<a
							            href="http://trac.cyberduck.ch/ticket/3938">#3938</a>)
							    </li>
						   </ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong><a href="http://trac.cyberduck.ch/milestone/3.8.1">3.8.1</a> (7954)</strong> <em>Dec-06-2010</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-3.8.1.zip" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.zip', '/Cyberduck-3.8.1.zip']);">Download</a></p>
						</td>

						<td>
							<ul>
							    <li>[Bugfix] Fails to display custom language preference (<a
							            href="http://trac.cyberduck.ch/ticket/5500">#5500</a>)
							    </li>
							    <li>[Bugfix] Clear data channels not supported (<a
							            href="http://trac.cyberduck.ch/ticket/5509">#5509</a>) (FTP-TLS)
							    </li>
							    <li>[Bugfix] Some files not displayed (<a
							            href="http://trac.cyberduck.ch/ticket/5505">#5505</a>) (FTP)
							    </li>
							    <li>[Bugfix] Wrong file size reported for uploads (<a
							            href="http://trac.cyberduck.ch/ticket/5503">#5503</a>)
							    </li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong><a href="http://trac.cyberduck.ch/milestone/3.8">3.8</a> (7920)</strong> <em>Dec-03-2010</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-3.8.zip" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.zip', '/Cyberduck-3.8.zip']);">Download</a></p>
							<p><strong><a href="3.8/Press_3.8_en.txt">Press Release (en)</a></strong><br />
							<strong><a href="3.8/Press_3.8_ja.txt">Press Release (ja)</a></strong></p>
						</td>

						<td>
							<ul>
							    <li>[Feature] CDN configuration with custom origin server (Amazon CloudFront)</li>
							    <li>[Feature] CDN invalidation requests (Amazon CloudFront) (<a
							            href="http://trac.cyberduck.ch/ticket/5197">#5197</a>)
							    </li>
							    <li>[Feature] Connecting to Swift Storage (Openstack)</li>
							    <li>[Feature] FireFTP Bookmarks Importer</li>
							    <li>[Feature] CrossFTP Bookmarks Importer</li>
							    <li>[Feature] Perform MD5 hash calculation during upload (<a
							            href="http://trac.cyberduck.ch/ticket/185">#5186</a>) (S3, Cloud Files)
							    </li>
							    <li>[Feature] Rename existing files on upload or download (<a
							            href="http://trac.cyberduck.ch/ticket/5117">#5117</a>)
							    </li>
							    <li>[Feature] Show last access timestamp in history (<a
							            href="http://trac.cyberduck.ch/ticket/3805">#3805</a>)
							    </li>
							    <li>[Feature] Synchronize comparing MD5 checksum of file (S3, Cloud Files, Dropbox, Azure)</li>
							    <li>[Feature] Display decimal file size (OS X 10.6) (<a
							            href="http://trac.cyberduck.ch/ticket/3771">#3771</a>)
							    </li>
							    <li>[Feature] Display relative date in browser (OS X 10.6)</li>
							    <li>[Bugfix] Slow SFTP transfers (<a
							            href="http://trac.cyberduck.ch/ticket/185">#185</a>)
							    </li>
							    <li>[Bugfix] Reduced upload preparation time for thousands of files</li>
							    <li>[Bugfix] Connect through HTTP/HTTPS proxy (<a
							            href="http://trac.cyberduck.ch/ticket/5379">#5379</a>)
							    </li>
							    <li>[Bugfix] Support for S3Fox directory placeholders (S3)</li>
							    <li>[Bugfix] Support for Google Storage Console directory placeholders (S3)</li>
							    <li>[Bugfix] Support for s3sync.rb directory placeholders (<a
							            href="http://trac.cyberduck.ch/ticket/5374">#5374</a>) (S3)
							    </li>
							    <li>[Bugfix] Connect through HTTP/HTTPS proxy (<a
							            href="http://trac.cyberduck.ch/ticket/5379">#5379</a>) (Google Docs)
							    </li>
							    <li>[Bugfix] Changing storage class fails (S3)</li>
							    <li>[Bugfix] Apply ACLs recursively (S3)</li>
							    <li>[Bugfix] Apply custom HTTP headers recursively (S3)</li>
							    <li>[Bugfix] Interoperability (<a
							            href="http://trac.cyberduck.ch/ticket/2609">#2609</a>, <a
							            href="http://trac.cyberduck.ch/ticket/4231">#4231</a>, <a
							            href="http://trac.cyberduck.ch/ticket/2915">#2915</a>) (WebDAV)
							    </li>
							    <li>[Bugfix] SSL version number incompatibility (<a
							            href="http://trac.cyberduck.ch/ticket/5061">#5061</a>)
							    </li>
							    <li>[Bugfix] Preserve upload modification date does not work for folders (<a
							            href="http://trac.cyberduck.ch/ticket/3017">#3017</a>)
							    </li>
							    <li>[Bugfix] Uploading large documents might fail (<a
							            href="http://trac.cyberduck.ch/ticket/5411">#5411</a>) (Google Docs)
							    </li>
							    <li>[Bugfix] Web URL configuration fails for relative default path (<a
							            href="http://trac.cyberduck.ch/ticket/4012">#4012</a>)
							    </li>
							    <li>[Bugfix] Support CIDR styled patterns for hosts excluded from proxy settings (<a
							            href="http://trac.cyberduck.ch/ticket/5142">#5142</a>)
							    </li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong><a href="http://trac.cyberduck.ch/milestone/3.7">3.7</a> (7380)</strong> <em>Oct-21-2010</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-3.7.zip" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.zip', '/Cyberduck-3.7.zip']);">Download</a></p>
						</td>

						<td>
							<ul>
							    <li>[Bugfix] Crash importing Transmit bookmarks for some users (<a
							            href="http://trac.cyberduck.ch/ticket/5351">#5351</a>)
							    </li>
						   </ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong><a href="http://trac.cyberduck.ch/milestone/3.7">3.7</a> (7367)</strong> <em>Oct-20-2010</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-3.7.zip" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.zip', '/Cyberduck-3.7.zip']);">Download</a></p>
						</td>

						<td>
							<ul>
							    <li>[Feature] Option to upload with temporary name and rename file after transfer is complete (<a
							            href="http://trac.cyberduck.ch/ticket/4165">#4165</a>)
							    </li>
							    <li>[Feature] Copy files between browser windows with different sessions (<a
							            href="http://trac.cyberduck.ch/ticket/21">#21</a>)
							    </li>
							    <li>[Feature] Option to display hidden files in upload prompt (<a
							            href="http://trac.cyberduck.ch/ticket/1243">#1243</a>)
							    </li>
							    <li>[Feature] Import Transmit favorites (<a href="http://trac.cyberduck.ch/ticket/3073">#3073</a>)</li>
							    <li>[Feature] Copy and open multiple URLs(<a href="http://trac.cyberduck.ch/ticket/5135">#5135</a>)
							    </li>
							    <li>[Feature] Support for PuTTY private key format (SFTP) (<a
							            href="http://trac.cyberduck.ch/ticket/5322">#5322</a>)
							    </li>
							    <li>[Feature] Duplicate Bookmarks using drag and drop with option key</li>
							    <li>[Feature] Display only affected files in synchronization preview (#5226)</li>
							    <li>[Feature] Change update source to snapshot builds in Preferences</li>
							    <li>[Bugfix] Files pasted upload to parent directory (<a href="http://trac.cyberduck.ch/ticket/5155">#5155</a>)
							    </li>
							    <li>[Bugfix] Uploading .xlsx or .docx documents fails with permission error (<a
							            href="http://trac.cyberduck.ch/ticket/5169">#5169</a>) (Google Docs)
							    </li>
							    <li>[Bugfix] Reading and writing ACLs (Google Docs)</li>
							    <li>[Bugfix] Interoperability with cPanel Web Disk (WebDAV) (<a
							            href="http://trac.cyberduck.ch/ticket/5188">#5188</a>)
							    </li>
							    <li>[Bugfix] Downloading previous versions of file (S3) (<a href="http://trac.cyberduck.ch/ticket/5217">#5217</a>)
							    </li>
							    <li>[Bugfix] Skip directories with matching timestamp from synchronization (<a
							            href="http://trac.cyberduck.ch/ticket/557">#557</a>)
							    </li>
							    <li>[Bugfix] Not using proper storage URL (<a href="http://trac.cyberduck.ch/ticket/5216">#5216</a>) (Swift
							        OpenStack)
							    </li>
							    <li>[Bugfix] Proxy connection failure (#5239) (S3)</li>
						   </ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong><a href="http://trac.cyberduck.ch/milestone/3.6.1">3.6.1</a> (6900)</strong> <em>Sep-07-2010</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-3.6.1.zip" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.zip', '/Cyberduck-3.6.1.zip']);">Download</a></p>
						</td>

						<td>
							<ul>
						        <li>[Bugfix] Permissions reset (FTP) (<a href="http://trac.cyberduck.ch/ticket/5132">#5132</a>)</li>
						        <li>[Bugfix] Failure reading symbolic link target for directories (SFTP) (<a
						                href="http://trac.cyberduck.ch/ticket/5141">#5141</a>)
						        </li>
						   </ul>
						</td>
					</tr>
					
					<tr>
						<td width="150" valign="top">
							<p><strong><a href="http://trac.cyberduck.ch/milestone/3.6">3.6</a> (6890)</strong> <em>Sep-06-2010</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-3.6.zip" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.zip', '/Cyberduck-3.6.zip']);">Download</a></p>
							<p><strong><a href="3.6/Press_3.6_en.txt">Press Release (en)</a></strong></p>
						</td>

						<td>
							<ul>
						        <li>[Feature] Connecting to Google Storage (Google Storage)</li>
						        <li>[Feature] Edit Access Control List (ACL) (<a href="http://trac.cyberduck.ch/ticket/3191">#3191</a>) (S3, Google
						            Storage, Google Docs)
						        </li>
						        <li>[Feature] Enable Bucket Versioning (<a href="http://trac.cyberduck.ch/ticket/4511">#4511</a>) (S3)</li>
						        <li>[Feature] Enable Bucket Multi-Factor Authentication Delete (<a
						                href="http://trac.cyberduck.ch/ticket/4510">#4510</a>) (S3)
						        </li>
						        <li>[Feature] Display previous file versions in browser (S3)</li>
						        <li>[Feature] Download previous file version (S3)</li>
						        <li>[Feature] Revert to previous file version (S3)</li>
						        <li>[Feature] Default root file (index.html) configuration for distribution (CloudFront)</li>
						        <li>[Feature] Eucalyptus Walrus support enabled by default (S3)</li>
						        <li>[Feature] Duplicate Bookmark (<a href="http://trac.cyberduck.ch/ticket/3385">#3385</a>)</li>
						        <li>[Feature] Import bookmarks from thirdparty applications (Filezilla, Fetch, Interarchy, Flow) (<a
						                href="http://trac.cyberduck.ch/ticket/3373">#3373</a>)
						        </li>
						        <li>[Feature] Copy directory listing to clipboard (<a href="http://trac.cyberduck.ch/ticket/2372">#2372)</a>
						        </li>
						        <li>[Feature] Support for thirdparty terminal applications (<a
						                href="http://trac.cyberduck.ch/ticket/2987">#2987</a>)
						        </li>
						        <li>[Feature] Change SSH options for open in Terminal.app (<a
						                href="http://trac.cyberduck.ch/ticket/4232">#4232</a>)
						        </li>
						        <li>[Feature] Unsecure connection warning when password is transmitted in plaintext</li>
						        <li>[Feature] Alert to change connection to TLS if server supports AUTH TLS (FTP)</li>
						        <li>[Feature] Edit metadata for multiple files (S3, Google Storage)</li>
						        <li>[Feature] Menu items to copy HTTP, CDN, signed &amp; authenticated URLs to clipboard (<a
						                href="http://trac.cyberduck.ch/ticket/4207">#4207)</a>)</li>
						        <li>[Feature] Menu items to open HTTP, CDN, signed &amp; authenticated URLs in Web Browser</li>
						        <li>[Feature] Move and rename files and folders (Google Docs)</li>
						        <li>[Feature] Update size display incrementally while calculating recursively (<a
						                href="http://trac.cyberduck.ch/ticket/3213">#3213)</a>)</li>
						        <li>[Feature] Hidden preference to change SSH options for 'Open in Terminal.app' (<a
						                href="http://trac.cyberduck.ch/ticket/4232">#4232)</a>)</li>
						        <li>[Feature] Batch editing of S3 metadata (Google Storage, S3) (<a href="http://trac.cyberduck.ch/ticket/5105">#5105)</a>)</li>
						        <li>[Feature] Show number of active transfers in Dock (<a href="http://trac.cyberduck.ch/ticket/3808">#3808)</a>)</li>
						        <li>[Feature] Copy directory listing to clipboard (<a href="http://trac.cyberduck.ch/ticket/2372">#2372)</a>)</li>
						        <li>[Bugfix] Improved interoperability with Eucalyptus Walrus (S3)</li>
						        <li>[Bugfix] Improved interoperability with Dunkel Cloud Storage (S3)</li>
						        <li>[Bugfix] Trust validation failure with self signed certificates for HTTP redirects (WebDAV) (
						            <a href="http://trac.cyberduck.ch/ticket/2443">#2443</a>)
						        </li>
						        <li>[Bugfix] Drag and drop of a file over a bookmark to upload (
						            <a href="http://trac.cyberduck.ch/ticket/4562">#4562</a>)
						        </li>
						        <li>[Bugfix] Connect authenticated to thirdparty buckets (S3) (
						            <a href="http://trac.cyberduck.ch/ticket/4480">#4480</a>)
						        </li>
						        <li>[Bugfix] Connections stalls after long idle (SFTP) (
						            <a href="http://trac.cyberduck.ch/ticket/5073">#5073)</a>, <a href="http://trac.cyberduck.ch/ticket/4214">#4214)</a>,
						            <a href="http://trac.cyberduck.ch/ticket/3941">#3941)</a>)
						        </li>
						        <li>[Bugfix] Dragging files for upload is slow (<a href="http://trac.cyberduck.ch/ticket/4141">#4141)</a>)</li>
						        <li>[Bugfix] STAT fails for directories containing spaces in filename (FTP) (<a
						                href="http://trac.cyberduck.ch/ticket/2500">#2500)</a>)
						        </li>
						        <li>[Bugfix] Upload to drop box gives file listing error (<a
						                href="http://trac.cyberduck.ch/ticket/2552">#2552)</a>)
						        </li>
						        <li>[Bugfix] Incompatibility with Akamai NetStorage (SFTP) (<a href="http://trac.cyberduck.ch/ticket/4015">#4015)</a>)
						        </li>
						        <li>[Bugfix] Usability of changing permissions in Info panel (FTP, SFTP) (<a
						                href="http://trac.cyberduck.ch/ticket/3930">#3930)</a>)
						        </li>
						   </ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong><a href="http://trac.cyberduck.ch/milestone/3.5.1">3.5.1</a> (6115)</strong> <em>Jun-15-2010</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-3.5.1.zip" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.zip', '/Cyberduck-3.5.1.zip']);">Download</a></p>
						</td>

						<td>
							<ul>
						        <li>[Bugfix] Crash opening Info window (<a href="http://trac.cyberduck.ch/ticket/4536">#4536</a>)</li>
						        <li>[Bugfix] Nested folder not visible (<a href="http://trac.cyberduck.ch/ticket/4534">#4534</a>) (Google Docs)</li>
						        <li>[Bugfix] Upload into folder not possible (<a href="http://trac.cyberduck.ch/ticket/4550">#4550</a>) (Google Docs)</li>
						        <li>[Bugfix] Downloading spreadsheets fails with permission error (<a href="http://trac.cyberduck.ch/ticket/4538
						        ">#4538</a>) (Google Docs)</li>
						        <li>[Bugfix] Replacing documents on upload adding new revision (Google Docs)</li>
						   </ul>
						</td>
					</tr>
					<tr>
						<td width="150" valign="top">
							<p><strong><a href="http://trac.cyberduck.ch/milestone/3.5">3.5</a> (6066)</strong> <em>Jun-09-2010</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-3.5.zip" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.zip', '/Cyberduck-3.5.zip']);">Download</a></p>
							<p><strong><a href="3.5/Press_3.5_en.txt">Press Release (en)</a></strong></p>
						</td>

						<td>
							<ul>
						        <li>[Localize] Slovenian Localization</li>
						        <li>[Localize] Romanian Localization</li>
						        <li>[Feature] Google Docs storage support (Google Docs)</li>
						        <li>[Feature] Convert uploads to Google Docs format (Google Docs)</li>
						        <li>[Feature] Download format preferences for documents (Google Docs)</li>
						        <li>[Feature] Optical Character Recognition (OCR) for image uploads (Google Docs)</li>
						        <li>[Feature] Support for Asia Pacific (Singapore) location (S3)</li>
						        <li>[Feature] Support for keyboard-interactive authentiation using SecurID (<a
						                href="http://trac.cyberduck.ch/ticket/4459">#4459</a>) (SFTP)
						        </li>
						        <li>[Feature] HTTP plain text connection support to connect to third party S3 servers (<a
						                href="http://trac.cyberduck.ch/ticket/4181">#4181</a>) (S3)
						        </li>
						        <li>[Feature] Custom metadata attributes (<a href="http://trac.cyberduck.ch/ticket/4063">#4063</a>) (S3,
						            Rackspace Cloud Files)
						        </li>
						        <li>[Feature] Configure Access Logs for CloudFront streaming distributions (S3)</li>
						        <li>[Feature] Option for Reduced Redundancy Storage (RRS) (S3)</li>
						        <li>[Bugfix] Overwrite files causes append (S3) (<a href="http://trac.cyberduck.ch/ticket/4419">#4419</a>)</li>
						        <li>[Bugfix] Connect anonymously to public buckets (S3) (<a
						                href="http://trac.cyberduck.ch/ticket/4419">#4480</a>)
						        </li>
						        <li>[Bugfix] Help menu items disabled (<a href="http://trac.cyberduck.ch/ticket/4406">#4406</a>)</li>
						   </ul>
						</td>
					</tr>
					<tr>
						<td width="150" valign="top">
							<p><strong><a href="http://trac.cyberduck.ch/milestone/3.4.2">3.4.2</a> (5902)</strong> <em>Apr-10-2010</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-3.4.2.zip" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.zip', '/Cyberduck-3.4.2.zip']);">Download</a></p>
						</td>

						<td>
							<ul>
						        <li>[Localize] Georgian Localization</li>
						        <li>[Feature] Choose localization in preferences</li>
						        <li>[Feature] Option to disable use of system proxy settings in preferences</li>
						        <li>[Feature] Allow arbitrary input for bandwidth throttle (<a
						                href="http://trac.cyberduck.ch/ticket/1746">#1746</a>)
						        </li>
						        <li>[Feature] Read hostname alias from ~/.ssh/config (SFTP) (<a href="http://trac.cyberduck.ch/ticket/3819">#3819</a>)
						        </li>
						        <li>[Feature] Allow page setup configuration for browser view print (<a
						                href="http://trac.cyberduck.ch/ticket/4139">#4139</a>)
						        </li>
						        <li>[Bugfix] Connections fail with at sign in username (WebDAV) (<a
						                href="http://trac.cyberduck.ch/ticket/4097">#4097</a>)
						        </li>
						        <li>[Bugfix] SOCKS proxy support broken (<a href="http://trac.cyberduck.ch/ticket/3803">#3803</a>)</li>
						   </ul>
						</td>
					</tr>
					<tr>
						<td width="150" valign="top">
							<p><strong><a href="http://trac.cyberduck.ch/milestone/3.4.1">3.4.1</a> (5780)</strong> <em>Jan-17-2010</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-3.4.1.zip" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.zip', '/Cyberduck-3.4.1.zip']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Feature] Display checksum of files in Info panel (S3, Rackspace Cloud Files) (<a
						                href="http://trac.cyberduck.ch/ticket/4043">#4043</a>)
						        </li>
						        <li>[Bugfix] Incompatibilities when running on OS X 10.5 (<a
						                href="http://trac.cyberduck.ch/ticket/4102">#4102</a>)
						        </li>
						   </ul>
						</td>
					</tr>
					<tr>
						<td width="150" valign="top">
							<p><strong><a href="http://trac.cyberduck.ch/milestone/3.4">3.4</a> (5755)</strong> <em>Jan-16-2010</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-3.4.zip" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.zip', '/Cyberduck-3.4.zip']);">Download</a></p>
						</td>

						<td>
							<ul>
						        <li>[Localize] Serbian Localization</li>
						        <li>[Feature] Support external editors with no ODB support for different file types (
						            <a href="http://trac.cyberduck.ch/ticket/3834">#3834</a>)
						        </li>
						        <li>[Feature] Allow user to define applications to use for editing (
						            <a href="http://trac.cyberduck.ch/ticket/3112">#3112</a>)
						        </li>
						        <li>[Feature] Configure Amazon CloudFront Streaming Distributions (S3) (<a
						                href="http://trac.cyberduck.ch/ticket/4069">#4069</a>)
						        </li>
						   </ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong><a href="http://trac.cyberduck.ch/milestone/3.3.1">3.3.1 (5676)</a></strong> <em>Jan-05-2010</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-3.3.1.zip" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.zip', '/Cyberduck-3.3.1.zip']);">Download</a></p>
						</td>

						<td>
							<ul>
						        <li>[Feature] Support for new US West Location (S3)</li>
						        <li>[Bugfix] Bookmark menu (<a href="http://trac.cyberduck.ch/ticket/3924">#3924</a>)</li>
						        <li>[Bugfix] SOCKS proxy support broken (<a href="http://trac.cyberduck.ch/ticket/3803">#3803</a>)</li>
						        <li>[Bugfix] Container listing limited to 10000 files (Rackspace Cloud Files) (<a
						                href="http://trac.cyberduck.ch/ticket/3950">#3950</a>)</li>
						        <li>[Bugfix] Synchronisation does not transfer files with equal size (<a
						                href="http://trac.cyberduck.ch/ticket/3100">#3100</a>)</li>
						        <li>[Bugfix] Selection in synchronize prompt (<a href="http://trac.cyberduck.ch/ticket/3901">#3901</a>)</li>
						        <li>[Bugfix] Bonjour bookmarks ignore TXT record with path and credentials attributes (<a
						                href="http://trac.cyberduck.ch/ticket/3901">#3984</a>)
						        </li>
						        <li>[Bugfix] Donation prompt cannot be supressed (<a href="http://trac.cyberduck.ch/ticket/3937">#3937</a>)</li>
						        <li>[Bugfix] Error when uploading file with different display name from real filename (<a
						                href="http://trac.cyberduck.ch/ticket/4041">#4041</a>)
						        </li>
						        <li>[Bugfix] Quick Connect needs extra keystroke to connect (<a href="http://trac.cyberduck.ch/ticket/3801">#3801</a>)
						        </li>
						        <li>[Bugfix] Password in non-default keychain are copied to login keychain (<a
						                href="http://trac.cyberduck.ch/ticket/2878">#2878</a>)
						        </li>
						   </ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong><a href="http://trac.cyberduck.ch/milestone/3.3">3.3</a> (5552)</strong> <em>Nov-13-2009</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-3.3.zip" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.zip', '/Cyberduck-3.3.zip']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Feature] Octal input field for permissions (<a href="http://trac.cyberduck.ch/ticket/13">#13</a>)</li>

								<li>[Bugfix] SOCKS proxy support broken (<a href="http://trac.cyberduck.ch/ticket/3803">#3803</a>)</li>

								<li>[Bugfix] Connect to default bookmark for new browser window (<a href="http://trac.cyberduck.ch/ticket/3798">#3798</a>)</li>

								<li>[Bugfix] Excessive Growl notifications (<a href="http://trac.cyberduck.ch/ticket/2388">#2388</a>)</li>

								<li>[Bugfix] Icon set explicitly for every downloaded file (<a href="http://trac.cyberduck.ch/ticket/3824">#3824]</a></li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>3.3b4 (5455)</strong> <em>Oct-09-2009</em><br />
							<a href="http://update.cyberduck.ch/beta/Cyberduck-3.3b4.zip" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.zip', '/beta/Cyberduck-3.3b4.zip']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Bugfix] Fails to launch with Japanese locale</li>

								<li>[Bugfix] Duplicate files in browser listing when sorting by modification date (<a href="http://trac.cyberduck.ch/ticket/3745">#3745</a>)</li>

								<li>[Bugfix] Wrong menu item font size (<a href="http://trac.cyberduck.ch/ticket/3736">#3736</a>)</li>

								<li>[Bugfix] Various bugfixes</li>

								<li>[Feature] CDN Log Retention (Rackspace Cloud Files)</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>3.3b3 (5321)</strong> <em>Sep-21-2009</em><br />
							<a href="http://update.cyberduck.ch/beta/Cyberduck-3.3b3.zip" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.zip', '/beta/Cyberduck-3.3b3.zip']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Feature] PPC support again available</li>

								<li>[Bugfix] Some localizations broken (<a href="http://trac.cyberduck.ch/ticket/3648">#3648</a>)</li>

								<li>[Bugfix] Various bugfixes and performance improvements</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>3.3b2 (5220)</strong> <em>Sep-05-2009</em><br />
							<a href="http://update.cyberduck.ch/beta/Cyberduck-3.3b2.zip" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.zip', '/beta/Cyberduck-3.3b2.zip']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Feature] 64-bit support</li>

								<li>[Bugfix] Various bugfixes</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>3.3b1 (5185)</strong> <em>Aug-28-2009</em><br />
							<a href="http://update.cyberduck.ch/beta/Cyberduck-3.3b1.zip" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.zip', '/beta/Cyberduck-3.3b1.zip']);">Download</a><br />
							<br />
							<span class="version">Mac OS X 10.5 or later required.</span></p>
						</td>

						<td>
							<ul>
								<li>[Bugfix] Incompatibility with Mac OS X 10.6 (Snow Leopard) (<a href="http://trac.cyberduck.ch/ticket/3039">#3039</a>)</li>

								<li>[Feature] New application icon (Thanks to Dietmar Kerschner)</li>

								<li class="removed">[Feature] AppleScript support</li>

								<li class="removed">[Feature] Dashboard Widget</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong><a href="http://trac.cyberduck.ch/milestone/3.2.1">3.2.1</a> (4923)</strong> <em>Jul-14-2009</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-3.2.1.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-3.2.1.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Feature] Create placeholder objects for virtual directory (S3)</li>

								<li>[Feature] Info window displays signed temporary public URL with a default validity of 24 hours (S3)</li>

								<li>[Feature] Info window displays BitTorrent URL of file (S3)</li>

								<li>[Feature] Option to enable Bucket Access Logging in the Info window (S3)</li>

								<li>[Feature] Option to enable CloudFront Access Logging in the Info window (S3)</li>

								<li>[Feature] Updated to Cloudfront API Version 2009-04-02 (S3)</li>

								<li>[Feature] Access third party buckets using anonymous login (S3)</li>

								<li>[Feature] Editable hostname to connect to third party services implementing S3 (<a href="http://trac.cyberduck.ch/ticket/3125">#3125</a>) (S3)</li>

								<li>[Feature[ Option to specify object expiration using Cache-Control header (<a href="http://trac.cyberduck.ch/ticket/3185">#3185</a>) (S3)</li>

								<li>[Bugfix] MobileMe iDisk upload failures (WebDAV) (<a href="http://trac.cyberduck.ch/ticket/3149">#3149</a>)</li>

								<li>[Bugfix] Overwrite action causes empty downloaded file (<a href="http://trac.cyberduck.ch/ticket/3252">#3252</a>)</li>

								<li>[Bugfix] Status bar is draggable (<a href="http://trac.cyberduck.ch/ticket/2159">#2159</a>)</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong><a href="http://trac.cyberduck.ch/milestone/3.2">3.2</a> (4648)</strong> <em>Apr-26-2009</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-3.2.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-3.2.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Feature] Choose Time Zone for bookmark (FTP) (<a href="http://trac.cyberduck.ch/ticket/434">#434</a>)</li>

								<li>[Feature] IPv6 Interoperability with support for EPSV and EPRT commands (FTP) (<a href="http://trac.cyberduck.ch/ticket/2539">#2539</a>, <a href=
								"http://trac.cyberduck.ch/ticket/2539">#2885</a>)</li>

								<li>[Feature] UTF8 charset negogiation (<a href="http://tools.ietf.org/html/draft-ietf-ftpext-utf-8-option-00">draft-ietf-ftpext-utf-8-option-00</a>) (FTP)</li>

								<li>[Feature] Support for directory listings using MLSD (<a href="http://tools.ietf.org/html/rfc3659">RFC 3659</a>) (FTP)</li>

								<li>[Feature] Support for Modification Time (MFMT) extension (<a href="http://tools.ietf.org/html/draft-somers-ftp-mfxx-04">draft-somers-ftp-mfxx-04</a>) (FTP)</li>

								<li>[Feature] Support for hierarchical directory structure (Mosso)</li>

								<li>[Feature] Added Espresso to the list of supported editors (http://macrabbit.com/espresso/) (<a href="http://trac.cyberduck.ch/ticket/2823">#2823</a>)</li>

								<li>[Feature] Display date of transfer (<a href="http://trac.cyberduck.ch/ticket/1462">#1462</a>)</li>

								<li>[Feature] Display percentage transferred (<a href="http://trac.cyberduck.ch/ticket/2618">#2618</a>)</li>

								<li>[Feature] Option for big sized icons in bookmark list</li>

								<li>[Feature] Drag URL to browser window to open connection (<a href="http://trac.cyberduck.ch/ticket/2326">#2326</a>)</li>

								<li>[Feature] Display realm of HTTP authentication (WebDAV) (<a href="http://trac.cyberduck.ch/ticket/3083">#3083</a>)</li>

								<li>[Bugfix] Update passwords in Keychain (<a href="http://trac.cyberduck.ch/ticket/2984">#2984</a>)</li>

								<li>[Bugfix] Only reauthenticate when needed (Mosso) (<a href="http://trac.cyberduck.ch/ticket/2876">#2876</a>)</li>

								<li>[Bugfix] Invalid Origin parameter when creating CloudFront distribution (S3) (<a href="http://trac.cyberduck.ch/ticket/3068">#3068</a>)</li>

								<li>[Bugfix] Improve Interoperability (WebDAV) (<a href="http://trac.cyberduck.ch/ticket/2974">#2974</a>, <a href=
								"http://trac.cyberduck.ch/ticket/3076">#3076</a>)</li>

								<li>[Bugfix] Different recursive permissions for directory and files (<a href="http://trac.cyberduck.ch/ticket/1787">#1787</a>)</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong><a href="http://trac.cyberduck.ch/milestone/3.1.2">3.1.2</a> (4500)</strong> <em>Feb-01-2009</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-3.1.2.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-3.1.2.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Feature] Enforce hostname verification (SSL)</li>

								<li>[Feature] Improved container listing performance (Mosso)</li>

								<li>[Feature] Updated bookmark icons (by Robert Curtis)</li>

								<li>[Bugfix] Fix Amazon CloudFront distribution configuration</li>

								<li>[Bugfix] Accept valid certificates without prompt if no explicit trust is given (SSL)</li>

								<li>[Bugfix] Files not downloaded recursively (S3)</li>

								<li>[Bugfix] Create and expand archives with space in filename (#2884)</li>

								<li>[Bugfix] Incorrect CDN URI for public containers (Mosso) (#2875)</li>

								<li>[Bugfix] Observe bandwidth setting for uploads (Mosso/WebDAV)</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong><a href="http://trac.cyberduck.ch/milestone/3.1.1">3.1.1</a> (4457)</strong> <em>Jan-10-2009</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-3.1.1.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-3.1.1.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Bugfix] Crash if no default login name is set in Preferences (<a href="http://trac.cyberduck.ch/ticket/2852">#2852</a>)</li>

								<li>[Bugfix] Upload incompatibility (WebDAV) (<a href="http://trac.cyberduck.ch/ticket/2858">#2858</a>)</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong><a href="http://trac.cyberduck.ch/milestone/3.1">3.1</a> (4448)</strong> <em>Jan-08-2009</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-3.1.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-3.1.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Feature] Amazon CloudFront Support (S3)</li>

								<li>[Feature] Cloud Files Support (Mosso) (<a href="http://trac.cyberduck.ch/ticket/2745">#2745</a>)</li>

								<li>[Feature] Pre-configured protocol settings for MobileMe iDisk (WebDAV)</li>

								<li>[Feature] Send arbitrary commands over SSH using the 'Send Command...' interface (SFTP) (<a href="http://trac.cyberduck.ch/ticket/3">#3</a>)</li>

								<li>[Feature] Archive and unarchive files and folders (ZIP, TAR etc.) (SFTP) (<a href="http://trac.cyberduck.ch/ticket/2376">#2376</a>)</li>

								<li>[Feature] Clickable URL fields</li>

								<li>[Feature] Set quarantine attribute for launch services of downloaded files</li>

								<li>[Feature] Finder displays URL of downloaded files in 'Where from' in 'Get Info' window</li>

								<li>[Feature] Download folder in Dock bounces once when download finishes (10.5)</li>

								<li>[Feature] Read IdentityFile setting from OpenSSH configuration in ~/.ssh/config (SFTP) (<a href="http://trac.cyberduck.ch/ticket/152">#152</a>)</li>

								<li>[Feature] Default transfer setting for regular expression of skipped files includes GIT and others (<a href="http://trac.cyberduck.ch/ticket/2829">#2829</a>)</li>

								<li>[Feature] Added QuickLook button to toolbar configuration</li>

								<li>[Feature] Display Favicon for Web URL if available in bookmark window</li>

								<li>[Feature] NTLM Authentication (WebDAV) (<a href="http://trac.cyberduck.ch/ticket/2835">#2835</a>)</li>

								<li>[Bugfix] Uploads fail with digest access authentication (WebDAV) (<a href="http://trac.cyberduck.ch/ticket/2268">#2268</a>)</li>

								<li>[Bugfix] Microsoft SharePoint interoperability (WebDAV) (<a href="http://trac.cyberduck.ch/ticket/2223">#2223</a>)</li>

								<li>[Bugfix] Manually sorting bookmarks using drag and drop works for the entire row (<a href="http://trac.cyberduck.ch/ticket/2571">#2571</a>)</li>

								<li>[Bugfix] Passwords stored in non default keychain are ignored (<a href="http://trac.cyberduck.ch/ticket/2001">#2001</a>)</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong><a href="http://trac.cyberduck.ch/milestone/3.0.3">3.0.3</a></strong> <em>Oct-20-2008</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-3.0.3.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-3.0.3.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Bugfix] Arbitrary Crashes (<a href="http://trac.cyberduck.ch/ticket/2142">#2142</a>)</li>

								<li>[Bugfix] Symbolic links not parsed properly for some STAT listings (FTP) (<a href="http://trac.cyberduck.ch/ticket/2435">#2435</a>)</li>

								<li>[Bugfix] Open Web URL fails (<a href="http://trac.cyberduck.ch/ticket/2466">#2466</a>)</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong><a href="http://trac.cyberduck.ch/milestone/3.0.2">3.0.2</a></strong> <em>Aug-10-2008</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-3.0.2.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-3.0.2.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Localize] Greek Localization</li>

								<li>[Feature] Added transcript (S3)</li>

								<li>[Feature] Added transcript (WebDAV)</li>

								<li>[Feature] Support for faster directory listings using STAT command on the control connection (FTP) (<a href="http://trac.cyberduck.ch/ticket/683">#683</a>)</li>

								<li>[Feature] Display bookmark view for new browser window (<a href="http://trac.cyberduck.ch/ticket/2252">#2252</a>)</li>

								<li>[Feature] Option in browser context menu to open selected folder in new browser (<a href="http://trac.cyberduck.ch/ticket/2036">#2036</a>)</li>

								<li>[Feature] Option in browser context menu to add bookmark for selected folder (<a href="http://trac.cyberduck.ch/ticket/2222">#2222</a>)</li>

								<li>[Feature] 'Add new bookmark' toolbar button</li>

								<li>[Feature] Cannot select private key in login prompt (SSH) (<a href="http://trac.cyberduck.ch/ticket/2221">#2221</a>)</li>

								<li>[Feature] Authentication with both password and public key (SSH) (<a href="http://trac.cyberduck.ch/ticket/2203">#2203</a>)</li>

								<li>[Bugfix] Moving or copying files to another bucket fails (S3) (<a href="http://trac.cyberduck.ch/ticket/2157">#2157</a>)</li>

								<li>[Bugfix] Folders collapse in outline view when refreshing (<a href="http://trac.cyberduck.ch/ticket/2033">#2033</a>)</li>

								<li>[Bugfix] Cannot connect with empty password (<a href="http://trac.cyberduck.ch/ticket/2109">#2109</a>)</li>

								<li>[Bugfix] Saving when editor exits does not upload edited file (<a href="http://trac.cyberduck.ch/ticket/2120">#2120</a>)</li>

								<li>[Bugfix] Wrong selection with search filter in Transfer window (<a href="http://trac.cyberduck.ch/ticket/2336">#2336</a>)</li>

								<li>[Bugfix] Stop button does not work during countdown to retry transfer (<a href="http://trac.cyberduck.ch/ticket/2121">#2121</a>)</li>

								<li>[Bugfix] Transfers fail using AppleScript (SFTP) (<a href="http://trac.cyberduck.ch/ticket/2244">#2244</a>)</li>

								<li>[Bugfix] Update Growl.framework to 1.1.4</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>3.0.1</strong> <em>May-18-2008</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-3.0.1.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-3.0.1.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Feature] Added Taco HTML Edit to the list of supported editors (<a href="http://tacosw.com/htmledit/beta.php">http://tacosw.com/htmledit/beta.php</a>) (<a href=
								"http://trac.cyberduck.ch/ticket/188">#188</a>)</li>

								<li>[Bugfix] Cannot connect to servers with unknown host key (<a href="http://trac.cyberduck.ch/ticket/2044">#2044</a>)</li>

								<li>[Bugfix] Cannot edit filename in Info panel (<a href="http://trac.cyberduck.ch/ticket/2049">#2049</a>)</li>

								<li>[Bugfix] External editor failures (<a href="http://trac.cyberduck.ch/ticket/2041">#2041</a>, <a href="http://trac.cyberduck.ch/ticket/2039">#2039</a>, <a href=
								"http://trac.cyberduck.ch/ticket/2052">#2052</a>, <a href="http://trac.cyberduck.ch/ticket/2058">#2058</a>)</li>

								<li>[Bugfix] Missing resume option in transfer prompt</li>

								<li>[Bugfix] Removed keep connection active feature. (<a href="http://trac.cyberduck.ch/ticket/2057">#2057</a>)</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>3.0</strong> <em>May-14-2008</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-3.0.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-3.0.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Feature] Support for file renaming and copying (Amazon S3)</li>

								<li>[Feature] Support for copying files (WebDAV)</li>

								<li>[Bugfix] Transfers larger than 2GB fail (SFTP) (<a href="http://trac.cyberduck.ch/ticket/1235">#1235</a>)</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>3.0b3</strong> <em>May-04-2008</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-3.0b3.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-3.0b3.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Feature] Activity Window (<a href="http://trac.cyberduck.ch/ticket/">#1250</a>)</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>3.0b2</strong> <em>Apr-19-2008</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-3.0b2.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-3.0b2.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Localize] Latvian Localization</li>

								<li>[Feature] Quick Look files in browser (<a href="http://trac.cyberduck.ch/ticket/1580">#1580</a>)</li>

								<li>[Feature] Set corresponding Web URL in bookmark. <i>Open in Browser</i> toolbar button (<a href="http://trac.cyberduck.ch/ticket/1098">#1098</a>)</li>

								<li>[Bugfix] APPE command broken (FTP) (<a href="http://trac.cyberduck.ch/ticket/1915">#1915</a>)</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>3.0b1</strong> <em>Apr-07-2008</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-3.0b1.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-3.0b1.dmg']);">Download</a><br />
							<br />
							<span class="version">Mac OS X 10.4 or later required.</span></p>
						</td>

						<td>
							<ul>
								<li>[Feature] Amazon Simple Storage Service (S3) support (http://aws.amazon.com/s3) (<a href="http://trac.cyberduck.ch/ticket/1725">#1725</a>)</li>

								<li>[Feature] WebDAV protocol support (<a href="http://trac.cyberduck.ch/ticket/464">#464</a>)</li>

								<li>[Feature] Search bookmarks (<a href="http://trac.cyberduck.ch/ticket/916">#916</a>)</li>

								<li>[Feature] Bookmark editor inside browser window instead of drawer</li>

								<li>[Feature] Read trust settings for certificates from Keychain</li>

								<li>[Feature] Different editors for different file types (<a href="http://trac.cyberduck.ch/ticket/146">#146</a>)</li>

								<li>[Feature] PRET (PRE Transfer) command support for distributed FTP (http://www.drftpd.org) (<a href="http://trac.cyberduck.ch/ticket/684">#684</a>)</li>

								<li>[Feature] Skip option not available in transfer prompt (<a href="http://trac.cyberduck.ch/ticket/1159">#1159</a>)</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.8.5</strong> <em>Apr-07-2008</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.8.5.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.8.5.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Feature] Added ForgEdit to the list of supported editors (http://forgedit.com) (<a href="http://trac.cyberduck.ch/ticket/1779">#1779</a>)</li>

								<li>[Bugfix] Downloads no longer keep modified date (<a href="http://trac.cyberduck.ch/ticket/1756">#1756</a>)</li>

								<li>[Bugfix] Leap year bug wen parsing date without year (<a href="http://trac.cyberduck.ch/ticket/1813">#1813</a>)</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.8.4</strong> <em>Jan-25-2008</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.8.4.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.8.4.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Bugfix] Crash when dismissing sheet attached to window (<a href="http://trac.cyberduck.ch/ticket/1616">#1616</a>)</li>

								<li>[Bugfix] Resolving Bonjour names blocks user interface (<a href="http://trac.cyberduck.ch/ticket/1657">#1657</a>)</li>

								<li>[Bugfix] Closing browser window during connection attempt blocks user interface</li>

								<li>[Bugfix] Downloading to default download location when dragging folder to Finder (<a href="http://trac.cyberduck.ch/ticket/1611">#1611</a>)</li>

								<li>[Feature] Add group ownership as optional browser column (<a href="http://trac.cyberduck.ch/ticket/1590">#1590</a>)</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.8.3</strong> <em>Jan-14-2008</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.8.3.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.8.3.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Feature] Log Drawer in browser and transfer window</li>

								<li>[Feature] Toolbar button to open Terminal.app SSH session in current working directory (SFTP) (<a href="http://trac.cyberduck.ch/ticket/1508">#1508</a>)</li>

								<li>[Feature] Added MacVim to the list of supported editors (<a href="http://code.google.com/p/macvim/">http://code.google.com/p/macvim/</a>) (<a href=
								"http://trac.cyberduck.ch/ticket/1322">#1322</a>)</li>

								<li>[Feature] Custom icon for executable files (<a href="http://trac.cyberduck.ch/ticket/945">#945</a>)</li>

								<li>[Bugfix] Frequent crashes (<a href="http://trac.cyberduck.ch/ticket/1401">#1401</a>, <a href="http://trac.cyberduck.ch/ticket/1409">#1409</a>)</li>

								<li>[Bugfix] Does not change to correct directory when using a bookmark to the same server (<a href="http://trac.cyberduck.ch/ticket/1411">#1411</a>)</li>

								<li>[Bugfix] Preserve leading and trailing whitespace when parsing filenames (FTP) (<a href="http://trac.cyberduck.ch/ticket/1381">#1381</a>)</li>

								<li>[Bugfix] Directory parser compatibility with Webstar Server (FTP) (<a href="http://trac.cyberduck.ch/ticket/1302">#1302</a>)</li>

								<li>[Bugfix] Directory parser compatibility with Freebox Server (FTP) (<a href="http://trac.cyberduck.ch/ticket/1258">#1258</a>)</li>

								<li>[Bugfix] Directory parser compatibility with Trellix Server (FTP) (<a href="http://trac.cyberduck.ch/ticket/1213">#1213</a>)</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.8.2</strong> <em>Dec-11-2007</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.8.2.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.8.2.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Feature] Show transfer progress when using browser session (<a href="http://trac.cyberduck.ch/ticket/1313">#1313</a>)</li>

								<li>[Feature] Accept relative paths in bookmark setting (<a href="http://trac.cyberduck.ch/ticket/1167">#1167</a>)</li>

								<li>[Feature] Added MacVim to the list of supported editors (http://slashpunt.org/vim/) (<a href="http://trac.cyberduck.ch/ticket/1322">#1322</a>)</li>

								<li>[Feature] Ugly folder icons rendered (10.5)</li>

								<li>[Feature] Back and forward history menu for browser navigation buttons (<a href="http://trac.cyberduck.ch/ticket/1080">#1080</a>)</li>

								<li>[Bugfix] Writing corrupted entries to the Keychain (10.5) (<a href="http://trac.cyberduck.ch/ticket/1354">#1354</a>)<br />
								<strong>Warning! Due to this bug you may have to reenter your passwords the first time connecting to each server</strong></li>

								<li>[Bugfix] Cannot drag files to working directory when there is no space left (<a href="http://trac.cyberduck.ch/ticket/60">#60</a>)</li>

								<li>[Bugfix] Bookmarks drawer remembers width (<a href="http://trac.cyberduck.ch/ticket/371">#371</a>)</li>

								<li>[Bugfix] Crashes after application launch (10.3.9) (<a href="http://trac.cyberduck.ch/ticket/1339">#1339</a>)</li>

								<li>[Bugfix] Downloading multiple files with same name in outline hierarchy (<a href="http://trac.cyberduck.ch/ticket/1400">#1400</a>)</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.8.1</strong> <em>Nov-18-2007</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.8.1.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.8.1.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Feature] Application code is signed (10.5)</li>

								<li>[Bugfix] Saving file in external editor does not cause upload (10.5) (<a href="http://trac.cyberduck.ch/ticket/1244">#1244</a>)</li>

								<li>[Bugfix] Login failure with correct credentials (<a href="http://trac.cyberduck.ch/ticket/1231">#1231</a>)</li>

								<li>[Bugfix] Failure to list directory on some servers (SFTP) (<a href="http://trac.cyberduck.ch/ticket/1170">#1170</a>)</li>

								<li>[Bugfix] Transfers fails with punctuation characters in path (SCP) (<a href="http://trac.cyberduck.ch/ticket/1265">#1265</a>)</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.8</strong> <em>Sept-10-2007</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.8.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.8.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Feature] Using Ganymed SSH2 library (<a href="http://trac.cyberduck.ch/ticket/185">#185</a>)</li>

								<li>[Feature] Support for SCP transfers (<a href="http://trac.cyberduck.ch/ticket/1043">#1043]</a></li>

								<li>[Feature] Queuing file transfers (<a href="http://trac.cyberduck.ch/ticket/986">#986</a>)</li>

								<li>[Feature] Automatic retry of failed network operations (<a href="http://trac.cyberduck.ch/ticket/783">#783</a>)</li>

								<li>[Feature] Limit available bandwidth for transfers (<a href="http://trac.cyberduck.ch/ticket/48">#48</a>)</li>

								<li>[Feature] Browse folder hierarchy in overwrite warning dialog (<a href="http://trac.cyberduck.ch/ticket/18">#18</a>)</li>

								<li>[Feature] Browse folder hierarchy in synchronisation dialog (<a href="http://trac.cyberduck.ch/ticket/18">#18</a>)</li>

								<li>[Feature] Use small icons in the bookmark drawer (#--)</li>

								<li>[Feature] Set the default protocol helper application for FTP and SFTP URLs (<a href="http://trac.cyberduck.ch/ticket/1049">#1049</a>)</li>

								<li>[Feature] Setting default permissions for folders (<a href="http://trac.cyberduck.ch/ticket/77">#77</a>)</li>

								<li>[Feature] Notes for bookmarks (<a href="http://trac.cyberduck.ch/ticket/67">#67</a>)</li>

								<li>[Feature] Use system setting for connect mode (FTP)<br />
								<strong>Warning! Make sure your setting in <i>System Preferences → Network → Use Passive FTP Mode (PASV)</i> is checked to get the same default setting as in previous
								versions.</strong></li>

								<li>[Feature] Added WriteRoom to the list of supported editors (http://hogbaysoftware.com/projects/writeroom)</li>

								<li>[Feature] Create known hosts file if missing (SFTP)</li>

								<li>[Bugfix] Improvements to the synchronization dialog (<a href="http://trac.cyberduck.ch/ticket/1189">#1189</a>)</li>

								<li>[Bugfix] Don't use SOCKS proxy if hostname is excluded in system preferences</li>

								<li>[Bugfix] Resolve Alias files to upload (<a href="http://trac.cyberduck.ch/ticket/859">#859</a>)</li>

								<li>[Bugfix] Subsequent type-ahead selection misbehaving (<a href="http://trac.cyberduck.ch/ticket/896">#896</a>)</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.7.3</strong> <em>Feb-12-2007</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.7.3.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.7.3.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Bugfix] Problem parsing PASV response from some servers (FTP) <a href="http://trac.cyberduck.ch/ticket/779">#779</a>, <a href=
								"http://trac.cyberduck.ch/ticket/86">#869</a>)</li>

								<li>[Bugfix] Stalls when connection is interrupted during DNS lookup <a href="http://trac.cyberduck.ch/ticket/960">#960</a>)</li>

								<li>[Bugfix] Improved sorting in 'Kind' browser column <a href="http://trac.cyberduck.ch/ticket/993">#993</a>)</li>

								<li>[Bugfix] Renaming files using Info panel causes repeated renaming <a href="http://trac.cyberduck.ch/ticket/1005">#1005</a>)</li>

								<li>[Bugfix] Uploading folders interrupts file transfer (SFTP) <a href="http://trac.cyberduck.ch/ticket/1001">#1001</a>)</li>

								<li>[Bugfix] Preference for auto-open delay for spring-loaded folders not saved <a href="http://trac.cyberduck.ch/ticket/633">#633</a>)</li>

								<li>[Bugfix] Preference to open new browser window on launch not used <a href="http://trac.cyberduck.ch/ticket/997">#997</a>)</li>

								<li>[Bugfix] Symbolic links on local filesystem not handled properly (<a href="http://trac.cyberduck.ch/ticket/995">#995</a>)</li>

								<li>[Bugfix] Send creation time of file with UTIME (#--)</li>

								<li>[Feature] Clear command in History menu (<a href="http://trac.cyberduck.ch/ticket/648">#648</a>)</li>

								<li>[Feature] Preference to exclude files from transfers using regular expression (<a href="http://trac.cyberduck.ch/ticket/511">#511</a>)</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.7.2</strong> <em>Jan-15-2007</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.7.2.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.7.2.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Feature] Option to use single connection for browser and transfers (<a href="http://trac.cyberduck.ch/ticket/57">#57</a>)</li>

								<li>[Feature] Option to remember open browser windows and reconnect upon relaunching the application (<a href="http://trac.cyberduck.ch/ticket/59">#59</a>)</li>

								<li>[Feature] Delay for spring-loaded folders can be set (<a href="http://trac.cyberduck.ch/ticket/633">#633</a>)</li>

								<li>[Feature] Calculate size of directory (<a href="http://trac.cyberduck.ch/ticket/5">#5</a>)</li>

								<li>[Feature] Duplicate files using option-drag (<a href="http://trac.cyberduck.ch/ticket/150">#150</a>)</li>

								<li>[Feature] Per bookmark setting for download folder (<a href="http://trac.cyberduck.ch/ticket/158">#158</a>)</li>

								<li>[Feature] Per bookmark setting to use single connection for browser and transfers (#--)</li>

								<li>[Feature] Advanced settings in connection and bookmark window in disclosable view</li>

								<li>[Feature] Added PageSpinner to the list of supported editors (http://www.optima-system.com/pagespinner) (#205)</li>

								<li>[Bugfix] Disconnecting in the background not blocking the user interface (#--)</li>

								<li>[Bugfix] Folders marked as inaccessible after timeouts and cannot be opened after reconnecting (<a href="http://trac.cyberduck.ch/ticket/611">#611</a>)</li>

								<li>[Bugfix] Applescript/Dashboard should not use seperate session for transfers (#--)</li>

								<li>[Bugfix] Cannot write to group writable files (SFTP) (<a href="http://trac.cyberduck.ch/ticket/173">#173</a>)</li>

								<li>[Bugfix] File length is set to zero if updating permission fails (SFTP) (<a href="http://trac.cyberduck.ch/ticket/974">#974</a>)</li>

								<li>[Bugfix] Directory listing is not refreshed when upload is completed after "Try Again" (<a href="http://trac.cyberduck.ch/ticket/982">#982</a>)</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.7.1</strong> <em>Nov-29-2006</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.7.1.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.7.1.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Localize] Portuguese Localization</li>

								<li>[Bugfix] Reporting error about failed to set permissions whereas it actually succeeded (#--)</li>

								<li>[Bugfix] Fail gracefully on uploading when server doesn't support changing permissions (#--)</li>

								<li>[Bugfix] Disconnecting from server could crash application shortly thereafter (#--)</li>

								<li>[Bugfix] Outline view not updated after dragged files have been uploaded (#--)</li>

								<li>[Bugfix] Synchronisation not awaiting selection from user (#--)</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.7</strong> <em>Nov-25-2006</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.7.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.7.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Feature] Don't block user interface when working in browser. All potentially lengthy operations are now performed in the background (<a href=
								"http://trac.cyberduck.ch/ticket/921">#921</a>)</li>

								<li>[Feature] All (possibly stalled) operations in progress can be interrupted (<a href="http://trac.cyberduck.ch/ticket/943">#943</a>)</li>

								<li>[Feature] Improved error handling (#--)</li>

								<li>[Feature] Failed network operations can be repeated (#--)</li>

								<li>[Feature] A default bookmark can be configured (<a href="http://trac.cyberduck.ch/ticket/915">#915</a>)</li>

								<li>[Feature] Option to disable spring-loaded folders (<a href="http://trac.cyberduck.ch/ticket/98">#98</a>)</li>

								<li>[Feature] Individual settings how to treat duplicate files on uploads and downloads (<a href="http://trac.cyberduck.ch/ticket/500">#500</a>)</li>

								<li>[Feature] Callback to alternate connect mode upon failure (FTP) (<a href="http://trac.cyberduck.ch/ticket/83">#83</a>)</li>

								<li>[Feature] Add 'Download To...' menu option to download multiple files into designated, non-default directory (<a href=
								"http://trac.cyberduck.ch/ticket/909">#909</a>)</li>

								<li>[Feature] The bottom of the browser window shows the security status (<a href="http://trac.cyberduck.ch/ticket/9">#9</a>)</li>

								<li>[Feature] Improvements to the AppleScript dictionary (<a href="http://trac.cyberduck.ch/ticket/737">#737</a>), (<a href=
								"http://trac.cyberduck.ch/ticket/918">#918</a>), (<a href="http://trac.cyberduck.ch/ticket/878">#878</a>), (<a href=
								"http://trac.cyberduck.ch/ticket/922">#922</a>)</li>

								<li>[Feature] When duplicating files, propose a filename containing the current date and time (<a href="http://trac.cyberduck.ch/ticket/912">#912</a>)</li>

								<li>[Feature] Added JarInspector to the list of supported editors (http://www.cgerdes.com) (#--)</li>

								<li>[Bugfix] Honor the existing permissions when replacing files (#--)</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.6.2</strong> <em>Sep-07-2006</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.6.2.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.6.2.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Bugfix] Crash when typing hostname in connection dialog for some users (<a href="http://trac.cyberduck.ch/ticket/711">#711</a>)</li>

								<li>[Bugfix] Type-ahead selection not working for non-alphanumeric characters (<a href="http://trac.cyberduck.ch/ticket/271">#271</a>)</li>

								<li>[Bugfix] Control click discards multiple selection (<a href="http://trac.cyberduck.ch/ticket/649">#649</a>)</li>

								<li>[Bugfix] Timeout too slow giving I/O errors on slow connections (<a href="http://trac.cyberduck.ch/ticket/714">#714</a>)</li>

								<li>[Bugfix] Passwords stored in Keychain not accessible by other applications (<a href="http://trac.cyberduck.ch/ticket/708">#708</a>)</li>

								<li>[Bugfix] FTP URLs passed by another application pointing at folders fail to open (<a href="http://trac.cyberduck.ch/ticket/704">#704</a>)</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.6.1</strong> <em>Aug-11-2006</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.6.1.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.6.1.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Bugfix] Crash or spinning beachball after upload (<a href="http://trac.cyberduck.ch/ticket/504">#504</a>)</li>

								<li>[Bugfix] Active mode connections broken (FTP) (<a href="http://trac.cyberduck.ch/ticket/450">#450</a></li>

								<li>[Bugfix] Removed graphical error messages for the sake of simplicity; displayed in log drawer instead (<a href="http://trac.cyberduck.ch/ticket/524">#524</a>,
								<a href="http://trac.cyberduck.ch/ticket/580">#580</a>)</li>

								<li>[Bugfix] Hostname reachability check slow and blocking user interface (<a href="http://trac.cyberduck.ch/ticket/572">#572</a>, <a href=
								"http://trac.cyberduck.ch/ticket/575">#575</a>)</li>

								<li>[Bugfix] Fails to delete folders recursively in some cases (<a href="http://trac.cyberduck.ch/ticket/533">#533</a>)</li>

								<li>[Bugfix] Unilingual builds broken (<a href="http://trac.cyberduck.ch/ticket/436">#436</a>)</li>

								<li>[Bugfix] Cannot delete symbolic links (<a href="http://trac.cyberduck.ch/ticket/616">#616</a>)</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.6</strong> <em>Jun-07-2006</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.6.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.6.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Localize] Turkish Localization</li>

								<li>[Feature] Automatic software udpate with Sparkle.framework (Thanks to Andy Matuschak!) (<a href="http://trac.cyberduck.ch/ticket/300">#300</a>)</li>

								<li>[Feature] Dashboard Widget included (Thanks to Claudio Procida!)</li>

								<li>[Feature] Marking write-only and non-accessible directories with special icon as in Finder.app</li>

								<li>[Feature] Reintroduced transcript drawer in browser window (<a href="http://trac.cyberduck.ch/ticket/104">#104</a>)</li>

								<li>[Feature] Added transcript drawer to transfer window (<a href="http://trac.cyberduck.ch/ticket/375">#375</a>)</li>

								<li>[Feature] Option to use Network Diagnostics upon failed connections</li>

								<li>[Feature] New 'Download failed' and 'Upload failed' Growl notifications (<a href="http://trac.cyberduck.ch/ticket/362">#362</a>)</li>

								<li>[Feature] Display alert icon in connection dialog if server name cannot be resolved</li>

								<li>[Feature] Indicate estimated remaining time left for transfers (<a href="http://trac.cyberduck.ch/ticket/43">#43</a>)</li>

								<li>[Feature] New non-blocking alert boxes replace modal sheets</li>

								<li>[Bugfix] Stalled connection and file transfer attempts can be interrupted (<a href="http://trac.cyberduck.ch/ticket/55">#55</a>)</li>

								<li>[Bugfix] Cannot delete empty folders (<a href="http://trac.cyberduck.ch/ticket/162">#162</a>)</li>

								<li>[Bugfix] Cannot use login username with colon (<a href="http://trac.cyberduck.ch/ticket/309">#309</a>)</li>

								<li>[Bugfix] Certain operations trigger change of character encoding to default</li>

								<li>[Bugfix] Unable to delete directory from server (<a href="http://trac.cyberduck.ch/ticket/256">#256</a>)</li>

								<li>[Bugfix] Permission errors when downloading files from read-only directories (<a href="http://trac.cyberduck.ch/ticket/264">#264</a>)</li>

								<li>[Bugfix] Change download keyboad shortcut (<a href="http://trac.cyberduck.ch/ticket/277">#277</a>)</li>

								<li>[Bugfix] Character encoding issues (<a href="http://trac.cyberduck.ch/ticket/238">#238</a>, <a href="http://trac.cyberduck.ch/ticket/333">#333</a>, <a href=
								"http://trac.cyberduck.ch/ticket/361">#361</a>, <a href="http://trac.cyberduck.ch/ticket/390">#390</a>)</li>

								<li>[Bugfix] Improved compatibility with certain FTP servers</li>

								<li>[Bugfix] Cannot upload files to drop boxes (<a href="http://trac.cyberduck.ch/ticket/421">#421</a>)</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.5.5</strong> <em>Mar-01-2006</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.5.5.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.5.5.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Localize] Hebrew Localization</li>

								<li>[Bugfix] Excape key cancels editing (<a href="http://trac.cyberduck.ch/ticket/190">#190</a>)</li>

								<li>[Bugfix] Adjust permissions on created folders when transfering files (<a href="http://trac.cyberduck.ch/ticket/77">#77</a>)</li>

								<li>[Bugfix] Cannot write to group writable files (SFTP) (<a href="http://trac.cyberduck.ch/ticket/173">#173</a>)</li>

								<li>[Bugfix] Spotlight binary not executable (<a href="http://trac.cyberduck.ch/ticket/212">#212</a>)</li>

								<li>[Feature] Added options to use Cyberduck as a portable application (see http://www.freesmug.org/portableapps/) (<a href=
								"http://trac.cyberduck.ch/ticket/180">#180</a>)</li>

								<li>[Feature] New Crash Reporter (Thanks to M. Uli Kusterer!) (<a href="http://trac.cyberduck.ch/ticket/195">#195</a>)</li>

								<li>[Feature] Added skEdit to the list of supported editors (http://www.skti.org)</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.5.4</strong> <em>Jan-20-2006</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.5.4.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.5.4.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Localize] Thai Localization</li>

								<li>[Bugfix] Random crashes (<a href="http://trac.cyberduck.ch/ticket/65">#65</a>, <a href="http://trac.cyberduck.ch/ticket/94">#94</a>, <a href=
								"http://trac.cyberduck.ch/ticket/96">#96</a>, <a href="http://trac.cyberduck.ch/ticket/121">#121</a>, <a href="http://trac.cyberduck.ch/ticket/122">#122</a>)</li>

								<li>[Bugfix] High load while downloading (<a href="http://trac.cyberduck.ch/ticket/12">#12</a>)</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.5.3</strong> <em>Jan-03-2006</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.5.3.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.5.3.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Feature] New and much improved Bonjour implementation</li>

								<li>[Feature] Inline rename files in browser (Return key invokes editing)</li>

								<li>[Feature] Paste files copied in Finder.app (Upload)</li>

								<li>[Feature] Includes Unsanity Crash Reporter</li>

								<li>[Bugfix] Renaming files in expanded tree of outline view bogus</li>

								<li>[Bugfix] Change to invalid directories not catched</li>

								<li>[Bugfix] Second login attempt always fails (SFTP)</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.5.2</strong> <em>Nov-18-2005</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.5.2.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.5.2.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Bugfix] Spinning beachball of death when connecting on some systems</li>

								<li>[Bugfix] Better validating drop targets in browser</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.5.1</strong> <em>Nov-14-2005</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.5.1.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.5.1.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Feature] Dragging files to application icon will upload to frontmost browser</li>

								<li>[Feature] Printing browser view</li>

								<li>[Feature] Universal Binary</li>

								<li>[Bugfix] Child items not refreshed properly in outline view</li>

								<li>[Bugfix] Warning before overwrite when moving or renaming files</li>

								<li>[Bugfix] Dragging files to the Finder.app places them at the dropped position</li>

								<li>[Bugfix] Always selecting parent directory as drop target when dragging to outline view</li>

								<li>[Bugfix| Updated application and document icon</li>

								<li>[Bugfix] Number of files in browser window not displayed correctly</li>

								<li>[Bugfix] Don't recurse into directories when deleting symbolic links</li>

								<li>[Bugfix] Overwriting group writable files</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.5</strong> <em>Aug-29-2005</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.5.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.5.dmg']);">Download</a><br />
							<br />
							<span class="version">Mac OS X 10.3.9 or later required.</span></p>
						</td>

						<td>
							<ul>
								<li>[Feature] Graphical interface refinements</li>

								<li>[Bugfix] Caching issue with multiple connections to the same host</li>

								<li>[Bugfix] When moving to the parent directory the previous working directory is always selected</li>

								<li>[Bugfix] Selected files are always remembered when refreshing the browsing list</li>

								<li>[Bugfix] Remove custom icon and resource fork after download</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.5b4</strong> <em>Aug-10-2005</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.5b4.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.5b4.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Feature] Updated navigation bar interface elements</li>

								<li>[Bugfix] Vastly improved performance when listing directories</li>

								<li>[Bugfix] Do not reconnect if connecting to the same host from a different bookmark</li>

								<li>[Bugfix] Sorting history menu correctly</li>

								<li>[Bugfix] Refresh issues in outline view</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.5b3</strong> <em>Jul-18-2005</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.5b3.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.5b3.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Localize] Catalan Localization</li>

								<li>[Feature] Spotlight Importer for bookmarks</li>

								<li>[Feature] Synchronize bookmarks with .Mac</li>

								<li>[Feature] Send custom commands to server (FTP)</li>

								<li>[Feature] Auto scrolling log view</li>

								<li>[Feature] Updated application icon (Thanks to Admiral Potato)</li>

								<li>[Bugfix] New connection dialog remembers field values</li>

								<li>[Bugfix] Correctly parsing filenames beginning with whitespace (FTP)</li>

								<li>[Bugfix] Don't allow editing files with well known binary file type extensions</li>

								<li>[Bugfix] Excluding individual files when synchronising</li>

								<li>[Bugfix] Improved stability using outline view</li>

								<li>[Bugfix] Remember sorted column and direction</li>

								<li>[Bugfix] Sort child items in browser outline view</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.5b2</strong> <em>May-30-2005</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.5b2.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.5b2.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Localize] Indonesian Localization</li>

								<li>[Bugfix] Resorting browser view will not change selection</li>

								<li>[Bugfix] Remember state of expanded items in outline view</li>

								<li>[Bugfix] Applescript issues</li>

								<li>[Feature] Updated to Growl 0.7</li>

								<li>[Feature] Edit menu shows all available editors</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.4.6</strong> <em>May-30-2005</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.4.6.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.4.6.dmg']);">Download</a><br />
							<span class="version">Mac OS X 10.3 or later required.</span></p>
						</td>

						<td>
							<ul>
								<li>[Bugfix] Right-click a file in the browser will first select before it displays the contextual menu</li>

								<li>[Bugfix] Transfer success notification when remote editing file even when transfer fails (Growl)</li>

								<li>[Bugfix] Resolved incompatibility with SSH-1 keys in ~/.ssh/known_hosts (SFTP)</li>

								<li>[Bugfix] Applescript compatiblity issues with 10.4</li>

								<li>[Bugfix] Browser column width compatiblity issues with 10.4</li>

								<li>[Bugfix] Could not drag bookmark file to drawer when empty</li>

								<li>[Bugfix] Ignored custom port when selecting bookmark in connection dialog</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.5b1</strong> <em>May-04-2005</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.5b1.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.5b1.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Feature] FTP using TLS support (using AUTH TLS as in draft-murray-auth-ftp-ssl-16) for the control channel (sending login credentials) and optionally the data
								channel (file listings and transfers) if the server is capable of.</li>

								<li>[Feature] Store X.509 certificates in Keychain</li>

								<li>[Feature] Custom icon with progressbar in the Finder when downloading files</li>

								<li>[Feature] Browser outline view</li>

								<li>[Feature] Toolbar button to switch view</li>

								<li>[Feature] History of recently connected hosts</li>

								<li>[Feature] Set character encoding per bookmark</li>

								<li>[Feature] Set connect mode (active/passive) per bookmark (FTP)</li>

								<li>[Feature] Show folders in working directory (and autocomplete) in 'Go to Folder' dialog</li>

								<li>[Feature] Exclude duplicate files from transfer upon alert</li>

								<li>[Feature] Apply button in file info dialog</li>

								<li>[Feature] Duplicate files on server</li>

								<li>[Feature] Preferences window with toolbar</li>

								<li>[Feature] Option to turn off disconnect prompt in Preferences</li>

								<li>[Feature] Option to keep connection alive in Preferences</li>

								<li>[Feature] Choose character encoding in connection dialog</li>

								<li>[Feature] Choose connect mode in connection dialog (FTP)</li>

								<li>[Feature[ Drop down list of folders in Goto dialog</li>

								<li>[Feature] Sorting files by permission</li>

								<li>[Feature] UTF-8 is now used as the default character encoding</li>

								<li>[Feature] Edit with non-default editor using the browser context menu</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.4.5</strong> <em>May-04-2005</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.4.5.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.4.5.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Feature] Added Tag to the list of supported editors (http://www.talacia.com/)</li>

								<li>[Bugfix] No permissions set on transferred files when connection closed unexpectedly (SFTP)</li>

								<li>[Bugfix] Resuming uploads might corrupt files (SFTP)</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.4.4</strong> <em>Apr-27-2005</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.4.4.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.4.4.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Localize] Danish Localization</li>

								<li>[Localize] Polish Localization</li>

								<li>[Feature] Added CSSEdit to the list of supported editors (http://macrabbit.com/cssedit/)</li>

								<li>[Feature] Added CotEditor to the list of supported editors (http://www.aynimac.com/)</li>

								<li>[Feature] Gray out files in browser view when disconnected</li>

								<li>[Bugfix] Unexpected null reply received (FTP)</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.4.3</strong> <em>Apr-11-2005</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.4.3.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.4.3.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Bugfix] Browser refresh issues</li>

								<li>[Bugfix] Synchronization</li>

								<li>[Localize] Hungarian Localization</li>

								<li>[Bugfix] Modification date changed when uploading files from the external editor</li>

								<li>[Bugfix] Browser window could lock up when reconnecting and login was needed</li>

								<li>[Feature] Disconnect item in menubar</li>

								<li>[Bugfix] Bug fixes</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.4</strong> <em>Mar-28-2005</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.4.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.4.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Localize] Swedish Localization</li>

								<li>[Feature] Additional encryption ciphers supported (SFTP)</li>

								<li>[Feature] Action dropdown menu in toolbar</li>

								<li>[Feature] Added Jedit X to the list of supported editors (http://www.artman21.net/product/JeditX/)</li>

								<li>[Feature] Added mi to the list of supported editors (http://mimikaki.net/)</li>

								<li>[Feature] Added Smultron to the list of supported editors (http://smultron.sourceforge.net/)</li>

								<li>[Bugfix] Rendezvous implementation updated</li>

								<li>[Bugfix] Folder to synchronize not selectable in some cases</li>

								<li>[Bugfix] Fallback to default directory when specified directory doesn't exist</li>

								<li>[Bugfix] Resolved incompatibility with SSH-1 keys in ~/.ssh/known_hosts (SFTP)</li>

								<li>[Bugfix] Resolved crash in info window when group was unknown</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.4b4</strong> <em>February-03-2005</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.4b4.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.4b4.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Bugfix] Dragging files to the Finder</li>

								<li>[Bugfix] Reordering bookmarks</li>

								<li>[Bugfix] SSH exception handling (SFTP)</li>

								<li>[Bugfix] Bookmark selection in connection dialog</li>

								<li>[Bugfix] Items in transfer window not removed</li>

								<li>[Bugfix] Deleting more than one bookmark at once</li>

								<li>[Bugfix] Corrupted resource files in Chinese localization</li>

								<li>[Bugfix] Corrupted resource files in Japanese localization</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.4b3</strong> <em>Jan-29-2005</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.4b3.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.4b3.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Localize] Russian Localization</li>

								<li>[Feature] Preliminary AppleScript support (see .scpt script samples)</li>

								<li>[Feature] Quick Connect field and hostname field in connection dialog accept URLs as input</li>

								<li>[Feature] Reordering bookmarks using drag and drop</li>

								<li>[Bugfix] Deleting more than 10 files at once</li>

								<li>[Bugfix] Typing in transfer window causes crash</li>

								<li>[Bugfix] Transcript causes crash</li>

								<li>[Bugfix] Reporting correct file size for large files</li>

								<li>[Bugfix] Disable resume on ASCII tranfers (FTP)</li>

								<li>[Bugfix] Incompatiblity with Filezilla Server (FTP)</li>

								<li>[Bugfix] Synchronizing current working directory</li>

								<li>[Bugfix] Graceful failure on SSH connection problems</li>

								<li>[Bugfix] Correctly resolving '~' in filenames</li>

								<li>[Bugfix] Bug fixes</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.4b2</strong> <em>Jan-06-2005</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.4b2.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.4b2.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Feature] Allow the selection of files in the browser by typing more than just the first character of the filename</li>

								<li>[Feature] A bookmark in the drawer can be selected by typing its hostname</li>

								<li>[Feature] Preserve the modification date on upload (SFTP)</li>

								<li>[Feature] Preserve the modification date on upload if the server supports 'CHMOD UTIME' (FTP)</li>

								<li>[Bugfix] Determine changed files based on modification date when synchronizing</li>

								<li>[Bugfix] Opening an URL linking to a file opens a browser window</li>

								<li>[Bugfix] Changing the username of a newly created bookmark of a connected server might affect an existing bookmark of the same server but with a different
								username.</li>

								<li>[Bugfix] Logging the response of 'LIST' (FTP)</li>

								<li>[Bugfix] Selection of bookmark in connection dialog</li>

								<li>[Bugfix] Performance issue in log view (thanks to Douglas Davidson)</li>

								<li>[Feature] Live scrolling log view</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.4b1</strong> <em>Dec-28-2004</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.4b1.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.4b1.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Feature] Synchronization of files</li>

								<li>[Feature] Create new files on server</li>

								<li>[Feature] Support for Novell Netware file listings (FTP)</li>

								<li>[Feature] Growl notification support (see http://growl.info)</li>

								<li>[Feature] Limit number of concurrent connections to a remote host</li>

								<li>[Feature] Move remote files with copy &amp;amp; paste</li>

								<li>[Feature] Select a file in the browser by typing its first character</li>

								<li>[Feature] Put remote files into the transfer queue with copy &amp;amp; paste</li>

								<li>[Feature] Apply permissions recursively</li>

								<li>[Feature] Option to apply default permissions to transferred files in Preferences</li>

								<li>[Feature] Option to preserve modification date on download in Preferences</li>

								<li>[Feature] Switch encoding per browser with menu or toolbar item</li>

								<li>[Feature] Switch 'Show hidden files' per browser with menu or toolbar item</li>

								<li>[Feature] Transfer Queue with "Aqua" progress indicator</li>

								<li>[Feature] Provide a proxy icon for the connection in the window title bar</li>

								<li>[Feature] The proxy icon in the window title bar can then be dragged to the bookmark drawer or the Finder</li>

								<li>[Feature] Bookmarks of recently connected hosts are saved in ~/Library/Application Support/Cyberduck/History</li>

								<li>[Feature] Updated toolbar icons (Thanks to Matt Ball)</li>

								<li>[Feature] Display the number of files in the browser</li>

								<li>[Feature] Added TextMate to the list of supported editors (see http://macromates.com)</li>

								<li>[Feature] Dialog for duplicated files lists all at once instead of consecutively asking</li>

								<li>[Feature] Filter field is now a standard search field</li>

								<li>[Feature] Read bookmarks from "/Library/Application Support/Cyberduck/" instead of the individual user bookmarks file if available</li>

								<li>[Feature] Check for running transfers on application quit</li>

								<li>[Feature] Updated FTP core (FTP)</li>

								<li>[Feature] Saving passwords as 'Internet Password' in the Keychain</li>

								<li>[Localize] Norwegian Localization</li>

								<li>[Bugfix] Update existing browsers when changing the default interface attributes in the Preferences</li>

								<li>[Bugfix] Don't cache DNS lookups forever</li>

								<li>[Bugfix] Bookmark drawer icon has no text-only equivalent</li>

								<li>[Bugfix] Tabbing between browser and filter box</li>

								<li>[Bugfix] Quick Connect Field has initial focus</li>

								<li>[Bugfix] Live scrolling log view</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.3.3</strong> <em>Aug-09-2004</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.3.3.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.3.3.dmg']);">Download</a><br />
							<span class="version">Mac OS X 10.2 or later required.</span></p>
						</td>

						<td>
							<ul>
								<li>[Bugfix] Correctly parsing symbolic links</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.3.2</strong> <em>Aug-05-2004</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.3.2.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.3.2.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Feature] Slovak Localization</li>

								<li>[Feature] Czech Localization</li>

								<li>[Feature] Support for EPFL file listings to support servers running "publicfile" (FTP)</li>

								<li>[Bugfix] Improved PASV response parsing (FTP)</li>

								<li>[Feature] Supporting SOCKS proxies (not tested)</li>

								<li>[Feature] Change file permissions on multiple files</li>

								<li>[Feature] Copy the URL of a remote site</li>

								<li>[Bugfix] Use date formatting rules set in the System Preferences</li>

								<li>[Featuer] Preference item to set the action when double-clicking files (Download or edit)</li>

								<li>[Bugfix] Remembering the position of the browser window</li>

								<li>[Bugfix] Compatibility with servers not supporting the SIZE command (FTP)</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.3.1</strong> <em>June-15-2004</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.3.1.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.3.1.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Localize] Chinese (Simplified) Localization</li>

								<li>[Feature] Rendezvous services in Bookmark menu</li>

								<li>[Bugfix] Upper level directories had to be listed first when uploading files</li>

								<li>[Bugfix] Changes to bookmarks won't be saved</li>

								<li>[Bugfix] Preference item to disable the update check</li>

								<li>[Bugfix] Toolbar item to open downloaded files with default application</li>

								<li>[Bugfix] Graceful application termination (Properly ask to close all connections and then quit)</li>

								<li>[Bugfix] Remembering choosen directories in open and save dialogs</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.3</strong> <em>May-15-2004</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.3.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.3.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Feature] Supporting Keyboard Interactive (PAM) Authentication (SSH)</li>

								<li>[Localize] Finnish Localization</li>

								<li>[Bugfix] Fixed a bug which caused not all available Rendezvous services to get listed</li>

								<li>[Bugfix] Removed 'Type ahead' feature of the browser (responsible for frequent crashes)</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.3b2</strong> <em>Apr-27-2004</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.3beta2.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.3beta2.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Feature] Much improved queue management (fewer connections)</li>

								<li>[Feature] Resume downloads (SFTP)</li>

								<li>[Feature] Resume uploads (SFTP)</li>

								<li>[Feature] Resume uploads (FTP)</li>

								<li>[Feature] Move files on remote host by drag and drop</li>

								<li>[Feature] Drag files onto bookmark to quickly upload</li>

								<li>[Feature] Bookmarks are shown in the menu</li>

								<li>[Feature] Menu item 'Download As...'</li>

								<li>[Feature] Editing multiple files in the external editor with the same name</li>

								<li>[Feature] Warning if a duplicate exists when uploading files</li>

								<li>[Feature] 'Apply to all' checkbox in dialog asking for replace/resume/skip existing files</li>

								<li>[Feature] Improved caching of directory listings</li>

								<li>[Feature] When dropping files onto folders it will upload these into the folder</li>

								<li>[Feature] When typing the first letter of a file it gets selected in the browser</li>

								<li>[Feature] Toolbar button to remove all completed items from the queue</li>

								<li>[Feature] Convert line endings when downloading in ASCII mode (FTP)</li>

								<li>[Feature] Auto transfer mode (FTP)</li>

								<li>[Feature] Dock menu item to open new browser</li>

								<li>[Bugfix] Correctly updating incorrect keychain entries</li>

								<li>[Bugfix] Preserve modification date when downloading files</li>

								<li>[Bugfix] Ignoring .DS_Store files</li>

								<li>[Bugfix] Bug fixes</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.3b1</strong> <em>Mar-09-2004</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.3beta1.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.3beta1.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Feature] External editor support (SubEthaEdit, BBEdit, TextWrangler, Text-Edit Plus)</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.2</strong> <em>Mar-06-2004</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.2.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.2.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Feature] Supporting folders with sticky/set-uid/set-gid bits (FTP)</li>

								<li>[Localize] Updated Dutch localization</li>

								<li>[Localize] Updated French localization</li>

								<li>[Bugfix] Minor performance improvements</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.2b6</strong> <em>Feb-25-2004</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.2beta6.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.2beta6.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Feature] Preliminary support for Windows, VMS and OS/2 file listings (FTP)</li>

								<li>Properly deleting symbolic links (FTP)</li>

								<li>[Feature] Displaying link icons in browser</li>

								<li>[Bugfix] Downloading files from FTP servers not supporting the SIZE command (FTP)</li>

								<li>[Bugfix] Fixed a bug where overwritten files with SFTP got corrupted (Thanks to Jan!)</li>

								<li>[Feature] Contextual Menu support</li>

								<li>[Bugfix] Bug fixes</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.2b5</strong> <em>Feb-12-2004</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.2beta5.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.2beta5.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Localize] Chinese (Traditional) Localization</li>

								<li>[Localize] Korean Localization</li>

								<li>[Feature] Passphrases for private key files are stored in the Keychain (SSH)</li>

								<li>[Feature] Bookmark editor allows to specify the port number</li>

								<li>[Feature] When a bookmark is edited, the properties are updated in the bookmark drawer instantly</li>

								<li>[Feature] A confirmation dialog is displayed before deleting a bookmark</li>

								<li>[Feature] A confirmation dialog is displayed when connecting to a new site in a browser still connected to another host</li>

								<li>[Bugfix] Transcript messages are only shown in the corresponding browser</li>

								<li>[Bugfix] Fixed a bug which caused the browser window to be 'frozen' after an upload</li>

								<li>[Feature] Option to adjust the 'LIST' command sent (FTP)</li>

								<li>[Bugfix] Fixed a bug which caused a crash when not connected to a network</li>

								<li>[Feature] Updated application icon</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.2b4</strong> <em>Jan-31-2004</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.2beta4.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.2beta4.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Bugfix] Fixed a bug that with some servers the permissions could not be modified (FTP)</li>

								<li>[Bugfix] When addding a transfer to the queue it is highlighted</li>

								<li>[Bugfix] Improved login process</li>

								<li>[Localize] Updated Japanese localization</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.2b3</strong> <em>Jan-25-2004</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.2beta3.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.2beta3.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Feature] Caching folder listings</li>

								<li>[Bugfix] Auto-refresh the folder listing after uploading a file</li>

								<li>[Feature] Sending 'LIST -a' to list directories (FTP)</li>

								<li>[Bugfix] Fixed a bug where entries in the queue would be deleted too early</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.2b2</strong> <em>Jan-24-2004</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.2beta2.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.2beta2.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Localize] Updated Japanese localization</li>

								<li>[Localize] Updated French localization</li>

								<li>[Localize] Updated Portuguese localization</li>

								<li>[Localize] Updated Italian localization</li>

								<li>[Bugfix] The log is now written with a fixed-width font</li>

								<li>[Bugfix] Various minor improvements</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.2b1</strong> <em>Jan-22-2004</em> <a href="./Cyberduck-2.2beta1.dmg">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Feature] Keychain integration</li>

								<li>[Feature] New file transfer manager</li>

								<li>[Feature] Full Unicode support</li>

								<li>[Feature] Support for public key authentication (SSH)</li>

								<li>[Feature] Live filtering directory listings</li>

								<li>[Feature] Improved Rendezvous support (jmDNS 0.2)</li>

								<li>[Feature] Drag files from the browser to the transfer manager</li>

								<li>[Feature] Drag links to the transfer manager to start download</li>

								<li>[Feature] Browser can be customized to show/hide certain columns</li>

								<li>[Localize] Japanese Localization</li>

								<li>[Localize] Italian Localization</li>

								<li>[Localize] Portuguese Localization</li>

								<li>[Localize] Spanish Localization</li>

								<li>[Localize] French Localization</li>

								<li>[Bugfix] Various improvements and bug fixes</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.1</strong> <em>Dec-08-2003</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.1.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.1.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Feature] Bookmarks can now be edited.</li>

								<li>[Feature] Bookmarks can now be saved as a regular file (Drag the bookmarks to the Finder).</li>

								<li>[Feature] Bookmarks saved as files can be imported by dropping them on the Bookmarks Drawer.</li>

								<li>[Feature] Double clicking a Cyberduck bookmark file in the Finder will open a new browser and connect to the remote site</li>

								<li>[Feature] An initial directory upon new connection can now be specified (e.g. public_html instead of the default home).</li>

								<li>[Feature] Use keyboard shortcut (commann-up/down) for browsing a directory</li>

								<li>[Bugfix] Uploaded files now have the same permissions as the corresponding local files</li>

								<li>[Feature] Updated icon set</li>

								<li>[Bugfix] The sort order is now remembered while browsing</li>

								<li>[Feature] Toolbar icon to toggle Bookmark drawer</li>

								<li>[Feature] Updated SSH Core (v0.2.5)</li>

								<li>[Localize] Dutch Localization</li>

								<li>[Localize] German Localization</li>

								<li>[Bugfix] Smaller changes and bug fixes.</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.1b5</strong> <em>Aug-29-2003</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.1beta5.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.1beta5.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Feature] HTTP is now supported again. Files can be downloaded from regular web servers.</li>

								<li>[Feature] Cyberduck can now be configured as the default FTP helper application. See <a href="http://www.monkeyfood.com/software/moreInternet/">monkeyfood.com</a>.
								This seems to work with Safari and Internet Explorer.</li>

								<li>[Bugfix] Dragging files to the Finder is now more reliable.</li>

								<li>[Bugfix] The transfer panel does now close again if defined so in the preferences.</li>

								<li>[Feature] The buffer size (the size of download chunks to keep in memory before writing to disk) is now adjustable.</li>

								<li>[Feature] Login to anonymous FTP servers where no password is needed is now supported.</li>

								<li>[Bugfix] Smaller bug fixes</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.1b4</strong> <em>Aug-22-2003</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.1beta4.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.1beta4.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Feature] Cyberduck now has the official creator code 'CYCK'.</li>

								<li>[Bugfix] Bug fixes</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.1b3</strong> <em>Aug-17-2003</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.1beta3.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.1beta3.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Localize] Localization support</li>

								<li>[Feature] Files and foldes can now be dragged to the Finder to download them.</li>

								<li>[Feature] Windows do now no more stack exactly on the top of prior one.</li>

								<li>[Feature] There are now equivalent menu actions for the toolbar items.</li>

								<li>[Bugfix] Modification dates and time are now displayed correctly.</li>

								<li>[Bugfix] The modification date column is now sorted correctly.</li>

								<li>[Bugfix] Browser columns are now sortable in both directions.</li>

								<li>[Bugfix] When deleting multiple files and directores, the file list will now only get updated at the end because of performance.</li>

								<li>[Bugfix] If multiples have been selected to transfer, Cyberduck now puts them in the same queue and opens only one connection to the server.</li>

								<li>[Feature] There is a new command 'Go to folder' for changing the working directory quickly.</li>

								<li>[Bugfix] Many bug fixes.</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td width="150" valign="top">
							<p><strong>2.1b2</strong> <em>Aug-15-2003</em><br />
							<a href="http://update.cyberduck.ch/Cyberduck-2.1beta2.dmg" onClick="javascript:_gaq.push(['_trackEvent', 'Downloads', '*.dmg', '/Cyberduck-2.1beta2.dmg']);">Download</a></p>
						</td>

						<td>
							<ul>
								<li>[Feature] Using the Cocoa Framework (instead of Java Swing)</li>
								<li>[Feature] Support for SFTP (SSH File Transfer Protocol) connections</li>
							</ul>
						</td>
					</tr>
				</table>
			</div>
			<div id="footer">
				<a class="swissmade" href="http://www.swissmadesoftware.org"><img src="http://media.cyberduck.ch/img/sms-logo-small-footer.png" alt="swiss made software" /></a> <a href=
				"http://validator.w3.org/check/referer">Validate</a>, $Date$<br />
			</div>
		</div>
		<div id="sidebar">
			<div id="teaser">
				<div class="box-shadow-start"></div>

				<div class="box-shadow">
					<p class="lead"><strong>Release notes and previous releases.</strong> There are also <a href="http://trac.cyberduck.ch/wiki/help/en/faq#NightlyandBetabuilds">nightly snapshot builds available</a> featuring the latest bugfixes and enhancements.</p>
				</div>

				<div class="box-shadow-end"></div>
			</div>
		</div>
	</div>
</body>
</html>
