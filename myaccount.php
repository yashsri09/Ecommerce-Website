
<?php
//require("mainheader.php");
require('connection.php');
if(!isset($_SESSION['email']))
{
    header("location:ecomm.php");
    die();
}
$email=$_SESSION['email'];
//echo $email;
$s1= "select * from signup where Emailid='$email'";	
$rs=  mysqli_query($con,$s1);
$row= mysqli_fetch_assoc($rs);
//echo mysqli_num_rows($rs);
//echo $row[0];
$totalProduct=0;
if(isset($_SESSION['email']))
{
    $email=$_SESSION['email'];
    $sq="select * from cart where emailid='$email'";
    $res=mysqli_query($con,$sq);
    $totalProduct=mysqli_num_rows($res);
}
?>
    
<html lang="en">
    <head>
        <title style="font-family: cursive;"> Webkart </title>
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
        <style>
            input[type=number]::-webkit-inner-spin-button, 
            input[type=number]::-webkit-outer-spin-button { 
              -webkit-appearance: none; 
              margin: 0; 
            }
            
        </style>
        <script type="text/javascript" src="javascript/account.js" ></script>
        
    </head>
    <body >
        <!-----------------------------------------------------navbar---------------------------------------------------------->
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top py-md-0 " style="background: linear-gradient(40deg,#45cafc,#303f9f);">
          <!-- Brand -->
            
          <a class="navbar-brand-center py-0" href="ecomm.php" >
              <img src="images/logo%20&%20icon/fin%20logo.png" class="logo" >
          </a>
            
              <form class="form-inline" action="#" style="margin-bottom: 6px;margin-left: 10%;">
                <input class="form-control mr-md-2" type="text" placeholder="Search for product,brands and more" id="s" style="border-radius: 0px;background-color: white;">
                <button class="btn text-white" style="background: linear-gradient(40deg,#45cafc,#303f9f);border: 0px;" type="submit">Search</button>
              </form>
                <script>
                    document.getElementById("s").setAttribute('size', '40');
                  </script>
        
            
          <!-- Toggler/collapsibe Button -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" >
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Navbar links -->
          <div class="collapse navbar-collapse " id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto" style="margin-right: 30px;">
              <li class="nav-item py-0" style="margin-right: 50px;">
                <div class="dropdown disabled">
                      <button type="button" class="btn " style="background-color: linear-gradient(40deg,#45cafc,#303f9f);margin-top: -5px;font-weight: 700;border-radius: 0px;" >
                        <?php
                        if(isset($_SESSION['name']))
                        {
                            echo '<a href="#" style="text-decoration:none;color: white;font-size: 1rem;font-weight: 400;line-height: 1.5;">'.$_SESSION['name'].'</a>';
                            
                        }
                        else{
                            echo '<a href="#modal-1" data-toggle="modal" data-dismiss="modal" style="color: white;font-size: 1rem;font-weight: 400;line-height: 1.5;">Login</a>'.' | '.'<a href="#modal-2" data-toggle="modal" data-dismiss="modal" style="color: white;font-size: 1rem;font-weight: 400;line-height: 1.5;">Sign up</a>';
                        }
                        ?>
                      </button>
                      
                     <?php
                      if(isset($_SESSION['name']))
                      {
                          echo '<div class="dropdown-menu">';
                          echo '<a class="dropdown-item" href="myaccount.php">My Account</a>';
                          echo '<a class="dropdown-item" href="#">My Order</a>';
                          echo '<a class="dropdown-item" href="destroy.php">Logout</a>';
                          echo '</div>';
                      }
            
                      ?>
                      
                </div>
                  
              </li>
              <?php if(isset($_SESSION['email']))
                { ?>
              <li class="nav-item py-0 mr-auto" style="margin-top: -5px;">
                <a class="nav-link" href="cart.php">
                    <div>
                        <i class="fas fa-shopping-cart text-white"> <span><?php echo $totalProduct?></span></i>
                        <h7 class="text-white"> Cart</h7>
                    </div>
                  </a>
              </li>
              <?php } else { ?>
              <li class="nav-item py-0 mr-auto" style="margin-top: -5px;">
                <a class="nav-link" href="#">
                    <div>
                        <i class="fas fa-shopping-cart text-white"> <span><?php echo $totalProduct?></span></i>
                        <h7 class="text-white"> Cart</h7>
                    </div>
                  </a>
              </li>
              <?php } ?>
            </ul>
          </div>
        </nav>
        
        <!----------------------------------------------------------categories---------------------------------------------->
        
        <div class="container-fluid">
          <div class="row">
            <div class="col-3 bg-light text-center" >
                <div class="dropdown">
                  <a href="#" class="o" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-decoration: none;" >
                      <h6 style="margin-top: 8px;" > Electronics <i class="fas fa-angle-down "  ></i></h6>
                  </a>
                  <div class="dropdown-menu" style="margin-left: 24%;" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Mobiles</a>
                    <a class="dropdown-item" href="#">Laptops</a>
                    <a class="dropdown-item" href="#">Television</a>
                  <a class="dropdown-item" href="#">Speaker</a>
                  <a class="dropdown-item" href="#">Camera</a>
                  </div>
                </div>
                
              </div>
            <div class="col-2 bg-light text-center" >
                <div class="dropdown">
                  <a href="#" class="o" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-decoration: none;" >
                      <h6 style="margin-top: 8px;"> Men <i class="fas fa-angle-down " ></i> </h6>
                  </a>
                  <div class="dropdown-menu" style="margin-left: 4%;" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Footwear</a>
                    <a class="dropdown-item" href="#">Topwear</a>
                    <a class="dropdown-item" href="#">Bottomwear</a>
                    <a class="dropdown-item" href="#">Ethnic Wear</a>
                    <a class="dropdown-item" href="#">Watches</a>
                  </div>
                </div>
              </div>
            <div class="col-2 bg-light text-center" >
                <div class="dropdown">
                  <a href="#" class="o" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-decoration: none;" >
                      <h6 style="margin-top: 8px;"> Women <i class="fas fa-angle-down " ></i> </h6>
                  </a>
                  <div class="dropdown-menu" style="margin-left: 6%;" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Western wear</a>
                    <a class="dropdown-item" href="#">Footwear</a>
                    <a class="dropdown-item" href="#">Jewellery</a>
                    <a class="dropdown-item" href="#">Seasonal wear</a>
                    <a class="dropdown-item" href="#">Watches</a>
                  </div>
                </div>
              </div>
            <div class="col-2 bg-light text-center" >
                <div class="dropdown">
                  <a href="#" class="o" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-decoration: none;" >
                      <h6 style="margin-top: 8px;"> Sports <i class="fas fa-angle-down " ></i> </h6>
                  </a>
                  <div class="dropdown-menu" style="margin-left: 5%;" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Sports</a>
                    <a class="dropdown-item" href="#">Stationary</a>
                    <a class="dropdown-item" href="#">Books</a>
                    <a class="dropdown-item" href="#">Music</a>
                    <a class="dropdown-item" href="#">Gaming</a>
                  </div>
                </div>
              </div>
            <div class="col-3 bg-light text-center" >
                <div class="dropdown">
                  <a href="#" class="o" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-decoration: none;" >
                      <h6 style="margin-top: 8px;"> Furniture <i class="fas fa-angle-down " ></i> </h6>
                  </a>
                  <div class="dropdown-menu" style="margin-left: 20%;" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Kitchenware</a>
                    <a class="dropdown-item" href="#">Tableware</a>
                    <a class="dropdown-item" href="#">Bedroom</a>
                    <a class="dropdown-item" href="#">Living room</a>
                    <a class="dropdown-item" href="#">Cleaning Supplies</a>
                  </div>
                </div>
              </div>
          </div>
            
            
        </div>
        
        
        
          
          
          <!-----------------------------------------------------validation----------------------------------------------->
          
        <div class="container" style="background-color: white;margin-top: 10px;width: 60%;">
          <form action="accounttodb.php" onsubmit="return validate();" method="post">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['Name'] ?>" required>
            </div>
            <div class="form-group">
              <label for="email">E-mail ID:</label>
              <input type="email" class="form-control" id="email"  name="email" value="<?php echo $row['Emailid'] ?>" disabled>
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd" name="pwd" value="<?php echo $row['Password'] ?>" required >
              <input type="checkbox" onclick="myFunction()"> Show Password
              <span id="errp" class="text-danger"> </span>
            </div>
            <div class="form-group">
              <label for="gender">Gender:</label>
              <div class="form-check form-check-inline" >
              <input class="form-check-input" type="radio" name="gen" id="male" value="Male"  required <?php if($row['gender']=="Male") {?> <?php echo "checked";?> <?php }?> >
              <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gen" id="female" value="Female" required <?php if($row['gender']=="Female") {?> <?php echo "checked";?> <?php }?> >
                  <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
            </div>
            <div class="form-group">
              <label for="mob">Mobile Number:</label>
              <input type="number" class="form-control" id="mob"  name="mob" value="<?php echo $row['mobno'] ?>" required>
              <span id="err" class="text-danger"> </span>
            </div>
            <div class="form-group">
              <label for="add">Address:</label>
                <textarea style="height: 150px;" class="form-control" id="address"  name="add" required><?php echo $row['address'] ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-bottom: 10px;">Save Changes</button>
            <p style="font-size: 20px; " class="text-primary">
                    <?php if(isset($_SESSION['save'])){
                    echo $_SESSION['save'];
                    unset($_SESSION['save']);
            }
             ?>
             </p>
          </form>
        </div>
        
    <?php require("mainfooter.php"); ?>