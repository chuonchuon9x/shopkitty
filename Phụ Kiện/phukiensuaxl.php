<?php 
$MaPK=$_POST["mapk"];
$TenPK=$_POST["tenpk"];
$HinhAnh=$_POST["txthinhminhhoa"];
$SoLuong=$_POST["soluong"];
$GiaPK=$_POST["giapk"];
$MaLoai=$_POST["maloai"];
$mota=$_POST["FCKeditor1"];
include("../Common/open.inc");
$query="update tblphukien set TenPK='$TenPK',HinhAnh='$HinhAnh',SoLuongPK='$SoLuong',GiaPK='$GiaPK',MaLoai='$MaLoai',MoTa='$mota' where MaPK='$MaPK'";
mysqli_query($con,$query);
include("../Common/close.inc");
header("Location:phukienlist.php");
?>
