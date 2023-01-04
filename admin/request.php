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
                                            <th>Title</th>
                                            <th>Body</th>
                                            <th>Publish</th>
                                            <th>Date Announced</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                            $query = "";
                            $query_run = mysqli_query($con, $query);
                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $row)
                                {
                                    ?>
                                    <tr>
                                    <td><?= $row['ann_id']; ?></td>
                                        <td><?= $row['ann_title']; ?></td>
                                        <td><?= $row['ann_body']; ?></td>
                                        <td><?= $row['ann_publish']; ?></td>
                                        <td><?= $row['ann_date']; ?></td>
                                        
                                        <td>    
                                        
                                        <a href="#" class="btn btn-warning btn-circle mt-1">
                                        <i class="fas fa-pen"></i>
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