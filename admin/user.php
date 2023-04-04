<?php include('authentication.php'); ?>
<?php include('includes/header.php');?>

                <!-- Begin Page Content -->
                <div class="container-fluid px-4">
                <ol class="breadcrumb mb-4">    
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item">Accounts</li>
            <li class="breadcrumb-item">User</li>
             </ol>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <a href="user_add.php" class="btn btn-success btn-icon-split"> 
                                        <span class="icon text-white-50">
                                        <i class="fas fa-user"></i>
                                        </span>
                                        <span class="text">Add User Account</span>
                                    </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Picture</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th class="text-center">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                            $query = "SELECT
                            `user`.user_id, 
                            `user`.fname, 
                            `user`.mname, 
                            `user`.lname, 
                            `user`.email, 
                            `user`.`password`, 
                            `user`.picture, 
                            user_type.user_name, 
                            user_status.user_status_name,
                            user_type.user_name
                        FROM
                            `user`
                            INNER JOIN
                            user_type
                            ON 
                                `user`.user_type = user_type.user_id
                            INNER JOIN
                            user_status
                            ON 
                                `user`.user_status = user_status.user_status_id
                        WHERE
                            `user`.user_status = 1";
                            $query_run = mysqli_query($con, $query);
                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $row)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $row['user_id']; ?></td>
                                        <td><?= $row['fname']; ?> <?= $row['mname']; ?> <?= $row['lname']; ?></td>
                                        <td><?php 
                                        echo '<img class="zoom img-fluid img-bordered-sm" src ="data:image;base64,'.base64_encode($row['picture']).'" 
                                        alt="image" style="height: 170px; max-width: 310px; object-fit: cover;">';
                                        ?></td>
                                        <td><?= $row['email']; ?></td>
                                        <td><?= $row['user_name']; ?></td>
                                        <td class="text-center"> 

                                        <div class="dropdown">
  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
 ACTIONS
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="user_view.php?id=<?=$row['user_id'];?>"> VIEW
    </a>
    <a class="dropdown-item" href="user_update.php?id=<?=$row['user_id'];?>" > UPDATE
    </a>

    <form action="code.php" method="POST">  
    <button type="submit" name="staff_delete" value="<?=$row['user_id']; ?>" class="dropdown-item" href="#"> DELETE
    </button> 
    </form> 
  </div>
</div>
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
<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4><strong>Add Account</strong></h4>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         

        </div>
        
      </div>
    </div>



<?php include('includes/footer.php');?>