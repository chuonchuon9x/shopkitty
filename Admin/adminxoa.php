<?php
$MaAdmin=$_GET["MaAdmin"];
include("../common/open.inc");
$query="delete from tbladmin where MaAdmin='$MaAdmin'";
mysqli_query($con,$query);
include("../common/close.inc");
header("Location:adminlist.php");
?>