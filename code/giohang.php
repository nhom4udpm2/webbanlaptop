<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Giỏ hàng</title>
</head>
<body>
            <?php
				include('connect.php');
				$id=$_GET['id']; echo $id;
				$sql="select * from muahang where code='$id'";
				$tt=mysqli_query($conn,$sql);
				$row=mysqli_fetch_array($tt)
            ?>
	<form method="post" enctype="multipart/form-data">
    	<table border="1">
        	<tr>
            	<th colspan="5"> <h1> Giỏ hàng</h1></th>
            </tr>
            <tr>
            	<td> Hãng sản phẩm </td>
                <td> Tên sản phẩm </td>
                <td> Ảnh sản phẩm </td>
                <td> Số lượng </td>
            </tr>
            <tr>
            	<td> <?php echo $row['code'];?></td>
                <td> <?php echo $row['name'];?></td>
                <td> <?php echo "<img src='anh/{$row['image']}' width='200px' height='200px'>";?></td>
                <td> <input type="textbox" name="sl" value="<?php 
						if(isset($_POST['ok'])) {$sl=$_POST['sl']; echo $sl;} else {echo "1";}
						
				?>" /> <br /> <?php if($row['quantity']==0) echo " Hết hàng!"; else echo" Mua tối đa ".$row['quantity']."Cảm ơn quý khách";?> 
                </td>
                <td> <input type="submit" name="ok"/> </td>
            </tr>
            <tr>
            	<td colspan="3"> Tổng tiền: </td>
                <td>
                	<?php
						if(isset($_POST['ok']))
						{
							if($_POST['sl']<=$row['quantity'])
							{
								$tong=0; $sl=($row['quantity']-$_POST['sl']);
								echo $tong=$row['price']*$_POST['sl']." VNĐ";
							}
							else  { echo " Hết hàng!!!"; echo $tong=$row['price']." VNĐ"; } 	
							} 
						else {echo $tong=$row['price']." VNĐ";}
						
					?>
                </td>
            </tr>
            <tr>
            	<th colspan="5"> <input type="submit" name="OK"  value="Mua"/> </th>
                <?php
				if(isset($_POST['OK'])){
				$id=$_GET['id']; 
				$name=$row['name'];
				$image=$row['image'];		
				$sl=$_POST['sl'];
				if($sl > $row['quantity'] ){
					$tong=0; $tong=$row['price']*$_POST['sl']." VNĐ"; 	
				$tonkho=($row['quantity']-$sl);
				$sql2="update muahang set quantity='$tonkho' where code='$id'";
				$tt2=mysqli_query($conn,$sql2);
				$sql3="insert into giohang (code,name,image,quantity,sum) values ('$id','$name','$image','$sl','$tong')";
				$tt3=mysqli_query($conn,$sql3); if($tt3)"ok"; else echo "Rất tiếc!";
				}
				}
                ?>
            </tr>
        </table>
    </form>
</body>
</html>