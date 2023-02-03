<?php include('authentication.php'); ?>
<?php include('includes/header.php');?>


<div class="container-fluid">
<ol class="breadcrumb mb-4">    
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item">Other</li>
            <li class="breadcrumb-item">Request</li>
             </ol>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 text-center">
                        <h2><strong>FARMER'S REQUEST</strong></h2>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Request Id</th>
                                            <th>Name</th>
                                            <th>Product Name</th>
                                            <th>Quantity</th>
                                            <th>Status</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                            $query = "SELECT
                            request.request_id, 
                            farmer.fname, 
                            farmer.lname,
                            farmer.mname, 
                            product.product_name, 
                            request.request_quantity, 
                            request.request_date, 
                            request_status.request_name, 
                            request.request_status
                        FROM
                            request
                            INNER JOIN
                            farmer
                            ON 
                                request.id = farmer.user_id
                            INNER JOIN
                            product
                            ON 
                                request.product_id = product.product_id
                            INNER JOIN
                            request_status
                            ON 
                                request.request_status = request_status.request_id
                        WHERE
                            request.request_status = 1";
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
                                        <td><?= $row['request_name']; ?></td>
                                        <td class="text-center">
                                    
                                        <a type="button" class="btn btn-secondary" href="request_view.php?id=<?=$row['request_id'];?>">View</a>

                                        </td>
                                    
                                    </tr>
                                    <?php
                                }
                            }
                            else
                            {
                            ?>
                                <tr>
                                    <td colspan="8">No Record Found</td>
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