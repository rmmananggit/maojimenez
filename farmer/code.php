<?php include('authentication.php'); ?>

<?php
if(isset($_POST['logout_btn']))
{
    // session_destroy();
    unset( $_SESSION['auth']);
    unset( $_SESSION['auth_role']);
    unset( $_SESSION['auth_user']);

    $_SESSION['status'] = "You have successfully disconnected from your account.";
    $_SESSION['status_code'] = "success";
    header("Location: ../login/index.php");
    exit(0);
}



if(isset($_POST['add_request']))
{

    $date = new DateTime();
    $date->setTimezone(new DateTimeZone('UTC'));
    $request_date = $date->format('Y-m-d H:i:s');

    $user_id = $_POST['user_id'];
    $quantity = $_POST['quantity'];
    $product_id = $_POST['product'];
    $description = $_POST['description'];
    $request = $_POST['quantity'];
    $status = "1";

    $query = "INSERT INTO `request`(`id`, `product_id`, `request_quantity`, `description`, `request_date`, `request_status`) VALUES ('$user_id', '$product_id','$quantity','$description','$request_date', '$status')";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Request has been submitted!";
        $_SESSION['status_code'] = "success";
        header('Location: request.php');
        exit(0);
    }
    else{
        $_SESSION['status'] = "Error! SOMETHING WENT WRONG!";
        $_SESSION['status_code'] = "error";
        header('Location: request.php');
        exit(0);
    }
}






?>
