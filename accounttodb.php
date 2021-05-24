<?php
session_start();
include("connection.php");
$name=$_POST['name'];
$e=$_SESSION['email'];
$pwd=$_POST['pwd'];
$gen=$_POST['gen'];
$mob=$_POST['mob'];
$add=$_POST['add'];
$sq="UPDATE `signup` SET `Name`='$name',`Password`='$pwd',`gender`='$gen',`mobno`= $mob,`address`= '$add' WHERE Emailid='$e'";
$con->query($sq);
$_SESSION['save']="Changes saved successfully";
header("location:myaccount.php");
?>