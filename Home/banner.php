<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="../css/search.css" />
</head>

<body>
<?php 
include("../Common/open.inc");
$TenPK="";
		if(isset($_GET["TenPK"]))
		{
			$TenPK=$_GET["TenPK"];	
		}
		$sql="select * from tblphukien where TenPK='$TenPK'";
		//b2.2:chay cau query
		$result=mysqli_query($con,$sql);
?>
<form>
		<div class="banner">
			<a href="trangchu.php">
				<img src="../images/banner-hello-kitty_3_1_.png" style="padding-left: 24%"/>
			</a>
		</div>
		<div class="box">
				<div class="container-1">
			  		<span class="icon"><i class="fa fa-search"><img src="../images/icon-search.png" width="38" height="38" /></i></span>
			  	<input type="text" name="TenPK" id="search" placeholder="Nhập Tên Sản Phẩm" value="<?php echo $TenPK;?>"/>
	  	  		</div>
		</div>
</form>
<?php 
include("../Common/close.inc")
?>
</body>
</html>
