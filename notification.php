<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from thememinister.com/adminpage/theme/adminpage_v2.0/notification.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Oct 2023 10:40:46 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
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
        <!-- START PAGE LABEL PLUGINS --> 
        <link href="assets/plugins/NotificationStyles/css/demo.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/NotificationStyles/css/ns-default.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/NotificationStyles/css/ns-style-growl.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/NotificationStyles/css/ns-style-attached.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/NotificationStyles/css/ns-style-bar.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/NotificationStyles/css/ns-style-other.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/toastr/toastr.css" rel="stylesheet" type="text/css"/>
        <!-- START THEME LAYOUT STYLE -->
        <link href="assets/dist/css/component_ui.min.css" rel="stylesheet" type="text/css"/>
        <link id="defaultTheme" href="assets/dist/css/skins/skin-dark-1.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/dist/css/custom.css" rel="stylesheet" type="text/css"/>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
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
                        <img class="main-logo" src="assets/dist/img/light-logo.png" alt="">
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
                                            <li><a href="charts_Js.php"><i class="fa fa-bar-chart"></i>Chart js</a></li>
                                            <li><a href="charts_morris.php"><i class="fa fa-pie-chart"></i>Morris Lead Generation</a></li>
                                            <li><a href="charts_sparkline.php"><i class="fa fa-line-chart"></i>Sparkline Lead Generation</a></li>
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
                                <li><a href="login.php"><i class="ti-layout-sidebar-left"></i>&nbsp; Logout</a></li>
                            </ul><!-- /.dropdown-user -->
                        </li><!-- /.Dropdown -->
                        <li class="log_out">
                            <a href="login.php">
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
                                <li><a href="ATP manage.php">ATP Management</a></li>
                                <li><a href="LeadsManage.php">Leads</a></li>
                                <li><a href="charts_morris.php">Morris Lead Generation</a></li>
                                <li><a href="charts_sparkline.php">Sparkline Lead Generation</a></li>
                                <li><a href="charts_am.php">Am Lead Generation</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="material-ripple"><i class="material-icons">drafts</i> Mailbox<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="mailbox.php">Mailbox<span class="nav-tag green">3</span></a></li>
                                <li><a href="mailDetails.php">Mailbox Details<span class="nav-tag yellow">2</span></a></li>
                                <li><a href="compose.php">Compose<span class="nav-tag red">9</span></a></li>
                            </ul>
                        </li>
                       <li>
                            <a href="#" class="material-ripple"><i class="material-icons">business</i> Admin<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="table.php">Simple tables</a></li>
                                 <!-- <li><a href="dataTables1.php">Data tables</a></li> -->
                                <li><a href="footable.php">FooTable</a></li>
                                <li><a href="x-editable.php">X-editable</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="material-ripple"><i class="material-icons">business</i> Sales Rep<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="table.php">Simple tables</a></li>
                                 <!-- <li><a href="dataTables1.php">Data tables</a></li> -->
                                <li><a href="footable.php">FooTable</a></li>
                                <li><a href="x-editable.php">X-editable</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="material-ripple"><i class="material-icons">business</i> Surveyor<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="table.php">Simple tables</a></li>
                                 <!-- <li><a href="dataTables1.php">Data tables</a></li> -->
                                <li><a href="footable.php">FooTable</a></li>
                                <li><a href="x-editable.php">X-editable</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="material-ripple"><i class="material-icons">business</i> Installers
<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="table.php">Simple tables</a></li>
                                 <!-- <li><a href="dataTables1.php">Data tables</a></li> -->
                                <li><a href="footable.php">FooTable</a></li>
                                <li><a href="x-editable.php">X-editable</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="material-ripple"><i class="material-icons">business</i> Customer portal
<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="table.php">Simple tables</a></li>
                                 <!-- <li><a href="dataTables1.php">Data tables</a></li> -->
                                <li><a href="footable.php">FooTable</a></li>
                                <li><a href="x-editable.php">X-editable</a></li>
                            </ul>
                        </li>

                         <!-- <li>
                            <a href="#" class="material-ripple"><i class="material-icons">assignment</i> Forms<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="forms_basic.php">Basic Forms</a></li>
                                <li><a href="form_input_group.php">Input group</a></li>
                                <li><a href="form-mask.php">Form Mask</a></li>
                                <li><a href="form_touchspin.php">Touchspin</a></li>
                                <li><a href="form_select.php">Select</a></li>
                                <li><a href="forms_validation.php">Validation Forms</a></li>
                                <li><a href="forms_cropper.php">Cropper</a></li>
                                <li><a href="form_file_upload.php">Forms File Upload</a></li>
                                <li><a href="forms_editor_ck.php">CK Editor</a></li>
                                <li><a href="forms_editor_summernote.php">Summernote</a></li>
                                <li><a href="form_wizard.php">Form Wizaed</a></li>
                                <li><a href="forms_editor_markdown.php">Markdown</a></li>
                                <li><a href="forms_editor_trumbowyg.php">Trumbowyg</a></li>
                                <li><a href="form_editor_wysihtml5.php">Wysihtml5</a></li>
                            </ul>
                        </li> -->
                        <li class="nav-heading "> <span>Components&nbsp;&nbsp;&nbsp;&nbsp;------</span></li>
                        <li class="active">
                            <a href="#" class="material-ripple"><i class="material-icons">format_color_fill</i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="buttons.php">Buttons</a></li>
                                <li><a href="tabs.php">Tab</a></li>
                                <li class="active"><a href="notification.php">Notification</a></li>
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
            <!-- /.Navbar  Static Side -->
            <div class="control-sidebar-bg"></div>
            <!-- Page Content -->
            <div id="page-wrapper">
                <!-- main content -->
                <div class="content">
                    <!-- Content Header (Page header) -->
                    <div class="content-header">
                        <div class="header-icon">
                            <i class="pe-7s-attention"></i>
                        </div>
                        <div class="header-title">
                            <h1>Notifications </h1>
                            <small>Notification and custom alerts</small>
                            <ol class="breadcrumb">
                                <li><a href="index.php"><i class="pe-7s-home"></i> Home</a></li>
                                <li><a href="#">UI Elements</a></li>
                                <li class="active">Notifications </li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->
                    <div class="notification-shape shape-box" id="notification-shape" data-path-to="m 0,0 500,0 0,500 -500,0 z">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 500 500" preserveAspectRatio="none">
                        <path d="m 0,0 500,0 0,500 0,-500 z"/>
                        </svg>
                    </div>
                    <div class="notification-shape shape-progress" id="notification-shape2">
                        <svg width="70px" height="70px"><path d="m35,2.5c17.955803,0 32.5,14.544199 32.5,32.5c0,17.955803 -14.544197,32.5 -32.5,32.5c-17.955803,0 -32.5,-14.544197 -32.5,-32.5c0,-17.955801 14.544197,-32.5 32.5,-32.5z"/></svg>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Notification Styles Inspiration</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <header class="codrops-header">
                                                <h1>Notification Styles Inspiration <span>Simple ideas &amp; effects for website notifications</span></h1>
                                            </header>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <table class="table table-hover table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Examples </th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>.... Notification Styles "Scale"....</td>
                                                        <td><button id="scale" class="btn btn-violet btn-sm progress-button pull-right">
                                                                <span class="">Run example</span>
                                                                <span class="progress"></span>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jelly</td>
                                                        <td><button id="jelly" class="btn btn-info btn-sm progress-button pull-right">
                                                                <span class="">Run example</span>
                                                                <span class="progress"></span>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Slide in</td>
                                                        <td><button id="slideIn" class="btn btn-primary btn-sm progress-button pull-right">
                                                                <span class="">Run example</span>
                                                                <span class="progress"></span>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Genie</td>
                                                        <td><button id="genie" class="btn btn-purple btn-sm progress-button pull-right">
                                                                <span class="">Run example</span>
                                                                <span class="progress"></span>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Flip</td>
                                                        <td><button id="flip" class="btn btn-inverse btn-sm progress-button pull-right">
                                                                <span class="">Run example</span>
                                                                <span class="progress"></span>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bouncy Flip</td>
                                                        <td><button id="bouncyFlip" class="btn btn-default btn-sm progress-button pull-right">
                                                                <span class="">Run example</span>
                                                                <span class="progress"></span>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-sm-6">
                                            <table class="table table-hover table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Examples </th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Slide On Top</td>
                                                        <td><button id="slidetop" class="btn btn-black btn-sm progress-button pull-right">
                                                                <span class="">Run example</span>
                                                                <span class="progress"></span>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Expanding Loader</td>
                                                        <td><button id="exploader" class="btn btn-default btn-sm progress-button pull-right">
                                                                <span class="">Run example</span>
                                                                <span class="progress"></span>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Corner Expand</td>
                                                        <td><button id="cornerExpand" class="btn btn-success btn-sm progress-button pull-right">
                                                                <span class="">Run example</span>
                                                                <span class="progress"></span>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Loading Circle</td>
                                                        <td><button id="loadingcircle" class="btn btn-pink btn-sm progress-button pull-right">
                                                                <span class="">Run example</span>
                                                                <span class="progress"></span>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Box Spinner</td>
                                                        <td><button id="boxspinner" class="btn btn-warning btn-sm progress-button pull-right">
                                                                <span class="">Run example</span>
                                                                <span class="progress"></span>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Thumb Slider</td>
                                                        <td><button id="thumbslider" class="btn btn-danger btn-sm progress-button pull-right">
                                                                <span class="">Run example</span>
                                                                <span class="progress"></span>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Sweet Alert</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <p>A beautiful replacement for JavaScript's "Alert"</p>
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Examples</th>
                                                <th> Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> A basic message </td>
                                                <td><button class="btn btn-primary btn-sm demo1 pull-right">Run example</button></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><pre><span class="attr">swal</span>(<span class="str">"Here's a message!"</span>, <span class="str">"It's pretty, isn't it?"</span>)</pre></td>
                                            </tr>
                                            <tr>
                                                <td>A success message!</td>
                                                <td><button class="btn btn-success btn-sm demo2 pull-right">Run example</button></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><pre><span class="attr">swal</span>(<span class="str">"Good job!"</span>, <span class="str">"You clicked the button!"</span>, <span class="str">"success"</span>)</pre></td>
                                            </tr>
                                            <tr>
                                                <td>A warning message, with a function attached to the "Confirm"-button</td>
                                                <td><button class="btn btn-warning btn-sm demo3 pull-right">Run example</button></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><pre><span class="attr">swal</span>({
&nbsp;&nbsp;title: <span class="str">"Are you sure?"</span>,
&nbsp;&nbsp;text: <span class="str">"You will not be able to
 recover this imaginary file!"</span>,
&nbsp;&nbsp;type: <span class="str">"warning"</span>,
&nbsp;&nbsp;showCancelButton: <span class="val">true</span>,
&nbsp;&nbsp;confirmButtonColor: <span class="str">"#DD6B55"</span>,
&nbsp;&nbsp;confirmButtonText: <span class="str">"Yes, delete it!"</span>,
&nbsp;&nbsp;closeOnConfirm: <span class="val">false</span>
},
<span class="func"><i>function</i></span>(){
&nbsp;&nbsp;<span class="attr">swal</span>(<span class="str">"Deleted!"</span>, <span class="str">"Your imaginary file
 has been deleted."</span>, <span class="str">"success"</span>);
});</pre></td>
                                            </tr>
                                            <tr>
                                                <td>... and by passing a parameter, you can execute something else for "Cancel".</td>
                                                <td><button class="btn btn-danger btn-sm demo4 pull-right">Run example</button></td>
                                            </tr>

                                            <tr>
                                                <td colspan="2">
                                                    <pre><span class="attr">swal</span>({
&nbsp;&nbsp;title: <span class="str">"Are you sure?"</span>,
&nbsp;&nbsp;text: <span class="str">"You will not be able to
 recover this imaginary file!"</span>,
&nbsp;&nbsp;type: <span class="str">"warning"</span>,
&nbsp;&nbsp;showCancelButton: <span class="val">true</span>,
&nbsp;&nbsp;confirmButtonColor: <span class="str">"#DD6B55"</span>,
&nbsp;&nbsp;confirmButtonText: <span class="str">"Yes, delete it!"</span>,
&nbsp;&nbsp;cancelButtonText: <span class="str">"No, cancel plx!"</span>,
&nbsp;&nbsp;closeOnConfirm: <span class="val">false</span>,
&nbsp;&nbsp;closeOnCancel: <span class="val">false</span>
},
<span class="func"><i>function</i></span>(isConfirm){
&nbsp;&nbsp;<span class="tag">if</span> (isConfirm) {
&nbsp;&nbsp;&nbsp;&nbsp;<span class="attr">swal</span>(<span class="str">"Deleted!"</span>, <span class="str">"Your imaginary
 file has been deleted."</span>, <span class="str">"success"</span>);
&nbsp;&nbsp;} <span class="tag">else</span> {
	&nbsp;&nbsp;&nbsp;&nbsp;<span class="attr">swal</span>(<span class="str">"Cancelled"</span>, <span class="str">"Your 
imaginary file is safe :)"</span>, <span class="str">"error"</span>);
&nbsp;&nbsp;}
});</pre>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>A message with a custom icon</td>
                                                <td><button class="btn btn-inverse btn-sm demo5 pull-right">Run example</button></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <pre><span class="attr">swal</span>({
&nbsp;&nbsp;title: <span class="str">"Sweet!"</span>,
&nbsp;&nbsp;text: <span class="str">"Here's a custom image."</span>,
&nbsp;&nbsp;imageUrl: <span class="str">"images/thumbs-up.jpg"</span>
});</pre>
                                                </td>
                                            </tr>



                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Toastr</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <p class="m-b-20">toastr is a Javascript library for Gnome / Growl type non-blocking notifications. jQuery is
                                        required. The goal is to create a simple core library that can be customized and extended.</p>
                                    <!--                                        <div class="text-center">
                                                                                <h4>Example with toastr</h4>
                                                                                <button class="toastr1 btn btn-info btn-sm m-r-5 m-b-5">Run example</button>
                                                                                <button class="toastr2 btn btn-success btn-sm m-r-5 m-b-5">Run example</button>
                                                                                <button class="toastr3 btn btn-warning btn-sm m-r-5 m-b-5">Run example</button>
                                                                                <button class="toastr4 btn btn-danger btn-sm m-r-5 m-b-5">Run example</button>
                                                                            </div>-->

                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Examples</th>
                                                <th> Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Toastr example with info</td>
                                                <td><button class="toastr1 btn btn-info btn-sm pull-right m-r-5 m-b-5">Run example</button></td>
                                            </tr>
                                            <tr>
                                                <td>Toastr example with success</td>
                                                <td><button class="toastr2 btn btn-success btn-sm pull-right m-r-5 m-b-5">Run example</button></td>
                                            </tr>
                                            <tr>
                                                <td>Toastr example with warning</td>
                                                <td><button class="toastr3 btn btn-warning btn-sm pull-right m-r-5 m-b-5">Run example</button></td>
                                            </tr>
                                            <tr>
                                                <td>Toastr example with danger</td>
                                                <td><button class="toastr4 btn btn-danger btn-sm pull-right m-r-5 m-b-5">Run example</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br>
                                    <div>
                                        <pre>
Command: toastr["success"]("Example message ", "Example title")

toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-top-center",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
} </pre>
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
        <script src="assets/plugins/NotificationStyles/js/modernizr.custom.js" type="text/javascript"></script>
        <script src="assets/plugins/NotificationStyles/js/classie.js" type="text/javascript"></script>
        <script src="assets/plugins/NotificationStyles/js/notificationFx.js" type="text/javascript"></script>
        <script src="assets/plugins/NotificationStyles/js/snap.svg-min.js" type="text/javascript"></script>
        <script src="assets/plugins/sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <script src="assets/plugins/toastr/toastr.min.js" type="text/javascript"></script>
        <!-- START THEME LABEL SCRIPT -->
        <script src="assets/dist/js/app.min.js" type="text/javascript"></script>
        <script src="assets/dist/js/jQuery.style.switcher.min.js" type="text/javascript"></script>
        <script>
            "use strict"; // Start of use strict

            (function () {
                function1();
                function2();
                function3();
                function4();
                function5();
                function6();
                function7();
                function8();
                function9();
                function10();
                function11();
                function12();
                function13();
                function14();
                function15();
                function16();
                function17();
            })();

            function function1() {
                var bttn = document.getElementById('scale');

                // make sure..
                bttn.disabled = false;

                bttn.addEventListener('click', function () {
                    // simulate loading (for demo purposes only)
                    classie.add(bttn, 'active');
                    setTimeout(function () {

                        classie.remove(bttn, 'active');

                        // create the notification
                        var notification = new NotificationFx({
                            message: '<p>This is just a simple notice. Everything is in order and this is a <a href="#">simple link</a>.</p>',
                            layout: 'growl',
                            effect: 'scale',
                            type: 'notice', // notice, warning, error or success
                            onClose: function () {
                                bttn.disabled = false;
                            }
                        });

                        // show the notification
                        notification.show();

                    }, 1200);

                    // disable the button (for demo purposes only)
                    this.disabled = true;
                });
            }
            function function2() {
                var bttn = document.getElementById('jelly');

                // make sure..
                bttn.disabled = false;

                bttn.addEventListener('click', function () {
                    // simulate loading (for demo purposes only)
                    classie.add(bttn, 'active');
                    setTimeout(function () {

                        classie.remove(bttn, 'active');

                        // create the notification
                        var notification = new NotificationFx({
                            message: '<p>Hello there! I\'m a classic notification but I have some elastic jelliness thanks to <a href="http://bouncejs.com/">bounce.js</a>. </p>',
                            layout: 'growl',
                            effect: 'jelly',
                            type: 'notice', // notice, warning, error or success
                            onClose: function () {
                                bttn.disabled = false;
                            }
                        });

                        // show the notification
                        notification.show();

                    }, 1200);

                    // disable the button (for demo purposes only)
                    this.disabled = true;
                });
            }
            function function3() {
                var bttn = document.getElementById('slideIn');

                // make sure..
                bttn.disabled = false;

                bttn.addEventListener('click', function () {
                    // simulate loading (for demo purposes only)
                    classie.add(bttn, 'active');
                    setTimeout(function () {

                        classie.remove(bttn, 'active');

                        // create the notification
                        var notification = new NotificationFx({
                            message: '<p>This notification has slight elasticity to it thanks to <a href="http://bouncejs.com/">bounce.js</a>.</p>',
                            layout: 'growl',
                            effect: 'slide',
                            type: 'notice', // notice, warning or error
                            onClose: function () {
                                bttn.disabled = false;
                            }
                        });

                        // show the notification
                        notification.show();

                    }, 1200);

                    // disable the button (for demo purposes only)
                    this.disabled = true;
                });
            }
            function function4() {
                var bttn = document.getElementById('genie');

                // make sure..
                bttn.disabled = false;

                bttn.addEventListener('click', function () {
                    // simulate loading (for demo purposes only)
                    classie.add(bttn, 'active');
                    setTimeout(function () {

                        classie.remove(bttn, 'active');

                        // create the notification
                        var notification = new NotificationFx({
                            message: '<p>Your preferences have been saved successfully. See all your settings in your <a href="#">profile overview</a>.</p>',
                            layout: 'growl',
                            effect: 'genie',
                            type: 'notice', // notice, warning or error
                            onClose: function () {
                                bttn.disabled = false;
                            }
                        });

                        // show the notification
                        notification.show();

                    }, 1200);

                    // disable the button (for demo purposes only)
                    this.disabled = true;
                });
            }
            function function5() {
                var bttn = document.getElementById('flip');

                // make sure..
                bttn.disabled = false;

                bttn.addEventListener('click', function () {
                    // simulate loading (for demo purposes only)
                    classie.add(bttn, 'active');
                    setTimeout(function () {

                        classie.remove(bttn, 'active');

                        // create the notification
                        var notification = new NotificationFx({
                            message: '<p>Your preferences have been saved successfully. See all your settings in your <a href="#">profile overview</a>.</p>',
                            layout: 'attached',
                            effect: 'flip',
                            type: 'notice', // notice, warning or error
                            onClose: function () {
                                bttn.disabled = false;
                            }
                        });

                        // show the notification
                        notification.show();

                    }, 1200);

                    // disable the button (for demo purposes only)
                    this.disabled = true;
                });
            }
            function function6() {

                var bttn = document.getElementById('bouncyFlip');

                // make sure..
                bttn.disabled = false;

                bttn.addEventListener('click', function () {
                    // simulate loading (for demo purposes only)
                    classie.add(bttn, 'active');
                    setTimeout(function () {

                        classie.remove(bttn, 'active');

                        // create the notification
                        var notification = new NotificationFx({
                            message: '<span class="icon icon-calendar"></span><p>The event was added to your calendar. Check out all your events in your <a href="#">event overview</a>.</p>',
                            layout: 'attached',
                            effect: 'bouncyflip',
                            type: 'notice', // notice, warning or error
                            onClose: function () {
                                bttn.disabled = false;
                            }
                        });

                        // show the notification
                        notification.show();

                    }, 1200);

                    // disable the button (for demo purposes only)
                    this.disabled = true;
                });
            }
            function function7() {
                var bttn = document.getElementById('slidetop');

                // make sure..
                bttn.disabled = false;

                bttn.addEventListener('click', function () {
                    // simulate loading (for demo purposes only)
                    classie.add(bttn, 'active');
                    setTimeout(function () {

                        classie.remove(bttn, 'active');

                        // create the notification
                        var notification = new NotificationFx({
                            message: '<span class="icon icon-megaphone"></span><p>You have some interesting news in your inbox. Go <a href="#">check it out</a> now.</p>',
                            layout: 'bar',
                            effect: 'slidetop',
                            type: 'notice', // notice, warning or error
                            onClose: function () {
                                bttn.disabled = false;
                            }
                        });

                        // show the notification
                        notification.show();

                    }, 1200);

                    // disable the button (for demo purposes only)
                    this.disabled = true;
                });

            }


            function function8() {

                var bttn = document.getElementById('exploader');

                // make sure..
                bttn.disabled = false;

                bttn.addEventListener('click', function () {

                    // create the notification
                    var notification = new NotificationFx({
                        message: '<span class="icon icon-settings"></span><p>Your preferences have been saved successfully. See all your settings in your <a href="#">profile overview</a>.</p>',
                        layout: 'bar',
                        effect: 'exploader',
                        type: 'notice', // notice, warning or error
                        onClose: function () {
                            bttn.disabled = false;
                        }
                    });

                    // show the notification
                    notification.show();

                    // disable the button (for demo purposes only)
                    this.disabled = true;
                });
            }

            function function9() {
                var svgshape = document.getElementById('notification-shape'),
                        s = Snap(svgshape.querySelector('svg')),
                        path = s.select('path'),
                        pathConfig = {
                            from: path.attr('d'),
                            to: svgshape.getAttribute('data-path-to')
                        },
                        bttn = document.getElementById('cornerExpand');

                // make sure..
                bttn.disabled = false;

                bttn.addEventListener('click', function () {
                    // simulate loading (for demo purposes only)
                    classie.add(bttn, 'active');
                    setTimeout(function () {

                        path.animate({'path': pathConfig.to}, 300, mina.easeinout);

                        classie.remove(bttn, 'active');

                        // create the notification
                        var notification = new NotificationFx({
                            wrapper: svgshape,
                            message: '<p><span class="icon icon-bulb"></span> I\'m appaering in a morphed shape thanks to <a href="http://snapsvg.io/">Snap.svg</a></p>',
                            layout: 'other',
                            effect: 'cornerexpand',
                            type: 'notice', // notice, warning or error
                            onClose: function () {
                                bttn.disabled = false;
                                setTimeout(function () {
                                    path.animate({'path': pathConfig.from}, 300, mina.easeinout);
                                }, 200);
                            }
                        });

                        // show the notification
                        notification.show();

                    }, 1200);

                    // disable the button (for demo purposes only)
                    this.disabled = true;
                });

            }
            function function10() {
                var svgshape = document.getElementById('notification-shape2'),
                        bttn = document.getElementById('loadingcircle');

                // make sure..
                bttn.disabled = false;

                bttn.addEventListener('click', function () {
                    // create the notification
                    var notification = new NotificationFx({
                        wrapper: svgshape,
                        message: '<p>Whatever you did, it was successful!</p>',
                        layout: 'other',
                        effect: 'loadingcircle',
                        ttl: 9000,
                        type: 'notice', // notice, warning or error
                        onClose: function () {
                            bttn.disabled = false;
                        }
                    });

                    // show the notification
                    notification.show();

                    // disable the button (for demo purposes only)
                    this.disabled = true;
                });
            }
            function function11() {
                var bttn = document.getElementById('boxspinner');

                // make sure..
                bttn.disabled = false;

                bttn.addEventListener('click', function () {
                    // create the notification
                    var notification = new NotificationFx({
                        message: '<p>I am using a beautiful spinner from <a href="http://tobiasahlin.com/spinkit/">SpinKit</a></p>',
                        layout: 'other',
                        effect: 'boxspinner',
                        ttl: 9000,
                        type: 'notice', // notice, warning or error
                        onClose: function () {
                            bttn.disabled = false;
                        }
                    });

                    // show the notification
                    notification.show();

                    // disable the button (for demo purposes only)
                    this.disabled = true;
                });

            }
            function function12() {
                var bttn = document.getElementById('thumbslider');
                // make sure..
                bttn.disabled = false;

                bttn.addEventListener('click', function () {
                    // simulate loading (for demo purposes only)
                    classie.add(bttn, 'active');
                    setTimeout(function () {

                        classie.remove(bttn, 'active');

                        // create the notification
                        var notification = new NotificationFx({
                            message: '<div class="ns-thumb"><img src="assets/dist/img/user1.jpg"/></div><div class="ns-content"><p><a href="#">Zoe Moulder</a> accepted your invitation.</p></div>',
                            layout: 'other',
                            ttl: 6000,
                            effect: 'thumbslider',
                            type: 'notice', // notice, warning, error or success
                            onClose: function () {
                                bttn.disabled = false;
                            }
                        });

                        // show the notification
                        notification.show();

                    }, 1200);

                    // disable the button (for demo purposes only)
                    this.disabled = true;
                });

            }

            function function13() {
                $('.demo1').on("click", function () {
                    swal({
                        title: "Here's a message!",
                        text: "It's pretty, isn't it?"
                    });
                });
            }

            function function14() {
                $('.demo2').on("click", function () {
                    swal({
                        title: "Good job!",
                        text: "You clicked the button!",
                        type: "success"
                    });
                });
            }

            function function15() {
                $('.demo3').on("click", function () {
                    swal({
                        title: "Are you sure?",
                        text: "You will not be able to recover this imaginary file!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, delete it!",
                        closeOnConfirm: false
                    },
                            function () {
                                swal("Deleted!", "Your imaginary file has been deleted.", "success");
                            });
                });
            }

            function function16() {
                $('.demo4').on("click", function () {
                    swal({
                        title: "Are you sure?",
                        text: "You will not be able to recover this imaginary file!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, delete it!",
                        cancelButtonText: "No, cancel plx!",
                        closeOnConfirm: false,
                        closeOnCancel: false
                    },
                            function (isConfirm) {
                                if (isConfirm) {
                                    swal("Deleted!", "Your imaginary file has been deleted.", "success");
                                } else {
                                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                                }
                            });
                });
            }

            function function17() {
                $('.demo5').on("click", function () {
                    swal({
                        title: "Sweet!",
                        text: "Here's a custom image.",
                        imageUrl: "assets/plugins/sweetalert/thumbs-up.jpg"
                    });
                });
            }

            // Toastr options
            toastr.options = {
                "debug": false,
                "newestOnTop": false,
                "positionClass": "toast-top-center",
                "closeButton": true,
                "toastClass": "animated fadeInDown"
            };

            $('.toastr1').on("click", function () {
                toastr.info('Info - This is a custom Burger - UI info notification');
            });

            $('.toastr2').on("click", function () {
                toastr.success('Success - This is a Burger - UI success notification');
            });

            $('.toastr3').on("click", function () {
                toastr.warning('Warning - This is a Burger - UI warning notification');
            });

            $('.toastr4').on("click", function () {
                toastr.error('Error - This is a Burger - UI error notification');
            });
        </script>
    </body>

<!-- Mirrored from thememinister.com/adminpage/theme/adminpage_v2.0/notification.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Oct 2023 10:40:49 GMT -->
</html>