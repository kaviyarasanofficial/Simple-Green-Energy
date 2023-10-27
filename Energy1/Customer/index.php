<?php
// Start the session to access session variables
session_start();

// Check if the user is not logged in (no session variable is set)
if (!isset($_SESSION['email'])) {
    // Redirect to the login page
    header("Location: signin.php");
    exit();
}

// If the user is logged in, you can display the content of index.php
?>



<!DOCTYPE html>
<html lang=en>
    
<!-- Mirrored from thememinister.com/adminpage/theme/adminpage_v2.0/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Oct 2023 10:39:59 GMT -->
<head>
        <meta charset=utf-8>
        <meta http-equiv=X-UA-Compatible content="IE=edge">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <meta name=description content="">
        <meta name=author content="">
        <title>Simple Green Energy-Admin</title>
        <link rel="shortcut icon" href="assets/dist/img/ico/favicon.png" type="image/x-icon">
        <script src="../../../../ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>
            WebFont.load({
                google: {
                    families: ['Alegreya+Sans:100,100i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i', 'Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i', 'Open Sans']
                }
            });
        </script>
        <link href="assets/dist/css/base.css" rel=stylesheet type="text/css"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="assets/plugins/toastr/toastr.min.css" rel=stylesheet type="text/css"/>
        <link href="assets/plugins/emojionearea/emojionearea.min.css" rel=stylesheet type="text/css"/>
        <link href="assets/plugins/monthly/monthly.min.css" rel=stylesheet type="text/css"/>
        <link href="assets/plugins/amcharts/export.css" rel=stylesheet type="text/css"/>
        <link href="assets/dist/css/component_ui.min.css" rel=stylesheet type="text/css"/>
        <link id=defaultTheme href="assets/dist/css/skins/skin-dark-1.min.css" rel=stylesheet type="text/css"/>
        <link href="assets/dist/css/custom.css" rel=stylesheet type="text/css"/>
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id=wrapper class="wrapper animsition">
            <!-- Navigation -->
            <nav class="navbar navbar-fixed-top">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="material-icons">apps</i>
                    </button>
                    <a class="navbar-brand" href="index.php">
                     <img class="main-logo" src="https://www.simplegreenenergy.org/wp-content/uploads/2021/06/SimpleGreenEnergy_FinalLogo.png" id="bg" alt="logo" style="width: 150px; height: 51px;">

                        <!--<span>AdminPage</span>-->
                    </a>
                </div>
                <div class="nav-container">
                    <!-- /.navbar-header -->
                    <ul class="nav navbar-nav hidden-xs">
                        <li><a id="fullscreen" href="#"><i class="material-icons">fullscreen</i> </a></li>
                        <!-- /.Fullscreen -->
                        <li class="hidden-xs"> 
                            <a class="search-trigger" href="#">
                                <i class="material-icons">search</i>
                            </a>
                            <div class="fullscreen-search-overlay" id="search-overlay">
                                <a href="#" class="fullscreen-close" id="fullscreen-close-button"><i class="ti-close"></i></a>
                                <div id="fullscreen-search-wrapper">
                                    <form method="get" id="fullscreen-searchform">
                                        <input type="text" value="" placeholder="Type keyword(s) here" id="fullscreen-search-input">
                                        <i class="ti-search fullscreen-search-icon"><input value="" type="submit"></i>
                                    </form>
                                </div>
                            </div>
                        </li>
                        <!-- /.Full page search -->
                        <li><a id="menu-toggle" href="#"><i class="material-icons">apps</i></a></li>
                        <!-- /.Sidebar menu toggle icon -->
                        <!--Start dropdown menu-->
                        <li class="dropdown hidden-sm"><a href="#" class="dropdown-toggle material-ripple" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <!--<li class="ui_popover_tooltip"></li>-->
                                <li><a href="#">Dropdown Link 1</a></li>
                                <li><a href="#">Dropdown Link 2</a></li>
                                <li><a href="#">Dropdown Link 3</a></li>
                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Link 4</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Submenu Link 4.1</a></li>
                                        <li><a href="#">Submenu Link 4.2</a></li>
                                        <li><a href="#">Submenu Link 4.3</a></li>
                                        <li><a href="#">Submenu Link 4.4</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Link 5</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Submenu Link 5.1</a></li>
                                        <li><a href="#">Submenu Link 5.2</a></li>
                                        <li><a href="#">Submenu Link 5.3</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Submenu Link 5.4</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Submenu Link 5.4.1</a></li>
                                                <li><a href="#">Submenu Link 5.4.2</a></li>
                                                <li class="divider"></li>
                                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Submenu Link 5.4.3</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Submenu Link 5.4.3.1</a></li>
                                                        <li><a href="#">Submenu Link 5.4.3.2</a></li>
                                                        <li><a href="#">Submenu Link 5.4.3.3</a></li>
                                                        <li><a href="#">Submenu Link 5.4.3.4</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Submenu Link 5.4.4</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Submenu Link 5.4.4.1</a></li>
                                                        <li><a href="#">Submenu Link 5.4.4.2</a></li>
                                                        <li><a href="#">Submenu Link 5.4.4.3</a></li>
                                                        <li><a href="#">Submenu Link 5.4.4.4</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!--End Start dropdown menu-->
                        <!--Start dropdown mega menu-->
                        <li class="dropdown mega-dropdown hidden-sm">
                            <a href="#" class="dropdown-toggle material-ripple" data-toggle="dropdown">Megamenu <b class="caret"></b></a>
                            <ul class="dropdown-menu mega-dropdown-menu">
                                <li class="row">
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            <li><a href="buttons.php"><i class="fa fa-window-minimize"></i>Buttons</a></li>
                                            <li><a href="tabs.php"><i class="fa fa-tablet"></i>Tab</a></li>
                                            <li><a href="notification.php"><i class="fa fa-exclamation-triangle"></i>Notification</a></li>
                                            <li><a href="tree-view.php"><i class="fa fa-tree"></i>Tree View</a></li>
                                            <li><a href="progressbars.php"><i class="fa fa-minus"></i>Progressber</a></li>
                                            <li><a href="list.php"><i class="fa fa-list-ol"></i>List View</a></li>
                                            <li><a href="typography.php"><i class="fa fa-text-width"></i>Typography</a></li>
                                            <li><a href="panels.php"><i class="fa fa-keyboard-o"></i>Panels</a></li>
                                        </ul>
                                    </div>
                                    <!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            <li><a href="modals.php"><i class="fa fa-file-text-o"></i>Modals</a></li>
                                            <li><a href="icheck_toggle_pagination.php"><i class="fa fa-check-square-o"></i>iCheck, Toggle</a></li>
                                            <li><a href="labels-badges-alerts.php"><i class="fa fa-exclamation"></i>labels, Badges, Alerts</a></li>
                                            <li><a href="charts_flot.php"><i class="fa fa-area-chart"></i>Flot Chart</a></li>
                                            <li><a href="charts_Js.php"><i class="fa fa-bar-chart"></i>ATP</a></li>
                                            <li><a href="charts_morris.php"><i class="fa fa-pie-chart"></i>Documents History</a></li>
                                            <li><a href="charts_sparkline.php"><i class="fa fa-line-chart"></i>Sparkline Charts</a></li>
                                            <li><a href="maps_data.php"><i class="fa fa-map-marker"></i>Data Maps</a></li>
                                        </ul>
                                    </div>
                                    <!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            <li><a href="maps_jvector.php"><i class="fa fa-puzzle-piece"></i>Jvector Maps</a></li>
                                            <li><a href="maps_google.php"><i class="fa fa-google"></i>Google map</a></li>
                                            <li><a href="maps_snazzy.php"><i class="fa fa-map-signs"></i>Snazzy Map</a></li>
                                            <li><a href="widgets.php">
                                                    <i class="fa fa-windows"></i> <span>Widgets</span>
                                                    <span class="pull-rightr">
                                                        <small class="label pull-right bg-green">new</small>
                                                    </span>
                                                </a>
                                            </li>
                                            <li><a href="table.php"><i class="fa fa-table"></i>Simple tables</a></li>
                                            <li><a href="dataTables.php"><i class="ti-layout-tab-window"></i>Data tables</a></li>
                                            <li><a href="footable.php"><i class="ti-layout-width-default"></i>FooTable</a></li>
                                            <li><a href="x-editable.php"><i class="ti-close"></i>X-editable</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            <li><a href="icons_bootstrap.php"><i class="fa fa-bold"></i>Bootstrap Icons</a></li>
                                            <li><a href="icons_fontawesome.php"><i class="fa fa-fort-awesome"></i>Fontawesome Icon</a></li>
                                            <li><a href="icons_flag.php"><i class="fa fa-flag-checkered"></i>Flag Icons</a></li>
                                            <li><a href="icons_material.php"><i class="fa fa-meetup"></i>Material Icons</a></li>
                                            <li><a href="icons_weather.php"><i class="fa fa-bolt"></i>Weather Icons </a></li>
                                            <li><a href="icons_line.php"><i class="fa fa-lemon-o"></i>Line Icons</a></li>
                                            <li><a href="icons_pe.php"><i class="fa fa-diamond"></i>Pe Icons</a></li>
                                            <li><a href="icon_socicon.php"><i class="fa fa-share-alt"></i>Socicon Icons</a></li>
                                        </ul>
                                    </div>
                                    <!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            <li><a href="invoice.php"><i class="fa fa-file-text-o"></i>Invoice</a></li>
                                            <li><a href="timeline.php"><i class="fa fa-hourglass-o"></i>Vertical timeline</a></li>
                                            <li><a href="horizontal_timeline.php"><i class="fa fa-hourglass-end"></i>Horizontal timeline</a></li>
                                            <li><a href="pricing.php"><i class="fa fa-usd"></i>Pricing Table</a></li>
                                            <li><a href="slider.php"><i class="fa fa-sliders"></i>Slider</a></li>
                                            <li><a href="carousel.php"><i class="fa fa-long-arrow-left"></i>Carousel</a></li>
                                            <li><a href="code_editor.php"><i class="fa fa-code"></i>Code editor</a></li>
                                            <li>
                                                <a href="calender.php">
                                                    <i class="ti-calendar"></i><span>Calendar</span>
                                                    <span class="pull-right">
                                                        <small class="label pull-right bg-red m-r-5">9</small>
                                                        <small class="label pull-right bg-yellow m-r-5">29</small>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!-- end col-3 -->
                                </li><!-- end row -->
                            </ul>
                        </li>
                        <!--End dropdown mega menu-->
                        <li><a href="lockscreen.php"  class="btn-buy hidden-xs hidden-sm hidden-md">Lockscreen</a></li>
                    </ul>
                    <ul class="nav navbar-top-links navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="material-icons">chat</i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu dropdown-messages">
                                <li class="rad-dropmenu-header"><a href="#">New Messages</a></li>
                                <li>
                                    <a href="#" class="rad-content">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/dist/img/avatar.png" class="img-circle" alt=""></div>
                                            <strong class="inbox-item-author">Naeem Khan</strong>
                                            <span class="inbox-item-date">-13:40 PM</span>
                                            <p class="inbox-item-text">Hey! there I'm available...</p>
                                            <span class="profile-status available pull-right"></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="rad-content">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/dist/img/avatar2.png" class="img-circle" alt=""></div>
                                            <strong class="inbox-item-author">Sala Uddin</strong>
                                            <span class="inbox-item-date">-13:40 PM</span>
                                            <p class="inbox-item-text">Hey! there I'm available...</p>
                                            <span class="profile-status away pull-right"></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="rad-content">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/dist/img/avatar3.png" class="img-circle" alt=""></div>
                                            <strong class="inbox-item-author">Mozammel</strong>
                                            <span class="inbox-item-date">-13:40 PM</span>
                                            <p class="inbox-item-text">Hey! there I'm available...</p>
                                            <span class="profile-status busy pull-right"></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="rad-content">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/dist/img/avatar4.png" class="img-circle" alt=""></div>
                                            <strong class="inbox-item-author">Tanzil Ahmed</strong>
                                            <span class="inbox-item-date">-13:40 PM</span>
                                            <p class="inbox-item-text">Hey! there I'm available...</p>
                                            <span class="profile-status offline pull-right"></span>
                                        </div>
                                    </a>
                                </li>
                                <li class="rad-dropmenu-footer"><a href="#">View All messages</a></li>
                            </ul> <!-- /.Dropdown-messages -->
                        </li><!-- /.dropdown -->
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <!--<i class="ti-flag-alt"></i>-->
                                <i class="material-icons">flag</i>
                                <span class="label label-success">4</span>
                                <!--<i class="ti-angle-down"></i>-->
                            </a>
                            <ul class="dropdown-menu dropdown-tasks">
                                <!--<li class="ui_popover_tooltip"></li>-->
                                <li class="rad-dropmenu-header"><a  href="#">Your Task</a></li>
                                <li>
                                    <a href="#">
                                        <div>
                                            <p><strong>Task 1</strong>
                                                <span class="pull-right sm-text">40% Complete</span></p>
                                            <div class="progress progress-striped active">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                    <span class="sr-only">40% Complete (success)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div>
                                            <p><strong>Task 2</strong>
                                                <span class="pull-right sm-text">20% Complete</span></p>
                                            <div class="progress progress-striped active">
                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div>
                                            <p><strong>Task 3</strong>
                                                <span class="pull-right sm-text">60% Complete</span></p>
                                            <div class="progress progress-striped active">
                                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                    <span class="sr-only">60% Complete (warning)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div>
                                            <p><strong>Task 4</strong>
                                                <span class="pull-right sm-text">80% Complete</span></p>
                                            <div class="progress progress-striped active">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                    <span class="sr-only">80% Complete (danger)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="rad-dropmenu-footer"><a href="#">See All Tasks</a></li>
                            </ul><!-- /.Dropdown-tasks -->
                        </li><!-- /.Dropdown -->
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="material-icons">add_alert</i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                                <!--<i class="ti-announcement"></i>-->
                                <!--<i class="ti-angle-down"></i>-->
                            </a>
                            <ul class="dropdown-menu dropdown-alerts">
                                <!--<li class="ui_popover_tooltip"></li>-->
                                <li class="rad-dropmenu-header"><a href="#">Your Notifications</a></li>
                                <li>
                                    <a class="rad-content" href="#">
                                        <div class="pull-left"><i class="fa fa-html5 fa-2x color-red"></i>
                                        </div>
                                        <div class="rad-notification-body">
                                            <div class="lg-text">Introduction to fetch()</div>
                                            <div class="sm-text">The fetch API</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="rad-content" href="#">
                                        <div class="pull-left"><i class="fa fa-bitbucket fa-2x color-violet"></i>
                                        </div>
                                        <div class="rad-notification-body">
                                            <div class="lg-text">Check your BitBucket</div>
                                            <div class="sm-text">Last Chance</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="rad-content" href="#">
                                        <div class="pull-left"><i class="fa fa-google fa-2x color-info"></i>
                                        </div>
                                        <div class="rad-notification-body">
                                            <div class="lg-text">Google Account</div>
                                            <div class="sm-text">example@gmail.com</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="rad-content" href="#">
                                        <div class="pull-left"><i class="fa fa-amazon fa-2x color-green"></i>
                                        </div>
                                        <div class="rad-notification-body">
                                            <div class="lg-text">Amazon Simple Notification ...</div>
                                            <div class="sm-text">Lorem Ipsum is simply dummy text...</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="rad-dropmenu-footer"><a href="#">See all notifications</a></li>
                            </ul>  <!-- /.dropdown-alerts -->
                            <!-- /.dropdown-alerts -->
                        </li>
                        <!-- /.Dropdown -->
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="material-icons">person_add</i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="profile.php"><i class="ti-user"></i>&nbsp; Profile</a></li>
                                <li><a href="mailbox.php"><i class="ti-email"></i>&nbsp; My Messages</a></li>
                                <li><a href="lockscreen.php"><i class="ti-lock"></i>&nbsp; Lock Screen</a></li>
                                <li><a href="#"><i class="ti-settings"></i>&nbsp; Settings</a></li>
                                <li><a href="logout.php"><i class="ti-layout-sidebar-left"></i>&nbsp; Logout</a></li>
                            </ul><!-- /.dropdown-user -->
                        </li><!-- /.Dropdown -->
                        <li class="log_out">
                            <a href="logout.php">
                                <i class="material-icons">power_settings_new</i>
                            </a>
                        </li><!-- /.Log out -->
                    </ul> <!-- /.navbar-top-links -->
                </div>
            </nav>
            <!-- /.Navigation -->
            <div class="sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="nav-heading "> <span>Main Navigation&nbsp;&nbsp;&nbsp;&nbsp;------</span></li>
                        <li class="active"><a href="index.php" class="material-ripple"><i class="material-icons">home</i> Dashboard</a></li>
                        <li>
                            <a href="#" class="material-ripple"><i class="material-icons">bubble_chart</i> Lead Generation<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="charts_flot.php">Leads</a></li>
                                <li><a href="charts_Js.php">ATP</a></li>
                                <li><a href="charts_morris.php">Documents History</a></li>
                                <li><a href="charts_sparkline.php">Sparkline Charts</a></li>
                                <li><a href="charts_am.php">Am Charts</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="material-ripple"><i class="material-icons">drafts</i> Admin<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="mailbox.php">Admin<span class="nav-tag green">3</span></a></li>
                                <li><a href="mailDetails.php">Admin Details<span class="nav-tag yellow">2</span></a></li>
                                <li><a href="compose.php">Compose<span class="nav-tag red">9</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="material-ripple"><i class="material-icons">business</i> Sales<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="table.php">Simple tables</a></li>
                                <li><a href="dataTables.php">Data tables</a></li>
                                <li><a href="footable.php">FooTable</a></li>
                                <li><a href="x-editable.php">X-editable</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="material-ripple"><i class="material-icons">assignment</i> Surveyor<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="forms_basic.php">Basic Surveyor</a></li>
                                <li><a href="form_input_group.php">Input group</a></li>
                                <li><a href="form-mask.php">Create New Surveyor</a></li>
                                <li><a href="form_touchspin.php">Surveyor List</a></li>
                                <li><a href="form_select.php">Select</a></li>
                                <li><a href="forms_validation.php">Validation Surveyor</a></li>
                                <li><a href="forms_cropper.php">Cropper</a></li>
                                <li><a href="form_file_upload.php">Surveyor File Upload</a></li>
                                <li><a href="forms_editor_ck.php">CK Editor</a></li>
                                <li><a href="forms_editor_summernote.php">Summernote</a></li>
                                <li><a href="form_wizard.php">Form Wizaed</a></li>
                                <li><a href="forms_editor_markdown.php">Markdown</a></li>
                                <li><a href="forms_editor_trumbowyg.php">Trumbowyg</a></li>
                                <li><a href="form_editor_wysihtml5.php">Wysihtml5</a></li>
                            </ul>
                        </li>
                        <li class="nav-heading "> <span>Components&nbsp;&nbsp;&nbsp;&nbsp;------</span></li>
                        <li>
                            <a href="#" class="material-ripple"><i class="material-icons">format_color_fill</i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="buttons.php">Buttons</a></li>
                                <li><a href="tabs.php">Tab</a></li>
                                <li><a href="notification.php">Notification</a></li>
                                <li><a href="tree-view.php">Tree View</a></li>
                                <li><a href="progressbars.php">Progressber</a></li>
                                <li><a href="list.php">List View</a></li>
                                <li><a href="typography.php">Typography</a></li>
                                <li><a href="panels.php">Panels</a></li>
                                <li><a href="modals.php">Modals</a></li>
                                <li><a href="icheck_toggle_pagination.php">iCheck, Toggle, pagination</a></li>
                                <li><a href="labels-badges-alerts.php">labels, Badges, Alerts</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="material-ripple"><i class="material-icons">map</i> Maps<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="maps_amcharts.php">Amcharts Map</a></li>
                                <li><a href="maps_gmaps.php">gMaps</a></li>
                                <li><a href="maps_data.php">Data Maps</a></li>
                                <li><a href="maps_jvector.php">Jvector Maps</a></li>
                                <li><a href="maps_google.php">Google map</a></li>
                                <li><a href="maps_snazzy.php">Snazzy Map</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="material-ripple"><i class="material-icons">insert_emoticon</i> Icons<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="icons_bootstrap.php">Bootstrap Icons</a></li>
                                <li><a href="icons_fontawesome.php">Fontawesome Icon</a></li>
                                <li><a href="icons_flag.php">Flag Icons</a></li>
                                <li><a href="icons_material.php">Material Icons</a></li>
                                <li><a href="icons_weather.php">Weather Icons </a></li>
                                <li><a href="icons_line.php">Line Icons</a></li>
                                <li><a href="icons_pe.php">Pe Icons</a></li>
                                <li><a href="icon_socicon.php">Socicon Icons</a></li>
                            </ul>
                        </li>
                        <li><a href="widgets.php"><i class="material-icons">widgets</i>Widgets<span class="nav-tag green">new</span></a></li>
                        <li><a href="calender.php"><i class="material-icons">perm_contact_calendar</i>Calendar<span class="nav-tag red">3</span><span class="nav-tag green">5</span><span class="nav-tag yellow">8</span></a></li>
                        <li class="nav-heading "> <span>Extra&nbsp;&nbsp;&nbsp;&nbsp;------</span></li>
                        <li>
                            <a href="#" class="material-ripple"><i class="material-icons">stay_current_portrait</i>App Views<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="invoice.php">Invoice</a></li>
                                <li><a href="timeline.php">Vertical timeline</a></li>
                                <li><a href="horizontal_timeline.php">Horizontal timeline</a></li>
                                <li><a href="pricing.php">Pricing Table</a></li>
                                <li><a href="slider.php">Slider</a></li>
                                <li><a href="carousel.php">Carousel</a></li>
                                <li><a href="code_editor.php">Code editor</a></li>
                                <li><a href="gridSystem.php">Grid System</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="material-ripple"><i class="material-icons">devices_other</i>Other pags<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="login.php">Login</a></li>
                                <li><a href="register.php">Register</a></li>
                                <li><a href="profile.php">Profile</a></li>
                                <li><a href="forget_password.php">Forget password</a></li>
                                <li><a href="lockscreen.php">Lockscreen</a></li>
                                <li><a href="404.php">404 Error</a></li>
                                <li><a href="505.php">505 Error</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="material-ripple"><i class="material-icons">invert_colors</i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href="#">Second Level Item</a></li>
                                <li><a href="#">Second Level Item</a></li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li><a href="#">Third Level Item</a></li>
                                        <li><a href="#">Third Level Item</a></li>
                                        <li><a href="#">Third Level Item</a></li>
                                        <li><a href="#">Third Level Item</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="blank.php" class="material-ripple"><i class="material-icons">check_box_outline_blank</i> Blank page</a></li>
                        <li><a href="https://thememinister.com/adminpage/documentation/index.php" class="material-ripple" target="_blank"><i class="material-icons">bookmark</i> Documentation</a></li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.Left Sidebar-->
            <div class="side-bar right-bar">
                <div class="">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs right-sidebar-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="material-icons">home</i></a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="material-icons">person_add</i></a></li>
                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><i class="material-icons">chat</i></a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade  in active" id="home">
                            <ul id="styleOptions" title="switch styling">
                                <li><b>Dark Skin</b></li>
                                <li><a href="javascript: void(0)" data-theme="skin-blue.min"><img src="assets/dist/img/theme-color/1.jpg" alt=""/></a></li>
                                <li><a href="javascript: void(0)" data-theme="skin-dark.min"><img src="assets/dist/img/theme-color/2.jpg" alt=""/></a></li>
                                <li><a href="javascript: void(0)" data-theme="skin-red-light.min" class="skin-logo"><img src="assets/dist/img/theme-color/5.jpg" alt=""/></a></li>
                                <li><b>Dark Skin sidebar</b></li>
                                <li><a href="javascript: void(0)" data-theme="skin-default.min"><img src="assets/dist/img/theme-color/7.jpg" alt=""/> </a></li>
                                <li><a href="javascript: void(0)" data-theme="skin-red-dark.min"><img src="assets/dist/img/theme-color/6.jpg" alt=""/></a></li>
                                <li><a href="javascript: void(0)" data-theme="skin-dark-1.min"><img src="assets/dist/img/theme-color/8.jpg" alt=""/></a></li>
                                <li><b>Light Skin sidebar</b></li>
                                <li><a href="javascript: void(0)" data-theme="skin-default-light.min" class="skin-logo"><img src="assets/dist/img/theme-color/3.jpg" alt=""/></a></li>
                                <li><a href="javascript: void(0)" data-theme="skin-white.min"><img src="assets/dist/img/theme-color/4.jpg" alt=""/></a> </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade " id="profile">
                            <h3 class="sidebar-heading">Activity</h3>
                            <div class="rad-activity-body">
                                <div class="rad-list-group group">
                                    <a href="#" class="rad-list-group-item">
                                        <div class="rad-list-icon bg-red pull-left"><i class="fa fa-phone"></i></div>
                                        <div class="rad-list-content"><strong>Client meeting</strong>
                                            <div class="md-text">Meeting at 10:00 AM</div>
                                        </div>
                                    </a>
                                    <a href="#" class="rad-list-group-item">
                                        <div class="rad-list-icon bg-yellow pull-left"><i class="fa fa-refresh"></i></div>
                                        <div class="rad-list-content"><strong>Created ticket</strong>
                                            <div class="md-text">Ticket assigned to Dev team</div>
                                        </div>
                                    </a>
                                    <a href="#" class="rad-list-group-item">
                                        <div class="rad-list-icon bg-primary pull-left"><i class="fa fa-check"></i></div>
                                        <div class="rad-list-content"><strong>Activity completed</strong>
                                            <div class="md-text">Completed the dashboard html</div>
                                        </div>
                                    </a>
                                    <a href="#" class="rad-list-group-item">
                                        <div class="rad-list-icon bg-green pull-left"><i class="fa fa-envelope"></i></div>
                                        <div class="rad-list-content"><strong>New Invitation</strong>
                                            <div class="md-text">Max has invited you to join Inbox</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- /.sidebar-menu -->
                            <h3 class="sidebar-heading">Tasks Progress</h3>
                            <ul class="sidebar-menu">
                                <li>
                                    <a href="#">
                                        <h4 class="subheading">
                                            Task one
                                            <span class="label label-danger pull-right">40%</span>
                                        </h4>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-danger progress-bar-striped active" style="width: 40%"></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <h4 class="subheading">
                                            Task two
                                            <span class="label label-success pull-right">20%</span>
                                        </h4>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success progress-bar-striped active" style="width: 20%"></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <h4 class="subheading">
                                            Task Three
                                            <span class="label label-warning pull-right">60%</span>
                                        </h4>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 60%"></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <h4 class="subheading">
                                            Task four
                                            <span class="label label-primary pull-right">80%</span>
                                        </h4>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary progress-bar-striped active" style="width: 80%"></div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <!-- /.sidebar-menu -->
                        </div>
                        <div role="tabpanel" class="tab-pane fade " id="messages">
                            <div class="message_widgets">
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/dist/img/avatar.png" class="img-circle" alt=""></div>
                                        <strong class="inbox-item-author">Naeem Khan</strong>
                                        <span class="inbox-item-date">-13:40 PM</span>
                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                        <span class="profile-status available pull-right"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/dist/img/avatar2.png" class="img-circle" alt=""></div>
                                        <strong class="inbox-item-author">Sala Uddin</strong>
                                        <span class="inbox-item-date">-13:40 PM</span>
                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                        <span class="profile-status away pull-right"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/dist/img/avatar3.png" class="img-circle" alt=""></div>
                                        <strong class="inbox-item-author">Mozammel</strong>
                                        <span class="inbox-item-date">-13:40 PM</span>
                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                        <span class="profile-status busy pull-right"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/dist/img/avatar4.png" class="img-circle" alt=""></div>
                                        <strong class="inbox-item-author">Tanzil</strong>
                                        <span class="inbox-item-date">-13:40 PM</span>
                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                        <span class="profile-status offline pull-right"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/dist/img/avatar5.png" class="img-circle" alt=""></div>
                                        <strong class="inbox-item-author">Amir Khan</strong>
                                        <span class="inbox-item-date">-13:40 PM</span>
                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                        <span class="profile-status available pull-right"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/dist/img/avatar.png" class="img-circle" alt=""></div>
                                        <strong class="inbox-item-author">Salman Khan</strong>
                                        <span class="inbox-item-date">-13:40 PM</span>
                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                        <span class="profile-status available pull-right"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/dist/img/avatar.png" class="img-circle" alt=""></div>
                                        <strong class="inbox-item-author">Tahamina</strong>
                                        <span class="inbox-item-date">-13:40 PM</span>
                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                        <span class="profile-status available pull-right"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/dist/img/avatar4.png" class="img-circle" alt=""></div>
                                        <strong class="inbox-item-author">Jhon</strong>
                                        <span class="inbox-item-date">-13:40 PM</span>
                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                        <span class="profile-status offline pull-right"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.Right Sidebar -->
            <div class=control-sidebar-bg></div>
            <div id=page-wrapper>
                <div class=content>
                    <div class=content-header>
                        <div class=header-icon>
                            <i class=pe-7s-tools></i>
                        </div>
                        <div class=header-title>
                            <h1>Welcome Simple Green Energy</h1>
                            <!-- <small>Very detailed &amp; featured admin.</small> -->
                            <ol class=breadcrumb>
                                <li><a href=index.php><i class=pe-7s-home></i> Home</a></li>
                                <li class=active>Dashboard</li>
                            </ol>
                        </div>
                    </div>
                    <div class=row>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="statistic-box statistic-filled-3">
                                <h2><span class=count-number>789</span>K <span class=slight><i class="fa fa-play fa-rotate-270 text-warning"> </i> +29%</span></h2>
                                <div class=small>Social users </div>
                                <i class="ti-world statistic_icon"></i>
                                <div class="sparkline3 text-center"></div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="statistic-box statistic-filled-1">
                                <h2><span class=count-number>696</span>K <span class=slight><i class="fa fa-play fa-rotate-270 text-warning"> </i> +28%</span></h2>
                                <div class=small>Visitors this Month</div>
                                <i class="ti-server statistic_icon"></i>
                                <div class="sparkline1 text-center"></div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="statistic-box statistic-filled-2">
                                <h2><span class=count-number>321</span>M <span class=slight><i class="fa fa-play fa-rotate-90 c-white"> </i> +10%</span> </h2>
                                <div class=small>Total users</div>
                                <i class="ti-user statistic_icon"></i>
                                <div class="sparkline2 text-center"></div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="statistic-box statistic-filled-4">
                                <h2><span class=count-number>5489</span>$ <span class=slight><i class="fa fa-play fa-rotate-90 c-white"> </i> +24%</span></h2>
                                <div class=small>Total Sales</div>
                                <i class="ti-bag statistic_icon"></i>
                                <div class="sparkline4 text-center"></div>
                            </div>
                        </div>
                    </div>
                    <div class=row>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                            <div class="panel panel-bd ">
                                <div class=panel-body>
                                    <div id=chartdiv></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=row>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 ">
                            <div class="panel panel-bd lobidrag">
                                <div class=panel-heading>
                                    <div class=panel-title>
                                        <i class=ti-panel></i>
                                        <h4>CSS animations Chart</h4>
                                    </div>
                                </div>
                                <div class=panel-body>
                                    <div id=chartdiv2></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                            <div class="panel panel-bd lobidisable">
                                <div class=panel-heading>
                                    <div class=panel-title>
                                        <i class=ti-stats-up></i>
                                        <h4>Recent Activities</h4>
                                    </div>
                                </div>
                                <div class=panel-body>
                                    <ul class="activity-list list-unstyled">
                                        <li class=activity-purple>
                                            <small class=text-muted>9 minutes ago</small>
                                            <p>You <span class="label label-success label-pill">recommended</span> Karen Ortega</p>
                                        </li>
                                        <li class=activity-danger>
                                            <small class=text-muted>15 minutes ago</small>
                                            <p>You followed Olivia Williamson</p>
                                        </li>
                                        <li class=activity-warning>
                                            <small class=text-muted>22 minutes ago</small>
                                            <p>You <span class=text-danger>subscribed</span> to Harold Fuller</p>
                                        </li>
                                        <li class=activity-primary>
                                            <small class=text-muted>30 minutes ago</small>
                                            <p>You updated your profile picture</p>
                                        </li>
                                        <li>
                                            <small class=text-muted>35 minutes ago</small>
                                            <p>You deleted homepage.psd</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                            <div class="panel panel-bd lobidisable">
                                <div class=panel-heading>
                                    <div class=panel-title>
                                        <i class=ti-email></i>
                                        <h4>Messages</h4>
                                    </div>
                                </div>
                                <div class=panel-body>
                                    <div class=message_inner>
                                        <div class=message_widgets>
                                            <a href="#">
                                                <div class=inbox-item>
                                                    <div class=inbox-item-img><img src="assets/dist/img/avatar.png" class=img-circle alt=""></div>
                                                    <strong class=inbox-item-author>Naeem Khan</strong>
                                                    <span class=inbox-item-date>-13:40 PM</span>
                                                    <p class=inbox-item-text>Hey! there I'm available...</p>
                                                    <span class="profile-status available pull-right"></span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class=inbox-item>
                                                    <div class=inbox-item-img><img src="assets/dist/img/avatar2.png" class=img-circle alt=""></div>
                                                    <strong class=inbox-item-author>Sala Uddin</strong>
                                                    <span class=inbox-item-date>-13:40 PM</span>
                                                    <p class=inbox-item-text>Hey! there I'm available...</p>
                                                    <span class="profile-status away pull-right"></span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class=inbox-item>
                                                    <div class=inbox-item-img><img src="assets/dist/img/avatar3.png" class=img-circle alt=""></div>
                                                    <strong class=inbox-item-author>Mozammel Hoque</strong>
                                                    <span class=inbox-item-date>-13:40 PM</span>
                                                    <p class=inbox-item-text>Hey! there I'm available...</p>
                                                    <span class="profile-status busy pull-right"></span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class=inbox-item>
                                                    <div class=inbox-item-img><img src="assets/dist/img/avatar4.png" class=img-circle alt=""></div>
                                                    <strong class=inbox-item-author>Tanzil Ahmed</strong>
                                                    <span class=inbox-item-date>-13:40 PM</span>
                                                    <p class=inbox-item-text>Hey! there I'm available...</p>
                                                    <span class="profile-status offline pull-right"></span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class=inbox-item>
                                                    <div class=inbox-item-img><img src="assets/dist/img/avatar5.png" class=img-circle alt=""></div>
                                                    <strong class=inbox-item-author>Amir Khan</strong>
                                                    <span class=inbox-item-date>-13:40 PM</span>
                                                    <p class=inbox-item-text>Hey! there I'm available...</p>
                                                    <span class="profile-status available pull-right"></span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class=inbox-item>
                                                    <div class=inbox-item-img><img src="assets/dist/img/avatar.png" class=img-circle alt=""></div>
                                                    <strong class=inbox-item-author>Salman Khan</strong>
                                                    <span class=inbox-item-date>-13:40 PM</span>
                                                    <p class=inbox-item-text>Hey! there I'm available...</p>
                                                    <span class="profile-status available pull-right"></span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class=inbox-item>
                                                    <div class=inbox-item-img><img src="assets/dist/img/avatar.png" class=img-circle alt=""></div>
                                                    <strong class=inbox-item-author>Naeem Khan</strong>
                                                    <span class=inbox-item-date>-13:40 PM</span>
                                                    <p class=inbox-item-text>Hey! there I'm available...</p>
                                                    <span class="profile-status available pull-right"></span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class=inbox-item>
                                                    <div class=inbox-item-img><img src="assets/dist/img/avatar4.png" class=img-circle alt=""></div>
                                                    <strong class=inbox-item-author>Tanzil Ahmed</strong>
                                                    <span class=inbox-item-date>-13:40 PM</span>
                                                    <p class=inbox-item-text>Hey! there I'm available...</p>
                                                    <span class="profile-status offline pull-right"></span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                            <div class="panel panel-bd lobidisable">
                                <div class=panel-heading>
                                    <div class=panel-title>
                                        <i class=ti-user></i>
                                        <h4>Chat</h4>
                                    </div>
                                </div>
                                <div class=panel-body>
                                    <ul class=chat_list>
                                        <li class=clearfix>
                                            <div class=chat-avatar>
                                                <img src="assets/dist/img/avatar4.png" alt=male>
                                                <i>10:00</i>
                                            </div>
                                            <div class=conversation-text>
                                                <div class=ctext-wrap>
                                                    <i>John Deo</i>
                                                    <p>Hello! ✋</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix odd">
                                            <div class=chat-avatar>
                                                <img src="assets/dist/img/avatar5.png" alt=Female>
                                                <i>10:01</i>
                                            </div>
                                            <div class=conversation-text>
                                                <div class=ctext-wrap>
                                                    <i>Marco Lopes</i>
                                                    <p>Hi, How are you?☺ What about our next meeting?😼</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=clearfix>
                                            <div class=chat-avatar>
                                                <img src="assets/dist/img/avatar4.png" alt=male>
                                                <i>10:01</i>
                                            </div>
                                            <div class=conversation-text>
                                                <div class=ctext-wrap>
                                                    <i>John Deo</i>
                                                    <p>Yeah everything is fine 👍</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix odd">
                                            <div class=chat-avatar>
                                                <img src="assets/dist/img/avatar5.png" alt=male>
                                                <i>10:02</i>
                                            </div>
                                            <div class=conversation-text>
                                                <div class=ctext-wrap>
                                                    <i>Marco Lopes</i>
                                                    <p>Wow that's great 👏</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=clearfix>
                                            <div class=chat-avatar>
                                                <img src="assets/dist/img/avatar4.png" alt=male>
                                                <i>10:03</i>
                                            </div>
                                            <div class=conversation-text>
                                                <div class=ctext-wrap>
                                                    <i>John Deo</i>
                                                    <p>What can you do with HTML VIEWER ?</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix odd">
                                            <div class=chat-avatar>
                                                <img src="assets/dist/img/avatar5.png" alt=male>
                                                <i>10:04</i>
                                            </div>
                                            <div class=conversation-text>
                                                <div class=ctext-wrap>
                                                    <i>Marco Lopes</i>
                                                    <p>It helps to beautify/format your HTML.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix odd">
                                            <div class=chat-avatar>
                                                <img src="assets/dist/img/avatar5.png" alt=male>
                                                <i>10:04</i>
                                            </div>
                                            <div class=conversation-text>
                                                <div class=ctext-wrap>
                                                    <i>Marco Lopes</i>
                                                    <p>It helps to save and share HTML content and show the HTML output</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=clearfix>
                                            <div class=chat-avatar>
                                                <img src="assets/dist/img/avatar4.png" alt=male>
                                                <i>10:05</i>
                                            </div>
                                            <div class=conversation-text>
                                                <div class=ctext-wrap>
                                                    <img src="assets/dist/img/1f600.png" alt="">
                                                    <img src="assets/dist/img/1f60e.png" alt="">
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class=panel-footer>
                                    <div class=input-group>
                                        <input class="form-control emojionearea" placeholder="Your Message. . .">
                                        <span class=input-group-btn>
                                            <button class="btn btn-success" type=button>Send</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                            <div class="panel panel-bd lobidisable">
                                <div class=panel-heading>
                                    <div class=panel-title>
                                        <i class=ti-archive></i>
                                        <h4>Calender</h4>
                                    </div>
                                </div>
                                <div class=panel-body>
                                    <div class=monthly_calender>
                                        <div class=monthly id=m_calendar></div>
                                    </div>
                                </div>
                                <div class=panel-footer>
                                    This is panel footer
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd lobidisable">
                                <div class=panel-heading>
                                    <div class=panel-title>
                                        <i class=ti-pie-chart></i>
                                        <h4>Colors Pie Chart</h4>
                                    </div>
                                </div>
                                <div class=panel-body>
                                    <div id=chartPie></div>
                                    <div class=chart-legend>
                                        <div class=chart-legend-item>
                                            <div class="chart-legend-color red"></div>
                                            <p>From Google</p>
                                            <p class=percentage>63.259 %</p>
                                        </div>
                                        <div class=chart-legend-item>
                                            <div class="chart-legend-color blue"></div>
                                            <p>Your Website</p>
                                            <p class=percentage>25.321 %</p>
                                        </div>
                                        <div class=chart-legend-item>
                                            <div class="chart-legend-color green"></div>
                                            <p>Other Search Engines</p>
                                            <p class=percentage>11.42 %</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-9">
                            <div class="panel panel-bd">
                                <div class=panel-body>
                                    <div id=chartMap></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                            <div class="panel panel-bd lobidrag">
                                <div class=panel-heading>
                                    <div class=panel-title>
                                        <i class=ti-truck></i>
                                        <h4>Contacts</h4>
                                    </div>
                                </div>
                                <div class=panel-body>
                                    <div class=table-responsive>
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Phone</th>
                                                    <th>Street Address</th>
                                                    <th>% Share</th>
                                                    <th>City</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <figure class="user-avatar small">
                                                            <img src="assets/dist/img/avatar.png" class=img-responsive alt=user-image>
                                                        </figure>
                                                    </td>
                                                    <td>Naeem Khan</td>
                                                    <td>123 456 7890</td>
                                                    <td>294-318 Duis Ave</td>
                                                    <td>
                                                        <div class=sparkline5></div>
                                                    </td>
                                                    <td>Noakhali</td>
                                                    <td><a href="#" class="btn btn-success btn-xs">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <figure class="user-avatar small">
                                                            <img src="assets/dist/img/avatar2.png" class=img-responsive alt=user-image>
                                                        </figure>
                                                    </td>
                                                    <td>Tuhin Sarkar</td>
                                                    <td>123 456 7890</td>
                                                    <td>680-1097 Mi Rd.</td>
                                                    <td>
                                                        <div class=sparkline6></div>
                                                    </td>
                                                    <td>Lavoir</td>
                                                    <td><a href="#" class="btn btn-success btn-xs active">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <figure class="user-avatar small">
                                                            <img src="assets/dist/img/avatar6.png" class=img-responsive alt=user-image>
                                                        </figure>
                                                    </td>
                                                    <td>Tanjil Ahmed</td>
                                                    <td>456 789 1230</td>
                                                    <td>Ap #289-8161 In Avenue</td>
                                                    <td>
                                                        <div class=sparkline7></div>
                                                    </td>
                                                    <td>Dhaka</td>
                                                    <td><a href="#" class="btn btn-success btn-xs">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <figure class="user-avatar small">
                                                            <img src="assets/dist/img/avatar3.png" class=img-responsive alt=user-image>
                                                        </figure>
                                                    </td>
                                                    <td>Sourav</td>
                                                    <td>789 123 4560</td>
                                                    <td>226-4861 Augue. St.</td>
                                                    <td>
                                                        <div class=sparkline5></div>
                                                    </td>
                                                    <td>Rongpur</td>
                                                    <td><a href="#" class="btn btn-success btn-xs">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <figure class="user-avatar small">
                                                            <img src="assets/dist/img/avatar7.png" class=img-responsive alt=user-image>
                                                        </figure>
                                                    </td>
                                                    <td>Jahangir Alam</td>
                                                    <td>(01662) 59083</td>
                                                    <td>3219 Elit Avenue</td>
                                                    <td>
                                                        <div class=sparkline6></div>
                                                    </td>
                                                    <td>Chittagong</td>
                                                    <td><a href="#" class="btn btn-success btn-xs">View</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 hidden-sm hidden-md">
                            <div class=social-widget>
                                <ul>
                                    <li>
                                        <div class=fb_inner>
                                            <i class="fa fa-facebook"></i>
                                            <span class=sc-num>5,791</span>
                                            <small>Fans</small>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=twitter_inner>
                                            <i class="fa fa-twitter"></i>
                                            <span class=sc-num>691</span>
                                            <small>Followers</small>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=g_plus_inner>
                                            <i class="fa fa-google-plus"></i>
                                            <span class=sc-num>147</span>
                                            <small>Followers</small>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=dribble_inner>
                                            <i class="fa fa-dribbble"></i>
                                            <span class=sc-num>3,485</span>
                                            <small>Followers</small>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/plugins/jQuery/jquery-1.12.4.min.js"></script>
        <script src="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/metisMenu/metisMenu.min.js"></script>
        <script src="assets/plugins/lobipanel/lobipanel.min.js"></script>
        <script src="assets/plugins/animsition/js/animsition.min.js"></script>
        <script src="assets/plugins/fastclick/fastclick.min.js"></script>
        <script src="assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/toastr/toastr.min.js"></script>
        <script src="assets/plugins/sparkline/sparkline.min.js"></script>
        <script src="assets/plugins/counterup/jquery.counterup.min.js"></script>
        <script src="assets/plugins/counterup/waypoints.js"></script>
        <script src="assets/plugins/emojionearea/emojionearea.min.js"></script>
        <script src="assets/plugins/monthly/monthly.min.js"></script>
        <script src="assets/plugins/amcharts/amcharts.js"></script>
        <script src="assets/plugins/amcharts/ammap.js"></script>
        <script src="assets/plugins/amcharts/worldLow.js"></script>
        <script src="assets/plugins/amcharts/serial.js"></script>
        <script src="assets/plugins/amcharts/export.min.js"></script>
        <script src="assets/plugins/amcharts/light.js"></script>
        <script src="assets/plugins/amcharts/pie.js"></script>
        <script src="assets/dist/js/app.min.js"></script>
        <script src="assets/dist/js/page/dashboard.min.js"></script>
        <script src="assets/dist/js/jQuery.style.switcher.min.js"></script>
    </body>

<!-- Mirrored from thememinister.com/adminpage/theme/adminpage_v2.0/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Oct 2023 10:40:41 GMT -->
</html>