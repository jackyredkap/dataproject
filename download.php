<?php 
// downloading a file 
$filename = $_GET["C:\AppServ\www\dataproject\myfile"]; ###ผมแก้ที่เก็บไฟล์###

 
// fix for IE catching or PHP bug issue 
header("Pragma: public"); 
header("Expires: 0"); // set expiration time 
header("Cache-Control: must-revalidate, post-check=0, pre-check=0"); 
// browser must download file from server instead of cache 
 
 
// force download dialog 
header("Content-Type: application/force-download"); 
header("Content-Type: application/octet-stream"); 
header("Content-Type: application/download"); 
 
 
// use the Content-Disposition header to supply a recommended filename and 
// force the browser to display the save dialog. 
header("Content-Disposition: attachment; filename=".basename($filename).";"); 

 
/* 
21.The Content-transfer-encoding header should be binary, since the file will be read 
22.directly from the disk and the raw bytes passed to the downloading computer. 
23.The Content-length header is useful to set for downloads. The browser will be able to 
24.show a progress meter as a file downloads. The content-lenght can be determines by 
25.filesize function returns the size of a file. 
26.*/
header("Content-Transfer-Encoding: binary"); 
header("Content-Length: ".filesize($filename)); 

 
@readfile($filename); 
exit(0); 
?>