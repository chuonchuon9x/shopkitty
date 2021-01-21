<?php 
$maadmin=$_POST["txtmaadmin"];
$HoTenAdmin=$_POST["txtten"];
$ngaysinh=$_POST["txtDate"];
$sdt=$_POST["txtsdt"];
$email=$_POST["txtemail"];
$username=$_POST["txtuser"];
$pass=$_POST["txtpass"];
$gt=$_POST["txtgt"];
$diachi=$_POST["txtdiachi"];
include("../common/open.inc");
$query="update tbladmin set HoTenAdmin='$HoTenAdmin',ns='$ngaysinh',sdt='$sdt',email='$email',username='$username',password='$pass',gt='$gt',DiaChi='$diachi' where MaAdmin='$maadmin'";
mysqli_query($con,$query);
include("../common/close.inc");
header("Location:adminlist.php");
?>
