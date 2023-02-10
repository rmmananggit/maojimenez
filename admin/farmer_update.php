<?php include('authentication.php'); ?>
<?php include('includes/header.php');?>


        <ol class="breadcrumb mb-4">    
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item">Farmer</li>
            <li class="breadcrumb-item">Add Account</li>
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
                                    <input  placeholder="Enter First Name" value="<?= $user['lname']; ?>" type="text" name="lname" class="form-control">
                                </div> 
                            

                                <div class="col-md-4 mb-3">
                                    <label for="">Middle Name (Type N/A if not available)</label>
                                    <input  placeholder="Enter Middle Name" type="text" value="<?= $user['mname']; ?>" name="mname" class="form-control">
                                </div>


                                <div class="col-md-4 mb-3">
                                    <label for="">First Name</label>
                                    <input  placeholder="Enter First Name" type="text" value="<?= $user['fname']; ?>" name="fname" class="form-control">
                                </div>
                                

                                <div class="col-md-3 mb-3">
                                    <label for="">Gender</label>
                                    <br>
                                    <input  class="ml-2" type="radio" name="gender" <?php if($user['gender']=="Male") {?> <?php echo "checked";?> <?php }?> value="Male"> Male
                                    <input  class="ml-2"  type="radio" name="gender" <?php if($user['gender']=="Female") {?> <?php echo "checked";?> <?php }?> value="Female"> Female
                                </div>

                             
                                <div class="col-md-12 mb-3">
                                <hr>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="">Email Address</label>
                                    <input  placeholder="Enter Email Address" type="email" value="<?= $user['email']; ?>" name="email" class="form-control">
                                </div>


                                <div class="col-md-12 mb-3">
                                <hr>
                                </div>

                                <div class="col-md-4 mb-3">   
                                    <label for="">Purok</label>
                                    <input  placeholder="Enter Purok No." type="text" value="<?= $user['purok']; ?>" name="purok" class="form-control">
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="">Street/Sitio</label>
                                    <input  placeholder="Enter Street/Sitio" value="<?= $user['street']; ?>" type="text" name="street" class="form-control">
                                </div>

                                <div class="col-md-4 mb-3">
                                <div class="form-group">
                                            <label for="address">Municipality</label>
                                            <select class="form-control" name="barangay" id="barangay">
                                              <option value="Adorable">Adorable</option>    
                                              <option value="Butuay">Butuay</option> 
                                              <option value="Carmen">Carmen</option> 
                                              <option value="Corrales">Corrales</option> 
                                              <option value="Corrales">Corrales</option> 
                                              <option value="Gata">Gata</option> 
                                              <option value="Guintomoyan">Guintomoyan</option> 
                                              <option value="Malibacsan">Malibacsan</option> 
                                              <option value="Macabayao">Macabayao</option> 
                                              <option value="Matugas Alto">Matugas Alto</option> 
                                              <option value="Matugas Bajo">Matugas Bajo</option> 
                                              <option value="Mialem">Mialem</option> 
                                              <option value="Naga">Naga</option> 
                                              <option value="Palilan">Palilan</option> 
                                              <option value="Nacional">Nacional</option> 
                                              <option value="Rizal">Rizal</option> 
                                              <option value="Santa Cruz">Santa Cruz</option>
                                              <option value="Sibaroc">Sibaroc</option>
                                              <option value="Sinara Alto">Sinara Alto</option>
                                              <option value="Sinara Bajo">Sinara Bajo</option>
                                              <option value="Seti">Seti</option>
                                              <option value="Tabo-o">Tabo-o</option>
                                              <option value="Taraka">Taraka</option>
                                            </select>
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
                                    <input  placeholder="Enter Mobile Number" value="<?= $user['phone']; ?>" type="text" name="phone" class="form-control">
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="">Religion</label>
                                    <input  placeholder="Enter Religion" type="text" value="<?= $user['religion']; ?>" name="religion" class="form-control">
                                </div>

                                <div class="col-md-3 mb-3">
                                <label class="control-label" for="date">Date of Birth</label>
                                 <input class="form-control" id="date" value="<?= $user['birthday']; ?>" name="dob" placeholder="MM/DD/YYY" type="date"/>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="">Place of Birth</label>
                                    <input  placeholder="Enter Place of Birth" type="text" name="placeofbirth" value="<?= $user['birthplace']; ?>" class="form-control">
                                </div>

                                
                                <div class="col-md-12 mb-3">
                                <hr>
                                </div> 

                                <div class="col-md-6 mb-3">
                                <label for="">Civil Status</label>
                                    <select name="civilstatus"  class="form-control">
                                        <option value="None" selected="true" disabled="disabled">--Select Civil Status--</option>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Widowed">Widowed</option>
                                        <option value="Separated">Separated</option>
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3">
                                 
                                </div>

                                <div class="col-md-4 mb-3">
                                <label for="">Person with Disability (PWD)</label>
                                <br>
                                <input  class="ml-2" type="radio" <?php if($user['pwd']=="Yes") {?> <?php echo "checked";?> <?php }?> name="pwd" value="Yes"> Yes
                                <input  class="ml-2" type="radio" <?php if($user['pwd']=="No") {?> <?php echo "checked";?> <?php }?> name="pwd" value="No"> No
                                </div>

                                <div class="col-md-4 mb-3">
                                <label for="">4P's Beneficiary?</label>
                                <br>
                                <input  class="ml-2" type="radio" <?php if($user['4ps']=="Yes") {?> <?php echo "checked";?> <?php }?> name="fourps" value="Yes"> Yes
                                <input  class="ml-2" type="radio" <?php if($user['4ps']=="No") {?> <?php echo "checked";?> <?php }?> name="fourps" value="No"> No
                                </div>

                                <div class="col-md-4 mb-3">
                                </div>

                                <div class="col-md-12 mb-3">
                                <hr>
                                </div>

                                <div class="col-md-4 mb-3">
                                <label for="">Member of an <strong>Indigenous Group</strong>?</label>
                                <br>
                                <input  class="ml-2" type="radio" <?php if($user['ig']=="Yes") {?> <?php echo "checked";?> <?php }?> name="ig" value="Yes"> Yes
                                <input  class="ml-2" type="radio" <?php if($user['ig']=="No") {?> <?php echo "checked";?> <?php }?> name="ig" value="No"> No
                                </div>

                                <div class="col-md-8 mb-3">
                                    <label for="">If yes, specify:</label>
                                    <input  placeholder="" type="text" name="igyes" value="<?= $user['igspecify']; ?>" class="form-control">
                                </div>

                                <div class="col-md-4 mb-3">
                                <label for="">With <strong>Government ID</strong>?</label>
                                <br>
                                <input  class="ml-2" type="radio" <?php if($user['govid']=="Yes") {?> <?php echo "checked";?> <?php }?> name="govid" value="Yes"> Yes
                                <input  class="ml-2" type="radio" <?php if($user['govid']=="No") {?> <?php echo "checked";?> <?php }?> name="govid" value="No"> No
                                </div>

                                <div class="col-md-8 mb-3">
                                    <label for="">If yes, specify:</label>
                                    <input  placeholder="" type="text" name="govidyes" class="form-control" value="<?= $user['govspecify']; ?>">
                                </div>

                                <div class="col-md-4 mb-3">
                                <label for="">Member of any <strong>Farmers Association/Cooperative</strong>?</label>
                                <br>
                                <input  class="ml-2" type="radio" type="radio" <?php if($user['farmersassoc']=="Yes") {?> <?php echo "checked";?> <?php }?> name="fac" value="Yes"> Yes
                                <input  class="ml-2"  type="radio" type="radio" <?php if($user['farmersassoc']=="No") {?> <?php echo "checked";?> <?php }?> name="fac" value="No"> No
                                </div>

                                
                                <div class="col-md-8 mb-3">
                                    <label for="">If yes, specify:</label>
                                    <input  placeholder="" type="text" name="facyes" class="form-control"  value="<?= $user['farmersassoc_specify']; ?>">
                                   
                                </div>

                               <div class="col-md-12 mb-3 text-center">                                   
                                <hr> <h5>DOCUMENT</h5>  <hr>                                
                                </div>

                               <div class="col-md-4 mb-3 ml-4">                             
                               <label for="profilepicture">Upload 2x2 Picture </label> <br>
                                <input type="file" name="profilepicture" accept=".jpg, .jpeg, .png" value="">
                               </div>

                               <div class="col-md-4 mb-3">

                               <?php 
                                        echo '<img class="img-fluid img-bordered-sm" src = "data:image;base64,'.base64_encode($user['profile']).'" 
                                        alt="image" style="height: 170px; width: 310px; object-fit: cover;">';
                                        ?>
                               </div>
                            
                                </div>
                                <div class="text-right">
                                <a href="farmer_account.php" class="btn btn-danger">Back</a>
                                <button type="submit" name="update_farmer" class="btn btn-primary">Save</button>
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