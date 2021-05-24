<?php
require('connection.php');
$pid=$_GET['id'];
$email=$_SESSION['email'];
if(!isset($_SESSION['email']))
{
    $_SESSION['errmsg']="please login to add product to cart";
    header('location:product.php?id='.$pid);
}
$sq="select name,mrp,image from product where id='$pid'";
$res=mysqli_query($con,$sq);
$row=mysqli_fetch_assoc($res);
$name=$row['name'];
$mrp=$row['mrp'];
$image=$row['image'];
$qty=1;
$total=$mrp*$qty;
$sq2="select * from cart where name='$name' and emailid='$email'";
$res2=mysqli_query($con,$sq2);
$no2=mysqli_num_rows($res2);
//echo $no2;
if($no2==0)
{
    //echo 2;
    $insert="insert into cart(product_id,name,qty,price,image,total,emailid) values ('$pid','$name','$qty','$mrp','$image','$total','$email')";
    $insert_res=mysqli_query($con,$insert);
    header('location:product.php?id='.$pid);
}
else{
    header('location:product.php?id='.$pid);
}
?>