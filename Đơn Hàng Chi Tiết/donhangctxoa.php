
<?php
$Madonhang=$_GET["Madonhang"];
include("../Common/open.inc");
$query="delete from tbldonhangchitiet where Madonhang='$Madonhang'";
mysqli_query($con,$query);
include("../Common/close.inc");
header("Location:donhangctlist.php");
?>