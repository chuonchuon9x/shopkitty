<?php
$MaPK=$_GET["MaPK"];
include("../Common/open.inc");
$query="delete from tblphukien where MaPK='$MaPK'";
mysqli_query($con,$query);
include("../Common/close.inc");
header("Location:phukienlist.php");
?>