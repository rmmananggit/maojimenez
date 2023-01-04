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
                <div class="card mt-5">
                    <div class="card-header">
                    <h5>Farmer Information</h5>
                    </div>
                    <div class="card-body">

                    
                    <form action="code.php" method="POST">  
                    <div class="row"> 
                                <div class="col-md-4 mb-3">
                                    <label for="">Last Name</label>
                                    <input required placeholder="Enter First Name" type="text" name="lname" class="form-control">
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="">Middle Name</label>
                                    <input required placeholder="Enter Middle Name" type="text" name="mname" class="form-control">
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="">Last Name</label>
                                    <input required placeholder="Enter Last Name" type="text" name="lname" class="form-control">
                                </div>
                                
                                <div class="col-md-3 mb-3">
                                    <label for="">Gender</label>
                                    <br>
                                    <input required class="ml-2" type="radio" name="gender" value="Male"> Male
                                    <input required class="ml-2"  type="radio" name="gender" value="Female"> Female
                                </div>

                                
                                <div class="col-md-12 mb-3">
                                <hr>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="">Purok</label>
                                    <input required placeholder="Enter Purok No." type="text" name="purok" class="form-control">
                                </div> 

                                <div class="col-md-4 mb-3">
                                    <label for="">Street/Sitio</label>
                                    <input required placeholder="Enter Street/Sitio" type="text" name="street" class="form-control">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="">Barangay</label>
                                    <input required placeholder="Enter Barangay" type="text" name="barangay" class="form-control">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="">Municipality/Cyty</label>
                                    <input required placeholder="Enter Municipality/City" type="text" name="municipality" class="form-control">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="">Province</label>
                                    <input required placeholder="Enter Province" type="text" name="province" class="form-control">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="">Region</label>
                                    <input required placeholder="Enter Region" type="text" name="region" class="form-control">
                                </div>

                                <div class="col-md-12 mb-3">
                                <hr>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="">Mobile Number</label>
                                    <input required placeholder="Enter Mobile Number" type="text" name="mobilenumber" class="form-control">
                                </div>

                                <div class="col-md-4 mb-3">
                                <label class="control-label" for="date">Date</label>
                                 <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="">Place of Birth</label>
                                    <input required placeholder="Enter Mobile Number" type="text" name="placeofbirth" class="form-control">
                                </div>

                                
                                <div class="col-md-12 mb-3">
                                <hr>
                                </div> 

                                <div class="col-md-6 mb-3">
                                <label for="">Civil Status</label>
                                    <select name="status" required class="form-control">
                                        <option value="None">--Select Civil Status--</option>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Widowed">Widowed</option>
                                        <option value="Separated">Separated</option>
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="">Name of Spouse (if married)</label>
                                    <input required placeholder="Enter Mobile Number" type="text" name="placeofbirth" class="form-control">
                                </div>

                                <div class="col-md-4 mb-3">
                                <label for="">Person with Disability (PWD)</label>
                                <br>
                                <input required class="ml-2" type="radio" name="pwd" value="Yes"> Yes
                                <input required class="ml-2" type="radio" name="pwd" value="No"> No
                                </div>

                                <div class="col-md-4 mb-3">
                                <label for="">4P's Beneficiary?</label>
                                <br>
                                <input required class="ml-2" type="radio" name="4ps" value="Yes"> Yes
                                <input required class="ml-2" type="radio" name="4ps" value="No"> No
                                </div>

                                <div class="col-md-4 mb-3">
                                </div>

                                <div class="col-md-12 mb-3">
                                <hr>
                                </div>

                                <div class="col-md-5 mb-3">
                                <label for="">Member of an <strong>Indigenous Group</strong>?</label>
                                <br>
                                <input required class="ml-2" type="radio" name="ig" value="Yes"> Yes
                                <input required class="ml-2" type="radio" name="ig" value="No"> No
                                </div>

                                <div class="col-md-7 mb-3">
                                    <label for="">If yes, specify:</label>
                                    <input required placeholder="" type="text" name="igyes" class="form-control">
                                </div>

                                <div class="col-md-5 mb-3">
                                <label for="">With <strong>Government ID</strong>?</label>
                                <br>
                                <input required class="ml-2" type="radio" name="govid" value="Yes"> Yes
                                <input required class="ml-2" type="radio" name="govid" value="No"> No
                                </div>

                                <div class="col-md-7 mb-3">
                                    <label for="">If yes, specify:</label>
                                    <input required placeholder="" type="text" name="yesgovid" class="form-control">
                                </div>

                                <div class="col-md-5 mb-3">
                                <label for="">Member of any <strong>Farmers Association/Cooperative</strong>?</label>
                                <br>
                                <input required class="ml-2" type="radio" name="yesfac" value="Yes"> Yes
                                <input required class="ml-2"  type="radio" name="yesfac" value="No"> No
                                </div>

                                
                                <div class="col-md-7 mb-3">
                                    <label for="">If yes, specify:</label>
                                    <input required placeholder="" type="text" name="yesgovid" class="form-control">
                                </div>

                                <!-- <div class="col-md-12 mb-3">
                                <label for="Description">Description</label>
                                <textarea placeholder="Enter Description" name="description" required type="text" class="form-control" rows="3"></textarea>
                                </div> -->

                                <div class="col-md-12 mb-3 text-center">                                   
                                <hr> <h5>FARM PROFILE</h5>  <hr>                                
                                </div>
                                
                                <div class="col-md-12 mb-3">
                                <label for=""><strong>Main Livelihood</strong></label>
                                <br>
                                <input required class="ml-4" type="radio" name="ml" value="Farmer"> Farmer
                                <input required  class="ml-4" type="radio" name="ml" value="Farmworker/Laborer"> Farmworker/Laborer
                                <input required class="ml-4" type="radio" name="ml" value="Fisherfolk"> Fisherfolk
                                <input required  class="ml-4" type="radio" name="ml" value="Agri Youth"> Agri Youth
                                <input required  class="ml-4" type="radio" name="ml" value="Tenant"> Tenant
                                </div>

                                <div class="col-md-3 mb-3">                                   
                                <hr> <h5>For Farmers:</h5>
                                </div>

                                <div class="col-md-3 mb-3">                                   
                                <hr> <h5>For Farmworkers:</h5>
                                </div>

                                <div class="col-md-3 mb-3">                                   
                                <hr> <h5>For Fisherfolk:</h5>
                                </div>
                                <div class="col-md-3 mb-3">                                   
                                <hr> <h5>For Agri Youth:</h5>
                                </div>


                                <div class="col-md-3 mb-3">
                                <h6>Type of Farming Activity</strong></h5>
                                </div>

                                <div class="col-md-3 mb-3">
                                <h6>Kind of Work</strong></h5>
                                </div>

                                <div class="col-md-3 mb-3">
                                <h6>Type of Fishing Activity</strong></h5>
                                </div>

                                <div class="col-md-3 mb-3">
                                <h6>Type of Involvement</strong></h5>
                                </div>                                 

                                <div class="col-md-3 mb-3">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Rice" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                Rice
                                </label>
                                </div>
                                </div>

                                
                                <div class="col-md-3 mb-3">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Rice" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                Land Preparation
                                </label>
                                </div>
                                </div>

                                <div class="col-md-3 mb-3">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Rice" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                Fish Capture
                                </label>
                                </div>
                                </div>

                                <div class="col-md-3 mb-3">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Rice" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                Part of Farming Household
                                </label>
                                </div>
                                </div>







                                </div>
                                <div class="text-right">
                                <a href="farmer_account.php" class="btn btn-danger">Back</a>
                                <button type="submit" name="add_category" class="btn btn-primary">Save</button>
                                </div>
                               

                            </form>
                   
                            </div>
                    </div>
                </div>
            </div>
        </div>






<?php include('includes/footer.php');?>