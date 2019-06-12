<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css.css" />
<title>Laptop Chính Hãng</title>
</head>

<body>
<?php include('connect.php');?>
	<div class="tong">
    	<div class="header"><img src="anh/bialap.jpg" /></div>
        <div class="menu">
        	<ul>
            	<li><a href="trangchu.php">Trang chủ</a></li>
                <li><a href="#">Sản phẩm</a></li>
                <li><a href="dangkythongtin.php">Đăng kí</a></li>
                <li><a href="dangnhap.php">Đăng nhập</a></li>
                <li><a href="#">Liên hệ</a></li>
            </ul>
        </div>
        <div class="content">
        <div class="left">
        <p style="text-align:center; color:#000; background:#03C; padding:10px; font-size:20px">HÃNG SẢN PHẨM</p>
            <div class="dssp">
            	<ul>
                	<li><a href="dell.php">Dell</a></li>
                    <li><a href="asus.php">Asus</a></li>
                    <li><a href="hp.php">HP</a></li>
                    <li><a href="sony.php">Sony</a></li>
                </ul>
            </div>
        </div>
        <div class="right">
        <p style="text-align:center; color:#000; background:#03C; padding:10px; font-size:20px">TẤT CẢ SẢN PHẨM</p>

        <?php
include('connect.php');
	$sql="select * from hp";
	$tt=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($tt))
	{
	$id=$row['id'];
	$name=$row['name'];
	$price=$row['price'];
	$code=$row['code'];
	$image=$row['image'];
	$sl=$row['quantity'];
 ?>
<form>
<div class="allsp">
<ul>
    <li><img src="anh/<?php echo $image ?>" alt="" width="200px" height="200px">
    <p>Tên: <?php echo $name ?></p>
    <p>Hãng:  <?php echo $code ?></p>
    <p>Giá bán: <?php echo $price ?> VNĐ </p>
    <p>Hiện còn: <?php echo $sl ?></p>
   <p align="center"><a href="dangnhap.php"> <input type="button" name="OK" value="Mua hàng" /></a></p>
    </li>
</ul>
</div>
</form>
<?php }?>
</div>
        </div>
        <div class="footer">
        <h3 align="center"> Laptop Chính Hãng</h3>
Trang chủ <a href="trangchu.php">sieuthilaptop.vn</a> bán lẻ các dòng Laptop DELL HP ASUS và SONY Chính hãng. Hơn 10 năm kinh nghiệm bán sỉ cho hơn 3000 doanh nghiệp cả nước. Đến với Siêu thị Laptop bạn hoàn toàn yên tâm về chất lượng Laptop.
        </div>
    </div>
</body>
</html>