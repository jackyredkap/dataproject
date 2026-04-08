<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
$objConnect = mysql_connect("localhost","root","1234") or die ("Error Connect to Database");
$objDB = mysql_select_db("dataproject");
mysql_query("SET NAMES UTF8");
//ปิดข้อมูลเพื่อไม่ให้ทำการแก้ไข และข้อมูลไม่  Blank
$strSQL = "UPDATE files SET ";
$strSQL .="content_name = '".$_POST["Editcontent_name"]."' "; 
$strSQL .=",content_detail = '".$_POST["Editcontent_detail"]."' ";
$strSQL .=",FilesName = '".$_POST["EditFilesName"]."' ";
$strSQL .="WHERE FilesID = '".$ID."' ";
$objQuery = mysql_query($strSQL) or die(mysql_error());
if($objQuery)
{
	echo "<script>alert('บันทึกข้อมูลเรียบร้อย');window.location='showfiles.php';</script>";
}
else
{
	echo "Error Save [".$strSQL."]";
}
mysql_close($objConnect);
?>
</body>
</html>