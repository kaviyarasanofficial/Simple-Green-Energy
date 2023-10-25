<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from thememinister.com/adminpage/theme/adminpage_v2.0/maps_amcharts.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Oct 2023 10:41:36 GMT -->
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
        <link href="assets/plugins/amcharts/export.css" rel="stylesheet" type="text/css"/>
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
                        <li class="active">
                            <a href="#" class="material-ripple"><i class="material-icons">map</i> Maps<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li class="active"><a href="maps_amcharts.php">Amcharts Map</a></li>
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
                        <div class="header-icon"><i class="pe-7s-map-2"></i></div>
                        <div class="header-title">
                            <h1>Am Charts maps</h1>
                            <small>Programming libraries and tools for all your data visualization needs. Documentation : <a href="https://www.amcharts.com/" target="_blank">https://www.amcharts.com/</a></small>
                            <ol class="breadcrumb">
                                <li><a href="index.php"><i class="pe-7s-home"></i> Home</a></li>
                                <li><a href="#">Maps</a></li>
                                <li class="active">Am Charts maps.js</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Map with Bubbles</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div id="amchartMap1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Location-sensitive map</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div id="amchartMap2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Animations along lines</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div id="amchartMap3"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>US heat (choropleth) map</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div id="amchartMap4"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Selecting multiple areas map</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div id="amchartMap5"></div>
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
        <script src="assets/plugins/amcharts/ammap.js" type="text/javascript"></script>
        <script src="assets/plugins/amcharts/worldLow.js" type="text/javascript"></script>
        <script src="assets/plugins/amcharts/export.min.js" type="text/javascript"></script>
        <script src="assets/plugins/amcharts/light.js" type="text/javascript"></script>
        <script src="assets/plugins/amcharts/usaLow.js" type="text/javascript"></script>
        <!-- START THEME LABEL SCRIPT -->
        <script src="assets/dist/js/app.min.js" type="text/javascript"></script>
        <script src="assets/dist/js/jQuery.style.switcher.min.js" type="text/javascript"></script>
        <script>

            $(document).ready(function () {

                //Map with Bubbles

                var latlong = {};
                latlong["AD"] = {"latitude": 42.5, "longitude": 1.5};
                latlong["AE"] = {"latitude": 24, "longitude": 54};
                latlong["AF"] = {"latitude": 33, "longitude": 65};
                latlong["AG"] = {"latitude": 17.05, "longitude": -61.8};
                latlong["AI"] = {"latitude": 18.25, "longitude": -63.1667};
                latlong["AL"] = {"latitude": 41, "longitude": 20};
                latlong["AM"] = {"latitude": 40, "longitude": 45};
                latlong["AN"] = {"latitude": 12.25, "longitude": -68.75};
                latlong["AO"] = {"latitude": -12.5, "longitude": 18.5};
                latlong["AP"] = {"latitude": 35, "longitude": 105};
                latlong["AQ"] = {"latitude": -90, "longitude": 0};
                latlong["AR"] = {"latitude": -34, "longitude": -64};
                latlong["AS"] = {"latitude": -14.3333, "longitude": -170};
                latlong["AT"] = {"latitude": 47.3333, "longitude": 13.3333};
                latlong["AU"] = {"latitude": -27, "longitude": 133};
                latlong["AW"] = {"latitude": 12.5, "longitude": -69.9667};
                latlong["AZ"] = {"latitude": 40.5, "longitude": 47.5};
                latlong["BA"] = {"latitude": 44, "longitude": 18};
                latlong["BB"] = {"latitude": 13.1667, "longitude": -59.5333};
                latlong["BD"] = {"latitude": 24, "longitude": 90};
                latlong["BE"] = {"latitude": 50.8333, "longitude": 4};
                latlong["BF"] = {"latitude": 13, "longitude": -2};
                latlong["BG"] = {"latitude": 43, "longitude": 25};
                latlong["BH"] = {"latitude": 26, "longitude": 50.55};
                latlong["BI"] = {"latitude": -3.5, "longitude": 30};
                latlong["BJ"] = {"latitude": 9.5, "longitude": 2.25};
                latlong["BM"] = {"latitude": 32.3333, "longitude": -64.75};
                latlong["BN"] = {"latitude": 4.5, "longitude": 114.6667};
                latlong["BO"] = {"latitude": -17, "longitude": -65};
                latlong["BR"] = {"latitude": -10, "longitude": -55};
                latlong["BS"] = {"latitude": 24.25, "longitude": -76};
                latlong["BT"] = {"latitude": 27.5, "longitude": 90.5};
                latlong["BV"] = {"latitude": -54.4333, "longitude": 3.4};
                latlong["BW"] = {"latitude": -22, "longitude": 24};
                latlong["BY"] = {"latitude": 53, "longitude": 28};
                latlong["BZ"] = {"latitude": 17.25, "longitude": -88.75};
                latlong["CA"] = {"latitude": 54, "longitude": -100};
                latlong["CC"] = {"latitude": -12.5, "longitude": 96.8333};
                latlong["CD"] = {"latitude": 0, "longitude": 25};
                latlong["CF"] = {"latitude": 7, "longitude": 21};
                latlong["CG"] = {"latitude": -1, "longitude": 15};
                latlong["CH"] = {"latitude": 47, "longitude": 8};
                latlong["CI"] = {"latitude": 8, "longitude": -5};
                latlong["CK"] = {"latitude": -21.2333, "longitude": -159.7667};
                latlong["CL"] = {"latitude": -30, "longitude": -71};
                latlong["CM"] = {"latitude": 6, "longitude": 12};
                latlong["CN"] = {"latitude": 35, "longitude": 105};
                latlong["CO"] = {"latitude": 4, "longitude": -72};
                latlong["CR"] = {"latitude": 10, "longitude": -84};
                latlong["CU"] = {"latitude": 21.5, "longitude": -80};
                latlong["CV"] = {"latitude": 16, "longitude": -24};
                latlong["CX"] = {"latitude": -10.5, "longitude": 105.6667};
                latlong["CY"] = {"latitude": 35, "longitude": 33};
                latlong["CZ"] = {"latitude": 49.75, "longitude": 15.5};
                latlong["DE"] = {"latitude": 51, "longitude": 9};
                latlong["DJ"] = {"latitude": 11.5, "longitude": 43};
                latlong["DK"] = {"latitude": 56, "longitude": 10};
                latlong["DM"] = {"latitude": 15.4167, "longitude": -61.3333};
                latlong["DO"] = {"latitude": 19, "longitude": -70.6667};
                latlong["DZ"] = {"latitude": 28, "longitude": 3};
                latlong["EC"] = {"latitude": -2, "longitude": -77.5};
                latlong["EE"] = {"latitude": 59, "longitude": 26};
                latlong["EG"] = {"latitude": 27, "longitude": 30};
                latlong["EH"] = {"latitude": 24.5, "longitude": -13};
                latlong["ER"] = {"latitude": 15, "longitude": 39};
                latlong["ES"] = {"latitude": 40, "longitude": -4};
                latlong["ET"] = {"latitude": 8, "longitude": 38};
                latlong["EU"] = {"latitude": 47, "longitude": 8};
                latlong["FI"] = {"latitude": 62, "longitude": 26};
                latlong["FJ"] = {"latitude": -18, "longitude": 175};
                latlong["FK"] = {"latitude": -51.75, "longitude": -59};
                latlong["FM"] = {"latitude": 6.9167, "longitude": 158.25};
                latlong["FO"] = {"latitude": 62, "longitude": -7};
                latlong["FR"] = {"latitude": 46, "longitude": 2};
                latlong["GA"] = {"latitude": -1, "longitude": 11.75};
                latlong["GB"] = {"latitude": 54, "longitude": -2};
                latlong["GD"] = {"latitude": 12.1167, "longitude": -61.6667};
                latlong["GE"] = {"latitude": 42, "longitude": 43.5};
                latlong["GF"] = {"latitude": 4, "longitude": -53};
                latlong["GH"] = {"latitude": 8, "longitude": -2};
                latlong["GI"] = {"latitude": 36.1833, "longitude": -5.3667};
                latlong["GL"] = {"latitude": 72, "longitude": -40};
                latlong["GM"] = {"latitude": 13.4667, "longitude": -16.5667};
                latlong["GN"] = {"latitude": 11, "longitude": -10};
                latlong["GP"] = {"latitude": 16.25, "longitude": -61.5833};
                latlong["GQ"] = {"latitude": 2, "longitude": 10};
                latlong["GR"] = {"latitude": 39, "longitude": 22};
                latlong["GS"] = {"latitude": -54.5, "longitude": -37};
                latlong["GT"] = {"latitude": 15.5, "longitude": -90.25};
                latlong["GU"] = {"latitude": 13.4667, "longitude": 144.7833};
                latlong["GW"] = {"latitude": 12, "longitude": -15};
                latlong["GY"] = {"latitude": 5, "longitude": -59};
                latlong["HK"] = {"latitude": 22.25, "longitude": 114.1667};
                latlong["HM"] = {"latitude": -53.1, "longitude": 72.5167};
                latlong["HN"] = {"latitude": 15, "longitude": -86.5};
                latlong["HR"] = {"latitude": 45.1667, "longitude": 15.5};
                latlong["HT"] = {"latitude": 19, "longitude": -72.4167};
                latlong["HU"] = {"latitude": 47, "longitude": 20};
                latlong["ID"] = {"latitude": -5, "longitude": 120};
                latlong["IE"] = {"latitude": 53, "longitude": -8};
                latlong["IL"] = {"latitude": 31.5, "longitude": 34.75};
                latlong["IN"] = {"latitude": 20, "longitude": 77};
                latlong["IO"] = {"latitude": -6, "longitude": 71.5};
                latlong["IQ"] = {"latitude": 33, "longitude": 44};
                latlong["IR"] = {"latitude": 32, "longitude": 53};
                latlong["IS"] = {"latitude": 65, "longitude": -18};
                latlong["IT"] = {"latitude": 42.8333, "longitude": 12.8333};
                latlong["JM"] = {"latitude": 18.25, "longitude": -77.5};
                latlong["JO"] = {"latitude": 31, "longitude": 36};
                latlong["JP"] = {"latitude": 36, "longitude": 138};
                latlong["KE"] = {"latitude": 1, "longitude": 38};
                latlong["KG"] = {"latitude": 41, "longitude": 75};
                latlong["KH"] = {"latitude": 13, "longitude": 105};
                latlong["KI"] = {"latitude": 1.4167, "longitude": 173};
                latlong["KM"] = {"latitude": -12.1667, "longitude": 44.25};
                latlong["KN"] = {"latitude": 17.3333, "longitude": -62.75};
                latlong["KP"] = {"latitude": 40, "longitude": 127};
                latlong["KR"] = {"latitude": 37, "longitude": 127.5};
                latlong["KW"] = {"latitude": 29.3375, "longitude": 47.6581};
                latlong["KY"] = {"latitude": 19.5, "longitude": -80.5};
                latlong["KZ"] = {"latitude": 48, "longitude": 68};
                latlong["LA"] = {"latitude": 18, "longitude": 105};
                latlong["LB"] = {"latitude": 33.8333, "longitude": 35.8333};
                latlong["LC"] = {"latitude": 13.8833, "longitude": -61.1333};
                latlong["LI"] = {"latitude": 47.1667, "longitude": 9.5333};
                latlong["LK"] = {"latitude": 7, "longitude": 81};
                latlong["LR"] = {"latitude": 6.5, "longitude": -9.5};
                latlong["LS"] = {"latitude": -29.5, "longitude": 28.5};
                latlong["LT"] = {"latitude": 55, "longitude": 24};
                latlong["LU"] = {"latitude": 49.75, "longitude": 6};
                latlong["LV"] = {"latitude": 57, "longitude": 25};
                latlong["LY"] = {"latitude": 25, "longitude": 17};
                latlong["MA"] = {"latitude": 32, "longitude": -5};
                latlong["MC"] = {"latitude": 43.7333, "longitude": 7.4};
                latlong["MD"] = {"latitude": 47, "longitude": 29};
                latlong["ME"] = {"latitude": 42.5, "longitude": 19.4};
                latlong["MG"] = {"latitude": -20, "longitude": 47};
                latlong["MH"] = {"latitude": 9, "longitude": 168};
                latlong["MK"] = {"latitude": 41.8333, "longitude": 22};
                latlong["ML"] = {"latitude": 17, "longitude": -4};
                latlong["MM"] = {"latitude": 22, "longitude": 98};
                latlong["MN"] = {"latitude": 46, "longitude": 105};
                latlong["MO"] = {"latitude": 22.1667, "longitude": 113.55};
                latlong["MP"] = {"latitude": 15.2, "longitude": 145.75};
                latlong["MQ"] = {"latitude": 14.6667, "longitude": -61};
                latlong["MR"] = {"latitude": 20, "longitude": -12};
                latlong["MS"] = {"latitude": 16.75, "longitude": -62.2};
                latlong["MT"] = {"latitude": 35.8333, "longitude": 14.5833};
                latlong["MU"] = {"latitude": -20.2833, "longitude": 57.55};
                latlong["MV"] = {"latitude": 3.25, "longitude": 73};
                latlong["MW"] = {"latitude": -13.5, "longitude": 34};
                latlong["MX"] = {"latitude": 23, "longitude": -102};
                latlong["MY"] = {"latitude": 2.5, "longitude": 112.5};
                latlong["MZ"] = {"latitude": -18.25, "longitude": 35};
                latlong["NA"] = {"latitude": -22, "longitude": 17};
                latlong["NC"] = {"latitude": -21.5, "longitude": 165.5};
                latlong["NE"] = {"latitude": 16, "longitude": 8};
                latlong["NF"] = {"latitude": -29.0333, "longitude": 167.95};
                latlong["NG"] = {"latitude": 10, "longitude": 8};
                latlong["NI"] = {"latitude": 13, "longitude": -85};
                latlong["NL"] = {"latitude": 52.5, "longitude": 5.75};
                latlong["NO"] = {"latitude": 62, "longitude": 10};
                latlong["NP"] = {"latitude": 28, "longitude": 84};
                latlong["NR"] = {"latitude": -0.5333, "longitude": 166.9167};
                latlong["NU"] = {"latitude": -19.0333, "longitude": -169.8667};
                latlong["NZ"] = {"latitude": -41, "longitude": 174};
                latlong["OM"] = {"latitude": 21, "longitude": 57};
                latlong["PA"] = {"latitude": 9, "longitude": -80};
                latlong["PE"] = {"latitude": -10, "longitude": -76};
                latlong["PF"] = {"latitude": -15, "longitude": -140};
                latlong["PG"] = {"latitude": -6, "longitude": 147};
                latlong["PH"] = {"latitude": 13, "longitude": 122};
                latlong["PK"] = {"latitude": 30, "longitude": 70};
                latlong["PL"] = {"latitude": 52, "longitude": 20};
                latlong["PM"] = {"latitude": 46.8333, "longitude": -56.3333};
                latlong["PR"] = {"latitude": 18.25, "longitude": -66.5};
                latlong["PS"] = {"latitude": 32, "longitude": 35.25};
                latlong["PT"] = {"latitude": 39.5, "longitude": -8};
                latlong["PW"] = {"latitude": 7.5, "longitude": 134.5};
                latlong["PY"] = {"latitude": -23, "longitude": -58};
                latlong["QA"] = {"latitude": 25.5, "longitude": 51.25};
                latlong["RE"] = {"latitude": -21.1, "longitude": 55.6};
                latlong["RO"] = {"latitude": 46, "longitude": 25};
                latlong["RS"] = {"latitude": 44, "longitude": 21};
                latlong["RU"] = {"latitude": 60, "longitude": 100};
                latlong["RW"] = {"latitude": -2, "longitude": 30};
                latlong["SA"] = {"latitude": 25, "longitude": 45};
                latlong["SB"] = {"latitude": -8, "longitude": 159};
                latlong["SC"] = {"latitude": -4.5833, "longitude": 55.6667};
                latlong["SD"] = {"latitude": 15, "longitude": 30};
                latlong["SE"] = {"latitude": 62, "longitude": 15};
                latlong["SG"] = {"latitude": 1.3667, "longitude": 103.8};
                latlong["SH"] = {"latitude": -15.9333, "longitude": -5.7};
                latlong["SI"] = {"latitude": 46, "longitude": 15};
                latlong["SJ"] = {"latitude": 78, "longitude": 20};
                latlong["SK"] = {"latitude": 48.6667, "longitude": 19.5};
                latlong["SL"] = {"latitude": 8.5, "longitude": -11.5};
                latlong["SM"] = {"latitude": 43.7667, "longitude": 12.4167};
                latlong["SN"] = {"latitude": 14, "longitude": -14};
                latlong["SO"] = {"latitude": 10, "longitude": 49};
                latlong["SR"] = {"latitude": 4, "longitude": -56};
                latlong["ST"] = {"latitude": 1, "longitude": 7};
                latlong["SV"] = {"latitude": 13.8333, "longitude": -88.9167};
                latlong["SY"] = {"latitude": 35, "longitude": 38};
                latlong["SZ"] = {"latitude": -26.5, "longitude": 31.5};
                latlong["TC"] = {"latitude": 21.75, "longitude": -71.5833};
                latlong["TD"] = {"latitude": 15, "longitude": 19};
                latlong["TF"] = {"latitude": -43, "longitude": 67};
                latlong["TG"] = {"latitude": 8, "longitude": 1.1667};
                latlong["TH"] = {"latitude": 15, "longitude": 100};
                latlong["TJ"] = {"latitude": 39, "longitude": 71};
                latlong["TK"] = {"latitude": -9, "longitude": -172};
                latlong["TM"] = {"latitude": 40, "longitude": 60};
                latlong["TN"] = {"latitude": 34, "longitude": 9};
                latlong["TO"] = {"latitude": -20, "longitude": -175};
                latlong["TR"] = {"latitude": 39, "longitude": 35};
                latlong["TT"] = {"latitude": 11, "longitude": -61};
                latlong["TV"] = {"latitude": -8, "longitude": 178};
                latlong["TW"] = {"latitude": 23.5, "longitude": 121};
                latlong["TZ"] = {"latitude": -6, "longitude": 35};
                latlong["UA"] = {"latitude": 49, "longitude": 32};
                latlong["UG"] = {"latitude": 1, "longitude": 32};
                latlong["UM"] = {"latitude": 19.2833, "longitude": 166.6};
                latlong["US"] = {"latitude": 38, "longitude": -97};
                latlong["UY"] = {"latitude": -33, "longitude": -56};
                latlong["UZ"] = {"latitude": 41, "longitude": 64};
                latlong["VA"] = {"latitude": 41.9, "longitude": 12.45};
                latlong["VC"] = {"latitude": 13.25, "longitude": -61.2};
                latlong["VE"] = {"latitude": 8, "longitude": -66};
                latlong["VG"] = {"latitude": 18.5, "longitude": -64.5};
                latlong["VI"] = {"latitude": 18.3333, "longitude": -64.8333};
                latlong["VN"] = {"latitude": 16, "longitude": 106};
                latlong["VU"] = {"latitude": -16, "longitude": 167};
                latlong["WF"] = {"latitude": -13.3, "longitude": -176.2};
                latlong["WS"] = {"latitude": -13.5833, "longitude": -172.3333};
                latlong["YE"] = {"latitude": 15, "longitude": 48};
                latlong["YT"] = {"latitude": -12.8333, "longitude": 45.1667};
                latlong["ZA"] = {"latitude": -29, "longitude": 24};
                latlong["ZM"] = {"latitude": -15, "longitude": 30};
                latlong["ZW"] = {"latitude": -20, "longitude": 30};
                var mapData = [
                    {"code": "AF", "name": "Afghanistan", "value": 32358260, "color": "#EF6C00"},
                    {"code": "AL", "name": "Albania", "value": 3215988, "color": "#5b69bc"},
                    {"code": "DZ", "name": "Algeria", "value": 35980193, "color": "#E5343D"},
                    {"code": "AO", "name": "Angola", "value": 19618432, "color": "#E5343D"},
                    {"code": "AR", "name": "Argentina", "value": 40764561, "color": "#558B2F"},
                    {"code": "AM", "name": "Armenia", "value": 3100236, "color": "#5b69bc"},
                    {"code": "AU", "name": "Australia", "value": 22605732, "color": "#8aabb0"},
                    {"code": "AT", "name": "Austria", "value": 8413429, "color": "#5b69bc"},
                    {"code": "AZ", "name": "Azerbaijan", "value": 9306023, "color": "#5b69bc"},
                    {"code": "BH", "name": "Bahrain", "value": 1323535, "color": "#EF6C00"},
                    {"code": "BD", "name": "Bangladesh", "value": 150493658, "color": "#EF6C00"},
                    {"code": "BY", "name": "Belarus", "value": 9559441, "color": "#5b69bc"},
                    {"code": "BE", "name": "Belgium", "value": 10754056, "color": "#5b69bc"},
                    {"code": "BJ", "name": "Benin", "value": 9099922, "color": "#E5343D"},
                    {"code": "BT", "name": "Bhutan", "value": 738267, "color": "#EF6C00"},
                    {"code": "BO", "name": "Bolivia", "value": 10088108, "color": "#558B2F"},
                    {"code": "BA", "name": "Bosnia and Herzegovina", "value": 3752228, "color": "#5b69bc"},
                    {"code": "BW", "name": "Botswana", "value": 2030738, "color": "#E5343D"},
                    {"code": "BR", "name": "Brazil", "value": 196655014, "color": "#558B2F"},
                    {"code": "BN", "name": "Brunei", "value": 405938, "color": "#EF6C00"},
                    {"code": "BG", "name": "Bulgaria", "value": 7446135, "color": "#5b69bc"},
                    {"code": "BF", "name": "Burkina Faso", "value": 16967845, "color": "#E5343D"},
                    {"code": "BI", "name": "Burundi", "value": 8575172, "color": "#E5343D"},
                    {"code": "KH", "name": "Cambodia", "value": 14305183, "color": "#EF6C00"},
                    {"code": "CM", "name": "Cameroon", "value": 20030362, "color": "#E5343D"},
                    {"code": "CA", "name": "Canada", "value": 34349561, "color": "#a7a737"},
                    {"code": "CV", "name": "Cape Verde", "value": 500585, "color": "#E5343D"},
                    {"code": "CF", "name": "Central African Rep.", "value": 4486837, "color": "#E5343D"},
                    {"code": "TD", "name": "Chad", "value": 11525496, "color": "#E5343D"},
                    {"code": "CL", "name": "Chile", "value": 17269525, "color": "#558B2F"},
                    {"code": "CN", "name": "China", "value": 1347565324, "color": "#EF6C00"},
                    {"code": "CO", "name": "Colombia", "value": 46927125, "color": "#558B2F"},
                    {"code": "KM", "name": "Comoros", "value": 753943, "color": "#E5343D"},
                    {"code": "CD", "name": "Congo, Dem. Rep.", "value": 67757577, "color": "#E5343D"},
                    {"code": "CG", "name": "Congo, Rep.", "value": 4139748, "color": "#E5343D"},
                    {"code": "CR", "name": "Costa Rica", "value": 4726575, "color": "#a7a737"},
                    {"code": "CI", "name": "Cote d'Ivoire", "value": 20152894, "color": "#E5343D"},
                    {"code": "HR", "name": "Croatia", "value": 4395560, "color": "#5b69bc"},
                    {"code": "CU", "name": "Cuba", "value": 11253665, "color": "#a7a737"},
                    {"code": "CY", "name": "Cyprus", "value": 1116564, "color": "#5b69bc"},
                    {"code": "CZ", "name": "Czech Rep.", "value": 10534293, "color": "#5b69bc"},
                    {"code": "DK", "name": "Denmark", "value": 5572594, "color": "#5b69bc"},
                    {"code": "DJ", "name": "Djibouti", "value": 905564, "color": "#E5343D"},
                    {"code": "DO", "name": "Dominican Rep.", "value": 10056181, "color": "#a7a737"},
                    {"code": "EC", "name": "Ecuador", "value": 14666055, "color": "#558B2F"},
                    {"code": "EG", "name": "Egypt", "value": 82536770, "color": "#E5343D"},
                    {"code": "SV", "name": "El Salvador", "value": 6227491, "color": "#a7a737"},
                    {"code": "GQ", "name": "Equatorial Guinea", "value": 720213, "color": "#E5343D"},
                    {"code": "ER", "name": "Eritrea", "value": 5415280, "color": "#E5343D"},
                    {"code": "EE", "name": "Estonia", "value": 1340537, "color": "#5b69bc"},
                    {"code": "ET", "name": "Ethiopia", "value": 84734262, "color": "#E5343D"},
                    {"code": "FJ", "name": "Fiji", "value": 868406, "color": "#8aabb0"},
                    {"code": "FI", "name": "Finland", "value": 5384770, "color": "#5b69bc"},
                    {"code": "FR", "name": "France", "value": 63125894, "color": "#5b69bc"},
                    {"code": "GA", "name": "Gabon", "value": 1534262, "color": "#E5343D"},
                    {"code": "GM", "name": "Gambia", "value": 1776103, "color": "#E5343D"},
                    {"code": "GE", "name": "Georgia", "value": 4329026, "color": "#5b69bc"},
                    {"code": "DE", "name": "Germany", "value": 82162512, "color": "#5b69bc"},
                    {"code": "GH", "name": "Ghana", "value": 24965816, "color": "#E5343D"},
                    {"code": "GR", "name": "Greece", "value": 11390031, "color": "#5b69bc"},
                    {"code": "GT", "name": "Guatemala", "value": 14757316, "color": "#a7a737"},
                    {"code": "GN", "name": "Guinea", "value": 10221808, "color": "#E5343D"},
                    {"code": "GW", "name": "Guinea-Bissau", "value": 1547061, "color": "#E5343D"},
                    {"code": "GY", "name": "Guyana", "value": 756040, "color": "#558B2F"},
                    {"code": "HT", "name": "Haiti", "value": 10123787, "color": "#a7a737"},
                    {"code": "HN", "name": "Honduras", "value": 7754687, "color": "#a7a737"},
                    {"code": "HK", "name": "Hong Kong, China", "value": 7122187, "color": "#EF6C00"},
                    {"code": "HU", "name": "Hungary", "value": 9966116, "color": "#5b69bc"},
                    {"code": "IS", "name": "Iceland", "value": 324366, "color": "#5b69bc"},
                    {"code": "IN", "name": "India", "value": 1241491960, "color": "#EF6C00"},
                    {"code": "ID", "name": "Indonesia", "value": 242325638, "color": "#EF6C00"},
                    {"code": "IR", "name": "Iran", "value": 74798599, "color": "#EF6C00"},
                    {"code": "IQ", "name": "Iraq", "value": 32664942, "color": "#EF6C00"},
                    {"code": "IE", "name": "Ireland", "value": 4525802, "color": "#5b69bc"},
                    {"code": "IL", "name": "Israel", "value": 7562194, "color": "#EF6C00"},
                    {"code": "IT", "name": "Italy", "value": 60788694, "color": "#5b69bc"},
                    {"code": "JM", "name": "Jamaica", "value": 2751273, "color": "#a7a737"},
                    {"code": "JP", "name": "Japan", "value": 126497241, "color": "#EF6C00"},
                    {"code": "JO", "name": "Jordan", "value": 6330169, "color": "#EF6C00"},
                    {"code": "KZ", "name": "Kazakhstan", "value": 16206750, "color": "#EF6C00"},
                    {"code": "KE", "name": "Kenya", "value": 41609728, "color": "#E5343D"},
                    {"code": "KP", "name": "Korea, Dem. Rep.", "value": 24451285, "color": "#EF6C00"},
                    {"code": "KR", "name": "Korea, Rep.", "value": 48391343, "color": "#EF6C00"},
                    {"code": "KW", "name": "Kuwait", "value": 2818042, "color": "#EF6C00"},
                    {"code": "KG", "name": "Kyrgyzstan", "value": 5392580, "color": "#EF6C00"},
                    {"code": "LA", "name": "Laos", "value": 6288037, "color": "#EF6C00"},
                    {"code": "LV", "name": "Latvia", "value": 2243142, "color": "#5b69bc"},
                    {"code": "LB", "name": "Lebanon", "value": 4259405, "color": "#EF6C00"},
                    {"code": "LS", "name": "Lesotho", "value": 2193843, "color": "#E5343D"},
                    {"code": "LR", "name": "Liberia", "value": 4128572, "color": "#E5343D"},
                    {"code": "LY", "name": "Libya", "value": 6422772, "color": "#E5343D"},
                    {"code": "LT", "name": "Lithuania", "value": 3307481, "color": "#5b69bc"},
                    {"code": "LU", "name": "Luxembourg", "value": 515941, "color": "#5b69bc"},
                    {"code": "MK", "name": "Macedonia, FYR", "value": 2063893, "color": "#5b69bc"},
                    {"code": "MG", "name": "Madagascar", "value": 21315135, "color": "#E5343D"},
                    {"code": "MW", "name": "Malawi", "value": 15380888, "color": "#E5343D"},
                    {"code": "MY", "name": "Malaysia", "value": 28859154, "color": "#EF6C00"},
                    {"code": "ML", "name": "Mali", "value": 15839538, "color": "#E5343D"},
                    {"code": "MR", "name": "Mauritania", "value": 3541540, "color": "#E5343D"},
                    {"code": "MU", "name": "Mauritius", "value": 1306593, "color": "#E5343D"},
                    {"code": "MX", "name": "Mexico", "value": 114793341, "color": "#a7a737"},
                    {"code": "MD", "name": "Moldova", "value": 3544864, "color": "#5b69bc"},
                    {"code": "MN", "name": "Mongolia", "value": 2800114, "color": "#EF6C00"},
                    {"code": "ME", "name": "Montenegro", "value": 632261, "color": "#5b69bc"},
                    {"code": "MA", "name": "Morocco", "value": 32272974, "color": "#E5343D"},
                    {"code": "MZ", "name": "Mozambique", "value": 23929708, "color": "#E5343D"},
                    {"code": "MM", "name": "Myanmar", "value": 48336763, "color": "#EF6C00"},
                    {"code": "NA", "name": "Namibia", "value": 2324004, "color": "#E5343D"},
                    {"code": "NP", "name": "Nepal", "value": 30485798, "color": "#EF6C00"},
                    {"code": "NL", "name": "Netherlands", "value": 16664746, "color": "#5b69bc"},
                    {"code": "NZ", "name": "New Zealand", "value": 4414509, "color": "#8aabb0"},
                    {"code": "NI", "name": "Nicaragua", "value": 5869859, "color": "#a7a737"},
                    {"code": "NE", "name": "Niger", "value": 16068994, "color": "#E5343D"},
                    {"code": "NG", "name": "Nigeria", "value": 162470737, "color": "#E5343D"},
                    {"code": "NO", "name": "Norway", "value": 4924848, "color": "#5b69bc"},
                    {"code": "OM", "name": "Oman", "value": 2846145, "color": "#EF6C00"},
                    {"code": "PK", "name": "Pakistan", "value": 176745364, "color": "#EF6C00"},
                    {"code": "PA", "name": "Panama", "value": 3571185, "color": "#a7a737"},
                    {"code": "PG", "name": "Papua New Guinea", "value": 7013829, "color": "#8aabb0"},
                    {"code": "PY", "name": "Paraguay", "value": 6568290, "color": "#558B2F"},
                    {"code": "PE", "name": "Peru", "value": 29399817, "color": "#558B2F"},
                    {"code": "PH", "name": "Philippines", "value": 94852030, "color": "#EF6C00"},
                    {"code": "PL", "name": "Poland", "value": 38298949, "color": "#5b69bc"},
                    {"code": "PT", "name": "Portugal", "value": 10689663, "color": "#5b69bc"},
                    {"code": "PR", "name": "Puerto Rico", "value": 3745526, "color": "#a7a737"},
                    {"code": "QA", "name": "Qatar", "value": 1870041, "color": "#EF6C00"},
                    {"code": "RO", "name": "Romania", "value": 21436495, "color": "#5b69bc"},
                    {"code": "RU", "name": "Russia", "value": 142835555, "color": "#5b69bc"},
                    {"code": "RW", "name": "Rwanda", "value": 10942950, "color": "#E5343D"},
                    {"code": "SA", "name": "Saudi Arabia", "value": 28082541, "color": "#EF6C00"},
                    {"code": "SN", "name": "Senegal", "value": 12767556, "color": "#E5343D"},
                    {"code": "RS", "name": "Serbia", "value": 9853969, "color": "#5b69bc"},
                    {"code": "SL", "name": "Sierra Leone", "value": 5997486, "color": "#E5343D"},
                    {"code": "SG", "name": "Singapore", "value": 5187933, "color": "#EF6C00"},
                    {"code": "SK", "name": "Slovak Republic", "value": 5471502, "color": "#5b69bc"},
                    {"code": "SI", "name": "Slovenia", "value": 2035012, "color": "#5b69bc"},
                    {"code": "SB", "name": "Solomon Islands", "value": 552267, "color": "#8aabb0"},
                    {"code": "SO", "name": "Somalia", "value": 9556873, "color": "#E5343D"},
                    {"code": "ZA", "name": "South Africa", "value": 50459978, "color": "#E5343D"},
                    {"code": "ES", "name": "Spain", "value": 46454895, "color": "#5b69bc"},
                    {"code": "LK", "name": "Sri Lanka", "value": 21045394, "color": "#EF6C00"},
                    {"code": "SD", "name": "Sudan", "value": 34735288, "color": "#E5343D"},
                    {"code": "SR", "name": "Suriname", "value": 529419, "color": "#558B2F"},
                    {"code": "SZ", "name": "Swaziland", "value": 1203330, "color": "#E5343D"},
                    {"code": "SE", "name": "Sweden", "value": 9440747, "color": "#5b69bc"},
                    {"code": "CH", "name": "Switzerland", "value": 7701690, "color": "#5b69bc"},
                    {"code": "SY", "name": "Syria", "value": 20766037, "color": "#EF6C00"},
                    {"code": "TW", "name": "Taiwan", "value": 23072000, "color": "#EF6C00"},
                    {"code": "TJ", "name": "Tajikistan", "value": 6976958, "color": "#EF6C00"},
                    {"code": "TZ", "name": "Tanzania", "value": 46218486, "color": "#E5343D"},
                    {"code": "TH", "name": "Thailand", "value": 69518555, "color": "#EF6C00"},
                    {"code": "TG", "name": "Togo", "value": 6154813, "color": "#E5343D"},
                    {"code": "TT", "name": "Trinidad and Tobago", "value": 1346350, "color": "#a7a737"},
                    {"code": "TN", "name": "Tunisia", "value": 10594057, "color": "#E5343D"},
                    {"code": "TR", "name": "Turkey", "value": 73639596, "color": "#5b69bc"},
                    {"code": "TM", "name": "Turkmenistan", "value": 5105301, "color": "#EF6C00"},
                    {"code": "UG", "name": "Uganda", "value": 34509205, "color": "#E5343D"},
                    {"code": "UA", "name": "Ukraine", "value": 45190180, "color": "#5b69bc"},
                    {"code": "AE", "name": "United Arab Emirates", "value": 7890924, "color": "#EF6C00"},
                    {"code": "GB", "name": "United Kingdom", "value": 62417431, "color": "#5b69bc"},
                    {"code": "US", "name": "United States", "value": 313085380, "color": "#a7a737"},
                    {"code": "UY", "name": "Uruguay", "value": 3380008, "color": "#558B2F"},
                    {"code": "UZ", "name": "Uzbekistan", "value": 27760267, "color": "#EF6C00"},
                    {"code": "VE", "name": "Venezuela", "value": 29436891, "color": "#558B2F"},
                    {"code": "PS", "name": "West Bank and Gaza", "value": 4152369, "color": "#EF6C00"},
                    {"code": "VN", "name": "Vietnam", "value": 88791996, "color": "#EF6C00"},
                    {"code": "YE", "name": "Yemen, Rep.", "value": 24799880, "color": "#EF6C00"},
                    {"code": "ZM", "name": "Zambia", "value": 13474959, "color": "#E5343D"},
                    {"code": "ZW", "name": "Zimbabwe", "value": 12754378, "color": "#E5343D"}];
                // get min and max values
                var minBulletSize = 3;
                var maxBulletSize = 70;
                var min = Infinity;
                var max = -Infinity;
                for (var i = 0; i < mapData.length; i++) {
                    var value = mapData[ i ].value;
                    if (value < min) {
                        min = value;
                    }
                    if (value > max) {
                        max = value;
                    }
                }

                // it's better to use circle square to show difference between values, not a radius
                var maxSquare = maxBulletSize * maxBulletSize * 2 * Math.PI;
                var minSquare = minBulletSize * minBulletSize * 2 * Math.PI;
                // create circle for each country
                var images = [];
                for (var i = 0; i < mapData.length; i++) {
                    var dataItem = mapData[ i ];
                    var value = dataItem.value;
                    // calculate size of a bubble
                    var square = (value - min) / (max - min) * (maxSquare - minSquare) + minSquare;
                    if (square < minSquare) {
                        square = minSquare;
                    }
                    var size = Math.sqrt(square / (Math.PI * 2));
                    var id = dataItem.code;
                    images.push({
                        "type": "circle",
                        "theme": "light",
                        "width": size,
                        "height": size,
                        "color": dataItem.color,
                        "longitude": latlong[ id ].longitude,
                        "latitude": latlong[ id ].latitude,
                        "title": dataItem.name,
                        "value": value
                    });
                }

                // build map
                var map = AmCharts.makeChart("amchartMap1", {
                    "type": "map",
                    "projection": "eckert6",
//                    "titles": [{
//                            "text": "Population of the World in 2011",
//                            "size": 14
//                        }, {
//                            "text": "source: Gapminder",
//                            "size": 11
//                        }],
                    "areasSettings": {
                        //"unlistedAreasColor": "#000000",
                        //"unlistedAreasAlpha": 0.1
                    },
                    "dataProvider": {
                        "map": "worldLow",
                        "images": images
                    },
                    "export": {
                        "enabled": true
                    }


                });
                //Map with curved lines 

                // svg path for target icon
                var targetSVG = "M9,0C4.029,0,0,4.029,0,9s4.029,9,9,9s9-4.029,9-9S13.971,0,9,0z M9,15.93 c-3.83,0-6.93-3.1-6.93-6.93S5.17,2.07,9,2.07s6.93,3.1,6.93,6.93S12.83,15.93,9,15.93 M12.5,9c0,1.933-1.567,3.5-3.5,3.5S5.5,10.933,5.5,9S7.067,5.5,9,5.5 S12.5,7.067,12.5,9z";
                // svg path for plane icon
                var planeSVG = "M19.671,8.11l-2.777,2.777l-3.837-0.861c0.362-0.505,0.916-1.683,0.464-2.135c-0.518-0.517-1.979,0.278-2.305,0.604l-0.913,0.913L7.614,8.804l-2.021,2.021l2.232,1.061l-0.082,0.082l1.701,1.701l0.688-0.687l3.164,1.504L9.571,18.21H6.413l-1.137,1.138l3.6,0.948l1.83,1.83l0.947,3.598l1.137-1.137V21.43l3.725-3.725l1.504,3.164l-0.687,0.687l1.702,1.701l0.081-0.081l1.062,2.231l2.02-2.02l-0.604-2.689l0.912-0.912c0.326-0.326,1.121-1.789,0.604-2.306c-0.452-0.452-1.63,0.101-2.135,0.464l-0.861-3.838l2.777-2.777c0.947-0.947,3.599-4.862,2.62-5.839C24.533,4.512,20.618,7.163,19.671,8.11z";
                var map = AmCharts.makeChart("amchartMap2", {
                    "type": "map",
                    "theme": "light",
                    "dataProvider": {
                        "map": "worldLow",
                        "zoomLevel": 3.5,
                        "zoomLongitude": 90.356331,
                        "zoomLatitude": 23.684994,
                        "lines": [{
                                "latitudes": [23.684994, 20.593684],
                                "longitudes": [90.356331, 78.962880]
                            }, {
                                "latitudes": [23.684994, 35.861660],
                                "longitudes": [90.356331, 104.195397]
                            }, {
                                "latitudes": [23.684994, 30.375321],
                                "longitudes": [90.356331, 69.345116]
                            }, {
                                "latitudes": [23.684994, 15.870032],
                                "longitudes": [90.356331, 100.992541]
                            }, {
                                "latitudes": [23.684994, 22.396428],
                                "longitudes": [90.356331, 114.109497]
                            }, {
                                "latitudes": [23.684994, 46.862496],
                                "longitudes": [90.356331, 103.846656]
                            }, {
                                "latitudes": [23.684994, 48.019573],
                                "longitudes": [90.356331, 66.923684]
                            }, {
                                "latitudes": [23.684994, 4.210484],
                                "longitudes": [90.356331, 101.975766]
                            }, {
                                "latitudes": [23.684994, 33.939110],
                                "longitudes": [90.356331, 67.709953]
                            }, {
                                "latitudes": [23.684994, 7.873054],
                                "longitudes": [90.356331, 80.771797]
                            }, {
                                "latitudes": [23.684994, 1.352083],
                                "longitudes": [90.356331, 103.819836]
                            }, {
                                "latitudes": [23.684994, 21.916221],
                                "longitudes": [90.356331, 95.955974]
                            }],
                        "images": [{
                                "id": "bangladesh",
                                "svgPath": targetSVG,
                                "title": "Bangladesh",
                                "latitude": 23.684994,
                                "longitude": 90.356331,
                                "scale": 1
                            }, {
                                "svgPath": targetSVG,
                                "title": "India",
                                "latitude": 20.593684,
                                "longitude": 78.962880,
                                "scale": 0.5
                            }, {
                                "svgPath": targetSVG,
                                "title": "China",
                                "latitude": 35.861660,
                                "longitude": 104.195397,
                                "scale": 0.5
                            }, {
                                "svgPath": targetSVG,
                                "title": "Pakistan",
                                "latitude": 30.375321,
                                "longitude": 69.345116,
                                "scale": 0.5
                            }, {
                                "svgPath": targetSVG,
                                "title": "Thailand",
                                "latitude": 15.870032,
                                "longitude": 100.992541,
                                "scale": 0.5
                            }, {
                                "svgPath": targetSVG,
                                "title": "Hong Kong",
                                "latitude": 22.396428,
                                "longitude": 114.109497,
                                "scale": 0.5
                            }, {
                                "svgPath": targetSVG,
                                "title": "Mongolia",
                                "latitude": 46.862496,
                                "longitude": 103.846656,
                                "scale": 0.5
                            }, {
                                "svgPath": targetSVG,
                                "title": "Kazakhstan",
                                "latitude": 48.019573,
                                "longitude": 66.923684,
                                "scale": 0.5
                            }, {
                                "svgPath": targetSVG,
                                "title": "Malaysia",
                                "latitude": 4.210484,
                                "longitude": 101.975766,
                                "scale": 0.5
                            }, {
                                "svgPath": targetSVG,
                                "title": "Afghanistan",
                                "latitude": 33.939110,
                                "longitude": 67.709953,
                                "scale": 0.5
                            }, {
                                "svgPath": targetSVG,
                                "title": "Sri Lanka",
                                "latitude": 7.873054,
                                "longitude": 80.771797,
                                "scale": 0.5
                            }, {
                                "svgPath": targetSVG,
                                "title": "Singapore",
                                "latitude": 1.352083,
                                "longitude": 103.819836,
                                "scale": 0.5
                            }, {
                                "svgPath": targetSVG,
                                "title": "Maynmar",
                                "latitude": 21.916221,
                                "longitude": 95.955974,
                                "scale": 0.5
                            }, {
                                "svgPath": targetSVG,
                                "title": "Stockholm",
                                "latitude": 59.3328,
                                "longitude": 18.0645,
                                "scale": 0.5
                            }, {
                                "svgPath": targetSVG,
                                "title": "Bern",
                                "latitude": 46.9480,
                                "longitude": 7.4481,
                                "scale": 0.5
                            }, {
                                "svgPath": targetSVG,
                                "title": "Kiev",
                                "latitude": 50.4422,
                                "longitude": 30.5367,
                                "scale": 0.5
                            }, {
                                "svgPath": targetSVG,
                                "title": "Paris",
                                "latitude": 48.8567,
                                "longitude": 2.3510,
                                "scale": 0.5
                            }, {
                                "svgPath": targetSVG,
                                "title": "New York",
                                "latitude": 40.43,
                                "longitude": -74,
                                "scale": 0.5
                            }]
                    },
                    "areasSettings": {
                        "unlistedAreasColor": "#558B2F",
                        "unlistedAreasAlpha": 0.9
                    },
                    "imagesSettings": {
                        "color": "#CC0000",
                        "rollOverColor": "#CC0000",
                        "selectedColor": "#000000"
                    },
                    "linesSettings": {
                        "arc": -0.7, // this makes lines curved. Use value from -1 to 1
                        "arrow": "middle",
                        "color": "#CC0000",
                        "alpha": 0.4,
                        "arrowAlpha": 1,
                        "arrowSize": 4
                    },
                    "zoomControl": {
                        "gridHeight": 100,
                        "draggerAlpha": 1,
                        "gridAlpha": 0.2
                    },
                    "backgroundZoomsToTop": true,
                    "linesAboveImages": true,
                    "export": {
                        "enabled": true
                    }
                });


                //Animations along lines
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
                var map = AmCharts.makeChart("amchartMap3", {
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



                //US heat (choropleth) map
                var map = AmCharts.makeChart("amchartMap4", {
                    "type": "map",
                    "theme": "light",
                    "colorSteps": 10,

                    "dataProvider": {
                        "map": "usaLow",
                        "areas": [{
                                "id": "US-AL",
                                "value": 4447100
                            }, {
                                "id": "US-AK",
                                "value": 626932
                            }, {
                                "id": "US-AZ",
                                "value": 5130632
                            }, {
                                "id": "US-AR",
                                "value": 2673400
                            }, {
                                "id": "US-CA",
                                "value": 33871648
                            }, {
                                "id": "US-CO",
                                "value": 4301261
                            }, {
                                "id": "US-CT",
                                "value": 3405565
                            }, {
                                "id": "US-DE",
                                "value": 783600
                            }, {
                                "id": "US-FL",
                                "value": 15982378
                            }, {
                                "id": "US-GA",
                                "value": 8186453
                            }, {
                                "id": "US-HI",
                                "value": 1211537
                            }, {
                                "id": "US-ID",
                                "value": 1293953
                            }, {
                                "id": "US-IL",
                                "value": 12419293
                            }, {
                                "id": "US-IN",
                                "value": 6080485
                            }, {
                                "id": "US-IA",
                                "value": 2926324
                            }, {
                                "id": "US-KS",
                                "value": 2688418
                            }, {
                                "id": "US-KY",
                                "value": 4041769
                            }, {
                                "id": "US-LA",
                                "value": 4468976
                            }, {
                                "id": "US-ME",
                                "value": 1274923
                            }, {
                                "id": "US-MD",
                                "value": 5296486
                            }, {
                                "id": "US-MA",
                                "value": 6349097
                            }, {
                                "id": "US-MI",
                                "value": 9938444
                            }, {
                                "id": "US-MN",
                                "value": 4919479
                            }, {
                                "id": "US-MS",
                                "value": 2844658
                            }, {
                                "id": "US-MO",
                                "value": 5595211
                            }, {
                                "id": "US-MT",
                                "value": 902195
                            }, {
                                "id": "US-NE",
                                "value": 1711263
                            }, {
                                "id": "US-NV",
                                "value": 1998257
                            }, {
                                "id": "US-NH",
                                "value": 1235786
                            }, {
                                "id": "US-NJ",
                                "value": 8414350
                            }, {
                                "id": "US-NM",
                                "value": 1819046
                            }, {
                                "id": "US-NY",
                                "value": 18976457
                            }, {
                                "id": "US-NC",
                                "value": 8049313
                            }, {
                                "id": "US-ND",
                                "value": 642200
                            }, {
                                "id": "US-OH",
                                "value": 11353140
                            }, {
                                "id": "US-OK",
                                "value": 3450654
                            }, {
                                "id": "US-OR",
                                "value": 3421399
                            }, {
                                "id": "US-PA",
                                "value": 12281054
                            }, {
                                "id": "US-RI",
                                "value": 1048319
                            }, {
                                "id": "US-SC",
                                "value": 4012012
                            }, {
                                "id": "US-SD",
                                "value": 754844
                            }, {
                                "id": "US-TN",
                                "value": 5689283
                            }, {
                                "id": "US-TX",
                                "value": 20851820
                            }, {
                                "id": "US-UT",
                                "value": 2233169
                            }, {
                                "id": "US-VT",
                                "value": 608827
                            }, {
                                "id": "US-VA",
                                "value": 7078515
                            }, {
                                "id": "US-WA",
                                "value": 5894121
                            }, {
                                "id": "US-WV",
                                "value": 1808344
                            }, {
                                "id": "US-WI",
                                "value": 5363675
                            }, {
                                "id": "US-WY",
                                "value": 493782
                            }]
                    },

                    "areasSettings": {
                        "autoZoom": true
                    },

                    "valueLegend": {
                        "right": 10,
                        "minValue": "little",
                        "maxValue": "a lot!"
                    },

                    "export": {
                        "enabled": true
                    }

                });

                //Selecting multiple areas map

                var map = AmCharts.makeChart("amchartMap5", {
                    "type": "map",
                    "theme": "light",

                    "panEventsEnabled": true,
                    //"backgroundColor": "#666666",
                    //"backgroundAlpha": 1,
                    "dataProvider": {
                        "map": "usaLow",
                        "getAreasFromMap": true
                    },
                    "areasSettings": {
                        "autoZoom": false,
                        "color": "#CDCDCD",
                        "colorSolid": "#5EB7DE",
                        "selectedColor": "#558B2F",
                        "outlineColor": "#666666",
                        "rollOverColor": "#558B2F",
                        "rollOverOutlineColor": "#FFFFFF",
                        "selectable": true
                    },
                    "listeners": [{
                            "event": "clickMapObject",
                            "method": function (event) {
                                // deselect the area by assigning all of the dataProvider as selected object
                                map.selectedObject = map.dataProvider;

                                // toggle showAsSelected
                                event.mapObject.showAsSelected = !event.mapObject.showAsSelected;

                                // bring it to an appropriate color
                                map.returnInitialColor(event.mapObject);

                                // let's build a list of currently selected states
                                var states = [];
                                for (var i in map.dataProvider.areas) {
                                    var area = map.dataProvider.areas[ i ];
                                    if (area.showAsSelected) {
                                        states.push(area.title);
                                    }
                                }
                            }
                        }],
                    "export": {
                        "enabled": true
                    }
                });
            });
        </script>
    </body>

<!-- Mirrored from thememinister.com/adminpage/theme/adminpage_v2.0/maps_amcharts.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Oct 2023 10:41:36 GMT -->
</html>