<!DOCTYPE html>
<html>
<head>
    <title>Redirect Example</title>
    <style>
        body {
            text-align: center;
        }

        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        #logo {
            margin-top: 20px;
        }
    </style>
     <link href="assets/dist/css/base.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="assets/dist/css/component_ui.min.css" rel="stylesheet" type="text/css"/>
        <link id="defaultTheme" href="assets/dist/css/skins/skin-dark-1.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/dist/css/custom.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    

<div class="container">
    <div class="row">
        <div id="logo">
            <img src="https://sgecrm.rectusmedia.in/assets/dist/img/dark-logo.png" alt="Logo">
        </div>
    </div><br>

    <div class="row mt-4 col-9 text-center">
        <div class="col-5 mx-auto">
            <form id="redirectForm" action="index.php" method="post">
                <select id="redirectSelect" name="redirectOption" class="form-control custom-dropdown" style="width: 150px;">
                    <option selected>Select User</option>
                    <option value="login.php">Admin</option>
                    <option value="customer_login.php">Customer</option>
                    <option value="teamlogin.php">Surveyors</option>
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
