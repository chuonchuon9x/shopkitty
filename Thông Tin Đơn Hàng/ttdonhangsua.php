<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đơn Hàng Update</title>
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<script language="javascript" src="../Calendar/Calendar.js" > 
</script>
<link href="../Calendar/Calendar.css" rel="stylesheet" type="text/css" />
<script language="javascript">
	function dhupdate()
	{
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
		   ttdh.innerHTML=" Vui lòng chọn tình trạng đơn hàng";
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
<?php
$Madonhang=$_GET["Madonhang"];
include("../Common/open.inc");
$query="select * from tblthongtindonhang where Madonhang='$Madonhang'";
$result=mysqli_query($con,$query);
if($row=mysqli_fetch_array($result))
{
	$MaKH=$row["MaKH"];
	$Ngaymuahang=$row["Ngaymuahang"];
	$Diachivanchuyen=$row["Diachivanchuyen"];
	$Tinhtrangdonhang=$row["Tinhtrangdonhang"];
}
include("../Common/close.inc");
?>
<form action="ttdonhangsuaxl.php" method="post">
<table cellspacing="0" border="1">
<tr>
		<th>Mã Đơn Hàng</th>
		<th><input type="text" name="madh" style="width:99%" value="<?php echo $Madonhang ?>" readonly="readonly" /></th>
	</tr>
		<tr>
		<th>Mã Khách Hàng</th>
		<th><input type="text" name="makh" value="<?php echo $MaKH ?>" style="width:99%" readonly="readonly" /></th>
	</tr>
	<tr>
		<th>Ngày Mua Hàng</th>
		<th><input name="txtDate" type="text" id="txtDate" value="<?php echo $Ngaymuahang ?>"/>
  		<input type="button" name="Button" value="Date" onclick="showCalendar('txtDate')"  value="<?php echo $Ngaymuahang ?>"/></th>
	</tr>
	<tr>
		<th>Địa Chỉ Vận Chuyển</th>
		<th><input type="text" name="dcvc" style="width:99%" value="<?php echo $Diachivanchuyen ?>" id="dcvc" /><div id="dcvc"></div></th>
	</tr>
	<tr>
		<th>Tình Trạng Đơn Hàng</th>
		<th>
			<input type="radio" name="ttdh" id="ttdh" <?php if($Tinhtrangdonhang==1) echo "checked" ?> value="1"/>Đang chờ duyệt
			<input type="radio" name="ttdh" id="ttdh" <?php if($Tinhtrangdonhang==2) echo "checked" ?> value="2"/>Đã duyệt
			<input type="radio" name="ttdh" id="ttdh" <?php if($Tinhtrangdonhang==3) echo "checked" ?> value="3"/>Đã huỷ
			<div id="ttdh"></div>
		</th>
	</tr>
	<tr>
		<th></th>
		<th><input type="submit" value="update" onclick="return dhupdate()" /></th>
	</tr>
</table>
</form>
</body>
</html>
