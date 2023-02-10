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
                                            `farmer`.*
                                        FROM
                                            `farmer`
                                        WHERE
                                            `farmer`.user_status = 1";
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
                                                REQUEST</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">

                                            <?php
                                            $request = "SELECT * FROM `request`
                                        WHERE
                                            request_status = 1;";
                                            $request_query_run = mysqli_query($con, $request);

                                            if($request_cpimt = mysqli_num_rows($request_query_run))
                                            {
                                                echo '<h4>'.$request_cpimt.'</h4>';
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

                <?php
                                            $adorable = "SELECT
                                            farmer.barangay
                                        FROM
                                            farmer
                                        WHERE
                                            farmer.barangay = 'Adorable'";
                                            $adorable_run = mysqli_query($con, $adorable);

                                            if($total_adorable = mysqli_num_rows($adorable_run))
                                            {
                                                    $total_adorable;
                                            }
                                         

                 ?>

                <!-- /.container-fluid -->
                <div
                    id="myChart" style="width:100%; max-width:auto; height:800px;">
                </div>
                <script>
                    google.charts.load('current', {'packages':['corechart']});
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                    ['Barangay', 'Farmer',],
                    ['Adorable', 2],
                    ['Butuay',0],
                    ['Carmen',0],
                    ['Corrales',0],
                    ['Dicoloc',0],
                    ['Gata',0],
                    ['Guintomoyan',0],
                    ['Malibacsan',0],
                    ['Macabayao',0],
                    ['Matugas Alto',0],
                    ['Matugas Bajo',0],
                    ['Mialem',0],
                    ['Naga',0],
                    ['Palilan',0],
                    ['Nacional',0],
                    ['Rizal',0],
                    ['San Isidro',0],
                    ['Santa Cruz',0],
                    ['Sibaroc',0],
                    ['Sinara Alto',0],
                    ['Sinara Bajo',0],
                    ['Seti',0],
                    ['Tabo-o',0],
                    ['Taraka',0],
                    ]);

                    var options = {
                    title:'Total Farmer in Barangays'
                    };

                    var chart = new google.visualization.BarChart(document.getElementById('myChart'));
                    chart.draw(data, options);
                    }
                </script>
            </div>
            <!-- End of Main Content -->
<?php include('includes/footer.php');?>