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
?>


<?php
//update staff 
if(isset($_POST["update_staff"])){
  $userprofile = $_FILES['userprofile'];

  $fileName = $userprofile['name'];
  $fileTmpname = $userprofile['tmp_name'];
  $fileSize = $userprofile['size'];
  $fileError = $userprofile['error'];

  $fileExt = explode('.',$fileName);
  $fileActExt = strtolower(end($fileExt));
  $allowed = array('jpg','jpeg','png');


  if(in_array($fileActExt, $allowed)){
    if($fileError === 0){
        if($fileSize < 50000000){
          $user_id = $_POST['user_id'];
          $fname = $_POST['fname'];
          $mname = $_POST['mname'];
          $lname = $_POST['lname'];
          $email = $_POST['email'];
          $product_image = addslashes(file_get_contents($_FILES["userprofile"]['tmp_name']));

          $query = "UPDATE `user` SET `fname`='$fname',`mname`='$mname',`lname`='$lname',`email`='$email',`picture`='$product_image' WHERE `user_id`='$user_id'";

            $query_run = mysqli_query($con, $query);

            if($query_run){
              $_SESSION['status'] = "User Update Successfully";
              $_SESSION['status_code'] = "success";
              header('Location: staff.php');
              exit(0);
            }else{
              $_SESSION['status'] = "Something is wrong!";
              $_SESSION['status_code'] = "error";
              header('Location: staff.php');
              exit(0);
            }

        }else{
            $_SESSION['status']="File is too large file must be 10mb";
            $_SESSION['status_code'] = "error"; 
            header('Location: staff.php');
        }
    }else{
        $_SESSION['status']="File Error";
        $_SESSION['status_code'] = "error"; 
        header('Location: staff.php');
    }
}else{
    $_SESSION['status']="File not allowed";
    $_SESSION['status_code'] = "error"; 
    header('Location: staff.php');
}
}
?>




<?php
if(isset($_POST['id']))
{
    $id = $_POST['id'];

    $query = "DELETE FROM product WHERE product_id='$id'";
    $query_run = mysqli_query($con, $query);
    
    if($query_run)
    {
      $_SESSION['status'] = "The product has been successfully removed.";
      $_SESSION['status_code'] = "success";
        header('Location: manage_product.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something went wrong!";
        header('Location: manage_product.php');
        exit(0);
    }
}
?>




<?php
//addstaff
if(isset($_POST["add_staff"])){

  $userprofile = $_FILES['userprofile'];

  $fileName = $userprofile['name'];
  $fileTmpname = $userprofile['tmp_name'];
  $fileSize = $userprofile['size'];
  $fileError = $userprofile['error'];

  $fileExt = explode('.',$fileName);
  $fileActExt = strtolower(end($fileExt));
  $allowed = array('jpg','jpeg','png');


  if(in_array($fileActExt, $allowed)){
    if($fileError === 0){
        if($fileSize < 50000000){
          $fname = $_POST['fname'];
          $mname = $_POST['mname'];
          $lname = $_POST['lname'];
          $email = $_POST['email'];
          $password = $_POST['password'];
          $user_type = '2';
          $user_status = '1';
          $userprofile = addslashes(file_get_contents($_FILES["userprofile"]['tmp_name']));

          $query = "INSERT INTO `user`(`fname`, `mname`, `lname`, `email`, `password`, `picture`, `user_type`, `user_status`) VALUES ('$fname','$mname','$lname','$email','$password','$userprofile','$user_type','$user_status')";

            $query_run = mysqli_query($con, $query);

            if($query_run){
              $_SESSION['status'] = "User Added Successfully!";
              $_SESSION['status_code'] = "success";
              header('Location: staff.php');
              exit(0);
            }else{
              $_SESSION['status'] = "User was not added";
              $_SESSION['status_code'] = "error";
              header('Location: staff_add.php');
              exit(0);
            }

        }else{
            $_SESSION['status']="File is too large file must be 10mb";
            $_SESSION['status_code'] = "error"; 
            header('Location: staff_add.php');
        }
    }else{
        $_SESSION['status']="File Error";
        $_SESSION['status_code'] = "error"; 
        header('Location: staff_add.php');
    }
}else{
   
}
}

?>


<?php
//update product 
if(isset($_POST["update_product"])){
  $product_image = $_FILES['product_image'];

  $fileName = $product_image['name'];
  $fileTmpname = $product_image['tmp_name'];
  $fileSize = $product_image['size'];
  $fileError = $product_image['error'];

  $fileExt = explode('.',$fileName);
  $fileActExt = strtolower(end($fileExt));
  $allowed = array('jpg','jpeg','png');


  if(in_array($fileActExt, $allowed)){
    if($fileError === 0){
        if($fileSize < 50000000){
          $user_id = $_POST['product_id'];
          $name = $_POST['name'];
          $quantity = $_POST['quantity'];
          $category = $_POST['category'];
          $status = $_POST['status'];
          $product_image = addslashes(file_get_contents($_FILES["product_image"]['tmp_name']));

          $query = "UPDATE `product` SET `product_name`='$name',`product_image`='$product_image',`product_quantity`='$quantity',`product_category_id`='$category',`product_status`='$status' WHERE `product_id`='$user_id'";

            $query_run = mysqli_query($con, $query);

            if($query_run){
              $_SESSION['status'] = "Product Added!";
              $_SESSION['status_code'] = "success";
              header('Location: manage_product.php');
              exit(0);
            }else{
              $_SESSION['status'] = "Product Not Added!";
              $_SESSION['status_code'] = "error";
              header('Location: manage_product.php');
              exit(0);
            }

        }else{
            $_SESSION['status']="File is too large file must be 10mb";
            $_SESSION['status_code'] = "error"; 
            header('Location: manage_product.php');
        }
    }else{
        $_SESSION['status']="File Error";
        $_SESSION['status_code'] = "error"; 
        header('Location: manage_product.php');
    }
}else{
    $_SESSION['status']="File not allowed";
    $_SESSION['status_code'] = "error"; 
    header('Location: manage_product.php');
}
}
?>





<?php
//register product 
if(isset($_POST["add_product"])){
  $product_image = $_FILES['product_image'];

  $fileName = $product_image['name'];
  $fileTmpname = $product_image['tmp_name'];
  $fileSize = $product_image['size'];
  $fileError = $product_image['error'];

  $fileExt = explode('.',$fileName);
  $fileActExt = strtolower(end($fileExt));
  $allowed = array('jpg','jpeg','png');


  if(in_array($fileActExt, $allowed)){
    if($fileError === 0){
        if($fileSize < 50000000){
          $name = $_POST['name'];
          $quantity = $_POST['quantity'];
          $category = $_POST['category'];
          $status = $_POST['status'];
          $product_image = addslashes(file_get_contents($_FILES["product_image"]['tmp_name']));

          $query = "INSERT INTO `product`(`product_name`, `product_image`, `product_quantity`, `product_category_id`, `product_status`) VALUES ('$name','$product_image','$quantity','$category','$status')";

            $query_run = mysqli_query($con, $query);

            if($query_run){
              $_SESSION['status'] = "Product Added!";
              $_SESSION['status_code'] = "success";
              header('Location: manage_product.php');
              exit(0);
            }else{
              $_SESSION['status'] = "Product Not Added!";
              $_SESSION['status_code'] = "error";
              header('Location: manage_product.php');
              exit(0);
            }

        }else{
            $_SESSION['status']="File is too large file must be 10mb";
            $_SESSION['status_code'] = "error"; 
            header('Location: manage_product.php');
        }
    }else{
        $_SESSION['status']="File Error";
        $_SESSION['status_code'] = "error"; 
        header('Location: manage_product.php');
    }
}else{
    $_SESSION['status']="File not allowed";
    $_SESSION['status_code'] = "error"; 
    header('Location: manage_product.php');
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
//add farmer 
if(isset($_POST["add_farmer"])){
  $profilepicture = $_FILES['profilepicture'];

  $fileName = $profilepicture['name'];
  $fileTmpname = $profilepicture['tmp_name'];
  $fileSize = $profilepicture['size'];
  $fileError = $profilepicture['error'];

  $fileExt = explode('.',$fileName);
  $fileActExt = strtolower(end($fileExt));
  $allowed = array('jpg','jpeg','png');


  if(in_array($fileActExt, $allowed)){
    if($fileError === 0){
        if($fileSize < 50000000){
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
          $password = $_POST['password'];
          $fourps = $_POST['fourps'];
          $ig = $_POST['ig'];
          $pwd = $_POST['pwd'];
          $livelihood = $_POST['livelihood'];
          $qrcode = uniqid();
          $profilepicture = addslashes(file_get_contents($_FILES["profilepicture"]['tmp_name']));
          $user_type = 3;
          $user_status = 1;

          $query = "INSERT INTO `farmer`(`fname`, `mname`, `lname`, `Purok`, `Street`, `Barangay`, `Municipality`, `Province`, `Region`, `gender`, `civil_status`, `religion`, `mobile_number`, `email`, `password`, `4ps`, `ig`, `pwd`, `livelihood`, `qrcode`, `profilepicture`, `user_type`, `user_status`) VALUES ('$fname','$mname,'$lname','$purok','$street','$barangay','$municipality','$province','$region','$gender','$civilstatus','$religion','$mobilenumber','$email','$password','$fourps','$ig','$pwd','$livelihood','$qrcode','$profilepicture','$user_type,'$user_status')";

            $query_run = mysqli_query($con, $query);

            if($query_run){
              $_SESSION['status'] = "Farmer Added";
              $_SESSION['status_code'] = "success";
              header('Location: farmer_account.php');
              exit(0);
            }else{

            }

        }else{
            $_SESSION['status']="File is too large file must be 10mb";
            $_SESSION['status_code'] = "error"; 
            header('Location: farmer_account.php');
        }
    }else{
        $_SESSION['status']="File Error";
        $_SESSION['status_code'] = "error"; 
        header('Location: farmer_account.php');
    }
}else{
    $_SESSION['status']="File not allowed";
    $_SESSION['status_code'] = "error"; 
    header('Location: farmer_account.php');
}

}
?>