<?php 
$MaLoai=$_POST["maloai"];
$TenLoai=$_POST["tenloai"];
include("../Common/open.inc");
$query="update tblloai set MaLoai='$MaLoai',TenLoai='$TenLoai'";
mysqli_query($con,$query);
include("../common/close.inc");
header("Location:loaipklist.php");
?>
