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
	$strSQL = "INSERT INTO statusdata";
	$strSQL .= "(NameStatus) ";
	$strSQL .="VALUES";
	$strSQL .="('".$_POST["txtAddNameStatus"]."') ";
	$objQuery = mysql_query($strSQL) or die(mysql_error());
	
	//header("location:$_SERVER[PHP_SELF]");
	//exit();
}

//*** Update Condition ***//
if($_POST["hdnCmd"] == "Update")
{
	$strSQL = "UPDATE statusdata SET ";
	$strSQL .= "StatusID = '".$_POST["txtEditStatusID"]."' ";
	$strSQL .= ",NameStatus = '".$_POST["txtEditNameStatus"]."' ";
	$strSQL .= "WHERE StatusID = '".$_POST["hdnEditStatusID"]."' ";
	$objQuery .= mysql_query($strSQL) or die(mysql_error());
	
	//header("location:$_SERVER["PHP_SELF"]");
	//exit();
	}
	
//*** Delete Condition***//
if($_GET["Action"] == "Del")
{
	$strSQL = "DELETE FROM statusdata ";
	$strSQL .= "WHERE StatusID = '".$_GET["sID"]."' ";
	$objQuery = mysql_query($strSQL) or die(mysql_error());
	
	//header("location:$_SERVER[PHP_SELF]");
	//exit();
}

$strSQL = "SELECT * FROM statusdata ORDER BY StatusID ASC ";
$objQuery = mysql_query($strSQL) or die(mysql_error());
mysql_query("SET NAMES UTF8");
?>
<form name="frmMain" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
<input type="hidden" name="hdnCmd" value="">
<center>

<table style="font-weight: bold;"  width="100%" bgcolor="#B5B5B5">
<tr>
<td><span>เพิ่ม/แก้ไข/ลบ/สถานะการขาย</span></td>
</tr>
</table><br>
<table bgcolor="#9C9C9C">
<tr>
	<td style="font-weight: bold;" align="center"><span>ชื่อสถานะการขาย</span><br>
	<input type="text" name="txtAddNameStatus" size="10"></td>
	<td><span></span><br>
	<input name="btnAdd" type="button" id="btnAdd" value="เพิ่ม" OnClick="frmMain.hdnCmd.value='Add';frmMain.submit();"></td>
</tr>
</table><br>
<table border="1" style="border-collapse:collapse; border: solid #696969; background-color: #D3D3D3;">
	<tr bgcolor="#0033FF" border="1">
	<th>ลำดับ</th>
	<th>ชื่อสถานะการขาย</th>
	<th>แก้ไข</th>
	<th>ลบ</th>
	</tr>
<?php
while($objResult = mysql_fetch_array($objQuery))
{
?>
	<?php
	if($objResult["StatusID"] == $_GET["sID"] and $_GET["Action"] == "Edit")
	{
	?>	
	<tr>	
		<td><input type="text" name="txtEditStatusID" size="2" value="<? echo $objResult["StatusID"];?>">	
		<input type="hidden" name="hdnEditStatusID" value="<? echo $objResult["StatusID"];?>">
		<td><input type="text" name="txtEditNameStatus" size="12" value="<? echo $objResult["NameStatus"];?>"></td>
		<td><input name="btnAdd" type="button" id="btnUpdate" value="บันทึก" OnClick="frmMain.hdnCmd.value='Update';frmMain.submit();"></td>
		<td><input name="btnAdd" type="button" id="btnCancel" value="ยกเลิก" OnClick="window.location='<?php echo $_SERVER["PHP_SELF"];?>';"></td>
	</tr>	
	<?php
	}
	else
	{
	?>
	<tr>
		<td><?php echo $objResult["StatusID"];?></td>
		<td><?php echo $objResult["NameStatus"];?></td>
		<td><a href="<?php echo $_SERVER["PHP_SELF"];?>?Action=Edit&sID=<?php echo
		$objResult["StatusID"];?>">แก้ไข</td>
		<td><a href="<?php echo $_SERVER["PHP_SELF"];?>?Action=Del&sID=<?php echo $objResult["StatusID"];?>';" >ลบ</a></td>
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