<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
  include "../functions.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<?php echo(echoheader("~dkocher | cyberduck | features", ".")); ?>
<body id="features" bgcolor="#FFFFFF">
    <div align="center" class="standard">
        <table border="0" cellpadding="5" cellspacing="5" width="700">
            <tr>
                <td width="200" colspan="2" valign="top" class="box-solid">
                    <div align="center">
                        <img src="img/cyberduck.icon.jpg" width="128" height="128" alt="Cyberduck" border="0" />
                    </div>
                </td>
                <td width="100%" class="box-solid">
                    <div class="underline">
                        <?php echo(echomenu(".."));?>
                    </div><br />
                    <?php echo(echotitle());?>
                    <div align="left">
                        <?php echo(echosubmenu());?>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td class="box-solid"><strong><a name="code" id="code">features</a></strong></td>
            </tr>
            <tr>
                <td valign="top" colspan="2"><strong>Browse SFTP and FTP servers</strong></td>
                <td valign="top" class="box-dash">
                    <ul>
                        <li>Open multiple simultaneous connections</li>
                        <li>Document based interface</li>
                        <li>Support for various encodings <a href="./img/encoding.png">(Screenshot)</a></li>
                        <li>Live filtering of directory listings</li>
                        <li>Caching folder listings</li>
                        <li>Move files <a href="./img/move.png">(Screenshot)</a></li>
                        <li>Copy &amp; paste files</li>
                        <li>Rename files</li>
                        <li>Delete files</li><!--<li>SOCKS Proxy support</li>-->
                    </ul>
                </td>
            </tr>
            <tr>
                <td valign="top" colspan="2"><strong>Localizations</strong></td>
                <td valign="top" class="box-dash"><em>English, Dutch, German, French, Italian, Japanese, Korean, Chinese (Traditional and Simplified), Portuguese, Spanish, Finnish, Slovak, Czech and Norwegian</em></td>
            </tr>
            <tr>
                <td valign="top" colspan="2"><strong>Seamless integration with external editors</strong></td>
                <td valign="top" class="box-dash">
                    <table>
                        <tr>
                            <td>
                                <ul>
                                    <li><a href="http://www.codingmonkeys.de/subethaedit/">SubEthaEdit</a></li>
                                    <li><a href="http://www.barebones.com/products/bbedit/">BBEdit</a></li>
                                    <li><a href="http://www.barebones.com/products/textwrangler">TextWrangler</a></li>
                                    <li>Text-Edit Plus</li>
                                    <li><a href="http://macromates.com/">TextMate</a></li>
                                </ul>
                            </td>
                            <td>
                                <div align="right">
                                    <img src="./img/editor.png" alt="External editor support" border="0" />
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td valign="top" colspan="2"><strong>Manage bookmarks</strong></td>
                <td valign="top" class="box-dash">
                    <ul>
                        <li>Drag and drop to save bookmark as a file</li>
                        <li>Drag proxy icon in the window title bar to the Finder</li>
                        <li>Drag proxy icon in the window title bar to the bookmark drawer</li>
                        <li>Drop files onto bookmarks to upload to remote host</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td valign="top" colspan="2"><strong>Keychain support</strong></td>
                <td valign="top" class="box-dash">
                    <div align="left">
                        <img src="./img/keychain.png" width="70" alt="Keychain Integration" border="0" />
                    </div>
                </td>
            </tr>
            <tr>
                <td valign="top" colspan="2"><strong>Public key authentication (SSH)</strong></td>
                <td valign="top" class="box-dash"></td>
            </tr>
            <tr>
                <td valign="top" colspan="2"><strong>Transfers <a href="./img/transfer.png">(Screenshot)</a></strong></td>
                <td valign="top" class="box-dash">
                    <ul>
                        <li>Resume downloads (FTP and SFTP)</li>
                        <li>Resume uploads (FTP and SFTP)</li>
                        <li>Download folders (recursive)</li>
                        <li>Upload folders (recursive)</li>
                        <li>Drag and drop to transfer files (Finder &lt;--&gt; Cyberduck)</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td valign="top" colspan="2"><strong>Synchronize <a href="./img/sync.png">(Screenshot)</a></strong></td>
                <td valign="top" class="box-dash">
                    <ul>
                        <li>Synchronize local with remote directories (and vice versa)</li>
                        <li>Choose to download/upload missing files&gt;</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td valign="top" colspan="2"><strong>Modify permissions <a href="./img/info.png">(Screenshot)</a></strong></td>
                <td valign="top" class="box-dash">
                    <ul>
                        <li>Modify permissions on multiple files</li>
                        <li>Modify permissions recursivly</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td valign="top" colspan="2"><strong>Rendezvous support</strong></td>
                <td valign="top" class="box-dash">
                    <div align="left">
                        <img src="./img/rendezvous2.png" alt="Rendezvous support" border="0" />
                    </div>
                </td>
            </tr>
            <tr>
                <td valign="top" colspan="2"><strong>Passive and active FTP mode</strong></td>
                <td valign="top" class="box-dash"></td>
            </tr>
            <tr>
                <td valign="top" colspan="2"><strong>ASCII and binary FTP transfers</strong></td>
                <td valign="top" class="box-dash">
                    <ul>
                        <li>Convert line endings on the fly in ASCII transfers</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td valign="top" colspan="2"><strong>Transcript</strong></td>
                <td valign="top" class="box-dash"></td>
            </tr>
            <tr>
                <td colspan="3">
                    <div align="right">
                        <a href="http://validator.w3.org/check/referer">Validate</a>, $Date$
                    </div>
                </td>
            </tr><?php echo(echofooter());?>
        </table>
    </div>
</body>
</html>
