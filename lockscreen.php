<?php
// Start the session to access session variables
session_start();

// Check if the user is not logged in (no session variable is set)
if (!isset($_SESSION['email'])) {
    // Redirect to the login page
    header("Location: login.php");
    exit();
}

// If the user is logged in, you can display the content of index.php
?>



<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from thememinister.com/adminpage/theme/adminpage_v2.0/lockscreen.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Oct 2023 10:41:26 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Adminpage - Responsive Bootstrap Admin .. Dashboard</title>
        <link rel="shortcut icon" href="assets/dist/img/ico/favicon.png" type="image/x-icon">
        <script src="../../../../ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>
            WebFont.load({
                google: {
                    families: ['Alegreya+Sans:100,100i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i', 'Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i', 'Open Sans']
                }
            });
        </script>
        <!-- START GLOBAL MANDATORY STYLE -->
        <link href="assets/dist/css/base.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap rtl -->
        <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
        <!-- Font Awesome 4.7.0 -->
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- socicon css -->
        <link href="assets/socicon/social.css" rel="stylesheet" type="text/css"/>
        <!-- Theme style -->
        <link href="assets/dist/css/component_ui.min.css" rel="stylesheet" type="text/css"/>
        <!-- Theme style rtl -->
        <!--<link href="assets/dist/css/component_ui_rtl.css" rel="stylesheet" type="text/css"/>-->
        <!-- Custom css -->
        <link href="assets/dist/css/custom.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!-- Content Wrapper -->
        <div class="lock-wrapper-page">
            <div class="text-center">
                <a href="index.php" class="logo-lock"><i class="icon socicon-feedburner"></i> <span>AdmnPage</span> </a>
            </div>
            <form method="post" action="https://thememinister.com/adminpage/theme/adminpage_v2.0/index.php" class="text-center m-t-20">
                <div class="user-thumb">
                    <img src="assets/dist/img/avatar.png" class="img-responsive img-circle img-thumbnail" alt="thumbnail">
                </div>
                <div class="form-group">
                <p><?php echo isset($_SESSION['email']) ? $_SESSION['email'] : 'Admin'; ?>!</p>
                    <p class="text-muted">Enter your password to access the admin.</p>
                    <div class="input-group m-t-20">
                        <input class="form-control" placeholder="Password" type="password">
                        <i class="fa fa-key"></i>
                        <span class="input-group-btn"> 
                            <button type="submit" class="btn btn-success">Log In</button> 
                        </span>
                    </div>
                </div>
                <div class="text-left">
                    <a href="login.php" class="text-muted">Not John Deo ?</a>
                </div>
            </form>
        </div>
        <!-- /.content-wrapper -->
        <!-- jQuery -->
        <script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
        <!-- bootstrap js -->
        <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    </body>

<!-- Mirrored from thememinister.com/adminpage/theme/adminpage_v2.0/lockscreen.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Oct 2023 10:41:26 GMT -->
</html>