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
<td><span class="style2">แก้ไขรายละเอียดโครงการ</span></td>
</tr>
</table><br>
<center>
	<form action="SaveEditAdmin.php?ID=<?php echo $_GET["ID"];?>" name="frmEdit" method="post">
<?php
$objConnect = mysql_connect("localhost","root","1234") or die ("Error Connect to Database");
mysql_query("SET NAMES UTF8");
$objDB = mysql_select_db("dataproject");
$strSQL = "SELECT * FROM detailproject WHERE ProjectID = '".$_GET["ID"]."' ";
$objQuery = mysql_query($strSQL) or die(mysql_error());
$objResult = mysql_fetch_array($objQuery);
?>
<table border="1" style="border-collapse:collapse; border: solid #696969; background-color: #D3D3D3;" style="font-size: 13px;">
<tr>
<td style="font-weight: bold;">ชื่อโครงการ:</td>
<td><input type="text" name="txtEditNameProject" value="<?php echo $objResult["NameProject"];?>" /></td>
</tr>
<tr>
<td style="font-weight: bold;">ผู้ติดต่อ:</td>
<td><input type="text" name="txtEditContact" value="<?php echo $objResult["Contact"];?>" /></td>
</tr>
<tr>
<td style="font-weight: bold;">เจ้าของโครงการ:</td>
<td><input type="text" name="txtEditOwnerProject" value="<?php echo $objResult["OwnerProject"];?>" /></td>
</tr>
<tr>
<td style="font-weight: bold;">สถาปนิก:</td>
<td><input type="text" name="txtEditArchitect" value="<?php echo $objResult["Architect"];?>" /></td>
</tr>
<tr>
<td style="font-weight: bold;">ที่ปรึกษาโครงการ:</td>
<td><input type="text" name="txtEditConsultant" value="<?php echo $objResult["Consultant"];?>" /></td>
</tr>
<tr><td style="font-weight: bold;">วันเริ่มต้นโครงการ:</td>
<td><input type="text" name="txtEditStartDate" id="daymonthyear1" onKeyPress="kod_pum()" value="<?php echo $objResult["StartDate"];?>" />
<!--code javascripy calendar.js-->       
       <script language="javascript">
  
    if (!document.layers) {
     document.write("<input type=button onclick='popUpCalendar(this, frmEdit.daymonthyear1, \"dd/mm/yyyy\")' value=' วันที่ ' style='font-size:11px'>")
   }

              </script>
</td>
</tr>           
<tr><td style="font-weight: bold;">วันสิ้นสุดโครงการ:</td>
<td><input type="text" name="txtEditLastDate" id="daymonthyear2" onKeyPress="kod_pum()" value="<?php echo $objResult['LastDate'];?>" />             
<script language="javascript">
  
    if (!document.layers) {
     document.write("<input type=button onclick='popUpCalendar(this, frmEdit.daymonthyear2, \"dd/mm/yyyy\")' value=' วันที่ ' style='font-size:11px'>")

   }
</script>
</td>
</tr>
<td style="font-weight: bold;">
พนักงานขาย:
</td>
<td>
<select name="txtEditSale">
		<option><?=$objResult["Sale"];?></option>
		<option value="-">-</option>
		<?php
		$sql = "SELECT * FROM sale ORDER BY SaleID";
		$qr = mysql_query($sql) or die(mysql_error());
		while($res = mysql_fetch_array($qr))
		{
		?>
		<option value="<?php echo $res["SaleName"];?>"><?php echo
			$res["SaleName"];?></option>
		<?
		}
		?>
</select>
</td>
<tr>
<td style="font-weight: bold;">
สถานะการขาย:
</td>
<td>
	<select name="txtEditStatusData">
	<option><?=$objResult["StatusData"];?></option>
		<?php
		$strSQL = "SELECT * FROM statusdata ORDER BY StatusID ASC";
		$objQuery = mysql_query($strSQL) or die(mysql_error());
		while($objResult = mysql_fetch_array($objQuery))
		{
		?>
		<option value="<?php echo $objResult["NameStatus"];?>"><?php echo
			$objResult["NameStatus"];?></option>
		<?php
		}
		?>
	</select>	
</td>
</tr>
</table>
<br>
<input type="submit" name="submit" value="บันทึกการแก้ไข">
&nbsp;&nbsp;&nbsp;
<input type="reset" name="reset" value="ล้างข้อมูล">
</center>
</table>
<?php
mysql_close($objConnect);
?>
</form>
</body>
</html>