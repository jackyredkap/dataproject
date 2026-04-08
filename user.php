<html>
<head>
<title></title>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<script src="http://code.jquery.com/jquery-latest.js"></script>
</head>
<body leftmargin="0" topmargin="0">
<?
$objConnect = mysql_connect("localhost","root","1234") or die ("Error Connect to Database");
mysql_query("SET NAMES UTF8");
error_reporting( error_reporting() & ~E_NOTICE );
$objDB = mysql_select_db("dataproject");

//*** Add Condition ***//
if($_POST["hdnCmd"] == "Add")
{
	$strSQL = "INSERT INTO member";
	$strSQL .= "(Username,Password,Name,Status) ";
	$strSQL .="VALUES";
	$strSQL .="('".$_POST["txtAddUsername"]."' ";
	$strSQL .=",'".$_POST["txtAddPassword"]."' ";
	$strSQL .=",'".$_POST["txtAddName"]."' ";
	$strSQL .=",'".$_POST["txtAddStatus"]."') ";
	$objQuery = mysql_query($strSQL) or die(mysql_error());
	
	//header("location:$_SERVER[PHP_SELF]");
	//exit();
}

//*** Update Condition ***//
if($_POST["hdnCmd"] == "Update")
{
	$strSQL = "UPDATE member SET ";
	$strSQL .= "UserID = '".$_POST["txtEditUserID"]."' ";
	$strSQL .= ",Username = '".$_POST["txtEditUsername"]."' ";
	$strSQL .= ",Password = '".$_POST["txtEditPassword"]."' ";
	$strSQL .= ",Name = '".$_POST["txtEditName"]."' ";
	$strSQL .= ",Status = '".$_POST["txtEditStatus"]."' ";
	$strSQL .= "WHERE UserID = '".$_POST["hdnEditUserID"]."' ";
	$objQuery .= mysql_query($strSQL) or die(mysql_error());
	
	//header("location:$_SERVER["PHP_SELF"]");
	//exit();
	}
	
//*** Delete Condition***//
if($_GET["Action"] == "Del")
{
	$strSQL = "DELETE FROM member ";
	$strSQL .= "WHERE UserID = '".$_GET["uID"]."' ";
	$objQuery = mysql_query($strSQL) or die(mysql_error());
	
	//header("location:$_SERVER[PHP_SELF]");
	//exit();
}

$strSQL = "SELECT * FROM member ORDER BY UserID ASC ";
$objQuery = mysql_query($strSQL) or die(mysql_error());
mysql_query("SET NAMES UTF8");
?>
<form name="frmMain" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
<input type="hidden" name="hdnCmd" value="">
<center>

<table style="font-weight: bold;"  width="100%" bgcolor="#B5B5B5">
<tr>
<td><span>เพิ่ม/แก้ไข/ลบ/ผู้ใช้ระบบ</span></td>
</tr>
</table><br>
<table bgcolor="#9C9C9C">
<tr>
	<td style="font-weight: bold;" align="center"><span>ชื่อรหัสผ่าน</span><br>
	<input type="text" name="txtAddUsername" size="10"></td>
	<td style="font-weight: bold;" align="center"><span>รหัสผ่าน</span><br>
	<input type="text" name="txtAddPassword" size="10"></td>
	<td style="font-weight: bold;" align="center"><span>ชื่อ-นามสกุล เจ้าหน้าที่</span><br>
	<input type="text" name="txtAddName" size="15"></td>
	<td style="font-weight: bold;" align="center"><span>สิทธิการใช้ระบบ</span><br>
	<select name="txtAddStatus">
	<option value="เจ้าหน้าที่ทั่วไป">เจ้าหน้าที่ทั่วไป</option>
	<option value="ผู้ดูแลระบบ"><font color="#FF0000">ผู้ดูแลระบบ</font></option>
	</select></td>
	<td><span></span><br>
	<input name="btnAdd" type="button" id="btnAdd" value="เพิ่ม" OnClick="frmMain.hdnCmd.value='Add';frmMain.submit();"></td>
</tr>
</table><br>
<table border="1" style="border-collapse:collapse; border: solid #696969; background-color: #D3D3D3;">
	<tr bgcolor="#0033FF" border="1">
	<th>ลำดับ</th>
	<th>ชื่อรหัสผ่าน</th>
	<th>รหัสผ่าน</th>
	<th>ชื่อ-นามสกุล เจ้าหน้าที่</th>
	<th>สิทธิการใช้ระบบ</th>
	<th>แก้ไข</th>
	<th>ลบ</th>
	</tr>
<?php
while($objResult = mysql_fetch_array($objQuery))
{
?>
	<?php
	if($objResult["UserID"] == $_GET["uID"] and $_GET["Action"] == "Edit")
	{
	?>	
	<tr>	
		<td><input type="text" name="txtEditUserID" size="2" value="<? echo $objResult["UserID"];?>">	
		<input type="hidden" name="hdnEditUserID" value="<? echo $objResult["UserID"];?>">
		<td><input type="text" name="txtEditUsername" size="7" value="<? echo $objResult["Username"];?>"></td>
		<td><input type="text" name="txtEditPassword" size="5" value="<? echo $objResult["Password"];?>"></td>
		<td><input type="text" name="txtEditName" size="17" value="<? echo $objResult["Name"];?>"></td>
		<td>
			<select name="txtEditStatus">
			<option><?=$objResult["Status"];?></option>
			<option value="เจ้าหน้าที่ทั่วไป">เจ้าหน้าที่ทั่วไป</option>
			<option value="ผู้ดูแลระบบ">ผู้ดูแลระบบ</option>
			</select>
		</td>
		<td><input name="btnAdd" type="button" id="btnUpdate" value="บันทึก" OnClick="frmMain.hdnCmd.value='Update';frmMain.submit();"></td>
		<td><input name="btnAdd" type="button" id="btnCancel" value="ยกเลิก" OnClick="window.location='<?php echo $_SERVER["PHP_SELF"];?>';"></td>
	</tr>	
	<?php
	}
	else
	{
	?>
	<tr>
		<td><?php echo $objResult["UserID"];?></td>
		<td><?php echo $objResult["Username"];?></td>
		<td><?php echo $objResult["Password"];?></td>
		<td><?php echo $objResult["Name"];?></td>
		<td><?php echo $objResult["Status"];?></td>
		<td><a href="<?php echo $_SERVER["PHP_SELF"];?>?Action=Edit&uID=<?php echo
		$objResult["UserID"];?>">แก้ไข</td>
		<td><a href="<?php echo $_SERVER["PHP_SELF"];?>?Action=Del&uID=<?php echo $objResult["UserID"];?>';" >ลบ</a></td>
	</tr>
	<?php
	}
	?>
	<?php
	}
	?>
</table>

</form>
</center>
<?php
mysql_close($objConnect);
?>
</body>
</html>