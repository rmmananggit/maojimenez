<?php include('authentication.php'); ?>
<?php include('includes/header.php');?>

<?php include('message.php'); ?>


<div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <a href="manage_product_add.php" class="btn btn-success btn-icon-split"> 
                                        <span class="icon text-white-50">
                                            <i class="fas fa-plus"></i>
                                        </span>
                                        <span class="text">Add Product</span>
                                    </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Product Name</th>
                                            <th>Image</th>
                                            <th>Quantity</th>
                                            <th>Category</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                            $query = "SELECT
                            product.product_id, 
                            product.product_name, 
                            product.product_image, 
                            product.product_quantity, 
                            product.product_category_id, 
                            product.product_status
                        FROM
                            product";
                            $query_run = mysqli_query($con, $query);
                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $row)
                                {
                                    ?>
                                    <tr>
                                    <td><?= $row['product_id']; ?></td>
                                        <td><?= $row['product_name']; ?></td>
                                        <td><img src="img/<?php echo $row["product_image"]; ?>" class="img-responsive center-block d-block mx-auto"  width = 200 title="<?php echo $row['product_image']; ?>"></td>
                                        <td><?= $row['product_quantity']; ?></td>
                                        <td><?= $row['product_category_id']; ?></td>
                                        <td><?= $row['product_status']; ?></td>
                                        
                                        <td>    
                                        
                                        <a href="#" class="btn btn-warning btn-circle">
                                        <i class="fas fa-pen"></i>
                                    <!-- </a>
                                        <a href="view_user.php?id=<?=$row['user_id'];?>" class="btn btn-danger btn-sm">Delete</a>   -->

                                        <a href="#" class="btn btn-danger btn-circle">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                                    
                                    </tr>
                                    <?php
                                }
                            }
                            else
                            {
                            ?>
                                <tr>
                                    <td colspan="6">No Record Found</td>
                                </tr>
                            <?php
                            }
                            ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>




<?php include('includes/footer.php');?>