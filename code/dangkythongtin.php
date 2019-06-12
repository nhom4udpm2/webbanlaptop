<?php
	include('connect.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng ký thông tin</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
<table bgcolor="#CC9933">
	<tr>
    	<td align="center" colspan="2" style="color:#090">Đăng ký thông tin</td>
    </tr>
	<tr>
    	<td style="color:#090">Họ và tên</td>
        <td><input type="text" name="ten" /></td>
    </tr>
    <tr>
    	<td style="color:#090">Địa chỉ</td>
        <td><input type="text" name="dc" /></td>
    </tr>
    <tr>
    	<td style="color:#090">Điện thoại</td>
        <td><input type="tel" name="dt" /></td>
    </tr>
    <tr>
    	<td style="color:#090">Giới tính</td>
        <td><input type="radio" name="gt" value="Nam" />Nam
        	<input type="radio" name="gt" value="Nu" />Nữ</td>
    </tr>
    <tr>
    	<td style="color:#090">Tên Tài Khoản</td>
        <td><input type="text" name="tk" /></td>
    </tr>
    <tr>
    	<td style="color:#090">Mật Khẩu</td>
        <td><input type="password" name="mk" /></td>
    </tr>
    <tr>
    	<td style="color:#090">Nhập lại Mật Khẩu</td>
        <td><input type="password" name="nlmk" /></td>
    </tr>
    <tr>
    	<td colspan="2" align="center" style="color:#090"><input type="submit" name="OK" value="Đồng ý" /></td>
    </tr>
</table>
</form>
<?php
	if(isset($_POST['OK']))
{
	
	$ten=$_POST['ten'];
	$diachi=$_POST['dc'];
	$dienthoai=$_POST['dt'];
	$gioitinh=$_POST['gt'];
	$tentk=$_POST['tk'];
	$matkhau=$_POST['mk'];
	$nlmk=$_POST['nlmk'];
	if($matkhau == $nlmk){;
	$sql="insert into dangki(hovaten,diachi,dienthoai,gioitinh,tentaikhoan,matkhau,nhaplaimatkhau)
values('$ten','$diachi','$dienthoai','$gioitinh','$tentk','$matkhau','$nlmk')";
	$thucthi=mysqli_query($conn,$sql);
	if($thucthi) echo "Thanh cong";
	header('location:dangnhap.php');
	}
	else echo "Khong insert duoc";
	
}
?>
</body>
</html>