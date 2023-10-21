<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from thememinister.com/adminpage/theme/adminpage_v2.0/buttons.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Oct 2023 10:40:45 GMT -->
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
        <link href="assets/plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css"/>
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
                                <li><a href="form-mask.php">Form Mask</a></li>
                                <li><a href="form_touchspin.php">Touchspin</a></li>
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
                        <li class="active">
                            <a href="#" class="material-ripple"><i class="material-icons">format_color_fill</i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li class="active"><a href="buttons.php">Buttons</a></li>
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
                        <div class="header-icon">
                            <i class="pe-7s-wallet"></i>
                        </div>
                        <div class="header-title">
                            <h1>Buttons</h1>
                            <small>Buttons color, size and types</small>
                            <ol class="breadcrumb">
                                <li><a href="index.php"><i class="pe-7s-home"></i> Home</a></li>
                                <li><a href="#">UI Elements</a></li>
                                <li class="active">Buttons</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Buttons - Normal</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <p class="m-b-15">Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.</p>
                                    <button type="button" class="btn btn-default w-md m-b-5">Default</button>
                                    <button type="button" class="btn btn-primary w-md m-b-5">Primary</button>
                                    <button type="button" class="btn btn-success w-md m-b-5">Success</button>
                                    <button type="button" class="btn btn-info w-md m-b-5">Info</button>
                                    <button type="button" class="btn btn-warning w-md m-b-5">Warning</button>
                                    <button type="button" class="btn btn-danger w-md m-b-5">Danger</button>
                                    <button type="button" class="btn btn-inverse w-md m-b-5">Inverse</button>
                                    <button type="button" class="btn btn-purple w-md m-b-5">Purple</button>
                                    <button type="button" class="btn btn-pink w-md m-b-5">Pink</button>
                                    <button type="button" class="btn btn-black w-md m-b-5">Black</button>
                                    <button type="button" class="btn btn-violet w-md m-b-5">Violet</button>
                                </div>
                            </div>
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Button-Rounded</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <p class="m-b-15">Add <code>.btn-rounded</code> to default button to get rounded corners.</p>
                                    <button type="button" class="btn btn-default btn-rounded w-md m-b-5">Default</button>
                                    <button type="button" class="btn btn-primary btn-rounded w-md m-b-5">Primary</button>
                                    <button type="button" class="btn btn-success btn-rounded w-md m-b-5">Success</button>
                                    <button type="button" class="btn btn-info btn-rounded w-md m-b-5">Info</button>
                                    <button type="button" class="btn btn-warning btn-rounded w-md m-b-5">Warning</button>
                                    <button type="button" class="btn btn-danger btn-rounded w-md m-b-5">Danger</button>
                                    <button type="button" class="btn btn-inverse btn-rounded w-md m-b-5">Inverse</button>
                                    <button type="button" class="btn btn-purple btn-rounded w-md m-b-5">Purple</button>
                                    <button type="button" class="btn btn-pink btn-rounded w-md m-b-5">Pink</button>
                                    <button type="button" class="btn btn-black btn-rounded w-md m-b-5">Black</button>
                                    <button type="button" class="btn btn-violet btn-rounded w-md m-b-5">Violet</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4> Button-Rounded</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <p class="m-b-15">Use a classes <code>.disabled</code>to quickly create a Disabled btn.</p>
                                    <button type="button" class="btn btn-default disabled w-md m-b-5">Default</button>
                                    <button type="button" class="btn btn-primary disabled w-md m-b-5">Primary</button>
                                    <button type="button" class="btn btn-success disabled w-md m-b-5">Success</button>
                                    <button type="button" class="btn btn-info disabled w-md m-b-5">Info</button>
                                    <button type="button" class="btn btn-warning disabled w-md m-b-5">Warning</button>
                                    <button type="button" class="btn btn-danger disabled w-md m-b-5">Danger</button>
                                    <button type="button" class="btn btn-inverse disabled w-md m-b-5">Inverse</button>
                                    <button type="button" class="btn btn-purple disabled w-md m-b-5">Purple</button>
                                    <button type="button" class="btn btn-pink disabled w-md m-b-5">Pink</button>
                                    <button type="button" class="btn btn-black disabled w-md m-b-5">Black</button>
                                    <button type="button" class="btn btn-violet disabled w-md m-b-5">Violet</button>
                                </div>
                            </div>
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Button-Transparent</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <p class="m-b-15">Use a classes <code>.btn-transparent</code> to quickly create a bordered buttons.</p>
                                    <button type="button" class="btn btn-default btn-transparent w-md m-b-5">Default</button>
                                    <button type="button" class="btn btn-primary btn-transparent w-md m-b-5">Primary</button>
                                    <button type="button" class="btn btn-success btn-transparent w-md m-b-5">Success</button>
                                    <button type="button" class="btn btn-info btn-transparent w-md m-b-5">Info</button>
                                    <button type="button" class="btn btn-warning btn-transparent w-md m-b-5">Warning</button>
                                    <button type="button" class="btn btn-danger btn-transparent w-md m-b-5">Danger</button>
                                    <button type="button" class="btn btn-inverse btn-transparent w-md m-b-5">Inverse</button>
                                    <button type="button" class="btn btn-purple btn-transparent w-md m-b-5">Purple</button>
                                    <button type="button" class="btn btn-pink btn-transparent w-md m-b-5">Pink</button>
                                    <button type="button" class="btn btn-black btn-transparent w-md m-b-5">Black</button>
                                    <button type="button" class="btn btn-violet btn-transparent w-md m-b-5">Violet</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4> Outline-Buttons</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <h4>Outline-Buttons</h4>
                                    <p class="m-b-15">Use a classes <code>btn btn-default btn-outline</code>to quickly create a Outline btn.</p>
                                    <button type="button" class="btn btn-default btn-outline w-md m-b-5">Default</button>
                                    <button type="button" class="btn btn-primary btn-outline w-md m-b-5">Primary</button>
                                    <button type="button" class="btn btn-success btn-outline w-md m-b-5">Success</button>
                                    <button type="button" class="btn btn-info btn-outline w-md m-b-5">Info</button>
                                    <button type="button" class="btn btn-warning btn-outline w-md m-b-5">Warning</button>
                                    <button type="button" class="btn btn-danger btn-outline w-md m-b-5">Danger</button>
                                    <button type="button" class="btn btn-inverse btn-outline w-md m-b-5">Inverse</button>
                                    <button type="button" class="btn btn-purple btn-outline w-md m-b-5">Purple</button>
                                    <button type="button" class="btn btn-pink btn-outline w-md m-b-5">Pink</button>
                                    <button type="button" class="btn btn-black btn-outline w-md m-b-5">Black</button>
                                    <button type="button" class="btn btn-violet btn-outline w-md m-b-5">Violet</button>
                                    <br>
                                    <br>
                                    <h4>Rounded-Outline-Buttons</h4>
                                    <p class="m-b-15">Use a classes <code>btn btn-default btn-outline btn-rounded</code>to quickly create a Rounded btn.</p>
                                    <button type="button" class="btn btn-default btn-outline btn-rounded w-md m-b-5">Default</button>
                                    <button type="button" class="btn btn-primary btn-outline btn-rounded w-md m-b-5">Primary</button>
                                    <button type="button" class="btn btn-success btn-outline btn-rounded w-md m-b-5">Success</button>
                                    <button type="button" class="btn btn-info btn-outline btn-rounded w-md m-b-5">Info</button>
                                    <button type="button" class="btn btn-warning btn-outline btn-rounded w-md m-b-5">Warning</button>
                                    <button type="button" class="btn btn-danger btn-outline btn-rounded w-md m-b-5">Danger</button>
                                    <button type="button" class="btn btn-inverse btn-outline btn-rounded w-md m-b-5">Inverse</button>
                                    <button type="button" class="btn btn-purple btn-outline btn-rounded w-md m-b-5">Purple</button>
                                    <button type="button" class="btn btn-pink btn-outline btn-rounded w-md m-b-5">Pink</button>
                                    <button type="button" class="btn btn-black btn-outline btn-rounded w-md m-b-5">Black</button>
                                    <button type="button" class="btn btn-violet btn-outline btn-rounded w-md m-b-5">Violet</button>
                                    <br>
                                    <br>
                                    <h4>Labeled-Buttons</h4>
                                    <button type="button" class="btn btn-labeled btn-success m-b-5">
                                        <span class="btn-label"><i class="glyphicon glyphicon-ok"></i></span>Success
                                    </button>
                                    <button type="button" class="btn btn-labeled btn-danger m-b-5">
                                        <span class="btn-label"><i class="glyphicon glyphicon-remove"></i></span>Cancel
                                    </button>
                                    <button type="button" class="btn btn-labeled btn-warning m-b-5">
                                        <span class="btn-label"><i class="glyphicon glyphicon-bookmark"></i></span>Bookmark
                                    </button>
                                    <button type="button" class="btn btn-labeled btn-primary m-b-5">
                                        <span class="btn-label"><i class="glyphicon glyphicon-camera"></i></span>Camera
                                    </button>
                                    <button type="button" class="btn btn-labeled btn-pink m-b-5">
                                        <span class="btn-label"><i class="glyphicon glyphicon-chevron-left"></i></span>Left
                                    </button>
                                    <button type="button" class="btn btn-labeled btn-pink m-b-5">
                                        <span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span>Right
                                    </button>
                                    <button type="button" class="btn btn-labeled btn-inverse m-b-5">
                                        <span class="btn-label"><i class="glyphicon glyphicon-thumbs-up"></i></span>Thumbs Up
                                    </button>
                                    <button type="button" class="btn btn-labeled btn-purple m-b-5">
                                        <span class="btn-label"><i class="glyphicon glyphicon-thumbs-down"></i></span>Thumbs Down
                                    </button>
                                    <button type="button" class="btn btn-labeled btn-info m-b-5">
                                        <span class="btn-label"><i class="glyphicon glyphicon-refresh"></i></span>Refresh
                                    </button>
                                    <button type="button" class="btn btn-labeled btn-danger m-b-5">
                                        <span class="btn-label"><i class="glyphicon glyphicon-trash"></i></span>Trash
                                    </button>
                                    <button type="button" class="btn btn-success btn-labeled m-b-5">
                                        <span class="btn-label"><i class="glyphicon glyphicon-info-sign"></i></span>Info Web
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="panel panel-bd lobidisable">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4> Social Buttons</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <p class="m-b-15">Use a classes <code>btn btn-block btn-social btn-adn</code>to quickly create a Rounded btn.</p>
                                    <button type="button" class="btn btn-block btn-social btn-adn m-b-5">
                                        <span class="fa fa-adn"></span> Sign in with App.net
                                    </button>
                                    <button type="button" class="btn btn-block btn-social btn-bitbucket m-b-5">
                                        <span class="fa fa-bitbucket"></span> Sign in with Bitbucket
                                    </button>
                                    <button type="button" class="btn btn-block btn-social btn-dropbox m-b-5">
                                        <span class="fa fa-dropbox"></span> Sign in with Dropbox
                                    </button>
                                    <button type="button" class="btn btn-block btn-social btn-facebook m-b-5">
                                        <span class="fa fa-facebook"></span> Sign in with Facebook
                                    </button>
                                    <button type="button" class="btn btn-block btn-social btn-flickr m-b-5">
                                        <span class="fa fa-flickr"></span> Sign in with Flickr
                                    </button>
                                    <button type="button" class="btn btn-block btn-social btn-foursquare m-b-5">
                                        <span class="fa fa-foursquare"></span> Sign in with Foursquare
                                    </button>
                                    <button type="button" class="btn btn-block btn-social btn-github m-b-5">
                                        <span class="fa fa-github"></span> Sign in with GitHub
                                    </button>
                                    <button type="button" class="btn btn-block btn-social btn-google m-b-5">
                                        <span class="fa fa-google"></span> Sign in with Google
                                    </button>
                                    <button type="button" class="btn btn-block btn-social btn-instagram m-b-5">
                                        <span class="fa fa-instagram"></span> Sign in with Instagram
                                    </button>
                                    <button type="button" class="btn btn-block btn-social btn-linkedin m-b-5">
                                        <span class="fa fa-linkedin"></span> Sign in with LinkedIn
                                    </button>
                                    <button type="button" class="btn btn-block btn-social btn-microsoft m-b-5">
                                        <span class="fa fa-windows"></span> Sign in with Microsoft
                                    </button>
                                    <button type="button" class="btn btn-block btn-social btn-odnoklassniki m-b-5">
                                        <span class="fa fa-odnoklassniki"></span> Sign in with Odnoklassniki
                                    </button>
                                    <button type="button" class="btn btn-block btn-social btn-openid m-b-5">
                                        <span class="fa fa-openid"></span> Sign in with OpenID
                                    </button>
                                    <button type="button" class="btn btn-block btn-social btn-pinterest m-b-5">
                                        <span class="fa fa-pinterest"></span> Sign in with Pinterest
                                    </button>
                                    <button type="button" class="btn btn-block btn-social btn-reddit m-b-5">
                                        <span class="fa fa-reddit"></span> Sign in with Reddit
                                    </button>
                                    <button type="button" class="btn btn-block btn-social btn-soundcloud m-b-5">
                                        <span class="fa fa-soundcloud"></span> Sign in with SoundCloud
                                    </button>
                                    <button type="button" class="btn btn-block btn-social btn-tumblr m-b-5">
                                        <span class="fa fa-tumblr"></span> Sign in with Tumblr
                                    </button>
                                    <button type="button" class="btn btn-block btn-social btn-twitter m-b-5">
                                        <span class="fa fa-twitter"></span> Sign in with Twitter
                                    </button>
                                    <button type="button" class="btn btn-block btn-social btn-vimeo m-b-5">
                                        <span class="fa fa-vimeo-square"></span> Sign in with Vimeo
                                    </button>
                                    <button type="button" class="btn btn-block btn-social btn-vk m-b-5">
                                        <span class="fa fa-vk"></span> Sign in with VK
                                    </button>
                                    <button type="button" class="btn btn-block btn-social btn-yahoo">
                                        <span class="fa fa-yahoo"></span> Sign in with Yahoo!
                                    </button>
                                    <br>
                                    <br>
                                    <p class="m-b-15">Use a classes <code>btn btn-social-icon btn-adn</code>to quickly create a Rounded btn.</p>
                                    <button type="button" class="btn btn-social-icon btn-adn m-b-5"><i class="fa fa-adn"></i></button>
                                    <button type="button" class="btn btn-social-icon btn-bitbucket m-b-5"><i class="fa fa-bitbucket"></i></button>
                                    <button type="button" class="btn btn-social-icon btn-dropbox m-b-5"><i class="fa fa-dropbox"></i></button>
                                    <button type="button" class="btn btn-social-icon btn-facebook m-b-5"><i class="fa fa-facebook"></i></button>
                                    <button type="button" class="btn btn-social-icon btn-flickr m-b-5"><i class="fa fa-flickr"></i></button>
                                    <button type="button" class="btn btn-social-icon btn-foursquare m-b-5"><i class="fa fa-foursquare"></i></button>
                                    <button type="button" class="btn btn-social-icon btn-github m-b-5"><i class="fa fa-github"></i></button>
                                    <button type="button" class="btn btn-social-icon btn-google m-b-5"><i class="fa fa-google"></i></button>
                                    <button type="button" class="btn btn-social-icon btn-instagram m-b-5"><i class="fa fa-instagram"></i></button>
                                    <button type="button" class="btn btn-social-icon btn-linkedin m-b-5"><i class="fa fa-linkedin"></i></button>
                                    <button type="button" class="btn btn-social-icon btn-microsoft m-b-5"><i class="fa fa-windows"></i></button>
                                    <button type="button" class="btn btn-social-icon btn-odnoklassniki m-b-5"><i class="fa fa-odnoklassniki"></i></button>
                                    <button type="button" class="btn btn-social-icon btn-openid m-b-5"><i class="fa fa-openid"></i></button>
                                    <button type="button" class="btn btn-social-icon btn-pinterest m-b-5"><i class="fa fa-pinterest"></i></button>
                                    <button type="button" class="btn btn-social-icon btn-reddit m-b-5"><i class="fa fa-reddit"></i></button>
                                    <button type="button" class="btn btn-social-icon btn-soundcloud m-b-5"><i class="fa fa-soundcloud"></i></button>
                                    <button type="button" class="btn btn-social-icon btn-tumblr m-b-5"><i class="fa fa-tumblr"></i></button>
                                    <button type="button" class="btn btn-social-icon btn-twitter m-b-5"><i class="fa fa-twitter"></i></button>
                                    <button type="button" class="btn btn-social-icon btn-vimeo m-b-5"><i class="fa fa-vimeo-square"></i></button>
                                    <button type="button" class="btn btn-social-icon btn-vk m-b-5"><i class="fa fa-vk"></i></button>
                                    <button type="button" class="btn btn-social-icon btn-yahoo m-b-5"><i class="fa fa-yahoo"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Circle icon, Button dropdown, Button dropdown</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <h4 class="m-t-0">Circle icon</h4>
                                    <p class="m-b-15">Use a classes <code>btn btn-default btn-circle</code>to quickly create a Rounded btn.</p>
                                    <button type="button" class="btn btn-default btn-circle m-b-5"><i class="glyphicon glyphicon-ok"></i></button>
                                    <button type="button" class="btn btn-primary btn-circle m-b-5"><i class="glyphicon glyphicon-list"></i></button>
                                    <button type="button" class="btn btn-success btn-circle m-b-5"><i class="glyphicon glyphicon-link"></i></button>
                                    <button type="button" class="btn btn-info btn-circle m-b-5"><i class="glyphicon glyphicon-ok"></i></button>
                                    <button type="button" class="btn btn-warning btn-circle m-b-5"><i class="glyphicon glyphicon-remove"></i></button>
                                    <button type="button" class="btn btn-danger btn-circle m-b-5"><i class="glyphicon glyphicon-heart"></i></button>
                                    <button type="button" class="btn btn-inverse btn-circle m-b-5"><i class="glyphicon glyphicon-trash"></i></button>
                                    <button type="button" class="btn btn-purple btn-circle m-b-5"><i class="glyphicon glyphicon-repeat"></i></button>
                                    <button type="button" class="btn btn-pink btn-circle m-b-5"><i class="glyphicon glyphicon-download-alt"></i></button>
                                    <button type="button" class="btn btn-black btn-circle m-b-5"><i class="glyphicon glyphicon-bell"></i></button>
                                    <button type="button" class="btn btn-violet btn-circle m-b-5"><i class="glyphicon glyphicon-info-sign"></i></button>
                                    <br>
                                    <br>
                                    <h4>Button dropdown</h4>
                                    <p>Turn a button into a dropdown toggle with some basic markup changes.</p>
                                    <!-- Start button group-->
                                    <div class="btn-group m-b-5">
                                        <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-default">default 
                                            <span class="caret"></span>
                                        </button>
                                        <ul role="menu" class="dropdown-menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <!-- End button group-->
                                    <!-- Start button group-->
                                    <div class="btn-group m-b-5">
                                        <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-primary">primary
                                            <span class="caret"></span>
                                        </button>
                                        <ul role="menu" class="dropdown-menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <!-- End button group-->
                                    <!-- Start button group-->
                                    <div class="btn-group m-b-5">
                                        <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-success">success
                                            <span class="caret"></span>
                                        </button>
                                        <ul role="menu" class="dropdown-menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <!-- End button group-->
                                    <!-- Start button group-->
                                    <div class="btn-group m-b-5">
                                        <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-info">info
                                            <span class="caret"></span>
                                        </button>
                                        <ul role="menu" class="dropdown-menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <!-- End button group-->
                                    <!-- Start button group-->
                                    <div class="btn-group m-b-5">
                                        <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-warning">warning
                                            <span class="caret"></span>
                                        </button>
                                        <ul role="menu" class="dropdown-menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <!-- End button group-->
                                    <!-- Start button group-->
                                    <div class="btn-group m-b-5">
                                        <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-danger">danger
                                            <span class="caret"></span>
                                        </button>
                                        <ul role="menu" class="dropdown-menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <!-- End button group-->
                                    <!-- Start button group-->
                                    <div class="btn-group m-b-5">
                                        <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-inverse">inverse
                                            <span class="caret"></span>
                                        </button>
                                        <ul role="menu" class="dropdown-menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <!-- End button group-->
                                    <!-- Start button group-->
                                    <div class="btn-group m-b-5">
                                        <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-purple">purple
                                            <span class="caret"></span>
                                        </button>
                                        <ul role="menu" class="dropdown-menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <!-- End button group-->
                                    <!-- Start button group-->
                                    <div class="btn-group m-b-5">
                                        <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-pink">pink
                                            <span class="caret"></span>
                                        </button>
                                        <ul role="menu" class="dropdown-menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <!-- End button group-->
                                    <!-- Start button group-->
                                    <div class="btn-group m-b-5">
                                        <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-black">black
                                            <span class="caret"></span>
                                        </button>
                                        <ul role="menu" class="dropdown-menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <!-- End button group-->
                                    <!-- Start button group-->
                                    <div class="btn-group m-b-5">
                                        <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-violet">violet
                                            <span class="caret"></span>
                                        </button>
                                        <ul role="menu" class="dropdown-menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <!-- End button group-->
                                    <br>
                                    <br>
                                    <h4>Split button dropdown</h4>
                                    <p>Turn a button into a dropdown toggle with some basic markup changes.</p>
                                    <!-- Start button group-->
                                    <div class="btn-group  m-b-5">
                                        <button type="button" class="btn btn-default">Action</button>
                                        <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-default">
                                            <span class="caret"></span>
                                            <span class="sr-only">default</span>
                                        </button>
                                        <ul role="menu" class="dropdown-menu">
                                            <li><a href="#">Action</a>
                                            </li>
                                            <li><a href="#">Another action</a>
                                            </li>
                                            <li><a href="#">Something else here</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End button group-->
                                    <!-- Start button group-->
                                    <div class="btn-group  m-b-5">
                                        <button type="button" class="btn btn-primary">Action</button>
                                        <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-primary">
                                            <span class="caret"></span>
                                            <span class="sr-only">primary</span>
                                        </button>
                                        <ul role="menu" class="dropdown-menu">
                                            <li><a href="#">Action</a>
                                            </li>
                                            <li><a href="#">Another action</a>
                                            </li>
                                            <li><a href="#">Something else here</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End button group-->
                                    <!-- Start button group-->
                                    <div class="btn-group  m-b-5">
                                        <button type="button" class="btn btn-success">Action</button>
                                        <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-success">
                                            <span class="caret"></span>
                                            <span class="sr-only">success</span>
                                        </button>
                                        <ul role="menu" class="dropdown-menu">
                                            <li><a href="#">Action</a>
                                            </li>
                                            <li><a href="#">Another action</a>
                                            </li>
                                            <li><a href="#">Something else here</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End button group-->
                                    <!-- Start button group-->
                                    <div class="btn-group  m-b-5">
                                        <button type="button" class="btn btn-info">Action</button>
                                        <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-info">
                                            <span class="caret"></span>
                                            <span class="sr-only">info</span>
                                        </button>
                                        <ul role="menu" class="dropdown-menu">
                                            <li><a href="#">Action</a>
                                            </li>
                                            <li><a href="#">Another action</a>
                                            </li>
                                            <li><a href="#">Something else here</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End button group-->
                                    <!-- Start button group-->
                                    <div class="btn-group  m-b-5">
                                        <button type="button" class="btn btn-warning">Action</button>
                                        <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-warning">
                                            <span class="caret"></span>
                                            <span class="sr-only">warning</span>
                                        </button>
                                        <ul role="menu" class="dropdown-menu">
                                            <li><a href="#">Action</a>
                                            </li>
                                            <li><a href="#">Another action</a>
                                            </li>
                                            <li><a href="#">Something else here</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End button group-->
                                    <!-- Start button group-->
                                    <div class="btn-group  m-b-5">
                                        <button type="button" class="btn btn-danger">Action</button>
                                        <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-danger">
                                            <span class="caret"></span>
                                            <span class="sr-only">danger</span>
                                        </button>
                                        <ul role="menu" class="dropdown-menu">
                                            <li><a href="#">Action</a>
                                            </li>
                                            <li><a href="#">Another action</a>
                                            </li>
                                            <li><a href="#">Something else here</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End button group-->
                                    <!-- Start button group-->
                                    <div class="btn-group  m-b-5">
                                        <button type="button" class="btn btn-inverse">Action</button>
                                        <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-inverse">
                                            <span class="caret"></span>
                                            <span class="sr-only">inverse</span>
                                        </button>
                                        <ul role="menu" class="dropdown-menu">
                                            <li><a href="#">Action</a>
                                            </li>
                                            <li><a href="#">Another action</a>
                                            </li>
                                            <li><a href="#">Something else here</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End button group-->
                                    <!-- Start button group-->
                                    <div class="btn-group  m-b-5">
                                        <button type="button" class="btn btn-purple">Action</button>
                                        <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-purple">
                                            <span class="caret"></span>
                                            <span class="sr-only">purple</span>
                                        </button>
                                        <ul role="menu" class="dropdown-menu">
                                            <li><a href="#">Action</a>
                                            </li>
                                            <li><a href="#">Another action</a>
                                            </li>
                                            <li><a href="#">Something else here</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End button group-->
                                    <!-- Start button group-->
                                    <div class="btn-group  m-b-5">
                                        <button type="button" class="btn btn-pink">Action</button>
                                        <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-pink">
                                            <span class="caret"></span>
                                            <span class="sr-only">pink</span>
                                        </button>
                                        <ul role="menu" class="dropdown-menu">
                                            <li><a href="#">Action</a>
                                            </li>
                                            <li><a href="#">Another action</a>
                                            </li>
                                            <li><a href="#">Something else here</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End button group-->
                                    <!-- Start button group-->
                                    <div class="btn-group  m-b-5">
                                        <button type="button" class="btn btn-black">Action</button>
                                        <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-black">
                                            <span class="caret"></span>
                                            <span class="sr-only">black</span>
                                        </button>
                                        <ul role="menu" class="dropdown-menu">
                                            <li><a href="#">Action</a>
                                            </li>
                                            <li><a href="#">Another action</a>
                                            </li>
                                            <li><a href="#">Something else here</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End button group-->
                                    <!-- Start button group-->
                                    <div class="btn-group  m-b-5">
                                        <button type="button" class="btn btn-violet">Action</button>
                                        <button type="button" data-toggle="dropdown" class="btn dropdown-toggle btn-violet">
                                            <span class="caret"></span>
                                            <span class="sr-only">violet</span>
                                        </button>
                                        <ul role="menu" class="dropdown-menu">
                                            <li><a href="#">Action</a>
                                            </li>
                                            <li><a href="#">Another action</a>
                                            </li>
                                            <li><a href="#">Something else here</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End button group-->
                                    <br>
                                    <br>
                                    <h4>Animate icon buttons</h4>
                                    <p>Use the <code>.fa-spin</code> class to get any icon to rotate, and use <code>.fa-pulse</code> to have it rotate
                                        with 8 steps.</p>
                                    <button type="button" class="btn btn-default btn-rounded"><i class="fa fa-bolt fa-spin"></i></button>
                                    <button type="button" class="btn btn-primary btn-rounded"><i class="fa fa-cog fa-spin"></i></button>
                                    <button type="button" class="btn btn-success btn-rounded"><i class="fa fa-spinner fa-spin"></i></button>
                                    <button type="button" class="btn btn-info btn-rounded"><i class="fa fa-circle-o-notch fa-spin"></i></button>
                                </div>
                            </div>
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Button groups</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <h4 class="m-t-0">Basic example</h4>
                                            <p>Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code>.</p>

                                            <div class="btn-group" role="group" aria-label="...">
                                                <button type="button" class="btn btn-default">Left</button>
                                                <button type="button" class="btn btn-default">Middle</button>
                                                <button type="button" class="btn btn-default">Right</button>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <h4 class="m-t-0">Button toolbar</h4>
                                            <p>Combine sets of <code>&lt;div class="btn-group"&gt;</code> into a <code>&lt;div class="btn-toolbar"&gt;</code> for more complex components.</p>
                                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                                <div class="btn-group" role="group" aria-label="First group">
                                                    <button type="button" class="btn btn-default">1</button>
                                                    <button type="button" class="btn btn-default">2</button>
                                                    <button type="button" class="btn btn-default">3</button>
                                                    <button type="button" class="btn btn-default">4</button>
                                                </div>
                                                <div class="btn-group" role="group" aria-label="Second group">
                                                    <button type="button" class="btn btn-default">5</button>
                                                    <button type="button" class="btn btn-default">6</button>
                                                    <button type="button" class="btn btn-default">7</button>
                                                </div>
                                                <div class="btn-group" role="group" aria-label="Third group">
                                                    <button type="button" class="btn btn-default">8</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <br>
                                            <h4>Sizing</h4>
                                            <p>Instead of applying button sizing classes to every button in a group, just add <code>.btn-group-*</code> to each <code>.btn-group</code>, including when nesting multiple groups.</p>
                                            <div class="btn-group btn-group-lg m-b-10" role="group" aria-label="Large button group">
                                                <button type="button" class="btn btn-default">Left</button>
                                                <button type="button" class="btn btn-default">Middle</button>
                                                <button type="button" class="btn btn-default">Right</button>
                                            </div>
                                            <br>
                                            <div class="btn-group m-b-10" role="group" aria-label="Default button group">
                                                <button type="button" class="btn btn-default">Left</button>
                                                <button type="button" class="btn btn-default">Middle</button>
                                                <button type="button" class="btn btn-default">Right</button>
                                            </div>
                                            <br>
                                            <div class="btn-group btn-group-sm m-b-10" role="group" aria-label="Small button group">
                                                <button type="button" class="btn btn-default">Left</button>
                                                <button type="button" class="btn btn-default">Middle</button>
                                                <button type="button" class="btn btn-default">Right</button>
                                            </div>
                                            <br>
                                            <div class="btn-group btn-group-xs m-b-10" role="group" aria-label="Extra-small button group">
                                                <button type="button" class="btn btn-default">Left</button>
                                                <button type="button" class="btn btn-default">Middle</button>
                                                <button type="button" class="btn btn-default">Right</button>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <br>
                                            <h4>Vertical variation</h4>
                                            <p>Make a set of buttons appear vertically stacked rather than horizontally. <strong class="text-danger">Split button dropdowns are not supported here.</strong></p>
                                            <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                                <button type="button" class="btn btn-default">Button</button>
                                                <button type="button" class="btn btn-default">Button</button>
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupVerticalDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown <span class="caret"></span> </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                        <li><a href="#">Dropdown link</a></li>
                                                        <li><a href="#">Dropdown link</a></li>
                                                    </ul>
                                                </div>
                                                <button type="button" class="btn btn-default">Button</button>
                                                <button type="button" class="btn btn-default">Button</button>
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupVerticalDrop2" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown <span class="caret"></span> </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2">
                                                        <li><a href="#">Dropdown link</a></li>
                                                        <li><a href="#">Dropdown link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupVerticalDrop3" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown <span class="caret"></span> </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop3">
                                                        <li><a href="#">Dropdown link</a></li>
                                                        <li><a href="#">Dropdown link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupVerticalDrop4" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown <span class="caret"></span> </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop4">
                                                        <li><a href="#">Dropdown link</a></li>
                                                        <li><a href="#">Dropdown link</a></li>
                                                    </ul>
                                                </div>
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
        <!-- START PAGE LABEL PLUGINS -->
        <!-- START THEME LABEL SCRIPT -->
        <script src="assets/dist/js/app.min.js" type="text/javascript"></script>
        <script src="assets/dist/js/jQuery.style.switcher.min.js" type="text/javascript"></script>
    </body>

<!-- Mirrored from thememinister.com/adminpage/theme/adminpage_v2.0/buttons.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Oct 2023 10:40:45 GMT -->
</html>
