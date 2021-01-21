<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đơn Hàng Insert</title>
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<script language="javascript" src="../Calendar/Calendar.js" > 
</script>
<link href="../Calendar/Calendar.css" rel="stylesheet" type="text/css" />
<script language="javascript">
	function dhinsert()
	{
		var txtmadh=document.getElementById("txtmadh");
		var madh=document.getElementById("madh");
		var TC=/^[0-9]+$/;
		if(!TC.test(txtmadh.value)||txtmadh.value.length=="")
		 {
		    txtmadh.style.color="#FF0000";
		    madh.style.color="#FF0000";
		    madh.innerHTML="Vui lòng nhập mã đơn hàng ";
		    txtmadh.focus();
		    return false;
		 }
		else 
		 {
			txtmadh.style.color="";
			madh.innerHTML="";
		 }
		
		var txtmakh=document.getElementById("txtmakh");
		var makh=document.getElementById("makh");
		var TC=/^[0-9]+$/;
		if(!TC.test(txtmakh.value)||txtmakh.value.length=="")
		 {
		    txtmakh.style.color="#FF0000";
		    makh.style.color="#FF0000";
		    makh.innerHTML="Vui lòng nhập mã khách hàng ";
		    txtmakh.focus();
		    return false;
		 }
		else 
		 {
			txtmakh.style.color="";
			makh.innerHTML="";
		 }	
		
		var txtDate=document.getElementById("txtDate");
		var date=document.getElementById("date");
		if(txtDate.value.length==""||txtDate.value.length<6)
		 {
		   txtDate.style.color="#FF0000";
		   date.style.color="#FF0000";
		   date.innerHTML="Vui lòng nhập ngày mua hàng";
		   txtDate.focus();
		   return false;
		 }
		else 
		 {
			 txtDate.style.color="";
			 date.innerHTML="";
		 }
		  
		var txtdcvc=document.getElementById("txtdcvc");
		var dcvc=document.getElementById("dcvc");
		if(txtdcvc.value.length=="")
		 {
		   txtdcvc.style.color="#FF0000";
		   dcvc.style.color="#FF0000";
		   dcvc.innerHTML=" Vui lòng nhập địa chỉ vận chuyển";
		   txtdcvc.focus();
		   return false;
		 }
		else 
		 {
			txtdcvc.style.color="";
			dcvc.innerHTML="";
		 }	
		 
		var txtttdh=document.getElementById("txtttdh");
		var ttdh=document.getElementById("ttdh");
		if(txtttdh.value.length=="")
		 {
		   txtttdh.style.color="#FF0000";
		   ttdh.style.color="#FF0000";
		   ttdh.innerHTML=" Vui lòng nhập tình trạng đơn hàng";
		   txtttdh.focus();
		   return false;
		 }
		else 
		 {
			txtttdh.style.color="";
			ttdh.innerHTML="";
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
<form action="ttdonhangthemxl.php" method="post">
<table cellspacing="0" border="1">
<tr>
		<th>Mã Đơn Hàng</th>
		<th><input type="text" name="dh" style="width:80%" id="txtmadh" /><div id="madh"></div></th>
	</tr>
		<tr>
		<th>Mã Khách Hàng</th>
		<th><input type="text" name="kh" style="width:80%" id="txtmakh" /><div id="makh"></div></th>
	</tr>
	<tr>
		<th>Ngày Mua Hàng</th>
		<th><input name="txtDate" type="text" id="txtDate" style="width:60%" /><div id="date"></div>
  			<input type="button" name="Button" value="Date" onclick="showCalendar('txtDate')" style="width:20%"/></th>
	</tr>
	<tr>
		<th>Địa Chỉ Vận Chuyển</th>
		<th><input type="text" name="dcvc" style="width:80%" id="txtdcvc" /><div id="dcvc"></div></th>
	</tr>
	<tr>
		<th>Tình Trạng Đơn Hàng</th>
		<th><input type="text" name="ttdh" style="width:80%" id="txtttdh" /><div id="ttdh"></div></th>
	</tr>
	<tr>
		<th></th>
		<th><input type="submit" value="insert" onclick="return dhinsert()" /></th>
	</tr>
</table>
</form>
</body>
</html>