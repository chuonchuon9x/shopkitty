
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php
 include("fckeditor/fckeditor.php") ;
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Admin</title>
</head>

<body>

        <form name="frmaddproduct" method="post" action="process_additem.php">
          
			  <?php			
			$sBasePath="fckeditor/";			
			$oFCKeditor = new FCKeditor('FCKeditor1') ;
			$oFCKeditor->BasePath	= $sBasePath ;
			$oFCKeditor->Value		= '<p>Nhập mô tả sản phẩm</p>' ;
			$oFCKeditor->Create() ;
			?>			
              <input name="cmdAdd" type="submit" id="cmdAdd" value="   Gửi thông tin">
         
      </form>
</body>
</html>
