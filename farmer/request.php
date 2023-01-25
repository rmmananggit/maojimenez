<?php include('authentication.php'); ?>
<?php include('includes/header.php');?>


<div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <div class="card-header py-3">
                        <a href="request_add.php" class="btn btn-success btn-icon-split"> 
                                        <span class="icon text-white-50">
                                        <i class="fas fa-archive"></i>
                                        </span>
                                        <span class="text">Add Request</span>
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
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    <?php

                if(isset($_SESSION['auth_user'])) 
                $currentUSER = $_SESSION['auth_user']['user_id'];
                
                            $query = "SELECT
                            request.request_id, 
                            request.id, 
                            product.product_name, 
                            request.request_quantity, 
                            request.description, 
                            request.request_date, 
                            request_status.request_name, 
                            product.product_image
                        FROM
                            request
                            INNER JOIN
                            product
                            ON 
                                request.product_id = product.product_id
                            INNER JOIN
                            farmer
                            ON 
                                request.id = farmer.user_id
                            INNER JOIN
                            request_status
                            ON 
                                request.request_status = request_status.request_id
                        WHERE
                            request.id = $currentUSER";
                            $query_run = mysqli_query($con, $query);
                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $row)
                                {
                                    ?>
                                    <tr>
                                    <td><?= $row['request_id']; ?></td>
                                        <td><?= $row['product_name']; ?></td>
                                        <td> <?php 
                                        echo '<img class="img-fluid img-bordered-sm" style="object-fit: cover;" src ="data:image;base64,'.base64_encode($row['product_image']).'" 
                                        alt="image" style="height: 170px; max-width: 310px; object-fit: cover;">';
                                        ?></td>
                                        <td class="text-center"><?= $row['request_quantity']; ?></td>
                                        <td><?= $row['description'];?></td>
                                        <td>            <?php
                                                        if($row['request_name'] == "Pending"){
                                                        ?>
                                                            <p> <span style="color: blue;">Pending</span></p>
                                                        <?php
                                                        }elseif($row['request_name'] == "Approved"){
                                                        ?>
                                                            <p><span style="color: green;">Approved</span></p>
                                                        <?php
                                                        }else{
                                                        ?>
                                                        <p><span style="color: red;">Deny</span></p>
                                                        <?php
                                                        }
                                                         ?>
                                                         </td>
                                        
                                        <td>    

                                        <a href="request_update.php?id=<?=$row['request_id'];?>" class="btn btn-warning btn-circle mr-1"> 
                                        <i class="fas fa-pen"></i> </a>
    
                                        <a class="btn btn-danger btn-circle mr-1">
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
                                    <td colspan="7">No Record Found</td>
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


</div>



<?php include('includes/footer.php');?>





