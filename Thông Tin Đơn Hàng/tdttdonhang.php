<?php 
$Madonhang=$_GET["Madonhang"];
$Tinhtrangdonhang=$_GET["Tinhtrangdonhang"];
include("../Common/open.inc");
$query="update tblthongtindonhang set Tinhtrangdonhang='$Tinhtrangdonhang' where Madonhang='$Madonhang' and Tinhtrangdonhang = 1";
mysqli_query($con,$query);
include("../Common/close.inc");
header("Location:ttdonhanglist.php");
?>
