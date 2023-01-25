<?php include('authentication.php'); ?>
<?php include('includes/header.php');?>


<div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <div class="card-header py-3">
                        <a href="concern_add.php" class="btn btn-success btn-icon-split"> 
                                        <span class="icon text-white-50">
                                        <i class="fas fa-archive"></i>
                                        </span>
                                        <span class="text">Add Concern</span>
                                    </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Message</th>
                                            <th>Date Submitted</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    <?php

                if(isset($_SESSION['auth_user'])) 
                $currentUSER = $_SESSION['auth_user']['user_id'];
                
                        $query = "SELECT `concern_id`, `user_id`, `concern_message`, `date_created` FROM `concern` WHERE user_id= $currentUSER";
                            $query_run = mysqli_query($con, $query);
                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $row)
                                {
                                    ?>
                                    <tr>
                                    <td><?= $row['concern_id']; ?></td>
                                        <td><?= $row['concern_message']; ?></td>
                                        <td><?= $row['date_created']; ?></td>
                                    <td>
                                        <a href="concern_update.php?id=<?=$row['concern_id'];?>" class="btn btn-warning btn-circle mr-1">
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