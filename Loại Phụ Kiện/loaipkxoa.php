<?php
$MaLoai=$_GET["MaLoai"];
include("../Common/open.inc");
$query="delete from tblloai where MaLoai='$MaLoai'";
mysqli_query($con,$query);
include("../Common/close.inc");
header("Location:loaipklist.php");
?>