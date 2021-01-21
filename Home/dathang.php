<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
	include("../Common/open.inc");
	if(isset($_SESSION["username"]))
	{
		$user=$_SESSION["username"];
		$sql="select * from tblkhachhang where username='$user'";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_array($result);
		$_SESSION["HoTen"] = $row['HoTen'];
		$_SESSION["sdt"] = $row['sdt'];
		$_SESSION["DiaChi"] = $row['DiaChi'];
	?>
<form method="get" action="dathangxl.php">
	<table align="center" border="0" ccellspacing="0" cellpadding="0">
		<tr>
			<th>Tên khách hàng</th>
			<th>Số điện thoại</th>
			<th>Địa chỉ </th>
			<th></th>	
		</tr>
		<tr>
			<th><input type ="text" name="HoTen" value ="<?php echo $_SESSION['HoTen'];?>"/></th>
			<th><input type ="text" name="sdt" value ="<?php echo $_SESSION['sdt'];?>"/></th>
			<th><input type ="text" name="DiaChi" value ="<?php echo $_SESSION['DiaChi'];?>"/></th>
		</tr>
	</table>
			<input type ="submit" value="Đặt hàng" name="button_submit"/>
</form>
<?php 
}
	else 
	{
		echo ("Bạn cần đăng nhập để đặt hàng");
	}
	include("../Common/close.inc");
	
?>

</body>
</html>