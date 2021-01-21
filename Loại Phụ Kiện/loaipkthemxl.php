<?php 
$MaKH=$_POST["maloai"];
$TenLoai=$_POST["tenloai"];
include("../Common/open.inc");
$query="insert into tblloai (MaLoai,TenLoai) values ('$MaLoai','$TenLoai')";
mysqli_query($con,$query);
include("../Common/close.inc");
header("Location:loaipklist.php");
?>
