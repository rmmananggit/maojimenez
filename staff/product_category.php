<?php include('authentication.php'); ?>
<?php include('includes/header.php');?>

<?php include('message.php'); ?>


<div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <a href="product_category_add.php" class="btn btn-success btn-icon-split"> 
                                        <span class="icon text-white-50">
                                        <i class="fas fa-clipboard-list"></i>
                                        </span>
                                        <span class="text">Add Category</span>
                                    </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Category Name</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                            $query = "SELECT
                            *, 
                            product_category.*
                        FROM
                            product_category";
                            $query_run = mysqli_query($con, $query);
                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $row)
                                {
                                    ?>
                                    <tr>
                                    <td><?= $row['product_category_id']; ?></td>
                                        <td><?= $row['category_name']; ?></td>
                                        <td><?= $row['category_description']; ?></td>
                                        <td><?= $row['category_status']; ?></td>
                                        <td class="text-center">    
                                        
                                        <a href="product_category_edit.php?id=<?=$row['product_category_id'];?>" class="btn btn-warning btn-sm mt-1">
                                        UPDATE </a>

                                        <form action="code.php" method="POST">  
                                         <button type="submit" name="category_delete" value="<?=$row['product_category_id']; ?>" class="btn btn-danger btn-sm mt-1">DELETE</button>
                                        </form>
                                     
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