<?php require('connection.php');
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
        <link rel="icon" href="logo%20&%20icon/icon.png" type="image/x-icon">
        
        <meta charset="utf-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="css/ecomstyle.css">
        
        <script src="https://kit.fontawesome.com/c33ad845f2.js" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        
        <!--<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>-->
        
       <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
        
        <script src="jquery-3.5.1.min.js"></script>
        
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
              <li class="nav-item py-0 mr-auto" style="margin-top: -5px;">
                <a class="nav-link" href="cart.php">
                    <div>
                        <i class="fas fa-shopping-cart text-white"> <span><?php echo $totalProduct ?></span></i>
                        <h7 class="text-white"> Cart</h7>
                    </div>
                  </a>
              </li>
            </ul>
          </div>
        </nav>
        
        <!--------------------------------------login form validation code---------------------------------->
        
         <script>  
        function validateemail()  
        {  
            document.getElementById('erroremail').innerHTML="";
            document.getElementById('errorpass').innerHTML="";
        var x=document.myform.email.value;  
        var atposition=x.indexOf("@");  
        var dotposition=x.lastIndexOf(".");  
            if(x.trim()==""){
                
                var elmnt = document.getElementById("form1-email");
                elmnt.scrollIntoView();
                document.getElementById('erroremail').innerHTML="!! E-mail cannot be blank";
                //$("#form1-email").effect("shake");
                $('#form1-email').effect("shake", { times:3 }, 50);
                return false; 
            }
        else if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
            
            var elmnt = document.getElementById("form1-email");
            elmnt.scrollIntoView();
          document.getElementById('erroremail').innerHTML="!! Please enter a valid e-mail address ";  
            //$("#form1-email").effect("shake");
            $('#form1-email').effect("shake", { times:3 }, 50);
          return false;  
          }
            else{
                document.getElementById('erroremail').innerHTML="";
                //document.getElementById('email').disabled=true;
            }
        var str =  document.getElementById("pass").value; 
            if (str.match(/[a-z]/g) && str.match( 
                    /[A-Z]/g) && str.match( 
                    /[0-9]/g) && str.match( 
                    /[^a-zA-Z\d]/g) && str.length >= 8){
                document.getElementById('errorpass').innerHTML="";
                //document.getElementById('pass').disabled="true";
                return true; 
            }
            else if(str.length==0){
                
                var elmnt = document.getElementById("form1-pass");
                elmnt.scrollIntoView();
                document.getElementById('errorpass').innerHTML="!! Password cannot be blank";
                //$("#form1-pass").effect("shake");
                $('#form1-pass').effect("shake", { times:3 }, 50);
                return false; 
            }
            else {
                var elmnt = document.getElementById("form1-pass");
                elmnt.scrollIntoView();
                document.getElementById('errorpass').innerHTML="!! Please enter a valid password";
                //$("#form1-pass").effect("shake");
                $('#form1-pass').effect("shake", { times:3 }, 50);
                return false; 
            }
        }
             $(function() {
                $( "#show-option" ).tooltip({
                    show: {
                    effect: "slideDown",
                    delay: 300
                    }
                });
            });
             
    </script>  
        
        
        
        <!-----------------------------modal class for login and sign up---------------------------------->
        
        
        <div class="modal fade" id="modal-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                          <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header" style="background: linear-gradient(40deg,#45cafc,#303f9f);" >
                              <h4 class="modal-title" style="margin-left: 45%;font-family: sans-serif;color: white;">Login</h4>
                              <button type="button" class="close" data-dismiss="modal" style="color: white;" >&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                              <div class="container" style="width: 75%;margin-left: 0px;">
                                  <form name="myform"  method="post" action="myformdata.php" onsubmit="return validateemail();" id="login">  
                                      <div class="form-group " style="width: 92%;" id="form1-email">
                                        <label for="uname">Email-id:</label>
                                        <input type="text" name="email" class="form-control" id="email" placeholder="email-id" style="border-radius: 0px;" ><span class="text-danger" id="erroremail">    </span>
                                      </div>
                                      <div class="form-group" style="width: 92%;display: inline-block;" id="form1-pass">
                                        <label for="pass">Password:</label>
                                        <input type="password" name="pass" class="form-control" id="pass" placeholder="password" style="border-radius: 0px;" > <span class="text-danger" id="errorpass">    </span>
                                      </div>
                                      <div class="form-group" style="width: 4%;display: inline-block;margin-left: 2%;">
                                           <a href="#" id="show-option" title="password length should be at least 8 and should contain atleast 1 uppercase,1 lowercase,1 digit and 1 special character" style="display: inline-block;"><i class="fas fa-question"></i></a>
                                      </div>
                                      <div class="form-group form-check">
                                      <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="remember" > Remember me.
                                        <div class="invalid-feedback">Check this checkbox to continue.</div>
                                      </label>
                                    </div>
                                      
                                        <p style="color:red;"><?php 
                                           if(isset($_SESSION['err1'])){
                                               $m=$_SESSION['err1'];
                                          echo "<script>alert('$m')</script>";
                                               unset($_SESSION['err1']);
                                            
                                           }
                                        ?>  </p>
                                      <button type="submit"  class="btn" style="background: linear-gradient(40deg,#45cafc,#303f9f);color: white;"> Login </button>
                                </form>  
                                </div>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                              <h5 style="margin: auto;margin-top: 5px;margin-left: 42%;"> Login with </h5>
                                <br>
                                <br>
                                <div class="social-icons" style="margin: auto;margin-top: -10px;margin-left: 39%;">
                                    <a href="#" style="display: inline-block;padding: 10px;"> <i class="fab fa-facebook"></i> </a>
                                    <h5 style="display: inline-block;padding: 10px;" >or</h5>
                                    <a href="#" style="display: inline-block;padding: 10px;" > <i class="fab fa-google"></i> </a>
                                </div>
                                <br>
                                <br>
                                <h6 style="margin-right: 27%;"> New to Webkart <a href="#modal-2" data-toggle="modal" data-dismiss="modal"> Click here</a> </h6>
                            </div>

                          </div>
                        </div>
                      </div>
        
        
        
        
        <!--------------------------------------------form validation for sign up----------------------------------->
        
        <script>  
        function validateemail2()  
        { 
            document.getElementById('errorname').innerHTML="";
            document.getElementById('erroremail2').innerHTML="";
            document.getElementById('errorpass2').innerHTML="";
            document.getElementById('errorcpass').innerHTML="";
        var n=document.getElementById("name").value;
        if(n.trim()==""){
            var elmnt = document.getElementById("form2-name");
            elmnt.scrollIntoView();
            document.getElementById('errorname').innerHTML="!! Name cannot be blank";
            //$("#form2-name").effect("shake");
            $('#form2-name').effect("shake", { times:3 }, 50);
            return false;
        }
            document.getElementById('errorname').innerHTML="";
            //document.getElementById('name').disabled=true;
        var x=document.myform2.email2.value;  
        var atposition=x.indexOf("@");  
        var dotposition=x.lastIndexOf(".");  
        if(x.trim()==""){ 
            var elmnt = document.getElementById("form2-email");
            elmnt.scrollIntoView();
            document.getElementById('erroremail2').innerHTML="!! E-mail cannot be blank";
            //$("#form2-email").effect("shake");
            $('#form2-email').effect("shake", { times:3 }, 50);
            return false; 
            }
        else if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){ 
            
            var elmnt = document.getElementById("form2-email");
            elmnt.scrollIntoView();
            
          document.getElementById('erroremail2').innerHTML="!! Please enter a valid e-mail address "; 
            //$("#form2-email").effect("shake");
            $('#form2-email').effect("shake", { times:3 }, 50);
          return false;  
          }
        else{
            document.getElementById('erroremail2').innerHTML="";
            //document.getElementById('email2').disabled=true;
        var str =  document.getElementById("pass2").value; 
            if(str.length==0){
                
                var elmnt = document.getElementById("form2-pass");
                elmnt.scrollIntoView();
                document.getElementById('errorpass2').innerHTML="!! Password cannot be blank";
                //$("#form2-pass").effect("shake");
                $('#form2-pass').effect("shake", { times:3 }, 50);
                return false;
            }
            if (str.match(/[a-z]/g) && str.match( 
                    /[A-Z]/g) && str.match( 
                    /[0-9]/g) && str.match( 
                    /[^a-zA-Z\d]/g) && str.length >= 8)
                {
                    document.getElementById('errorpass2').innerHTML="";
                var secondpassword=document.getElementById("pwd").value;

                if(str==secondpassword){
                    document.getElementById('errorcpass').innerHTML="";
                    return true;
                    }
                else{
                   
                    var elmnt = document.getElementById("form2-cpass");
                    elmnt.scrollIntoView();
                    document.getElementById('errorcpass').innerHTML="!! Password must be same";
                     //$("#form2-cpass").effect("shake");
                    $('#form2-cpass').effect("shake", { times:3 }, 50);
                    return false;
                }
                }
            else{ 
                
                var elmnt = document.getElementById("form2-pass");
                elmnt.scrollIntoView();
                document.getElementById('errorpass2').innerHTML="!! Please enter a valid password";
                //$("#form2-pass").effect("shake");
                $('#form2-pass').effect("shake", { times:3 }, 50);
                return false; 
        }
        }
        }
        
        $(function() {
                $( "#show-option2" ).tooltip({
                    show: {
                    effect: "slideDown",
                    delay: 300
                    }
                });
            });
    </script>  
    
        
        
        
        
        
                        
                        <!-- ------------------------------The Modal 2-------------------------------- -->
        
                      <div class="modal fade " id="modal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                        <div class="modal-content">
                            
                            <!--modal 2 header-->
                            
                          <div class="modal-header" style="background: linear-gradient(40deg,#45cafc,#303f9f);">
                            <h4 class="modal-title" style="margin-left: 42%;font-family: sans-serif;color: white;" >Sign up</h4>
                              <button type="button" class="close" data-dismiss="modal" style="color: white;">&times;</button>
                          </div>
                            
                            <!--modal 2 body-->
                            
                          <div class="modal-body">
                              <div class="container" style="width: 75%;margin-left:0px; ">
                                <form name="myform2" method="post" action="myformdata2.php" onsubmit="return validateemail2();" >
                                <div class="form-group" style="width: 92%" id="form2-name">
                                  <label for="uname">Name:</label>
                                  <input type="text" class="form-control" id="name" placeholder="name" name="name" style="border-radius: 0px;"> <span class="text-danger" id="errorname">    </span>
                                </div>
                                <div class="form-group" style="width: 92%;" id="form2-email"> 
                                    <label for="uname">Email-id:</label>
                                    <input type="text" name="email2" class="form-control" id="email2" placeholder="email-id" style="border-radius: 0px;" > <span class="text-danger" id="erroremail2">    </span>
                                  </div>
                                  <div class="form-group" style="width: 92%;display: inline-block;" id="form2-pass">
                                    <label for="pass">Password:</label>
                                    <input type="password" name="pass2" class="form-control" id="pass2" placeholder="password" style="border-radius: 0px;" > <span class="text-danger" id="errorpass2">    </span>

                                  </div>
                                  <div class="form-group" style="width: 4%;display: inline-block;margin-left: 2%;">
                                       <a href="#" id="show-option2" title="password length should be at least 8 and should contain atleaset 1 uppercase,1 lowercase,1 digit and 1 special character" style="display: inline-block;"><i class="fas fa-question"></i></a>
                                  </div>
                                <div class="form-group" style="width: 92%" id="form2-cpass">
                                  <label for="pwd">Confirm Password:</label>
                                  <input type="password" class="form-control" id="pwd" placeholder="Confirm password" name="pswd" style="border-radius: 0px;"> <span class="text-danger" id="errorcpass">    </span>
                                  
                                </div>
                                <div class="form-group form-check">
                                  <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="remember"  required> I agree with terms and condition.
                                    
                                  </label>
                                </div>
                                <p style="color:red;"><?php 
							       if(isset($_SESSION['err'])){
                                       $m=$_SESSION['err'];
                                  echo "<script>alert('$m')</script>";
                                       unset($_SESSION['err']);
                                    	
                                   }
                                    ?>  </p>
                                 <button type="submit" class="btn" style="background: linear-gradient(40deg,#45cafc,#303f9f);color: white;">  Sign up </button>
                              </form>
                              </div>
                          </div>
                            
                            <!--modal 2 footer-->
                            
                          <div class="modal-footer">
                              <h5 style="margin: auto;margin-top: 5px;margin-left: 39%;"> Sign up with </h5>
                                <br>
                                <br>
                                <div class="social-icons" style="margin: auto;margin-top: -10px;margin-left: 38%;">
                                    <a href="#" style="display: inline-block;padding: 10px;"> <i class="fab fa-facebook"></i> </a>
                                    <h5 style="display: inline-block;padding: 10px;" >or</h5>
                                    <a href="#" style="display: inline-block;padding: 10px;" > <i class="fab fa-google"></i> </a>
                                </div>
                                <br>
                                <br>
                              <h6 style="margin-right: 27%;"> Already Registered <a href="#modal-1" data-toggle="modal" data-dismiss="modal" style="color: linear-gradient(40deg,#45cafc,#303f9f);">Click here</a> </h6>
                            
                          </div>
                        </div>
                        </div>
                    </div>
                    
                    
                    <!-------------------------------------------------------categories------------------------------------------------------>
                     
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
    
