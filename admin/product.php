<?php
require('top.php');
if(isset($_GET['type']) && $_GET['type']!=''){
	$type=$_GET['type'];
	
	if($type=='delete'){
		$id=$_GET['id'];
		$delete_sql="delete from product where id='$id'";
		mysqli_query($con,$delete_sql);
	}
}
if(isset($_SESSION['cat_id'])){
    //echo 1;
    $categories_id=$_SESSION['cat_id'];
    //echo $categories_id;
    if($categories_id=="Select Category")
    {
        //echo 2;
        $sql="select product.*,categories.categories from product,categories where product.categories_id=categories.id order by product.id asc";
        $res=mysqli_query($con,$sql);
        $results_per_page = 10;
         $number_of_results = mysqli_num_rows($res);
         $number_of_pages = ceil($number_of_results/$results_per_page);
         if (!isset($_GET['page'])) {
              $page = 1;
            } else {
              $page = $_GET['page'];
            }
         $this_page_first_result = ($page-1)*$results_per_page;
         $sql="SELECT product.*,categories.categories from product,categories where product.categories_id=categories.id order by product.id asc LIMIT " . $this_page_first_result . ',' .  $results_per_page;
         $result = mysqli_query($con, $sql);
        $i=$this_page_first_result+1;
    }
    else{
        //echo $categories_id.' ';
        $sql="select product.*,categories.categories from product,categories where product.categories_id='$categories_id' and categories.id='$categories_id' order by product.id asc";
        $res=mysqli_query($con,$sql);
        //echo mysqli_num_rows($res).' ';
        $results_per_page = 10;
         $number_of_results = mysqli_num_rows($res);
         $number_of_pages = ceil($number_of_results/$results_per_page);
         if (!isset($_GET['page'])) {
              $page = 1;
            } else {
              $page = $_GET['page'];
            }
         $this_page_first_result = ($page-1)*$results_per_page;
         $sql1="SELECT product.*,categories.categories from product,categories where product.categories_id='$categories_id' and categories.id='$categories_id' order by product.id asc LIMIT " . $this_page_first_result . ',' .  $results_per_page;
         $result = mysqli_query($con, $sql1);
        //echo mysqli_num_rows($result);
        $i=$this_page_first_result+1;
    }
}
else{
    //echo 2;
    $sql="select product.*,categories.categories from product,categories where product.categories_id=categories.id order by product.id asc";
    $res=mysqli_query($con,$sql);
    $results_per_page = 10;
     $number_of_results = mysqli_num_rows($res);
     $number_of_pages = ceil($number_of_results/$results_per_page);
     if (!isset($_GET['page'])) {
          $page = 1;
        } else {
          $page = $_GET['page'];
        }
     $this_page_first_result = ($page-1)*$results_per_page;
     $sql="SELECT product.*,categories.categories from product,categories where product.categories_id=categories.id order by product.id asc LIMIT " . $this_page_first_result . ',' .  $results_per_page;
     $result = mysqli_query($con, $sql);
    $i=$this_page_first_result+1;
}
?>
<html>
    <head>
      <style>
          .size{
              width: 30px;
              height: 50px;
          }
          .links{
              text-align: center;
              letter-spacing: 5px;
          }
        </style>  
    </head>
    <body>
        <div class=" pb-0">
            <div >
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h5 class="box-title">Products </h5>
                           <h6 class="box-link"><a href="manage_products.php">Add Product</a> </h6>
                           <form action="product2.php" class="form-inline" method="post">
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
                                &ensp;&ensp;
                            <button type="submit" name="submit" class="btn btn-primary">OK</button>
                          </form>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial">#</th>
                                       <th>ID</th>
                                       <th>Categories</th>
                                       <th>Name</th>
                                       <th>Image</th>
                                       <th>MRP</th>
                                       <th>Price</th>
                                       <th>Qty</th>
                                       <th></th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                    while($row=mysqli_fetch_assoc($result)){?>
                                    <tr>
                                       <td class="serial"><?php echo $i?></td>
                                       <td><?php echo $row['id']?></td>
                                       <td><?php echo $row['categories']?></td>
                                       <td><?php echo $row['name']?></td>
                                       <td><img class="size" src="<?php echo "product/".$row['image']?>"/></td>
                                       <td><?php echo $row['mrp']?></td>
                                       <td><?php echo $row['price']?></td>
                                       <td><?php echo $row['qty']?></td>
                                       <td>
                                        <?php
                                        echo "<span class='badge badge-edit'><a href='manage_products.php?id=".$row['id']."'>Edit</a></span>&nbsp;";

                                        echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['id']."'>Delete</a></span>";

                                        ?>
                                       </td>
                                    </tr>
                                    <?php $i++;}
                                    ?>
                                 </tbody>
                              </table>
                              <div class="links">
                                  <?php
                                   for ($page=1;$page<=$number_of_pages;$page++) {
                                      echo ' '.'<a href="product.php?page=' . $page . '">' . $page . '</a> '.' ';
                                   }
                                   ?>
                               </div>
                           </div>
                        </div>
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

