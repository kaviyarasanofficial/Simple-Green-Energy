<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from thememinister.com/adminpage/theme/adminpage_v2.0/icons_weather.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Oct 2023 10:41:11 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Adminpage - Responsive Bootstrap Admin Template Dashboard</title>
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
        <!-- START PAGE LABEL PLUGINS --> 
        <link href="assets/weather-icons/css/weather-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/weather-icons/css/weather-icons-wind.min.css" rel="stylesheet" type="text/css"/>
        <!-- START THEME LAYOUT STYLE -->
        <link href="assets/dist/css/component_ui.min.css" rel="stylesheet" type="text/css"/>
        <link id="defaultTheme" href="assets/dist/css/skins/skin-default.min" rel="stylesheet" type="text/css"/>
        <link href="assets/dist/css/custom.css" rel="stylesheet" type="text/css"/>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            @media (max-width: 767px) {
                    .navbar-header {
                background-color: #ffffff;
                }
                .navbar-toggle{
                 color: black;
                }
                    }
        </style>
    </head>
    <body>
        <div id="wrapper" class="wrapper animsition">
            <!-- Navigation -->
            <nav class="navbar navbar-fixed-top">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="material-icons">apps</i>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        <img class="main-logo" src="https://www.simplegreenenergy.org/wp-content/uploads/2021/06/SimpleGreenEnergy_FinalLogo.png" alt="">
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
                        <!-- <li class="dropdown hidden-sm"><a href="#" class="dropdown-toggle material-ripple" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                               
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
                        </li> -->
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
                        <li><a href="index.php" class="material-ripple"><i class="material-icons">home</i> Dashboard</a></li>
                        <li>
                            <a href="#" class="material-ripple"><i class="material-icons">bubble_chart</i> Lead Generation<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="charts_flot.php">Leads</a></li>
                                <li><a href="charts_Js.php">ATP</a></li>
                                <li><a href="charts_morris.php">Documents History</a></li>
                                <!-- <li><a href="charts_sparkline.php">Sparkline Charts</a></li>
                                <li><a href="charts_am.php">Am Charts</a></li> -->
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="material-ripple"><i class="material-icons">drafts</i> Customers<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                               <li><a href="mailbox.php">User Management<span class="nav-tag green">3</span></a></li>
                                <!-- <li><a href="mailDetails.php">Admin Details<span class="nav-tag yellow">2</span></a></li> -->
                                 <!-- <li><a href="compose.php">Compose<span class="nav-tag red">9</span></a></li> -->
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="material-ripple"><i class="material-icons">business</i> Sales<span class="fa arrow"></span></a>
                            <!-- <ul class="nav nav-second-level">
                                <li><a href="table.php">Simple tables</a></li>
                                <li><a href="dataTables.php">Data tables</a></li>
                                <li><a href="footable.php">FooTable</a></li>
                                <li><a href="x-editable.php">X-editable</a></li>
                            </ul> -->
                        </li>
                         <li>
                            <a href="#" class="material-ripple"><i class="material-icons">assignment</i> Surveyor<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <!-- <li><a href="forms_basic.php">Basic Surveyor</a></li> -->
                                <!-- <li><a href="form_input_group.php">Input group</a></li> -->
                                <li><a href="form-mask.php">Create New Surveyor</a></li>
                                <li><a href="form_touchspin.php">Surveyor  Work Deatils</a></li>
                                <li><a href="form_select.php">Surveyors List</a></li> 
                                <!-- <li><a href="forms_validation.php">Validation Surveyor</a></li> -->
                                <!-- <li><a href="forms_cropper.php">Cropper</a></li> -->
                                <li><a href="form_file_upload.php">Surveyor File Upload</a></li>
                                <!-- <li><a href="forms_editor_ck.php">CK Editor</a></li> -->
                                <!-- <li><a href="forms_editor_summernote.php">Summernote</a></li> -->
                                <!-- <li><a href="form_wizard.php">Form Wizaed</a></li> -->
                                <!-- <li><a href="forms_editor_markdown.php">Markdown</a></li> -->
                                <!-- <li><a href="forms_editor_trumbowyg.php">Trumbowyg</a></li> -->
                                <!-- <li><a href="form_editor_wysihtml5.php">Wysihtml5</a></li> -->
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
                        <li class="active">
                            <a href="#" class="material-ripple"><i class="material-icons">insert_emoticon</i> Icons<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="icons_bootstrap.php">Bootstrap Icons</a></li>
                                <li><a href="icons_fontawesome.php">Fontawesome Icon</a></li>
                                <li><a href="icons_flag.php">Flag Icons</a></li>
                                <li><a href="icons_material.php">Material Icons</a></li>
                                <li class="active"><a href="icons_weather.php">Weather Icons </a></li>
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
            <!-- /.Navbar  Static Side -->
            <div class="control-sidebar-bg"></div>
            <!-- Page Content -->
            <div id="page-wrapper">
                <!-- main content -->
                <div class="content">
                    <!-- Content Header (Page header) -->
                    <div class="content-header">
                        <div class="header-icon">
                            <i class="pe-7s-cloud"></i>
                        </div>
                        <div class="header-title">
                            <h1>Weather Icons</h1>
                            <small>22 Weather Themed Icons and CSS</small>
                            <ol class="breadcrumb">
                                <li><a href="index.php"><i class="pe-7s-home"></i> Home</a></li>
                                <li><a href="#">Layout</a></li>
                                <li class="active">Fixed</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Getting Started</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <p class="m-b-15">To use the Weather Icons, place the main CSS files in your CSS directory, and the font files in a "font" 
                                        directory on the same folder level as the CSS director. Once you've done that, all you need to do to 
                                        reference an icon in your HTML is type  <code>&lt;i class="wi wi-night-sleet"&gt;&lt;/i&gt;</code></p>
                                    <div class="weather-icon-inner">
                                        <ul class="icon_list">
                                            <li>
                                                <i class="wi wi-day-cloudy-high"></i>
                                                <span class="icon_name">wi-day-cloudy-high</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-day-light-wind"></i>
                                                <span class="icon_name">wi-day-light-wind</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-day-sleet"></i>
                                                <span class="icon_name">wi-day-sleet</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-day-haze"></i>
                                                <span class="icon_name">wi-day-haze</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-cloudy-high"></i>
                                                <span class="icon_name">wi-night-cloudy-high</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-alt-partly-cloudy"></i>
                                                <span class="icon_name">wi-night-alt-partly-cloudy</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-sleet"></i>
                                                <span class="icon_name">wi-sleet</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moonrise"></i>
                                                <span class="icon_name">wi-moonrise</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moonset"></i>
                                                <span class="icon_name">wi-moonset</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-sleet"></i>
                                                <span class="icon_name">wi-night-sleet</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-alt-sleet"></i>
                                                <span class="icon_name">wi-night-alt-sleet</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-raindrop"></i>
                                                <span class="icon_name">wi-raindrop</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-barometer"></i>
                                                <span class="icon_name">wi-barometer</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-humidity"></i>
                                                <span class="icon_name">wi-humidity</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-na"></i>
                                                <span class="icon_name">wi-na</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-flood"></i>
                                                <span class="icon_name">wi-flood</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-sandstorm"></i>
                                                <span class="icon_name">wi-sandstorm</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-tsunami"></i>
                                                <span class="icon_name">wi-tsunami</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-earthquake"></i>
                                                <span class="icon_name">wi-earthquake</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-fire"></i>
                                                <span class="icon_name">wi-fire</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-volcano"></i>
                                                <span class="icon_name">wi-volcano</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-train"></i>
                                                <span class="icon_name">wi-train</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-small-craft-advisory"></i>
                                                <span class="icon_name">wi-small-craft-advisory</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-gale-warning"></i>
                                                <span class="icon_name">wi-gale-warning</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-storm-warning"></i>
                                                <span class="icon_name">wi-storm-warning</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-hurricane-warning"></i>
                                                <span class="icon_name">wi-hurricane-warning</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-day-sunny"></i>
                                                <span class="icon_name">wi-day-sunny</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-day-cloudy"></i>
                                                <span class="icon_name">wi-day-cloudy</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-day-cloudy-gusts"></i>
                                                <span class="icon_name">wi-day-cloudy-gusts</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-day-cloudy-windy"></i>
                                                <span class="icon_name">wi-day-cloudy-windy</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-day-fog"></i>
                                                <span class="icon_name">wi-day-fog</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-day-hail"></i>
                                                <span class="icon_name">wi-day-hail</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-day-haze"></i>
                                                <span class="icon_name">wi-day-haze</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-day-lightning"></i>
                                                <span class="icon_name">wi-day-lightning</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-day-rain"></i>
                                                <span class="icon_name">wi-day-rain</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-day-rain-mix"></i>
                                                <span class="icon_name">wi-day-rain-mix</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-day-rain-wind"></i>
                                                <span class="icon_name">wi-day-rain-wind</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-day-showers"></i>
                                                <span class="icon_name">wi-day-showers</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-day-sleet"></i>
                                                <span class="icon_name">wi-day-sleet</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-day-sleet-storm"></i>
                                                <span class="icon_name">wi-day-sleet-storm</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-day-snow"></i>
                                                <span class="icon_name">wi-day-snow</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-day-snow-thunderstorm"></i>
                                                <span class="icon_name">wi-day-snow-thunderstorm</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-day-snow-wind"></i>
                                                <span class="icon_name">wi-day-snow-wind</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-day-sprinkle"></i>
                                                <span class="icon_name">wi-day-sprinkle</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-day-storm-showers"></i>
                                                <span class="icon_name">wi-day-storm-showers</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-day-sunny-overcast"></i>
                                                <span class="icon_name">wi-day-sunny-overcast</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-day-thunderstorm"></i>
                                                <span class="icon_name">wi-day-thunderstorm</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-day-windy"></i>
                                                <span class="icon_name">wi-day-windy</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-solar-eclipse"></i>
                                                <span class="icon_name">wi-solar-eclipse</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-hot"></i>
                                                <span class="icon_name">wi-hot</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-day-cloudy-high"></i>
                                                <span class="icon_name">wi-day-cloudy-high</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-day-light-wind"></i>
                                                <span class="icon_name">wi-day-light-wind</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-clear"></i>
                                                <span class="icon_name">wi-night-clear</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-alt-cloudy"></i>
                                                <span class="icon_name">wi-night-alt-cloudy</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-alt-cloudy-gusts"></i>
                                                <span class="icon_name">wi-night-alt-cloudy-gusts</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-alt-cloudy-windy"></i>
                                                <span class="icon_name">wi-night-alt-cloudy-windy</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-alt-hail"></i>
                                                <span class="icon_name">wi-night-alt-hail</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-alt-lightning"></i>
                                                <span class="icon_name">wi-night-alt-lightning</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-alt-rain"></i>
                                                <span class="icon_name">wi-night-alt-rain</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-alt-rain-mix"></i>
                                                <span class="icon_name">wi-night-alt-rain-mix</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-alt-rain-wind"></i>
                                                <span class="icon_name">wi-night-alt-rain-wind</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-alt-showers"></i>
                                                <span class="icon_name">wi-night-alt-showers</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-alt-sleet"></i>
                                                <span class="icon_name">wi-night-alt-sleet</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-alt-sleet-storm"></i>
                                                <span class="icon_name">wi-night-alt-sleet-storm</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-alt-snow"></i>
                                                <span class="icon_name">wi-night-alt-snow</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-alt-snow-thunderstorm"></i>
                                                <span class="icon_name">wi-night-alt-snow-thunderstorm</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-alt-snow-wind"></i>
                                                <span class="icon_name">wi-night-alt-snow-wind</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-alt-sprinkle"></i>
                                                <span class="icon_name">wi-night-alt-sprinkle</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-alt-storm-showers"></i>
                                                <span class="icon_name">wi-night-alt-storm-showers</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-alt-thunderstorm"></i>
                                                <span class="icon_name">wi-night-alt-thunderstorm</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-cloudy"></i>
                                                <span class="icon_name">wi-night-cloudy</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-cloudy-gusts"></i>
                                                <span class="icon_name">wi-night-cloudy-gusts</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-cloudy-windy"></i>
                                                <span class="icon_name">wi-night-cloudy-windy</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-fog"></i>
                                                <span class="icon_name">wi-night-fog</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-hail"></i>
                                                <span class="icon_name">wi-night-hail</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-lightning"></i>
                                                <span class="icon_name">wi-night-lightning</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-partly-cloudy"></i>
                                                <span class="icon_name">wi-night-partly-cloudy</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-rain"></i>
                                                <span class="icon_name">wi-night-rain</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-rain-mix"></i>
                                                <span class="icon_name">wi-night-rain-mix</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-rain-wind"></i>
                                                <span class="icon_name">wi-night-rain-wind</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-showers"></i>
                                                <span class="icon_name">wi-night-showers</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-sleet"></i>
                                                <span class="icon_name">wi-night-sleet</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-sleet-storm"></i>
                                                <span class="icon_name">wi-night-sleet-storm</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-snow"></i>
                                                <span class="icon_name">wi-night-snow</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-snow-thunderstorm"></i>
                                                <span class="icon_name">wi-night-snow-thunderstorm</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-snow-wind"></i>
                                                <span class="icon_name">wi-night-snow-wind</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-sprinkle"></i>
                                                <span class="icon_name">wi-night-sprinkle</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-storm-showers"></i>
                                                <span class="icon_name">wi-night-storm-showers</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-thunderstorm"></i>
                                                <span class="icon_name">wi-night-thunderstorm</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-lunar-eclipse"></i>
                                                <span class="icon_name">wi-lunar-eclipse</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-stars"></i>
                                                <span class="icon_name">wi-stars</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-storm-showers"></i>
                                                <span class="icon_name">wi-storm-showers</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-thunderstorm"></i>
                                                <span class="icon_name">wi-thunderstorm</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-alt-cloudy-high"></i>
                                                <span class="icon_name">wi-night-alt-cloudy-high</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-cloudy-high"></i>
                                                <span class="icon_name">wi-night-cloudy-high</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-night-alt-partly-cloudy"></i>
                                                <span class="icon_name">wi-night-alt-partly-cloudy</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-cloud"></i>
                                                <span class="icon_name">wi-cloud</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-cloudy"></i>
                                                <span class="icon_name">wi-cloudy</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-cloudy-gusts"></i>
                                                <span class="icon_name">wi-cloudy-gusts</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-cloudy-windy"></i>
                                                <span class="icon_name">wi-cloudy-windy</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-fog"></i>
                                                <span class="icon_name">wi-fog</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-hail"></i>
                                                <span class="icon_name">wi-hail</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-rain"></i>
                                                <span class="icon_name">wi-rain</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-rain-mix"></i>
                                                <span class="icon_name">wi-rain-mix</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-rain-wind"></i>
                                                <span class="icon_name">wi-rain-wind</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-showers"></i>
                                                <span class="icon_name">wi-showers</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-sleet"></i>
                                                <span class="icon_name">wi-sleet</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-snow"></i>
                                                <span class="icon_name">wi-snow</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-sprinkle"></i>
                                                <span class="icon_name">wi-sprinkle</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-storm-showers"></i>
                                                <span class="icon_name">wi-storm-showers</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-thunderstorm"></i>
                                                <span class="icon_name">wi-thunderstorm</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-snow-wind"></i>
                                                <span class="icon_name">wi-snow-wind</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-snow"></i>
                                                <span class="icon_name">wi-snow</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-smog"></i>
                                                <span class="icon_name">wi-smog</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-smoke"></i>
                                                <span class="icon_name">wi-smoke</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-lightning"></i>
                                                <span class="icon_name">wi-lightning</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-raindrops"></i>
                                                <span class="icon_name">wi-raindrops</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-raindrop"></i>
                                                <span class="icon_name">wi-raindrop</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-dust"></i>
                                                <span class="icon_name">wi-dust</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-snowflake-cold"></i>
                                                <span class="icon_name">wi-snowflake-cold</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-windy"></i>
                                                <span class="icon_name">wi-windy</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-strong-wind"></i>
                                                <span class="icon_name">wi-strong-wind</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-sandstorm"></i>
                                                <span class="icon_name">wi-sandstorm</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-earthquake"></i>
                                                <span class="icon_name">wi-earthquake</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-fire"></i>
                                                <span class="icon_name">wi-fire</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-flood"></i>
                                                <span class="icon_name">wi-flood</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-meteor"></i>
                                                <span class="icon_name">wi-meteor</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-tsunami"></i>
                                                <span class="icon_name">wi-tsunami</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-volcano"></i>
                                                <span class="icon_name">wi-volcano</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-hurricane"></i>
                                                <span class="icon_name">wi-hurricane</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-tornado"></i>
                                                <span class="icon_name">wi-tornado</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-small-craft-advisory"></i>
                                                <span class="icon_name">wi-small-craft-advisory</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-gale-warning"></i>
                                                <span class="icon_name">wi-gale-warning</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-storm-warning"></i>
                                                <span class="icon_name">wi-storm-warning</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-hurricane-warning"></i>
                                                <span class="icon_name">wi-hurricane-warning</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-wind-direction"></i>
                                                <span class="icon_name">wi-wind-direction</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-alien"></i>
                                                <span class="icon_name">wi-alien</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-celsius"></i>
                                                <span class="icon_name">wi-celsius</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-fahrenheit"></i>
                                                <span class="icon_name">wi-fahrenheit</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-degrees"></i>
                                                <span class="icon_name">wi-degrees</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-thermometer"></i>
                                                <span class="icon_name">wi-thermometer</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-thermometer-exterior"></i>
                                                <span class="icon_name">wi-thermometer-exterior</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-thermometer-internal"></i>
                                                <span class="icon_name">wi-thermometer-internal</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-cloud-down"></i>
                                                <span class="icon_name">wi-cloud-down</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-cloud-up"></i>
                                                <span class="icon_name">wi-cloud-up</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-cloud-refresh"></i>
                                                <span class="icon_name">wi-cloud-refresh</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-horizon"></i>
                                                <span class="icon_name">wi-horizon</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-horizon-alt"></i>
                                                <span class="icon_name">wi-horizon-alt</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-sunrise"></i>
                                                <span class="icon_name">wi-sunrise</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-sunset"></i>
                                                <span class="icon_name">wi-sunset</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moonrise"></i>
                                                <span class="icon_name">wi-moonrise</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moonset"></i>
                                                <span class="icon_name">wi-moonset</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-refresh"></i>
                                                <span class="icon_name">wi-refresh</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-refresh-alt"></i>
                                                <span class="icon_name">wi-refresh-alt</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-umbrella"></i>
                                                <span class="icon_name">wi-umbrella</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-barometer"></i>
                                                <span class="icon_name">wi-barometer</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-humidity"></i>
                                                <span class="icon_name">wi-humidity</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-na"></i>
                                                <span class="icon_name">wi-na</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-train"></i>
                                                <span class="icon_name">wi-train</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-new"></i>
                                                <span class="icon_name">wi-moon-new</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-waxing-crescent-1"></i>
                                                <span class="icon_name">wi-moon-waxing-crescent-1</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-waxing-crescent-2"></i>
                                                <span class="icon_name">wi-moon-waxing-crescent-2</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-waxing-crescent-3"></i>
                                                <span class="icon_name">wi-moon-waxing-crescent-3</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-waxing-crescent-4"></i>
                                                <span class="icon_name">wi-moon-waxing-crescent-4</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-waxing-crescent-5"></i>
                                                <span class="icon_name">wi-moon-waxing-crescent-5</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-waxing-crescent-6"></i>
                                                <span class="icon_name">wi-moon-waxing-crescent-6</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-first-quarter"></i>
                                                <span class="icon_name">wi-moon-first-quarter</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-waxing-gibbous-1"></i>
                                                <span class="icon_name">wi-moon-waxing-gibbous-1</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-waxing-gibbous-2"></i>
                                                <span class="icon_name">wi-moon-waxing-gibbous-2</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-waxing-gibbous-3"></i>
                                                <span class="icon_name">wi-moon-waxing-gibbous-3</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-waxing-gibbous-4"></i>
                                                <span class="icon_name">wi-moon-waxing-gibbous-4</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-waxing-gibbous-5"></i>
                                                <span class="icon_name">wi-moon-waxing-gibbous-5</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-waxing-gibbous-6"></i>
                                                <span class="icon_name">wi-moon-waxing-gibbous-6</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-full"></i>
                                                <span class="icon_name">wi-moon-full</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-waning-gibbous-1"></i>
                                                <span class="icon_name">wi-moon-waning-gibbous-1</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-waning-gibbous-2"></i>
                                                <span class="icon_name">wi-moon-waning-gibbous-2</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-waning-gibbous-3"></i>
                                                <span class="icon_name">wi-moon-waning-gibbous-3</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-waning-gibbous-4"></i>
                                                <span class="icon_name">wi-moon-waning-gibbous-4</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-waning-gibbous-5"></i>
                                                <span class="icon_name">wi-moon-waning-gibbous-5</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-waning-gibbous-6"></i>
                                                <span class="icon_name">wi-moon-waning-gibbous-6</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-third-quarter"></i>
                                                <span class="icon_name">wi-moon-third-quarter</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-waning-crescent-1"></i>
                                                <span class="icon_name">wi-moon-waning-crescent-1</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-waning-crescent-2"></i>
                                                <span class="icon_name">wi-moon-waning-crescent-2</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-waning-crescent-3"></i>
                                                <span class="icon_name">wi-moon-waning-crescent-3</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-waning-crescent-4"></i>
                                                <span class="icon_name">wi-moon-waning-crescent-4</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-waning-crescent-5"></i>
                                                <span class="icon_name">wi-moon-waning-crescent-5</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-waning-crescent-6"></i>
                                                <span class="icon_name">wi-moon-waning-crescent-6</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-alt-new"></i>
                                                <span class="icon_name">wi-moon-alt-new</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-alt-waxing-crescent-1"></i>
                                                <span class="icon_name">wi-moon-alt-waxing-crescent-1</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-alt-waxing-crescent-2"></i>
                                                <span class="icon_name">wi-moon-alt-waxing-crescent-2</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-alt-waxing-crescent-3"></i>
                                                <span class="icon_name">wi-moon-alt-waxing-crescent-3</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-alt-waxing-crescent-4"></i>
                                                <span class="icon_name">wi-moon-alt-waxing-crescent-4</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-alt-waxing-crescent-5"></i>
                                                <span class="icon_name">wi-moon-alt-waxing-crescent-5</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-alt-waxing-crescent-6"></i>
                                                <span class="icon_name">wi-moon-alt-waxing-crescent-6</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-alt-first-quarter"></i>
                                                <span class="icon_name">wi-moon-alt-first-quarter</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-alt-waxing-gibbous-1"></i>
                                                <span class="icon_name">wi-moon-alt-waxing-gibbous-1</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-alt-waxing-gibbous-2"></i>
                                                <span class="icon_name">wi-moon-alt-waxing-gibbous-2</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-alt-waxing-gibbous-3"></i>
                                                <span class="icon_name">wi-moon-alt-waxing-gibbous-3</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-alt-waxing-gibbous-4"></i>
                                                <span class="icon_name">wi-moon-alt-waxing-gibbous-4</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-alt-waxing-gibbous-5"></i>
                                                <span class="icon_name">wi-moon-alt-waxing-gibbous-5</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-alt-waxing-gibbous-6"></i>
                                                <span class="icon_name">wi-moon-alt-waxing-gibbous-6</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-alt-full"></i>
                                                <span class="icon_name">wi-moon-alt-full</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-alt-waning-gibbous-1"></i>
                                                <span class="icon_name">wi-moon-alt-waning-gibbous-1</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-alt-waning-gibbous-2"></i>
                                                <span class="icon_name">wi-moon-alt-waning-gibbous-2</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-alt-waning-gibbous-3"></i>
                                                <span class="icon_name">wi-moon-alt-waning-gibbous-3</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-alt-waning-gibbous-4"></i>
                                                <span class="icon_name">wi-moon-alt-waning-gibbous-4</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-alt-waning-gibbous-5"></i>
                                                <span class="icon_name">wi-moon-alt-waning-gibbous-5</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-alt-waning-gibbous-6"></i>
                                                <span class="icon_name">wi-moon-alt-waning-gibbous-6</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-alt-third-quarter"></i>
                                                <span class="icon_name">wi-moon-alt-third-quarter</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-alt-waning-crescent-1"></i>
                                                <span class="icon_name">wi-moon-alt-waning-crescent-1</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-alt-waning-crescent-2"></i>
                                                <span class="icon_name">wi-moon-alt-waning-crescent-2</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-alt-waning-crescent-3"></i>
                                                <span class="icon_name">wi-moon-alt-waning-crescent-3</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-alt-waning-crescent-4"></i>
                                                <span class="icon_name">wi-moon-alt-waning-crescent-4</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-alt-waning-crescent-5"></i>
                                                <span class="icon_name">wi-moon-alt-waning-crescent-5</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-moon-alt-waning-crescent-6"></i>
                                                <span class="icon_name">wi-moon-alt-waning-crescent-6</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-time-1"></i>
                                                <span class="icon_name">wi-time-1</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-time-2"></i>
                                                <span class="icon_name">wi-time-2</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-time-3"></i>
                                                <span class="icon_name">wi-time-3</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-time-4"></i>
                                                <span class="icon_name">wi-time-4</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-time-5"></i>
                                                <span class="icon_name">wi-time-5</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-time-6"></i>
                                                <span class="icon_name">wi-time-6</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-time-7"></i>
                                                <span class="icon_name">wi-time-7</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-time-8"></i>
                                                <span class="icon_name">wi-time-8</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-time-9"></i>
                                                <span class="icon_name">wi-time-9</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-time-10"></i>
                                                <span class="icon_name">wi-time-10</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-time-11"></i>
                                                <span class="icon_name">wi-time-11</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-time-12"></i>
                                                <span class="icon_name">wi-time-12</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-direction-up"></i>
                                                <span class="icon_name">wi-direction-up</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-direction-up-right"></i>
                                                <span class="icon_name">wi-direction-up-right</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-direction-right"></i>
                                                <span class="icon_name">wi-direction-right</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-direction-down-right"></i>
                                                <span class="icon_name">wi-direction-down-right</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-direction-down"></i>
                                                <span class="icon_name">wi-direction-down</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-direction-down-left"></i>
                                                <span class="icon_name">wi-direction-down-left</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-direction-left"></i>
                                                <span class="icon_name">wi-direction-left</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-direction-up-left"></i>
                                                <span class="icon_name">wi-direction-up-left</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-wind towards-0-deg"></i>
                                                <span class="icon_name">towards-0-deg</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-wind towards-23-deg"></i>
                                                <span class="icon_name">towards-23-deg</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-wind towards-45-deg"></i>
                                                <span class="icon_name">towards-45-deg</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-wind towards-68-deg"></i>
                                                <span class="icon_name">towards-68-deg</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-wind towards-90-deg"></i>
                                                <span class="icon_name">towards-90-deg</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-wind towards-113-deg"></i>
                                                <span class="icon_name">towards-113-deg</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-wind towards-135-deg"></i>
                                                <span class="icon_name">towards-135-deg</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-wind towards-158-deg"></i>
                                                <span class="icon_name">towards-158-deg</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-wind towards-180-deg"></i>
                                                <span class="icon_name">towards-180-deg</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-wind towards-203-deg"></i>
                                                <span class="icon_name">towards-203-deg</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-wind towards-225-deg"></i>
                                                <span class="icon_name">towards-225-deg</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-wind towards-248-deg"></i>
                                                <span class="icon_name">towards-248-deg</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-wind towards-270-deg"></i>
                                                <span class="icon_name">towards-270-deg</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-wind towards-293-deg"></i>
                                                <span class="icon_name">towards-293-deg</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-wind towards-313-deg"></i>
                                                <span class="icon_name">towards-313-deg</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-wind towards-336-deg"></i>
                                                <span class="icon_name">towards-336-deg</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-wind from-180-deg"></i>
                                                <span class="icon_name">from-180-deg</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-wind from-203-deg"></i>
                                                <span class="icon_name">from-203-deg</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-wind from-225-deg"></i>
                                                <span class="icon_name">from-225-deg</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-wind from-248-deg"></i>
                                                <span class="icon_name">from-248-deg</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-wind from-270-deg"></i>
                                                <span class="icon_name">from-270-deg</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-wind from-293-deg"></i>
                                                <span class="icon_name">from-293-deg</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-wind from-313-deg"></i>
                                                <span class="icon_name">from-313-deg</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-wind from-336-deg"></i>
                                                <span class="icon_name">from-336-deg</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-wind from-0-deg"></i>
                                                <span class="icon_name">from-0-deg</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-wind from-23-deg"></i>
                                                <span class="icon_name">from-23-deg</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-wind from-45-deg"></i>
                                                <span class="icon_name">from-45-deg</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-wind from-68-deg"></i>
                                                <span class="icon_name">from-68-deg</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-wind from-90-deg"></i>
                                                <span class="icon_name">from-90-deg</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-wind from-113-deg"></i>
                                                <span class="icon_name">from-113-deg</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-wind from-135-deg"></i>
                                                <span class="icon_name">from-135-deg</span>
                                            </li>
                                            <li>
                                                <i class="wi wi-wind from-158-deg"></i>
                                                <span class="icon_name">from-158-deg</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.main content -->
            </div><!-- /#page-wrapper -->
        </div><!-- /#wrapper -->
        <!-- START CORE PLUGINS -->
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
        <script src="assets/dist/js/jQuery.style.switcher.min.js" type="text/javascript"></script>
    </body>

<!-- Mirrored from thememinister.com/adminpage/theme/adminpage_v2.0/icons_weather.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Oct 2023 10:41:12 GMT -->
</html>