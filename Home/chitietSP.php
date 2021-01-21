<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
	input[type=button] {
	  width: auto;
	  padding: 10px 18px;
	  background-color: #f44336;
	  text-align:center;
}
</style>
</head>

<body background="../images/admin.jpg">
<div align="center">
	<?php 
		include("banner2.php");
		session_start();
	if(isset($_SESSION['username'])){
		include ("menukhThanhvien.php");
	}
	else{
		include ("menukh.php");
	}
	?>
	<?php
	if(isset($_GET["MaPK"]))
	{
		$maSp=$_GET["MaPK"];
		include("../Common/open.inc");	
		$result=mysqli_query($con,"select * from tblphukien where MaPK=$maSp");
		$sp=mysqli_fetch_array($result);
		include("../Common/close.inc");
		?>
        <table>
        	<tr>
            	<td rowspan="4"><img src="../images/<?php echo($sp["HinhAnh"]);?>" height="400px" width="300px" /></td>
                <td valign="top" height="50px" style="font-size:20px;font-weight:bold;color:#00C"><?php echo($sp["TenPK"]);?></td>
            </tr>
            <tr>
                <td valign="top" height="50px" style="font-size:16px;font-weight:bold;color:#00C"><?php echo($sp["GiaPK"]);?></td>
            </tr>
            <tr>
                <td valign="top"><?php echo($sp["MoTa"]);?></td>
            </tr>
            <tr>
                <td valign="bottom" height="50px"><a href="addSPvaogiohang.php?MaPK=<?php echo($sp["MaPK"]);?>"><input type="button" value="Thêm Sản Phẩm Vào Giỏ Hàng" /></a></td>
            </tr>
        </table>
        <?php
	}
	?>
</div>
</body>
</html>