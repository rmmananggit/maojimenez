<?php
include('authentication.php');

if(isset($_POST['logout_btn']))
{
    // session_destroy();
    unset( $_SESSION['auth']);
    unset( $_SESSION['auth_role']);
    unset( $_SESSION['auth_user']);

    $_SESSION['message'] = "Logout Successfully";
    header("Location: login.php");
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
      echo
      "<script> 
      alert('Image Does Not Exist'); 
      document.location.href = 'manage_product_add.php';
      </script>"
      ;
    }
    else{
      $fileName = $_FILES["image"]["name"];
      $fileSize = $_FILES["image"]["size"];
      $tmpName = $_FILES["image"]["tmp_name"];
  
      $validImageExtension = ['jpg', 'jpeg', 'png'];
      $imageExtension = explode('.', $fileName);
      $imageExtension = strtolower(end($imageExtension));
      if ( !in_array($imageExtension, $validImageExtension) ){
        echo
        "
        <script>
          alert('Invalid Image Extension');
        </script>
        ";
      }
      else if($fileSize > 1000000){
        echo
        "
        <script>
          alert('Image Size Is Too Large');
        </script>
        ";
      }
      else{
        $newImageName = uniqid();
        $newImageName .= '.' . $imageExtension;
  
        move_uploaded_file($tmpName, 'img/' . $newImageName);
        $query = "INSERT INTO `product`(`product_name`, `product_image`, `product_quantity`, `product_category_id`, `product_status`) VALUES ('$name','$newImageName','$quantity','$category','$status')";
        mysqli_query($con, $query);
        echo

        $_SESSION['message'] = "Product Added Successfully";
        header('Location: manage_product.php');
        exit(0);
      }
    }
  }
?>

