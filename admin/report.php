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
                                            <th>Report By</th>
                                            <th>Message</th>
                                            <th>Photo</th>
                                            <th>Date Reported</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                            $query = "SELECT
                            report.report_id, 
                            `user`.fname, 
                            `user`.mname, 
                            `user`.lname, 
                            report.message, 
                            report.photo, 
                            report.date_created
                        FROM
                            report
                            INNER JOIN
                            `user`
                            ON 
                                report.user_id = `user`.user_id";
                            $query_run = mysqli_query($con, $query);
                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $row)
                                {
                                    ?>
                                    <tr>
                                    <td><?= $row['report_id']; ?></td>
                                        <td><?= $row['fname']; ?> <?= $row['mname']; ?> <?= $row['lname']; ?></td>
                                        <td><?= $row['message']; ?></td>
                                        <td><img src="img/<?php echo $row["photo"]; ?>" class="img-responsive center-block d-block mx-auto"  width = 200 height= 200 title="<?php echo $row['photo']; ?>"></td>
                                        <td><?= $row['date_created']; ?></td>
                                        <td>    
                                        
                                        <a href="#" class="btn btn-warning btn-circle mr-2">
                                        <i class="fas fa-check"></i> 
                                    </a>

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