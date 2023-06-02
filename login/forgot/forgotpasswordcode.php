<?php
    include('../../db_conn.php');

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../../PHPMailer/src/Exception.php';
    require '../../PHPMailer/src/PHPMailer.php';
    require '../../PHPMailer/src/SMTP.php';

    if(isset($_POST['forgot_btn'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $check_mail = "SELECT `email` FROM user WHERE email = '$email'";
        $check_mail_run = mysqli_query($con, $check_mail);

        if(mysqli_num_rows($check_mail_run) > 0){
            $row = mysqli_fetch_array($check_mail_run);
            $get_email = $row['email'];
            $new_password = substr(md5(microtime()),rand(0,26),8);
            $hashed_password = md5($new_password);
            $sql = "UPDATE user SET password='$hashed_password' WHERE email='$email'";
            if (mysqli_query($con, $sql)) {

                $email = htmlentities($get_email);
                $subject = htmlentities('Forgot Password');
                $message =  nl2br("Good day! \r\n This is your NEW PASSWORD \r\nPassword: $new_password \r\n Please change your password immediately!");
            
                $mail = new PHPMailer(true);
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'contactmaojimenez@gmail.com';
                $mail->Password = 'kcexdtybjptxgizm';
                $mail->Port = 465;
                $mail->SMTPSecure = 'ssl';
                $mail->isHTML(true);
                $mail->setFrom($email);
                $mail->addAddress($_POST['email']);
                $mail->Subject = ("$email ($subject)");
                $mail->Body = $message;
                $mail->send();
                $_SESSION['status'] = "Your new password is now sent in e-mail.";
                $_SESSION['status_code'] = "success";
                header("Location: " . base_url . "login/forgot");
                exit(0);
            }
            else{
                $_SESSION['status'] = "Something went wrong!";
                $_SESSION['status_code'] = "error";
                header("Location: " . base_url . "login/forgot");
                exit(0);
            }
        }
        else{
            $_SESSION['status'] = "No Email Found";
            $_SESSION['status_code'] = "error";
            header("Location: " . base_url . "login/forgot");
            exit(0);
        }
    }
?>