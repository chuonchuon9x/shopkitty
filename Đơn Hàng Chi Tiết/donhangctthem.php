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
<title>Đơn Hàng Chi Tiết Insert</title>
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<script language="javascript">
	function dhctinsert()
	{
		var txtmapk=document.getElementById("txtmapk");
		var mapk=document.getElementById("mapk");
		var TC=/^[0-9]+$/;
		if(!TC.test(txtmapk.value)||txtmapk.value.length=="")
		 {
		    txtmapk.style.color="#FF0000";
		    mapk.style.color="#FF0000";
		    mapk.innerHTML="Vui lòng nhập mã phụ kiện ";
		    txtmapk.focus();
		    return false;
		 }
		else 
		 {
			txtmapk.style.color="";
			mapk.innerHTML="";
		 }	
		 		
		var txtsl=document.getElementById("txtsl");
		var sl=document.getElementById("sl");
		if(txtsl.value.length=="")
		 {
		   txtsl.style.color="#FF0000";
		   sl.style.color="#FF0000";
		   sl.innerHTML=" Vui lòng nhập số lượng";
		   txtsl.focus();
		   return false;
		 }
		else 
		 {
			txtsl.style.color="";
			sl.innerHTML="";
		 }
		  
		var txtgiapk=document.getElementById("txtgiapk");
		var gpk=document.getElementById("gpk");
		if(txtgiapk.value.length=="")
		 {
		   txtgiapk.style.color="#FF0000";
		   gpk.style.color="#FF0000";
		   gpk.innerHTML=" Vui lòng nhập đơn giá";
		   txtgiapk.focus();
		   return false;
		 }
		else 
		 {
			txtgiapk.style.color="";
			gpk.innerHTML="";
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
<form action="donhangctthemxl.php" method="post">
<table cellspacing="0" border="1">
	<tr>
		<th>Mã Đơn Hàng</th>
		<th><input type="text" name="dh" style="width:80%" readonly="readonly"/></th>
	</tr>
	<tr>
		<th>Mã Phụ Kiện</th>
		<th><input type="text" name="pk" style="width:80%" id="txtmapk" /><div id="mapk"></div></th>
	</tr>
	<tr>
		<th>Số Lượng </th>
		<th><input type="text" name="sl" id="txtsl" style="width:80%" /><div id="sl"></div></th>
	</tr>
	<tr>
		<th>Đơn Giá</th>
		<th><input type="text" name="txtgiapk" id="txtgiapk" /><div id="gpk"></div></th>
	</tr>
	<tr>
		<th></th>
		<th><input type="submit" value="insert" style="width:50%; " onclick="return dhctinsert()"/></th>
	</tr>
</table>
</form>
</body>
</html>