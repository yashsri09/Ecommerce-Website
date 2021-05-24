<?php
require('connection.php');
unset($_SESSION['ADMIN_USERNAME']);
header("location:login.php");
?>