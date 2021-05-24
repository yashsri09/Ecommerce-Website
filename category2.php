<?php
require('connection.php');
$cat_id=$_GET['cat_id'];
//echo $cat_id;
$sort=$_POST['sort'];
$_SESSION['sort']=$sort;
header("location:category.php?id=".$cat_id);
?>