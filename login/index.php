<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>MAO JIMENEZ</title>
  </head>

  <?php


session_start();


if(isset($_SESSION['auth']))
{
    if(!isset($_SESSION['status'])){
        $_SESSION['status'] = "You are already logged in";
        $_SESSION['status_code'] = "error";
    }
    header("Location: ../admin/index.php");
    exit(0);
}

?>
  <body>




  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/mao2.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Login to <strong>MAO JIMENEZ</strong></h3>
            <p class="mb-4">A system where churva churva</p>
            <form action="logincode.php" method="POST">

              <div class="form-group first">
                <label for="">Email</label>
                <input required type="email" name="email" class="form-control" placeholder="your-email@gmail.com" id="username">
              </div>
              <div class="form-group last mb-3">
                <label for="">Password</label>
                <input required type="password" name="password" class="form-control" placeholder="Your Password" id="password">
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox"/>
                  <div class="control__indicator"></div>
                </label>

                <span class="ml-auto"><a href="loginqr.php"><u>Click here to login via QR</u></a></span> 
                
              </div>

              <button type="submit" name="login_btn" class="btn btn-block btn-primary">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>




  <script src="js/sweetalert.js"></script>

    <?php
        if(isset($_SESSION['status']) && $_SESSION['status_code'] !='' )
        {
            ?>
                <script>
                swal({
                title: "<?php echo $_SESSION['status']; ?>",
                icon: "<?php echo $_SESSION['status_code']; ?>",
                timer: 1500,
                button: "Close",
                }).then(
                function () {},
                // handling the promise rejection
                function (dismiss) {
                    if (dismiss === 'timer') {
                    //console.log('I was closed by the timer')
                    }
                }
                )
                </script>
                <?php
                unset($_SESSION['status']);
                unset($_SESSION['status_code']);
        }
                ?>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>