<?php
	$objConnect = mysql_connect("localhost","root","1234") or die(mysql_error());
	mysql_query("SET NAMES UTF8");
	$objDB = mysql_select_db("dataproject");
	$strSQL = "SELECT * FROM detailproject WHERE 1 AND NameProject = '".$_POST["sCode"]."' OR Company = '".$_POST["eCompany"]."' ";
	$objQuery = mysql_query($strSQL) or die (mysql_error());
	$intNumField = mysql_num_fields($objQuery);
	$resultArray = array();
	while($obResult = mysql_fetch_array($objQuery))
	{
		$arrCol = array();
		for($i=0;$i<$intNumField;$i++)
		{
			$arrCol[mysql_field_name($objQuery,$i)] = $obResult[$i];
		}
		array_push($resultArray,$arrCol);
	}
	
	mysql_close($objConnect);
	
	echo json_encode($resultArray);
?>
