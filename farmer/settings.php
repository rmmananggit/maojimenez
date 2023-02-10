<?php include('authentication.php'); ?>
<?php include('includes/header.php');?>


        <ol class="breadcrumb mb-4">    
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item">Account</li>
            <li class="breadcrumb-item">Update Account</li>
        </ol>
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <h5>My Account Information</h5>
                    </div>
                    <div class="card-body">
                    <h2 hidden><?php echo $_SESSION['auth_user']['user_id']; ?></h2>

                    <?php
                 
$user_id = $_SESSION['auth_user']['user_id'];
$users = "SELECT * FROM `farmer` WHERE user_id=$user_id";
$users_run = mysqli_query($con, $users);
        ?>
        <?php
        if(mysqli_num_rows($users_run) > 0)
        {
            foreach($users_run as $user)
            {
         ?>

            <form action="code.php" method="POST" enctype="multipart/form-data">  
                    <div class="row"> 
                    <input type="hidden" name="user_id" value="<?=$user['user_id'];?>">

                                <div class="col-md-6 mb-3">
                                    <label for="">New Password</label> 
                                    <input placeholder="Enter Password" type="password" name="password"  class="form-control">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="">Confirm New Password</label> 
                                    <input placeholder="Confirm Password" type="password" name="cpassword"  class="form-control">
                                </div>

                                
                                <div class="col-md-6 mb-3">
                                  
                                </div>

                                <div class="col-md-12 mb-3 text-center">                                   
                                <hr> <h5>DOCUMENT</h5>  <hr>                                
                                </div>
                                
                                <div class="col-md-6 text-center">
                                <label for="dp">Current Profile:</label>
                                <br>
                                <?php 
                                        echo '<img class="img-fluid img-bordered-sm" src = "data:image;base64,'.base64_encode($user['profile']).'" 
                                        alt="image" style="height: 200px; width: 300px; object-fit: cover;">';
                                        ?>
                                </div>
                               
                                <div class="col-md-6">
                                <label for="">Profile:</label>
                                <br>
                                <input type="file" name="userprofile"  accept=".jpg, .jpeg, .png">
                                </div>

                                </div>
                                <div class="text-right">
                                <a href="index.php" class="btn btn-danger">Back</a>

                                <button type="submit" name="update_farmer_account" class="btn btn-primary">Save</button>
                                </div>
                               

                         
                    </div>

                    </form>

<?php
    }
}
else
{
    ?>
    <h4>No Record Found!</h4>
    <?php
}

?>
                    </div>
                </div>
            </div>
        </div>






<?php include('includes/footer.php');?>