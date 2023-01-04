<?php
include('authentication.php');

if(isset($_POST['logout_btn']))
{
    // session_destroy();
    unset( $_SESSION['auth']);
    unset( $_SESSION['auth_role']);
    unset( $_SESSION['auth_user']);

    $_SESSION['message'] = "Logout Successfully";
    header("Location: ../login.php");
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