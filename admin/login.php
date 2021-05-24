<?php
include("connection.php");
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['pswd'];
    $sq="select * from admin where username='$username' and password='$password'";
    $res=mysqli_query($con,$sq);
    $count=mysqli_num_rows($res);
    if($count>0)
    { 
		$_SESSION['ADMIN_USERNAME']=$username;
		header('location:categories.php');
		die();
	}else{
		$msg="!!!Please enter correct login details";
        $_SESSION['lerr']=$msg;
        //header("location:login.php");
	}
}
?>
<html>
   <head>
       <title style="font-family: cursive;"> Admin Panel </title>
        <link rel="icon" href="images/logo%20&%20icon/icon.png" type="image/x-icon">
        
        <meta charset="utf-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="css/ecomstyle.css">
        
        <script src="https://kit.fontawesome.com/c33ad845f2.js" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        
        <!--<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>-->
        
       <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
        
        <script src="jquery-3.5.1.min.js"></script>
   </head>
    <body>
        <div class="container" style="width:50%;margin: auto;margin-top:10%;background-color:#cfcfcf;">
         <br>
          <h2 style="text-align:center;">Login</h2>
          <form style="padding:20px;" method="post">
            <div class="form-group">
              <label for="email">Username:</label>
              <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
            </div>
            <div class="form-group form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Remember me
              </label>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            <div class="text-danger"><?php if(isset($_SESSION['lerr'])){ echo $_SESSION['lerr']; unset($_SESSION['lerr']);} ?></div>
          </form>
          
        </div>
    </body>
</html>