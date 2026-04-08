<?php
	ini_set('display_errors', 1);
	error_reporting(~0);
	require_once("connect.php");

	if(!isset($_SESSION['UserID']))
	{
		echo "<script>alert('กรุณาล็อกอินเข้าใช้งาน');window.location='index.php';</script>";
		exit();
	}
	
	//*** Update Last Stay in Login System
	$sql = "UPDATE member SET LastUpdate = NOW() WHERE UserID = '".$_SESSION["UserID"]."' ";
	$query = mysql_query($sql);
	
	//*** Get User Login
	$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
?>
<html>
<head>
<title></title>
</head>
<frameset rows="63,*" cols="*" border="0" framespacing="0" frameborder="no" border="1">
<frame src="header_admin.php" name="headframe" scrolling="no" noresize><!--Header-->
<frameset rows="*" cols="200,*" framespacing="0" frameborder="no" border="1">
<!--ต้องกำหนดชื่อ  Attribute name-->
<frame src="menu_admin.php" name="frame1" scrolling="yes" noresize>
<frame src="body.php" name="frame2" frameborder="no">
</frameset>
</frameset>
<noframes>
<body>
</body>
</noframes>
</html>