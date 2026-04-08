<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
$objConnect = mysql_connect("localhost","root","1234") or die ("Error Connect to Database");
$objDB = mysql_select_db("dataproject");//แก้ปัญหา ไม่Alert แจ้งเตือนการกรอกข้อมูลซ้ำ
mysql_query("SET NAMES UTF8");
$strSQL = "INSERT INTO detailproject ";
	$strSQL .="(ProjectID,NameProject,Contact,OwnerProject,Architect,Consultant,StartDate,LastDate,Sale,StatusData) ";
	$strSQL .="VALUES";
	$strSQL .="('".$_POST["txtAddProjectID"]."','".$_POST["txtAddNameProject"]."' ";
	$strSQL .=",'".$_POST["txtAddContact"]."','".$_POST["txtAddOwnerProject"]."' ";
	$strSQL .=",'".$_POST["txtAddArchitect"]."','".$_POST["txtAddConsultant"]."' ";
	$strSQL .=",'".$_POST["txtAddStartDate"]."','".$_POST["txtAddLastDate"]."' ";
	$strSQL .=",'".$_POST["txtAddSale"]."','".$_POST["txtAddStatusData"]."') ";
	$objQuery = mysql_query($strSQL) or die(mysql_error());
//$strSQL = mysql_query($strSQL) or die(mysql_error());
if($objQuery)
{
	echo "<script>alert('บันทึกข้อมูลเรียบร้อย');window.location='insertproject.php';</script>";
}
mysql_close($objConnect)
?>
</body>
</html>