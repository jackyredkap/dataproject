<?
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
<link href="stylesheet.css" rel="stylesheet" type="text/css">
<style type="text/css">
* {
	text-decoration: none;
}
.style2 {
	color: #FFFFF;
	font-weight: bold;
	font-size: 11px;
	text-decoration: none;
}
body {
	background-image: url(images/bgmenu.jpg);
}
</style>
</head>
<body topmargin="0" marginwidth="0" marginheight="0">
<table width="100%" border="0" cellspacing="0" class="Gradient2">
<tr>
<td><table width="100%" border="0" cellspacing="0">
<tr background="images/bgmenu1.jpg">
<td width="7%" background="images/bgmenu1.jpg" ><img src="images/notes-add.gif" width="13" height="13"></td>
<td width="93%" class="unnamed1" background="images/bgmenu1.jpg"><span class="style2">บันทึกรายละเอียดโครงการ</span></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><table width="100%" border="0" cellspacing="0">
<tr>
<td width="1%"><img src="images/small_submit.gif" width="11" height="11"></td>
<td width="99%" class="unnamed11"><a href="insertproject.php" target="frame2" >บันทึกรายละเอียดโครงการ</a></td>
</tr>
<tr>
<td width="1%"><img src="images/small_submit.gif" width="11" height="11"></td>
<td width="99%" class="unnamed11"><a href="search_user.php" target="frame2" >ค้นหา/แก้ไขรายละเอียดโครงการ</a></td>
</tr>
</table></td>
</tr>
</table></td>
</tr>

<tr>
<td><table width="100%" border="0" cellspacing="0">
<tr background="images/bgmenu1.jpg">
<td width="7%" background="images/bgmenu1.jpg" ><img src="images/notes-add.gif" width="13" height="13"></td>
<td width="93%" class="unnamed1" background="images/bgmenu1.jpg"><span class="style2">เอกสารโครงการ</span></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><table width="100%" border="0" cellspacing="0">
<tr>
<td width="1%"><img src="images/small_submit.gif" width="11" height="11"></td>
<td width="99%" class="unnamed11"><a href="showfiles.php" target="frame2">ค้นหาเอกสารโครงการ</a></td>
</tr>
</table></td>
</tr>
</table></td>
</tr>
</table>
</body>
</html>