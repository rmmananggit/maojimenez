<?php include('authentication.php'); ?>
<?php include('includes/header.php');?>

<div class="container-fluid px-4">
        <ol class="breadcrumb mb-4">    
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item">Announcement</li>
            <li class="breadcrumb-item">Add Announcement</li>
            
        </ol>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <h5>Add Announcement</h5>
                    </div>
                    <div class="card-body">

                    
                    <form action="code.php" method="post" autocomplete="off" enctype="multipart/form-data">  
                    <div class="row"> 
                                <div class="col-md-12 mb-3">
                                    <label for="">Title</label>
                                    <input required placeholder="Enter Announcement Title" type="text" name="announcement_title" class="form-control">
                                </div>

                                <div class="col-md-12 mb-3">
                                <label for="Description">Body</label>
                                <textarea placeholder="Enter Message" required type="text"  name="announcement_message" class="form-control" rows="3"></textarea>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="">Sender</label>
                                    <input required placeholder="Enter Sender" type="text" name="announcement_sender" class="form-control">
                                </div>

                                <div class="col-md-6 mb-3">
                                <label for="">Date and Time Announced</label>
                                <input type="datetime-local" name="announcement_dt" class="form-control">
                                </div>

                                
                    </div>

                                <div class="text-right">
                                <a href="announcement.php" class="btn btn-danger">Back</a>
                                <button type="submit" name="add_announcement" class="btn btn-primary">Save</button>
                                </div>
                               

                            </form>
                   

                    </div>
                </div>
            </div>
        </div>
    </div>






<?php include('includes/footer.php');?>