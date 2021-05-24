<?php 
require('mainheader.php'); 
unset($_SESSION['sort']);
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
        
    </head>
    <body style="background-color: lightgrey;">
        
        <!---------------------------------------------------------------carousel---------------------------------------------------------->
    
    
        <div id="demo" class="carousel slide" data-ride="carousel" style="padding: 5px">

          <!-- Indicators -->
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
          </ul>

          <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="#">
              <img src="images/carousel/caro1.jpg" alt="Los Angeles" >
                </a>
            </div>
            <div class="carousel-item">
                <a href="#">
              <img src="images/carousel/carou2.jpg" alt="Chicago">
                </a>
            </div>
            <div class="carousel-item">
                <a href="#">
              <img src="images/carousel/caro3.jpg" alt="New York">
                </a>
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
    
    <!-------------------------------------------------------Mobile Section-------------------------------------------------------->
    
    <div style="background-color: white;margin: 5px;margin-top: 0px;">
            <div style="display: inline-block;width: 100%">
                <h3 style="font-size: 22px;line-height: 32px;display: inline-block;font-weight: 500;margin-left: 20px;margin-top: 10px;">Best Mobiles</h3><br>
                <div class="text-right" style="margin-right: 3%;margin-top: -40px;">
                    <a href='category.php?id=4' style="color: white;text-decoration: none;"><button type="submit" class="btn btn-md" style="color: white;background: linear-gradient(40deg,#45cafc,#303f9f);">VIEW&nbsp;ALL</button></a>
                </div>
                <h7 style="color: #b2b2b2;margin-left: 20px; ">More than 4000 mAh</h7>
            </div>
            <hr>
            <div class="container-fluid horizontal-scrollable">
                <div class="rows">
                    <div class="text-center zoom" style="width: 200px;height: 340px;display: inline-block;text-align: center;margin-bottom: 20px;">
                        <a href="product.php?id=7" style="text-decoration: none;">
                            <img src="images/Best%20mobiles/iqoo3.jpeg" height="200px" width="100px" style="margin-top: 20px;">
                            <h6 style="color: black;margin-top : 10px;">iQOO&nbsp;3</h6>
                            <h7 style="color: #388e3c;" >4440&nbsp;mAh&nbsp;Battery</h7><br>
                            <h7 style="color: #b2b2b2;">
                                Now&nbsp;&#8377;34990
                            </h7>
                        </a>
                    </div>
                    <div class=" text-center zoom" style="width: 200px;height: 280px;display: inline-block;">
                        <a href="product.php?id=8" style="text-decoration: none;">
                            <img src="images/Best%20mobiles/honor.jpeg" height="200px" width="100px">
                            <h6 style="color: black;margin-top : 10px;">Honor&nbsp;9x&nbsp;Pro</h6>
                            <h7 style="color: #388e3c;" >4000&nbsp;mAh&nbsp;Battery</h7><br>
                            <h7 style="color: #b2b2b2;">
                                Now&nbsp;&#8377;14999
                            </h7>
                        </a>
                    </div>
                    <div class=" text-center zoom" style="width: 200px;height: 280px;display: inline-block;">
                        <a href="product.php?id=24">
                            <img src="images/Best%20mobiles/motrola%20Edge+.jpeg" height="200px" width="100px">
                            <a href="#" style="text-decoration: none;">
                            <h6 style="color: black;margin-top : 10px;">Motorola&nbsp;Edge+</h6>
                            <h7 style="color: #388e3c;" >5000&nbsp;mAh&nbsp;Battery</h7><br>
                            <h7 style="color: #b2b2b2;">
                                Now&nbsp;&#8377;74999
                            </h7>
                        </a>
                        </a>
                    </div>
                    <div class=" text-center zoom" style="width: 200px;height: 280px;display: inline-block;">
                        <a href="product.php?id=5" style="text-decoration: none;">
                            <img src="images/Best%20mobiles/realme%20narzo.jpeg" height="200px" width="100px">
                            <h6 style="color: black;margin-top : 10px;">Realme&nbsp;Narzo&nbsp;10</h6>
                            <h7 style="color: #388e3c;" >5000&nbsp;mAh&nbsp;Battery</h7><br>
                            <h7 style="color: #b2b2b2;">
                                Now&nbsp;&#8377;11999
                            </h7>
                        </a>
                    </div>
                    <div class="text-center zoom" style="width: 200px;height: 280px;display: inline-block;">
                        <a href="product.php?id=6" style="text-decoration: none;">
                            <img src="images/Best%20mobiles/samsung.jpeg" height="200px" width="100px">
                            <h6 style="color: black;margin-top : 10px;">Samsung&nbsp;Galaxy&nbsp;M11</h6>
                            <h7 style="color: #388e3c;" >5000&nbsp;mAh&nbsp;Battery</h7><br>
                            <h7 style="color: #b2b2b2;">
                                Now&nbsp;&#8377;12980
                            </h7>
                        </a>
                    </div>
                    <div class=" text-center zoom" style="width: 190px;height: 280px;display: inline-block;">
                        <a href="product.php?id=4" style="text-decoration: none;">
                        <img src="images/Best%20mobiles/vivo.jpeg" height="200px" width="100px">
                            <h6 style="color: black;margin-top : 10px;">Vivo&nbsp;NEX</h6>
                            <h7 style="color: #388e3c;" >4000&nbsp;mAh&nbsp;Battery</h7><br>
                            <h7 style="color: #b2b2b2;">
                                Now&nbsp;&#8377;29990
                            </h7>
                        </a>
                    </div>
                </div>
            </div>  
        
    </div>
    
    <!--------------------------------------------------------------Footwear section--------------------------------------------------------------->
    
    <div style="background-color: white;margin: 5px;">
            <div style="display: inline-block;width: 100%">
                <h3 style="font-size: 22px;line-height: 32px;display: inline-block;font-weight: 500;margin-left: 20px;margin-top: 10px;">Trending&nbsp;Footwear</h3><br>
                <div class="text-right" style="margin-right: 3%;margin-top: -40px;">
                   <a href='category.php?id=5' style="color: white;text-decoration: none;"><button type="submit" class="btn btn-md" style="color: white;background: linear-gradient(40deg,#45cafc,#303f9f);">VIEW&nbsp;ALL</button></a>
                </div>
            </div>
            <hr>
            <div class="container-fluid horizontal-scrollable">
                <div class="rows">
                    <div class="text-center zoom " style="width: 200px;height: 240px;display: inline-block;margin-bottom: 20px;">
                        <a href="product.php?id=26" style="text-decoration: none;">
                            <img src="images/trending%20footwear/clogs1.jpeg" height="100px" width="100px" style="margin-top: 20px;">
                            <h6 style="color: black;margin-top : 10px;">Men Blue Clogs</h6>
                            <h7 style="color: #388e3c;" >&#8377;494</h7><br>
                            <h7 style="color: #b2b2b2;">
                                Explore&nbsp;Now!
                            </h7>
                        </a>
                    </div>
                    <div class=" text-center zoom " style="width: 200px;height: 240px;display: inline-block;">
                        <a href="product.php?id=27" style="text-decoration: none;">
                            <img src="images/trending%20footwear/flats.jpeg" height="150px" width="100px" style="margin-top: 20px;" >
                            <h6 style="color: black;margin-top : 10px;">Flats</h6>
                            <h7 style="color: #388e3c;" >&#8377;500</h7><br>
                            <h7 style="color: #b2b2b2;">
                                Hurry
                            </h7>
                        </a>
                    </div>
                    <div class=" text-center zoom" style="width: 200px;height: 240px;display: inline-block;">
                        <a href="product.php?id=28" style="text-decoration: none;">
                            <img src="images/trending%20footwear/flipflops.jpeg" height="150px" width="100px">
                            <h6 style="color: black;margin-top : 10px;">Doctor Slippers</h6>
                            <h7 style="color: #388e3c;" >&#8377;450</h7><br>
                            <h7 style="color: #b2b2b2;">
                                Grab&nbsp;Now!
                            </h7>
                        </a>
                    </div>
                    <div class=" text-center zoom" style="width: 200px;height: 240px;display: inline-block;">
                        <a href="product.php?id=29" style="text-decoration: none;">
                            <img src="images/trending%20footwear/sandals.jpeg" height="150px" width="100px">
                            <h6 style="color: black;margin-top : 10px;">Axter</h6>
                            <h7 style="color: #388e3c;" >&#8377;379</h7><br>
                            <h7 style="color: #b2b2b2;">
                                Hurry!
                            </h7>
                        </a>
                    </div>
                    <div class="text-center zoom" style="width: 200px;height: 240px;display: inline-block;">
                        <a href="product.php?id=30" style="text-decoration: none;">
                            <img src="images/trending%20footwear/slippers.jpeg" height="150px" width="100px">
                            <h6 style="color: black;margin-top : 10px;">Kraasa</h6>
                            <h7 style="color: #388e3c;" >&#8377;425</h7><br>
                            <h7 style="color: #b2b2b2;">
                                Hurry!
                            </h7>
                        </a>
                    </div>
                    <div class=" text-center zoom" style="width: 190px;height: 240px;display: inline-block;">
                        <a href="product.php?id=31" style="text-decoration: none;">
                            <img src="images/trending%20footwear/slippers2.jpeg" height="150px" width="100px">
                            <h6 style="color: black;margin-top : 10px;">Lekstar</h6>
                            <h7 style="color: #388e3c;" >&#8377;115</h7><br>
                            <h7 style="color: #b2b2b2;">
                                Explore&nbsp;Now!
                            </h7>
                        </a>
                    </div>
                </div>
            </div>  
        
    </div>
    
    <!--------------------------------------------------------Electronics section----------------------------------------------------------------->
    
    
        <div style="background-color: white;margin: 5px;">
            <div style="display: inline-block;width: 100%">
                <h3 style="font-size: 22px;line-height: 32px;display: inline-block;font-weight: 500;margin-left: 20px;margin-top: 10px;">Top&nbsp;deals&nbsp;on&nbsp;electronics</h3><br>
                <div class="text-right" style="margin-right: 3%;margin-top: -40px;">
                   <a href='category.php?id=6' style="color: white;text-decoration: none;"><button type="submit" class="btn btn-md" style="color: white;background: linear-gradient(40deg,#45cafc,#303f9f);">VIEW&nbsp;ALL</button></a>
                </div>
                <h7 style="color: #b2b2b2;margin-left: 20px; ">IT and Peripherals</h7>
            </div>
            <hr>
            <div class="container-fluid horizontal-scrollable">
                <div class="rows">
                    <div class="text-center zoom" style="width: 200px;height: 240px;display: inline-block;">
                        <a href="product.php?id=32" style="text-decoration: none;">
                            <img src="images/It%20perpherals/data%20cards.jpeg" height="150px" width="100px" style="margin-top: 20px;">
                            <h6 style="color: black;margin-top : 10px;">JioFi Data Card</h6>
                            <h7 style="color: #388e3c;" >&#8377;1999</h7><br>
                            <h7 style="color: #b2b2b2;">
                                Brand:&nbsp;JioFi
                            </h7>
                        </a>
                    </div>
                    <div class=" text-center zoom" style="width: 200px;height: 240px;display: inline-block;margin-bottom: 10px;">
                        <a href="product.php?id=33" style="text-decoration: none;">
                            <img src="images/It%20perpherals/keyboard.jpeg" height="60px" width="200px" style="margin-top: 40px;">
                            <h6 style="color: black;margin-top : 10px;">Logitech Keyboard</h6>
                            <h7 style="color: #388e3c;" >&#8377;1395</h7><br>
                            <h7 style="color: #b2b2b2;">
                                Wireless
                            </h7>
                        </a>
                    </div>
                    <div class=" text-center zoom" style="width: 200px;height: 240px;display: inline-block;">
                        <a href="product.php?id=34" style="text-decoration: none;">
                            <img src="images/It%20perpherals/samsungmonitor.jpeg" height="125px" width="150px">
                            <h6 style="color: black;margin-top : 10px;">Samsung Monitor</h6>
                            <h7 style="color: #388e3c;" >&#8377;8,999</h7><br>
                            <h7 style="color: #b2b2b2;">
                                Frameless
                            </h7>
                        </a>
                    </div>
                    <div class=" text-center zoom" style="width: 200px;height: 240px;display: inline-block;">
                        <a href="product.php?id=35" style="text-decoration: none;">
                            <img src="images/It%20perpherals/printers.jpeg" height="150px" width="190px">
                            <h6 style="color: black;margin-top : 10px;">Epson Printer</h6>
                            <h7 style="color: #388e3c;" >&#8377;10,999</h7><br>
                            <h7 style="color: #b2b2b2;">
                                Multifunction Color Printer
                            </h7>
                        </a>
                    </div>
                    <div class="text-center zoom" style="width: 200px;height: 240px;display: inline-block;">
                        <a href="product.php?id=36" style="text-decoration: none;">
                            <img src="images/It%20perpherals/ups.jpeg" height="150px" width="100px">
                            <h6 style="color: black;margin-top : 10px;">Microtek UPS</h6>
                            <h7 style="color: #388e3c;" >&#8377;2690</h7><br>
                            <h7 style="color: #b2b2b2;">
                                650 VA
                            </h7>
                        </a>
                    </div>
                    <div class=" text-center zoom" style="width: 190px;height: 280px;display: inline-block;">
                        <a href="product.php?id=37" style="text-decoration: none;">
                        <img src="images/It%20perpherals/webcams.jpeg" height="150px" width="140px" style="margin-top: 10px;">
                            <h6 style="color: black;margin-top : 10px;">Logitech Webcam</h6>
                            <h7 style="color: #388e3c;" >&#8377;1650</h7><br>
                            <h7 style="color: #b2b2b2;">
                                2 Year Warranty
                            </h7>
                        </a>
                    </div>
                </div>
            </div>  
        
    </div>
    
    <!----------------------------------------------------------------Mens fashion----------------------------------------------------------->
    
        <div style="background-color: white;margin: 5px;margin-bottom: 5px;">
            <div style="display: inline-block;width: 100%">
                <h3 style="font-size: 22px;line-height: 32px;display: inline-block;font-weight: 500;margin-left: 20px;margin-top: 10px;">Men's Fashion</h3><br>
                <div class="text-right" style="margin-right: 3%;margin-top: -40px;">
                   <a href='category.php?id=7' style="color: white;text-decoration: none;"><button type="submit" class="btn btn-md" style="color: white;background: linear-gradient(40deg,#45cafc,#303f9f);">VIEW&nbsp;ALL</button></a>
                </div>
            </div>
            <hr>
            <div class="container-fluid horizontal-scrollable">
                <div class="rows">
                    <div class="text-center zoom " style="width: 200px;height: 260px;display: inline-block;margin-bottom: 30px;">
                        <a href="product.php?id=38" style="text-decoration: none;">
                            <img src="images/mens%20clothing/capn.jpeg" height="120px" width="140px"><br>
                            <h6 style="color: black;margin-top : 10px;">BLACK EMBROIDERY Cap</h6>
                            <h7 style="color: #388e3c;" >&#8377;219</h7><br>
                            <h7 style="color: #b2b2b2;">
                                Bestsellers
                            </h7>
                        </a>
                    </div>
                    <div class=" text-center zoom " style="width: 200px;height: 280px;display: inline-block;">
                        <a href="product.php?id=39" style="text-decoration: none;">
                            <img src="images/mens%20clothing/cargo.jpeg" height="170px" width="80px" style="margin-top: 20px;" >
                            <h6 style="color: black;margin-top : 10px;">Men Cargo</h6>
                            <h7 style="color: #388e3c;" >&#8377;699</h7><br>
                            <h7 style="color: #b2b2b2;">
                                Grab or Gone
                            </h7>
                        </a>
                    </div>
                    <div class=" text-center zoom " style="width: 200px;height: 275px;display: inline-block;">
                        <a href="product.php?id=40" style="text-decoration: none;">
                            <img src="images/mens%20clothing/shirt1.jpeg" height="165px" width="140px" style="margin-top: 20px;" >
                            <h6 style="color: black;margin-top : 10px;">Chekered Shirt(Highlander)</h6>
                            <h7 style="color: #388e3c;" >&#8377;599</h7><br>
                            <h7 style="color: #b2b2b2;">
                                Best Design
                            </h7>
                        </a>
                    </div>
                    <div class=" text-center zoom " style="width: 200px;height: 280px;display: inline-block;">
                        <a href="product.php?id=41" style="text-decoration: none;">
                            <img src="images/mens%20clothing/shorts.jpeg" height="170px" width="90px" style="margin-top: 20px;" >
                            <h6 style="color: black;margin-top : 10px;">Solid Regular Short</h6>
                            <h7 style="color: #388e3c;" >&#8377;341</h7><br>
                            <h7 style="color: #b2b2b2;">
                                Grab or Gone
                            </h7>
                        </a>
                    </div>
                    <div class="text-center zoom " style="width: 200px;height: 260px;display: inline-block;">
                        <a href="product.php?id=42" style="text-decoration: none;">
                            <img src="images/mens%20clothing/trousers.jpeg" height="160px" width="130px" style="margin-top: 10px;">
                            <h6 style="color: black;margin-top : 10px;">Slim Fit Trouser</h6>
                            <h7 style="color: #388e3c;" >&#8377;775</h7><br>
                            <h7 style="color: #b2b2b2;">
                                Brand: Highlander
                            </h7>
                        </a>
                    </div>
                    <div class=" text-center zoom " style="width: 190px;height: 260px;display: inline-block;">
                        <a href="product.php?id=43" style="text-decoration: none;">
                        <img src="images/mens%20clothing/tshirt.jpeg" height="170px" width="130px" style="margin-top: 0px;" >
                            <h6 style="color: black;margin-top : 10px;">Solid Men Tshirt</h6>
                            <h7 style="color: #388e3c;" >&#8377;719</h7><br>
                            <h7 style="color: #b2b2b2;">
                                Brand: Allen Solly
                            </h7>
                        </a>
                    </div>
                </div>
            </div>  
        </div>
        
    </body> 
    <?php require('mainfooter.php'); ?>
  
</html> 