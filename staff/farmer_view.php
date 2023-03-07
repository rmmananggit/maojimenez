<?php include('authentication.php'); ?>
<?php include('includes/header.php');?>


        <ol class="breadcrumb mb-4">    
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item">Farmer</li>
            <li class="breadcrumb-item">View Farmer Account</li>
        </ol>
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mt-1">
                    <div class="card-header">
                    <h5>Farmer Information</h5>
                    </div>
                    <div class="card-body">
                    <?php
                        if(isset($_GET['id']))
                        {
                            $id = $_GET['id'];
                            $users = "SELECT * FROM farmer WHERE user_id='$id' ";
                            $users_run = mysqli_query($con, $users);

                            if(mysqli_num_rows($users_run) > 0)
                            {
                                foreach($users_run as $user)
                                {
                             ?>
                    
 
                    <form action="code.php" method="POST" autocomplete="off" enctype="multipart/form-data"> 
                    <div class="row"> 
                                <div class="col-md-4 mb-3">
                                    <label for="">Last Name</label>
                                    <p class="form-control-plaintext"><?=$user['lname'];?></p>
                                </div> 
                            

                                <div class="col-md-4 mb-3">
                                    <label for="">Middle Name</label>
                                    <p class="form-control-plaintext"><?=$user['mname'];?></p>
                                </div>


                                <div class="col-md-4 mb-3">
                                    <label for="">First Name</label>
                                    <p class="form-control-plaintext"><?=$user['fname'];?></p>
                                </div>
                                

                                <div class="col-md-3 mb-3">
                                    <label for="">Gender</label>
                                    <p class="form-control-plaintext"><?=$user['gender'];?></p>
                                </div>

                             
                                <div class="col-md-12 mb-3">
                                <hr>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="">Email Address</label>
                                    <p class="form-control-plaintext"><?=$user['email'];?></p>
                                </div>


                                <div class="col-md-12 mb-3">
                                <hr>
                                </div>

                                <div class="col-md-4 mb-3">   
                                    <label for="">Purok</label>
                                    <p class="form-control-plaintext"><?=$user['purok'];?></p>
                                </div>
                                 <!-- done  -->

                                <div class="col-md-4 mb-3">
                                    <label for="">Street/Sitio</label>
                                    <p class="form-control-plaintext"><?=$user['street'];?></p>
                                </div>
                                <!-- done -->
                                <div class="col-md-4 mb-3">
                                <div class="form-group">
                                            <label for="address">Municipality</label>
                                           
                                            <p class="form-control-plaintext"><?=$user['barangay'];?></p>
                                        </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="">Municipality/City</label>
                                    <h6>Jimenez</h6>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="">Province</label>
                                    <h6>Misamis Occidental</h6>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="">Region</label>
                                    <h6>10</h6>
                                </div>

                                <div class="col-md-12 mb-3">
                                <hr>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="">Mobile Number</label>
                                    <p class="form-control-plaintext"><?=$user['phone'];?></p>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="">Religion</label>
                                    <p class="form-control-plaintext"><?=$user['religion'];?></p>
                                </div>

                                <div class="col-md-3 mb-3">
                                <label class="control-label" for="date">Date of Birth</label>
                                <p class="form-control-plaintext"><?=$user['birthday'];?></p>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="">Place of Birth</label>
                                    <p class="form-control-plaintext"><?=$user['birthplace'];?></p>
                                </div>

                                
                                <div class="col-md-12 mb-3">
                                <hr>
                                </div> 

                                <div class="col-md-4 mb-3">
                                <label for="">Civil Status</label>
                                <p class="form-control-plaintext"><?=$user['civil_status'];?></p>
                                </div>

                              

                                <div class="col-md-4 mb-3">
                                <label for="">Person with Disability (PWD)</label>
                                <p class="form-control-plaintext"><?=$user['pwd'];?></p>
                                </div>

                                <div class="col-md-4 mb-3">
                                <label for="">4P's Beneficiary?</label>
                                <p class="form-control-plaintext"><?=$user['4ps'];?></p>
                                </div>

                                <div class="col-md-4 mb-3">
                                </div>

                                <div class="col-md-12 mb-3">
                                <hr>
                                </div>

                                <div class="col-md-4 mb-3">
                                <label for="">Member of an <strong>Indigenous Group</strong>?</label>
                                <p class="form-control-plaintext"><?=$user['ig'];?></p>
                                </div>

                                <div class="col-md-8 mb-3">
                                    <label for="">If yes, specify:</label>
                                    <p class="form-control-plaintext"><?=$user['igspecify'];?></p>
                                </div>

                                <div class="col-md-4 mb-3">
                                <label for="">With <strong>Government ID</strong>?</label>
                                <p class="form-control-plaintext"><?=$user['govid'];?></p>
                                </div>

                                <div class="col-md-8 mb-3">
                                    <label for="">If yes, specify:</label>
                                    <p class="form-control-plaintext"><?=$user['govspecify'];?></p>
                                </div>

                                <div class="col-md-4 mb-3">
                                <label for="">Member of any <strong>Farmers Association/Cooperative</strong>?</label>
                                <p class="form-control-plaintext"><?=$user['farmersassoc'];?></p>
                                </div>
                                
                                
                                <div class="col-md-8 mb-3">
                                    <label for="">If yes, specify:</label>
                                    <p class="form-control-plaintext"><?=$user['farmersassoc_specify'];?></p>
                                </div>

                                <div class="col-md-12 mb-3 text-center">                                   
                                <hr> <h5>FARM PROFILE</h5>  <hr>                                
                                </div>
                                
                                <div class="col-md-12 mb-3">
                                <label for=""><strong>Main Livelihood</strong></label>
                                <p class="form-control-plaintext"><?=$user['farmprofile'];?></p>
                                </div>



                               <div class="col-md-12 mb-3 text-center">                                   
                                <hr> <h5>DOCUMENT</h5>  <hr>                                
                                </div>

                               <div class="col-md-6 mb-3 ml-4">                             
                               <label for="profilepicture">Upload 2x2 Picture </label> <br>
                               <?php 
                                        echo '<img class="img-fluid img-bordered-sm" src = "data:image;base64,'.base64_encode($user['profile']).'" 
                                        alt="image" style="height: 170px; max-width: 310px; object-fit: cover;">';
                                        ?>
                               </div>

                            
                                </div>
                                <div class="text-right">
                                <a href="farmer_account.php" class="btn btn-danger">Back</a>
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
                        }
?>

                            </div>
                          
                    </div>
                </div>
            </div>
        </div>






<?php include('includes/footer.php');?>