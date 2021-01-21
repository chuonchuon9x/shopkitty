<?php
	session_start();
	if(!isset($_SESSION["username"]))
	{
		header("Location:../Home Admin/loginadmin.php");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Khách Hàng Insert</title>
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<script language="javascript" src="../Calendar/Calendar.js" > 
</script>
<link href="../Calendar/Calendar.css" rel="stylesheet" type="text/css" />
<script language="javascript">
	function insertkh()
	{
		var txttenkh=document.getElementById("txttenkh");
		var tenkh=document.getElementById("tenkh");
		var TC=/^[A-Za-z]+$/;
		if(!TC.test(txttenkh.value)||txttenkh.value.length=="")
		 {
		   txttenkh.style.color="#FF0000";
		   tenkh.style.color="#FF0000";
		   tenkh.innerHTML="Vui lòng nhập tên ";
		   txttenkh.focus();
		   return false;
		 }
		else 
		 {
			 txttenkh.style.color="";
			 tenkh.innerHTML="";
		 }
		var txtDate=document.getElementById("txtDate");
		var date=document.getElementById("date");
		if(txtDate.value.length==""||txtDate.value.length<6)
		 {
		   txtDate.style.color="#FF0000";
		   date.style.color="#FF0000";
		   date.innerHTML="Vui lòng nhập ngày tháng năm sinh";
		   txtDate.focus();
		   return false;
		 }
		else 
		 {
			 txtDate.style.color="";
			 date.innerHTML="";
		 }
		var txtsdt=document.getElementById("txtsdt");
		var sdt=document.getElementById("sdt");
		var TC=/^[0-9]+$/;
		 	if(!TC.test(txtsdt.value)||txtsdt.value.length=="")
		 {
		   txtsdt.style.color="#FF0000";
		   sdt.style.color="#FF0000";
		   sdt.innerHTML=" Vui lòng nhập số điện thoại";
		   txtsdt.focus();
		   return false;
		 }
		else 
		 {
			 txtsdt.style.color="";
			 sdt.innerHTML="";
		 }		
		 		
		var txtemail=document.getElementById("txtemail");
		var email=document.getElementById("email");
			 if(txtemail.value.length=="")
		 {
		   txtemail.style.color="#FF0000";
		   email.style.color="#FF0000";
		   email.innerHTML=" Vui lòng nhập email";
		   txtemail.focus();
		   return false;
		 }
		else 
		 {
			 txtemail.style.color="";
			 email.innerHTML="";
		 }
		 
		var txttk=document.getElementById("txttk");
		var tk=document.getElementById("tk");
		if(txttk.value.length=="")
		 {
		   txttk.style.color="#FF0000";
		   tk.style.color="#FF0000";
		   tk.innerHTML=" Vui lòng nhập tài khoản";
		   txttk.focus();
		   return false;
		 }
		else 
		 {
			 txttk.style.color="";
			 tk.innerHTML="";
		 }	
		 
		var txtmk=document.getElementById("txtmk");
		var mk=document.getElementById("mk");
		if(txtmk.value.length=="")
		 {
		   txtmk.style.color="#FF0000";
		   mk.style.color="#FF0000";
		   mk.innerHTML=" Vui lòng nhập mật khẩu";
		   txtmk.focus();
		   return false;
		 }
		else 
		 {
			 txtmk.style.color="";
			 mk.innerHTML="";
		 }	
		var txtdc=document.getElementById("txtdc");
		var dc=document.getElementById("dc");
		if(txtdc.value.length=="")
		 {
		   txtdc.style.color="#FF0000";
		   dc.style.color="#FF0000";
		   dc.innerHTML=" Vui lòng nhập địa chỉ";
		   txtdc.focus();
		   return false;
		 }
		else 
		 {
			 txtdc.style.color="";
			 dc.innerHTML="";
		 }
	return true;		
	}		 
</script>
</head>

<body>
<div align="center">
	<a href="../Home Admin/homeadmin.php">
		<img src="../images/LOGO Hello Kitty.png"/>					
	</a>
</div>
<form action="khachhangthemxl.php" method="post">
<table cellspacing="0" border="1">
	<tr>
		<th>Mã Khách Hàng</th>
		<th><input type="text" name="khachhang" readonly="readonly" style="width:80%"/></th>
	</tr>
		<tr>
		<th>Họ tên Khách Hàng</th>
		<th><input type="text" name="ten" id="txttenkh" style="width:80%" placeholder="Họ tên Khách Hàng..." /><div id="tenkh"></div></th>
	</tr>
	<tr>
		<th>Ngày sinh</th>
		<th><input name="txtDate" type="text" id="txtDate" style="width:60%" placeholder="Ngày Sinh..." /><div id="date"></div>
 			<input type="button" name="Button" value="Date" onclick="showCalendar('txtDate')" style="width:20%" />
	</th>
	</tr>
	<tr>
		<th>Số Điện Thoại</th>
		<th><input type="text" name="sdt" id="txtsdt"style="width:80%" placeholder="Số Điện Thoại..." /><div id="sdt"></div></th>
	</tr>
	<tr>
		<th>Email</th>
		<th><input type="text" name="email" id="txtemail" style="width:80%" placeholder="Email..." /><div id="email"></div></th>
	</tr>
	<tr>
		<th>Tài Khoản</th>
		<th><input type="text" name="tk" id="txttk" style="width:80%" placeholder="Tài Khoản..." /><div id="tk"></div></th>
	</tr>
	<tr>
		<th>Mật Khẩu</th>
		<th><input type="password" name="mk" id="txtmk" style="width:80%" placeholder="Mật Khẩu..." /><div id="mk"></div></th>
	</tr>
	<tr>
		<th>Địa Chỉ</th>
		<th><input type="text" name="dc" id="txtdc" style="width:80%" placeholder="Địa Chỉ..." /><div id="dc"></div></th>
	</tr>
	<tr>	
		<th>Giới Tính</th>
		<th><input type="radio" name="gt" checked="checked" value="0"/>Nam
			<input type="radio" name="gt" value="1" />Nữ</th>
	</tr>
	<tr>
		<th></th>
		<th><input type="submit" value="insert" onclick="return insertkh()" style="width:50%" /></th>
	</tr>
</table>
</form>
</body>
</html>
