<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from thememinister.com/adminpage/theme/adminpage_v2.0/icons_fontawesome.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Oct 2023 10:41:10 GMT -->
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
                                <li><a href="icons_bootstrap.php">Bootstrap Icons</a></li>
                                <li class="active"><a href="icons_fontawesome.php">Fontawesome Icon</a></li>
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
                            <i class="pe-7s-micro"></i>
                        </div>
                        <div class="header-title">
                            <h1>Font Awesome</h1>
                            <small>The complete set of 675 icons in Font Awesome 4.7.0</small>
                            <ol class="breadcrumb">
                                <li><a href="index.php"><i class="pe-7s-home"></i> Home</a></li>
                                <li><a href="#">Icons</a></li>
                                <li class="active">Font Awesome</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->
                    <div class="row">
                        <!-- Font Awesome -->
                        <div class="col-sm-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>The Icons</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p>Font Awesome gives you scalable vector icons that can instantly be customized — size, color, drop
                                                shadow, and anything that can be done with the power of CSS. For more info check out: <a href="http://fontawesome.io/icons/" target="_blank">http://fontawesome.io/icons/</a></p>
                                            <h3 class="m-t-0">41 New Icons in 4.7</h3><hr>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-address-book"></i>
                                                <span class="icon-name">address-book</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-address-book-o"></i>
                                                <span class="icon-name">address-book-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-address-card"></i>
                                                <span class="icon-name">address-card</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-address-card-o"></i>
                                                <span class="icon-name">address-card-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-bandcamp"></i>
                                                <span class="icon-name">bandcamp</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-bath"></i>
                                                <span class="icon-name">bath</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-bathtub"></i>
                                                <span class="icon-name">bathtub <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-drivers-license"></i>
                                                <span class="icon-name">drivers-license  <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-drivers-license-o"></i>
                                                <span class="icon-name">drivers-license-o <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-eercast"></i>
                                                <span class="icon-name">eercast</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-envelope-open"></i>
                                                <span class="icon-name">envelope-open</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-envelope-open-o"></i>
                                                <span class="icon-name">envelope-open-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-etsy"></i>
                                                <span class="icon-name">etsy</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-free-code-camp"></i>
                                                <span class="icon-name">free-code-camp</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-grav"></i>
                                                <span class="icon-name">grav</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-handshake-o"></i>
                                                <span class="icon-name">handshake-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-id-badge"></i>
                                                <span class="icon-name">id-badge</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-id-card"></i>
                                                <span class="icon-name">id-card</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-id-card-o"></i>
                                                <span class="icon-name">id-card-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-imdb"></i>
                                                <span class="icon-name">imdb</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-linode"></i>
                                                <span class="icon-name">linode</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-meetup"></i>
                                                <span class="icon-name">meetup</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-microchip"></i>
                                                <span class="icon-name">microchip</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-podcast"></i>
                                                <span class="icon-name">podcast</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-quora"></i>
                                                <span class="icon-name">quora</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-ravelry"></i>
                                                <span class="icon-name">ravelry</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-s15"></i>
                                                <span class="icon-name">s15 <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-shower"></i>
                                                <span class="icon-name">shower</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-snowflake-o"></i>
                                                <span class="icon-name">snowflake-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-superpowers"></i>
                                                <span class="icon-name">superpowers</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-telegram"></i>
                                                <span class="icon-name">telegram</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-thermometer"></i>
                                                <span class="icon-name">thermometer <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-thermometer-0"></i>
                                                <span class="icon-name">thermometer-0 <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-thermometer-1"></i>
                                                <span class="icon-name">thermometer-1 <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-thermometer-2"></i>
                                                <span class="icon-name">thermometer-2  <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-thermometer-3"></i>
                                                <span class="icon-name">thermometer-3  <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-thermometer-4"></i>
                                                <span class="icon-name">thermometer-4 <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-thermometer-empty"></i>
                                                <span class="icon-name">thermometer-empty</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-thermometer-full"></i>
                                                <span class="icon-name">thermometer-full</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-thermometer-half"></i>
                                                <span class="icon-name">thermometer-half</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-thermometer-quarter"></i>
                                                <span class="icon-name">thermometer-quarter</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-thermometer-three-quarters"></i>
                                                <span class="icon-name">thermometer-three-quarters</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-times-rectangle"></i>
                                                <span class="icon-name">times-rectangle <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-times-rectangle-o"></i>
                                                <span class="icon-name">times-rectangle-o  <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-user-circle"></i>
                                                <span class="icon-name">user-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-user-circle-o"></i>
                                                <span class="icon-name">user-circle-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-user-o"></i>
                                                <span class="icon-name">user-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-vcard"></i>
                                                <span class="icon-name">vcard <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-vcard-o"></i>
                                                <span class="icon-name">vcard-o  <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-window-close"></i>
                                                <span class="icon-name">window-close</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-window-close-o"></i>
                                                <span class="icon-name">window-close-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-window-maximize"></i>
                                                <span class="icon-name">window-maximize</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-window-minimize"></i>
                                                <span class="icon-name">window-minimize</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-window-restore"></i>
                                                <span class="icon-name">window-restore</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-wpexplorer"></i>
                                                <span class="icon-name">wpexplorer</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row fontawesome-icon-list">
                                        <div class="col-sm-12">
                                            <h3>Web Application Icons</h3><hr>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-address-book"></i>
                                                <span class="icon-name">address-book</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-address-book-o"></i>
                                                <span class="icon-name">address-book-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-address-card"></i>
                                                <span class="icon-name">address-card</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-address-card-o"></i>
                                                <span class="icon-name">address-card-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-adjust"></i>
                                                <span class="icon-name">adjust</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-american-sign-language-interpreting"></i>
                                                <span class="icon-name">american-sign ..</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-anchor"></i>
                                                <span class="icon-name">anchor</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-archive"></i>
                                                <span class="icon-name">archive</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-area-chart"></i>
                                                <span class="icon-name">area-chart</span>
                                            </div>
                                        </div>




                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-arrows"></i>
                                                <span class="icon-name">arrows</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-arrows-h"></i>
                                                <span class="icon-name">arrows-h</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-arrows-v"></i>
                                                <span class="icon-name">arrows-v</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-asl-interpreting"></i>
                                                <span class="icon-name">asl-interpreting <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-assistive-listening-systems"></i>
                                                <span class="icon-name">assistive ..</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-asterisk"></i>
                                                <span class="icon-name">asterisk</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-at"></i>
                                                <span class="icon-name">at</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-audio-description"></i>
                                                <span class="icon-name">audio-description</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-automobile"></i>
                                                <span class="icon-name">automobile <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-balance-scale"></i>
                                                <span class="icon-name">balance-scale</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-ban"></i>
                                                <span class="icon-name">ban</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-bank"></i>
                                                <span class="icon-name">bank <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-bar-chart"></i>
                                                <span class="icon-name">bar-chart</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-bar-chart-o"></i>
                                                <span class="icon-name">bar-chart-o <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-barcode"></i>
                                                <span class="icon-name">barcode</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-bars"></i>
                                                <span class="icon-name">bars</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-bath"></i>
                                                <span class="icon-name">bath</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-bathtub"></i>
                                                <span class="icon-name">bathtub <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-battery"></i>
                                                <span class="icon-name">battery <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-battery-0"></i>
                                                <span class="icon-name">battery-0 <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-battery-1"></i>
                                                <span class="icon-name">battery-1 </span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-battery-2"></i>
                                                <span class="icon-name">battery-2   <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-battery-3"></i>
                                                <span class="icon-name">battery-3   <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-battery-4"></i>
                                                <span class="icon-name">battery-4   <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-battery-empty"></i>
                                                <span class="icon-name">battery-empty</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-battery-full"></i>
                                                <span class="icon-name">battery-full</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-battery-half"></i>
                                                <span class="icon-name">battery-half</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-battery-quarter"></i>
                                                <span class="icon-name">battery-quarter</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-battery-three-quarters"></i>
                                                <span class="icon-name">battery-three-quarters</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-bed"></i>
                                                <span class="icon-name">bed</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-beer"></i>
                                                <span class="icon-name">beer</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-bell"></i>
                                                <span class="icon-name">bell</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-bell-o"></i>
                                                <span class="icon-name">bell-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-bell-slash"></i>
                                                <span class="icon-name">bell-slash</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-bell-slash-o"></i>
                                                <span class="icon-name">bell-slash-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-bicycle"></i>
                                                <span class="icon-name">bicycle</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-binoculars"></i>
                                                <span class="icon-name">binoculars</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-birthday-cake"></i>
                                                <span class="icon-name">birthday-cake</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-blind"></i>
                                                <span class="icon-name">blind</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-bluetooth"></i>
                                                <span class="icon-name">bluetooth</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-bluetooth-b"></i>
                                                <span class="icon-name">bluetooth-b</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-bolt"></i>
                                                <span class="icon-name">bolt</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-bomb"></i>
                                                <span class="icon-name">bomb</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-book"></i>
                                                <span class="icon-name">book</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-bookmark"></i>
                                                <span class="icon-name">bookmark</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-bookmark-o"></i>
                                                <span class="icon-name">bookmark-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-braille"></i>
                                                <span class="icon-name">braille</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-briefcase"></i>
                                                <span class="icon-name">briefcase</span>
                                            </div>
                                        </div>







                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-bug"></i>
                                                <span class="icon-name">bug</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-building"></i>
                                                <span class="icon-name">building</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-building-o"></i>
                                                <span class="icon-name">building-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-bullhorn"></i>
                                                <span class="icon-name">bullhorn</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-bullseye"></i>
                                                <span class="icon-name">bullseye</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-bus"></i>
                                                <span class="icon-name">bus</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-cab"></i>
                                                <span class="icon-name">cab <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-calculator"></i>
                                                <span class="icon-name">calculator</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-calendar"></i>
                                                <span class="icon-name">calendar</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-calendar-check-o"></i>
                                                <span class="icon-name">calendar-check-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-calendar-minus-o"></i>
                                                <span class="icon-name">calendar-minus-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-calendar-o"></i>
                                                <span class="icon-name">calendar-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-calendar-plus-o"></i>
                                                <span class="icon-name">calendar-plus-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-calendar-times-o"></i>
                                                <span class="icon-name">calendar-times-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-camera"></i>
                                                <span class="icon-name">camera</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-camera-retro"></i>
                                                <span class="icon-name">camera-retro</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-car"></i>
                                                <span class="icon-name">car</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-caret-square-o-down"></i>
                                                <span class="icon-name">caret-square-o-down</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-caret-square-o-left"></i>
                                                <span class="icon-name">caret-square-o-left</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-caret-square-o-right"></i>
                                                <span class="icon-name">caret-square-o-right</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-caret-square-o-up"></i>
                                                <span class="icon-name">caret-square-o-up</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-cart-arrow-down"></i>
                                                <span class="icon-name">cart-arrow-down</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-cart-plus"></i>
                                                <span class="icon-name">cart-plus</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-cc"></i>
                                                <span class="icon-name">cc</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-certificate"></i>
                                                <span class="icon-name">certificate</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-check"></i>
                                                <span class="icon-name">check</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-check-circle"></i>
                                                <span class="icon-name">check-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-check-circle-o"></i>
                                                <span class="icon-name">check-circle-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-check-square"></i>
                                                <span class="icon-name">check-square</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-check-square-o"></i>
                                                <span class="icon-name">check-square-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-child"></i>
                                                <span class="icon-name">child</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-circle"></i>
                                                <span class="icon-name">circle</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-circle-o"></i>
                                                <span class="icon-name">circle-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-circle-o-notch"></i>
                                                <span class="icon-name">circle-o-notch</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-circle-thin"></i>
                                                <span class="icon-name">circle-thin</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-clock-o"></i>
                                                <span class="icon-name">clock-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-clone"></i>
                                                <span class="icon-name">clone</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-close"></i>
                                                <span class="icon-name">close <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-cloud"></i>
                                                <span class="icon-name">cloud</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-cloud-download"></i>
                                                <span class="icon-name">cloud-download</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-cloud-upload"></i>
                                                <span class="icon-name">cloud-upload</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-code"></i>
                                                <span class="icon-name">code</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-code-fork"></i>
                                                <span class="icon-name">code-fork</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-coffee"></i>
                                                <span class="icon-name">coffee</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-cog"></i>
                                                <span class="icon-name">cog</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-cogs"></i>
                                                <span class="icon-name">cogs</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-comment"></i>
                                                <span class="icon-name">comment</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-comment-o"></i>
                                                <span class="icon-name">comment-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-commenting"></i>
                                                <span class="icon-name">commenting</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-commenting-o"></i>
                                                <span class="icon-name">commenting-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-comments"></i>
                                                <span class="icon-name">comments</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-comments-o"></i>
                                                <span class="icon-name">comments-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-compass"></i>
                                                <span class="icon-name">compass</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-copyright"></i>
                                                <span class="icon-name">copyright</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-creative-commons"></i>
                                                <span class="icon-name">creative-commons</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-credit-card"></i>
                                                <span class="icon-name">credit-card</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-credit-card-alt"></i>
                                                <span class="icon-name">credit-card-alt</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-crop"></i>
                                                <span class="icon-name">crop</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-crosshairs"></i>
                                                <span class="icon-name">crosshairs</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-cube"></i>
                                                <span class="icon-name">cube</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-cubes"></i>
                                                <span class="icon-name">cubes</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-cutlery"></i>
                                                <span class="icon-name">cutlery</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-dashboard"></i>
                                                <span class="icon-name">dashboard <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-database"></i>
                                                <span class="icon-name">database</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-deaf"></i>
                                                <span class="icon-name">deaf</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-deafness"></i>
                                                <span class="icon-name">deafness <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-desktop"></i>
                                                <span class="icon-name">desktop</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-diamond"></i>
                                                <span class="icon-name">diamond</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-dot-circle-o"></i>
                                                <span class="icon-name">dot-circle-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-download"></i>
                                                <span class="icon-name">download</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-drivers-license"></i>
                                                <span class="icon-name">drivers-license <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-drivers-license-o"></i>
                                                <span class="icon-name">drivers-license-o <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-edit"></i>
                                                <span class="icon-name">edit <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-ellipsis-h"></i>
                                                <span class="icon-name">ellipsis-h</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-ellipsis-v"></i>
                                                <span class="icon-name">ellipsis-v</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-envelope"></i>
                                                <span class="icon-name">envelope</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-envelope-o"></i>
                                                <span class="icon-name">envelope-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-envelope-open"></i>
                                                <span class="icon-name">envelope-open</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-envelope-open-o"></i>
                                                <span class="icon-name">envelope-open-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-envelope-square"></i>
                                                <span class="icon-name">envelope-square</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-eraser"></i>
                                                <span class="icon-name">eraser</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-exchange"></i>
                                                <span class="icon-name">exchange</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-exclamation"></i>
                                                <span class="icon-name">exclamation</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-exclamation-circle"></i>
                                                <span class="icon-name">exclamation-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-exclamation-triangle"></i>
                                                <span class="icon-name">exclamation-triangle</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-external-link"></i>
                                                <span class="icon-name">external-link</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-external-link-square"></i>
                                                <span class="icon-name">external-link-square</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-eye"></i>
                                                <span class="icon-name">eye</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-eye-slash"></i>
                                                <span class="icon-name">eye-slash</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-eyedropper"></i>
                                                <span class="icon-name">eyedropper</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-fax"></i>
                                                <span class="icon-name">fax</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-feed"></i>
                                                <span class="icon-name">feed <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-female"></i>
                                                <span class="icon-name">female</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-fighter-jet"></i>
                                                <span class="icon-name">fighter-jet</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-file-archive-o"></i>
                                                <span class="icon-name">file-archive-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-file-audio-o"></i>
                                                <span class="icon-name">file-audio-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-file-code-o"></i>
                                                <span class="icon-name">file-code-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-file-excel-o"></i>
                                                <span class="icon-name">file-excel-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-file-image-o"></i>
                                                <span class="icon-name">file-image-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-file-movie-o"></i>
                                                <span class="icon-name">fa fa-file-movie-o <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-file-pdf-o"></i>
                                                <span class="icon-name">file-pdf-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-file-photo-o"></i>
                                                <span class="icon-name">file-photo-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-file-picture-o"></i>
                                                <span class="icon-name">file-picture-o <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-file-powerpoint-o"></i>
                                                <span class="icon-name">file-powerpoint-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-file-sound-o"></i>
                                                <span class="icon-name">file-sound-o <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-file-video-o"></i>
                                                <span class="icon-name">file-video-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-file-word-o"></i>
                                                <span class="icon-name">file-word-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-file-zip-o"></i>
                                                <span class="icon-name">file-zip-o <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-film"></i>
                                                <span class="icon-name">film</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-filter"></i>
                                                <span class="icon-name">filter</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-fire"></i>
                                                <span class="icon-name">fire</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-fire-extinguisher"></i>
                                                <span class="icon-name">fire-extinguisher</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-flag"></i>
                                                <span class="icon-name">flag</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-flag-checkered"></i>
                                                <span class="icon-name">flag-checkered</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-flag-o"></i>
                                                <span class="icon-name">flag-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-flash"></i>
                                                <span class="icon-name">flash <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-flask"></i>
                                                <span class="icon-name">flask</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-folder"></i>
                                                <span class="icon-name">folder</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-folder-o"></i>
                                                <span class="icon-name">folder-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-folder-open"></i>
                                                <span class="icon-name">folder-open</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-folder-open-o"></i>
                                                <span class="icon-name">folder-open-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-frown-o"></i>
                                                <span class="icon-name">frown-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-futbol-o"></i>
                                                <span class="icon-name">futbol-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-gamepad"></i>
                                                <span class="icon-name">gamepad</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-gavel"></i>
                                                <span class="icon-name">gavel</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-gear"></i>
                                                <span class="icon-name">gear <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-gears"></i>
                                                <span class="icon-name">gears <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-gift"></i>
                                                <span class="icon-name">gift</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-glass"></i>
                                                <span class="icon-name">glass</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-globe"></i>
                                                <span class="icon-name">globe</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-graduation-cap"></i>
                                                <span class="icon-name">graduation-cap</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-group"></i>
                                                <span class="icon-name">group <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hand-grab-o"></i>
                                                <span class="icon-name">hand-grab-o <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hand-lizard-o"></i>
                                                <span class="icon-name">hand-lizard-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hand-paper-o"></i>
                                                <span class="icon-name">hand-paper-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hand-peace-o"></i>
                                                <span class="icon-name">hand-peace-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hand-pointer-o"></i>
                                                <span class="icon-name">hand-pointer-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hand-rock-o"></i>
                                                <span class="icon-name">hand-rock-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hand-scissors-o"></i>
                                                <span class="icon-name">hand-scissors-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hand-spock-o"></i>
                                                <span class="icon-name">hand-spock-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hand-stop-o"></i>
                                                <span class="icon-name">hand-stop-o <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-handshake-o"></i>
                                                <span class="icon-name">handshake-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hard-of-hearing"></i>
                                                <span class="icon-name">hard-of-hearing <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hashtag"></i>
                                                <span class="icon-name">hashtag</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hdd-o"></i>
                                                <span class="icon-name">hdd-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-headphones"></i>
                                                <span class="icon-name">headphones</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-heart"></i>
                                                <span class="icon-name">heart</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-heart-o"></i>
                                                <span class="icon-name">heart-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-heartbeat"></i>
                                                <span class="icon-name">heartbeat</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-history"></i>
                                                <span class="icon-name">history</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-home"></i>
                                                <span class="icon-name">home</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hotel"></i>
                                                <span class="icon-name">hotel <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hourglass"></i>
                                                <span class="icon-name">hourglass</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hourglass-1"></i>
                                                <span class="icon-name">hourglass-1 <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hourglass-2"></i>
                                                <span class="icon-name">hourglass-2 <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hourglass-3"></i>
                                                <span class="icon-name">hourglass-3 <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hourglass-end"></i>
                                                <span class="icon-name">hourglass-end</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hourglass-half"></i>
                                                <span class="icon-name">hourglass-half</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hourglass-o"></i>
                                                <span class="icon-name">hourglass-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hourglass-start"></i>
                                                <span class="icon-name">hourglass-start</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-i-cursor"></i>
                                                <span class="icon-name">i-cursor</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-id-badge"></i>
                                                <span class="icon-name">id-badge</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-id-card"></i>
                                                <span class="icon-name">id-card</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-id-card-o"></i>
                                                <span class="icon-name">id-card-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-image"></i>
                                                <span class="icon-name">image</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-inbox"></i>
                                                <span class="icon-name">inbox</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-industry"></i>
                                                <span class="icon-name">industry</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-info"></i>
                                                <span class="icon-name">info</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-info-circle"></i>
                                                <span class="icon-name">info-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-institution"></i>
                                                <span class="icon-name">institution <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-key"></i>
                                                <span class="icon-name">key</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-keyboard-o"></i>
                                                <span class="icon-name">keyboard-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-language"></i>
                                                <span class="icon-name">language</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-laptop"></i>
                                                <span class="icon-name">laptop</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-leaf"></i>
                                                <span class="icon-name">leaf</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-legal"></i>
                                                <span class="icon-name">legal <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-lemon-o"></i>
                                                <span class="icon-name">lemon-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-level-down"></i>
                                                <span class="icon-name">level-down</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-level-up"></i>
                                                <span class="icon-name">level-up</span>
                                            </div>
                                        </div>



                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-life-bouy"></i>
                                                <span class="icon-name">life-bouy <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-life-buoy"></i>
                                                <span class="icon-name">life-buoy <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-life-ring"></i>
                                                <span class="icon-name">life-ring</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-life-saver"></i>
                                                <span class="icon-name">life-saver <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-lightbulb-o"></i>
                                                <span class="icon-name">lightbulb-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-line-chart"></i>
                                                <span class="icon-name">line-chart</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-location-arrow"></i>
                                                <span class="icon-name">location-arrow</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-lock"></i>
                                                <span class="icon-name">lock</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-low-vision"></i>
                                                <span class="icon-name">low-vision</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-magic"></i>
                                                <span class="icon-name">magic</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-magnet"></i>
                                                <span class="icon-name">magnet</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-mail-forward"></i>
                                                <span class="icon-name">mail-forward <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-mail-reply"></i>
                                                <span class="icon-name">mail-reply <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-mail-reply-all"></i>
                                                <span class="icon-name">mail-reply-all <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-male"></i>
                                                <span class="icon-name">male</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-map"></i>
                                                <span class="icon-name">map</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-map-marker"></i>
                                                <span class="icon-name">map-marker</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-map-o"></i>
                                                <span class="icon-name">map-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-map-pin"></i>
                                                <span class="icon-name">map-pin</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-map-signs"></i>
                                                <span class="icon-name">map-signs</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-meh-o"></i>
                                                <span class="icon-name">meh-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-microchip"></i>
                                                <span class="icon-name">microchip</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-microphone"></i>
                                                <span class="icon-name">microphone</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-microphone-slash"></i>
                                                <span class="icon-name">microphone-slash</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-minus"></i>
                                                <span class="icon-name">minus</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-minus-circle"></i>
                                                <span class="icon-name">minus-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-minus-square"></i>
                                                <span class="icon-name">minus-square</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-minus-square-o"></i>
                                                <span class="icon-name">minus-square-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-mobile"></i>
                                                <span class="icon-name">mobile</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-mobile-phone"></i>
                                                <span class="icon-name">mobile-phone</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-money"></i>
                                                <span class="icon-name">money</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-moon-o"></i>
                                                <span class="icon-name">moon-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-mortar-board"></i>
                                                <span class="icon-name">mortar-board <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-motorcycle"></i>
                                                <span class="icon-name">motorcycle</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-mouse-pointer"></i>
                                                <span class="icon-name">mouse-pointer</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-music"></i>
                                                <span class="icon-name">music</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-navicon"></i>
                                                <span class="icon-name">navicon <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-newspaper-o"></i>
                                                <span class="icon-name">newspaper-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-object-group"></i>
                                                <span class="icon-name">object-group</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-object-ungroup"></i>
                                                <span class="icon-name">object-ungroup</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-paint-brush"></i>
                                                <span class="icon-name">paint-brush</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-paper-plane"></i>
                                                <span class="icon-name">paper-plane</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-paper-plane-o"></i>
                                                <span class="icon-name">paper-plane-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-paw"></i>
                                                <span class="icon-name">paw</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-pencil"></i>
                                                <span class="icon-name">pencil</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-pencil-square"></i>
                                                <span class="icon-name">pencil-square</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-pencil-square-o"></i>
                                                <span class="icon-name">pencil-square-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-percent"></i>
                                                <span class="icon-name">percent</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-phone"></i>
                                                <span class="icon-name">phone</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-phone-square"></i>
                                                <span class="icon-name">phone-square</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-photo"></i>
                                                <span class="icon-name">photo <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-picture-o"></i>
                                                <span class="icon-name">picture-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-pie-chart"></i>
                                                <span class="icon-name">pie-chart</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-plane"></i>
                                                <span class="icon-name">plane</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-plug"></i>
                                                <span class="icon-name">plug</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-plus"></i>
                                                <span class="icon-name">plus</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-plus-circle"></i>
                                                <span class="icon-name">plus-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-plus-square"></i>
                                                <span class="icon-name">plus-square</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-plus-square-o"></i>
                                                <span class="icon-name">plus-square-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-podcast"></i>
                                                <span class="icon-name">podcast</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-power-off"></i>
                                                <span class="icon-name">power-off</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-print"></i>
                                                <span class="icon-name">print</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-puzzle-piece"></i>
                                                <span class="icon-name">puzzle-piece</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-qrcode"></i>
                                                <span class="icon-name">qrcode</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-question"></i>
                                                <span class="icon-name">question</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-question-circle"></i>
                                                <span class="icon-name">question-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-question-circle-o"></i>
                                                <span class="icon-name">question-circle-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-quote-left"></i>
                                                <span class="icon-name">quote-left</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-quote-right"></i>
                                                <span class="icon-name">quote-right</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-random"></i>
                                                <span class="icon-name">random</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-recycle"></i>
                                                <span class="icon-name">recycle</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-refresh"></i>
                                                <span class="icon-name">refresh</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-registered"></i>
                                                <span class="icon-name">registered</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-remove"></i>
                                                <span class="icon-name">remove <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-reorder"></i>
                                                <span class="icon-name">reorder <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-reply"></i>
                                                <span class="icon-name">reply</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-reply-all"></i>
                                                <span class="icon-name">reply-all</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-retweet"></i>
                                                <span class="icon-name">retweet</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-road"></i>
                                                <span class="icon-name">road</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-rocket"></i>
                                                <span class="icon-name">rocket</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-rss"></i>
                                                <span class="icon-name">rss</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-rss-square"></i>
                                                <span class="icon-name">rss-square</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-s15"></i>
                                                <span class="icon-name">s15 <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-search"></i>
                                                <span class="icon-name">search</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-search-minus"></i>
                                                <span class="icon-name">search-minus</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-search-plus"></i>
                                                <span class="icon-name">search-plus</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-send"></i>
                                                <span class="icon-name">send <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-send-o"></i>
                                                <span class="icon-name">send-o <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-server"></i>
                                                <span class="icon-name">server</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-share"></i>
                                                <span class="icon-name">share</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-share-alt"></i>
                                                <span class="icon-name">share-alt</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-share-alt-square"></i>
                                                <span class="icon-name">share-alt-square</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-share-square"></i>
                                                <span class="icon-name">share-square</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-share-square-o"></i>
                                                <span class="icon-name">share-square-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-shield"></i>
                                                <span class="icon-name">shield</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-ship"></i>
                                                <span class="icon-name">ship</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-shopping-bag"></i>
                                                <span class="icon-name">shopping-bag</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-shopping-basket"></i>
                                                <span class="icon-name">shopping-basket</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-shopping-cart"></i>
                                                <span class="icon-name">shopping-cart</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-shower"></i>
                                                <span class="icon-name">shower</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-sign-in"></i>
                                                <span class="icon-name">sign-in</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-sign-language"></i>
                                                <span class="icon-name">sign-language</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-sign-out"></i>
                                                <span class="icon-name">sign-out</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-signal"></i>
                                                <span class="icon-name">signal</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-signing"></i>
                                                <span class="icon-name">signing <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-sitemap"></i>
                                                <span class="icon-name">sitemap</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-sliders"></i>
                                                <span class="icon-name">sliders</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-smile-o"></i>
                                                <span class="icon-name">smile-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-snowflake-o"></i>
                                                <span class="icon-name">snowflake-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-soccer-ball-o"></i>
                                                <span class="icon-name">soccer-ball-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-sort"></i>
                                                <span class="icon-name">sort</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-sort-alpha-asc"></i>
                                                <span class="icon-name">sort-alpha-asc</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-sort-alpha-desc"></i>
                                                <span class="icon-name">sort-alpha-desc</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-sort-amount-asc"></i>
                                                <span class="icon-name">sort-amount-asc</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-sort-amount-desc"></i>
                                                <span class="icon-name">sort-amount-desc</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-sort-asc"></i>
                                                <span class="icon-name">sort-asc</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-sort-desc"></i>
                                                <span class="icon-name">sort-desc</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-sort-down"></i>
                                                <span class="icon-name">sort-down <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-sort-numeric-asc"></i>
                                                <span class="icon-name">sort-numeric-asc</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-sort-numeric-desc"></i>
                                                <span class="icon-name">sort-numeric-desc</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-sort-up"></i>
                                                <span class="icon-name">sort-up <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-space-shuttle"></i>
                                                <span class="icon-name">space-shuttle</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-spinner"></i>
                                                <span class="icon-name">spinner</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-spoon"></i>
                                                <span class="icon-name">spoon</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-square"></i>
                                                <span class="icon-name">square</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-square-o"></i>
                                                <span class="icon-name">square-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-star"></i>
                                                <span class="icon-name">star</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-star-half"></i>
                                                <span class="icon-name">star-half</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-star-half-empty"></i>
                                                <span class="icon-name">star-half-empty <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-star-half-full"></i>
                                                <span class="icon-name">star-half-full <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-star-half-o"></i>
                                                <span class="icon-name">star-half-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-star-o"></i>
                                                <span class="icon-name">star-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-sticky-note"></i>
                                                <span class="icon-name">sticky-note</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-sticky-note-o"></i>
                                                <span class="icon-name">sticky-note-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-street-view"></i>
                                                <span class="icon-name">street-view</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-suitcase"></i>
                                                <span class="icon-name">suitcase</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-sun-o"></i>
                                                <span class="icon-name">sun-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-support"></i>
                                                <span class="icon-name">support</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-tablet"></i>
                                                <span class="icon-name">tablet</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-tachometer"></i>
                                                <span class="icon-name">tachometer</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-tag"></i>
                                                <span class="icon-name">tag</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-tags"></i>
                                                <span class="icon-name">tags</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-tasks"></i>
                                                <span class="icon-name">tasks</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-taxi"></i>
                                                <span class="icon-name">taxi</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-television"></i>
                                                <span class="icon-name">television</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-terminal"></i>
                                                <span class="icon-name">terminal</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-thumb-tack"></i>
                                                <span class="icon-name">thumb-tack</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-thumbs-down"></i>
                                                <span class="icon-name">thumbs-down</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-thumbs-o-down"></i>
                                                <span class="icon-name">thumbs-o-down</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-thumbs-o-up"></i>
                                                <span class="icon-name">thumbs-o-up</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-thumbs-up"></i>
                                                <span class="icon-name">thumbs-up</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-ticket"></i>
                                                <span class="icon-name">ticket</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-times"></i>
                                                <span class="icon-name">times</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-times-circle"></i>
                                                <span class="icon-name">times-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-times-circle-o"></i>
                                                <span class="icon-name">times-circle-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-times-rectangle"></i>
                                                <span class="icon-name">times-rectangle <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out times-rectangle-o"></i>
                                                <span class="icon-name">fa fa-times-rectangle-o <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-tint"></i>
                                                <span class="icon-name">tint</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-toggle-down"></i>
                                                <span class="icon-name">toggle-down <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-toggle-left"></i>
                                                <span class="icon-name">toggle-left <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-toggle-off"></i>
                                                <span class="icon-name">toggle-off</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-toggle-on"></i>
                                                <span class="icon-name">toggle-on</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-toggle-right"></i>
                                                <span class="icon-name">toggle-right <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-toggle-up"></i>
                                                <span class="icon-name">toggle-up <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-trademark"></i>
                                                <span class="icon-name">trademark</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-trash"></i>
                                                <span class="icon-name">trash</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-trash-o"></i>
                                                <span class="icon-name">trash-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-tree"></i>
                                                <span class="icon-name">tree</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-trophy"></i>
                                                <span class="icon-name">trophy</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-truck"></i>
                                                <span class="icon-name">truck</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-tty"></i>
                                                <span class="icon-name">tty</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-tv"></i>
                                                <span class="icon-name">tv <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-umbrella"></i>
                                                <span class="icon-name">umbrella</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-universal-access"></i>
                                                <span class="icon-name">universal-access</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-university"></i>
                                                <span class="icon-name">university</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-unlock"></i>
                                                <span class="icon-name">unlock</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-unlock-alt"></i>
                                                <span class="icon-name">unlock-alt</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-unsorted"></i>
                                                <span class="icon-name">unsorted <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-upload"></i>
                                                <span class="icon-name">upload</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-user"></i>
                                                <span class="icon-name">user</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-user-circle"></i>
                                                <span class="icon-name">user-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-user-circle-o"></i>
                                                <span class="icon-name">user-circle-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-user-o"></i>
                                                <span class="icon-name">user-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-user-plus"></i>
                                                <span class="icon-name">user-plus</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-user-secret"></i>
                                                <span class="icon-name">user-secret</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-user-times"></i>
                                                <span class="icon-name">user-times</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-users"></i>
                                                <span class="icon-name">users</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-vcard"></i>
                                                <span class="icon-name">vcard <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-vcard-o"></i>
                                                <span class="icon-name">vcard-o <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-video-camera"></i>
                                                <span class="icon-name">video-camera</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-volume-control-phone"></i>
                                                <span class="icon-name">volume-control-phone</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-volume-down"></i>
                                                <span class="icon-name">volume-down</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-volume-off"></i>
                                                <span class="icon-name">volume-off</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-volume-up"></i>
                                                <span class="icon-name">volume-up</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-warning"></i>
                                                <span class="icon-name">warning <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-wheelchair"></i>
                                                <span class="icon-name">wheelchair</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-wheelchair-alt"></i>
                                                <span class="icon-name">wheelchair-alt</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-wifi"></i>
                                                <span class="icon-name">wifi</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-window-close"></i>
                                                <span class="icon-name">window-close</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-window-close-o"></i>
                                                <span class="icon-name">window-close-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-window-maximize"></i>
                                                <span class="icon-name">window-maximize</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-window-minimize"></i>
                                                <span class="icon-name">window-minimize</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-window-restore"></i>
                                                <span class="icon-name">window-restore</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-wrench"></i>
                                                <span class="icon-name">wrench</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h3>Accessibility Icons</h3><hr>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-american-sign-language-interpreting"></i>
                                                <span class="icon-name">american-sign-language-interpreting
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-asl-interpreting"></i>
                                                <span class="icon-name">asl-interpreting
                                                    <span class="text-muted">(alias)</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-assistive-listening-systems"></i>
                                                <span class="icon-name">assistive-listening-systems</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-audio-description"></i>
                                                <span class="icon-name">audio-description</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-blind"></i>
                                                <span class="icon-name">blind</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-braille"></i>
                                                <span class="icon-name">braille</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-cc"></i>
                                                <span class="icon-name">cc</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-deaf"></i>
                                                <span class="icon-name">deaf</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-deafness"></i>
                                                <span class="icon-name">deafness <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hard-of-hearing"></i>
                                                <span class="icon-name">hard-of-hearing
                                                    <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-low-vision"></i>
                                                <span class="icon-name">low-vision</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-question-circle-o"></i>
                                                <span class="icon-name">question-circle-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-sign-language"></i>
                                                <span class="icon-name">sign-language</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-signing"></i>
                                                <span class="icon-name">signing<span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-tty"></i>
                                                <span class="icon-name">tty</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-universal-access"></i>
                                                <span class="icon-name">universal-access</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-volume-control-phone"></i>
                                                <span class="icon-name">volume-control-phone</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-wheelchair"></i>
                                                <span class="icon-name">wheelchair</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-wheelchair-alt"></i>
                                                <span class="icon-name"> wheelchair-alt</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h3>Hand Icons</h3><hr>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hand-grab-o"></i>
                                                <span class="icon-name"> hand-grab-o<span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hand-lizard-o"></i>
                                                <span class="icon-name">hand-lizard-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hand-o-down"></i>
                                                <span class="icon-name">hand-o-down</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hand-o-left"></i>
                                                <span class="icon-name">hand-o-left</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hand-o-right"></i>
                                                <span class="icon-name">hand-o-right</span>


                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hand-o-up"></i>
                                                <span class="icon-name">hand-o-up</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hand-paper-o"></i>
                                                <span class="icon-name">hand-paper-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hand-peace-o"></i>
                                                <span class="icon-name">hand-peace-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hand-pointer-o"></i>
                                                <span class="icon-name">hand-pointer-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hand-rock-o"></i>
                                                <span class="icon-name">hand-rock-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hand-scissors-o"></i>
                                                <span class="icon-name">hand-scissors-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hand-spock-o"></i>
                                                <span class="icon-name">hand-spock-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hand-stop-o"></i>
                                                <span class="icon-name">hand-stop-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-thumbs-down"></i>
                                                <span class="icon-name">thumbs-down</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-thumbs-o-down"></i>
                                                <span class="icon-name">humbs-o-down</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-thumbs-o-up"></i>
                                                <span class="icon-name">thumbs-o-up</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-thumbs-up"></i>
                                                <span class="icon-name">thumbs-up</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h3>Transportation Icons</h3><hr>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-ambulance"></i>
                                                <span class="icon-name">ambulance</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-automobile"></i>
                                                <span class="icon-name">automobile<span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-bicycle"></i>
                                                <span class="icon-name">bicycle</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-bus"></i>
                                                <span class="icon-name">bus</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-cab"></i>
                                                <span class="icon-name">cab<span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-car"></i>
                                                <span class="icon-name">car</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-fighter-jet"></i>
                                                <span class="icon-name">fighter-jet</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-plane"></i>
                                                <span class="icon-name">plane</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-rocket"></i>
                                                <span class="icon-name">rocket</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-ship"></i>
                                                <span class="icon-name">ship</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-space-shuttle"></i>
                                                <span class="icon-name">space-shuttle</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-subway"></i>
                                                <span class="icon-name">subway</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-taxi"></i>
                                                <span class="icon-name">taxi</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-train"></i>
                                                <span class="icon-name">train</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-truck"></i>
                                                <span class="icon-name">truck</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-wheelchair"></i>
                                                <span class="icon-name">wheelchair</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-wheelchair-alt"></i>
                                                <span class="icon-name">wheelchair-alt</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h3>Gender Icons</h3><hr>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-genderless"></i>
                                                <span class="icon-name">genderless</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-intersex"></i>
                                                <span class="icon-name">intersex<span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-mars"></i>
                                                <span class="icon-name">mars</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-mars-double"></i>
                                                <span class="icon-name">mars-double</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-mars-stroke"></i>
                                                <span class="icon-name">mars-stroke</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-mars-stroke-h"></i>
                                                <span class="icon-name">mars-stroke-h</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-mars-stroke-v"></i>
                                                <span class="icon-name">mars-stroke-v</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-mercury"></i>
                                                <span class="icon-name">mercury</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-neuter"></i>
                                                <span class="icon-name">neuter</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-transgender"></i>
                                                <span class="icon-name">transgender</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-transgender"></i>
                                                <span class="icon-name">transgender</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-transgender-alt"></i>
                                                <span class="icon-name">transgender-alt</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-venus"></i>
                                                <span class="icon-name">venus</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-venus-double"></i>
                                                <span class="icon-name">venus-double</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-venus-mars"></i>
                                                <span class="icon-name">venus-mars</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h3>File Type Icons</h3><hr>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-file"></i>
                                                <span class="icon-name">file</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-file-archive-o"></i>
                                                <span class="icon-name">file-archive-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-file-audio-o"></i>
                                                <span class="icon-name">audio-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-file-code-o"></i>
                                                <span class="icon-name">file-code-o
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-file-excel-o"></i>
                                                <span class="icon-name">file-excel-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-file-image-o"></i>
                                                <span class="icon-name">file-image-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-file-movie-o"></i>
                                                <span class="icon-name">file-movie-o <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-file-o"></i>
                                                <span class="icon-name">file-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-file-pdf-o"></i>
                                                <span class="icon-name">file-pdf-o
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-file-photo-o"></i>
                                                <span class="icon-name">file-photo-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-file-picture-o"></i>
                                                <span class="icon-name">file-picture-o<span class="text-muted">(alias)</span></span>


                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-file-powerpoint-o"></i>
                                                <span class="icon-name">file-powerpoint-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-file-sound-o"></i>
                                                <span class="icon-name">file-sound-o<span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-file-text"></i>
                                                <span class="icon-name">file-text</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-file-text-o"></i>
                                                <span class="icon-name"> file-text-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-file-video-o"></i>
                                                <span class="icon-name">file-video-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-file-word-o"></i>
                                                <span class="icon-name">file-word-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-file-zip-o"></i>
                                                <span class="icon-name">
                                                    file-zip-o<span class="text-muted">(alias)</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h3>Spinner Icons</h3><hr>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-circle-o-notch"></i>
                                                <span class="icon-name">circle-o-notch</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-cog"></i>
                                                <span class="icon-name">cog</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-gear"></i>
                                                <span class="icon-name">gear</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-refresh"></i>
                                                <span class="icon-name">refresh</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-spinner"></i>
                                                <span class="icon-name">spinner</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h3>Form Control Icons</h3><hr>
                                        </div>                                      
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-check-square"></i>
                                                <span class="icon-name">check-square</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-check-square-o"></i>
                                                <span class="icon-name">check-square-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-circle"></i>
                                                <span class="icon-name">circle</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-circle-o"></i>
                                                <span class="icon-name">circle-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-dot-circle-o"></i>
                                                <span class="icon-name">dot-circle-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-minus-square"></i>
                                                <span class="icon-name">minus-square</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-minus-square-o"></i>
                                                <span class="icon-name">minus-square-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-plus-square"></i>
                                                <span class="icon-name">plus-square</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-plus-square-o"></i>
                                                <span class="icon-name">plus-square-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-square"></i>
                                                <span class="icon-name">square</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-square-o"></i>
                                                <span class="icon-name">square-o</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h3>Payment Icons</h3><hr>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-cc-amex"></i>
                                                <span class="icon-name">cc-amex</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-cc-diners-club"></i>
                                                <span class="icon-name">cc-diners-club</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-cc-discover"></i>
                                                <span class="icon-name">cc-discover</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-cc-jcb"></i>
                                                <span class="icon-name">cc-jcb</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-cc-mastercard"></i>
                                                <span class="icon-name">cc-mastercard</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-cc-paypal"></i>
                                                <span class="icon-name">cc-paypal</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-cc-stripe"></i>
                                                <span class="icon-name">cc-stripe</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-cc-visa"></i>
                                                <span class="icon-name">cc-visa</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-credit-card"></i>
                                                <span class="icon-name">credit-card</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-credit-card-alt"></i>
                                                <span class="icon-name">credit-card-alt</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-google-wallet"></i>
                                                <span class="icon-name">google-wallet</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-paypal"></i>
                                                <span class="icon-name">paypal</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h3>Chart Icons</h3><hr>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-area-chart"></i>
                                                <span class="icon-name">area-chart</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-bar-chart"></i>
                                                <span class="icon-name">bar-chart</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-bar-chart-o"></i>
                                                <span class="icon-name">bar-chart-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-line-chart"></i>
                                                <span class="icon-name">line-chart</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-pie-chart"></i>
                                                <span class="icon-name">pie-chart</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h3>Currency Icons</h3><hr>
                                        </div>       
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-bitcoin"></i>
                                                <span class="icon-name">bitcoin<span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-btc"></i>
                                                <span class="icon-name">btc</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-cny"></i>
                                                <span class="icon-name">cny</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-dollar"></i>
                                                <span class="icon-name">dollar<span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-eur"></i>
                                                <span class="icon-name">eur</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-euro"></i>
                                                <span class="icon-name">euro</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-gbp"></i>
                                                <span class="icon-name ">gbp</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-gg"></i>
                                                <span class="icon-name">gg</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-gg-circle"></i>
                                                <span class="icon-name">gg-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-ils"></i>
                                                <span class="icon-name">fa-ils</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-inr"></i>
                                                <span class="icon-name">inr</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-jpy"></i>
                                                <span class="icon-name">jpy</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-krw"></i>
                                                <span class="icon-name">krw</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-money"></i>
                                                <span class="icon-name">money</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-rmb"></i>
                                                <span class="icon-name">rmb<span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-rouble"></i>
                                                <span class="icon-name">rouble<span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-rub"></i>
                                                <span class="icon-name">rub
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-ruble"></i>
                                                <span class="icon-name">ruble<span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-rupee"></i>
                                                <span class="icon-name">rupee<span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-shekel"></i>
                                                <span class="icon-name">shekel<span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-sheqel"></i>
                                                <span class="icon-name">sheqel<span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-try"></i>
                                                <span class="icon-name">try</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-turkish-lira"></i>
                                                <span class="icon-name">turkish-lira</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-usd"></i>
                                                <span class="icon-name">usd</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-won"></i>
                                                <span class="icon-name">won
                                                    <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-yen"></i>
                                                <span class="icon-name">yen<span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h3>Text Editor Icons</h3><hr>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa fa-align-center"></i>
                                                <span class="icon-name">align-center</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-align-justify"></i>
                                                <span class="icon-name">align-justify</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-align-left"></i>
                                                <span class="icon-name">align-left</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-align-right"></i>
                                                <span class="icon-name">align-right</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-bold"></i>
                                                <span class="icon-name">bold</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-chain"></i>
                                                <span class="icon-name">chain<span class="text-muted">(alias)</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-chain-broken"></i>
                                                <span class="icon-name">chain-broken</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-clipboard"></i>
                                                <span class="icon-name">clipboard</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-columns"></i>
                                                <span class="icon-name">columns</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-copy"></i>
                                                <span class="icon-name">copy<span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-cut"></i>
                                                <span class="icon-name">cut<span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-dedent"></i>
                                                <span class="icon-name">dedent<span class="text-muted">(alias)</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-eraser"></i>
                                                <span class="icon-name">eraser</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-file"></i>
                                                <span class="icon-name">file</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-file-o"></i>
                                                <span class="icon-name">file-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-file-text"></i>
                                                <span class="icon-name">file-text</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-file-text-o"></i>
                                                <span class="icon-name">text-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-files-o"></i>
                                                <span class="icon-name">files-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-floppy-o"></i>
                                                <span class="icon-name">floppy-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-font"></i>
                                                <span class="icon-name">font</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-header"></i>
                                                <span class="icon-name">header</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-indent"></i>
                                                <span class="icon-name">indent</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-italic"></i>
                                                <span class="icon-name">italic</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-link"></i>
                                                <span class="icon-name">link</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-list"></i>
                                                <span class="icon-name">list</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-list-alt"></i>
                                                <span class="icon-name">list-alt</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-list-ol"></i>
                                                <span class="icon-name">list-ol</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-list-ul"></i>
                                                <span class="icon-name">list-ul</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-outdent"></i>
                                                <span class="icon-name">outdent</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-paperclip"></i>
                                                <span class="icon-name">paperclip</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-paragraph"></i>
                                                <span class="icon-name">paragraph</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-paste"></i>
                                                <span class="icon-name">paste<span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-rotate-left"></i>
                                                <span class="icon-name">rotate-left<span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-rotate-right"></i>
                                                <span class="icon-name">rotate-right<span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-save"></i>
                                                <span class="icon-name">save</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-scissors"></i>
                                                <span class="icon-name">scissors</span>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-strikethrough"></i>
                                                <span class="icon-name">strikethrough</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-subscript"></i>
                                                <span class="icon-name">subscript</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-superscript"></i>
                                                <span class="icon-name">superscript</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-table"></i>
                                                <span class="icon-name">table</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-text-height"></i>
                                                <span class="icon-name">text-height</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-text-width"></i>
                                                <span class="icon-name">text-width</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-th"></i>
                                                <span class="icon-name">th</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-th-large"></i>
                                                <span class="icon-name">th-large</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-th-list"></i>
                                                <span class="icon-name">th-list</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-th-large"></i>
                                                <span class="icon-name">th-large</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-underline"></i>
                                                <span class="icon-name">underline</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-th-large"></i>
                                                <span class="icon-name">th-large</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-th-large"></i>
                                                <span class="icon-name">th-large</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-undo"></i>
                                                <span class="icon-name">undo</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-unlink"></i>
                                                <span class="icon-name">unlink<span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h3>Directional Icons</h3><hr>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-angle-double-down"></i>
                                                <span class="icon-name">angle-double-down</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-angle-double-left"></i>
                                                <span class="icon-name">angle-double-left</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-angle-double-right"></i>
                                                <span class="icon-name">angle-double-right</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-angle-double-up"></i>
                                                <span class="icon-name">angle-double-up</span>
                                            </div>
                                        </div><div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-angle-down"></i>
                                                <span class="icon-name">angle-down</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-angle-left"></i>
                                                <span class="icon-name">angle-left</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-angle-right"></i>
                                                <span class="icon-name">angle-right</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-angle-up"></i>
                                                <span class="icon-name">angle-up</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-arrow-circle-down"></i>
                                                <span class="icon-name">arrow-circle-down</span>
                                            </div>
                                        </div><div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-arrow-circle-left"></i>
                                                <span class="icon-name">arrow-circle-left</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-arrow-circle-o-down"></i>
                                                <span class="icon-name">arrow-circle-o-down</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-arrow-circle-o-left"></i>
                                                <span class="icon-name">arrow-circle-o-left</span>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-arrow-circle-o-right"></i>
                                                <span class="icon-name">arrow-circle-o-right</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-arrow-circle-o-up"></i>
                                                <span class="icon-name">arrow-circle-o-up</span>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-arrow-circle-right"></i>
                                                <span class="icon-name">arrow-circle-right</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-arrow-circle-up"></i>
                                                <span class="icon-name">arrow-circle-up</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-arrow-down"></i>
                                                <span class="icon-name">arrow-down</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-arrow-left"></i>
                                                <span class="icon-name">arrow-left</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-arrow-right"></i>
                                                <span class="icon-name">arrow-right</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-arrow-up"></i>
                                                <span class="icon-name">arrow-up</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-arrows"></i>
                                                <span class="icon-name">arrows</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-arrows-alt"></i>
                                                <span class="icon-name">arrows-alt</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-arrows-h"></i>
                                                <span class="icon-name">arrows-h</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-arrows-v"></i>
                                                <span class="icon-name">arrows-v</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-caret-down"></i>
                                                <span class="icon-name">caret-down</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-caret-left"></i>
                                                <span class="icon-name">caret-left</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-caret-right"></i>
                                                <span class="icon-name">caret-right</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-caret-square-o-down"></i>
                                                <span class="icon-name">caret-square-o-down</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-caret-square-o-left"></i>
                                                <span class="icon-name">caret-square-o-left</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-caret-square-o-right"></i>
                                                <span class="icon-name">caret-square-o-right</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-caret-square-o-up"></i>
                                                <span class="icon-name">caret-square-o-up</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-caret-up"></i>
                                                <span class="icon-name">caret-up</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-chevron-circle-down"></i>
                                                <span class="icon-name">chevron-circle-down</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-chevron-circle-left"></i>
                                                <span class="icon-name">chevron-circle-left</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-chevron-circle-right"></i>
                                                <span class="icon-name">chevron-circle-right</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-chevron-circle-up"></i>
                                                <span class="icon-name">chevron-circle-up</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-chevron-down"></i>
                                                <span class="icon-name">chevron-down</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-chevron-left"></i>
                                                <span class="icon-name">chevron-left</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-chevron-right"></i>
                                                <span class="icon-name">chevron-right</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-chevron-up"></i>
                                                <span class="icon-name">chevron-up</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-exchange"></i>
                                                <span class="icon-name">exchange</span>
                                            </div>
                                        </div><div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hand-o-down"></i>
                                                <span class="icon-name">hand-o-down</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hand-o-left"></i>
                                                <span class="icon-name">hand-o-left</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hand-o-right"></i>
                                                <span class="icon-name">hand-o-right</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hand-o-left"></i>
                                                <span class="icon-name">hand-o-left</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hand-o-left"></i>
                                                <span class="icon-name">hand-o-left</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hand-o-right"></i>
                                                <span class="icon-name">hand-o-right</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-long-arrow-down"></i>
                                                <span class="icon-name">long-arrow-down</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-long-arrow-left"></i>
                                                <span class="icon-name">long-arrow-left</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-long-arrow-up"></i>
                                                <span class="icon-name">long-arrow-up</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-toggle-down"></i>
                                                <span class="icon-name">toggle-down<span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-toggle-left"></i>
                                                <span class="icon-name">toggle-left<span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-toggle-right"></i>
                                                <span class="icon-name">toggle-right<span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-toggle-up"></i>
                                                <span class="icon-name">toggle-up
                                                    <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h3>Video Player Icon</h3><hr>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-arrows-alt"></i>
                                                <span class="icon-name">arrows-alt</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-backward"></i>
                                                <span class="icon-name">backward</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-compress"></i>
                                                <span class="icon-name">compress</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-eject"></i>
                                                <span class="icon-name">eject</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-expand"></i>
                                                <span class="icon-name">expand</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-fast-backward"></i>
                                                <span class="icon-name">fast-backward</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-fast-forward"></i>
                                                <span class="icon-name">fast-forward</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-forward"></i>
                                                <span class="icon-name">forward</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-pause"></i>
                                                <span class="icon-name">pause</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-pause-circle"></i>
                                                <span class="icon-name">pause-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-pause-circle-o"></i>
                                                <span class="icon-name">arrows-alt</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-arrows-alt"></i>
                                                <span class="icon-name">arrows-alt</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-play"></i>
                                                <span class="icon-name">play</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-play-circle"></i>
                                                <span class="icon-name">play-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-play-circle-o"></i>
                                                <span class="icon-name">play-circle-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-random"></i>
                                                <span class="icon-name">random</span>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-step-backward"></i>
                                                <span class="icon-name">step-backward</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-step-forward"></i>
                                                <span class="icon-name">step-forward</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-stop"></i>
                                                <span class="icon-name">stop</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-stop-circle"></i>
                                                <span class="icon-name">stop-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-stop-circle-o"></i>
                                                <span class="icon-name">stop-circle-o</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h3>Brand Icons</h3><hr>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-500px"></i>
                                                <span class="icon-name">500px</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-500px"></i>
                                                <span class="icon-name">500px</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-adn"></i>
                                                <span class="icon-name">adn</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-amazon"></i>
                                                <span class="icon-name">amzon</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-android"></i>
                                                <span class="icon-name">android</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-angellist"></i>
                                                <span class="icon-name">angellist</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-apple"></i>
                                                <span class="icon-name">apple</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-bandcamp"></i>
                                                <span class="icon-name">bandcamp</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-behance"></i>
                                                <span class="icon-name">behance</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-behance-square"></i>
                                                <span class="icon-name">behance-square</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-bitbucket"></i>
                                                <span class="icon-name">bitbucket</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-bitbucket-square"></i>
                                                <span class="icon-name">bitbucket-square</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-bitcoin"></i>
                                                <span class="icon-name">bitcoin
                                                    <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-black-tie"></i>
                                                <span class="icon-name">black-tie</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-bluetooth"></i>
                                                <span class="icon-name">bluetooth</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-bluetooth-b"></i>
                                                <span class="icon-name">bluetooth-b</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-btc"></i>
                                                <span class="icon-name">btc</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-buysellads"></i>
                                                <span class="icon-name">buysellads</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-cc-amex"></i>
                                                <span class="icon-name">amex</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-cc-diners-club"></i>
                                                <span class="icon-name">cc-diners-club</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-cc-jcb"></i>
                                                <span class="icon-name">cc-jcb</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-cc-mastercard"></i>
                                                <span class="icon-name">cc-mastercard</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-cc-paypal"></i>
                                                <span class="icon-name">cc-paypal</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-cc-stripe"></i>
                                                <span class="icon-name">cc-stripe</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-cc-visa"></i>
                                                <span class="icon-name">cc-visa</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-chrome"></i>
                                                <span class="icon-name">chrome</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-codepen"></i>
                                                <span class="icon-name">codepen</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-codiepie"></i>
                                                <span class="icon-name">codiepie</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-connectdevelop"></i>
                                                <span class="icon-name">connectdevelop</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-contao"></i>
                                                <span class="icon-name">contao</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-css3"></i>
                                                <span class="icon-name">fa fa-css3</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-dashcube"></i>
                                                <span class="icon-name">dashcube</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-delicious"></i>
                                                <span class="icon-name">delicious</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-deviantart"></i>
                                                <span class="icon-name">deviantart</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-digg"></i>
                                                <span class="icon-name">digg</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-dribbble"></i>
                                                <span class="icon-name">dribbble</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-dropbox"></i>
                                                <span class="icon-name">dropbox</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-drupal"></i>
                                                <span class="icon-name">drupal</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-edge"></i>
                                                <span class="icon-name">edge</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-eercast"></i>
                                                <span class="icon-name">eercast</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-empire"></i>
                                                <span class="icon-name">empire</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-envira"></i>
                                                <span class="icon-name">envira</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-etsy"></i>
                                                <span class="icon-name">etsy</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-expeditedssl"></i>
                                                <span class="icon-name">expeditedssl</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-fa"></i>
                                                <span class="icon-name">fa<span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-facebook"></i>
                                                <span class="icon-name">facebook</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-facebook-f"></i>
                                                <span class="icon-name">facebook-f<span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-facebook-official"></i>
                                                <span class="icon-name">facebook-official</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-facebook-square"></i>
                                                <span class="icon-name">facebook-square</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-firefox"></i>
                                                <span class="icon-name">firefox</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-first-order"></i>
                                                <span class="icon-name">first-order</span>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-flickr"></i>
                                                <span class="icon-name">flickr</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-font-awesome"></i>
                                                <span class="icon-name">font-awesome</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-fonticons"></i>
                                                <span class="icon-name">fonticons</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-fort-awesome"></i>
                                                <span class="icon-name">fort-awesome</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-forumbee"></i>
                                                <span class="icon-name">forumbee</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-foursquare"></i>
                                                <span class="icon-name">foursquare</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-ge"></i>
                                                <span class="icon-name">ge<span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-get-pocket"></i>
                                                <span class="icon-name">get-pocket</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-gg"></i>
                                                <span class="icon-name">gg</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-gg-circle"></i>
                                                <span class="icon-name">gg-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-git"></i>
                                                <span class="icon-name">git</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-git-square"></i>
                                                <span class="icon-name">git-square</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-github" ></i>

                                                <span class="icon-name">github</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-github-alt"></i>
                                                <span class="icon-name">github-alt</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-github-square"></i>
                                                <span class="icon-name">github-square</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-gitlab"></i>
                                                <span class="icon-name">fa fa-gitlab</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-gittip"></i>
                                                <span class="icon-name">gittip<span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-glide"></i>
                                                <span class="icon-name">glide</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-github"></i>
                                                <span class="icon-name">github</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-glide-g"></i>
                                                <span class="icon-name">glide-g</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-google"></i>
                                                <span class="icon-name">google</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-google-plus"></i>
                                                <span class="icon-name">google-plus</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-google-plus-circle"></i>
                                                <span class="icon-name">google-plus-circle
                                                    <span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-google-plus-official"></i>
                                                <span class="icon-name">google-plus-official</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-google-plus-square"></i>
                                                <span class="icon-name">google-plus-square</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-google-wallet"></i>
                                                <span class="icon-name">google-wallet</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-gratipay"></i>
                                                <span class="icon-name">gratipay</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-grav"></i>
                                                <span class="icon-name">grav</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hacker-news"></i>
                                                <span class="icon-name">hacker-news</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-houzz"></i>
                                                <span class="icon-name">houzz</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-html5"></i>
                                                <span class="icon-name">html5</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-imdb"></i>
                                                <span class="icon-name">imdb</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-instagram"></i>
                                                <span class="icon-name">instagram</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-internet-explorer"></i>
                                                <span class="icon-name">internet-explorer</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-ioxhost"></i>
                                                <span class="icon-name">ioxhost</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-joomla"></i>
                                                <span class="icon-name">joomla</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-jsfiddle"></i>
                                                <span class="icon-name">jsfiddle</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-lastfm"></i>
                                                <span class="icon-name">lastfm</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-lastfm-square"></i>
                                                <span class="icon-name">lastfm-square</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-leanpub"></i>
                                                <span class="icon-name">leanpub</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-linkedin"></i>
                                                <span class="icon-name">linkedin</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-linkedin-square"></i>
                                                <span class="icon-name">linkedin-square</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-linode"></i>
                                                <span class="icon-name">linode</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-linux"></i>
                                                <span class="icon-name">linux</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-maxcdn"></i>
                                                <span class="icon-name">maxcdn</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-meanpath"></i>
                                                <span class="icon-name">meanpath</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-medium"></i>
                                                <span class="icon-name">medium</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-meetup"></i>
                                                <span class="icon-name">meetup</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-mixcloud"></i>
                                                <span class="icon-name">mixcloud</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-modx"></i>
                                                <span class="icon-name">modx</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-odnoklassniki"></i>
                                                <span class="icon-name">odnoklassniki</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-odnoklassniki-square"></i>
                                                <span class="icon-name">odnoklassniki-square</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-opencart"></i>
                                                <span class="icon-name">opencart</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-openid"></i>
                                                <span class="icon-name">openid</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-opera"></i>
                                                <span class="icon-name">fa fa-opera</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-optin-monster"></i>
                                                <span class="icon-name">optin-monster</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-pagelines"></i>
                                                <span class="icon-name">pagelines</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-paypal"></i>
                                                <span class="icon-name">paypal</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-pied-piper"></i>
                                                <span class="icon-name">pied-piper</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-pied-piper-alt"></i>
                                                <span class="icon-name">pied-piper-alt</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-pied-piper-pp"></i>
                                                <span class="icon-name">pied-piper-pp</span>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-pinterest"></i>
                                                <span class="icon-name">pinterest</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-pinterest-p"></i>
                                                <span class="icon-name">pinterest-p</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-pinterest-square"></i>
                                                <span class="icon-name">pinterest-square</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-product-hunt"></i>
                                                <span class="icon-name">product-hunt</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-qq"></i>
                                                <span class="icon-name">qq</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-quora"></i>
                                                <span class="icon-name">quora</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-ra"></i>
                                                <span class="icon-name">ra<span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-ravelry"></i>
                                                <span class="icon-name">ravelry</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-rebel"></i>
                                                <span class="icon-name">rebel</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-reddit"></i>
                                                <span class="icon-name">reddit</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-reddit-alien"></i>
                                                <span class="icon-name">reddit-alien</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-reddit-square"></i>
                                                <span class="icon-name">reddit-square</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-renren"></i>
                                                <span class="icon-name">renren</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-resistance"></i>
                                                <span class="icon-name">resistance<span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-safari"></i>
                                                <span class="icon-name">safari</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-scribd"></i>
                                                <span class="icon-name">scribd</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-sellsy"></i>
                                                <span class="icon-name">sellsy</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-share-alt"></i>
                                                <span class="icon-name">share-alt</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-share-alt-square"></i>
                                                <span class="icon-name">share-alt-square</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-shirtsinbulk"></i>
                                                <span class="icon-name">shirtsinbulk</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-simplybuilt"></i>
                                                <span class="icon-name">simplybuilt</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-skyatlas"></i>
                                                <span class="icon-name">skyatlas</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-skype"></i>
                                                <span class="icon-name">skype</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-slack"></i>
                                                <span class="icon-name">slack</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-slideshare"></i>
                                                <span class="icon-name">slideshare</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-snapchat"></i>
                                                <span class="icon-name">snapchat</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-snapchat-ghost"></i>
                                                <span class="icon-name">snapchat-ghost</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-snapchat-square"></i>
                                                <span class="icon-name">snapchat-square</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-soundcloud"></i>
                                                <span class="icon-name">soundcloud</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-spotify"></i>
                                                <span class="icon-name">spotify</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-stack-exchange"></i>
                                                <span class="icon-name">stack-exchange</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-steam"></i>
                                                <span class="icon-name">steam</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-steam-square"></i>
                                                <span class="icon-name">steam-square</span>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-stumbleupon"></i>
                                                <span class="icon-name">stumbleupon</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-stumbleupon-circle"></i>
                                                <span class="icon-name">stumbleupon-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-superpowers"></i>
                                                <span class="icon-name">superpowers</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-telegram"></i>
                                                <span class="icon-name">telegram</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-tencent-weibo"></i>
                                                <span class="icon-name">tencent-weibo</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-themeisle"></i>
                                                <span class="icon-name">themeisle</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-trello"></i>
                                                <span class="icon-name">trello</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-tripadvisor"></i>
                                                <span class="icon-name">tripadvisor</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-tumblr"></i>
                                                <span class="icon-name">tumblr</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-tumblr-square"></i>
                                                <span class="icon-name">tumblr-square</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-twitch"></i>
                                                <span class="icon-name">twitch</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-twitter"></i>
                                                <span class="icon-name">twitter</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-twitter-square"></i>
                                                <span class="icon-name">twitter-square</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-usb"></i>
                                                <span class="icon-name">usb</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-viacoin"></i>
                                                <span class="icon-name">viacoin</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-viadeo"></i>
                                                <span class="icon-name">viadeo</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-viadeo-square"></i>
                                                <span class="icon-name">viadeo-square</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-vimeo"></i>
                                                <span class="icon-name">vimeo</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-vimeo-square"></i>
                                                <span class="icon-name">vimeo-square</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-vine"></i>
                                                <span class="icon-name">vine</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-vk"></i>
                                                <span class="icon-name">vk</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-wechat"></i>
                                                <span class="icon-name">wechat<span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-weibo"></i>
                                                <span class="icon-name">weibo</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-weixin"></i>
                                                <span class="icon-name">weixin</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-whatsapp"></i>
                                                <span class="icon-name">whatsapp</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-wikipedia-w"></i>
                                                <span class="icon-name">wikipedia-w</span>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-windows"></i>
                                                <span class="icon-name">windows</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-wordpress"></i>
                                                <span class="icon-name">wordpress</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-wpbeginner"></i>
                                                <span class="icon-name">wpbeginner</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-wpexplorer"></i>
                                                <span class="icon-name">wpexplorer</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-wpforms"></i>
                                                <span class="icon-name">wpforms</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-xing"></i>
                                                <span class="icon-name">xing</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-xing-square"></i>
                                                <span class="icon-name">xing-square</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-y-combinator"></i>
                                                <span class="icon-name">y-combinator<span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-y-combinator-square"></i>
                                                <span class="icon-name">combinator-square</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-yahoo"></i>
                                                <span class="icon-name">yahoo</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-yc"></i>
                                                <span class="icon-name">yc<span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-yc-square"></i>
                                                <span class="icon-name">yc-square<span class="text-muted">(alias)</span></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-yelp"></i>
                                                <span class="icon-name">yelp</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-yoast"></i>
                                                <span class="icon-name">yoast</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-youtube"></i>
                                                <span class="icon-name">youtube</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-youtube-play"></i>
                                                <span class="icon-name">youtube-play</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-youtube-square"></i>
                                                <span class="icon-name">youtube-square</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h3>Medical Icons</h3><hr>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-ambulance"></i>
                                                <span class="icon-name">ambulance</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-h-square"></i>
                                                <span class="icon-name">h-square</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-heart"></i>
                                                <span class="icon-name">heart</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-heart-o"></i>
                                                <span class="icon-name">heart-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-heartbeat"></i>
                                                <span class="icon-name">heartbeat</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-hospital-o"></i>
                                                <span class="icon-name">hospital-o</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-medkit"></i>
                                                <span class="icon-name">medkit</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-plus-square"></i>
                                                <span class="icon-name">plus-square</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-stethoscope"></i>
                                                <span class="icon-name">stethoscope</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-user-md"></i>
                                                <span class="icon-name">user-md</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-wheelchair"></i>
                                                <span class="icon-name">wheelchair</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out fa fa-wheelchair-alt"></i>
                                                <span class="icon-name">wheelchair-alt</span>
                                            </div>
                                        </div>
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

<!-- Mirrored from thememinister.com/adminpage/theme/adminpage_v2.0/icons_fontawesome.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Oct 2023 10:41:11 GMT -->
</html>