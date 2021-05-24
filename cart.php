<?php
ob_start();
require('mainheader.php');
if(!isset($_SESSION['email']))
{
    header("location:ecomm.php");
    die();
}
$email=$_SESSION['email'];
if(isset($_GET['type1']) && $_GET['type1']!=''){
	$type=$_GET['type1'];
	if($type=='delete'){
		$id=$_GET['pid'];
		$delete_sql="delete from cart where id='$id'";
		mysqli_query($con,$delete_sql);
	}
}
unset($_GET['type1']);
unset($_GET['pid']);
$sq="select * from cart where emailid='$email'";
$res=mysqli_query($con,$sq);
$noofrows=mysqli_num_rows($res);
?>
<head>
    <style>
        .pro{
            overflow-x: auto;
            float: none;
            white-space: nowrap;
        }
        .tab1{
            text-align: center;
            border-collapse: collapse;
            width: 1000px;
            margin: auto;
            margin-top: 2%;
            margin-bottom: 10%;
        }
        .image{
            height: 40px;
            width: 22px;
        }
        #qty{
            width: 50px;
        }
        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button { 
          -webkit-appearance: none; 
          margin: 0; 
        }
        .upd{
            background-color: white;
            border: none;
            color: #007bff;
        }
        .upd:focus{
            outline: none;
        }
        .upd:hover{
            color: #303f9f;
            text-decoration: underline;
        }
        a:hover{
            color: #303f9f;
        }
        .err{
            text-align: center;
            margin-top: 10%;
            padding-bottom: 10%;
            font-size: 40px;
            font-family: monospace;
        }
        input{
            text-align: center;
        }
        .cart1{
            border-radius: 0;
            width: 250px;
            outline: none;
            border: none;
            background-color: orange;
        }
        .cart2{
            border-radius: 0;
            width: 250px;
            outline: none;
            border: none;
            background-color: whitesmoke;
        }
        .button1{
            color: black;
            text-decoration: none;
        }
        .button1:hover{
            color:black;
        }
    </style>
</head>
<?php if($noofrows==0)
{
    echo "<p class='err'>Your Cart is Empty</p>";
}
else{?>
<br>
<hr>
<div class="pro">
    <table class="tab1">
        <tr>
            <th>Name</th>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total Price</th>
            <th></th>
        </tr>
        <?php
        while($row=mysqli_fetch_assoc($res))
        { ?>
          <form action="manage_cart2.php?cid=<?php echo $row['id'] ?>" method="post" >
           <tr>
               <td>
                   <?php echo $row['name']; ?>
               </td>
               <td>
                   <img src="<?php echo "admin/product/".$row['image']?>" class="image">
               </td>
               <td>
                   &#8377;<?php echo $row['price']; ?>
               </td>
               <td>
                   <input type="number" name="qty" value="<?php echo $row['qty']; ?>" id="qty">
               </td>
               <td>
                   &#8377;<?php echo $row['total']; ?>
               </td>
               <td>
                   
                   <span><button type='submit' class="upd">Update</button></span>&nbsp;
                    <?php
                    echo "<span><a href='cart.php?type1=delete&pid=".$row['id']."'>Remove</a></span>";
                    ?>
               </td>
           </tr>
        </form>
        <?php } ?>
            <tr></tr>
           <tr></tr>
           <tr></tr>
           <tr></tr>
           <tr>
               <td>
                   <a href="ecomm.php" class="button1" style="text-decoration: none;"><button type="submit" class="btn-lg cart1" >CONTINUE SHOPPING</button></a>
               </td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td>
                   <a href="#" class="button1" style="text-decoration: none;"><button type="submit" class="btn-lg  cart2">CHECKOUT</button></a>
               </td>
           </tr>
    </table>
</div>
<?php } ?>


<?php
require('mainfooter.php');
ob_end_flush();
?>