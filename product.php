<?php
ob_start();
require('mainheader.php');
if(!isset($_GET['id']))
{
    header("location:ecomm.php");
    die();
}
$pid=$_GET['id'];
$pid1=0;
if(isset($_SESSION['email']))
{
    $email=$_SESSION['email'];
    $sq1="select product_id from cart where product_id='$pid' and emailid='$email'";
    $res1=mysqli_query($con,$sq1);
    if($res1){
    $row1=mysqli_fetch_assoc($res1);
    $nr=mysqli_num_rows($res1);
    if($nr>0){
    $pid1=$row1['product_id'];
    }
    }
}
$sq="select * from product where id='$pid'";
$res=mysqli_query($con,$sq);
$row=mysqli_fetch_assoc($res);
?>

<head>
    <style>
        .image{
            width: 356.8px;
            height: 384px;
            margin-left: 20px;
            text-align: center;
            /*border: 1px solid black;*/
        }
        .desc{
            width: 800px;
            height: 400px;
            /*border: 1px solid black;*/
            text-align: left;
            padding-left: 30px;
            padding-top: 10px;
        }
        
        .title{
            font-size: 20px;
            margin-top: 10px;
            font-weight: 400;
        }
        .pro{
            overflow-x: auto;
            float: none;
            white-space: nowrap;
        }
        .mrp{
            font-size: 30px;
            display: inline-block;
        }
        .price{
            font-size: 16px;
            color: #b2b2b2;
            display: inline-block;
        }
        .prop{
            color: #b2b2b2;
            font-family: monospace;
            font-size: 25px;
            text-decoration: underline;
        }
        .button1{
            text-align: left;
            margin-left: 10px;
            display: inline-block;
            background-color: whitesmoke;
        }
        .button2{
            text-align: left;
            margin-left: 10px;
            display: inline-block;
            background-color: orange;
        }
        .cart{
            border-radius: 0;
            width: 250px;
            outline: none;
            border: none;
        }
        button:focus{
            outline: none;
        }
        button
    </style>
</head>

<div class="pro">
    <table>
        <tr>
            <td>
                <div class="image">
                   <?php
                    $h=$row['h'];
                    $w=$row['w'];
                    $mt=$row['mt'];
                    //echo $h.' '.$w.' '.$mt;
                    echo '<img src="admin/product/'.$row['image'].'" style="height:'.$h.'px;width:'.$w.'px;margin-top:'.$mt.'px;" >';
                    ?>
                </div>
            </td>
            <td colspan="2">
                <div class="desc" >
                    <h6 class="title"> <?php echo $row['title'] ?> </h6>
                     <h4 class="mrp"> &#8377;<?php echo $row['mrp'] ?> </h4>
                    &nbsp;  <h6 class="price"><s>&#8377;<?php echo $row['price'] ?></s></h6>
                    <br><br><br>
                    <h5 class="prop"> Product Description </h5>
                    <p> <?php echo nl2br($row['descr']); ?> </p>
                    <br>
                    <br>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="button1">
                    <?php if($pid==$pid1){ ?>
                  <?php echo "<a href='cart.php?id=".$pid."' style='text-decoration: none;color: black;'><button type='submit' class=' btn-lg cart'><i class='material-icons' style='font-size: 17px;' >shopping_cart</i>&ensp; GO TO CART </button></a>"?>
                  <?php } else{ ?>
                  <?php echo "<a href='manage_cart.php?id=".$pid."' style='text-decoration: none;color: black;'><button type='submit' class=' btn-lg cart'><i class='material-icons' style='font-size: 17px;' >shopping_cart</i>&ensp; ADD TO CART </button></a>"?>
                  <?php } ?>
                  <?php
                    if(isset($_SESSION['errmsg']))
                    {
                        $m=$_SESSION['errmsg'];
                      echo "<script>alert('$m')</script>";
                       unset($_SESSION['errmsg']);
                    }
                    ?>
                </div>
                <br>
                <br>
                <div class="button2">
                    <a href="#" style="text-decoration: none;color: black;"><button type="submit" class=" btn-lg cart" style="background-color: orange;"><i class="fas fa-bolt" style="font-size: 17px;"></i>&ensp; BUY NOW </button></a>
                </div>
            </td>
        </tr>
    </table>
</div>

<?php
require('mainfooter.php');
ob_end_flush();
?>