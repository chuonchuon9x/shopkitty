<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body background="../images/admin.jpg">
	<?php 
	include ("banner.php");	
	session_start();
	if(isset($_SESSION['username'])){
		include ("menukhThanhvien.php");
	}
	else{
		include ("menukh.php");
	}
	?>
<?php
	$TenPK="";
		if(isset($_GET["TenPK"]))
		{
			$TenPK=$_GET["TenPK"];	
		}
	?>
	
	<?php
	//b1: mo ket noi
	include("../Common/open.inc");
	//b2:thao tac
	//lay toan bo san pham ve
		$soSanPham1Trang=10;
		//tim xem co tong bao nhieu san pham
		$resultTongSp=mysqli_query($con,"select count(*) as SoLuongPK from tblphukien where tblphukien.MaLoai=10");
		$rowTongSp=mysqli_fetch_array($resultTongSp);
		$tongSp=$rowTongSp["SoLuongPK"];
		//tong so trang
		$tongSoTrang=ceil($tongSp/$soSanPham1Trang);
		$page=0;
		if(isset($_GET["page"]))
		{
			$page=$_GET["page"];	
		}
		$start=$page*$soSanPham1Trang;
		//b2.1: viet cau query
		$sql="select * from tblphukien  where tblphukien.MaLoai=10 limit $start,$soSanPham1Trang";
		//b2.2:chay cau query
		$result=mysqli_query($con,$sql);
		//b2.3: hien thi cho nguoi dung xem
		?>
        <table style="padding-left: 350px">
        	<tr>
        	<?php
			$dem=0;
				while($sp=mysqli_fetch_array($result))
				{
					$dem++;
					?>
                    
                    	<td align="center">
                        	<a href="chitietSP.php?MaPK=<?php echo($sp["MaPK"]);?>"><img src="../images/<?php echo($sp["HinhAnh"]);?>" height="200px" width="200px" style="margin: 20px"/></a><br />
                            <a href="chitietSP.php?MaPK=<?php echo($sp["MaPK"]);?>"><?php echo($sp["TenPK"]);?></a><br />
                            <h5><?php echo($sp["GiaPK"]);?></h5>
                        </td>
                    
                    <?php
					if($dem%2==0)
					{
						//xuong dong
						?>
                        </tr>
                        <tr>
                        <?php	
					}	
				}
			?>
            </tr>
        </table>
        <?php
		for($i=0;$i<$tongSoTrang;$i++)
		{
			?>
            <a href="?page=<?php echo($i);?>"><?php echo($i+1);?></a>
            <?php	
		}
	//b3:dong ket noi
	include("../Common/close.inc");
	?>
</body>
</html>