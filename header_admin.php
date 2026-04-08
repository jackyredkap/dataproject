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
<title></title>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<style type="text/css">
.unnamed1 {
	font-family: "MS Sans Serif", Tahoma, sans-serif;
	font-size: 14px;
}
</style>
</head>
<body leftmargin="0" topmargin="0">
<table width="100%" height="65" border="0" cellspacing="0">
     <tr> 
          
    <td width="41%" height="65" background="images/backblue1.jpg"><img src="images/com.jpg" width="303" height="63"></TD>
          <td width="7%" background="images/backblue2.jpg">&nbsp;</td>
          <td width="52%" valign="bottom" background="images/backblue3.jpg"><div align="right">
                    <table width="100%" border="0" cellspacing="0" class="DetailBody">
                         <tr> 
                              <td width="77%"><div align="right" class="unnamed1">สวัสดีคุณ  ผู้ดูแลระบบ</div></td>
                              <td width="23%"><div align="right"><a href="index.php" target="_parent"> 
                </a><a href="logout.php" target="_parent"><img src="images/Exit.jpg" width="100" height="20" border="0"></a></div></td>
                         </tr>
                         <tr height=5>
                              <td></td>
                              <td></td>
                         </tr>
                    </table>
               </div></td>
     </tr>
</table>
</body>
</html>