<?php
	ini_set('display_errors', 1);
	error_reporting(~0);
	
	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "dataproject";

	$con = mysql_connect($serverName,$userName,$userPassword,$dbName);
	
	
	//*** Reject user not online
	$intRejectTime = 20; //Minute
	$sql = "UPDATE member SET LoginStatus = '0', LastUpdate = '0000-00-00 00:00:00' WHERE 1 AND
		DATE_ADD(LastUpdate, INTERVAL $intRejectTime MINUTE) <= NOW() ";
		$query = mysql_query($sql);
?>