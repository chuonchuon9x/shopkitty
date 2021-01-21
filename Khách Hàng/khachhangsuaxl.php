<?php 
$MaKH=$_POST["txtkhachhang"];
$HoTenKH=$_POST["txtten"];
$ngaysinh=$_POST["txtDate"];
$sdt=$_POST["txtsdt"];
$email=$_POST["txtemail"];
$username=$_POST["txtuser"];
$pass=$_POST["txtpass"];
$gt=$_POST["txtgt"];
$diachi=$_POST["txtdiachi"];
include("../common/open.inc");
$query="update tblkhachhang set MaKH='$MaKH',HoTen='$HoTenKH',ns='$ngaysinh',sdt='$sdt',email='$email',username='$username',password='$pass',DiaChi='$diachi',gt='$gt' where MaKH='$MaKH'";
mysqli_query($con,$query);
include("../common/close.inc");
header("Location:khachhanglist.php");
?>
