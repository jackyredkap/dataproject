<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="css/style.css" />
</head>
<?
	mysql_connect("localhost","root","1234") or die(mysql_error());
	mysql_query("SET NAMES UTF8");
	mysql_select_db("dataproject");
?>
<body leftmargin="0" topmargin="0">
<table style="font-weight: bold;" width="100%" bgcolor="#B5B5B5">
<tr>
<td><span>บันทึกเอกสาร</span></td>
</tr>
</table><br>
<center>
<form action="<?=$_SERVER["SCRIPT_NAME"];?>" name="frmEdit" method="post">
<?php
$objConnect = mysql_connect("localhost","root","1234") or die ("Error Connect to Database");
mysql_query("SET NAMES UTF8");
$objDB = mysql_select_db("dataproject");
$strSQL = "SELECT * FROM detailproject WHERE ProjectID = '".$_GET["ID"]."' ";
$objQuery = mysql_query($strSQL) or die(mysql_error());
$objResult = mysql_fetch_array($objQuery);
?>
<table border="1" style="border-collapse:collapse; border: solid #696969; background-color: #D3D3D3;" style="font-size: 13px;">
<tr bgcolor="#6495ED" style="font-weight: bold;" align="center">
		<td>ชื่อโครงการ</td>
		<td>ผู้ติดต่อ</td>
		<td>เจ้าของโครงการ</td>
		<td>สถาปนิก</td>
		<td>ที่ปรึกษาโครงการ</td>
		<td>วันเริ่มต้นโครงการ</td>
		<td>วันสิ้นสุดโครงการ</td>
		<td>พนักงานขาย</td>
		<td>สถานะการขาย</td>
  </tr>
<tr>
    <td align="center"><?php echo $objResult["NameProject"];?></td>
	<td align="center"><?php echo $objResult["Contact"];?></td>
    <td align="center"><?php echo $objResult["OwnerProject"];?></td>
	<td align="center"><?php echo $objResult["Architect"];?></td>
    <td align="center"><?php echo $objResult["Consultant"];?></td>
	<td align="center"><?php echo $objResult["StartDate"];?></td>
	<td align="center"><?php echo $objResult["LastDate"];?></td>
	<td align="center"><?php echo $objResult["Sale"];?></td>
	<td align="center"><?php echo $objResult["StatusData"];?></td>
	</tr>
</table>
<br>
</center>
</table>
<?php
mysql_close($objConnect);
?>
</form>
<center>
	<form name="form1" method="post" action="save_upload.php">
	<table style="border-collapse:collapse; border: solid #696969; background-color: #D3D3D3;" border="1" style="font-size: 13px;">
	<tr>
    <td style="font-weight: bold;">ชื่อโครงการ:</td>
    <td><input type="text" name="content_name" id="content_name" size="44" /></td>
    </tr>
    <tr>
    <td style="font-weight: bold;">รายละเอียด:</td>
    <td><textarea name="content_detail" id="content_detail" cols="45" rows="5"></textarea></td>
    </tr>
  <tr>
   <td style="font-weight: bold;">ระบุที่อยู่เก็บเอกสาร:</td>
   <td><input type="text" name="FilesName" id="FilesName" size="44" /></td>
  </tr>
	</table><br>
	<input name="btnSubmit" type="submit" value="บันทึก">
	</form>
</center>
</body>
</html>