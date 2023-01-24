<?php include('authentication.php');?>
<?php include('includes/header.php');?>

<div class="container">

<h2 class="text-center mb-3">YOUR REQUEST</h2>

            <div class="row"> 
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card-group">
                        <?php

                        
                            if(isset($_SESSION['auth_user'])) 
                            $currentUSER = $_SESSION['auth_user']['user_id'];

                            $query = "SELECT
                            request.request_id, 
                            request.id, 
                            product.product_name, 
                            request.request_quantity, 
                            request.description, 
                            request.request_date, 
                            request_status.request_name, 
                            product.product_image
                        FROM
                            request
                            INNER JOIN
                            product
                            ON 
                                request.product_id = product.product_id
                            INNER JOIN
                            farmer
                            ON 
                                request.id = farmer.user_id
                            INNER JOIN
                            request_status
                            ON 
                                request.request_status = request_status.request_id
                        WHERE
                            request.id = $currentUSER";
                            $query_run = mysqli_query($con, $query);
                            $product = mysqli_num_rows($query_run) > 0;

                        if($product)
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                            ?>
                            <div class="col-12 col-md-6 col-lg-3 mb-4">
                            <div class="card h-100">
                                <img class="img-fluid card-img-top" src="data:image;base64,<?php echo base64_encode($row['product_image']) ?>"  alt="user-avatar" style= "height:250px; width: 100%; object-fit: cover;">
                                <div class="card-body">
                                    <h3 class="card-title text-center" style="font-size: 22px;"><?php echo $row['product_name']; ?></h3>
                                    <p class="card-text text-center"> Quantity: <?php echo $row['request_quantity'];?></p>
                                    <p class="card-text text-center"> <?php echo $row['description'];?> </p>
                                 </div>
                                 <div class="card-footer text-muted text-center"><?php echo $row['request_name'];?> </div>
                                  
                              
                            </div>
                            </div>
                        <?php
                        }
                        }
                        else
                        {
                        echo "Nothing to View";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

<?php include('includes/footer.php');?>
