<html>
<head>
<meta http-equiv="Content-Type" Content="text/html; charset=UTF-8">
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
<td><span>ค้นหา/แก้ไข/ลบ/รายละเอียดโครงการ</span></td>
</tr>
</table><br>
<center>
	<form action="<?=$_SERVER["SCRIPT_NAME"];?>" method="post" name="form1">
	<table border="1" style="border-collapse:collapse; border: solid #696969; background-color: #CFCFCF;">
		<tr>
		<td style="border-collapse:collapse; border: solid #696969;">
		    <select name="lmName2">
			<option value="">ชื่อโครงการ</option>
			<?
			$strSQL2 = "SELECT * FROM detailproject ORDER BY ProjectID ASC";
			mysql_query("SET NAMES UTF8");
			$objQuery2 = mysql_query($strSQL2);
			while($objResuut2 = mysql_fetch_array($objQuery2))
			{
			?>
			<option value="<?=$objResuut2["NameProject"];?>"><?=$objResuut2["NameProject"];?></option>
			<?
			}
			?>
		  </select>
		</td>
		<td style="border-collapse:collapse; border: solid #696969;">
		   <select name="lmName3">
			<option value="">ผู้ติดต่อ</option>
			<?
			$strSQL3 = "SELECT * FROM detailproject ORDER BY ProjectID ASC";
			mysql_query("SET NAMES UTF8");
			$objQuery3 = mysql_query($strSQL3);
			while($objResuut3 = mysql_fetch_array($objQuery3))
			{
			?>
			<option value="<?=$objResuut3["Contact"];?>"><?=$objResuut3["Contact"];?></option>
			<?
			}
			?>
		  </select>
		</td>
		<td style="border-collapse:collapse; border: solid #696969;">
		   <select name="lmName4">
			<option value="">เจ้าของโครงการ</option>
			<?
			$strSQL4 = "SELECT * FROM detailproject ORDER BY ProjectID ASC";
			mysql_query("SET NAMES UTF8");
			$objQuery4 = mysql_query($strSQL4);
			while($objResuut4 = mysql_fetch_array($objQuery4))
			{
			?>
			<option value="<?=$objResuut4["OwnerProject"];?>"><?=$objResuut4["OwnerProject"];?></option>
			<?
			}
			?>
		  </select>
		</td>
		<td style="border-collapse:collapse; border: solid #696969;">
		   <select name="lmName5">
			<option value="">สถาปนิก</option>
			<?
			$strSQL5 = "SELECT * FROM detailproject ORDER BY ProjectID ASC";
			mysql_query("SET NAMES UTF8");
			$objQuery5 = mysql_query($strSQL5);
			while($objResuut5 = mysql_fetch_array($objQuery5))
			{
			?>
			<option value="<?=$objResuut5["Architect"];?>"><?=$objResuut5["Architect"];?></option>
			<?
			}
			?>
		  </select>
		</td>
		<td style="border-collapse:collapse; border: solid #696969;">
		    <select name="lmName6">
			<option value="">ที่ปรึกษาโครงการ</option>
			<?
			$strSQL6 = "SELECT * FROM detailproject ORDER BY ProjectID ASC";
			mysql_query("SET NAMES UTF8");
			$objQuery6 = mysql_query($strSQL6);
			while($objResuut6 = mysql_fetch_array($objQuery6))
			{
			?>
			<option value="<?=$objResuut6["Consultant"];?>"><?=$objResuut6["Consultant"];?></option>
			<?
			}
			?>
		  </select>
		</td>
		<td style="border-collapse:collapse; border: solid #696969;">
		    <select name="lmName7">
			<option value="">วันเริ่มต้นโครงการ</option>
			<?
			$strSQL7 = "SELECT * FROM detailproject ORDER BY ProjectID ASC";
			mysql_query("SET NAMES UTF8");
			$objQuery7 = mysql_query($strSQL7);
			while($objResuut7 = mysql_fetch_array($objQuery7))
			{
			?>
			<option value="<?=$objResuut7["StartDate"];?>"><?=$objResuut7["StartDate"];?></option>
			<?
			}
			?>
		  </select>
		</td>
		<td style="border-collapse:collapse; border: solid #696969;">
		    <select name="lmName8">
			<option value="">วันสิ้นสุดโครงการ</option>
			<?
			$strSQL8 = "SELECT * FROM detailproject ORDER BY ProjectID ASC";
			mysql_query("SET NAMES UTF8");
			$objQuery8 = mysql_query($strSQL8);
			while($objResuut8 = mysql_fetch_array($objQuery8))
			{
			?>
			<option value="<?=$objResuut8["LastDate"];?>"><?=$objResuut8["LastDate"];?></option>
			<?
			}
			?>
		  </select>
		</td>
		<td style="border-collapse:collapse; border: solid #696969;">
		     <select name="lmName9">
			<option value="">SALE CODE</option>
			<?
			$strSQL9 = "SELECT * FROM detailproject ORDER BY ProjectID ASC";
			mysql_query("SET NAMES UTF8");
			$objQuery9 = mysql_query($strSQL9);
			while($objResuut9 = mysql_fetch_array($objQuery9))
			{
			?>
			<option value="<?=$objResuut9["Sale"];?>"><?=$objResuut9["Sale"];?></option>
			<?
			}
			?>
		  </select>
		</td>
		<td style="border-collapse:collapse; border: solid #696969;">
		     <select name="lmName10">
			<option value="">สถานะการขาย</option>
			<?
			$strSQL10 = "SELECT * FROM detailproject ORDER BY ProjectID ASC";
			mysql_query("SET NAMES UTF8");
			$objQuery10 = mysql_query($strSQL10);
			while($objResuut10 = mysql_fetch_array($objQuery10))
			{
			?>
			<option value="<?=$objResuut10["StatusData"];?>"><?=$objResuut10["StatusData"];?></option>
			<?
			}
			?>
		  </select>
		</td>
		<td align="center" style="border-collapse:collapse; border: solid #696969;"><select name="lmName11"><option>เอกสาร</option></select></td>
		</tr>
<?php
$strSQL = "SELECT * FROM detailproject WHERE ProjectID = '".$_POST["lmName1"]."' OR NameProject = '".$_POST["lmName2"]."' 
		OR Contact = '".$_POST["lmName3"]."' OR OwnerProject = '".$_POST["lmName4"]."' OR Architect = '".$_POST["lmName5"]."' 
		OR Consultant = '".$_POST["lmName6"]."' OR StartDate = '".$_POST["lmName7"]."' OR LastDate = '".$_POST["lmName8"]."' 
		OR Sale = '".$_POST["lmName9"]."' OR StatusData = '".$_POST["lmName10"]."' ";
				$objQuery = mysql_query($strSQL) or die(mysql_error());
while($objResult = mysql_fetch_array($objQuery))
{
?>
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
	<td align="center"><a style="text-decoration: none;" href="upload.php?ID=<?=$objResult["ProjectID"];?>">เอกสาร</a></td>
	</tr>
	<?
	}
	?>
	</table><br>
	<input name="btnSubmit" type="submit" value="ค้นหา">
	</form>
</center>
</body>
</html>
<?
	mysql_close();
?>