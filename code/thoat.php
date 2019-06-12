<?php 
	session_start();
	if($_SESSION['tentaikhoan']);
	unset($_SESSION['tentaikhoan']);
	header ('location:dangnhap.php');
?>