<?php include('authentication.php'); ?>
<?php include('includes/header.php');?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                <ol class="breadcrumb mb-4">    
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item">Farmer</li>
                </ol>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <a href="farmer_add.php" class="btn btn-success btn-icon-split"> 
                                        <span class="icon text-white-50">
                                        <i class="fas fa-user"></i>
                                        </span>
                                        <span class="text">Add Farmer Account</span>
                                    </a>
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
                            farmer.user_id,
                            farmer.lname, 
                            farmer.mname, 
                            farmer.fname, 
                            farmer.gender, 
                            farmer.email, 
                            user_status.user_status_name
                        FROM
                            farmer
                            INNER JOIN
                            user_status
                            ON 
                                farmer.user_status = user_status.user_status_id";
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
                                            
                                        <div class="dropdown show">
  <a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    ACTION
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="farmer_view.php?id=<?=$row['user_id'];?>">View</a>
    <a class="dropdown-item" href="#">Update</a>
    <a class="dropdown-item" href="#">Delete</a>
  </div>
</div>
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
         

        <form action="code.php" method="POST">
                            <div class="row">

                            <div class="col-md-12 mb-3">
                                    <label for=""><strong>School I.D</strong></label>
                                    <input required type="text" name="schoolid" class="form-control">
                                </div>
                            
                              <div class="col-md-12 mb-3">
                                    <label for=""><strong>Username</strong></label>
                                    <input required type="text" name="username" class="form-control">
                               </div>


                                <div class="col-md-12 mb-3">
                                    <label for=""><strong>First Name</strong></label>
                                    <input required type="text" name="fname" class="form-control">
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for=""><strong>Middle Name</strong></label>
                                    <input required type="text" name="mname" class="form-control">
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for=""><strong>Last Name</strong></label>
                                    <input required type="text" name="lname" class="form-control">
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for=""><strong>Email</strong></label>
                                    <input required type="text" name="email" class="form-control">
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for=""><strong>Mobile Number</strong></label>
                                    <input required type="text" name="mobilenumber" class="form-control">
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for=""><strong>Fines</strong></label>
                                    <input required type="text" name="fines" class="form-control">
                                </div>

                                <div class="col-md-12 mb-3">
                                <label for=""><strong>Role</strong></label>
                                <select name="role_as" required class="form-control">
                                        <option value="">--Select Role--</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Student</option>
                                        <option value="3">Secretary</option>
                                        <option value="4">Treasurer</option>
                                        <option value="5">Parent</option>
                                </select>
                                </div>

                                <div class="col-md-12 mb-3">
                                <label for=""><strong>Status</strong></label>
                                <select name="status" required class="form-control">
                                        <option value="">--Select Status--</option>
                                        <option value="1">Active</option>
                                        <option value="2">Inactive</option>
                                </select>
                                </div>

                                  <br>
                                  <hr class="mt-2 mb-3"/>
                                  <div class="col-md-12 mb-3">
                                  <button type="button" class="btn btn-danger float-end" data-dismiss="modal">Close</button>
                                    <button type="submit" name="add_student" class="btn btn-primary float-end">Add User</button>
                                  </div>
                                </div>
                            </div>
                        </form>
        </div>
        
      </div>
    </div>



<?php include('includes/footer.php');?>