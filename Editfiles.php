<html>
<head>
<title>ระบบเก็บข้อมูลลูกค้า</title>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<link href="stylesheet.css" rel="stylesheet" type="text/css">
<script language="javascript" src="popcalendar.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body leftmargin="0" topmargin="0">
<table style="font-weight: bold;" width="100%" bgcolor="#B5B5B5">
<tr>
<td><span class="style2">แก้ไขรายละเอียดเอกสาร</span></td>
</tr>
</table><br>
<center>
	<form action="SaveEditfile.php?ID=<?php echo $_GET["ID"];?>" name="frmEdit" method="post">
<?php
$objConnect = mysql_connect("localhost","root","1234") or die ("Error Connect to Database");
mysql_query("SET NAMES UTF8");
$objDB = mysql_select_db("dataproject");
$strSQL = "SELECT * FROM files WHERE FilesID = '".$_GET["ID"]."' ";
$objQuery = mysql_query($strSQL) or die(mysql_error());
$objResult = mysql_fetch_array($objQuery);
?>
<table border="1" style="border-collapse:collapse; border: solid #696969; background-color: #D3D3D3;" style="font-size: 13px;">
<tr>
<td style="font-weight: bold;">ชื่อโครงการ:</td>
<td><input type="text" name="Editcontent_name" size="44" value="<?php echo $objResult["content_name"];?>" /></td>
</tr>
<tr>
<td style="font-weight: bold;">รายละเอียดงาน:</td>
<td><textarea type="text" name="Editcontent_detail"  cols="45" rows="5" value="<?php echo $objResult["content_detail"];?>"><?=$objResult["content_detail"];?></textarea></td>
</tr>
<tr>
<td style="font-weight: bold;">ที่อยู่เอกสาร:</td>
<td><input type="text" name="EditFilesName" size="44" value="<?php echo $objResult["FilesName"];?>" /></td>
</tr>
</table>
<br>
<input type="submit" name="submit" value="บันทึกการแก้ไข">
&nbsp;&nbsp;&nbsp;
<input type="reset" name="reset" value="ล้างข้อมูล">
</center>
<?php
mysql_close($objConnect);
?>
</form>
</body>
</html>