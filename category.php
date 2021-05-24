<?php
ob_start();
require('mainheader.php');
if(isset($_GET['id']) && $_GET['id']!=''){
	$cat_id=$_GET['id'];
    $sq1="select categories from categories where id='$cat_id'";
    $res2=mysqli_query($con,$sq1);
    $row1=mysqli_fetch_assoc($res2);
    if(isset($_SESSION['sort']))
    {
        if($_SESSION['sort']=="Default"){

            $sq="select * from product where categories_id='$cat_id'";
            $res=mysqli_query($con,$sq);
        }
        elseif($_SESSION['sort']=="Price low to high")
        {
            $sq="select * from product where categories_id='$cat_id' order by mrp asc";
            $res=mysqli_query($con,$sq);
        }
        else{
            $sq="select * from product where categories_id='$cat_id' order by mrp desc";
            $res=mysqli_query($con,$sq);
        }
    }
    else{
        $sq="select * from product where categories_id='$cat_id'";
        $res=mysqli_query($con,$sq);
        
    //echo mysqli_num_rows($res);
    }
}
else{
    header("location:ecomm.php");
    die();
}
 ?>

<head>
    <style>
        .parent {
            margin-top: 100px;
          display: flex;
          flex-wrap: wrap;
            /*border: 1px solid black;*/
            width: 75%;
            margin: auto;
        }

        .child {
          /*flex: 1 0 21%;*/ /* explanation below */
          margin: 5px;
          width: 200px;
            margin-left: 15px;
            margin-right: 15px;
            justify-content: space-around;
            /*border: 1px solid black;*/
            text-align: center;
            height: 300px;
        }
        .topic{
            font-weight: 500;
            font-size: 24px;
            text-align: center;
            text-transform: capitalize;
            margin-top: 8px;
        }
        .count{
            text-align: center;
            margin-top: 8px;
            opacity: .4;
        }
        .t{
            margin-left: 10%;
            font-family: serif;
        }
    </style>
</head>
    <br>
    <h5 class="topic"> <?php echo $row1['categories'] ?> </h5>
    <h6 class="count"> <?php echo mysqli_num_rows($res) ?> Items </h6>
    <br>
    <hr>
    <form class="form-inline" method="post" action="category2.php?cat_id=<?php echo $cat_id ?>">
        <h5 class="t">Sort By&ensp;</h5><select class="form-control" name="sort">
           <?php if(!isset($_SESSION['sort'])) { ?>
            <option>Default</option>
            <option>Price low to high</option>
            <option>Price high to low</option>
            <?php } elseif(isset($_SESSION['sort'])){
                    if($_SESSION['sort']=="Price low to high") { ?>
                    <option>Default</option>
                    <option selected>Price low to high</option>
                    <option>Price high to low</option>
            <?php } elseif($_SESSION['sort']=="Price high to low") {?>
                    <option>Default</option>
                    <option >Price low to high</option>
                    <option selected>Price high to low</option>
            <?php } else{ ?>
                    <option selected>Default</option>
                    <option >Price low to high</option>
                    <option >Price high to low</option> 
            <?php } }  ?>    
        </select>&ensp;
        <button type="submit" name="submit" class="btn btn-primary">Go</button>
    </form>
    <br>
    <div class=" d-flex parent align-content-around flex-wrap">
     <?php
        while($row=mysqli_fetch_assoc($res))
        { ?>
           <div class="child zoom">
              <?php echo "<a href='product.php?id=".$row['id']."' style='text-decoration: none;'>"; ?> 
                  <?php
                    $h=$row['hc'];
                    $w=$row['wc'];
                    $mt=$row['mtc'];
                    //echo $h.' '.$w.' '.$mt;
                    echo '<img src="admin/product/'.$row['image'].'" style="height:'.$h.'px;width:'.$w.'px;margin-top:'.$mt.'px;" >';
                    ?>
                    <h6 style="color: black;margin-top : 10px;"> <?php echo $row['name'] ?> </h6>
                   <h7 style="color: #388e3c;" ><s>&#8377;<?php echo $row['price'] ?></s> </h7><h7 style="color: #388e3c;" >&#8377;<?php echo $row['mrp'] ?> </h7>
                <?php echo "</a>"; ?>
           </div> 
        <?php } ?>

    </div>



<?php
require('mainfooter.php');
ob_end_flush();
?>