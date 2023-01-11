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
                                            <th>Concern By</th>
                                            <th>Message</th>
                                            <th>Date</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                            $query = "SELECT
                            concern.concern_id, 
                            `user`.fname, 
                            `user`.mname, 
                            `user`.lname, 
                            concern.concern_message, 
                            concern.date_created
                        FROM
                            concern
                            INNER JOIN
                            `user`
                            ON 
                                concern.user_id = `user`.user_id";
                            $query_run = mysqli_query($con, $query);
                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $row)
                                {
                                    ?>
                                    <tr>
                                    <td><?= $row['concern_id']; ?></td>
                                        <td><?= $row['fname']; ?> <?= $row['mname']; ?> <?= $row['lname']; ?></td>
                                        <td><?= $row['concern_message']; ?></td>
                                        <td><?= $row['date_created']; ?></td>
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