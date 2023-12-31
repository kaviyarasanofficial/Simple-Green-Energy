<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from thememinister.com/adminpage/theme/adminpage_v2.0/charts_am.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Oct 2023 10:41:27 GMT -->
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
        <link href="assets/plugins/amcharts/export.css" rel="stylesheet" type="text/css" />
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
                        <li class="active">
                            <a href="#" class="material-ripple"><i class="material-icons">bubble_chart</i> Lead Generation<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="ATP manage.php">ATP Management</a></li>
                                <li><a href="LeadsManage.php">Leads</a></li>
                                <li><a href="charts_morris.php">Morris Lead Generation</a></li>
                                <li><a href="charts_sparkline.php">Sparkline Lead Generation</a></li>
                                <li class="active"><a href="charts_am.php">Am Lead Generation</a></li>
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
            <!-- /.Navbar  Static Side -->
            <div class="control-sidebar-bg"></div>
            <!-- Page Content -->
            <div id="page-wrapper">
                <!-- main content -->
                <div class="content">
                    <!-- Content Header (Page header) -->
                    <div class="content-header">
                        <div class="header-icon"><i class="pe-7s-graph1"></i></div>
                        <div class="header-title">
                            <h1>Am Lead Generation</h1>
                            <small>Programming libraries and tools for all your data visualization needs. Documentation : <a href="https://www.amcharts.com/" target="_blank">https://www.amcharts.com/</a></small>
                            <ol class="breadcrumb">
                                <li><a href="index.php"><i class="pe-7s-home"></i> Home</a></li>
                                <li><a href="#">Lead Generation</a></li>
                                <li class="active">Am Lead Generation</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <i class="ti-panel"></i>
                                        <h4>CSS animations Chart</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <!-- amcharts -->
                                    <div id="chartdiv3"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd lobidisable">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <i class="ti-pie-chart"></i>
                                        <h4>Colors Pie Chart</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <!-- amcharts -->
                                    <div id="chartPie"></div>
                                    <div class="chart-legend">
                                        <div class="chart-legend-item">
                                            <div class="chart-legend-color red"></div>
                                            <p>From Google</p>
                                            <p class="percentage">63.259 %</p>
                                        </div>
                                        <!-- /.chart legend item -->
                                        <div class="chart-legend-item">
                                            <div class="chart-legend-color blue"></div>
                                            <p>Your Website</p>
                                            <p class="percentage">25.321 %</p>
                                        </div>
                                        <!-- /.chart legend item -->
                                        <div class="chart-legend-item">
                                            <div class="chart-legend-color green"></div>
                                            <p>Other Search Engines</p>
                                            <p class="percentage">11.42 %</p>
                                        </div>
                                        <!-- /.chart legend item -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-body">
                                    <!-- Zoomable Value Axis -->
                                    <div id="zoomable"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="panel panel-bd ">
                                <div class="panel-body">
                                    <!-- amcharts -->
                                    <div id="chartdiv"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="panel panel-bd">
                                <div class="panel-body">
                                    <!-- amcharts -->
                                    <div id="chartMap"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="panel panel-bd">
                                <div class="panel-body">
                                    <!-- Column chart with images on top -->
                                    <div id="column"></div>
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
        <script src="assets/plugins/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="assets/plugins/amcharts/ammap.js" type="text/javascript"></script>
        <script src="assets/plugins/amcharts/worldLow.js" type="text/javascript"></script>
        <script src="assets/plugins/amcharts/serial.js" type="text/javascript"></script>
        <script src="assets/plugins/amcharts/export.min.js" type="text/javascript"></script>
        <script src="assets/plugins/amcharts/light.js" type="text/javascript"></script>
        <script src="assets/plugins/amcharts/pie.js" type="text/javascript"></script>
        <script src="assets/plugins/amcharts/amstock.js" type="text/javascript"></script>
        <!-- START THEME LABEL SCRIPT -->
        <script src="assets/dist/js/app.min.js" type="text/javascript"></script>
        <script src="assets/dist/js/jQuery.style.switcher.min.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {

                "use strict"; // Start of use strict

                //amchart
                var chart = AmCharts.makeChart("chartdiv", {
                    "type": "serial",
                    "theme": "light",
                    "dataDateFormat": "YYYY-MM-DD",
                    "precision": 2,
                    "valueAxes": [{
                            "id": "v1",
                            "title": "Sales",
                            "position": "left",
                            "autoGridCount": false,
                            "labelFunction": function (value) {
                                return "$" + Math.round(value) + "M";
                            }
                        }, {
                            "id": "v2",
                            "title": "Market Days",
                            "gridAlpha": 0,
                            "position": "right",
                            "autoGridCount": false
                        }],
                    "graphs": [{
                            "id": "g3",
                            "valueAxis": "v1",
                            "lineColor": "#e1ede9",
                            "fillColors": "#e1ede9",
                            "fillAlphas": 1,
                            "type": "column",
                            "title": "Actual Sales",
                            "valueField": "sales2",
                            "clustered": false,
                            "columnWidth": 0.5,
                            "legendValueText": "$[[value]]M",
                            "balloonText": "[[title]]<br /><b style='font-size: 130%'>$[[value]]M</b>"
                        }, {
                            "id": "g4",
                            "valueAxis": "v1",
                            "lineColor": "#558B2F",
                            "fillColors": "#558B2F",
                            "fillAlphas": 1,
                            "type": "column",
                            "title": "Target Sales",
                            "valueField": "sales1",
                            "clustered": false,
                            "columnWidth": 0.3,
                            "legendValueText": "$[[value]]M",
                            "balloonText": "[[title]]<br /><b style='font-size: 130%'>$[[value]]M</b>"
                        }, {
                            "id": "g1",
                            "valueAxis": "v2",
                            "bullet": "round",
                            "bulletBorderAlpha": 1,
                            "bulletColor": "#FFFFFF",
                            "bulletSize": 5,
                            "hideBulletsCount": 50,
                            "lineThickness": 2,
                            "lineColor": "#20acd4",
                            "type": "smoothedLine",
                            "title": "Market Days",
                            "useLineColorForBulletBorder": true,
                            "valueField": "market1",
                            "balloonText": "[[title]]<br /><b style='font-size: 130%'>[[value]]</b>"
                        }, {
                            "id": "g2",
                            "valueAxis": "v2",
                            "bullet": "round",
                            "bulletBorderAlpha": 1,
                            "bulletColor": "#FFFFFF",
                            "bulletSize": 5,
                            "hideBulletsCount": 50,
                            "lineThickness": 2,
                            "lineColor": "#E5343D",
                            "type": "smoothedLine",
                            "dashLength": 5,
                            "title": "Market Days ALL",
                            "useLineColorForBulletBorder": true,
                            "valueField": "market2",
                            "balloonText": "[[title]]<br /><b style='font-size: 130%'>[[value]]</b>"
                        }],
                    "chartScrollbar": {
                        "graph": "g1",
                        "oppositeAxis": false,
                        "offset": 30,
                        "scrollbarHeight": 50,
                        "backgroundAlpha": 0,
                        "selectedBackgroundAlpha": 0.9,
                        "selectedBackgroundColor": "#ffffff",
                        "graphFillAlpha": 0,
                        "graphLineAlpha": 0.5,
                        "selectedGraphFillAlpha": 0,
                        "selectedGraphLineAlpha": 1,
                        "autoGridCount": true,
                        "color": "#AAAAAA"
                    },
                    "chartCursor": {
                        "pan": true,
                        "valueLineEnabled": true,
                        "valueLineBalloonEnabled": true,
                        "cursorAlpha": 0,
                        "valueLineAlpha": 0.2
                    },
                    "categoryField": "date",
                    "categoryAxis": {
                        "parseDates": true,
                        "dashLength": 1,
                        "minorGridEnabled": true
                    },
                    "legend": {
                        "useGraphSettings": true,
                        "position": "top"
                    },
                    "balloon": {
                        "borderThickness": 1,
                        "shadowAlpha": 0
                    },
                    "export": {
                        "enabled": true
                    },
                    "dataProvider": [{
                            "date": "2013-01-16",
                            "market1": 71,
                            "market2": 75,
                            "sales1": 5,
                            "sales2": 8
                        }, {
                            "date": "2013-01-17",
                            "market1": 74,
                            "market2": 78,
                            "sales1": 4,
                            "sales2": 6
                        }, {
                            "date": "2013-01-18",
                            "market1": 78,
                            "market2": 88,
                            "sales1": 5,
                            "sales2": 2
                        }, {
                            "date": "2013-01-19",
                            "market1": 85,
                            "market2": 89,
                            "sales1": 8,
                            "sales2": 9
                        }, {
                            "date": "2013-01-20",
                            "market1": 82,
                            "market2": 89,
                            "sales1": 9,
                            "sales2": 6
                        }, {
                            "date": "2013-01-21",
                            "market1": 83,
                            "market2": 85,
                            "sales1": 3,
                            "sales2": 5
                        }, {
                            "date": "2013-01-22",
                            "market1": 88,
                            "market2": 92,
                            "sales1": 5,
                            "sales2": 7
                        }, {
                            "date": "2013-01-23",
                            "market1": 85,
                            "market2": 90,
                            "sales1": 7,
                            "sales2": 6
                        }, {
                            "date": "2013-01-24",
                            "market1": 85,
                            "market2": 91,
                            "sales1": 9,
                            "sales2": 5
                        }, {
                            "date": "2013-01-25",
                            "market1": 80,
                            "market2": 84,
                            "sales1": 5,
                            "sales2": 8
                        }, {
                            "date": "2013-01-26",
                            "market1": 87,
                            "market2": 92,
                            "sales1": 4,
                            "sales2": 8
                        }, {
                            "date": "2013-01-27",
                            "market1": 84,
                            "market2": 87,
                            "sales1": 3,
                            "sales2": 4
                        }, {
                            "date": "2013-01-28",
                            "market1": 83,
                            "market2": 88,
                            "sales1": 5,
                            "sales2": 7
                        }, {
                            "date": "2013-01-29",
                            "market1": 84,
                            "market2": 87,
                            "sales1": 5,
                            "sales2": 8
                        }, {
                            "date": "2013-01-30",
                            "market1": 81,
                            "market2": 85,
                            "sales1": 4,
                            "sales2": 7
                        }]
                });

                var chartData = [{
                        "date": "2017-01-01",
                        "distance": 250,
                        "townName": "Dhaka",
                        "townName2": "Dhaka",
                        "townSize": 25,
                        "latitude": 40.71,
                        "duration": 408
                    }, {
                        "date": "2017-01-02",
                        "distance": 371,
                        "townName": "Chittagong",
                        "townSize": 14,
                        "latitude": 38.89,
                        "duration": 482
                    }, {
                        "date": "2017-01-03",
                        "distance": 433,
                        "townName": "Comilla",
                        "townSize": 6,
                        "latitude": 34.22,
                        "duration": 562
                    }, {
                        "date": "2017-01-04",
                        "distance": 345,
                        "townName": "Jacksonville",
                        "townSize": 7,
                        "latitude": 30.35,
                        "duration": 379
                    }, {
                        "date": "2017-01-05",
                        "distance": 480,
                        "townName": "Noakhali",
                        "townName2": "Noakhali",
                        "townSize": 10,
                        "latitude": 25.83,
                        "duration": 501
                    }, {
                        "date": "2017-01-06",
                        "distance": 386,
                        "townName": "Chadpur",
                        "townSize": 7,
                        "latitude": 30.46,
                        "duration": 443
                    }, {
                        "date": "2017-01-07",
                        "distance": 348,
                        "townName": "Borishal",
                        "townSize": 10,
                        "latitude": 29.94,
                        "duration": 405
                    }, {
                        "date": "2017-01-08",
                        "distance": 238,
                        "townName": "Feni",
                        "townName2": "Feni",
                        "townSize": 16,
                        "latitude": 29.76,
                        "duration": 309
                    }, {
                        "date": "2017-01-09",
                        "distance": 218,
                        "townName": "Dalas",
                        "townSize": 17,
                        "latitude": 32.8,
                        "duration": 287
                    }, {
                        "date": "2017-01-10",
                        "distance": 349,
                        "townName": "Oklahoma City",
                        "townSize": 11,
                        "latitude": 35.49,
                        "duration": 485
                    }, {
                        "date": "2017-01-11",
                        "distance": 603,
                        "townName": "Kansas City",
                        "townSize": 10,
                        "latitude": 39.1,
                        "duration": 890
                    }, {
                        "date": "2017-01-12",
                        "distance": 534,
                        "townName": "Rangamati",
                        "townName2": "Rangamati",
                        "townSize": 18,
                        "latitude": 39.74,
                        "duration": 810
                    }, {
                        "date": "2017-01-13",
                        "townName": "Salt Lake City",
                        "townSize": 12,
                        "distance": 425,
                        "duration": 670,
                        "latitude": 40.75,
                        "alpha": 0.4
                    }, {
                        "date": "2017-01-14",
                        "latitude": 36.1,
                        "duration": 470,
                        "townName": "Rongpur",
                        "townName2": "Rongpur",
                        "bulletClass": "lastBullet"
                    }, {
                        "date": "2017-01-15"
                    }, {
                        "date": "2017-01-16"
                    }
                ];
                var chart = AmCharts.makeChart("chartdiv3", {
                    "type": "serial",
                    "theme": "light",

                    "dataDateFormat": "YYYY-MM-DD",
                    "dataProvider": chartData,

                    "addClassNames": true,
                    "startDuration": 1,
                    //"color": "#FFFFFF",
                    "marginLeft": 0,

                    "categoryField": "date",
                    "categoryAxis": {
                        "parseDates": true,
                        "minPeriod": "DD",
                        "autoGridCount": false,
                        "gridCount": 50,
                        "gridAlpha": 0.1,
                        "gridColor": "#FFFFFF",
                        "axisColor": "#555555",
                        "dateFormats": [{
                                "period": 'DD',
                                "format": 'DD'
                            }, {
                                "period": 'WW',
                                "format": 'MMM DD'
                            }, {
                                "period": 'MM',
                                "format": 'MMM'
                            }, {
                                "period": 'YYYY',
                                "format": 'YYYY'
                            }]
                    },

                    "valueAxes": [{
                            "id": "a1",
                            "title": "distance",
                            "gridAlpha": 0,
                            "axisAlpha": 0
                        }, {
                            "id": "a2",
                            "position": "right",
                            "gridAlpha": 0,
                            "axisAlpha": 0,
                            "labelsEnabled": false
                        }, {
                            "id": "a3",
                            "title": "duration",
                            "position": "right",
                            "gridAlpha": 0,
                            "axisAlpha": 0,
                            "inside": true,
                            "duration": "mm",
                            "durationUnits": {
                                "DD": "d. ",
                                "hh": "h ",
                                "mm": "min",
                                "ss": ""
                            }
                        }],
                    "graphs": [{
                            "id": "g1",
                            "valueField": "distance",
                            "title": "distance",
                            "type": "column",
                            "fillAlphas": 0.9,
                            "valueAxis": "a1",
                            "balloonText": "[[value]] miles",
                            "legendValueText": "[[value]] mi",
                            "legendPeriodValueText": "total: [[value.sum]] mi",
                            "lineColor": "#428bca",
                            "alphaField": "alpha"
                        }, {
                            "id": "g2",
                            "valueField": "latitude",
                            "classNameField": "bulletClass",
                            "title": "latitude/city",
                            "type": "line",
                            "valueAxis": "a2",
                            "lineColor": "#558B2F",
                            "lineThickness": 1,
                            "legendValueText": "[[value]]/[[description]]",
                            "descriptionField": "townName",
                            "bullet": "round",
                            "bulletSizeField": "townSize",
                            "bulletBorderColor": "#558B2F",
                            "bulletBorderAlpha": 1,
                            "bulletBorderThickness": 2,
                            "bulletColor": "#558B2F",
                            "labelText": "[[townName2]]",
                            "labelPosition": "right",
                            "balloonText": "latitude:[[value]]",
                            "showBalloon": true,
                            "animationPlayed": true
                        }, {
                            "id": "g3",
                            "title": "duration",
                            "valueField": "duration",
                            "type": "line",
                            "valueAxis": "a3",
                            "lineColor": "#E5343D",
                            "balloonText": "[[value]]",
                            "lineThickness": 1,
                            "legendValueText": "[[value]]",
                            "bullet": "square",
                            "bulletBorderColor": "#E5343D",
                            "bulletBorderThickness": 1,
                            "bulletBorderAlpha": 1,
                            "dashLengthField": "dashLength",
                            "animationPlayed": true
                        }],

                    "chartCursor": {
                        "zoomable": false,
                        "categoryBalloonDateFormat": "DD",
                        "cursorAlpha": 0,
                        "valueBalloonsEnabled": false
                    },
                    "legend": {
                        "bulletType": "round",
                        "equalWidths": false,
                        "valueWidth": 120,
                        "useGraphSettings": true
                                //"color": "#FFFFFF"
                    }
                });

                /**
                 * SVG path for target icon
                 */
                var targetSVG = "M9,0C4.029,0,0,4.029,0,9s4.029,9,9,9s9-4.029,9-9S13.971,0,9,0z M9,15.93 c-3.83,0-6.93-3.1-6.93-6.93S5.17,2.07,9,2.07s6.93,3.1,6.93,6.93S12.83,15.93,9,15.93 M12.5,9c0,1.933-1.567,3.5-3.5,3.5S5.5,10.933,5.5,9S7.067,5.5,9,5.5 S12.5,7.067,12.5,9z";

                /**
                 * SVG path for plane icon
                 */
                var planeSVG = "m2,106h28l24,30h72l-44,-133h35l80,132h98c21,0 21,34 0,34l-98,0 -80,134h-35l43,-133h-71l-24,30h-28l15,-47";

                /**
                 * Create the map
                 */
                var map = AmCharts.makeChart("chartMap", {
                    "type": "map",
                    "theme": "light",

                    "projection": "winkel3",
                    "dataProvider": {
                        "map": "worldLow",

                        "lines": [{
                                "id": "line1",
                                "arc": -0.85,
                                "alpha": 0.3,
                                "latitudes": [23.684994, 48.8567, 43.8163, 34.3, 23, 61.524010, 20.593684, 33.223191],
                                "longitudes": [90.356331, 2.3510, -79.4287, -118.15, -82, 105.318756, 78.962880, 43.679291]
                            }, {
                                "id": "line2",
                                "alpha": 0,
                                "color": "#E5343D",
                                "latitudes": [23.684994, 48.8567, 43.8163, 34.3, 23, 61.524010, 20.593684, 33.223191],
                                "longitudes": [90.356331, 2.3510, -79.4287, -118.15, -82, 105.318756, 78.962880, 43.679291]
                            }],
                        "images": [{
                                "svgPath": targetSVG,
                                "title": "Bangladesh",
                                "latitude": 23.684994,
                                "longitude": 90.356331
                            }, {
                                "svgPath": targetSVG,
                                "title": "Paris",
                                "latitude": 48.8567,
                                "longitude": 2.3510
                            }, {
                                "svgPath": targetSVG,
                                "title": "Toronto",
                                "latitude": 43.8163,
                                "longitude": -79.4287
                            }, {
                                "svgPath": targetSVG,
                                "title": "Los Angeles",
                                "latitude": 34.3,
                                "longitude": -118.15
                            }, {
                                "svgPath": targetSVG,
                                "title": "Havana",
                                "latitude": 23,
                                "longitude": -82
                            }, {}, {
                                "svgPath": targetSVG,
                                "title": "Russia",
                                "latitude": 61.524010,
                                "longitude": 105.318756
                            }, {}, {
                                "svgPath": targetSVG,
                                "title": "India",
                                "latitude": 20.593684,
                                "longitude": 78.962880
                            }, {}, {
                                "svgPath": targetSVG,
                                "title": "Iraq",
                                "latitude": 33.223191,
                                "longitude": 43.679291
                            }, {
                                "svgPath": planeSVG,
                                "positionOnLine": 0,
                                "color": "#000000",
                                "alpha": 0.1,
                                "animateAlongLine": true,
                                "lineId": "line2",
                                "flipDirection": true,
                                "loop": true,
                                "scale": 0.03,
                                "positionScale": 1.3
                            }, {
                                "svgPath": planeSVG,
                                "positionOnLine": 0,
                                "color": "#585869",
                                "animateAlongLine": true,
                                "lineId": "line1",
                                "flipDirection": true,
                                "loop": true,
                                "scale": 0.03,
                                "positionScale": 1.8
                            }]
                    },

                    "areasSettings": {
                        "unlistedAreasColor": "#5b69bc"
                    },

                    "imagesSettings": {
                        "color": "#E5343D",
                        "rollOverColor": "#E5343D",
                        "selectedColor": "#E5343D",
                        "pauseDuration": 0.2,
                        "animationDuration": 4,
                        "adjustAnimationSpeed": true
                    },

                    "linesSettings": {
                        "color": "#E5343D",
                        "alpha": 0.4
                    },

                    "export": {
                        "enabled": true
                    }

                });

                var chart = AmCharts.makeChart("chartPie", {
                    "type": "pie",
                    //                    "theme": "light",
                    "addClassNames": true,
                    "classNameField": "class",
                    "dataProvider": [{
                            "value": 4852,
                            "class": "color1"
                        }, {
                            "value": 9899,
                            "class": "color2"
                        }, {
                            "value": 7789,
                            "class": "color3"
                        }],
                    "valueField": "value",
                    "labelRadius": 5,

                    "radius": "42%",
                    "innerRadius": "60%",
                    "labelText": "[[title]]",
                    "export": {
                        "enabled": true
                    }
                });



                //Column chart with images on top
                var chart = AmCharts.makeChart("column",
                        {
                            "type": "serial",
                            "theme": "light",
                            "dataProvider": [{
                                    "name": "Salauddin",
                                    "points": 35654,
                                    "color": "#428bca",
                                    "bullet": "assets/plugins/amcharts/images/A04.png"
                                }, {
                                    "name": "Tuhin",
                                    "points": 65456,
                                    "color": "#558B2F",
                                    "bullet": "assets/plugins/amcharts/images/C02.png"
                                }, {
                                    "name": "Jahangir",
                                    "points": 45724,
                                    "color": "#FFB61E",
                                    "bullet": "assets/plugins/amcharts/images/D02.png"
                                }, {
                                    "name": "Tanjil",
                                    "points": 13654,
                                    "color": "#62d0f1",
                                    "bullet": "assets/plugins/amcharts/images/E01.png"
                                }, {
                                    "name": "Naeem",
                                    "points": 53654,
                                    "color": "#E5343D",
                                    "bullet": "assets/plugins/amcharts/images/A04.png"
                                }],
                            "valueAxes": [{
                                    "maximum": 80000,
                                    "minimum": 0,
                                    "axisAlpha": 0,
                                    "dashLength": 4,
                                    "position": "left"
                                }],
                            "startDuration": 1,
                            "graphs": [{
                                    "balloonText": "<span style='font-size:13px;'>[[category]]: <b>[[value]]</b></span>",
                                    "bulletOffset": 10,
                                    "bulletSize": 52,
                                    "colorField": "color",
                                    "cornerRadiusTop": 8,
                                    "customBulletField": "bullet",
                                    "fillAlphas": 0.9,
                                    "lineAlpha": 0,
                                    "type": "column",
                                    "valueField": "points"
                                }],
                            "marginTop": 0,
                            "marginRight": 0,
                            "marginLeft": 0,
                            "marginBottom": 0,
                            "autoMargins": false,
                            "categoryField": "name",
                            "categoryAxis": {
                                "axisAlpha": 0,
                                "gridAlpha": 0,
                                "inside": true,
                                "tickLength": 0
                            },
                            "export": {
                                "enabled": true
                            }
                        });




                //Zoomable Value Axis
                var chart = AmCharts.makeChart("zoomable", {
                    "type": "serial",
                    "theme": "light",
                    "marginRight": 40,
                    "marginLeft": 40,
                    "autoMarginOffset": 20,
                    "dataDateFormat": "YYYY-MM-DD",
                    "valueAxes": [{
                            "id": "v1",
                            "axisAlpha": 0,
                            "position": "left",
                            "ignoreAxisWidth": true
                        }],
                    "balloon": {
                        "borderThickness": 1,
                        "shadowAlpha": 0
                    },
                    "graphs": [{
                            "id": "g1",
                            "balloon": {
                                "drop": true,
                                "adjustBorderColor": false,
                                "color": "#ffffff",
                                "type": "smoothedLine"
                            },
                            "fillAlphas": 0.2,
                            "bullet": "round",
                            "bulletBorderAlpha": 1,
                            "bulletColor": "#FFFFFF",
                            "bulletSize": 5,
                            "hideBulletsCount": 50,
                            "lineThickness": 2,
                            "title": "red line",
                            "useLineColorForBulletBorder": true,
                            "valueField": "value",
                            "balloonText": "<span style='font-size:18px;'>[[value]]</span>"
                        }],
                    "chartCursor": {
                        "valueLineEnabled": true,
                        "valueLineBalloonEnabled": true,
                        "cursorAlpha": 0,
                        "zoomable": false,
                        "valueZoomable": true,
                        "valueLineAlpha": 0.5
                    },
                    "valueScrollbar": {
                        "autoGridCount": true,
                        "color": "#000000",
                        "scrollbarHeight": 50
                    },
                    "categoryField": "date",
                    "categoryAxis": {
                        "parseDates": true,
                        "dashLength": 1,
                        "minorGridEnabled": true
                    },
                    "export": {
                        "enabled": true
                    },
                    "dataProvider": [{
                            "date": "2012-07-27",
                            "value": 13
                        }, {
                            "date": "2012-07-28",
                            "value": 11
                        }, {
                            "date": "2012-07-29",
                            "value": 15
                        }, {
                            "date": "2012-07-30",
                            "value": 16
                        }, {
                            "date": "2012-07-31",
                            "value": 18
                        }, {
                            "date": "2012-08-01",
                            "value": 13
                        }, {
                            "date": "2012-08-02",
                            "value": 22
                        }, {
                            "date": "2012-08-03",
                            "value": 23
                        }, {
                            "date": "2012-08-04",
                            "value": 20
                        }, {
                            "date": "2012-08-05",
                            "value": 17
                        }, {
                            "date": "2012-08-06",
                            "value": 16
                        }, {
                            "date": "2012-08-07",
                            "value": 18
                        }, {
                            "date": "2012-08-08",
                            "value": 21
                        }, {
                            "date": "2012-08-09",
                            "value": 26
                        }, {
                            "date": "2012-08-10",
                            "value": 24
                        }, {
                            "date": "2012-08-11",
                            "value": 29
                        }, {
                            "date": "2012-08-12",
                            "value": 32
                        }, {
                            "date": "2012-08-13",
                            "value": 18
                        }, {
                            "date": "2012-08-14",
                            "value": 24
                        }, {
                            "date": "2012-08-15",
                            "value": 22
                        }, {
                            "date": "2012-08-16",
                            "value": 18
                        }, {
                            "date": "2012-08-17",
                            "value": 19
                        }, {
                            "date": "2012-08-18",
                            "value": 14
                        }, {
                            "date": "2012-08-19",
                            "value": 15
                        }, {
                            "date": "2012-08-20",
                            "value": 12
                        }, {
                            "date": "2012-08-21",
                            "value": 8
                        }, {
                            "date": "2012-08-22",
                            "value": 9
                        }, {
                            "date": "2012-08-23",
                            "value": 8
                        }, {
                            "date": "2012-08-24",
                            "value": 7
                        }, {
                            "date": "2012-08-25",
                            "value": 5
                        }, {
                            "date": "2012-08-26",
                            "value": 11
                        }, {
                            "date": "2012-08-27",
                            "value": 13
                        }, {
                            "date": "2012-08-28",
                            "value": 18
                        }, {
                            "date": "2012-08-29",
                            "value": 20
                        }, {
                            "date": "2012-08-30",
                            "value": 29
                        }, {
                            "date": "2012-08-31",
                            "value": 33
                        }, {
                            "date": "2012-09-01",
                            "value": 42
                        }, {
                            "date": "2012-09-02",
                            "value": 35
                        }, {
                            "date": "2012-09-03",
                            "value": 31
                        }, {
                            "date": "2012-09-04",
                            "value": 47
                        }, {
                            "date": "2012-09-05",
                            "value": 52
                        }, {
                            "date": "2012-09-06",
                            "value": 46
                        }, {
                            "date": "2012-09-07",
                            "value": 41
                        }, {
                            "date": "2012-09-08",
                            "value": 43
                        }, {
                            "date": "2012-09-09",
                            "value": 40
                        }, {
                            "date": "2012-09-10",
                            "value": 39
                        }, {
                            "date": "2012-09-11",
                            "value": 34
                        }, {
                            "date": "2012-09-12",
                            "value": 29
                        }, {
                            "date": "2012-09-13",
                            "value": 34
                        }, {
                            "date": "2012-09-14",
                            "value": 37
                        }, {
                            "date": "2012-09-15",
                            "value": 42
                        }, {
                            "date": "2012-09-16",
                            "value": 49
                        }, {
                            "date": "2012-09-17",
                            "value": 46
                        }, {
                            "date": "2012-09-18",
                            "value": 47
                        }, {
                            "date": "2012-09-19",
                            "value": 55
                        }, {
                            "date": "2012-09-20",
                            "value": 59
                        }, {
                            "date": "2012-09-21",
                            "value": 58
                        }, {
                            "date": "2012-09-22",
                            "value": 57
                        }, {
                            "date": "2012-09-23",
                            "value": 61
                        }, {
                            "date": "2012-09-24",
                            "value": 59
                        }, {
                            "date": "2012-09-25",
                            "value": 67
                        }, {
                            "date": "2012-09-26",
                            "value": 65
                        }, {
                            "date": "2012-09-27",
                            "value": 61
                        }, {
                            "date": "2012-09-28",
                            "value": 66
                        }, {
                            "date": "2012-09-29",
                            "value": 69
                        }, {
                            "date": "2012-09-30",
                            "value": 71
                        }, {
                            "date": "2012-10-01",
                            "value": 67
                        }, {
                            "date": "2012-10-02",
                            "value": 63
                        }, {
                            "date": "2012-10-03",
                            "value": 46
                        }, {
                            "date": "2012-10-04",
                            "value": 32
                        }, {
                            "date": "2012-10-05",
                            "value": 21
                        }, {
                            "date": "2012-10-06",
                            "value": 18
                        }, {
                            "date": "2012-10-07",
                            "value": 21
                        }, {
                            "date": "2012-10-08",
                            "value": 28
                        }, {
                            "date": "2012-10-09",
                            "value": 27
                        }, {
                            "date": "2012-10-10",
                            "value": 36
                        }, {
                            "date": "2012-10-11",
                            "value": 33
                        }, {
                            "date": "2012-10-12",
                            "value": 31
                        }, {
                            "date": "2012-10-13",
                            "value": 30
                        }, {
                            "date": "2012-10-14",
                            "value": 34
                        }, {
                            "date": "2012-10-15",
                            "value": 38
                        }, {
                            "date": "2012-10-16",
                            "value": 37
                        }, {
                            "date": "2012-10-17",
                            "value": 44
                        }, {
                            "date": "2012-10-18",
                            "value": 49
                        }, {
                            "date": "2012-10-19",
                            "value": 53
                        }, {
                            "date": "2012-10-20",
                            "value": 57
                        }, {
                            "date": "2012-10-21",
                            "value": 60
                        }, {
                            "date": "2012-10-22",
                            "value": 61
                        }, {
                            "date": "2012-10-23",
                            "value": 69
                        }, {
                            "date": "2012-10-24",
                            "value": 67
                        }, {
                            "date": "2012-10-25",
                            "value": 72
                        }, {
                            "date": "2012-10-26",
                            "value": 77
                        }, {
                            "date": "2012-10-27",
                            "value": 75
                        }, {
                            "date": "2012-10-28",
                            "value": 70
                        }, {
                            "date": "2012-10-29",
                            "value": 72
                        }, {
                            "date": "2012-10-30",
                            "value": 70
                        }, {
                            "date": "2012-10-31",
                            "value": 72
                        }, {
                            "date": "2012-11-01",
                            "value": 73
                        }, {
                            "date": "2012-11-02",
                            "value": 67
                        }, {
                            "date": "2012-11-03",
                            "value": 68
                        }, {
                            "date": "2012-11-04",
                            "value": 65
                        }, {
                            "date": "2012-11-05",
                            "value": 71
                        }, {
                            "date": "2012-11-06",
                            "value": 75
                        }, {
                            "date": "2012-11-07",
                            "value": 74
                        }, {
                            "date": "2012-11-08",
                            "value": 71
                        }, {
                            "date": "2012-11-09",
                            "value": 76
                        }, {
                            "date": "2012-11-10",
                            "value": 77
                        }, {
                            "date": "2012-11-11",
                            "value": 81
                        }, {
                            "date": "2012-11-12",
                            "value": 83
                        }, {
                            "date": "2012-11-13",
                            "value": 80
                        }, {
                            "date": "2012-11-14",
                            "value": 81
                        }, {
                            "date": "2012-11-15",
                            "value": 87
                        }, {
                            "date": "2012-11-16",
                            "value": 82
                        }, {
                            "date": "2012-11-17",
                            "value": 86
                        }, {
                            "date": "2012-11-18",
                            "value": 80
                        }, {
                            "date": "2012-11-19",
                            "value": 87
                        }, {
                            "date": "2012-11-20",
                            "value": 83
                        }, {
                            "date": "2012-11-21",
                            "value": 85
                        }, {
                            "date": "2012-11-22",
                            "value": 84
                        }, {
                            "date": "2012-11-23",
                            "value": 82
                        }, {
                            "date": "2012-11-24",
                            "value": 73
                        }, {
                            "date": "2012-11-25",
                            "value": 71
                        }, {
                            "date": "2012-11-26",
                            "value": 75
                        }, {
                            "date": "2012-11-27",
                            "value": 79
                        }, {
                            "date": "2012-11-28",
                            "value": 70
                        }, {
                            "date": "2012-11-29",
                            "value": 73
                        }, {
                            "date": "2012-11-30",
                            "value": 61
                        }, {
                            "date": "2012-12-01",
                            "value": 62
                        }, {
                            "date": "2012-12-02",
                            "value": 66
                        }, {
                            "date": "2012-12-03",
                            "value": 65
                        }, {
                            "date": "2012-12-04",
                            "value": 73
                        }, {
                            "date": "2012-12-05",
                            "value": 79
                        }, {
                            "date": "2012-12-06",
                            "value": 78
                        }, {
                            "date": "2012-12-07",
                            "value": 78
                        }, {
                            "date": "2012-12-08",
                            "value": 78
                        }, {
                            "date": "2012-12-09",
                            "value": 74
                        }, {
                            "date": "2012-12-10",
                            "value": 73
                        }, {
                            "date": "2012-12-11",
                            "value": 75
                        }, {
                            "date": "2012-12-12",
                            "value": 70
                        }, {
                            "date": "2012-12-13",
                            "value": 77
                        }, {
                            "date": "2012-12-14",
                            "value": 67
                        }, {
                            "date": "2012-12-15",
                            "value": 62
                        }, {
                            "date": "2012-12-16",
                            "value": 64
                        }, {
                            "date": "2012-12-17",
                            "value": 61
                        }, {
                            "date": "2012-12-18",
                            "value": 59
                        }, {
                            "date": "2012-12-19",
                            "value": 53
                        }, {
                            "date": "2012-12-20",
                            "value": 54
                        }, {
                            "date": "2012-12-21",
                            "value": 56
                        }, {
                            "date": "2012-12-22",
                            "value": 59
                        }, {
                            "date": "2012-12-23",
                            "value": 58
                        }, {
                            "date": "2012-12-24",
                            "value": 55
                        }, {
                            "date": "2012-12-25",
                            "value": 52
                        }, {
                            "date": "2012-12-26",
                            "value": 54
                        }, {
                            "date": "2012-12-27",
                            "value": 50
                        }, {
                            "date": "2012-12-28",
                            "value": 50
                        }, {
                            "date": "2012-12-29",
                            "value": 51
                        }, {
                            "date": "2012-12-30",
                            "value": 52
                        }, {
                            "date": "2012-12-31",
                            "value": 58
                        }, {
                            "date": "2013-01-01",
                            "value": 60
                        }, {
                            "date": "2013-01-02",
                            "value": 67
                        }, {
                            "date": "2013-01-03",
                            "value": 64
                        }, {
                            "date": "2013-01-04",
                            "value": 66
                        }, {
                            "date": "2013-01-05",
                            "value": 60
                        }, {
                            "date": "2013-01-06",
                            "value": 63
                        }, {
                            "date": "2013-01-07",
                            "value": 61
                        }, {
                            "date": "2013-01-08",
                            "value": 60
                        }, {
                            "date": "2013-01-09",
                            "value": 65
                        }, {
                            "date": "2013-01-10",
                            "value": 75
                        }, {
                            "date": "2013-01-11",
                            "value": 77
                        }, {
                            "date": "2013-01-12",
                            "value": 78
                        }, {
                            "date": "2013-01-13",
                            "value": 70
                        }, {
                            "date": "2013-01-14",
                            "value": 70
                        }, {
                            "date": "2013-01-15",
                            "value": 73
                        }, {
                            "date": "2013-01-16",
                            "value": 71
                        }, {
                            "date": "2013-01-17",
                            "value": 74
                        }, {
                            "date": "2013-01-18",
                            "value": 78
                        }, {
                            "date": "2013-01-19",
                            "value": 85
                        }, {
                            "date": "2013-01-20",
                            "value": 82
                        }, {
                            "date": "2013-01-21",
                            "value": 83
                        }, {
                            "date": "2013-01-22",
                            "value": 88
                        }, {
                            "date": "2013-01-23",
                            "value": 85
                        }, {
                            "date": "2013-01-24",
                            "value": 85
                        }, {
                            "date": "2013-01-25",
                            "value": 80
                        }, {
                            "date": "2013-01-26",
                            "value": 87
                        }, {
                            "date": "2013-01-27",
                            "value": 84
                        }, {
                            "date": "2013-01-28",
                            "value": 83
                        }, {
                            "date": "2013-01-29",
                            "value": 84
                        }, {
                            "date": "2013-01-30",
                            "value": 81
                        }]
                });

            });
        </script>
    </body>

<!-- Mirrored from thememinister.com/adminpage/theme/adminpage_v2.0/charts_am.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Oct 2023 10:41:27 GMT -->
</html>
