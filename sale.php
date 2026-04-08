<html>
<head>
<title></title>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<script src="http://code.jquery.com/jquery-latest.js"></script>
<meta http-equiv="Content-Type" Content="text/html; charset=UTF-8">
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
	$strSQL = "INSERT INTO sale ";
	$strSQL .="(SaleName) ";
	$strSQL .="VALUES";
	$strSQL .="('".$_POST["txtAddSaleName"]."')";
	$objQuery = mysql_query($strSQL) or die(mysql_error());
	
	//header("location:$_SERVER[PHP_SELF]");
	//exit();
}

//*** Update Condition ***//
if($_POST["hdnCmd"] == "Update")
{
	$strSQL = "UPDATE sale SET ";
	$strSQL .="SaleID = '".$_POST["txtEditSaleID"]."' ";
	$strSQL .=",SaleName = '".$_POST["txtEditSaleName"]."' ";
	$strSQL .="WHERE SaleID = '".$_POST["hdnEditSaleID"]."' ";
	$objQuery = mysql_query($strSQL) or die(mysql_error());

	//header("location:$_SERVER["PHP_SELF"]");
	//exit();
}

//*** Delete Condition***//
if($_GET["Action"] == "Del")
{
	$strSQL = "DELETE FROM sale ";
	$strSQL .="WHERE SaleID = '".$_GET["sID"]."' "; 
	$objQuery = mysql_query($strSQL);
	
	//header("location:$_SERVER[PHP_SELF]");
	//exit();
}
	
$strSQL = "SELECT * FROM sale ORDER BY SaleID ASC ";
$objQuery = mysql_query($strSQL) or die(mysql_error());
?>
<form name="frmMain" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
<input type="hidden" name="hdnCmd" value="">
<center>

<table style="font-weight: bold;" width="100%" bgcolor="#B5B5B5">
<tr>
<td><span>เพิ่ม/แก้ไข/ลบ/พนักงานขาย</span></td>
</tr>
</table><br>
<table bgcolor="#9C9C9C">
<tr>
	<td><span style="font-weight: bold;" >ระบุชื่อพนักงานขาย</span>&nbsp;&nbsp;
	<input type="text" name="txtAddSaleName" size="10">&nbsp;
	<input name="btnAdd" type="button" id="btnAdd" value="เพิ่ม" OnClick="frmMain.hdnCmd.value='Add';frmMain.submit();">
	</td>
</tr>
</table><br>
<table style="border-collapse:collapse; border: solid #696969; background-color: #CFCFCF;" width="180" border="1">
	<tr bgcolor="#0033FF">
		<th>ลำดับ</th>
		<th>ชื่อพนักงานขาย</th>
		<th>แก้ไข</th>
		<th>ลบ</th>
	</tr>
<?php
while($objResult = mysql_fetch_array($objQuery))
{
?>
	<?php 
	 if($objResult["SaleID"] == $_GET["sID"] and $_GET["Action"] == "Edit")
	 {
	?>
	<tr>
		<td><input type="text" name="txtEditSaleID" size="2" value="<? echo $objResult["SaleID"];?>" >
		<input type="hidden" name="hdnEditSaleID" size="2" value="<? echo $objResult["SaleID"];?>" >
		<td><input type="text" name="txtEditSaleName" size="12" value="<? echo $objResult["SaleName"];?>" ></td>
		<td><input name="btnAdd" type="button" id="btnUpdate" value="บันทึก" OnClick="frmMain.hdnCmd.value='Update';frmMain.submit();"></td>
		<td><input name="btnAdd" type="button" id="btnCancel" value="ยกเลิก" OnClick="window.location='<?php echo $_SERVER["PHP_SELF"];?>';"></td>
	</tr>
	<?php
	 }
	 else
	 {
	?>
	<tr>
		<td><?php echo $objResult["SaleID"];?></td>
		<td><?php echo $objResult["SaleName"];?></td>
		<td><a href="<?php echo $_SERVER["PHP_SELF"];?>?Action=Edit&sID=<?php echo
		$objResult["SaleID"];?>">แก้ไข</td>
		<td><a href="<?php echo $_SERVER["PHP_SELF"];?>?Action=Del&sID=<?php echo $objResult["SaleID"];?>';">ลบ</a></td>
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