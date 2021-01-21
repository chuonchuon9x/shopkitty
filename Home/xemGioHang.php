<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Xem Giỏ Hàng</title>
<style type="text/css">
	input[type=submit] {
	  background-color: #FF99FF;
	  color: white;
	  padding: 14px 20px;
	  margin: 8px 0;
	  border: 1px solid #FF66CC;
	  cursor: pointer;
	  width: 10%;
	  text-align:center;
	}
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
		?>
		<?php
			if(isset($_SESSION["gioHang"]))
			{
				$gioHang=$_SESSION["gioHang"];
				include("../Common/open.inc");
				$tongTien=0;
		?>
        <form method="post" action="updateSP.php" >
        <table border="1" cellpadding="0" cellspacing="0">
        	<tr>
            	<th>Mã SP</th>
                <th>Tên SP</th>
                <th>Hình Ảnh</th>
                <th>Giá</th>
                <th>Số Lượng</th>
                <th>Thành Tiền</th>
                <th></th>
            </tr>
            
     	<?php
			foreach($gioHang as $MaPK=>$SoLuong)
			{
				$result=mysqli_query($con,"select * from tblphukien where MaPK=$MaPK");
				$sp=mysqli_fetch_array($result);
		?>
                <tr>
                    <td><?php echo($MaPK);?></td>
                    <td><?php echo($sp["TenPK"]);?></td>
                    <td><img src="../images/<?php echo($sp["HinhAnh"]);?>" height="50px" width="50px"/></td>
                    <td><?php echo($sp["GiaPK"]);?></td>
                    <td><input type="text" name="arrSl[]" id="nhapsoluong" value="<?php echo($SoLuong);?>"/><div id="soluong"></div></td>
                    <td><?php echo($SoLuong*$sp["GiaPK"]);?></td>
                    <td><a href="deleteSP.php?MaPK=<?php echo($MaPK);?>" onClick="return confirm('Bạn có muốn xóa')"><input type="button" value="Xóa" /></a></td>
                 </tr>
                 
        <?php	
				$tongTien+=$SoLuong*$sp["GiaPK"];
			}
		?>
        </table>
        	<input type="submit" value="Cập Nhật" />
        </form>
		
        <h3>Tổng Tiền:<?php echo($tongTien);?></h3>
       	<?php
				include("../Common/close.inc");
				include("dathang.php");
			}else
			{
				echo"Chưa Có Sản Phẩm Trong Giỏ Hàng";	
			}
		?><br />
</div>
</body>
</html>