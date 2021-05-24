
<?php
require('top.php');
$categories_id='';
$name='';
$mrp='';
$price='';
$qty='';
$image='';
$desc='';
$title='';
$h='';
$w='';
$mt='';
$hc='';
$wc='';
$mtc='';
$msg='';
$image_required='required';
if(isset($_GET['id']) && $_GET['id']!=''){
	$image_required='';
	$id=$_GET['id'];
	$res=mysqli_query($con,"select * from product where id='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		$categories_id=$row['categories_id'];
		$name=$row['name'];
		$mrp=$row['mrp'];
		$price=$row['price'];
		$qty=$row['qty'];
		$desc=$row['descr'];
		$title=$row['title'];
        $image=$row['image'];
        $h=$row['h'];
        $w=$row['w'];
        $mt=$row['mt'];
        $hc=$row['hc'];
        $wc=$row['wc'];
        $mtc=$row['mtc'];
	}else{
		header('location:product.php');
		die();
	}
}

if(isset($_POST['submit'])){
	$categories_id=$_POST['categories_id'];
	$name=$_POST['name'];
	$mrp=$_POST['mrp'];
	$price=$_POST['price'];
	$qty=$_POST['qty'];
	$desc=$_POST['descr'];
    $desc=str_replace("'", '', $desc);
	$title=$_POST['title'];
    $title=str_replace("'", '', $title);
    $h=$_POST['h'];
    $w=$_POST['w'];
    $mt=$_POST['mt'];
    $hc=$_POST['hc'];
    $wc=$_POST['wc'];
    $mtc=$_POST['mtc'];
    //echo $h.' '.$w.' '.$mt;
	
	$res=mysqli_query($con,"select * from product where name='$name'");
	$check=mysqli_num_rows($res);
	if($check>0){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$getData=mysqli_fetch_assoc($res);
            //echo $id.' '.$getData['id'];
			if($id==$getData['id']){
			}else{
				$msg="Product already exist";
			}
		}else{
			$msg="Product already exist";
		}
	}
	
	
	/*if($_GET['id']==0){
		if($_FILES['image']['type']!='image/png' && $_FILES['image']['type']!='image/jpg' && $_FILES['image']['type']!='image/jpeg'){
			$msg="Please select only png,jpg and jpeg image formate";
		}
	}else{
		if($_FILES['image']['type']!=''){
				if($_FILES['image']['type']!='image/png' && $_FILES['image']['type']!='image/jpg' && $_FILES['image']['type']!='image/jpeg'){
				$msg="Please select only png,jpg and jpeg image formate";
			}
		}
	}*/
	
	if($msg==''){
		if(isset($_GET['id']) && $_GET['id']!=''){
			if($_FILES['image']['name']!=''){
				$image=$_FILES['image']['name'];
				move_uploaded_file($_FILES['image']['tmp_name'],'product/'.$_FILES['image']['name']);
				$update_sql="update product set categories_id='$categories_id',name='$name',mrp='$mrp',price='$price',qty='$qty',title='$title',image='$image',h='$h',w='$w',mt='$mt',hc='$hc',wc='$wc',mtc='$mtc' where id='$id'";
                $update_descr="update product set descr='$desc' where id='$id'";
                $r1=mysqli_query($con,$update_descr);
                $r=mysqli_query($con,$update_sql);
			}else{
				$update_sql="update product set categories_id='$categories_id',name='$name',mrp='$mrp',price='$price',qty='$qty',title='$title',image='$image',h='$h',w='$w',mt='$mt',hc='$hc',wc='$wc',mtc='$mtc' where id='$id'";
                $update_descr="update product set descr='$desc' where id='$id'";
                $r1=mysqli_query($con,$update_descr);
                $r=mysqli_query($con,$update_sql);
                
			}
            /*echo $desc;
            if($r1){
                echo "inserted";
            }
            else{
                echo "not inserted";
            }*/
		}else{
			$image=$_FILES['image']['name'];
			move_uploaded_file($_FILES['image']['tmp_name'],'product/'.$_FILES['image']['name']);
			$sq=mysqli_query($con,"insert into product(categories_id,name,mrp,price,qty,descr,title,image,h,w,mt,hc,wc,mtc) values('$categories_id','$name','$mrp','$price','$qty','$desc','$title','$image','$h','$w','$mt','$hc','$wc','$mtc')");
            //echo $desc;
		}
		header('location:product.php');
		die();
	}
}
?>
<html>
    <head>
    </head>
    <body>
        <div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Product</strong><small> Form</small></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
							   <div class="form-group">
									<label for="categories" class=" form-control-label">Categories</label>
									<select class="form-control" name="categories_id">
										<option>Select Category</option>
										<?php
										$res=mysqli_query($con,"select id,categories from categories order by id asc");
										while($row=mysqli_fetch_assoc($res)){
											if($row['id']==$categories_id){
												echo "<option selected value=".$row['id'].">".$row['categories']."</option>";
											}else{
												echo "<option value=".$row['id'].">".$row['categories']."</option>";
											}
											
										}
										?>
									</select>
								</div>
								<div class="form-group">
									<label for="categories" class=" form-control-label">Product Name</label>
									<input type="text" name="name" placeholder="Enter product name" class="form-control" required value="<?php echo $name?>">
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">MRP</label>
									<input type="text" name="mrp" placeholder="Enter product mrp" class="form-control" required value="<?php echo $mrp?>">
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Price</label>
									<input type="text" name="price" placeholder="Enter product price" class="form-control" required value="<?php echo $price?>">
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Qty</label>
									<input type="text" name="qty" placeholder="Enter qty" class="form-control" required value="<?php echo $qty?>">
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Image</label>
									<input type="file"  name="image" class="form-control" <?php echo  $image_required?> value="<?php echo $image?>">
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label"> Description</label>
									<textarea name="descr" placeholder="Enter product description" class="form-control" style="height: 200px;" required><?php echo $desc?></textarea>
								</div>
								
								
								<div class="form-group">
									<label for="categories" class=" form-control-label"> Title</label>
									<textarea name="title" placeholder="Enter product title" class="form-control"><?php echo $title?></textarea>
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label"> Height of the Image</label>
									<input type="number" placeholder="Enter image height" class="form-control" value="<?php echo $h?>" name="h">
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label"> Width of the Image </label>
									<input type="number" placeholder="Enter image width" class="form-control" value="<?php echo $w?>" name="w">
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">  Margin from Top</label>
									<input type="number" placeholder="Enter image margin from top" class="form-control" value="<?php echo $mt?>" name="mt">
								</div>
								<div class="form-group">
									<label for="categories" class=" form-control-label"> Height of the Image on category page</label>
									<input type="number" placeholder="Enter image height" class="form-control" value="<?php echo $hc?>" name="hc">
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label"> Width of the Image on category page</label>
									<input type="number" placeholder="Enter image width" class="form-control" value="<?php echo $wc?>" name="wc">
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">  Margin from Top on category page</label>
									<input type="number" placeholder="Enter image margin from top" class="form-control" value="<?php echo $mtc?>" name="mtc">
								</div>
								
							   <button name="submit" type="submit" class="btn btn-md btn-info ">
							   <span >Submit</span>
							   </button>
							   <div class="field_error"><?php echo $msg?></div>
							</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
    </body>
    <?php
    require('footer.php');
    ?>
</html>

         
