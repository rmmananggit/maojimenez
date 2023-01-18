<?php include('authentication.php'); ?>
<?php include('includes/header.php');?>

<?php include('message.php'); ?>


<div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <a href="announcement_add.php" class="btn btn-success btn-icon-split"> 
                                        <span class="icon text-white-50">
                                        <i class="fas fa-bullhorn"></i>
                                        </span>
                                        <span class="text">Add Announcement</span>
                                    </a>
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
                            $query = "SELECT
                            announcement.*
                        FROM
                            announcement";
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
                                        
                                        <a href="announcement_edit.php?id=<?=$row['ann_id'];?>"  class="btn btn-warning btn-sm mt-1 ">UPDATE</a>
 
                                        <form action="code.php" method="POST">  
                                         <button type="submit" name="ann_delete" value="<?=$row['ann_id']; ?>" class="btn btn-danger btn-sm mt-1">DELETE</button>
                                        </form>
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