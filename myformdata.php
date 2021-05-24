<?php
session_start();
include("connection.php");
$em=$_POST['email'];
$p=$_POST['pass'];
//echo "<br>".$n."<br>".$em."<br>".$p."<br>".$cp;
$res=$con->query("select * from login where Emailid='$em' and Password='$p'");
if($res->num_rows==0)
{
    $msg1="Invalid Email-id or Password";
    $_SESSION['err1']=$msg1;
    header("location:ecomm.php");
}
else
{
    $sql = "SELECT * FROM signup WHERE Emailid='$em'";
    $result = $con->query($sql);
    $row=$result->fetch_assoc();
    $_SESSION['name']=$row['Name'];
    $_SESSION['email']=$row['Emailid'];
    header("location:ecomm.php");
}   
?>
    
