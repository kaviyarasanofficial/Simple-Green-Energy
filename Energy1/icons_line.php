<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from thememinister.com/adminpage/theme/adminpage_v2.0/icons_line.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Oct 2023 10:41:12 GMT -->
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
                                            <li><a href="charts_morris.php"><i class="fa fa-pie-chart"></i>Morris Charts</a></li>
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
                                <li><a href="charts_morris.php">Morris Charts</a></li>
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
                                <li><a href="icons_weather.php">Weather Icons </a></li>
                                <li class="active"><a href="icons_line.php">Line Icons</a></li>
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
                            <i class="ti-themify-logo"></i>
                        </div>
                        <div class="header-title">
                            <h1>Themify Icons</h1>
                            <small>Used by designers & developers for design mockups, print and web projects (SVG format is included). </small>
                            <ol class="breadcrumb">
                                <li><a href="index.php"><i class="pe-7s-home"></i> Home</a></li>
                                <li><a href="#">Icons</a></li>
                                <li class="active">Themify Icons</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Themify Icons</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="material-icon-inner">
                                        <div class="icon-section">
                                            <p>Themify Icons is a complete set of icons for use in web design and apps, consisting of 320+ pixel-perfect,
                                                hand-crafted icons that draw inspiration from Apple iOS 7 - available to the public, 100% FREE! You may use
                                                or distribute it for any purpose, whether personal or commercial. This icon set is a must have tool for web
                                                designers and developers.</p>
                                            <h4 class="header-title m-t-0">Arrows &amp; Direction Icons </h4>
                                            <div class="icon-container">
                                                <span class="ti-arrow-up"></span><span class="icons-name"> ti-arrow-up</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-arrow-right"></span><span class="icons-name"> ti-arrow-right</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-arrow-left"></span><span class="icons-name"> ti-arrow-left</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-arrow-down"></span><span class="icons-name"> ti-arrow-down</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-arrows-vertical"></span><span class="icons-name"> ti-arrows-vertical</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-arrows-horizontal"></span><span class="icons-name"> ti-arrows-horizontal</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-angle-up"></span><span class="icons-name"> ti-angle-up</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-angle-right"></span><span class="icons-name"> ti-angle-right</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-angle-left"></span><span class="icons-name"> ti-angle-left</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-angle-down"></span><span class="icons-name"> ti-angle-down</span>
                                            </div>	
                                            <div class="icon-container">
                                                <span class="ti-angle-double-up"></span><span class="icons-name"> ti-angle-double-up</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-angle-double-right"></span><span class="icons-name"> ti-angle-double-right</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-angle-double-left"></span><span class="icons-name"> ti-angle-double-left</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-angle-double-down"></span><span class="icons-name"> ti-angle-double-down</span>
                                            </div>					
                                            <div class="icon-container">
                                                <span class="ti-move"></span><span class="icons-name"> ti-move</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-fullscreen"></span><span class="icons-name"> ti-fullscreen</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-arrow-top-right"></span><span class="icons-name"> ti-arrow-top-right</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-arrow-top-left"></span><span class="icons-name"> ti-arrow-top-left</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-arrow-circle-up"></span><span class="icons-name"> ti-arrow-circle-up</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-arrow-circle-right"></span><span class="icons-name"> ti-arrow-circle-right</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-arrow-circle-left"></span><span class="icons-name"> ti-arrow-circle-left</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-arrow-circle-down"></span><span class="icons-name"> ti-arrow-circle-down</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-arrows-corner"></span><span class="icons-name"> ti-arrows-corner</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-split-v"></span><span class="icons-name"> ti-split-v</span>
                                            </div>

                                            <div class="icon-container">
                                                <span class="ti-split-v-alt"></span><span class="icons-name"> ti-split-v-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-split-h"></span><span class="icons-name"> ti-split-h</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-hand-point-up"></span><span class="icons-name"> ti-hand-point-up</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-hand-point-right"></span><span class="icons-name"> ti-hand-point-right</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-hand-point-left"></span><span class="icons-name"> ti-hand-point-left</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-hand-point-down"></span><span class="icons-name"> ti-hand-point-down</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-back-right"></span><span class="icons-name"> ti-back-right</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-back-left"></span><span class="icons-name"> ti-back-left</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-exchange-vertical"></span><span class="icons-name"> ti-exchange-vertical</span>
                                            </div>
                                        </div> <!-- Arrows Icons -->
                                        <div class="icon-section">
                                            <h4 class="header-title m-t-0">Web App Icons</h4>
                                            <div class="icon-container">
                                                <span class="ti-wand"></span><span class="icons-name"> ti-wand</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-save"></span><span class="icons-name"> ti-save</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-save-alt"></span><span class="icons-name"> ti-save-alt</span>
                                            </div>

                                            <div class="icon-container">
                                                <span class="ti-direction"></span><span class="icons-name"> ti-direction</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-direction-alt"></span><span class="icons-name"> ti-direction-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-user"></span><span class="icons-name"> ti-user</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-link"></span><span class="icons-name"> ti-link</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-unlink"></span><span class="icons-name"> ti-unlink</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-trash"></span><span class="icons-name"> ti-trash</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-target"></span><span class="icons-name"> ti-target</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-tag"></span><span class="icons-name"> ti-tag</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-desktop"></span><span class="icons-name"> ti-desktop</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-tablet"></span><span class="icons-name"> ti-tablet</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-mobile"></span><span class="icons-name"> ti-mobile</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-email"></span><span class="icons-name"> ti-email</span>
                                            </div>	
                                            <div class="icon-container">
                                                <span class="ti-star"></span><span class="icons-name"> ti-star</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-spray"></span><span class="icons-name"> ti-spray</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-signal"></span><span class="icons-name"> ti-signal</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-shopping-cart"></span><span class="icons-name"> ti-shopping-cart</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-shopping-cart-full"></span><span class="icons-name"> ti-shopping-cart-full</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-settings"></span><span class="icons-name"> ti-settings</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-search"></span><span class="icons-name"> ti-search</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-zoom-in"></span><span class="icons-name"> ti-zoom-in</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-zoom-out"></span><span class="icons-name"> ti-zoom-out</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-cut"></span><span class="icons-name"> ti-cut</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-ruler"></span><span class="icons-name"> ti-ruler</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-ruler-alt-2"></span><span class="icons-name"> ti-ruler-alt-2</span>
                                            </div>			
                                            <div class="icon-container">
                                                <span class="ti-ruler-pencil"></span><span class="icons-name"> ti-ruler-pencil</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-ruler-alt"></span><span class="icons-name"> ti-ruler-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-bookmark"></span><span class="icons-name"> ti-bookmark</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-bookmark-alt"></span><span class="icons-name"> ti-bookmark-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-reload"></span><span class="icons-name"> ti-reload</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-plus"></span><span class="icons-name"> ti-plus</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-minus"></span><span class="icons-name"> ti-minus</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-close"></span><span class="icons-name"> ti-close</span>
                                            </div>			
                                            <div class="icon-container">
                                                <span class="ti-pin"></span><span class="icons-name"> ti-pin</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-pencil"></span><span class="icons-name"> ti-pencil</span>
                                            </div>

                                            <div class="icon-container">
                                                <span class="ti-pencil-alt"></span><span class="icons-name"> ti-pencil-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-paint-roller"></span><span class="icons-name"> ti-paint-roller</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-paint-bucket"></span><span class="icons-name"> ti-paint-bucket</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-na"></span><span class="icons-name"> ti-na</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-medall"></span><span class="icons-name"> ti-medall</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-medall-alt"></span><span class="icons-name"> ti-medall-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-marker"></span><span class="icons-name"> ti-marker</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-marker-alt"></span><span class="icons-name"> ti-marker-alt</span>
                                            </div>

                                            <div class="icon-container">
                                                <span class="ti-lock"></span><span class="icons-name"> ti-lock</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-unlock"></span><span class="icons-name"> ti-unlock</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-location-arrow"></span><span class="icons-name"> ti-location-arrow</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout"></span><span class="icons-name"> ti-layout</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layers"></span><span class="icons-name"> ti-layers</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layers-alt"></span><span class="icons-name"> ti-layers-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-key"></span><span class="icons-name"> ti-key</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-image"></span><span class="icons-name"> ti-image</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-heart"></span><span class="icons-name"> ti-heart</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-heart-broken"></span><span class="icons-name"> ti-heart-broken</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-hand-stop"></span><span class="icons-name"> ti-hand-stop</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-hand-open"></span><span class="icons-name"> ti-hand-open</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-hand-drag"></span><span class="icons-name"> ti-hand-drag</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-flag"></span><span class="icons-name"> ti-flag</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-flag-alt"></span><span class="icons-name"> ti-flag-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-flag-alt-2"></span><span class="icons-name"> ti-flag-alt-2</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-eye"></span><span class="icons-name"> ti-eye</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-import"></span><span class="icons-name"> ti-import</span>
                                            </div>			
                                            <div class="icon-container">
                                                <span class="ti-export"></span><span class="icons-name"> ti-export</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-cup"></span><span class="icons-name"> ti-cup</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-crown"></span><span class="icons-name"> ti-crown</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-comments"></span><span class="icons-name"> ti-comments</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-comment"></span><span class="icons-name"> ti-comment</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-comment-alt"></span><span class="icons-name"> ti-comment-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-thought"></span><span class="icons-name"> ti-thought</span>
                                            </div>			
                                            <div class="icon-container">
                                                <span class="ti-clip"></span><span class="icons-name"> ti-clip</span>
                                            </div>

                                            <div class="icon-container">
                                                <span class="ti-check"></span><span class="icons-name"> ti-check</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-check-box"></span><span class="icons-name"> ti-check-box</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-camera"></span><span class="icons-name"> ti-camera</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-announcement"></span><span class="icons-name"> ti-announcement</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-brush"></span><span class="icons-name"> ti-brush</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-brush-alt"></span><span class="icons-name"> ti-brush-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-palette"></span><span class="icons-name"> ti-palette</span>
                                            </div>			
                                            <div class="icon-container">
                                                <span class="ti-briefcase"></span><span class="icons-name"> ti-briefcase</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-bolt"></span><span class="icons-name"> ti-bolt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-bolt-alt"></span><span class="icons-name"> ti-bolt-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-blackboard"></span><span class="icons-name"> ti-blackboard</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-bag"></span><span class="icons-name"> ti-bag</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-world"></span><span class="icons-name"> ti-world</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-wheelchair"></span><span class="icons-name"> ti-wheelchair</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-car"></span><span class="icons-name"> ti-car</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-truck"></span><span class="icons-name"> ti-truck</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-timer"></span><span class="icons-name"> ti-timer</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-ticket"></span><span class="icons-name"> ti-ticket</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-thumb-up"></span><span class="icons-name"> ti-thumb-up</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-thumb-down"></span><span class="icons-name"> ti-thumb-down</span>
                                            </div>

                                            <div class="icon-container">
                                                <span class="ti-stats-up"></span><span class="icons-name"> ti-stats-up</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-stats-down"></span><span class="icons-name"> ti-stats-down</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-shine"></span><span class="icons-name"> ti-shine</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-shift-right"></span><span class="icons-name"> ti-shift-right</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-shift-left"></span><span class="icons-name"> ti-shift-left</span>
                                            </div>

                                            <div class="icon-container">
                                                <span class="ti-shift-right-alt"></span><span class="icons-name"> ti-shift-right-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-shift-left-alt"></span><span class="icons-name"> ti-shift-left-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-shield"></span><span class="icons-name"> ti-shield</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-notepad"></span><span class="icons-name"> ti-notepad</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-server"></span><span class="icons-name"> ti-server</span>
                                            </div>

                                            <div class="icon-container">
                                                <span class="ti-pulse"></span><span class="icons-name"> ti-pulse</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-printer"></span><span class="icons-name"> ti-printer</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-power-off"></span><span class="icons-name"> ti-power-off</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-plug"></span><span class="icons-name"> ti-plug</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-pie-chart"></span><span class="icons-name"> ti-pie-chart</span>
                                            </div>

                                            <div class="icon-container">
                                                <span class="ti-panel"></span><span class="icons-name"> ti-panel</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-package"></span><span class="icons-name"> ti-package</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-music"></span><span class="icons-name"> ti-music</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-music-alt"></span><span class="icons-name"> ti-music-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-mouse"></span><span class="icons-name"> ti-mouse</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-mouse-alt"></span><span class="icons-name"> ti-mouse-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-money"></span><span class="icons-name"> ti-money</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-microphone"></span><span class="icons-name"> ti-microphone</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-menu"></span><span class="icons-name"> ti-menu</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-menu-alt"></span><span class="icons-name"> ti-menu-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-map"></span><span class="icons-name"> ti-map</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-map-alt"></span><span class="icons-name"> ti-map-alt</span>
                                            </div>

                                            <div class="icon-container">
                                                <span class="ti-location-pin"></span><span class="icons-name"> ti-location-pin</span>
                                            </div>

                                            <div class="icon-container">
                                                <span class="ti-light-bulb"></span><span class="icons-name"> ti-light-bulb</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-info"></span><span class="icons-name"> ti-info</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-infinite"></span><span class="icons-name"> ti-infinite</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-id-badge"></span><span class="icons-name"> ti-id-badge</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-hummer"></span><span class="icons-name"> ti-hummer</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-home"></span><span class="icons-name"> ti-home</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-help"></span><span class="icons-name"> ti-help</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-headphone"></span><span class="icons-name"> ti-headphone</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-harddrives"></span><span class="icons-name"> ti-harddrives</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-harddrive"></span><span class="icons-name"> ti-harddrive</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-gift"></span><span class="icons-name"> ti-gift</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-game"></span><span class="icons-name"> ti-game</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-filter"></span><span class="icons-name"> ti-filter</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-files"></span><span class="icons-name"> ti-files</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-file"></span><span class="icons-name"> ti-file</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-zip"></span><span class="icons-name"> ti-zip</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-folder"></span><span class="icons-name"> ti-folder</span>
                                            </div>			
                                            <div class="icon-container">
                                                <span class="ti-envelope"></span><span class="icons-name"> ti-envelope</span>
                                            </div>


                                            <div class="icon-container">
                                                <span class="ti-dashboard"></span><span class="icons-name"> ti-dashboard</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-cloud"></span><span class="icons-name"> ti-cloud</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-cloud-up"></span><span class="icons-name"> ti-cloud-up</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-cloud-down"></span><span class="icons-name"> ti-cloud-down</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-clipboard"></span><span class="icons-name"> ti-clipboard</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-calendar"></span><span class="icons-name"> ti-calendar</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-book"></span><span class="icons-name"> ti-book</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-bell"></span><span class="icons-name"> ti-bell</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-basketball"></span><span class="icons-name"> ti-basketball</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-bar-chart"></span><span class="icons-name"> ti-bar-chart</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-bar-chart-alt"></span><span class="icons-name"> ti-bar-chart-alt</span>
                                            </div>


                                            <div class="icon-container">
                                                <span class="ti-archive"></span><span class="icons-name"> ti-archive</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-anchor"></span><span class="icons-name"> ti-anchor</span>
                                            </div>

                                            <div class="icon-container">
                                                <span class="ti-alert"></span><span class="icons-name"> ti-alert</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-alarm-clock"></span><span class="icons-name"> ti-alarm-clock</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-agenda"></span><span class="icons-name"> ti-agenda</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-write"></span><span class="icons-name"> ti-write</span>
                                            </div>

                                            <div class="icon-container">
                                                <span class="ti-wallet"></span><span class="icons-name"> ti-wallet</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-video-clapper"></span><span class="icons-name"> ti-video-clapper</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-video-camera"></span><span class="icons-name"> ti-video-camera</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-vector"></span><span class="icons-name"> ti-vector</span>
                                            </div>

                                            <div class="icon-container">
                                                <span class="ti-support"></span><span class="icons-name"> ti-support</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-stamp"></span><span class="icons-name"> ti-stamp</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-slice"></span><span class="icons-name"> ti-slice</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-shortcode"></span><span class="icons-name"> ti-shortcode</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-receipt"></span><span class="icons-name"> ti-receipt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-pin2"></span><span class="icons-name"> ti-pin2</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-pin-alt"></span><span class="icons-name"> ti-pin-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-pencil-alt2"></span><span class="icons-name"> ti-pencil-alt2</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-eraser"></span><span class="icons-name"> ti-eraser</span>
                                            </div>			
                                            <div class="icon-container">
                                                <span class="ti-more"></span><span class="icons-name"> ti-more</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-more-alt"></span><span class="icons-name"> ti-more-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-microphone-alt"></span><span class="icons-name"> ti-microphone-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-magnet"></span><span class="icons-name"> ti-magnet</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-line-double"></span><span class="icons-name"> ti-line-double</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-line-dotted"></span><span class="icons-name"> ti-line-dotted</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-line-dashed"></span><span class="icons-name"> ti-line-dashed</span>
                                            </div>

                                            <div class="icon-container">
                                                <span class="ti-ink-pen"></span><span class="icons-name"> ti-ink-pen</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-info-alt"></span><span class="icons-name"> ti-info-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-help-alt"></span><span class="icons-name"> ti-help-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-headphone-alt"></span><span class="icons-name"> ti-headphone-alt</span>
                                            </div>

                                            <div class="icon-container">
                                                <span class="ti-gallery"></span><span class="icons-name"> ti-gallery</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-face-smile"></span><span class="icons-name"> ti-face-smile</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-face-sad"></span><span class="icons-name"> ti-face-sad</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-credit-card"></span><span class="icons-name"> ti-credit-card</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-comments-smiley"></span><span class="icons-name"> ti-comments-smiley</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-time"></span><span class="icons-name"> ti-time</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-share"></span><span class="icons-name"> ti-share</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-share-alt"></span><span class="icons-name"> ti-share-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-rocket"></span><span class="icons-name"> ti-rocket</span>
                                            </div>

                                            <div class="icon-container">
                                                <span class="ti-new-window"></span><span class="icons-name"> ti-new-window</span>
                                            </div>

                                            <div class="icon-container">
                                                <span class="ti-rss"></span><span class="icons-name"> ti-rss</span>
                                            </div>

                                            <div class="icon-container">
                                                <span class="ti-rss-alt"></span><span class="icons-name"> ti-rss-alt</span>
                                            </div>
                                        </div> <!-- Web App Icons -->
                                        <div class="icon-section">
                                            <h4 class="header-title m-t-0">Control Icons</h4>
                                            <div class="icon-container">
                                                <span class="ti-control-stop"></span><span class="icons-name"> ti-control-stop</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-control-shuffle"></span><span class="icons-name"> ti-control-shuffle</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-control-play"></span><span class="icons-name"> ti-control-play</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-control-pause"></span><span class="icons-name"> ti-control-pause</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-control-forward"></span><span class="icons-name"> ti-control-forward</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-control-backward"></span><span class="icons-name"> ti-control-backward</span>
                                            </div>	
                                            <div class="icon-container">
                                                <span class="ti-volume"></span><span class="icons-name"> ti-volume</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-control-skip-forward"></span><span class="icons-name"> ti-control-skip-forward</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-control-skip-backward"></span><span class="icons-name"> ti-control-skip-backward</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-control-record"></span><span class="icons-name"> ti-control-record</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-control-eject"></span><span class="icons-name"> ti-control-eject</span>
                                            </div>			
                                        </div> <!-- Control Icons -->
                                        <div class="icon-section">
                                            <h4 class="header-title m-t-0">Text Editor</h4>
                                            <div class="icon-container">
                                                <span class="ti-paragraph"></span><span class="icons-name"> ti-paragraph</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-uppercase"></span><span class="icons-name"> ti-uppercase</span>
                                            </div>

                                            <div class="icon-container">
                                                <span class="ti-underline"></span><span class="icons-name"> ti-underline</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-text"></span><span class="icons-name"> ti-text</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-Italic"></span><span class="icons-name"> ti-Italic</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-smallcap"></span><span class="icons-name"> ti-smallcap</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-list"></span><span class="icons-name"> ti-list</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-list-ol"></span><span class="icons-name"> ti-list-ol</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-align-right"></span><span class="icons-name"> ti-align-right</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-align-left"></span><span class="icons-name"> ti-align-left</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-align-justify"></span><span class="icons-name"> ti-align-justify</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-align-center"></span><span class="icons-name"> ti-align-center</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-quote-right"></span><span class="icons-name"> ti-quote-right</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-quote-left"></span><span class="icons-name"> ti-quote-left</span>
                                            </div>
                                        </div> <!-- Text Editor -->
                                        <div class="icon-section">
                                            <h4 class="header-title m-t-0">Layout Icons</h4>
                                            <div class="icon-container">
                                                <span class="ti-layout-width-full"></span><span class="icons-name"> ti-layout-width-full</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-width-default"></span><span class="icons-name"> ti-layout-width-default</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-width-default-alt"></span><span class="icons-name"> ti-layout-width-default-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-tab"></span><span class="icons-name"> ti-layout-tab</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-tab-window"></span><span class="icons-name"> ti-layout-tab-window</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-tab-v"></span><span class="icons-name"> ti-layout-tab-v</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-tab-min"></span><span class="icons-name"> ti-layout-tab-min</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-slider"></span><span class="icons-name"> ti-layout-slider</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-slider-alt"></span><span class="icons-name"> ti-layout-slider-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-sidebar-right"></span><span class="icons-name"> ti-layout-sidebar-right</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-sidebar-none"></span><span class="icons-name"> ti-layout-sidebar-none</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-sidebar-left"></span><span class="icons-name"> ti-layout-sidebar-left</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-placeholder"></span><span class="icons-name"> ti-layout-placeholder</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-menu"></span><span class="icons-name"> ti-layout-menu</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-menu-v"></span><span class="icons-name"> ti-layout-menu-v</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-menu-separated"></span><span class="icons-name"> ti-layout-menu-separated</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-menu-full"></span><span class="icons-name"> ti-layout-menu-full</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-media-right"></span><span class="icons-name"> ti-layout-media-right</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-media-right-alt"></span><span class="icons-name"> ti-layout-media-right-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-media-overlay"></span><span class="icons-name"> ti-layout-media-overlay</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-media-overlay-alt"></span><span class="icons-name"> ti-layout-media-overlay-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-media-overlay-alt-2"></span><span class="icons-name"> ti-layout-media-overlay-alt-2</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-media-left"></span><span class="icons-name"> ti-layout-media-left</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-media-left-alt"></span><span class="icons-name"> ti-layout-media-left-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-media-center"></span><span class="icons-name"> ti-layout-media-center</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-media-center-alt"></span><span class="icons-name"> ti-layout-media-center-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-list-thumb"></span><span class="icons-name"> ti-layout-list-thumb</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-list-thumb-alt"></span><span class="icons-name"> ti-layout-list-thumb-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-list-post"></span><span class="icons-name"> ti-layout-list-post</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-list-large-image"></span><span class="icons-name"> ti-layout-list-large-image</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-line-solid"></span><span class="icons-name"> ti-layout-line-solid</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-grid4"></span><span class="icons-name"> ti-layout-grid4</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-grid3"></span><span class="icons-name"> ti-layout-grid3</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-grid2"></span><span class="icons-name"> ti-layout-grid2</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-grid2-thumb"></span><span class="icons-name"> ti-layout-grid2-thumb</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-cta-right"></span><span class="icons-name"> ti-layout-cta-right</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-cta-left"></span><span class="icons-name"> ti-layout-cta-left</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-cta-center"></span><span class="icons-name"> ti-layout-cta-center</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-cta-btn-right"></span><span class="icons-name"> ti-layout-cta-btn-right</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-cta-btn-left"></span><span class="icons-name"> ti-layout-cta-btn-left</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-column4"></span><span class="icons-name"> ti-layout-column4</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-column3"></span><span class="icons-name"> ti-layout-column3</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-column2"></span><span class="icons-name"> ti-layout-column2</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-accordion-separated"></span><span class="icons-name"> ti-layout-accordion-separated</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-accordion-merged"></span><span class="icons-name"> ti-layout-accordion-merged</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-accordion-list"></span><span class="icons-name"> ti-layout-accordion-list</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-widgetized"></span><span class="icons-name"> ti-widgetized</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-widget"></span><span class="icons-name"> ti-widget</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-widget-alt"></span><span class="icons-name"> ti-widget-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-view-list"></span><span class="icons-name"> ti-view-list</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-view-list-alt"></span><span class="icons-name"> ti-view-list-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-view-grid"></span><span class="icons-name"> ti-view-grid</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-upload"></span><span class="icons-name"> ti-upload</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-download"></span><span class="icons-name"> ti-download</span>
                                            </div>	
                                            <div class="icon-container">
                                                <span class="ti-loop"></span><span class="icons-name"> ti-loop</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-sidebar-2"></span><span class="icons-name"> ti-layout-sidebar-2</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-grid4-alt"></span><span class="icons-name"> ti-layout-grid4-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-grid3-alt"></span><span class="icons-name"> ti-layout-grid3-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-grid2-alt"></span><span class="icons-name"> ti-layout-grid2-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-column4-alt"></span><span class="icons-name"> ti-layout-column4-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-column3-alt"></span><span class="icons-name"> ti-layout-column3-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-layout-column2-alt"></span><span class="icons-name"> ti-layout-column2-alt</span>
                                            </div>		
                                        </div> <!-- Layout Icons -->
                                        <div class="icon-section">
                                            <h4 class="header-title m-t-0">Brand Icons</h4>

                                            <div class="icon-container">
                                                <span class="ti-flickr"></span><span class="icons-name"> ti-flickr</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-flickr-alt"></span><span class="icons-name"> ti-flickr-alt</span>
                                            </div>			
                                            <div class="icon-container">
                                                <span class="ti-instagram"></span><span class="icons-name"> ti-instagram</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-google"></span><span class="icons-name"> ti-google</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-github"></span><span class="icons-name"> ti-github</span>
                                            </div>

                                            <div class="icon-container">
                                                <span class="ti-facebook"></span><span class="icons-name"> ti-facebook</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-dropbox"></span><span class="icons-name"> ti-dropbox</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-dropbox-alt"></span><span class="icons-name"> ti-dropbox-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-dribbble"></span><span class="icons-name"> ti-dribbble</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-apple"></span><span class="icons-name"> ti-apple</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-android"></span><span class="icons-name"> ti-android</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-yahoo"></span><span class="icons-name"> ti-yahoo</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-trello"></span><span class="icons-name"> ti-trello</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-stack-overflow"></span><span class="icons-name"> ti-stack-overflow</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-soundcloud"></span><span class="icons-name"> ti-soundcloud</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-sharethis"></span><span class="icons-name"> ti-sharethis</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-sharethis-alt"></span><span class="icons-name"> ti-sharethis-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-reddit"></span><span class="icons-name"> ti-reddit</span>
                                            </div>

                                            <div class="icon-container">
                                                <span class="ti-microsoft"></span><span class="icons-name"> ti-microsoft</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-microsoft-alt"></span><span class="icons-name"> ti-microsoft-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-linux"></span><span class="icons-name"> ti-linux</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-jsfiddle"></span><span class="icons-name"> ti-jsfiddle</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-joomla"></span><span class="icons-name"> ti-joomla</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-html5"></span><span class="icons-name"> ti-html5</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-css3"></span><span class="icons-name"> ti-css3</span>
                                            </div>	
                                            <div class="icon-container">
                                                <span class="ti-drupal"></span><span class="icons-name"> ti-drupal</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-wordpress"></span><span class="icons-name"> ti-wordpress</span>
                                            </div>		
                                            <div class="icon-container">
                                                <span class="ti-tumblr"></span><span class="icons-name"> ti-tumblr</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-tumblr-alt"></span><span class="icons-name"> ti-tumblr-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-skype"></span><span class="icons-name"> ti-skype</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-youtube"></span><span class="icons-name"> ti-youtube</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-vimeo"></span><span class="icons-name"> ti-vimeo</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-vimeo-alt"></span><span class="icons-name"> ti-vimeo-alt</span>
                                            </div>			
                                            <div class="icon-container">
                                                <span class="ti-twitter"></span><span class="icons-name"> ti-twitter</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-twitter-alt"></span><span class="icons-name"> ti-twitter-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-linkedin"></span><span class="icons-name"> ti-linkedin</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-pinterest"></span><span class="icons-name"> ti-pinterest</span>
                                            </div>

                                            <div class="icon-container">
                                                <span class="ti-pinterest-alt"></span><span class="icons-name"> ti-pinterest-alt</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-themify-logo"></span><span class="icons-name"> ti-themify-logo</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-themify-favicon"></span><span class="icons-name"> ti-themify-favicon</span>
                                            </div>
                                            <div class="icon-container">
                                                <span class="ti-themify-favicon-alt"></span><span class="icons-name"> ti-themify-favicon-alt</span>
                                            </div>
                                        </div> <!-- brand Icons -->
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

<!-- Mirrored from thememinister.com/adminpage/theme/adminpage_v2.0/icons_line.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Oct 2023 10:41:12 GMT -->
</html>