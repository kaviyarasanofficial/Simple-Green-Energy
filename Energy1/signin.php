<!DOCTYPE html>
<html>
<head>
    <title>Redirect Example</title>
   <style>
    body {
        text-align: center;
        background-color: white;
    }

    .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    #logo {
        margin-top: -20px;
    }

    .logoimg {
        max-width: 100%;
        height: 300px;
        width: 550px;
        margin-bottom: 15px;
    }

    /* Media query to adjust the logo size for different screen widths */
    @media (max-width: 768px) {
        .logoimg {
            width: 100%;
            height: 100%;/* Logo fills the container width */
        }
    }

    @media (max-width: 576px) {
        .logoimg {
            width: 90%; /* Logo fills the container width */
            height: 150px;   /* Maintains the aspect ratio */
        }
    }
</style>
   <meta name="viewport" content="width=device-width, initial-scale=1">

     <link href="assets/dist/css/base.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="assets/dist/css/component_ui.min.css" rel="stylesheet" type="text/css"/>
        <link id="defaultTheme" href="assets/dist/css/skins/skin-default.min" rel="stylesheet" type="text/css"/>
        <link href="assets/dist/css/custom.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    

<div class="container">
    <div class="row">
        <div id="logo">
            <img class="logoimg" src="https://www.simplegreenenergy.org/wp-content/uploads/2021/06/SimpleGreenEnergy_FinalLogo.png" alt="Logo">
        </div>
    </div><br>

    <div class="row mt-5 col-9 text-center">
    <div class="col-12 col-md-12 mx-auto ">
    <form id="redirectForm" action="index.php" method="post">
        <select id="redirectSelect" name="redirectOption" class="form-control custom-dropdown " style="width: 280px; background-color: #50C878; color: white;">
            <option selected>Select User</option>
            <option value="login.php">Admin</option>
            <option value="Customer/customer_login.php">Customer</option>
            <option value="surveyorlogin.php">Surveyors</option>
            <option value="teamlogin.php">Gas Engineers</option>
            <option value="teamlogin.php">Installation Team</option>
            <option value="teamlogin.php">Insulation Team</option>
        </select>
    </form>
</div>

    </div>
</div>

    <script>
        document.getElementById("redirectSelect").onchange = function () {
            var selectedOption = this.value;
            document.getElementById("redirectForm").action = selectedOption;
            document.getElementById("redirectForm").submit();
        };
    </script>


<script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/plugins/metisMenu/metisMenu.min.js" type="text/javascript"></script>
        <script src="assets/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
        <script src="assets/plugins/animsition/js/animsition.min.js" type="text/javascript"></script>
        <script src="assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
        <script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <!-- STRAT PAGE LABEL PLUGINS -->
        <!-- START THEME LABEL SCRIPT -->
        <script src="assets/dist/js/app.min.js" type="text/javascript"></script>
        <script src="assets/dist/js/jQuery.style.switcher.js" type="text/javascript"></script>
</body>
</html>
