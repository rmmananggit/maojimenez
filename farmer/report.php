<?php include('authentication.php'); ?>
<?php include('includes/header.php');?>


<div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <a href="report_add.php" class="btn btn-success btn-icon-split"> 
                                        <span class="icon text-white-50">
                                        <i class="fas fa-archive"></i>
                                        </span>
                                        <span class="text">Add Report</span>
                                    </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Message</th>
                                            <th>Photo #1</th>
                                            <th>Photo #2</th>
                                            <th>Date Reported</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                            if(isset($_SESSION['auth_user'])) 
                                            $currentUSER = $_SESSION['auth_user']['user_id'];

                            $query = "SELECT
                                        report.report_id, 
                                        report.message, 
                                        report.photo, 
                                        report.photo1, 
                                        report.date_created
                                        FROM
                                        report
                                        WHERE
                                        report.user_id = $currentUSER";
                            $query_run = mysqli_query($con, $query);
                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $row)
                                {
                                    ?>
                                    <tr>
                                    <td><?= $row['report_id']; ?></td>
                                        <td><?= $row['message']; ?></td>
                                        <td> <?php 
                                        echo '<img class="img-fluid img-bordered-sm" src = "data:image;base64,'.base64_encode($row['photo']).'" 
                                        alt="image" style="height: 170px; max-width: 310px; object-fit: cover;">';
                                        ?></td>
                                        <td>
                                        <?php 
                                        echo '<img class="img-fluid img-bordered-sm" src = "data:image;base64,'.base64_encode($row['photo1']).'" 
                                        alt="image" style="height: 170px; max-width: 310px; object-fit: cover;">'; ?>
                                        </td>
                                        <td><?= $row['date_created']; ?></td>
                      
                                        
                                        <td>    
                                        
                                        <a href="manage_product_update.php?id=<?=$row['product_id'];?>" class="btn btn-warning btn-circle mr-1">
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






<?php include('includes/footer.php');?>