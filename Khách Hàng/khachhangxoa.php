
<?php
$MaKH=$_GET["MaKH"];
include("../Common/open.inc");
$query="delete from tblkhachhang where MaKH='$MaKH'";
mysqli_query($con,$query);
include("../Common/close.inc");
header("Location:khachhanglist.php");
?>