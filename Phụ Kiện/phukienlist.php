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
$result = mysqli_query($con,"select * from tblphukien");
?>
<table cellspacing="0" border="1" align="center" width="80%" >
	<tr>
    	<th>Mã Phụ Kiện</th>
        <th>Tên Phụ Kiện</th>
        <th>Mô Tả</th>
		<th>Hình Ảnh</th>
		<th>Số Lượng Phụ Kiện</th>
		<th>Giá Phụ Kiện</th>
		<th>Mã Loại</th>
		<th>Lựa Chọn</th>
		<th>Lựa Chọn</th>
    </tr>
<?php
while($row=mysqli_fetch_array($result))
{
?>
    <tr>
    	<td><?php echo $row["MaPK"]; ?></td>
        <td><?php echo $row["TenPK"]; ?></td>
		<td><?php echo $row["MoTa"]; ?></td>
		<td><img src="../images/<?php echo $row["HinhAnh"]; ?>" width="150px" height="150px"/></td>
		<td><?php echo $row["SoLuongPK"]; ?></td>
		<td><?php echo $row["GiaPK"]; ?></td>
		<td><?php echo $row["MaLoai"]; ?></td>
		<td><a href="phukiensua.php?MaPK=<?php echo $row["MaPK"]; ?>" >Sửa</a></td>
        <td><a href="phukienxoa.php?MaPK=<?php echo $row["MaPK"]; ?>" onClick="return confirm('Bạn có muốn xóa')">Xóa</a></td>
    </tr>
<?php 
}
?>
</table>
<a href="phukienthem.php">Thêm</a>
<?php 
include("../Common/close.inc");
?>
</body>
</html>
