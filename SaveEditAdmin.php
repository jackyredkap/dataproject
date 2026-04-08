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
$strSQL = "UPDATE detailproject SET ";
$strSQL .="NameProject = '".$_POST["txtEditNameProject"]."' "; 
$strSQL .=",Contact = '".$_POST["txtEditContact"]."' ";
$strSQL .=",OwnerProject = '".$_POST["txtEditOwnerProject"]."' ";
$strSQL .=",Architect = '".$_POST["txtEditArchitect"]."' ";
$strSQL .=",Consultant = '".$_POST["txtEditConsultant"]."' ";
$strSQL .=",StartDate = '".$_POST["txtEditStartDate"]."' ";
$strSQL .=",LastDate = '".$_POST["txtEditLastDate"]."' ";
$strSQL .=",StatusData = '".$_POST["txtEditStatusData"]."' ";
$strSQL .=",Sale = '".$_POST["txtEditSale"]."' ";
$strSQL .="WHERE ProjectID = '".$ID."' ";
$objQuery = mysql_query($strSQL) or die(mysql_error());
if($objQuery)
{
	echo "<script>alert('บันทึกข้อมูลเรียบร้อย');window.location='search_admin.php';</script>";
}
else
{
	echo "Error Save [".$strSQL."]";
}
mysql_close($objConnect);
?>
</body>
</html>