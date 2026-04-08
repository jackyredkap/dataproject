<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="css/style.css" />
</head>
<body leftmargin="0" topmargin="0">
<center>
<?
	$objConnect = mysql_connect("localhost","root","1234") or die("Error Connect to Database");
	$objDB = mysql_select_db("dataproject");

	if($_GET["Action"] == "Del")
{
	$strSQL = "DELETE FROM files ";
	$strSQL .="WHERE FilesID = '".$_GET["fID"]."' ";
	$objQuery = mysql_query($strSQL);
	if(!$objQuery)
	{
		echo "Error Delete [".mysql_error()."]";
	}
	//header("location:$_SERVER[PHP_SELF]");
	//exit();
}	
?>
<table style="font-weight: bold;" width="100%" bgcolor="#B5B5B5">
<tr>
<td><span>ค้นหา/เอกสารโครงการ</span></td>
</tr>
</table><br>
<form action="<?=$_SERVER["SCRIPT_NAME"];?>" method="post" name="form1">
<table border="1" style="border-collapse:collapse; border: solid #696969; background-color: #CFCFCF;">
<tr>
<td style="border-collapse:collapse; border: solid #696969;">
 <select name="lmName2">
<option value="">ชื่อโครงการ</option>
<?php
			$strSQL2 = "SELECT * FROM files ORDER BY FilesID ASC";
			mysql_query("SET NAMES UTF8");
			$objQuery2 = mysql_query($strSQL2);
			while($objResuut2 = mysql_fetch_array($objQuery2))
			{
			?>
			<option value="<?=$objResuut2["content_name"];?>"><?=$objResuut2["content_name"];?></option>
			<?
			}
			?>
		  </select>
		</td>
<td style="border-collapse:collapse; border: solid #696969;">
 <select name="lmName3">
<option value="">รายละเอียดงาน</option>
<?php
			$strSQL3 = "SELECT * FROM files ORDER BY FilesID ASC";
			mysql_query("SET NAMES UTF8");
			$objQuery3 = mysql_query($strSQL3);
			while($objResuut3 = mysql_fetch_array($objQuery3))
			{
			?>
			<option value="<?=$objResuut3["content_detail"];?>"><?=$objResuut3["content_detail"];?></option>
			<?
			}
			?>
		  </select>
		</td>
<td style="border-collapse:collapse; border: solid #696969;">
<select name="lmName4">
<option value="">ที่อยู่เอกสาร</option>
<?php
			$strSQL4 = "SELECT * FROM files ORDER BY FilesID ASC";
			mysql_query("SET NAMES UTF8");
			$objQuery4 = mysql_query($strSQL4);
			while($objResuut4 = mysql_fetch_array($objQuery4))
			{
			?>
			<option value="<?=$objResuut4["FilesName"];?>"><?=$objResuut4["FilesName"];?></option>
			<?
			}
			?>
		  </select>
		</td>
		<td style="border-collapse:collapse; border: solid #696969;"><select name="lmName5"><option>แก้ไข</option></select></td>
		</tr>
<?php
		$strSQL = "SELECT * FROM files WHERE FilesID = '".$_POST["lmName1"]."' OR content_name = '".$_POST["lmName2"]."' OR content_detail = '".$_POST["lmName3"]."' OR Filesname = '".$_POST["lmName4"]."' ";
		$objQuery = mysql_query($strSQL) or die(mysql_error());
		
while($objResult = mysql_fetch_array($objQuery))
{

	if($objResult["FilesID"] == $_GET["fID"])
	{
?>
 
<?php
	}
  else
	{
?>
<tr>
<td align="center"><?php echo $objResult["content_name"];?></td>
<td align="center"><?php echo $objResult["content_detail"];?></td>
<td align="center"><a href="file:///<?=$objResult["FilesName"];?>" target="_blank"><?=$objResult["FilesName"];?></a></center></td>
<td align="center"><a style="text-decoration: none;" href="Editfiles.php?ID=<?=$objResult["FilesID"];?>">แก้ไข</a></td>
</tr>
<?php
	}
?>
<?php
	}
	?>
</table><br>
<input name="btnSubmit" type="submit" value="ค้นหา">
</form>
</center>
</body>
</html>
<?
mysql_close();
?>