<?php include('authentication.php'); ?>
<?php include('includes/header.php');?>

<div class="container-fluid px-4">
        <ol class="breadcrumb mb-4">    
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item">Farmer</li>
            <li class="breadcrumb-item">View</li>
            
        </ol>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <h5>Farmer Profile </h5>
                    </div>
                    <div class="card-body">

                    
                    <form action="code.php" method="post" autocomplete="off" enctype="multipart/form-data">  
                    <div class="row"> 
                                <div class="col-md-6 mb-3">
                                    <label for="">Name</label>
                                    <input required type="text" name="name" class="form-control">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="">Quantity</label>
                                    <input required type="text" name="quantity" class="form-control">
                                </div>

                                <div class="col-md-6">
                                <label for="image">Image : </label>
                                <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" value="">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="">Category</label>
                                    <input required type="text" name="category" class="form-control">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="">Status</label>
                                    <input required type="text" name="status" class="form-control">
                                </div>
                                </div>

                                <div class="text-right">
                                <a href="manage_product.php" class="btn btn-danger">Back</a>
                                <button type="submit" name="add_product" class="btn btn-primary">Save</button>
                                </div>
                               

                            </form>
                   

                    </div>
                </div>
            </div>
        </div>
    </div>






<?php include('includes/footer.php');?>