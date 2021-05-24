<?php
require("connection.php");
$categories_id=$_POST['categories_id'];
//echo $categories_id;
if($categories_id=="Select Category")
{
    $_SESSION['cat_id']="Select Category";
}
else{
    $_SESSION['cat_id']=$categories_id;
    
}
header("location:product.php");
die();
?>