<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Loại Phụ Kiện Update</title>
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<script language="javascript">
	function updateloai()
	{
		var txttenloai=document.getElementById("txttenloai");
		var tenloai=document.getElementById("tenloai");
		if(txttenloai.value.length=="")
		 {
			txttenloai.style.color="#FF0000";
			tenloai.style.color="#FF0000";
			tenloai.innerHTML="Vui lòng nhập tên ";
			txttenloai.focus();
			return false;
		 }
		else 
		 {
			txttenloai.style.color="";
			tenloai.innerHTML="";
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
$MaLoai=$_GET["MaLoai"];
include("../Common/open.inc");
$query="select * from tblloai where MaLoai='$MaLoai'";
$result=mysqli_query($con,$query);
if($row=mysqli_fetch_array($result))
{
	$TenLoai=$row["TenLoai"];
}
include("../Common/close.inc");
?>
<form action="loaipksuaxl.php" method="post">
<table cellspacing="0" border="1">
<tr>
		<th>Mã Loại</th>
		<th><input type="text" name="maloai" style="width:80%" value="<?php echo $MaLoai ?>" readonly="readonly" /></th>
	</tr>
		<tr>
		<th>Tên Loại</th>
		<th><input type="text" name="tenloai" value="<?php echo $TenLoai ?>" style="width:80%" id="txttenloai" /><div id="tenloai"></div></th>
	</tr>
	<tr>
		<th></th>
		<th><input type="submit" value="update" style="width:50%; " onclick="return updateloai()"/></th>
	</tr>
</table>
</form>
</body>
</html>
