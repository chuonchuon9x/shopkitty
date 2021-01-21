<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Phụ Kiện Update</title>
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<script language="javascript">
	function updatepk()
	{
		var txttenpk=document.getElementById("txttenpk");
		var tenpk=document.getElementById("tenpk");
		if(txttenpk.value.length=="")
		 {
		   	txttenpk.style.color="#FF0000";
		  	tenpk.style.color="#FF0000";
		   	tenpk.innerHTML="Vui lòng nhập tên ";
		   	txttenpk.focus();
		   	return false;
		 }
		else 
		 {
			txttenpk.style.color="";
			tenpk.innerHTML="";
		 }
		var txtmt=document.getElementById("txtmt");
		var mt=document.getElementById("mt");
		if(txtmt.value.length=="")
		 {
		   	txtmt.style.color="#FF0000";
		   	mt.style.color="#FF0000";
		   	mt.innerHTML="Vui lòng nhập Mô Tả";
		   	txtmt.focus();
		   	return false;
		 }
		else 
		 {
			txtmt.style.color="";
			mt.innerHTML="";
		 }
		 
		var txthinhanh=document.getElementById("txthinhanh");
		var hinhanh=document.getElementById("hinhanh");
		if(txthinhanh.value.length=="")
		 {
		   	txthinhanh.style.color="#FF0000";
		   	hinhanh.style.color="#FF0000";
		   	hinhanh.innerHTML="Vui lòng nhập hình ảnh";
		   	txthinhanh.focus();
		   	return false;
		 }
		else 
		 {
			txthinhanh.style.color="";
			hinhanh.innerHTML="";
		 }
		 
		var txtsl=document.getElementById("txtsl");
		var sl=document.getElementById("sl");
		if(txtsl.value.length=="")
		 {
		   	txtsl.style.color="#FF0000";
		   	sl.style.color="#FF0000";
		   	sl.innerHTML=" Vui lòng nhập số lượng";
		   	txtsl.focus();
		   	return false;
		 }
		else 
		 {
			txtsl.style.color="";
			sl.innerHTML="";
		 }		
		 		
		var txtemail=document.getElementById("txtemail");
		var email=document.getElementById("email");
		if(txtemail.value.length=="")
		 {
		   	txtemail.style.color="#FF0000";
		   	email.style.color="#FF0000";
		   	email.innerHTML=" Vui lòng nhập email";
		   	txtemail.focus();
		   	return false;
		 }
		else 
		 {
			txtemail.style.color="";
			email.innerHTML="";
		 }
		 
		var txtgpk=document.getElementById("txtgpk");
		var gpk=document.getElementById("gpk");
		if(txtgpk.value.length=="")
		 {
		   	txtgpk.style.color="#FF0000";
		   	gpk.style.color="#FF0000";
		   	gpk.innerHTML=" Vui lòng nhập giá phụ kiện";
		   	txtgpk.focus();
		   	return false;
		 }
		else 
		 {
			txtgpk.style.color="";
			gpk.innerHTML="";
		 }	
		 
		var txtml=document.getElementById("txtml");
		var ml=document.getElementById("ml");
		if(txtml.value.length=="")
		 {
		   	txtml.style.color="#FF0000";
		   	ml.style.color="#FF0000";
		   	ml.innerHTML=" Vui lòng mã loại";
		   	txtml.focus();
		   	return false;
		 }
		else 
		 {
			txtml.style.color="";
			ml.innerHTML="";
		 }	
	return true;	 	
	}		 
</script>
</head>
<?php
 include("../fckeditor/fckeditor/fckeditor.php") ;
?>

<body>
<div align="center">
	<a href="../Home Admin/homeadmin.php">
		<img src="../images/LOGO Hello Kitty.png"/>					
	</a>
</div>
<?php
$MaPK=$_GET["MaPK"];
include("../Common/open.inc");
$query="select * from tblphukien where MaPK='$MaPK'";
$result=mysqli_query($con,$query);
if($row=mysqli_fetch_array($result))
{
	$TenPK=$row["TenPK"];
	$MoTa=$row["MoTa"];
	$HinhAnh=$row["HinhAnh"];
	$SoLuongPK=$row["SoLuongPK"];
	$GiaPK=$row["GiaPK"];
	$MaLoai=$row["MaLoai"];
}
include("../Common/close.inc");
?>
<form action="phukiensuaxl.php" method="post"  name="frmCapnhat">
<table cellspacing="0" border="1">
	<tr>
		<th>Mã Phụ Kiện</th>
		<th><input type="text" name="mapk" style="width:99%" value="<?php echo $MaPK ?>" readonly="readonly" /></th>
	</tr>
		<tr>
		<th>Tên Phụ Kiện</th>
		<th><input type="text" name="tenpk" value="<?php echo $TenPK ?>" style="width:99%" id="tenpk" /><div id="tenpk"></div></th>
	</tr>
	<tr>
		<th>Mô Tả</th>
		<th>
				<?php			
					$sBasePath="../fckeditor/fckeditor/";			
					$oFCKeditor = new FCKeditor('FCKeditor1') ;
					$oFCKeditor->BasePath	= $sBasePath ;
					$oFCKeditor->Value		= '<p>Nhập mô tả sản phẩm</p>' ;
					$oFCKeditor->Create() ;
				?>			
				<div id="mt"></div>
		</th>
	</tr>
	<tr>
		<th>Hình Ảnh</th>
		<th><input name="txthinhminhhoa" type="text" id="txthinhminhhoa" value="<?php echo $HinhAnh ?>"> <div id="hinhminhhoa"></div>
  			<input type="button" name="Button" value="Upload" onClick="window.open('../upload/Upload.php','','width=1500,height=100, status=true')"></th>
	</tr>
	<tr>
		<th>Số Lượng</th>
		<th><input type="text" name="soluong" style="width:99%" value="<?php echo $SoLuongPK ?>" id="sl" /><div id="sl"></div></th>
	</tr>
	<tr>
		<th>Giá Phụ Kiện</th>
		<th><input type="text" name="giapk" style="width:99%"value="<?php echo $GiaPK ?>" id="giapk" /><div id="giapk"></div></th>
	</tr>
	<tr>
		<th>Mã Loại</th>
		<th><input type="text" name="maloai" style="width:99%" value="<?php echo $MaLoai ?>" id="ml" /><div id="ml"></div></th>
	</tr>
	<tr>
		<th></th>
		<th><input type="submit" value="update" onclick="return updatepk()" /></th>
	</tr>
</table>
</form>
</body>
</html>
