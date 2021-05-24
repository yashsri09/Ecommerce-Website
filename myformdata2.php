<?php
session_start();
include("connection.php");
$n=$_POST['name'];
$em=$_POST['email2'];
$p=$_POST['pass2'];
//echo "<br>".$n."<br>".$em."<br>".$p."<br>".$cp;
$res=$con->query("select * from signup where Emailid='$em'");
if($res->num_rows==0)
{
    $sq="insert into signup(Name,Emailid,Password) values('$n','$em','$p')";
    $sq1="insert into login(Emailid,Password) values('$em','$p')";
    $con->query($sq);
    $con->query($sq1);
    $msg1="Registered successfully please login";
    $_SESSION['err']=$msg1;
    header("location:ecomm.php");
}
else
{
    $msg2="Email-id already exist";
    $_SESSION['err']=$msg2;
    header("location:ecomm.php");
}   
?>
    
