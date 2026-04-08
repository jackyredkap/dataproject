<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
<HEAD>
<title>ระบบ โปรแกรมเก็บข้อมูลโครงการ</title>
<LINK HREF="css/stylesheet.css" REL="stylesheet" TYPE="text/css">
<link type="text/css" rel="stylesheet" href="css/style.css" />
<SCRIPT language="JavaScript" SRC="fileinclude/javascript.js" />
<SCRIPT language="JavaScript">

function chklogin()
{
	if(document.frmlogin.username.value=="")
	{	alert("กรุณากรอกชื่อ Username");
		document.frmlogin.username.focus();	
	}else
		if(document.frmlogin.passwords.value=="")
		{	alert("กรุณากรอก Password");
			document.frmlogin.passwords.focus();	
		}else
			{
				document.frmlogin.submit();
			}
}
function en_username(){
e_k=event.keyCode
if ( e_k == 13) {
event.returnValue = false;
document.frmlogin.passwords.focus();
}
} 
function en_pass(){
e_k=event.keyCode
if ( e_k == 13) {
event.returnValue = false;
document.frmlogin.Submits.focus();
}
} 
</SCRIPT>
</HEAD>

<BODY background="images/1.jpg" LEFTMARGIN="0" TOPMARGIN="0" onLoad="document.frmlogin.username.focus();">
<DIV ALIGN="CENTER">
     <TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" CLASS="DetailBody">
          <TR> 
               <TD><TABLE WIDTH="100%" HEIGHT="65" BORDER="0" CELLSPACING="0">
                         <TR> 
                              <TD WIDTH="41%" HEIGHT="65" BACKGROUND="images/backblue1.jpg"><img src="images/com.jpg" width="303" height="63"></TD>
                              <TD WIDTH="7%" BACKGROUND="images/backblue2.jpg">&nbsp;</TD>
                              <TD WIDTH="52%" VALIGN="BOTTOM" BACKGROUND="images/backblue3.jpg">&nbsp;</TD>
                         </TR>
                    </TABLE></TD>
          </TR>
          <TR> 
               <TD>&nbsp;</TD>
          </TR>
          <TR> 
               <TD>&nbsp;</TD>
          </TR>
          <TR> 
               <TD>&nbsp;</TD>
          </TR>
     </TABLE>
	<TABLE WIDTH="449" BORDER="0" CELLSPACING="0" CLASS="DetailBody">
          <TR>
               <TD WIDTH="447" HEIGHT="139">
			<FORM NAME="frmlogin" METHOD="post" ACTION="chklogin.php">
				<TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" STYLE="border-top: #a4a4a4 1px solid; border-bottom: #a4a4a4 1px solid; border-left: #a4a4a4 1px solid; border-right: #a4a4a4 1px solid;" CLASS="Gradient">
                         <TR> 
                              <TD HEIGHT="57"><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" BGCOLOR="#FFFFFF" >
                                        <TR> 
                                             <TD WIDTH="4%" HEIGHT="55">&nbsp;</TD>
                                             <TD WIDTH="9%"><IMG SRC="images/logokeylogin.jpg" WIDTH="51" HEIGHT="51"></TD>
                                             <TD WIDTH="87%"><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
                                                       <TR height=10>
                                                            <TD></TD>
                                                       </TR>
                                                       <TR>
                                                                 
                          <TD CLASS="HeadLogin"><center><div style="font-size: 20px;">&nbsp;&nbsp;ระบบเก็บข้อมูลโครงการ</div></center></TD>
                                                       </TR>
                                                       <TR height=10>
                                                            <TD></TD>
                                                       </TR>
                                                  </TABLE></TD>
                                        </TR>
                                   </TABLE></TD>
                         </TR>
                         <TR> 
                              <TD HEIGHT="10"  CLASS="DetailBody"><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" background="images/bglogin.jpg" CLASS="DetailBody">
                                        <TR> 
                                             <TD HEIGHT="24" ><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0">
                                                       <TR> 
                                                            <TD WIDTH="4%"></TD>
                                                            <TD WIDTH="96%" >กรุณาระบุ 
                                                                 username และ 
                                                                 password ของท่านในช่อง 
                                                                 ชื่อผู้ใช้และรหัสผ่าน</TD>
                                                       </TR>
                                                       <TR> 
                                                            <TD></TD>
                                                            <TD > 
                                                                 แล้วคลิกที่ปุ่ม 
                                                                 &quot;เข้าสู่ระบบ&quot; 
                                                            </TD>
                                                       </TR>
                                                  </TABLE></TD>
                                        </TR>
                                        <TR> 
                                             <TD HEIGHT="10"></TD>
                                        </TR>
                                        <TR> 
                                             <TD HEIGHT="22"><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" CLASS="DetailLogin2">
                                                       <TR> 
                                                            <TD WIDTH="40%"><DIV ALIGN="RIGHT">ชื่อผู้ใช้ 
                                                                      :</DIV></TD>
                                                            <TD WIDTH="2%">&nbsp;</TD>
                                                            <TD WIDTH="58%"><INPUT NAME="Username" TYPE="text" CLASS="DetailBody" TABINDEX="1" onKeyPress="en_username()" MAXLENGTH="15"></TD>
                                                       </TR>
                                                       <TR> 
                                                            <TD><DIV ALIGN="RIGHT">รหัสผ่าน 
                                                                      :</DIV></TD>
                                                            <TD>&nbsp;</TD>
                                                            <TD><INPUT NAME="Password" TYPE="password" CLASS="DetailBody" id="passwords" TABINDEX="1" onKeyPress="en_pass()" MAXLENGTH="15"></TD>
                                                       </TR>
                                                  </TABLE></TD>
                                        </TR>
								                                        <TR> 
                                             <TD HEIGHT="10"></TD>
                                        </TR>
                                        <TR> 
                                             <TD HEIGHT="22"><DIV ALIGN="CENTER"> 
                                                       <TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" CLASS="DetailBody">
                                                            <TR> 
                                                                 <TD WIDTH="4%">&nbsp;</TD>
                                                                      
                            <TD WIDTH="75%" CLASS="DetailLogin"></TD>
                                                                 <TD WIDTH="15%"><DIV ALIGN="RIGHT"> 
                                                                           <INPUT NAME="submit" TYPE="submit" CLASS="DetailBody" id="Submits" onClick="chklogin();" VALUE="เข้าสู่ระบบ">
                                                                      </DIV></TD>
                                                                 <TD WIDTH="6%">&nbsp;</TD>
                                                            </TR>
                                                            <TR height=10> 
                                                                 <TD HEIGHT="2" COLSPAN="4"></TD>
                                                            </TR>
                                                       </TABLE>
                                                  </DIV></TD>
                                        </TR>
                                   </TABLE></TD>
                         </TR>
              </TABLE>
			</FORM>
			</TD>
          </TR>
          <TR>
            <TD valign="top">&nbsp;</TD>
          </TR>
  </TABLE>
    <br>
</DIV>
</body>
</HTML>