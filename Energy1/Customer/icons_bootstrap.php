<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from thememinister.com/adminpage/theme/adminpage_v2.0/icons_bootstrap.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Oct 2023 10:41:10 GMT -->
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
                                <li class="active"><a href="icons_bootstrap.php">Bootstrap Icons</a></li>
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
                            <i class="pe-7s-cloud"></i>
                        </div>
                        <div class="header-title">
                            <h1>Glyphicons</h1>
                            <small>Available glyphs</small>
                            <ol class="breadcrumb">
                                <li><a href="index.php"><i class="pe-7s-home"></i> Home</a></li>
                                <li><a href="#">Icons</a></li>
                                <li class="active">Glyphicons</li>
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
                                    <p class="m-b-20">Includes over 250 glyphs in font format from the Glyphicon Halflings set. <a href="http://glyphicons.com/">Glyphicons</a> Halflings are normally not available for free, but their creator has made them available for Bootstrap free of cost. As a thank you, we only ask that you include a link back to <a href="http://glyphicons.com/">Glyphicons</a> whenever possible.</p>
                                    <div class="flag-icon-inner">
                                        <ul class="icon_list">
                                            <li>
                                                <i class="glyphicon glyphicon-asterisk"></i>
                                                <span class="icon_name">glyphicon-asterisk</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-plus"></i>
                                                <span class="icon_name">glyphicon-plus</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-euro"></i>
                                                <span class="icon_name">glyphicon-euro</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-eur"></i>
                                                <span class="icon_name">glyphicon-eur</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-minus"></i>
                                                <span class="icon_name">glyphicon-minus</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-cloud"></i>
                                                <span class="icon_name">glyphicon-cloud</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-envelope"></i>
                                                <span class="icon_name">glyphicon-envelope</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-pencil"></i>
                                                <span class="icon_name">glyphicon-pencil</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-glass"></i>
                                                <span class="icon_name">glyphicon-glass</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-music"></i>
                                                <span class="icon_name">glyphicon-music</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-search"></i>
                                                <span class="icon_name">glyphicon-search</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-heart"></i>
                                                <span class="icon_name">glyphicon-heart</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-star"></i>
                                                <span class="icon_name">glyphicon-star</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-star-empty"></i>
                                                <span class="icon_name">glyphicon-star-empty</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-user"></i>
                                                <span class="icon_name">glyphicon-user</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-film"></i>
                                                <span class="icon_name">glyphicon-film</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-th-large"></i>
                                                <span class="icon_name">glyphicon-th-large</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-th"></i>
                                                <span class="icon_name">glyphicon-th</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-th-list"></i>
                                                <span class="icon_name">glyphicon-th-list</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-ok"></i>
                                                <span class="icon_name">glyphicon-ok</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-remove"></i>
                                                <span class="icon_name">glyphicon-remove</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-zoom-in"></i>
                                                <span class="icon_name">glyphicon-zoom-in</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-zoom-out"></i>
                                                <span class="icon_name">glyphicon-zoom-out</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-off"></i>
                                                <span class="icon_name">glyphicon-off</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-signal"></i>
                                                <span class="icon_name">glyphicon-signal</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-cog"></i>
                                                <span class="icon_name">glyphicon-cog</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-trash"></i>
                                                <span class="icon_name">glyphicon-trash</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-home"></i>
                                                <span class="icon_name">glyphicon-home</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-file"></i>
                                                <span class="icon_name">glyphicon-file</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-time"></i>
                                                <span class="icon_name">glyphicon-time</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-road"></i>
                                                <span class="icon_name">glyphicon-road</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-download-alt"></i>
                                                <span class="icon_name">glyphicon-download-alt</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-download"></i>
                                                <span class="icon_name">glyphicon-download</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-upload"></i>
                                                <span class="icon_name">glyphicon-upload</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-inbox"></i>
                                                <span class="icon_name">glyphicon-inbox</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-play-circle"></i>
                                                <span class="icon_name">glyphicon-play-circle</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-repeat"></i>
                                                <span class="icon_name">glyphicon-repeat</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-refresh"></i>
                                                <span class="icon_name">glyphicon-refresh</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-list-alt"></i>
                                                <span class="icon_name">glyphicon-list-alt</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-lock"></i>
                                                <span class="icon_name">glyphicon-lock</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-flag"></i>
                                                <span class="icon_name">glyphicon-flag</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-headphones"></i>
                                                <span class="icon_name">glyphicon-headphones</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-volume-off"></i>
                                                <span class="icon_name">glyphicon-volume-off</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-volume-down"></i>
                                                <span class="icon_name">glyphicon-volume-down</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-volume-up"></i>
                                                <span class="icon_name">glyphicon-volume-up</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-qrcode"></i>
                                                <span class="icon_name">glyphicon-qrcode</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-barcode"></i>
                                                <span class="icon_name">glyphicon-barcode</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-tag"></i>
                                                <span class="icon_name">glyphicon-tag</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-tags"></i>
                                                <span class="icon_name">glyphicon-tags</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-book"></i>
                                                <span class="icon_name">glyphicon-book</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-bookmark"></i>
                                                <span class="icon_name">glyphicon-bookmark</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-print"></i>
                                                <span class="icon_name">glyphicon-print</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-camera"></i>
                                                <span class="icon_name">glyphicon-camera</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-font"></i>
                                                <span class="icon_name">glyphicon-font</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-bold"></i>
                                                <span class="icon_name">glyphicon-bold</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-italic"></i>
                                                <span class="icon_name">glyphicon-italic</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-text-height"></i>
                                                <span class="icon_name">glyphicon-text-height</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-text-width"></i>
                                                <span class="icon_name">glyphicon-text-width</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-align-left"></i>
                                                <span class="icon_name">glyphicon-align-left</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-align-center"></i>
                                                <span class="icon_name">glyphicon-align-center</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-align-right"></i>
                                                <span class="icon_name">glyphicon-align-right</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-align-justify"></i>
                                                <span class="icon_name">glyphicon-align-justify</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-list"></i>
                                                <span class="icon_name">glyphicon-list</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-indent-left"></i>
                                                <span class="icon_name">glyphicon-indent-left</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-indent-right"></i>
                                                <span class="icon_name">glyphicon-indent-right</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-facetime-video"></i>
                                                <span class="icon_name">glyphicon-facetime-video</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-picture"></i>
                                                <span class="icon_name">glyphicon-picture</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-map-marker"></i>
                                                <span class="icon_name">glyphicon-map-marker</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-adjust"></i>
                                                <span class="icon_name">glyphicon-adjust</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-tint"></i>
                                                <span class="icon_name">glyphicon-tint</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-edit"></i>
                                                <span class="icon_name">glyphicon-edit</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-share"></i>
                                                <span class="icon_name">glyphicon-share</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-check"></i>
                                                <span class="icon_name">glyphicon-check</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-move"></i>
                                                <span class="icon_name">glyphicon-move</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-step-backward"></i>
                                                <span class="icon_name">glyphicon-step-backward</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-fast-backward"></i>
                                                <span class="icon_name">glyphicon-fast-backward</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-backward"></i>
                                                <span class="icon_name">glyphicon-backward</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-play"></i>
                                                <span class="icon_name">glyphicon-play</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-pause"></i>
                                                <span class="icon_name">glyphicon-pause</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-stop"></i>
                                                <span class="icon_name">glyphicon-stop</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-stop"></i>
                                                <span class="icon_name">glyphicon-stop</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-fast-forward"></i>
                                                <span class="icon_name">glyphicon-fast-forward</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-eject"></i>
                                                <span class="icon_name">glyphicon-eject</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-chevron-left"></i>
                                                <span class="icon_name">glyphicon-chevron-left</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-chevron-right"></i>
                                                <span class="icon_name">glyphicon-chevron-right</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-plus-sign"></i>
                                                <span class="icon_name">glyphicon-plus-sign</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-minus-sign"></i>
                                                <span class="icon_name">glyphicon-minus-sign</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-remove-sign"></i>
                                                <span class="icon_name">glyphicon-remove-sign</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-ok-sign"></i>
                                                <span class="icon_name">glyphicon-ok-sign</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-question-sign"></i>
                                                <span class="icon_name">glyphicon-question-sign</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-info-sign"></i>
                                                <span class="icon_name">glyphicon-info-sign</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-screenshot"></i>
                                                <span class="icon_name">glyphicon-screenshot</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-remove-circle"></i>
                                                <span class="icon_name">glyphicon-remove-circle</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-ok-circle"></i>
                                                <span class="icon_name">glyphicon-ok-circle</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-ban-circle"></i>
                                                <span class="icon_name">glyphicon-ban-circle</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-arrow-left"></i>
                                                <span class="icon_name">glyphicon-arrow-left</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-arrow-right"></i>
                                                <span class="icon_name">glyphicon-arrow-right</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-arrow-up"></i>
                                                <span class="icon_name">glyphicon-arrow-up</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-arrow-down"></i>
                                                <span class="icon_name">glyphicon-arrow-down</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-share-alt"></i>
                                                <span class="icon_name">glyphicon-share-alt</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-resize-full"></i>
                                                <span class="icon_name">glyphicon-resize-full</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-resize-small"></i>
                                                <span class="icon_name">glyphicon-resize-small</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-exclamation-sign"></i>
                                                <span class="icon_name">glyphicon-exclamation-sign</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-gift"></i>
                                                <span class="icon_name">glyphicon-gift</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-leaf"></i>
                                                <span class="icon_name">glyphicon-leaf</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-fire"></i>
                                                <span class="icon_name">glyphicon-fire</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-eye-open"></i>
                                                <span class="icon_name">glyphicon-eye-open</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-eye-close"></i>
                                                <span class="icon_name">glyphicon-eye-close</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-warning-sign"></i>
                                                <span class="icon_name">glyphicon-warning-sign</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-plane"></i>
                                                <span class="icon_name">glyphicon-plane</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon glyphicon-calendar"></i>
                                                <span class="icon_name">glyphicon glyphicon-calendar</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-random"></i>
                                                <span class="icon_name">glyphicon-random</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-comment"></i>
                                                <span class="icon_name">glyphicon-comment</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-magnet"></i>
                                                <span class="icon_name">glyphicon-magnet</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-chevron-up"></i>
                                                <span class="icon_name">glyphicon-chevron-up</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-chevron-down"></i>
                                                <span class="icon_name">glyphicon-chevron-down</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-retweet"></i>
                                                <span class="icon_name">glyphicon-retweet</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-shopping-cart"></i>
                                                <span class="icon_name">glyphicon-shopping-cart</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-folder-close"></i>
                                                <span class="icon_name">glyphicon-folder-close</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-folder-open"></i>
                                                <span class="icon_name">glyphicon-folder-open</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-resize-vertical"></i>
                                                <span class="icon_name">glyphicon-resize-vertical</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-resize-horizontal"></i>
                                                <span class="icon_name">glyphicon-resize-horizontal</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-hdd"></i>
                                                <span class="icon_name">glyphicon-hdd</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-bullhorn"></i>
                                                <span class="icon_name">glyphicon-bullhorn</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-bell"></i>
                                                <span class="icon_name">glyphicon-bell</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-certificate"></i>
                                                <span class="icon_name">glyphicon-certificate</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-thumbs-up"></i>
                                                <span class="icon_name">glyphicon-thumbs-up</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-thumbs-down"></i>
                                                <span class="icon_name">glyphicon-thumbs-down</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-hand-right"></i>
                                                <span class="icon_name">glyphicon-hand-right</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-hand-left"></i>
                                                <span class="icon_name">glyphicon-hand-left</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-hand-up"></i>
                                                <span class="icon_name">glyphicon-hand-up</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-hand-down"></i>
                                                <span class="icon_name">glyphicon-hand-down</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-circle-arrow-right"></i>
                                                <span class="icon_name">glyphicon-circle-arrow-right</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-circle-arrow-left"></i>
                                                <span class="icon_name">glyphicon-circle-arrow-left</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-circle-arrow-up"></i>
                                                <span class="icon_name">glyphicon-circle-arrow-up</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-circle-arrow-down"></i>
                                                <span class="icon_name">glyphicon-circle-arrow-down</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-globe"></i>
                                                <span class="icon_name">glyphicon-globe</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-wrench"></i>
                                                <span class="icon_name">glyphicon-wrench</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-tasks"></i>
                                                <span class="icon_name">glyphicon-tasks</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-filter"></i>
                                                <span class="icon_name">glyphicon-filter</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-briefcase"></i>
                                                <span class="icon_name">glyphicon-briefcase</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-fullscreen"></i>
                                                <span class="icon_name">glyphicon-fullscreen</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-dashboard"></i>
                                                <span class="icon_name">glyphicon-dashboard</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-paperclip"></i>
                                                <span class="icon_name">glyphicon-paperclip</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-heart-empty"></i>
                                                <span class="icon_name">glyphicon-heart-empty</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-link"></i>
                                                <span class="icon_name">glyphicon-link</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-phone"></i>
                                                <span class="icon_name">glyphicon-phone</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-pushpin"></i>
                                                <span class="icon_name">glyphicon-pushpin</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-usd"></i>
                                                <span class="icon_name">glyphicon-usd</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-gbp"></i>
                                                <span class="icon_name">glyphicon-gbp</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-sort"></i>
                                                <span class="icon_name">glyphicon-sort</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-sort-by-alphabet"></i>
                                                <span class="icon_name">glyphicon-sort-by-alphabet</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-sort-by-alphabet-alt"></i>
                                                <span class="icon_name">glyphicon-sort-by-alphabet-alt</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-sort-by-order"></i>
                                                <span class="icon_name">glyphicon-sort-by-order</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-sort-by-order-alt"></i>
                                                <span class="icon_name">glyphicon-sort-by-order-alt</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-sort-by-attributes"></i>
                                                <span class="icon_name">glyphicon-sort-by-attributes</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-sort-by-attributes-alt"></i>
                                                <span class="icon_name">glyphicon-sort-by-attributes-alt</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-unchecked"></i>
                                                <span class="icon_name">glyphicon-unchecked</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-expand"></i>
                                                <span class="icon_name">glyphicon-expand</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-collapse-down"></i>
                                                <span class="icon_name">glyphicon-collapse-down</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-collapse-up"></i>
                                                <span class="icon_name">glyphicon-collapse-up</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-log-in"></i>
                                                <span class="icon_name">glyphicon-log-in</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-flash"></i>
                                                <span class="icon_name">glyphicon-flash</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-log-out"></i>
                                                <span class="icon_name">glyphicon-log-out</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-new-window"></i>
                                                <span class="icon_name">glyphicon-new-window</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-record"></i>
                                                <span class="icon_name">glyphicon-record</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-save"></i>
                                                <span class="icon_name">glyphicon-save</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-open"></i>
                                                <span class="icon_name">glyphicon-open</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-saved"></i>
                                                <span class="icon_name">glyphicon-saved</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-import"></i>
                                                <span class="icon_name">glyphicon-import</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-export"></i>
                                                <span class="icon_name">glyphicon-export</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-send"></i>
                                                <span class="icon_name">glyphicon-send</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-floppy-disk"></i>
                                                <span class="icon_name">glyphicon-floppy-disk</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-floppy-saved"></i>
                                                <span class="icon_name">glyphicon-floppy-saved</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-floppy-remove"></i>
                                                <span class="icon_name">glyphicon-floppy-remove</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-floppy-save"></i>
                                                <span class="icon_name">glyphicon-floppy-save</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-floppy-open"></i>
                                                <span class="icon_name">glyphicon-floppy-open</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-credit-card"></i>
                                                <span class="icon_name">glyphicon-credit-card</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-transfer"></i>
                                                <span class="icon_name">glyphicon-transfer</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-cutlery"></i>
                                                <span class="icon_name">glyphicon-cutlery</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-header"></i>
                                                <span class="icon_name">glyphicon-header</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-compressed"></i>
                                                <span class="icon_name">glyphicon-compressed</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-earphone"></i>
                                                <span class="icon_name">glyphicon-earphone</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-phone-alt"></i>
                                                <span class="icon_name">glyphicon-phone-alt</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-tower"></i>
                                                <span class="icon_name">glyphicon-tower</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-stats"></i>
                                                <span class="icon_name">glyphicon-stats</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-sd-video"></i>
                                                <span class="icon_name">glyphicon-sd-video</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-hd-video"></i>
                                                <span class="icon_name">glyphicon-hd-video</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-subtitles"></i>
                                                <span class="icon_name">glyphicon-subtitles</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-sound-stereo"></i>
                                                <span class="icon_name">glyphicon-sound-stereo</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-sound-dolby"></i>
                                                <span class="icon_name">glyphicon-sound-dolby</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-sound-5-1"></i>
                                                <span class="icon_name">glyphicon-sound-5-1</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-sound-6-1"></i>
                                                <span class="icon_name">glyphicon-sound-6-1</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-sound-7-1"></i>
                                                <span class="icon_name">glyphicon-sound-7-1</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-copyright-mark"></i>
                                                <span class="icon_name">glyphicon-copyright-mark</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-registration-mark"></i>
                                                <span class="icon_name">glyphicon-registration-mark</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-cloud-download"></i>
                                                <span class="icon_name">glyphicon-cloud-download</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-cloud-upload"></i>
                                                <span class="icon_name">glyphicon-cloud-upload</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-tree-conifer"></i>
                                                <span class="icon_name">glyphicon-tree-conifer</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-tree-deciduous"></i>
                                                <span class="icon_name">glyphicon-tree-deciduous</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-cd"></i>
                                                <span class="icon_name">glyphicon-cd</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-save-file"></i>
                                                <span class="icon_name">glyphicon-save-file</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-open-file"></i>
                                                <span class="icon_name">glyphicon-open-file</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-level-up"></i>
                                                <span class="icon_name">glyphicon-level-up</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-copy"></i>
                                                <span class="icon_name">glyphicon-copy</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-paste"></i>
                                                <span class="icon_name">glyphicon-paste</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-alert"></i>
                                                <span class="icon_name">glyphicon-alert</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-equalizer"></i>
                                                <span class="icon_name">glyphicon-equalizer</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-king"></i>
                                                <span class="icon_name">glyphicon-king</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-queen"></i>
                                                <span class="icon_name">glyphicon-queen</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-pawn"></i>
                                                <span class="icon_name">glyphicon-pawn</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-bishop"></i>
                                                <span class="icon_name">glyphicon-bishop</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-knight"></i>
                                                <span class="icon_name">glyphicon-knight</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-baby-formula"></i>
                                                <span class="icon_name">glyphicon-baby-formula</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-tent"></i>
                                                <span class="icon_name">glyphicon-tent</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-blackboard"></i>
                                                <span class="icon_name">glyphicon-blackboard</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-bed"></i>
                                                <span class="icon_name">glyphicon-bed</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-apple"></i>
                                                <span class="icon_name">glyphicon-apple</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-erase"></i>
                                                <span class="icon_name">glyphicon-erase</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-hourglass"></i>
                                                <span class="icon_name">glyphicon-hourglass</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-lamp"></i>
                                                <span class="icon_name">glyphicon-lamp</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-duplicate"></i>
                                                <span class="icon_name">glyphicon-duplicate</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-piggy-bank"></i>
                                                <span class="icon_name">glyphicon-piggy-bank</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-scissors"></i>
                                                <span class="icon_name">glyphicon-scissors</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-bitcoin"></i>
                                                <span class="icon_name">glyphicon-bitcoin</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-btc"></i>
                                                <span class="icon_name">glyphicon-btc</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-xbt"></i>
                                                <span class="icon_name">glyphicon-xbt</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-yen"></i>
                                                <span class="icon_name">glyphicon-yen</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-jpy"></i>
                                                <span class="icon_name">glyphicon-jpy</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-ruble"></i>
                                                <span class="icon_name">glyphicon-ruble</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-rub"></i>
                                                <span class="icon_name">glyphicon-rub</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-scale"></i>
                                                <span class="icon_name">glyphicon-scale</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-ice-lolly"></i>
                                                <span class="icon_name">glyphicon-ice-lolly</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-ice-lolly-tasted"></i>
                                                <span class="icon_name">glyphicon-ice-lolly-tasted</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-education"></i>
                                                <span class="icon_name">glyphicon-education</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-option-horizontal"></i>
                                                <span class="icon_name">glyphicon-option-horizontal</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-option-vertical"></i>
                                                <span class="icon_name">glyphicon-option-vertical</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-menu-hamburger"></i>
                                                <span class="icon_name">glyphicon-menu-hamburger</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-modal-window"></i>
                                                <span class="icon_name">glyphicon-modal-window</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-oil"></i>
                                                <span class="icon_name">glyphicon-oil</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-grain"></i>
                                                <span class="icon_name">glyphicon-grain</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-sunglasses"></i>
                                                <span class="icon_name">glyphicon-sunglasses</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-text-size"></i>
                                                <span class="icon_name">glyphicon-text-size</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-text-color"></i>
                                                <span class="icon_name">glyphicon-text-color</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-text-background"></i>
                                                <span class="icon_name">glyphicon-text-background</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-object-align-top"></i>
                                                <span class="icon_name">glyphicon-object-align-top</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-object-align-bottom"></i>
                                                <span class="icon_name">glyphicon-object-align-bottom</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-object-align-horizontal"></i>
                                                <span class="icon_name">glyphicon-object-align-horizontal</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-object-align-left"></i>
                                                <span class="icon_name">glyphicon-object-align-left</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-object-align-vertical"></i>
                                                <span class="icon_name">glyphicon-object-align-vertical</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-object-align-right"></i>
                                                <span class="icon_name">glyphicon-object-align-righ</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-triangle-right"></i>
                                                <span class="icon_name">glyphicon-triangle-right</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-triangle-left"></i>
                                                <span class="icon_name">glyphicon-triangle-left</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-triangle-bottom"></i>
                                                <span class="icon_name">glyphicon-triangle-bottom</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-triangle-top"></i>
                                                <span class="icon_name">glyphicon-triangle-top</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-console"></i>
                                                <span class="icon_name">glyphicon-console</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-superscript"></i>
                                                <span class="icon_name">glyphicon-superscript</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-subscript"></i>
                                                <span class="icon_name">glyphicon-subscript</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-menu-left"></i>
                                                <span class="icon_name">glyphicon-menu-left</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-menu-right"></i>
                                                <span class="icon_name">glyphicon-menu-right</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-menu-down"></i>
                                                <span class="icon_name">glyphicon-menu-down</span>
                                            </li>
                                            <li>
                                                <i class="glyphicon glyphicon-menu-up"></i>
                                                <span class="icon_name">glyphicon-menu-up</span>
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

<!-- Mirrored from thememinister.com/adminpage/theme/adminpage_v2.0/icons_bootstrap.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Oct 2023 10:41:10 GMT -->
</html>