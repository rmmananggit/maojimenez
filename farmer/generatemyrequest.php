<?php include('authentication.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="A web-based Farmers monitoring management system" name="description">
    <meta content="Monitoring, Management, System, Notification" name="keywords">

    <!-- Title Page -->
    <title>Municipal Agriculture Office Jimenez | Farmer</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="120x120" href="../assets/img/favicon.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../assets/img/favicon.png">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<style type="text/css" media="print">
 @media print{
    .noprint, .noprint *{
        display: none;
    }
 }

</style>



    </head>
   
    <body onload="print()">
        <div class="container">
            <center>
                <h3 class="mt-3 mb-3" style="margin-top: 30px;">MY REQUEST</h3>
            </center>
            <div class="card shadow mb-4">
<div class="card-header py-3">
</div>
<div class="card-body">
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Image</th>
                <th>Quantity</th>
                <th>Description</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            
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
if(mysqli_num_rows($query_run) > 0)
{
    foreach($query_run as $row)
    {
        ?>
        <tr>
        <td><?= $row['request_id']; ?></td>
            <td><?= $row['product_name']; ?></td>
            <td> <?php 
            echo '<img class="img-fluid" style="object-fit: cover;" src ="data:image;base64,'.base64_encode($row['product_image']).'" 
            alt="image" style="height: 20px;">';
            ?></td>
            <td class="text-center"><?= $row['request_quantity']; ?></td>
            <td><?= $row['description'];?></td>
            <td>            <?php
                            if($row['request_name'] == "Pending"){
                            ?>
                                <p> <span style="color: blue;">Pending</span></p>
                            <?php
                            }elseif($row['request_name'] == "Approved"){
                            ?>
                                <p><span style="color: green;">Approved</span></p>
                            <?php
                            }else{
                            ?>
                            <p><span style="color: red;">Deny</span></p>
                            <?php
                            }
                                ?>
                                </td>
        
        
        </tr>
        <?php
    }
}
else
{
?>
    <tr>
        <td colspan="7">No Record Found</td>
    </tr>
<?php
}
?>
        </tbody>
    </table>
</div>
</div>
</div>

    </body>
</html>



