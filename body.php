<?php
	ob_start();
	session_start();
	require_once("connect.php");

	if(!isset($_SESSION['UserID']))
	{
		echo "<script>alert('กรุณาล็อกอินเข้าใช้งาน');window.location='index.php';</script>";
		exit();
	}
	
	//*** Update Last Stay in Login System
	$sql = "UPDATE member SET LastUpdate = NOW() WHERE UserID = '".$_SESSION["UserID"]."' ";
	$query = mysqli_query($con,$sql);
	
	//*** Get User Login
	$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
	$objQuery = mysqli_query($con,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
?>
<html>
<head>
</head>
<body>
<center>
<img style="padding-top:150px;" align="center" src="images/bgbody.jpg" />
</center>
</body>
</html>