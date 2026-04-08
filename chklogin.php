<?php
	header("content-type:text/html;charset=UTF-8");
	ob_start();
	session_start();
	mysql_connect("localhost","root","");
	mysql_query("SET NAMES UTF8");
	mysql_select_db("dataproject");
	$strSQL = "SELECT * FROM member WHERE Username = 
	'".mysql_real_escape_string($_POST["Username"])."' 
	and Password = '".mysql_real_escape_string($_POST["Password"])."' ";
	$objQuery = mysql_query($strSQL) or die (mysql_error());
	$objResult = mysql_fetch_array($objQuery);
	
	if(!$objResult)
	{
		echo "<script>alert('กรุณากรอก ชื่อผู้ใช้ และ รหัสผ่าน ให้ครบ!');window.location='index.php';</script>";//popup เด้งขึ้นมาเมื่อกรอกข้อมูลไม่ครบและ Redirect Web
	}
	else
	{
			$_SESSION["UserID"] = $objResult["UserID"];
			$_SESSION["Status"] = $objResult["Status"];
			
		session_write_close();
		
	if($objResult["Status"] == "ผู้ดูแลระบบ")
	{
		header("location:frame_admin.php");
	}
	else
	{
		header("location:frame_user.php");
	}
	}
	mysql_close();
?>