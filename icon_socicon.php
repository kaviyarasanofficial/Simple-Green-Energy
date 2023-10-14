<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from thememinister.com/adminpage/theme/adminpage_v2.0/icon_socicon.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Oct 2023 10:41:13 GMT -->
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
        <link href="assets/socicon/social.css" rel="stylesheet" type="text/css"/>
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
                        <li><a href="https://themeforest.net/item/adminpage-responsive-bootstrap-admin-template-dashboard/20281702?s_rank=5" target="_blank" class="btn-buy hidden-xs hidden-sm hidden-md">Buy now $25</a></li>
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
                            <a href="#" class="material-ripple"><i class="material-icons">bubble_chart</i> Charts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="charts_flot.php">Flot Chart</a></li>
                                <li><a href="charts_Js.php">Chart js</a></li>
                                <li><a href="charts_morris.php">Morris Charts</a></li>
                                <li><a href="charts_sparkline.php">Sparkline Charts</a></li>
                                <li><a href="charts_am.php">Am Charts</a></li>
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
                            <a href="#" class="material-ripple"><i class="material-icons">business</i> Tables<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="table.php">Simple tables</a></li>
                                <li><a href="dataTables.php">Data tables</a></li>
                                <li><a href="footable.php">FooTable</a></li>
                                <li><a href="x-editable.php">X-editable</a></li>
                            </ul>
                        </li>
                        <li>
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
                                <li><a href="icons_line.php">Line Icons</a></li>
                                <li><a href="icons_pe.php">Pe Icons</a></li>
                                <li class="active"><a href="icon_socicon.php">Socicon Icons</a></li>
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
                            <h1>Social Icons</h1>
                            <small>Glyphs, primary colors, unicodes</small>
                            <ol class="breadcrumb">
                                <li><a href="index.php"><i class="pe-7s-home"></i> Home</a></li>
                                <li><a href="#">Icons</a></li>
                                <li class="active">Social Icons</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->
                    <div class="row">
                        <div class="col-sm-12">

                            <h4>CSS mapping</h4>
                            <ul class="glyphs css-mapping">
                                <li>
                                    <div class="icon socicon-modelmayhem"></div>
                                    <input type="text" readonly="readonly" value="modelmayhem">
                                </li>
                                <li>
                                    <div class="icon socicon-mixcloud"></div>
                                    <input type="text" readonly="readonly" value="mixcloud">
                                </li>
                                <li>
                                    <div class="icon socicon-drupal"></div>
                                    <input type="text" readonly="readonly" value="drupal">
                                </li>
                                <li>
                                    <div class="icon socicon-swarm"></div>
                                    <input type="text" readonly="readonly" value="swarm">
                                </li>
                                <li>
                                    <div class="icon socicon-istock"></div>
                                    <input type="text" readonly="readonly" value="istock">
                                </li>
                                <li>
                                    <div class="icon socicon-yammer"></div>
                                    <input type="text" readonly="readonly" value="yammer">
                                </li>
                                <li>
                                    <div class="icon socicon-ello"></div>
                                    <input type="text" readonly="readonly" value="ello">
                                </li>
                                <li>
                                    <div class="icon socicon-stackoverflow"></div>
                                    <input type="text" readonly="readonly" value="stackoverflow">
                                </li>
                                <li>
                                    <div class="icon socicon-persona"></div>
                                    <input type="text" readonly="readonly" value="persona">
                                </li>
                                <li>
                                    <div class="icon socicon-triplej"></div>
                                    <input type="text" readonly="readonly" value="triplej">
                                </li>
                                <li>
                                    <div class="icon socicon-houzz"></div>
                                    <input type="text" readonly="readonly" value="houzz">
                                </li>
                                <li>
                                    <div class="icon socicon-rss"></div>
                                    <input type="text" readonly="readonly" value="rss">
                                </li>
                                <li>
                                    <div class="icon socicon-paypal"></div>
                                    <input type="text" readonly="readonly" value="paypal">
                                </li>
                                <li>
                                    <div class="icon socicon-odnoklassniki"></div>
                                    <input type="text" readonly="readonly" value="odnoklassniki">
                                </li>
                                <li>
                                    <div class="icon socicon-airbnb"></div>
                                    <input type="text" readonly="readonly" value="airbnb">
                                </li>
                                <li>
                                    <div class="icon socicon-periscope"></div>
                                    <input type="text" readonly="readonly" value="periscope">
                                </li>
                                <li>
                                    <div class="icon socicon-outlook"></div>
                                    <input type="text" readonly="readonly" value="outlook">
                                </li>
                                <li>
                                    <div class="icon socicon-coderwall"></div>
                                    <input type="text" readonly="readonly" value="coderwall">
                                </li>
                                <li>
                                    <div class="icon socicon-tripadvisor"></div>
                                    <input type="text" readonly="readonly" value="tripadvisor">
                                </li>
                                <li>
                                    <div class="icon socicon-appnet"></div>
                                    <input type="text" readonly="readonly" value="appnet">
                                </li>
                                <li>
                                    <div class="icon socicon-goodreads"></div>
                                    <input type="text" readonly="readonly" value="goodreads">
                                </li>
                                <li>
                                    <div class="icon socicon-tripit"></div>
                                    <input type="text" readonly="readonly" value="tripit">
                                </li>
                                <li>
                                    <div class="icon socicon-lanyrd"></div>
                                    <input type="text" readonly="readonly" value="lanyrd">
                                </li>
                                <li>
                                    <div class="icon socicon-slideshare"></div>
                                    <input type="text" readonly="readonly" value="slideshare">
                                </li>
                                <li>
                                    <div class="icon socicon-buffer"></div>
                                    <input type="text" readonly="readonly" value="buffer">
                                </li>
                                <li>
                                    <div class="icon socicon-disqus"></div>
                                    <input type="text" readonly="readonly" value="disqus">
                                </li>
                                <li>
                                    <div class="icon socicon-vkontakte"></div>
                                    <input type="text" readonly="readonly" value="vkontakte">
                                </li>
                                <li>
                                    <div class="icon socicon-whatsapp"></div>
                                    <input type="text" readonly="readonly" value="whatsapp">
                                </li>
                                <li>
                                    <div class="icon socicon-patreon"></div>
                                    <input type="text" readonly="readonly" value="patreon">
                                </li>
                                <li>
                                    <div class="icon socicon-storehouse"></div>
                                    <input type="text" readonly="readonly" value="storehouse">
                                </li>
                                <li>
                                    <div class="icon socicon-pocket"></div>
                                    <input type="text" readonly="readonly" value="pocket">
                                </li>
                                <li>
                                    <div class="icon socicon-mail"></div>
                                    <input type="text" readonly="readonly" value="mail">
                                </li>
                                <li>
                                    <div class="icon socicon-blogger"></div>
                                    <input type="text" readonly="readonly" value="blogger">
                                </li>
                                <li>
                                    <div class="icon socicon-technorati"></div>
                                    <input type="text" readonly="readonly" value="technorati">
                                </li>
                                <li>
                                    <div class="icon socicon-reddit"></div>
                                    <input type="text" readonly="readonly" value="reddit">
                                </li>
                                <li>
                                    <div class="icon socicon-dribbble"></div>
                                    <input type="text" readonly="readonly" value="dribbble">
                                </li>
                                <li>
                                    <div class="icon socicon-stumbleupon"></div>
                                    <input type="text" readonly="readonly" value="stumbleupon">
                                </li>
                                <li>
                                    <div class="icon socicon-digg"></div>
                                    <input type="text" readonly="readonly" value="digg">
                                </li>
                                <li>
                                    <div class="icon socicon-envato"></div>
                                    <input type="text" readonly="readonly" value="envato">
                                </li>
                                <li>
                                    <div class="icon socicon-behance"></div>
                                    <input type="text" readonly="readonly" value="behance">
                                </li>
                                <li>
                                    <div class="icon socicon-delicious"></div>
                                    <input type="text" readonly="readonly" value="delicious">
                                </li>
                                <li>
                                    <div class="icon socicon-deviantart"></div>
                                    <input type="text" readonly="readonly" value="deviantart">
                                </li>
                                <li>
                                    <div class="icon socicon-forrst"></div>
                                    <input type="text" readonly="readonly" value="forrst">
                                </li>
                                <li>
                                    <div class="icon socicon-play"></div>
                                    <input type="text" readonly="readonly" value="play">
                                </li>
                                <li>
                                    <div class="icon socicon-zerply"></div>
                                    <input type="text" readonly="readonly" value="zerply">
                                </li>
                                <li>
                                    <div class="icon socicon-wikipedia"></div>
                                    <input type="text" readonly="readonly" value="wikipedia">
                                </li>
                                <li>
                                    <div class="icon socicon-apple"></div>
                                    <input type="text" readonly="readonly" value="apple">
                                </li>
                                <li>
                                    <div class="icon socicon-flattr"></div>
                                    <input type="text" readonly="readonly" value="flattr">
                                </li>
                                <li>
                                    <div class="icon socicon-github"></div>
                                    <input type="text" readonly="readonly" value="github">
                                </li>
                                <li>
                                    <div class="icon socicon-renren"></div>
                                    <input type="text" readonly="readonly" value="renren">
                                </li>
                                <li>
                                    <div class="icon socicon-friendfeed"></div>
                                    <input type="text" readonly="readonly" value="friendfeed">
                                </li>
                                <li>
                                    <div class="icon socicon-newsvine"></div>
                                    <input type="text" readonly="readonly" value="newsvine">
                                </li>
                                <li>
                                    <div class="icon socicon-identica"></div>
                                    <input type="text" readonly="readonly" value="identica">
                                </li>
                                <li>
                                    <div class="icon socicon-bebo"></div>
                                    <input type="text" readonly="readonly" value="bebo">
                                </li>
                                <li>
                                    <div class="icon socicon-zynga"></div>
                                    <input type="text" readonly="readonly" value="zynga">
                                </li>
                                <li>
                                    <div class="icon socicon-steam"></div>
                                    <input type="text" readonly="readonly" value="steam">
                                </li>
                                <li>
                                    <div class="icon socicon-xbox"></div>
                                    <input type="text" readonly="readonly" value="xbox">
                                </li>
                                <li>
                                    <div class="icon socicon-windows"></div>
                                    <input type="text" readonly="readonly" value="windows">
                                </li>
                                <li>
                                    <div class="icon socicon-qq"></div>
                                    <input type="text" readonly="readonly" value="qq">
                                </li>
                                <li>
                                    <div class="icon socicon-douban"></div>
                                    <input type="text" readonly="readonly" value="douban">
                                </li>
                                <li>
                                    <div class="icon socicon-meetup"></div>
                                    <input type="text" readonly="readonly" value="meetup">
                                </li>
                                <li>
                                    <div class="icon socicon-playstation"></div>
                                    <input type="text" readonly="readonly" value="playstation">
                                </li>
                                <li>
                                    <div class="icon socicon-android"></div>
                                    <input type="text" readonly="readonly" value="android">
                                </li>
                                <li>
                                    <div class="icon socicon-snapchat"></div>
                                    <input type="text" readonly="readonly" value="snapchat">
                                </li>
                                <li>
                                    <div class="icon socicon-twitter"></div>
                                    <input type="text" readonly="readonly" value="twitter">
                                </li>
                                <li>
                                    <div class="icon socicon-facebook"></div>
                                    <input type="text" readonly="readonly" value="facebook">
                                </li>
                                <li>
                                    <div class="icon socicon-googleplus"></div>
                                    <input type="text" readonly="readonly" value="googleplus">
                                </li>
                                <li>
                                    <div class="icon socicon-pinterest"></div>
                                    <input type="text" readonly="readonly" value="pinterest">
                                </li>
                                <li>
                                    <div class="icon socicon-foursquare"></div>
                                    <input type="text" readonly="readonly" value="foursquare">
                                </li>
                                <li>
                                    <div class="icon socicon-yahoo"></div>
                                    <input type="text" readonly="readonly" value="yahoo">
                                </li>
                                <li>
                                    <div class="icon socicon-skype"></div>
                                    <input type="text" readonly="readonly" value="skype">
                                </li>
                                <li>
                                    <div class="icon socicon-yelp"></div>
                                    <input type="text" readonly="readonly" value="yelp">
                                </li>
                                <li>
                                    <div class="icon socicon-feedburner"></div>
                                    <input type="text" readonly="readonly" value="feedburner">
                                </li>
                                <li>
                                    <div class="icon socicon-linkedin"></div>
                                    <input type="text" readonly="readonly" value="linkedin">
                                </li>
                                <li>
                                    <div class="icon socicon-viadeo"></div>
                                    <input type="text" readonly="readonly" value="viadeo">
                                </li>
                                <li>
                                    <div class="icon socicon-xing"></div>
                                    <input type="text" readonly="readonly" value="xing">
                                </li>
                                <li>
                                    <div class="icon socicon-myspace"></div>
                                    <input type="text" readonly="readonly" value="myspace">
                                </li>
                                <li>
                                    <div class="icon socicon-soundcloud"></div>
                                    <input type="text" readonly="readonly" value="soundcloud">
                                </li>
                                <li>
                                    <div class="icon socicon-spotify"></div>
                                    <input type="text" readonly="readonly" value="spotify">
                                </li>
                                <li>
                                    <div class="icon socicon-grooveshark"></div>
                                    <input type="text" readonly="readonly" value="grooveshark">
                                </li>
                                <li>
                                    <div class="icon socicon-lastfm"></div>
                                    <input type="text" readonly="readonly" value="lastfm">
                                </li>
                                <li>
                                    <div class="icon socicon-youtube"></div>
                                    <input type="text" readonly="readonly" value="youtube">
                                </li>
                                <li>
                                    <div class="icon socicon-vimeo"></div>
                                    <input type="text" readonly="readonly" value="vimeo">
                                </li>
                                <li>
                                    <div class="icon socicon-dailymotion"></div>
                                    <input type="text" readonly="readonly" value="dailymotion">
                                </li>
                                <li>
                                    <div class="icon socicon-vine"></div>
                                    <input type="text" readonly="readonly" value="vine">
                                </li>
                                <li>
                                    <div class="icon socicon-flickr"></div>
                                    <input type="text" readonly="readonly" value="flickr">
                                </li>
                                <li>
                                    <div class="icon socicon-500px"></div>
                                    <input type="text" readonly="readonly" value="500px">
                                </li>
                                <li>
                                    <div class="icon socicon-wordpress"></div>
                                    <input type="text" readonly="readonly" value="wordpress">
                                </li>
                                <li>
                                    <div class="icon socicon-tumblr"></div>
                                    <input type="text" readonly="readonly" value="tumblr">
                                </li>
                                <li>
                                    <div class="icon socicon-twitch"></div>
                                    <input type="text" readonly="readonly" value="twitch">
                                </li>
                                <li>
                                    <div class="icon socicon-8tracks"></div>
                                    <input type="text" readonly="readonly" value="8tracks">
                                </li>
                                <li>
                                    <div class="icon socicon-amazon"></div>
                                    <input type="text" readonly="readonly" value="amazon">
                                </li>
                                <li>
                                    <div class="icon socicon-icq"></div>
                                    <input type="text" readonly="readonly" value="icq">
                                </li>
                                <li>
                                    <div class="icon socicon-smugmug"></div>
                                    <input type="text" readonly="readonly" value="smugmug">
                                </li>
                                <li>
                                    <div class="icon socicon-ravelry"></div>
                                    <input type="text" readonly="readonly" value="ravelry">
                                </li>
                                <li>
                                    <div class="icon socicon-weibo"></div>
                                    <input type="text" readonly="readonly" value="weibo">
                                </li>
                                <li>
                                    <div class="icon socicon-baidu"></div>
                                    <input type="text" readonly="readonly" value="baidu">
                                </li>
                                <li>
                                    <div class="icon socicon-angellist"></div>
                                    <input type="text" readonly="readonly" value="angellist">
                                </li>
                                <li>
                                    <div class="icon socicon-ebay"></div>
                                    <input type="text" readonly="readonly" value="ebay">
                                </li>
                                <li>
                                    <div class="icon socicon-imdb"></div>
                                    <input type="text" readonly="readonly" value="imdb">
                                </li>
                                <li>
                                    <div class="icon socicon-stayfriends"></div>
                                    <input type="text" readonly="readonly" value="stayfriends">
                                </li>
                                <li>
                                    <div class="icon socicon-residentadvisor"></div>
                                    <input type="text" readonly="readonly" value="residentadvisor">
                                </li>
                                <li>
                                    <div class="icon socicon-google"></div>
                                    <input type="text" readonly="readonly" value="google">
                                </li>
                                <li>
                                    <div class="icon socicon-yandex"></div>
                                    <input type="text" readonly="readonly" value="yandex">
                                </li>
                                <li>
                                    <div class="icon socicon-sharethis"></div>
                                    <input type="text" readonly="readonly" value="sharethis">
                                </li>
                                <li>
                                    <div class="icon socicon-bandcamp"></div>
                                    <input type="text" readonly="readonly" value="bandcamp">
                                </li>
                                <li>
                                    <div class="icon socicon-itunes"></div>
                                    <input type="text" readonly="readonly" value="itunes">
                                </li>
                                <li>
                                    <div class="icon socicon-deezer"></div>
                                    <input type="text" readonly="readonly" value="deezer">
                                </li>
                                <li>
                                    <div class="icon socicon-telegram"></div>
                                    <input type="text" readonly="readonly" value="telegram">
                                </li>
                                <li>
                                    <div class="icon socicon-openid"></div>
                                    <input type="text" readonly="readonly" value="openid">
                                </li>
                                <li>
                                    <div class="icon socicon-amplement"></div>
                                    <input type="text" readonly="readonly" value="amplement">
                                </li>
                                <li>
                                    <div class="icon socicon-viber"></div>
                                    <input type="text" readonly="readonly" value="viber">
                                </li>
                                <li>
                                    <div class="icon socicon-zomato"></div>
                                    <input type="text" readonly="readonly" value="zomato">
                                </li>
                                <li>
                                    <div class="icon socicon-draugiem"></div>
                                    <input type="text" readonly="readonly" value="draugiem">
                                </li>
                                <li>
                                    <div class="icon socicon-endomodo"></div>
                                    <input type="text" readonly="readonly" value="endomodo">
                                </li>
                                <li>
                                    <div class="icon socicon-filmweb"></div>
                                    <input type="text" readonly="readonly" value="filmweb">
                                </li>
                                <li>
                                    <div class="icon socicon-stackexchange"></div>
                                    <input type="text" readonly="readonly" value="stackexchange">
                                </li>
                                <li>
                                    <div class="icon socicon-wykop"></div>
                                    <input type="text" readonly="readonly" value="wykop">
                                </li>
                                <li>
                                    <div class="icon socicon-teamspeak"></div>
                                    <input type="text" readonly="readonly" value="teamspeak">
                                </li>
                                <li>
                                    <div class="icon socicon-teamviewer"></div>
                                    <input type="text" readonly="readonly" value="teamviewer">
                                </li>
                                <li>
                                    <div class="icon socicon-ventrilo"></div>
                                    <input type="text" readonly="readonly" value="ventrilo">
                                </li>
                                <li>
                                    <div class="icon socicon-younow"></div>
                                    <input type="text" readonly="readonly" value="younow">
                                </li>
                                <li>
                                    <div class="icon socicon-raidcall"></div>
                                    <input type="text" readonly="readonly" value="raidcall">
                                </li>
                                <li>
                                    <div class="icon socicon-mumble"></div>
                                    <input type="text" readonly="readonly" value="mumble">
                                </li>
                                <li>
                                    <div class="icon socicon-medium"></div>
                                    <input type="text" readonly="readonly" value="medium">
                                </li>
                                <li>
                                    <div class="icon socicon-bebee"></div>
                                    <input type="text" readonly="readonly" value="bebee">
                                </li>
                                <li>
                                    <div class="icon socicon-hitbox"></div>
                                    <input type="text" readonly="readonly" value="hitbox">
                                </li>
                                <li>
                                    <div class="icon socicon-reverbnation"></div>
                                    <input type="text" readonly="readonly" value="reverbnation">
                                </li>
                                <li>
                                    <div class="icon socicon-formulr"></div>
                                    <input type="text" readonly="readonly" value="formulr">
                                </li>
                                <li>
                                    <div class="icon socicon-instagram"></div>
                                    <input type="text" readonly="readonly" value="instagram">
                                </li>
                                <li>
                                    <div class="icon socicon-battlenet"></div>
                                    <input type="text" readonly="readonly" value="battlenet">
                                </li>
                                <li>
                                    <div class="icon socicon-chrome"></div>
                                    <input type="text" readonly="readonly" value="chrome">
                                </li>
                                <li>
                                    <div class="icon socicon-discord"></div>
                                    <input type="text" readonly="readonly" value="discord">
                                </li>
                                <li>
                                    <div class="icon socicon-issuu"></div>
                                    <input type="text" readonly="readonly" value="issuu">
                                </li>
                                <li>
                                    <div class="icon socicon-macos"></div>
                                    <input type="text" readonly="readonly" value="macos">
                                </li>
                                <li>
                                    <div class="icon socicon-firefox"></div>
                                    <input type="text" readonly="readonly" value="firefox">
                                </li>
                                <li>
                                    <div class="icon socicon-opera"></div>
                                    <input type="text" readonly="readonly" value="opera">
                                </li>
                                <li>
                                    <div class="icon socicon-keybase"></div>
                                    <input type="text" readonly="readonly" value="keybase">
                                </li>
                                <li>
                                    <div class="icon socicon-alliance"></div>
                                    <input type="text" readonly="readonly" value="alliance">
                                </li>
                                <li>
                                    <div class="icon socicon-livejournal"></div>
                                    <input type="text" readonly="readonly" value="livejournal">
                                </li>
                                <li>
                                    <div class="icon socicon-googlephotos"></div>
                                    <input type="text" readonly="readonly" value="googlephotos">
                                </li>
                                <li>
                                    <div class="icon socicon-horde"></div>
                                    <input type="text" readonly="readonly" value="horde">
                                </li>
                                <li>
                                    <div class="icon socicon-etsy"></div>
                                    <input type="text" readonly="readonly" value="etsy">
                                </li>
                                <li>
                                    <div class="icon socicon-zapier"></div>
                                    <input type="text" readonly="readonly" value="zapier">
                                </li>
                                <li>
                                    <div class="icon socicon-google-scholar"></div>
                                    <input type="text" readonly="readonly" value="google-scholar">
                                </li>
                                <li>
                                    <div class="icon socicon-researchgate"></div>
                                    <input type="text" readonly="readonly" value="researchgate">
                                </li>
                                <li>
                                    <div class="icon socicon-wechat"></div>
                                    <input type="text" readonly="readonly" value="wechat">
                                </li>
                                <li>
                                    <div class="icon socicon-strava"></div>
                                    <input type="text" readonly="readonly" value="strava">
                                </li>
                                <li>
                                    <div class="icon socicon-line"></div>
                                    <input type="text" readonly="readonly" value="line">
                                </li>
                                <li>
                                    <div class="icon socicon-lyft"></div>
                                    <input type="text" readonly="readonly" value="lyft">
                                </li>
                                <li>
                                    <div class="icon socicon-uber"></div>
                                    <input type="text" readonly="readonly" value="uber">
                                </li>
                                <li>
                                    <div class="icon socicon-songkick"></div>
                                    <input type="text" readonly="readonly" value="songkick">
                                </li>
                                <li>
                                    <div class="icon socicon-viewbug"></div>
                                    <input type="text" readonly="readonly" value="viewbug">
                                </li>
                                <li>
                                    <div class="icon socicon-googlegroups"></div>
                                    <input type="text" readonly="readonly" value="googlegroups">
                                </li>
                                <li>
                                    <div class="icon socicon-quora"></div>
                                    <input type="text" readonly="readonly" value="quora">
                                </li>
                                <li>
                                    <div class="icon socicon-diablo"></div>
                                    <input type="text" readonly="readonly" value="diablo">
                                </li>
                                <li>
                                    <div class="icon socicon-blizzard"></div>
                                    <input type="text" readonly="readonly" value="blizzard">
                                </li>
                                <li>
                                    <div class="icon socicon-hearthstone"></div>
                                    <input type="text" readonly="readonly" value="hearthstone">
                                </li>
                                <li>
                                    <div class="icon socicon-heroes"></div>
                                    <input type="text" readonly="readonly" value="heroes">
                                </li>
                                <li>
                                    <div class="icon socicon-overwatch"></div>
                                    <input type="text" readonly="readonly" value="overwatch">
                                </li>
                                <li>
                                    <div class="icon socicon-warcraft"></div>
                                    <input type="text" readonly="readonly" value="warcraft">
                                </li>
                                <li>
                                    <div class="icon socicon-starcraft"></div>
                                    <input type="text" readonly="readonly" value="starcraft">
                                </li>
                                <li>
                                    <div class="icon socicon-beam"></div>
                                    <input type="text" readonly="readonly" value="beam">
                                </li>
                                <li>
                                    <div class="icon socicon-curse"></div>
                                    <input type="text" readonly="readonly" value="curse">
                                </li>
                                <li>
                                    <div class="icon socicon-player"></div>
                                    <input type="text" readonly="readonly" value="player">
                                </li>
                                <li>
                                    <div class="icon socicon-streamjar"></div>
                                    <input type="text" readonly="readonly" value="streamjar">
                                </li>
                                <li>
                                    <div class="icon socicon-nintendo"></div>
                                    <input type="text" readonly="readonly" value="nintendo">
                                </li>
                                <li>
                                    <div class="icon socicon-hellocoton"></div>
                                    <input type="text" readonly="readonly" value="hellocoton">
                                </li>
                            </ul>
                            <h4>Character mapping</h4>
                            <ul class="glyphs character-mapping">
                                <li>
                                    <div data-icon="&#xe000;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe000;">
                                </li>
                                <li>
                                    <div data-icon="&#xe001;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe001;">
                                </li>
                                <li>
                                    <div data-icon="&#xe002;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe002;">
                                </li>
                                <li>
                                    <div data-icon="&#xe003;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe003;">
                                </li>
                                <li>
                                    <div data-icon="&#xe004;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe004;">
                                </li>
                                <li>
                                    <div data-icon="&#xe005;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe005;">
                                </li>
                                <li>
                                    <div data-icon="&#xe006;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe006;">
                                </li>
                                <li>
                                    <div data-icon="&#xe007;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe007;">
                                </li>
                                <li>
                                    <div data-icon="&#xe008;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe008;">
                                </li>
                                <li>
                                    <div data-icon="&#xe009;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe009;">
                                </li>
                                <li>
                                    <div data-icon="&#xe00a;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe00a;">
                                </li>
                                <li>
                                    <div data-icon="&#xe00b;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe00b;">
                                </li>
                                <li>
                                    <div data-icon="&#xe00c;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe00c;">
                                </li>
                                <li>
                                    <div data-icon="&#xe00d;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe00d;">
                                </li>
                                <li>
                                    <div data-icon="&#xe00e;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe00e;">
                                </li>
                                <li>
                                    <div data-icon="&#xe00f;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe00f;">
                                </li>
                                <li>
                                    <div data-icon="&#xe010;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe010;">
                                </li>
                                <li>
                                    <div data-icon="&#xe011;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe011;">
                                </li>
                                <li>
                                    <div data-icon="&#xe012;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe012;">
                                </li>
                                <li>
                                    <div data-icon="&#xe013;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe013;">
                                </li>
                                <li>
                                    <div data-icon="&#xe014;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe014;">
                                </li>
                                <li>
                                    <div data-icon="&#xe015;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe015;">
                                </li>
                                <li>
                                    <div data-icon="&#xe016;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe016;">
                                </li>
                                <li>
                                    <div data-icon="&#xe017;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe017;">
                                </li>
                                <li>
                                    <div data-icon="&#xe018;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe018;">
                                </li>
                                <li>
                                    <div data-icon="&#xe019;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe019;">
                                </li>
                                <li>
                                    <div data-icon="&#xe01a;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe01a;">
                                </li>
                                <li>
                                    <div data-icon="&#xe01b;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe01b;">
                                </li>
                                <li>
                                    <div data-icon="&#xe01c;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe01c;">
                                </li>
                                <li>
                                    <div data-icon="&#xe01d;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe01d;">
                                </li>
                                <li>
                                    <div data-icon="&#xe01e;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe01e;">
                                </li>
                                <li>
                                    <div data-icon="&#xe01f;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe01f;">
                                </li>
                                <li>
                                    <div data-icon="&#xe020;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe020;">
                                </li>
                                <li>
                                    <div data-icon="&#xe021;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe021;">
                                </li>
                                <li>
                                    <div data-icon="&#xe022;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe022;">
                                </li>
                                <li>
                                    <div data-icon="&#xe023;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe023;">
                                </li>
                                <li>
                                    <div data-icon="&#xe024;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe024;">
                                </li>
                                <li>
                                    <div data-icon="&#xe025;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe025;">
                                </li>
                                <li>
                                    <div data-icon="&#xe026;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe026;">
                                </li>
                                <li>
                                    <div data-icon="&#xe027;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe027;">
                                </li>
                                <li>
                                    <div data-icon="&#xe028;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe028;">
                                </li>
                                <li>
                                    <div data-icon="&#xe029;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe029;">
                                </li>
                                <li>
                                    <div data-icon="&#xe02a;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe02a;">
                                </li>
                                <li>
                                    <div data-icon="&#xe02b;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe02b;">
                                </li>
                                <li>
                                    <div data-icon="&#xe02c;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe02c;">
                                </li>
                                <li>
                                    <div data-icon="&#xe02d;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe02d;">
                                </li>
                                <li>
                                    <div data-icon="&#xe02e;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe02e;">
                                </li>
                                <li>
                                    <div data-icon="&#xe02f;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe02f;">
                                </li>
                                <li>
                                    <div data-icon="&#xe030;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe030;">
                                </li>
                                <li>
                                    <div data-icon="&#xe031;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe031;">
                                </li>
                                <li>
                                    <div data-icon="&#xe032;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe032;">
                                </li>
                                <li>
                                    <div data-icon="&#xe033;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe033;">
                                </li>
                                <li>
                                    <div data-icon="&#xe034;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe034;">
                                </li>
                                <li>
                                    <div data-icon="&#xe035;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe035;">
                                </li>
                                <li>
                                    <div data-icon="&#xe036;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe036;">
                                </li>
                                <li>
                                    <div data-icon="&#xe037;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe037;">
                                </li>
                                <li>
                                    <div data-icon="&#xe038;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe038;">
                                </li>
                                <li>
                                    <div data-icon="&#xe039;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe039;">
                                </li>
                                <li>
                                    <div data-icon="&#xe03a;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe03a;">
                                </li>
                                <li>
                                    <div data-icon="&#xe03b;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe03b;">
                                </li>
                                <li>
                                    <div data-icon="&#xe03c;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe03c;">
                                </li>
                                <li>
                                    <div data-icon="&#xe03d;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe03d;">
                                </li>
                                <li>
                                    <div data-icon="&#xe03e;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe03e;">
                                </li>
                                <li>
                                    <div data-icon="&#xe03f;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe03f;">
                                </li>
                                <li>
                                    <div data-icon="&#xe040;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe040;">
                                </li>
                                <li>
                                    <div data-icon="&#xe041;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe041;">
                                </li>
                                <li>
                                    <div data-icon="&#xe042;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe042;">
                                </li>
                                <li>
                                    <div data-icon="&#xe043;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe043;">
                                </li>
                                <li>
                                    <div data-icon="&#xe044;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe044;">
                                </li>
                                <li>
                                    <div data-icon="&#xe045;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe045;">
                                </li>
                                <li>
                                    <div data-icon="&#xe046;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe046;">
                                </li>
                                <li>
                                    <div data-icon="&#xe047;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe047;">
                                </li>
                                <li>
                                    <div data-icon="&#xe048;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe048;">
                                </li>
                                <li>
                                    <div data-icon="&#xe049;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe049;">
                                </li>
                                <li>
                                    <div data-icon="&#xe04a;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe04a;">
                                </li>
                                <li>
                                    <div data-icon="&#xe04b;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe04b;">
                                </li>
                                <li>
                                    <div data-icon="&#xe04c;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe04c;">
                                </li>
                                <li>
                                    <div data-icon="&#xe04d;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe04d;">
                                </li>
                                <li>
                                    <div data-icon="&#xe04e;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe04e;">
                                </li>
                                <li>
                                    <div data-icon="&#xe04f;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe04f;">
                                </li>
                                <li>
                                    <div data-icon="&#xe050;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe050;">
                                </li>
                                <li>
                                    <div data-icon="&#xe051;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe051;">
                                </li>
                                <li>
                                    <div data-icon="&#xe052;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe052;">
                                </li>
                                <li>
                                    <div data-icon="&#xe053;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe053;">
                                </li>
                                <li>
                                    <div data-icon="&#xe054;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe054;">
                                </li>
                                <li>
                                    <div data-icon="&#xe055;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe055;">
                                </li>
                                <li>
                                    <div data-icon="&#xe056;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe056;">
                                </li>
                                <li>
                                    <div data-icon="&#xe058;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe058;">
                                </li>
                                <li>
                                    <div data-icon="&#xe059;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe059;">
                                </li>
                                <li>
                                    <div data-icon="&#xe05a;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe05a;">
                                </li>
                                <li>
                                    <div data-icon="&#xe05b;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe05b;">
                                </li>
                                <li>
                                    <div data-icon="&#xe05c;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe05c;">
                                </li>
                                <li>
                                    <div data-icon="&#xe05d;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe05d;">
                                </li>
                                <li>
                                    <div data-icon="&#xe05e;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe05e;">
                                </li>
                                <li>
                                    <div data-icon="&#xe05f;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe05f;">
                                </li>
                                <li>
                                    <div data-icon="&#xe060;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe060;">
                                </li>
                                <li>
                                    <div data-icon="&#xe061;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe061;">
                                </li>
                                <li>
                                    <div data-icon="&#xe062;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe062;">
                                </li>
                                <li>
                                    <div data-icon="&#xe063;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe063;">
                                </li>
                                <li>
                                    <div data-icon="&#xe064;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe064;">
                                </li>
                                <li>
                                    <div data-icon="&#xe065;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe065;">
                                </li>
                                <li>
                                    <div data-icon="&#xe066;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe066;">
                                </li>
                                <li>
                                    <div data-icon="&#xe067;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe067;">
                                </li>
                                <li>
                                    <div data-icon="&#xe068;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe068;">
                                </li>
                                <li>
                                    <div data-icon="&#xe069;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe069;">
                                </li>
                                <li>
                                    <div data-icon="&#xe06a;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe06a;">
                                </li>
                                <li>
                                    <div data-icon="&#xe06b;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe06b;">
                                </li>
                                <li>
                                    <div data-icon="&#xe06c;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe06c;">
                                </li>
                                <li>
                                    <div data-icon="&#xe06e;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe06e;">
                                </li>
                                <li>
                                    <div data-icon="&#xe06f;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe06f;">
                                </li>
                                <li>
                                    <div data-icon="&#xe070;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe070;">
                                </li>
                                <li>
                                    <div data-icon="&#xe071;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe071;">
                                </li>
                                <li>
                                    <div data-icon="&#xe072;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe072;">
                                </li>
                                <li>
                                    <div data-icon="&#xe074;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe074;">
                                </li>
                                <li>
                                    <div data-icon="&#xe075;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe075;">
                                </li>
                                <li>
                                    <div data-icon="&#xe076;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe076;">
                                </li>
                                <li>
                                    <div data-icon="&#xe077;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe077;">
                                </li>
                                <li>
                                    <div data-icon="&#xe078;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe078;">
                                </li>
                                <li>
                                    <div data-icon="&#xe079;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe079;">
                                </li>
                                <li>
                                    <div data-icon="&#xe07a;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe07a;">
                                </li>
                                <li>
                                    <div data-icon="&#xe07b;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe07b;">
                                </li>
                                <li>
                                    <div data-icon="&#xe07c;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe07c;">
                                </li>
                                <li>
                                    <div data-icon="&#xe07d;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe07d;">
                                </li>
                                <li>
                                    <div data-icon="&#xe07e;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe07e;">
                                </li>
                                <li>
                                    <div data-icon="&#xe06d;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe06d;">
                                </li>
                                <li>
                                    <div data-icon="&#xe07f;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe07f;">
                                </li>
                                <li>
                                    <div data-icon="&#xe080;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe080;">
                                </li>
                                <li>
                                    <div data-icon="&#xe081;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe081;">
                                </li>
                                <li>
                                    <div data-icon="&#xe082;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe082;">
                                </li>
                                <li>
                                    <div data-icon="&#xe057;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe057;">
                                </li>
                                <li>
                                    <div data-icon="&#xe083;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe083;">
                                </li>
                                <li>
                                    <div data-icon="&#xe084;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe084;">
                                </li>
                                <li>
                                    <div data-icon="&#xe086;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe086;">
                                </li>
                                <li>
                                    <div data-icon="&#xe087;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe087;">
                                </li>
                                <li>
                                    <div data-icon="&#xe088;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe088;">
                                </li>
                                <li>
                                    <div data-icon="&#xe089;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe089;">
                                </li>
                                <li>
                                    <div data-icon="&#xe08d;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe08d;">
                                </li>
                                <li>
                                    <div data-icon="&#xe090;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe090;">
                                </li>
                                <li>
                                    <div data-icon="&#xe091;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe091;">
                                </li>
                                <li>
                                    <div data-icon="&#xe092;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe092;">
                                </li>
                                <li>
                                    <div data-icon="&#xe093;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe093;">
                                </li>
                                <li>
                                    <div data-icon="&#xe094;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe094;">
                                </li>
                                <li>
                                    <div data-icon="&#xe095;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe095;">
                                </li>
                                <li>
                                    <div data-icon="&#xe096;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe096;">
                                </li>
                                <li>
                                    <div data-icon="&#xe097;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe097;">
                                </li>
                                <li>
                                    <div data-icon="&#xe098;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe098;">
                                </li>
                                <li>
                                    <div data-icon="&#xe099;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe099;">
                                </li>
                                <li>
                                    <div data-icon="&#xe09a;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe09a;">
                                </li>
                                <li>
                                    <div data-icon="&#xe09b;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe09b;">
                                </li>
                                <li>
                                    <div data-icon="&#xe09c;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe09c;">
                                </li>
                                <li>
                                    <div data-icon="&#xe09d;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe09d;">
                                </li>
                                <li>
                                    <div data-icon="&#xe09e;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe09e;">
                                </li>
                                <li>
                                    <div data-icon="&#xe09f;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe09f;">
                                </li>
                                <li>
                                    <div data-icon="&#xe0a0;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe0a0;">
                                </li>
                                <li>
                                    <div data-icon="&#xe073;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe073;">
                                </li>
                                <li>
                                    <div data-icon="&#xe085;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe085;">
                                </li>
                                <li>
                                    <div data-icon="&#xe0a1;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe0a1;">
                                </li>
                                <li>
                                    <div data-icon="&#xe08b;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe08b;">
                                </li>
                                <li>
                                    <div data-icon="&#xe08a;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe08a;">
                                </li>
                                <li>
                                    <div data-icon="&#xe08c;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe08c;">
                                </li>
                                <li>
                                    <div data-icon="&#xe08e;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe08e;">
                                </li>
                                <li>
                                    <div data-icon="&#xe08f;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe08f;">
                                </li>
                                <li>
                                    <div data-icon="&#xe0a2;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe0a2;">
                                </li>
                                <li>
                                    <div data-icon="&#xe0a3;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe0a3;">
                                </li>
                                <li>
                                    <div data-icon="&#xe0a4;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe0a4;">
                                </li>
                                <li>
                                    <div data-icon="&#xe0a5;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe0a5;">
                                </li>
                                <li>
                                    <div data-icon="&#xe0a6;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe0a6;">
                                </li>
                                <li>
                                    <div data-icon="&#xe0a7;" class="icon"></div>
                                    <input type="text" readonly="readonly" value="&amp;#xe0a7;">
                                </li>
                            </ul>
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
        <script>
            $(document).ready(function () {
                "use strict"; // Start of use strict
                var glyphs, i, len, ref;

                ref = document.getElementsByClassName('glyphs');
                for (i = 0, len = ref.length; i < len; i++) {
                    glyphs = ref[i];
                    glyphs.addEventListener('click', function (event) {
                        if (event.target.tagName === 'INPUT') {
                            return event.target.select();
                        }
                    });
                }

            });
        </script>
    </body>

<!-- Mirrored from thememinister.com/adminpage/theme/adminpage_v2.0/icon_socicon.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Oct 2023 10:41:13 GMT -->
</html>