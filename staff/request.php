<?php include('authentication.php'); ?>
<?php include('includes/header.php');?>

<?php include('message.php'); ?>


<div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Requested By</th>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Request Date</th>
                                            <th>Request Status</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                            $query = "SELECT
                            `user`.fname, 
                            `user`.mname, 
                            `user`.lname, 
                            product.product_name, 
                            request.request_id, 
                            request.request_quantity, 
                            request.request_date, 
                            request.request_status
                        FROM
                            request
                            INNER JOIN
                            `user`
                            ON 
                                request.user_id = `user`.user_id
                            INNER JOIN
                            product
                            ON 
                                request.product_id = product.product_id";
                            $query_run = mysqli_query($con, $query);
                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $row)
                                {
                                    ?>
                                    <tr>
                                    <td><?= $row['request_id']; ?></td>
                                        <td><?= $row['fname']; ?> <?= $row['mname']; ?> <?= $row['lname']; ?></td>
                                        <td><?= $row['product_name']; ?></td>
                                        <td><?= $row['request_quantity']; ?></td>
                                        <td><?= $row['request_date']; ?></td>
                                        <td><?= $row['request_status']; ?></td>
                                        <td>    
                                        
                                        <a href="#" class="btn btn-warning btn-circle mr-2">
                                        <i class="fas fa-check"></i> 
                                    <!-- </a>
                                        <a href="view_user.php?id=<?=$row['user_id'];?>" class="btn btn-danger btn-sm">Delete</a>   -->

                                         <a href="#" class="btn btn-danger btn-circle mt-1">
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