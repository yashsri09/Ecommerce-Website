<?php
require('connection.php');
$email=$_SESSION['email'];
$id=$_GET['cid'];
$sq="select * from cart where emailid='$email' and id='$id'";
$res=mysqli_query($con,$sq);
$row=mysqli_fetch_assoc($res);
$price=$row['price'];
$qty=$_POST['qty'];
if($qty==0)
{
    $delete_sql="delete from cart where id='$id'";
    mysqli_query($con,$delete_sql);
    header("location:cart.php");
}
$total=$price*$qty;
$update_sql="update cart set qty='$qty',total='$total' where id='$id'";
$res1=mysqli_query($con,$update_sql);
header("location:cart.php");
?>