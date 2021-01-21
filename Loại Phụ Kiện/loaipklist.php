<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Loại Phụ Kiện List</title>
<style type="text/css">
	body{background:url(../images/hello-kitty-pink.jpg);color:#FDFDFD;}
</style>
<link rel="stylesheet" type="text/css" href="../css/nutlist.css" />
</head>

<body>
<div align="center">
	<a href="../Home Admin/homeadmin.php">
		<img src="../images/LOGO Hello Kitty.png"/>					
	</a>
</div>
<?php 
include("../Common/open.inc");
$result = mysqli_query($con,"select * from tblloai");
?>
<table cellspacing="0" border="1" align="center" width="60%" >
	<tr>
    	<th>Mã Loại</th>
        <th>Tên Loại</th>
		<th>Lựa Chọn</th>
		<th>Lựa Chọn</th>
    </tr>
<?php
while($row=mysqli_fetch_array($result))
{
?>
    <tr>
    	<td><?php echo $row["MaLoai"]; ?></td>
        <td><?php echo $row["TenLoai"]; ?></td>
        <td><a href="loaipksua.php?MaLoai=<?php echo $row["MaLoai"]; ?>" >Sửa</a></td>
        <td><a href="loaipkxoa.php?MaLoai=<?php echo $row["MaLoai"]; ?>" onClick="return confirm('Bạn có muốn xóa')">Xóa</a></td>
    </tr>
<?php 
}
?>
</table>
<a href="loaipkthem.php">Thêm</a>
<?php 
include("../Common/close.inc");
?>
</body>
</html>
