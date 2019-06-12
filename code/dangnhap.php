<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng nhập</title>
</head>
<body>
<form method="post">
	<table border="1" bgcolor="#FF0000">
    	<tr>
        	<td colspan="2"><h1>Đăng nhập</h1></td>
        </tr>
        <tr>
        	<td>Tài khoản</td>
            <td><input type="text" name="taikhoan" /></td>
        </tr>
           <tr>
        	<td>Mật khẩu</td>
            <td><input type="password" name="matkhau" /></td>
        </tr>
           <tr>
            <td colspan="2"><input type="submit" name="ok" /></td>
        </tr>
        <tr>
        	<td>Bạn chưa có tài khoản?</td>
            <td align="center"><a href="dangkythongtin.php">Đăng ký</a></td>
        </tr>    
    </table>
</form>
<?php
	
	include('connect.php');
	if(isset($_POST['ok']))
{
	$taikhoan=$_POST['taikhoan'];
	$matkhau=$_POST['matkhau'];
	$sql="select * from dangki
					where tentaikhoan='$taikhoan'
					and matkhau='$matkhau'";
	$thucthi=mysqli_query($conn,$sql);
	$num=mysqli_num_rows($thucthi);
	if($num!=0)
	{
		$_SESSION['tentaikhoan']=$taikhoan;
		$_SESSION['matkhau']=$matkhau;
		header('location:giohang.php');
	}
	else echo "Nhập sai!!! Vui lòng nhập lại.";
}
?>
</body>
</html>