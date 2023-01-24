<?php
session_start();
include('../admin/config/dbcon.php');


if (isset($_POST['qrcode_text'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$qrcode_text = validate($_POST['qrcode_text']);


	if (empty($qrcode_text)) {
		header("Location: index.php?error=QR CODE is required");
	    exit();
	}else{
		$sql = "SELECT * FROM user WHERE user_id='$qrcode_text'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['qrcode'] === $qrcode_text) {
            	$_SESSION['qrcode'] = $row['qrcode'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: index.php?error=INCORRECT QR CODE");
		        exit();
			}
		}else{
			header("Location: index.php?error=INCORRECT QR CODE");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}




?>