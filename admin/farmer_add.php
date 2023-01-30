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

                    
 
                    <form action="code.php" method="post" autocomplete="off" enctype="multipart/form-data"> 
                    <div class="row"> 
                                <div class="col-md-4 mb-3">
                                    <label for="">Last Name</label>
                                    <input required placeholder="Enter First Name" type="text" name="lname" class="form-control">
                                </div> 
                            

                                <div class="col-md-4 mb-3">
                                    <label for="">Middle Name (Type N/A if not available)</label>
                                    <input required placeholder="Enter Middle Name" type="text" name="mname" class="form-control">
                                </div>


                                <div class="col-md-4 mb-3">
                                    <label for="">First Name</label>
                                    <input required placeholder="Enter First Name" type="text" name="fname" class="form-control">
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

                                <div class="col-md-6 mb-3">
                                    <label for="">Email Address</label>
                                    <input required placeholder="Enter Email Address" type="email" name="email" class="form-control">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="">Password</label>
                                    <input required placeholder="Enter Password" type="password" name="password" class="form-control">
                                </div>


                                <div class="col-md-12 mb-3">
                                <hr>
                                </div>

                                <div class="col-md-4 mb-3">   
                                    <label for="">Purok</label>
                                    <input required placeholder="Enter Purok No." type="text" name="purok" class="form-control">
                                </div>
                                 <!-- done  -->

                                <div class="col-md-4 mb-3">
                                    <label for="">Street/Sitio</label>
                                    <input required placeholder="Enter Street/Sitio" type="text" name="street" class="form-control">
                                </div>
                                <!-- done -->
                                <div class="col-md-4 mb-3">
                                    <label for="">Barangay</label>
                                    <input required placeholder="Enter Barangay" type="text" name="barangay" class="form-control">
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
                                    <input required placeholder="Enter Mobile Number" type="text" name="mobilenumber" class="form-control">
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="">Religion</label>
                                    <input required placeholder="Enter Religion" type="text" name="religion" class="form-control">
                                </div>

                                <div class="col-md-3 mb-3">
                                <label class="control-label" for="date">Date of Birth</label>
                                 <input class="form-control" id="date" name="dob" placeholder="MM/DD/YYY" type="date"/>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="">Place of Birth</label>
                                    <input required placeholder="Enter Place of Birth" type="text" name="placeofbirth" class="form-control">
                                </div>

                                
                                <div class="col-md-12 mb-3">
                                <hr>
                                </div> 

                                <div class="col-md-6 mb-3">
                                <label for="">Civil Status</label>
                                    <select name="civilstatus" required class="form-control">
                                        <option value="None">--Select Civil Status--</option>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Widowed">Widowed</option>
                                        <option value="Separated">Separated</option>
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <!-- <label for="">Name of Spouse (if married)</label>
                                    <input required placeholder="Enter Name" type="text" name="placeofbirth" class="form-control"> -->
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
                                <input required class="ml-2" type="radio" name="fourps" value="Yes"> Yes
                                <input required class="ml-2" type="radio" name="fourps" value="No"> No
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
                                    <input  placeholder="" type="text" name="igyes" class="form-control">
                                </div>

                                <div class="col-md-5 mb-3">
                                <label for="">With <strong>Government ID</strong>?</label>
                                <br>
                                <input required class="ml-2" type="radio" name="govid" value="Yes"> Yes
                                <input required class="ml-2" type="radio" name="govid" value="No"> No
                                </div>

                                <div class="col-md-7 mb-3">
                                    <label for="">If yes, specify:</label>
                                    <input  placeholder="" type="text" name="yesgovid" class="form-control">
                                </div>

                                <div class="col-md-5 mb-3">
                                <label for="">Member of any <strong>Farmers Association/Cooperative</strong>?</label>
                                <br>
                                <input required class="ml-2" type="radio" name="yesfac" value="Yes"> Yes
                                <input required class="ml-2"  type="radio" name="yesfac" value="No"> No
                                </div>

                                
                                <div class="col-md-7 mb-3">
                                    <label for="">If yes, specify:</label>
                                    <input  placeholder="" type="text" name="yesgovid" class="form-control">
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
                                <input required class="ml-4" type="radio" name="livelihood" value="Farmer" id="option1" onclick="showDiv('div1')"> Farmer
                                <input required  class="ml-4" type="radio" name="livelihood" value="Farmworker" id="option2" onclick="showDiv('div2')"> Farmworker/Laborer

                                <input required  class="ml-4" type="radio" name="livelihood" value="Agri Youth" id="option3" onclick="showDiv('div3')"> Agri Youth
                                </div>


                                <div class="col-md-12 mb-3"  id="div1" style="display: none;">
                                 <h5 class="text-center mt-4"><b>FOR FARMER</b></h5>
                                 <h6 class="text-center mt-4"><u>Type of Farming Activity</u></strong></h6>
                                
                                 <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Rice" name="livelihood_details[]">
                                <label class="form-check-label" for="rice">
                                Rice
                                </label>
                                </div>

                                <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" value="Corn" name="corn">
                                <label class="form-check-label" for="corn">
                                Corn
                                </label>
                                </div>

                                <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" value="Other Crops" name="othercrops">
                                <label class="form-check-label" for="othercrops">
                                Other Crops
                                </label>
                                </div>


                                <label fowr="">Specify:</label>
                                <input required placeholder="" type="text" name="specifycrops" class="form-control">

                                <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" value="Livestock" id="livestock">
                                <label class="form-check-label" for="livestock">
                                Livestock
                                </label>
                                </div>

                                <label for="">Specify:</label>
                                <input required placeholder="" type="text" name="specifycrops" class="form-control">

                                <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" value="Poultry" id="poultry">
                                <label class="form-check-label" for="poultry">
                                Poultry
                                </label>
                                </div>
                                
                                <label for="">Specify:</label>
                                <input required placeholder="" type="text" name="specifycrops" class="form-control">
                                </div>

                                <div class="col-md-12 mb-3" id="div2" style="display: none;">
                                <h5 class="text-center mt-4"><b>FOR FARMWORKER</b></h5>
                                 <h6 class="text-center mt-4"><u>Kind of Work</u></strong></h6>


                                 <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Owner" id="owner">
                                <label class="form-check-label" for="owner">
                                Owner
                                </label>
                                </div>

                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Land Preparation" id="lp">
                                <label class="form-check-label" for="lp">
                                Land Preparation
                                </label>
                                </div>

                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Cultivation" id="Cultivation">
                                <label class="form-check-label" for="Cultivation">
                                Cultivation
                                </label>
                                </div>

                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Planting" id="Planting">
                                <label class="form-check-label" for="Planting">
                                Planting
                                </label>
                                </div>

                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Harvesting" id="Harvesting">
                                <label class="form-check-label" for="Harvesting">
                                Harvesting
                                </label>
                                </div>

                                  
                                <label for="">Others, Please Specify:</label>
                                <input required placeholder="" type="text" name="othersfarmworker" class="form-control">

                                </div>


                               <div class="col-md-12 mb-3" id="div3" style="display: none;">
                               <h5 class="text-center mt-4"><b>FOR AGRI YOUTH</b></h5>
                                 <h6 class="text-center mt-4"><u>Type of Involvement</u></strong></h6>
                                 <p class="text-info">For the purpose of trainings, financial assistance, and other programs catered to the youth with involvement to any agriculture activity.</p>

                                 <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Part of a farming household" id="Part of a farming household">
                                <label class="form-check-label" for="Part of a farming household">
                                Part of a farming household
                                </label>
                                </div>

                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Attending/Attended non-formal agri-fishery related course" id="Attending/Attended non-formal agri-fishery related course">
                                <label class="form-check-label" for="Attending/Attended non-formal agri-fishery related course">
                                Attending/Attended non-formal agri-fishery related course
                                </label>
                                </div>

                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Participated in any agricultural activity/program" id="Participated in any agricultural activity/program">
                                <label class="form-check-label" for="Participated in any agricultural activity/program">
                                Participated in any agricultural activity/program
                                </label>
                                </div>

                                <label for="">Others, Please Specify:</label>
                                <input required placeholder="" type="text" name="fisherfolkothers" class="form-control">


                               </div>


                               <div class="col-md-12 mb-3 text-center">                                   
                                <hr> <h5>DOCUMENT</h5>  <hr>                                
                                </div>

                               <div class="col-md-6 mb-3 ml-4">                             
                               <label for="profilepicture">Upload 2x2 Picture </label> <br>
                                <input type="file" name="profilepicture" id = "profilepicture" accept=".jpg, .jpeg, .png" value="">
                               </div>

                            
                                </div>
                                <div class="text-right">
                                <a href="farmer_account.php" class="btn btn-danger">Back</a>
                                <button type="submit" name="add_farmer" class="btn btn-primary">Save</button>
                                </div>
                               

                            </form>
                   
                            </div>
                    </div>
                </div>
            </div>
        </div>






<?php include('includes/footer.php');?>