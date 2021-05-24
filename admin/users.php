<?php
require('top.php');
if(isset($_GET['type']) && $_GET['type']!=''){
	$type=$_GET['type'];
	if($type=='delete'){
		$id=$_GET['id'];
		$delete_sql="delete from signup where Emailid='$id'";
        $delete_login="delete from login where Emailid='$id'";
        $delete_cart="delete from cart where emailid='$id'";
		mysqli_query($con,$delete_sql);
        mysqli_query($con,$delete_login);
        mysqli_query($con,$delete_cart);
	}
}

$sql="select * from signup order by Emailid desc";
$res=mysqli_query($con,$sql);
?>
<html>
    <body >
        <div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h5 class="box-title">Users </h5>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial">#</th>
                                       <th>Email-Id</th>
                                       <th>Name</th>
                                       <th>Mobile No</th>
                                       <th>Gender</th>
                                       <th>Address</th>
                                       <th></th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php 
                                    $i=1;
                                    while($row=mysqli_fetch_assoc($res)){?>
                                    <tr>
                                       <td class="serial"><?php echo $i?></td>
                                       <td><?php echo $row['Emailid']?></td>
                                       <td><?php echo $row['Name']?></td>
                                       <td><?php echo $row['mobno']?></td>
                                       <td><?php echo $row['gender']?></td>
                                       <td><?php echo $row['address']?></td>
                                       <td>
                                        <?php
                                        echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['Emailid']."'>Delete</a></span>";
                                        ?>
                                       </td>
                                    </tr>
                                    <?php $i++; } ?>
                                 </tbody>
                              </table>
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

