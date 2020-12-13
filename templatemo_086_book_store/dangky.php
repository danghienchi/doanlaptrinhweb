<?php include'connect.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng ký</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="templatemo_container">
<div id="templatemo_menu"><?php include'subpage/menu.php' ?></div> <!-- end of menu -->
<div id="templatemo_header"><?php include 'subpage/header.php' ?></div> <!-- end of header -->
<div id="templatemo_content">
<div id="templatemo_content_left"><?php include'subpage/content_left.php' ?></div>
<div id="templatemo_content_left">
    	<h1>Đăng ký</h1><br>
<form method="post" enctype="multipart/form-data" >Tài khoản <input type="text" name="taikhoan"><br>Mật khẩu<input type="password" name="matkhau"><br>Họ tên <input type="text" name="hoten"> <br>Số điện thoại <input type="text" name="sodienthoai"><br>Địa chỉ <input type="text" name="diachi"> <br><input type="submit" name="dangky" value="Đăng ký">
</div>
</div>
</div>
</body>
<?php 
if (isset($_POST['dangky']))
{

if(empty($_POST["taikhoan"]) || empty($_POST["matkhau"] )|| empty($_POST["hoten"])|| empty($_POST["sodienthoai"])|| empty($_POST["diachi"]))
 	{
 		echo '<h1>Điền đầy đủ các trường</h1>';
 	}
 	else{
	function postIndex($i, $v='')
	{
	return isset($_POST[$i])?$_POST[$i]:$v;
	}
	$data =[
	postIndex('taikhoan'),
	postIndex('matkhau'),
	postIndex('hoten'),
	postIndex('sodienthoai'),
	postIndex('diachi')];
	$sql="insert into khachhang(taikhoan, matkhau, hoten, sodienthoai, diachi)
	values(?, ?, ?, ?, ?)";
	$stm= $obj->prepare($sql);
	$stm->execute($data);
$mess=" Bạn đã đăng ký thành công ";
    echo"<script type='text/javascript'>var kq=confirm('$mess');
    if(kq){window.location='index.php?action=huy'};</script>";
}
}




