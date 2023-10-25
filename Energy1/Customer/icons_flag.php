<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from thememinister.com/adminpage/theme/adminpage_v2.0/icons_flag.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Oct 2023 10:41:11 GMT -->
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
        <link href="assets/flag-icon/css/flag-icon.min.css" rel="stylesheet" type="text/css"/>
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
                                <li class="active"><a href="icons_flag.php">Flag Icons</a></li>
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
                            <i class="pe-7s-flag"></i>
                        </div>
                        <div class="header-title">
                            <h1>Flag Icons</h1>
                            <small>A collection of all country flags in SVG — plus the CSS for easier integration.</small>
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
                                        <h4>Flag icon world</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="flag-icon-inner">
                                        <ul class="icon_list">
                                            <li>
                                                <i class="flag-icon flag-icon-ad"></i>
                                                <span class="icon_name">flag-icon-ad</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-ae"></i>
                                                <span class="icon_name">flag-icon-ae</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-af"></i>
                                                <span class="icon_name">flag-icon-af</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-ag"></i>
                                                <span class="icon_name">flag-icon-ag</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-ai"></i>
                                                <span class="icon_name">flag-icon-ai</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-al"></i>
                                                <span class="icon_name">flag-icon-al</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-am"></i>
                                                <span class="icon_name">flag-icon-am</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-ao"></i>
                                                <span class="icon_name">flag-icon-ao</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-aq"></i>
                                                <span class="icon_name">flag-icon-aq</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-ar"></i>
                                                <span class="icon_name">flag-icon-ar</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-as"></i>
                                                <span class="icon_name">flag-icon-as</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-at"></i>
                                                <span class="icon_name">flag-icon-at</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-au"></i>
                                                <span class="icon_name">flag-icon-au</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-aw"></i>
                                                <span class="icon_name">flag-icon-aw</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-ax"></i>
                                                <span class="icon_name">flag-icon-ax</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-ba"></i>
                                                <span class="icon_name">flag-icon-ba</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-bb"></i>
                                                <span class="icon_name">flag-icon-bb</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-bd"></i>
                                                <span class="icon_name">flag-icon-bd</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-be"></i>
                                                <span class="icon_name">flag-icon-be</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-bf"></i>
                                                <span class="icon_name">flag-icon-bf</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-bg"></i>
                                                <span class="icon_name">flag-icon-bg</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-bh"></i>
                                                <span class="icon_name">flag-icon-bh</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-bi"></i>
                                                <span class="icon_name">flag-icon-bi</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-bj"></i>
                                                <span class="icon_name">flag-icon-bj</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-bl"></i>
                                                <span class="icon_name">flag-icon-bl</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-bm"></i>
                                                <span class="icon_name">flag-icon-bm</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-bn"></i>
                                                <span class="icon_name">flag-icon-bn</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-bo"></i>
                                                <span class="icon_name">flag-icon-bo</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-bq"></i>
                                                <span class="icon_name">flag-icon-bq</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-br"></i>
                                                <span class="icon_name">flag-icon-br</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-bs"></i>
                                                <span class="icon_name">flag-icon-bs</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-bt"></i>
                                                <span class="icon_name">flag-icon-bt</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-bv"></i>
                                                <span class="icon_name">flag-icon-bv</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-bw"></i>
                                                <span class="icon_name">flag-icon-bw</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-by"></i>
                                                <span class="icon_name">flag-icon-by</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-bz"></i>
                                                <span class="icon_name">flag-icon-bz</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-ca"></i>
                                                <span class="icon_name">flag-icon-ca</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-cc"></i>
                                                <span class="icon_name">flag-icon-cc</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-cd"></i>
                                                <span class="icon_name">flag-icon-cd</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-cf"></i>
                                                <span class="icon_name">flag-icon-cf</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-cg"></i>
                                                <span class="icon_name">flag-icon-cg</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-ch"></i>
                                                <span class="icon_name">flag-icon-ch</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-ci"></i>
                                                <span class="icon_name">flag-icon-ci</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-ck"></i>
                                                <span class="icon_name">flag-icon-ck</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-cl"></i>
                                                <span class="icon_name">flag-icon-cl</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-cm"></i>
                                                <span class="icon_name">flag-icon-cm</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-cn"></i>
                                                <span class="icon_name">flag-icon-cn</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-co"></i>
                                                <span class="icon_name">flag-icon-co</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-cr"></i>
                                                <span class="icon_name">flag-icon-cr</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-cu"></i>
                                                <span class="icon_name">flag-icon-cu</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-cv"></i>
                                                <span class="icon_name">flag-icon-cv</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-cw"></i>
                                                <span class="icon_name">flag-icon-cw</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-cx"></i>
                                                <span class="icon_name">flag-icon-cx</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-cy"></i>
                                                <span class="icon_name">flag-icon-cy</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-cz"></i>
                                                <span class="icon_name">flag-icon-cz</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-de"></i>
                                                <span class="icon_name">flag-icon-de</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-dj"></i>
                                                <span class="icon_name">flag-icon-dj</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-dk"></i>
                                                <span class="icon_name">flag-icon-dk</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-dm"></i>
                                                <span class="icon_name">flag-icon-dm</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-do"></i>
                                                <span class="icon_name">flag-icon-do</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-dz"></i>
                                                <span class="icon_name">flag-icon-dz</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-ec"></i>
                                                <span class="icon_name">flag-icon-ec</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-ee"></i>
                                                <span class="icon_name">flag-icon-ee</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-eg"></i>
                                                <span class="icon_name">flag-icon-eg</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-eh"></i>
                                                <span class="icon_name">flag-icon-eh</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-er"></i>
                                                <span class="icon_name">flag-icon-er</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-es"></i>
                                                <span class="icon_name">flag-icon-es</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-et"></i>
                                                <span class="icon_name">flag-icon-et</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-fi"></i>
                                                <span class="icon_name">flag-icon-fi</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-fj"></i>
                                                <span class="icon_name">flag-icon-fj</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-fk"></i>
                                                <span class="icon_name">flag-icon-fk</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-fm"></i>
                                                <span class="icon_name">flag-icon-fm</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-fo"></i>
                                                <span class="icon_name">flag-icon-fo</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-fr"></i>
                                                <span class="icon_name">flag-icon-fr</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-ga"></i>
                                                <span class="icon_name">flag-icon-ga</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-gb"></i>
                                                <span class="icon_name">flag-icon-gb</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-gd"></i>
                                                <span class="icon_name">flag-icon-gd</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-ge"></i>
                                                <span class="icon_name">flag-icon-ge</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-gf"></i>
                                                <span class="icon_name">flag-icon-gf</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-gg"></i>
                                                <span class="icon_name">flag-icon-gg</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-gh"></i>
                                                <span class="icon_name">flag-icon-gh</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-gi"></i>
                                                <span class="icon_name">flag-icon-gi</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-gl"></i>
                                                <span class="icon_name">flag-icon-gl</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-gm"></i>
                                                <span class="icon_name">flag-icon-gm</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-gn"></i>
                                                <span class="icon_name">flag-icon-gn</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-gp"></i>
                                                <span class="icon_name">flag-icon-gp</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-gq"></i>
                                                <span class="icon_name">flag-icon-gq</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-gr"></i>
                                                <span class="icon_name">flag-icon-gr</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-gs"></i>
                                                <span class="icon_name">flag-icon-gs</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-gt"></i>
                                                <span class="icon_name">flag-icon-gt</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-gu"></i>
                                                <span class="icon_name">flag-icon-gu</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-gw"></i>
                                                <span class="icon_name">flag-icon-gw</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-gy"></i>
                                                <span class="icon_name">flag-icon-gy</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-hk"></i>
                                                <span class="icon_name">flag-icon-hk</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-hm"></i>
                                                <span class="icon_name">flag-icon-hm</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-hn"></i>
                                                <span class="icon_name">flag-icon-hn</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-hr"></i>
                                                <span class="icon_name">flag-icon-hr</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-ht"></i>
                                                <span class="icon_name">flag-icon-ht</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-hu"></i>
                                                <span class="icon_name">flag-icon-hu</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-id"></i>
                                                <span class="icon_name">flag-icon-id</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-ie"></i>
                                                <span class="icon_name">flag-icon-ie</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-il"></i>
                                                <span class="icon_name">flag-icon-il</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-im"></i>
                                                <span class="icon_name">flag-icon-im</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-in"></i>
                                                <span class="icon_name">flag-icon-in</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-io"></i>
                                                <span class="icon_name">flag-icon-io</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-iq"></i>
                                                <span class="icon_name">flag-icon-iq</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-ir"></i>
                                                <span class="icon_name">flag-icon-ir</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-is"></i>
                                                <span class="icon_name">flag-icon-is</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-it"></i>
                                                <span class="icon_name">flag-icon-it</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-je"></i>
                                                <span class="icon_name">flag-icon-je</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-jm"></i>
                                                <span class="icon_name">flag-icon-jm</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-jo"></i>
                                                <span class="icon_name">flag-icon-jo</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-jp"></i>
                                                <span class="icon_name">flag-icon-jp</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-ke"></i>
                                                <span class="icon_name">flag-icon-ke</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-kg"></i>
                                                <span class="icon_name">flag-icon-kg</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-kh"></i>
                                                <span class="icon_name">flag-icon-kh</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-ki"></i>
                                                <span class="icon_name">flag-icon-ki</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-km"></i>
                                                <span class="icon_name">flag-icon-km</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-kn"></i>
                                                <span class="icon_name">flag-icon-kn</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-kp"></i>
                                                <span class="icon_name">flag-icon-kp</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-kr"></i>
                                                <span class="icon_name">flag-icon-kr</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-kw"></i>
                                                <span class="icon_name">flag-icon-kw</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-ky"></i>
                                                <span class="icon_name">flag-icon-ky</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-kz"></i>
                                                <span class="icon_name">flag-icon-kz</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-la"></i>
                                                <span class="icon_name">flag-icon-la</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-lb"></i>
                                                <span class="icon_name">flag-icon-lb</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-lc"></i>
                                                <span class="icon_name">flag-icon-lc</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-li"></i>
                                                <span class="icon_name">flag-icon-li</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-lk"></i>
                                                <span class="icon_name">flag-icon-lk</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-lr"></i>
                                                <span class="icon_name">flag-icon-lr</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-ls"></i>
                                                <span class="icon_name">flag-icon-ls</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-lt"></i>
                                                <span class="icon_name">flag-icon-lt</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-lu"></i>
                                                <span class="icon_name">flag-icon-lu</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-lv"></i>
                                                <span class="icon_name">flag-icon-lv</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-ly"></i>
                                                <span class="icon_name">flag-icon-ly</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-ma"></i>
                                                <span class="icon_name">flag-icon-ma</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-mc"></i>
                                                <span class="icon_name">flag-icon-mc</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-md"></i>
                                                <span class="icon_name">flag-icon-md</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-me"></i>
                                                <span class="icon_name">flag-icon-me</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-mf"></i>
                                                <span class="icon_name">flag-icon-mf</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-mg"></i>
                                                <span class="icon_name">flag-icon-mg</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-mh"></i>
                                                <span class="icon_name">flag-icon-mh</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-mk"></i>
                                                <span class="icon_name">flag-icon-mk</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-ml"></i>
                                                <span class="icon_name">flag-icon-ml</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-mm"></i>
                                                <span class="icon_name">flag-icon-mm</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-mn"></i>
                                                <span class="icon_name">flag-icon-mn</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-mo"></i>
                                                <span class="icon_name">flag-icon-mo</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-mp"></i>
                                                <span class="icon_name">flag-icon-mp</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-mq"></i>
                                                <span class="icon_name">flag-icon-mq</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-mr"></i>
                                                <span class="icon_name">flag-icon-mr</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-ms"></i>
                                                <span class="icon_name">flag-icon-ms</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-mt"></i>
                                                <span class="icon_name">flag-icon-mt</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-mu"></i>
                                                <span class="icon_name">flag-icon-mu</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-mv"></i>
                                                <span class="icon_name">flag-icon-mv</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-mw"></i>
                                                <span class="icon_name">flag-icon-mw</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-mx"></i>
                                                <span class="icon_name">flag-icon-mx</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-my"></i>
                                                <span class="icon_name">flag-icon-my</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-mz"></i>
                                                <span class="icon_name">flag-icon-mz</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-na"></i>
                                                <span class="icon_name">flag-icon-na</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-nc"></i>
                                                <span class="icon_name">flag-icon-nc</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-ne"></i>
                                                <span class="icon_name">flag-icon-ne</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-nf"></i>
                                                <span class="icon_name">flag-icon-nf</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-ng"></i>
                                                <span class="icon_name">flag-icon-ng</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-ni"></i>
                                                <span class="icon_name">flag-icon-ni</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-nl"></i>
                                                <span class="icon_name">flag-icon-nl</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-no"></i>
                                                <span class="icon_name">flag-icon-no</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-np"></i>
                                                <span class="icon_name">flag-icon-np</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-nr"></i>
                                                <span class="icon_name">flag-icon-nr</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-nu"></i>
                                                <span class="icon_name">flag-icon-nu</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-nz"></i>
                                                <span class="icon_name">flag-icon-nz</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-om"></i>
                                                <span class="icon_name">flag-icon-om</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-pa"></i>
                                                <span class="icon_name">flag-icon-pa</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-pe"></i>
                                                <span class="icon_name">flag-icon-pe</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-pf"></i>
                                                <span class="icon_name">flag-icon-pf</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-pg"></i>
                                                <span class="icon_name">flag-icon-pg</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-ph"></i>
                                                <span class="icon_name">flag-icon-ph</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-pk"></i>
                                                <span class="icon_name">flag-icon-pk</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-pl"></i>
                                                <span class="icon_name">flag-icon-pl</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-pm"></i>
                                                <span class="icon_name">flag-icon-pm</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-pn"></i>
                                                <span class="icon_name">flag-icon-pn</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-pr"></i>
                                                <span class="icon_name">flag-icon-pr</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-ps"></i>
                                                <span class="icon_name">flag-icon-ps</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-pt"></i>
                                                <span class="icon_name">flag-icon-pt</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-pw"></i>
                                                <span class="icon_name">flag-icon-pw</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-py"></i>
                                                <span class="icon_name">flag-icon-py</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-qa"></i>
                                                <span class="icon_name">flag-icon-qa</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-re"></i>
                                                <span class="icon_name">flag-icon-re</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-ro"></i>
                                                <span class="icon_name">flag-icon-ro</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-rs"></i>
                                                <span class="icon_name">flag-icon-rs</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-ru"></i>
                                                <span class="icon_name">flag-icon-ru</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-rw"></i>
                                                <span class="icon_name">flag-icon-rw</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-sa"></i>
                                                <span class="icon_name">flag-icon-sa</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-sb"></i>
                                                <span class="icon_name">flag-icon-sb</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-sc"></i>
                                                <span class="icon_name">flag-icon-sc</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-sd"></i>
                                                <span class="icon_name">flag-icon-sd</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-se"></i>
                                                <span class="icon_name">flag-icon-se</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-sg"></i>
                                                <span class="icon_name">flag-icon-sg</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-sh"></i>
                                                <span class="icon_name">flag-icon-sh</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-si"></i>
                                                <span class="icon_name">flag-icon-si</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-sj"></i>
                                                <span class="icon_name">flag-icon-sj</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-sk"></i>
                                                <span class="icon_name">flag-icon-sk</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-sl"></i>
                                                <span class="icon_name">flag-icon-sl</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-sm"></i>
                                                <span class="icon_name">flag-icon-sm</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-sn"></i>
                                                <span class="icon_name">flag-icon-sn</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-so"></i>
                                                <span class="icon_name">flag-icon-so</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-sr"></i>
                                                <span class="icon_name">flag-icon-sr</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-ss"></i>
                                                <span class="icon_name">flag-icon-ss</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-st"></i>
                                                <span class="icon_name">flag-icon-st</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-sv"></i>
                                                <span class="icon_name">flag-icon-sv</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-sx"></i>
                                                <span class="icon_name">flag-icon-sx</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-sy"></i>
                                                <span class="icon_name">flag-icon-sy</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-sz"></i>
                                                <span class="icon_name">flag-icon-sz</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-tc"></i>
                                                <span class="icon_name">flag-icon-tc</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-td"></i>
                                                <span class="icon_name">flag-icon-td</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-tf"></i>
                                                <span class="icon_name">flag-icon-tf</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-tg"></i>
                                                <span class="icon_name">flag-icon-tg</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-th"></i>
                                                <span class="icon_name">flag-icon-th</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-tj"></i>
                                                <span class="icon_name">flag-icon-tj</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-tk"></i>
                                                <span class="icon_name">flag-icon-tk</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-tl"></i>
                                                <span class="icon_name">flag-icon-tl</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-tm"></i>
                                                <span class="icon_name">flag-icon-tm</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-tn"></i>
                                                <span class="icon_name">flag-icon-tn</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-to"></i>
                                                <span class="icon_name">flag-icon-to</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-tr"></i>
                                                <span class="icon_name">flag-icon-tr</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-tt"></i>
                                                <span class="icon_name">flag-icon-tt</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-tv"></i>
                                                <span class="icon_name">flag-icon-tv</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-tw"></i>
                                                <span class="icon_name">flag-icon-tw</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-tz"></i>
                                                <span class="icon_name">flag-icon-tz</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-ua"></i>
                                                <span class="icon_name">flag-icon-ua</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-ug"></i>
                                                <span class="icon_name">flag-icon-ug</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-um"></i>
                                                <span class="icon_name">flag-icon-um</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-us"></i>
                                                <span class="icon_name">flag-icon-us</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-uy"></i>
                                                <span class="icon_name">flag-icon-uy</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-uz"></i>
                                                <span class="icon_name">flag-icon-uz</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-va"></i>
                                                <span class="icon_name">flag-icon-va</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-vc"></i>
                                                <span class="icon_name">flag-icon-vc</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-ve"></i>
                                                <span class="icon_name">flag-icon-ve</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-vg"></i>
                                                <span class="icon_name">flag-icon-vg</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-vi"></i>
                                                <span class="icon_name">flag-icon-vi</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-vn"></i>
                                                <span class="icon_name">flag-icon-vn</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-vu"></i>
                                                <span class="icon_name">flag-icon-vu</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-wf"></i>
                                                <span class="icon_name">flag-icon-wf</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-ws"></i>
                                                <span class="icon_name">flag-icon-ws</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-ye"></i>
                                                <span class="icon_name">flag-icon-ye</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-yt"></i>
                                                <span class="icon_name">flag-icon-yt</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-za"></i>
                                                <span class="icon_name">flag-icon-za</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-zm"></i>
                                                <span class="icon_name">flag-icon-zm</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-zw"></i>
                                                <span class="icon_name">flag-icon-zw</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-eu"></i>
                                                <span class="icon_name">flag-icon-eu</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-gb-eng"></i>
                                                <span class="icon_name">flag-icon-gb-eng</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-gb-sct"></i>
                                                <span class="icon_name">flag-icon-gb-sct</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-gb-wls"></i>
                                                <span class="icon_name">flag-icon-gb-wls</span>
                                            </li>
                                            <li>
                                                <i class="flag-icon flag-icon-un"></i>
                                                <span class="icon_name">flag-icon-un</span>
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

<!-- Mirrored from thememinister.com/adminpage/theme/adminpage_v2.0/icons_flag.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Oct 2023 10:41:11 GMT -->
</html>