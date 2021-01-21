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
<title>Admin Update</title>
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<script language="javascript" src="../Calendar/Calendar.js" > 
</script>
<link href="../Calendar/Calendar.css" rel="stylesheet" type="text/css" />
<script language="javascript">
	function adminupdate()
	{
		var txttenadmin=document.getElementById("txttenadmin");
		var tenadmin=document.getElementById("tenadmin");
		var TC=/^[A-Za-z]+$/;
		if(!TC.test(txttenadmin.value)||txttenadmin.value.length=="")
		 {
		   txttenadmin.style.color="#FF0000";
		   tenadmin.style.color="#FF0000";
		   tenadmin.innerHTML="Vui lòng nhập tên ";
		   txttenadmin.focus();
		   return false;
		 }
		else 
		 {
			 txttenadmin.style.color="";
			 tenadmin.innerHTML="";
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
		var txtgt=document.getElementById("txtgt");
		var gt=document.getElementById("gt");
		if(txtgt.value.length=="")
		 {
		   	txtgt.style.color="#FF0000";
		   	gt.style.color="#FF0000";
		   	gt.innerHTML=" Vui lòng nhập giới tính";
		   	txtgt.focus();
		   	return false;
		 }
		else 
		 {
			txtgt.style.color="";
			gt.innerHTML="";
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
<?php
$MaAdmin=$_GET["MaAdmin"];
include("../common/open.inc");
$query="select * from tbladmin where MaAdmin='$MaAdmin'";
$result=mysqli_query($con,$query);
if($row=mysqli_fetch_array($result))
{
	$MaAdmin=$row["MaAdmin"];
	$HoTenAdmin=$row["HoTenAdmin"];
	$ns=$row["ns"];
	$sdt=$row["sdt"];
	$email=$row["email"];
	$username=$row["username"];
	$password=$row["password"];
	$gt=$row["gt"];
	$DiaChi=$row["DiaChi"];
}
include("../common/close.inc");
?>
<form action="adminsuaxl.php" method="post">
<table cellspacing="0" border="1">
	<tr>
		<th>Mã Admin</th>
		<th><input type="text" name="txtmaadmin"  style="width:80%" value="<?php echo $MaAdmin ?>" readonly="readonly" /></th>
	</tr>
		<tr>
		<th>Họ tên Admin</th>
		<th><input type="text" name="txtten" id="txttenadmin" value="<?php echo $MaAdmin ?>" style="width:80%" /> <div id="tenadmin"></div></th>
	</tr>
	<tr>
		<th>Ngày sinh </th>
		<th> <input name="txtDate" type="text" id="txtDate" style="width:60%" value="<?php echo $ns ?>"/>
  <input type="button" name="Button" value="Date" onclick="showCalendar('txtDate')" value="<?php echo $ns ?>" style="width:20%"/> <div id="txtDate"></div></th>
	</tr>
	<tr>
		<th>Số Điện Thoại</th>
		<th><input type="text" name="txtsdt" id="txtsdt" style="width:80%" value="<?php echo $sdt ?>"/><div id="sdt"></div> </th>
	</tr>
	<tr>
		<th>Email</th>
		<th><input type="text" name="txtemail" id="txtemail" style="width:80%" value="<?php echo $email ?>"/><div id="email"></div></th>
	</tr>
	<tr>
		<th>Tài Khoản</th>
		<th><input type="text" name="txtuser" id="txttk" style="width:80%" value="<?php echo $username ?>"/><div id="tk"></div></th>
	</tr>
	<tr>
		<th>Mật Khẩu</th>
		<th><input type="password" name="txtpass" id="txtmk" style="width:80%" value="<?php echo $password ?>"/><div id="mk"></div></th>
	</tr>
	
	<tr>	
		<th>Giới Tính</th>
		<th>
			<input type="radio" name="txtgt" id="txtgt" <?php if($gt==0) echo "checked" ?> value="0"/>Nam
			<input type="radio" name="txtgt" id="txtgt" <?php if($gt==1) echo "checked" ?> value="1" />Nữ
		<div id="gt"></div>
		</th>
	</tr>
	<tr>
		<th>Địa Chỉ</th>
		<th><input type="text" name="txtdiachi" id="txtdc" style="width:80%" value="<?php echo $DiaChi ?>"/><div id="dc"></div></th>
	</tr>
	<tr>
		<th></th>
		<th><input type="submit" onclick="retunr adminupdate()" value="update" style="width:50%" /></th>
	</tr>
</table>
</form>
</body>
</html>
