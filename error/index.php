<?php
    if(!defined('DB_SERVER')){
        include("../initialize.php");
    }

    // DB connection parameters
    $host = DB_SERVER;
    $username = DB_USERNAME;
    $password = DB_PASSWORD;
    $database = DB_NAME;

    $con = @new mysqli($host, $username, $password, $database);

    if($con->connect_error){
        // connection failed, redirect to 
        
    }
    else{
        // connection successful
        header("Location: " . base_url . "");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Municipal Agriculture Office | 522 Connection Timed Out</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Grow ECommerce, Inc.">
    <meta name="author" content="">

    <!-- Icons for web browsers -->
    <link rel="icon" href="<?php echo base_url ?>assets/img/system/favicon.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url ?>assets/img/system/favicon.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url ?>assets/img/system/favicon.png">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url ?>assets/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?php echo base_url ?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Loading CSS -->
    <link href="<?php echo base_url ?>assets/css/loader.css" rel="stylesheet">

</head>

<body id="page-top">
    <!-- Loading Screen -->
    <div id="loading">
        <img id="loading-image" src="<?php echo base_url ?>assets/img/system/loading.gif" alt="Loading" />
    </div>
    <!-- Page Wrapper -->
    <div id="wrapper" class="d-flex justify-content-center position-fixed w-100 h-100 align-items-center">

        <!-- Content Wrapper -->
        <div id="content-wrapper">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- 404 Error Text -->
                    <div class="text-center">
                        <div class="error mx-auto" data-text="522">522</div>
                        <p class="lead text-gray-800 mb-5">Connection Timed Out</p>
                        <p class="text-gray-500 mb-0">It looks like you found a glitch in the connection...</p>
                        <p class="text-gray-500 mb-0">Possible problems</p>
                        <p class="text-gray-500 mb-0">&#x2022; Database connection Error</p>
                        <p class="text-gray-500 mb-0">&#x2022; Server configuration error</p>
                        <p class="text-gray-500 mb-0">&#x2022; PHP error</p>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url ?>assets/js/sb-admin-2.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url ?>assets/js/demo/datatables-demo.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Loading JS -->
    <script src="<?php echo base_url ?>assets/js/loader.js"></script>

    <!-- tooltip script -->
    <script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
    </script>

</body>

</html>