<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#0134d4">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>Task</title>
    <!-- Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Favicon-->
    <link rel="icon" href="<?php echo base_url(); ?>app-assets/img/core-img/favicon.ico">
    <!-- CSS Libraries-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>app-assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>app-assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>app-assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>app-assets/css/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>app-assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>app-assets/css/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>app-assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>app-assets/css/apexcharts.css">
    <!-- Core Stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>app-assets/style.css">
    <!-- Web App Manifest-->
    <link rel="manifest" href="<?php echo base_url(); ?>app-assets/manifest.json">
    <style>
      .errors{
        padding-top:5px;
        color:red;
        font-size:11px;
      }
    </style>
  </head>
  <body>
    <!-- Preloader-->
    <div class="preloader d-flex align-items-center justify-content-center" id="preloader">
      <div class="spinner-grow text-primary" role="status">
        <div class="sr-only">Loading...</div>
      </div>
    </div>
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>
    <!-- Back Button-->
    <!-- <div class="login-back-button"><a href="element-hero-blocks.html"><svg width="32" height="32" viewBox="0 0 16 16" class="bi bi-arrow-left-short" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
</svg></a></div> -->
    <!-- Login Wrapper Area-->
    <div class="login-wrapper d-flex align-items-center justify-content-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-9 col-md-7 col-lg-6 col-xl-5">
            <div class="text-center px-4"><img class="login-intro-img" src="<?php echo base_url(); ?>app-assets/img/bg-img/36.png" alt=""></div>
            <!-- Register Form-->
            <div class="register-form mt-4 px-4">
              <h4 class="mb-3 text-center">Login Page</h4>

              <?php if(isset($error) && $error!="") { ?>
              <div class="alert alert-danger alert-dismissible">
                <strong><?php echo $error; ?></strong>
              </div>
              <?php } ?>

              <form action="check_login" method="post" id="loginForm">
                <div class="form-group">
                  <input class="form-control" type="text" placeholder="Username" name="username" id="username">
                  <p class="errors" id="error2">&nbsp;</p>
                </div>
                <div class="form-group">
                  <input class="form-control" type="password" placeholder="Password" name="password" id="password">
                  <p class="errors" id="error3">&nbsp;</p>
                </div>
                <input type="button" class="btn btn-primary w-100" onClick="submitForm()" value="Sign In">
              </form>
            </div>
            <!-- Login Meta-->
            
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- All JavaScript Files-->
   <script src="<?php echo base_url(); ?>app-assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>app-assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>app-assets/js/default/internet-status.js"></script>
    <script src="<?php echo base_url(); ?>app-assets/js/waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>app-assets/js/jquery.easing.min.js"></script>
    <script src="<?php echo base_url(); ?>app-assets/js/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>app-assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>app-assets/js/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url(); ?>app-assets/js/jquery.countdown.min.js"></script>
    <script src="<?php echo base_url(); ?>app-assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>app-assets/js/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>app-assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url(); ?>app-assets/js/default/dark-mode-switch.js"></script>
    <script src="<?php echo base_url(); ?>app-assets/js/ion.rangeSlider.min.js"></script>
    <script src="<?php echo base_url(); ?>app-assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>app-assets/js/default/active.js"></script>
    <script src="<?php echo base_url(); ?>app-assets/js/default/clipboard.js"></script>
    <!-- PWA-->
    <script src="<?php echo base_url(); ?>app-assets/js/pwa.js"></script>
    <script>
      function submitForm()
      {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        if(username=="")
        {
          document.getElementById("error2").innerHTML="Enter Username";
          document.getElementById("username").focus();
          return;
        }
        else
        {
          document.getElementById("error2").innerHTML="&nbsp;";
        }
        if(password=="")
        {
          document.getElementById("error3").innerHTML="Enter Password";
          document.getElementById("password").focus();
          return;
        }
        else
        {
          document.getElementById("error3").innerHTML="&nbsp;";
        }
        document.getElementById("loginForm").submit();
      }
    </script>
  </body>
</html>