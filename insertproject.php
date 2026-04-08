<html>
<head>
<title>ระบบเก็บข้อมูลโครงการ</title>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script language="javascript" src="popcalendar.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	$("#txtAddNameProject").change(function(){

			$("#sCode").empty();
			$("#sCompany").empty();
			
			$.ajax({ 
				url: 'returncustomer.php' ,
				type: "POST",
				data: 'sCode=' +$("#txtAddNameProject").val()+'&eCompany=' +$("#txtAddCompany").val()
				})
			.success(function(result) { 

					var obj = jQuery.parseJSON(result);

					if(obj != '')
					{
						  $.each(obj, function(key, inval) {

								   if($("#txtAddNameProject").val() == inval["NameProject"])
								  {
									   $("#sCode").html(" <font color='red'>ชื่อโครงการนี้มีอยู่แล้ว</font>");
								  }
								   if($("#txtAddCompany").val() == inval["Company"])
								   {
									   $("#sCompany").html(" <font color='red'>ชื่อลูกค้านี้มีอยู่แล้ว</font>");
								   }
						  });
					}

			});

		});
	});
</script>
<style type="text/css">
.style2 {
	color: #FFFFF;
	font-weight: bold;
	font-size: 13px;
}
</style>
</head>
<?php
$objConnect = mysql_connect("localhost","root","1234") or die ("Error Connect to Database");
mysql_query("SET NAMES UTF8");
$objDB = mysql_select_db("dataproject");
?>
<body leftmargin="0" topmargin="0">
<table width="100%" bgcolor="#B5B5B5">
<tr>
<td><span class="style2">บันทึกรายละเอียดโครงการ</span></td>
</tr>
</table><br>
<center>
	<form action="save_insert.php" name="frmAdd" method="post">
<table width="310" style="border-collapse:collapse; border: solid #696969; background-color: #D3D3D3;" border="1" style="font-size: 13px;">
<tr>
<td bgcolor="#0033FF" style="font-weight: bold;">ชื่อโครงการ:<span style="color: red;" >*</span></td>
<td><input type="text" name="txtAddNameProject" id="txtAddNameProject" /><span id="sCode"></span></td>
</tr>
<tr>
<td bgcolor="#0033FF" style="font-weight: bold;">ผู้ติดต่อ:<span style="color: red;" >*</span></td>
<td><input type="text" name="txtAddContact" /></td>
</tr>
<tr>
<td bgcolor="#0033FF" style="font-weight: bold;">เจ้าของโครงการ:<span style="color: red;" >*</span></td>
<td><input type="text" name="txtAddOwnerProject" /></td>
</tr>
<tr>
<td bgcolor="#0033FF" style="font-weight: bold;">สถาปนิก:<span style="color: red;" >*</span></td>
<td><input type="text" name="txtAddArchitect" /></td>
</tr>
<tr>
<td bgcolor="#0033FF" style="font-weight: bold;">ที่ปรึกษาโครงการ:<span style="color: red;" >*</span></td>
<td><input type="text" name="txtAddConsultant" /></td>
</tr>
<tr><td bgcolor="#0033FF" style="font-weight: bold;">วันเริ่มต้นโครงการ:<span style="color: red;" >*</span></td>
<td><input type="text" name="txtAddStartDate" id="daymonthyear1" onKeyPress="kod_pum()" />
<!--code javascripy calendar.js-->       
       <script language="javascript">
  
    if (!document.layers) {
     document.write("<input type=button onclick='popUpCalendar(this, frmAdd.daymonthyear1, \"dd/mm/yyyy\")' value=' วันที่ ' style='font-size:11px'>")
   }

              </script>
</td>
</tr>           
<tr><td bgcolor="#0033FF" style="font-weight: bold;">วันสิ้นสุดโครงการ:<span style="color: red;" >*</span></td>
<td><input type="text" name="txtAddLastDate" id="daymonthyear2" onKeyPress="kod_pum()" />             
<script language="javascript">
  
    if (!document.layers) {
     document.write("<input type=button onclick='popUpCalendar(this, frmAdd.daymonthyear2, \"dd/mm/yyyy\")' value=' วันที่ ' style='font-size:11px'>")
   }

</script>
</td>
</tr>
<tr>
<td bgcolor="#0033FF" style="font-weight: bold;">
พนักงานขาย:
</td>
<td>
	<select bgcolor="#0033FF" name="txtAddSale">
		<option value="-">--กรุณาเลือก--</option>
		<?php
		$strSQL = "SELECT * FROM sale ORDER BY SaleID ASC";
		$objQuery = mysql_query($strSQL) or die(mysql_error());
		while($objResult = mysql_fetch_array($objQuery))
		{
		?>
		<option value="<?php echo $objResult["SaleName"];?>"><?php echo
			$objResult["SaleName"];?></option>
		<?php
		}
		?>
	</select>	
</td>
</tr>
</tr>
<tr>
<td bgcolor="#0033FF" style="font-weight: bold;">
สถานะการขาย:
</td>
<td>
	<select name="txtAddStatusData">
		<option value="-">--กรุณาเลือก--</option>
		<?php
		$strSQL = "SELECT * FROM statusdata ORDER BY StatusID ASC";
		$objQuery = mysql_query($strSQL) or die(mysql_error());
		while($objResult = mysql_fetch_array($objQuery))
		{
		?>
		<option value="<?php echo $objResult["NameStatus"];?>"><?php echo
			$objResult["NameStatus"];?></option>
		<?php
		}
		?>
	</select>	
</td>
</tr>
</table>
<br>
<input type="submit" name="submit" value="บันทึกข้อมูล">
&nbsp;&nbsp;&nbsp;
<input type="reset" name="reset" value="ล้างข้อมูล">
</form>
</center>
</body>
</html>
<script language="javascript">
<!--//

function check_number() {
e_k=event.keyCode
if (((e_k < 48) || (e_k > 47)) && e_k != 46 && e_k != 13) {
//if (e_k != 13 && (e_k < 48) || (e_k > 57) || e_k == ) {
event.returnValue = false;
alert(" กรุณาใส่วันที่ โดยการกดปุ่ม DATE");
}
} 

function reportmonth(){



 exporttype = document.frmAdd.sel_exportType.value;
$URL="reportdata_1.php?daymonthyear1="+document.forms[0].daymonthyear1.value+"&exp="+exporttype+"&daymonthyear2="+document.forms[0].daymonthyear2.value+"&iduser="+document.forms[0].iduser.value+"&codeuser="+document.forms[0].codeuser.value+"&nameuser="+document.forms[0].nameuser.value;
window.open($URL,'','toolbar=no,location=no,status=no,resizable=yes,menubar=no,scrollbars=yes,width=900,height=700');

}//of function

function kod_pum() {
alert('การใส่วันที่ต้องทำการกดปุ่ม วันที่ เท่านั้นครับ');
		event.returnValue = false;
} 
function popupname()
{	window.open("popupname.php","loadorder","width=550,height=500,top=0,left=0,scrollbars=yes"); }
</script>
<?php
	mysql_close();
?>