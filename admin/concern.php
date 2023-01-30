<?php include('authentication.php'); ?>
<?php include('includes/header.php');?>


<div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 text-center">
                        <h2><strong>FARMER'S CONCERN</strong></h2>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Concern Id</th>
                                            <th>Name</th>
                                            <th>Message</th>
                                            <th>Date Filed</th>    
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                            $query = "SELECT
                            concern.concern_id,
                            farmer.fname,
                            farmer.mname,
                            farmer.lname,
                            concern.concern_message,
                            concern.date_created
                            FROM
                            concern
                            INNER JOIN farmer ON concern.user_id = farmer.user_id
                            ";
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