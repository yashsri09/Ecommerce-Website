<?php
require('connection.php');
if(!isset($_SESSION['ADMIN_USERNAME'])){
    header("location:login.php");
}
?>
<html>
    <head>
        <title style="font-family: cursive;"> Admin Panel </title>
        
        <meta charset="utf-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        
        <script src="https://kit.fontawesome.com/c33ad845f2.js" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        
        <!--<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>-->
        
       <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
        
        <script src="jquery-3.5.1.min.js"></script>
        
        <style>
            .header{
                width: 100%;
                height: 50px;
                border: 1px solid black;
                
            }
            .txt_admin{
                margin-top: 15px;
                font-family: sans-serif;
                font-size: 20px;
                
            }
             li {
                padding-left: 10%;
                padding-right: 10%;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid" style="border-bottom: 2px light grey;">
          <div class="row">
            <div class="col" style="margin-left: 0px;">
                <img src="../images/logo%20&%20icon/admin%20logo.png"width="50px" height="50px" > 
            </div>
            <div class="col" style="text-align: right;" >
                 <h5 class="txt_admin">
                    Welcome Admin
                 </h5>
                 <a href="logout.php">Logout</a>
              </div>
          </div>
        </div>
        <div class="container-fluid bg-light">
            <div class="row">
              <div class="col text-center">
                  <a class="nav-link"href="categories.php">Categories</a>
              </div>
              <div class="col text-center">
                  <a class="nav-link" href="product.php">Products</a>
              </div>
              <div class="col text-center">
                  <a class="nav-link" href="users.php">Users</a>
              </div>
              <div class="col text-center">
                  <a class="nav-link" href="#">Order</a>
              </div>
            </div>
        </div>
    </body>
</html>