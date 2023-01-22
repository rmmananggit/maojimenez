<?php include('authentication.php');?>
<?php include('includes/header.php');?>

            <!-- Main Content -->
            <div id="content">


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                       
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Account (Farmer)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">

                                            <?php
                                            $total_farmer = "SELECT
                                            `user`.*
                                        FROM
                                            `user`
                                        WHERE
                                            `user`.user_type = 3";
                                            $total_farmer_query_run = mysqli_query($con, $total_farmer);

                                            if($farmer_count = mysqli_num_rows($total_farmer_query_run))
                                            {
                                                echo '<h4>'.$farmer_count.'</h4>';
                                            }
                                            else{
                                                echo '<h4>0</h4>';
                                            }

                                            ?>

                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-alt fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                PENDING USER (FARMER)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">

                                            <?php
                                            $pending_farmer = "SELECT
                                            `user`.*
                                        FROM
                                            `user`
                                        WHERE
                                            `user`.user_type = 3 AND
                                            `user`.user_status = 3";
                                            $pending_farmer_query_run = mysqli_query($con, $pending_farmer);

                                            if($pending_count = mysqli_num_rows($pending_farmer_query_run))
                                            {
                                                echo '<h4>'.$pending_count.'</h4>';
                                            }
                                            else{
                                                echo '<h4>0</h4>';
                                            }

                                            ?>

                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fas fa-user-alt fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">TOTAL CATEGORY
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">

                                                    <?php
                                            $total_category = "SELECT
                                            product_category.*
                                        FROM
                                            product_category";
                                            $total_category_query_run = mysqli_query($con, $total_category);

                                            if($category_count = mysqli_num_rows($total_category_query_run))
                                            {
                                                echo '<h4>'.$category_count.'</h4>';
                                            }
                                            else{
                                                echo '<h4>0</h4>';
                                            }

                                            ?>

                                                    </div>
                                                </div>
                                            
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                TOTAL PRODUCT</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">

                                            <?php
                                            $total_product = "SELECT
                                            product.*
                                        FROM
                                            product";
                                            $total_product_query_run = mysqli_query($con, $total_product);

                                            if($total_product = mysqli_num_rows($total_product_query_run))
                                            {
                                                echo '<h4>'.$total_product.'</h4>';
                                            }
                                            else{
                                                echo '<h4>0</h4>';
                                            }

                                            ?>

                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-box fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

   

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
<?php include('includes/footer.php');?>