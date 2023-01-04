<?php include('authentication.php'); ?>
<?php include('includes/header.php');?>

<?php include('message.php'); ?>

                <!-- Begin Page Content -->
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
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Gender</th>
                                            <th>Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                            $query = "SELECT
                            `user`.fname, 
                            `user`.mname, 
                            `user`.lname, 
                            `user`.email, 
                            `user`.gender,
                            user_status.user_status_name
                        FROM
                            `user`
                            INNER JOIN
                            user_status
                            ON 
                                `user`.user_status = user_status.user_status_id
                        WHERE
                            `user`.user_type = 3 AND
                            `user`.user_status = 3";
                            $query_run = mysqli_query($con, $query);
                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $row)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $row['fname']; ?> <?= $row['mname']; ?> <?= $row['lname']; ?></td>
                                        <td><?= $row['email']; ?></td>
                                        <td><?= $row['gender']; ?></td>
                                        <td><?= $row['user_status_name']; ?></td>
                                        <td class="text-center"> 
                                            
                                        <!-- <a href="view_user.php?id=<?=$row['user_id'];?>" class="btn-circle btn-info btn-sm">Update</a> -->
                                        <a href="#" class="btn btn-success btn-circle mr-1">
                                        <i class="fas fa-check"></i>

                                        <a href="#" class="btn btn-danger btn-circle mr-1">
                                        <i class="fas fa-times"></i>
                                    </a>
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
                <!-- /.container-fluid -->




<?php include('includes/footer.php');?>