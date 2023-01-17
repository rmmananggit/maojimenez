<?php include('authentication.php'); ?>

<?php
if(isset($_POST['logout_btn']))
{
    // session_destroy();
    unset( $_SESSION['auth']);
    unset( $_SESSION['auth_role']);
    unset( $_SESSION['auth_user']);

    $_SESSION['message'] = "You have successfully disconnected from your account.";
    $_SESSION['message_code'] = "success";
    header("Location: ../login/index.php");
    exit(0);
}

?>  

<?php

if(isset($_POST["add_product"])){
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $category = $_POST['category'];
    $status = $_POST['status'];
    if($_FILES["image"]["error"] == 4){

      $_SESSION['status'] = "Image does not exist!";
      $_SESSION['status_code'] = "error";
      header('Location: manage_product_add.php');
      exit(0);
    }
    else{
      $fileName = $_FILES["image"]["name"];
      $fileSize = $_FILES["image"]["size"];
      $tmpName = $_FILES["image"]["tmp_name"];
  
      $validImageExtension = ['jpg', 'jpeg', 'png'];
      $imageExtension = explode('.', $fileName);
      $imageExtension = strtolower(end($imageExtension));
      if ( !in_array($imageExtension, $validImageExtension) ){
      
        $_SESSION['status'] = "Invalid Image Extension";
        $_SESSION['status_code'] = "error";
        header('Location: manage_product_add.php');
        exit(0);
      }
      else if($fileSize > 1000000){

        $_SESSION['status'] = "Image size is too large!";
        $_SESSION['status_code'] = "error";
        header('Location: manage_product.php');
        exit(0);
      }
      else{
        $newImageName = uniqid();
        $newImageName .= '.' . $imageExtension;
  
        move_uploaded_file($tmpName, 'img/' . $newImageName);
        $query = "INSERT INTO `product`(`product_name`, `product_image`, `product_quantity`, `product_category_id`, `product_status`) VALUES ('$name','$newImageName','$quantity','$category','$status')";
        mysqli_query($con, $query);
        echo

        $_SESSION['status'] = "Product Added!";
        $_SESSION['status_code'] = "success";
        header('Location: manage_product.php');
        exit(0);
      }
    }
  }
?>

<?php
if(isset($_POST['add_category']))
{
    $name = $_POST['name'];
    $description = $_POST['description'];
    $status = $_POST['status'];

    $query = "INSERT INTO `product_category`(`category_name`, `category_description`, `category_status`) VALUES ('$name','$description','$status')";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['status'] = "New Category Added";
        $_SESSION['status_code'] = "success";
        header('Location: product_category.php');
        exit(0);
    }
    else{
        $_SESSION['status'] = "Error! SOMETHING WENT WRONG!";
        $_SESSION['status_code'] = "error";
        header('Location: product_category.php');
        exit(0);
    }
}
?>


<?php
if(isset($_POST['add_announcement']))
{
    $title = $_POST['announcement_title'];
    $body = $_POST['announcement_message'];
    $event_dt = $_POST['announcement_dt'];
    $sender = $_POST['announcement_sender'];

    $query = "INSERT INTO `announcement`(`ann_title`, `ann_body`, `ann_publish`, `ann_date`) VALUES ('$title','$body','$sender','$event_dt')";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['status'] = "Announcement Added";
        $_SESSION['status_code'] = "success";
        header('Location: announcement.php');
        exit(0);
    }
    else{
        $_SESSION['status'] = "Error! SOMETHING WENT WRONG!";
        $_SESSION['status_code'] = "error";
        header('Location: announcement.php');
        exit(0);
    }
}
?>

<?php
if(isset($_POST['edit_category']))
{
    $user_id = $_POST['user_id'];
    $name = $_POST['editcategory_name'];
    $description = $_POST['editdescription'];
    $status = $_POST['editstatus'];

    $query = "UPDATE `product_category` SET `category_name`='$name',`category_description`='$description',`category_status`='$status' WHERE  `product_category_id`='$user_id'";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['status'] = "Category Update";
        $_SESSION['status_code'] = "success";
        header('Location: product_category.php');
        exit(0);
    }
    else{
        $_SESSION['status'] = "SOMETHING WENT WRONG!";
        $_SESSION['status_code'] = "error";
        header('Location: product_category.php');
        exit(0);
    }
}
?>


<?php
if(isset($_POST['category_delete']))
{
    $user_id= $_POST['category_delete'];

    $query = "DELETE FROM product_category WHERE product_category_id ='$user_id' ";
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
      $_SESSION['status'] = "The Category has been successfully deleted.";
      $_SESSION['status_code'] = "success";
      header('Location: product_category.php');
      exit(0);
    }
    else
    {
      $_SESSION['status'] = "There is a product under this category. Please delete the product first before deleting this category!";
      $_SESSION['status_code'] = "error";
      header('Location: product_category.php');
      exit(0);
    }
}

?>

<?php
if(isset($_POST['ann_delete']))
{
    $user_id= $_POST['ann_delete'];

    $query = "DELETE FROM announcement WHERE ann_id ='$user_id' ";
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
      $_SESSION['status'] = "The announcement has been successfully deleted.";
      $_SESSION['status_code'] = "success";
      header('Location: announcement.php');
      exit(0);
    }
    else
    {
      $_SESSION['status'] = "SOMETHING WENT WRONG!";
      $_SESSION['status_code'] = "error";
      header('Location: announcement.php');
      exit(0);
    }
}
?>

<?php
if(isset($_POST['edit_announcement']))
{
    $user_id = $_POST['user_id'];
    $edit_title = $_POST['edit_announcement_title'];
    $edit_body = $_POST['edit_announcement_message'];
    $edit_event_dt = $_POST['edit_announcement_dt'];
    $edit_sender = $_POST['edit_announcement_sender'];

    $query = "UPDATE `announcement` SET `ann_title`='$edit_title',`ann_body`='$edit_body',`ann_publish`='$edit_sender',`ann_date`='$edit_event_dt' WHERE `ann_id` = '$user_id'";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['status'] = "The announcement has been successfully updated!";
        $_SESSION['status_code'] = "success";
        header('Location: announcement.php');
        exit(0);
    }
    else{
        $_SESSION['status'] = "Error! SOMETHING WENT WRONG!";
        $_SESSION['status_code'] = "error";
        header('Location: announcement.php');
        exit(0);
    }
}
?>

<?php
if(isset($_POST['add_category']))
{
    $name = $_POST['name'];
    $description = $_POST['description'];
    $status = $_POST['status'];

    $query = "INSERT INTO `product_category`(`category_name`, `category_description`, `category_status`) VALUES ('$name','$description','$status')";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['status'] = "New Category Added";
        $_SESSION['status_code'] = "success";
        header('Location: product_category.php');
        exit(0);
    }
    else{
        $_SESSION['status'] = "Error! SOMETHING WENT WRONG!";
        $_SESSION['status_code'] = "error";
        header('Location: product_category.php');
        exit(0);
    }
}
?>


<?php
if(isset($_POST['add_farmer']))
{
    $lname = $_POST['lname'];
    $mname = $_POST['mname'];
    $fname = $_POST['fname'];
    $purok = $_POST['purok'];
    $street = $_POST['street'];
    $barangay = $_POST['barangay'];
    $municipality = "Jimenez";
    $province = "Misamis Occidental";
    $region = "10";
    $gender = $_POST['gender'];
    $civilstatus = $_POST['civilstatus'];
    $religion = $_POST['religion'];
    $mobilenumber = $_POST['mobilenumber'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fourps = $_POST['fourps'];
    $ig = $_POST['ig'];
    $pwd = $_POST['pwd'];
    $livelihood = $_POST['livelihood'];
    $livelihood_details = $_POST['0'];
    



    $query = "INSERT INTO `user`(`fname`, `mname`, `lname`, `Purok`, `Street`, `Barangay`, `Municipality`, `Province`, `Region`, `gender`, `civil_status`, `religion`, `mobile_number`, `email`, `username`, `password`, `4ps`, `ig`, `pwd`, `livelihood`, `livelihood_details`, `2x2picture`, `govermentid`, `user_type`, `user_status`) VALUES ('$fname','$mname','$lname','$purok','$street','$barangay','$municipality','$province','$region','
    $gender','$civilstatus','$mobilenumber','$email','$username','$password','$fourps','$ig','$pwd','$livelihood','$livelihood_details','[value-22]','[value-23]','[value-24]','[value-25]','[value-26]')";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['status'] = "New Category Added";
        $_SESSION['status_code'] = "success";
        header('Location: product_category.php');
        exit(0);
    }
    else{
        $_SESSION['status'] = "Error! SOMETHING WENT WRONG!";
        $_SESSION['status_code'] = "error";
        header('Location: product_category.php');
        exit(0);
    }
}
?>

<?php

if(isset($_POST["add_farmer"])){
    $lname = $_POST['lname'];
    $mname = $_POST['mname'];
    $fname = $_POST['fname'];
    $purok = $_POST['purok'];
    $street = $_POST['street'];
    $barangay = $_POST['barangay'];
    $municipality = "Jimenez";
    $province = "Misamis Occidental";
    $region = "10";
    $gender = $_POST['gender'];
    $civilstatus = $_POST['civilstatus'];
    $religion = $_POST['religion'];
    $mobilenumber = $_POST['mobilenumber'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fourps = $_POST['fourps'];
    $ig = $_POST['ig'];
    $pwd = $_POST['pwd'];
    $livelihood = $_POST['livelihood'];
    $livelihood_details = $_POST['0'];
    if($_FILES["profilepicture"]["error"] || $_FILES["governmentid"]["error"] == 4){

      $_SESSION['status'] = "Image does not exist!";
      $_SESSION['status_code'] = "error";
      header('Location: farmer_add.php');
      exit(0);
    }
    else{
      $fileName1 = $_FILES["profilepicture"]["name"];
      $fileSize = $_FILES["profilepicture"]["size"];
      $tmpName = $_FILES["profilepicture"]["tmp_name"];

      $fileName = $_FILES["governmentid"]["name"];
      $fileSize = $_FILES["governmentid"]["size"];
      $tmpName = $_FILES["governmentid"]["tmp_name"];
  
      $validImageExtension = ['jpg', 'jpeg', 'png'];
      $imageExtension = explode('.', $fileName);
      $imageExtension = strtolower(end($imageExtension));
      
      if ( !in_array($imageExtension, $validImageExtension) ){
      
        $_SESSION['status'] = "Invalid Image Extension";
        $_SESSION['status_code'] = "error";
        header('Location: manage_product_add.php');
        exit(0);
      }
      else if($fileSize > 1000000){

        $_SESSION['status'] = "Image size is too large!";
        $_SESSION['status_code'] = "error";
        header('Location: manage_product.php');
        exit(0);
      }
      else{
        $newImageName = uniqid();
        $newImageName .= '.' . $imageExtension;
  
        move_uploaded_file($tmpName, 'img/' . $newImageName);
        $query = "INSERT INTO `product`(`product_name`, `product_image`, `product_quantity`, `product_category_id`, `product_status`) VALUES ('$name','$newImageName','$quantity','$category','$status')";
        mysqli_query($con, $query);
        echo

        $_SESSION['status'] = "Product Added!";
        $_SESSION['status_code'] = "success";
        header('Location: manage_product.php');
        exit(0);
      }
    }
  }
?>
