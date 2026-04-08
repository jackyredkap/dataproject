<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="css/style.css" />
</head>
<body>
<?
		$objConnect = mysql_connect("localhost","root","1234") or die("Error Connect to Database");
		mysql_query("SET NAMES UTF8");
		$objDB = mysql_select_db("dataproject");
		$strSQL = "INSERT INTO files ";
		$strSQL .="(content_name, content_detail, FilesName) ";
		$strSQL .="VALUES";
		$strSQL .="('".$_POST["content_name"]."','".$_POST["content_detail"]."' ";
	    $strSQL .=",'".$_POST["FilesName"]."') ";
		$objQuery = mysql_query($strSQL) or die(mysql_error());
if($objQuery)
{
	echo "<script>alert('บันทึกข้อมูลเรียบร้อย');window.location='upload.php';</script>";
}
mysql_close($objConnect)
?>
?>
</body>
</html>