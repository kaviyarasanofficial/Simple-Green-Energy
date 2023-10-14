<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from thememinister.com/adminpage/theme/adminpage_v2.0/icons_pe.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Oct 2023 10:41:12 GMT -->
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
                                <li class="active"><a href="icons_pe.php">Pe Icons</a></li>
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
                            <h1>Pixeden icon</h1>
                            <small>Complete 202 stroke icons - Pe-icon-7-stroke - 1.2.0</small>
                            <ol class="breadcrumb">
                                <li><a href="index.php"><i class="pe-7s-home"></i> Home</a></li>
                                <li><a href="#">Icons</a></li>
                                <li class="active">Pixeden icon</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->
                    <div class="row">
                        <!-- Pe-icon-7-stroke -->
                        <div class="col-sm-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Pixeden icon</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <p class="m-b-20">A series of iOS 7 inspired vector icons in a custom@font-face icon font that can be styled dynamically using CSS.
                                        Those retina ready icons have a very modern style that will beautifully complement any project.</p>
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-album"></i>
                                                <span class="icon-name">pe-7s-album</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-arc"></i>
                                                <span class="icon-name">pe-7s-arc</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-back-2"></i>
                                                <span class="icon-name">pe-7s-back-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-bandaid"></i>
                                                <span class="icon-name">pe-7s-bandaid</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-car"></i>
                                                <span class="icon-name">pe-7s-car</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-diamond"></i>
                                                <span class="icon-name">pe-7s-diamond</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-door-lock"></i>
                                                <span class="icon-name">pe-7s-door-lock</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-eyedropper"></i>
                                                <span class="icon-name">pe-7s-eyedropper</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-female"></i>
                                                <span class="icon-name">pe-7s-female</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-gym"></i>
                                                <span class="icon-name">pe-7s-gym</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-hammer"></i>
                                                <span class="icon-name">pe-7s-hammer</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-headphones"></i>
                                                <span class="icon-name">pe-7s-headphones</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-helm"></i>
                                                <span class="icon-name">pe-7s-helm</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-hourglass"></i>
                                                <span class="icon-name">pe-7s-hourglass</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-leaf"></i>
                                                <span class="icon-name">pe-7s-leaf</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-magic-wand"></i>
                                                <span class="icon-name">pe-7s-magic-wand</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-male"></i>
                                                <span class="icon-name">pe-7s-male</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-map-2"></i>
                                                <span class="icon-name">pe-7s-map-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-next-2"></i>
                                                <span class="icon-name">pe-7s-next-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-paint-bucket"></i>
                                                <span class="icon-name">pe-7s-paint-bucket</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-pendrive"></i>
                                                <span class="icon-name">pe-7s-pendrive</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-photo"></i>
                                                <span class="icon-name">pe-7s-photo</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-piggy"></i>
                                                <span class="icon-name">pe-7s-piggy</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-plugin"></i>
                                                <span class="icon-name">pe-7s-plugin</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-refresh-2"></i>
                                                <span class="icon-name">pe-7s-refresh-2</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-rocket"></i>
                                                <span class="icon-name">pe-7s-rocket</span>
                                            </div>
                                        </div> 
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-settings"></i>
                                                <span class="icon-name">pe-7s-settings</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-shield"></i>
                                                <span class="icon-name">pe-7s-shield</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-smile"></i>
                                                <span class="icon-name">pe-7s-smile</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-usb"></i>
                                                <span class="icon-name">pe-7s-usb</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-vector"></i>
                                                <span class="icon-name">pe-7s-vector</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-wine"></i>
                                                <span class="icon-name">pe-7s-wine</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-cloud-upload"></i>
                                                <span class="icon-name">pe-7s-cloud-upload</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-cash"></i>
                                                <span class="icon-name">pe-7s-cash</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-close"></i>
                                                <span class="icon-name">pe-7s-close</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-bluetooth"></i>
                                                <span class="icon-name">pe-7s-bluetooth</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-cloud-download"></i>
                                                <span class="icon-name">pe-7s-cloud-download</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-way"></i>
                                                <span class="icon-name">pe-7s-way</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-close-circle"></i>
                                                <span class="icon-name">pe-7s-close-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-id"></i>
                                                <span class="icon-name">pe-7s-id</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-angle-up"></i>
                                                <span class="icon-name">pe-7s-angle-up</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-wristwatch"></i>
                                                <span class="icon-name">pe-7s-wristwatch</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-angle-up-circle"></i>
                                                <span class="icon-name">pe-7s-angle-up-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-world"></i>
                                                <span class="icon-name">pe-7s-world</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-angle-right"></i>
                                                <span class="icon-name">pe-7s-angle-right</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-volume"></i>
                                                <span class="icon-name">pe-7s-volume</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-angle-right-circle"></i>
                                                <span class="icon-name">pe-7s-angle-right-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-users"></i>
                                                <span class="icon-name">pe-7s-users</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-angle-left"></i>
                                                <span class="icon-name">pe-7s-angle-left</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-user-female"></i>
                                                <span class="icon-name">pe-7s-user-female</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-angle-left-circle"></i>
                                                <span class="icon-name">pe-7s-angle-left-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-up-arrow"></i>
                                                <span class="icon-name">pe-7s-up-arrow</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-angle-down"></i>
                                                <span class="icon-name">pe-7s-angle-down</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-switch"></i>
                                                <span class="icon-name">pe-7s-switch</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-angle-down-circle"></i>
                                                <span class="icon-name">pe-7s-angle-down-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-scissors"></i>
                                                <span class="icon-name">pe-7s-scissors</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-wallet"></i>
                                                <span class="icon-name">pe-7s-wallet</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-safe"></i>
                                                <span class="icon-name">pe-7s-safe</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-volume2"></i>
                                                <span class="icon-name">pe-7s-volume2</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-volume1"></i>
                                                <span class="icon-name">pe-7s-volume1</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-voicemail"></i>
                                                <span class="icon-name">pe-7s-voicemail</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-video"></i>
                                                <span class="icon-name">pe-7s-video</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-user"></i>
                                                <span class="icon-name">pe-7s-user</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-upload"></i>
                                                <span class="icon-name">pe-7s-upload</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-unlock"></i>
                                                <span class="icon-name">pe-7s-unlock</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-umbrella"></i>
                                                <span class="icon-name">pe-7s-umbrella</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-trash"></i>
                                                <span class="icon-name">pe-7s-trash</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-tools"></i>
                                                <span class="icon-name">pe-7s-tools</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-timer"></i>
                                                <span class="icon-name">pe-7s-timer</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-ticket"></i>
                                                <span class="icon-name">pe-7s-ticket</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-target"></i>
                                                <span class="icon-name">pe-7s-target</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-sun"></i>
                                                <span class="icon-name">pe-7s-sun</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-study"></i>
                                                <span class="icon-name">pe-7s-study</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-stopwatch"></i>
                                                <span class="icon-name">pe-7s-stopwatch</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-star"></i>
                                                <span class="icon-name">pe-7s-star</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-speaker"></i>
                                                <span class="icon-name">pe-7s-speaker</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-signal"></i>
                                                <span class="icon-name">pe-7s-signal</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-shuffle"></i>
                                                <span class="icon-name">pe-7s-shuffle</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-shopbag"></i>
                                                <span class="icon-name">pe-7s-shopbag</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-share"></i>
                                                <span class="icon-name">pe-7s-share</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-server"></i>
                                                <span class="icon-name">pe-7s-server</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-search"></i>
                                                <span class="icon-name">pe-7s-search</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-film"></i>
                                                <span class="icon-name">pe-7s-film</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-science"></i>
                                                <span class="icon-name">pe-7s-science</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-disk"></i>
                                                <span class="icon-name">pe-7s-disk</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-ribbon"></i>
                                                <span class="icon-name">pe-7s-ribbon</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-repeat"></i>
                                                <span class="icon-name">pe-7s-repeat</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-refresh"></i>
                                                <span class="icon-name">pe-7s-refresh</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-add-user"></i>
                                                <span class="icon-name">pe-7s-add-user</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-refresh-cloud"></i>
                                                <span class="icon-name">pe-7s-refresh-cloud</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-paperclip"></i>
                                                <span class="icon-name">pe-7s-paperclip</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-radio"></i>
                                                <span class="icon-name">pe-7s-radio</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-note2"></i>
                                                <span class="icon-name">pe-7s-note2</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-print"></i>
                                                <span class="icon-name">pe-7s-print</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-network"></i>
                                                <span class="icon-name">pe-7s-network</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-prev"></i>
                                                <span class="icon-name">pe-7s-prev</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-mute"></i>
                                                <span class="icon-name">pe-7s-mute</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-power"></i>
                                                <span class="icon-name">pe-7s-power</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-medal"></i>
                                                <span class="icon-name">pe-7s-medal</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-portfolio"></i>
                                                <span class="icon-name">pe-7s-portfolio</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-like2"></i>
                                                <span class="icon-name">pe-7s-like2</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-plus"></i>
                                                <span class="icon-name">pe-7s-plus</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-left-arrow"></i>
                                                <span class="icon-name">pe-7s-left-arrow</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-play"></i>
                                                <span class="icon-name">pe-7s-play</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-key"></i>
                                                <span class="icon-name">pe-7s-key</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-plane"></i>
                                                <span class="icon-name">pe-7s-plane</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-joy"></i>
                                                <span class="icon-name">pe-7s-joy</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-photo-gallery"></i>
                                                <span class="icon-name">pe-7s-photo-gallery</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-pin"></i>
                                                <span class="icon-name">pe-7s-pin</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-phone"></i>
                                                <span class="icon-name">pe-7s-phone</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-plug"></i>
                                                <span class="icon-name">pe-7s-plug</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-pen"></i>
                                                <span class="icon-name">pe-7s-pen</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-right-arrow"></i>
                                                <span class="icon-name">pe-7s-right-arrow</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-paper-plane"></i>
                                                <span class="icon-name">pe-7s-paper-plane</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-delete-user"></i>
                                                <span class="icon-name">pe-7s-delete-user</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-paint"></i>
                                                <span class="icon-name">pe-7s-paint</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-bottom-arrow"></i>
                                                <span class="icon-name">pe-7s-bottom-arrow</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-notebook"></i>
                                                <span class="icon-name">pe-7s-notebook</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-note"></i>
                                                <span class="icon-name">pe-7s-note</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-next"></i>
                                                <span class="icon-name">pe-7s-next</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-news-paper"></i>
                                                <span class="icon-name">pe-7s-news-paper</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-musiclist"></i>
                                                <span class="icon-name">pe-7s-musiclist</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-music"></i>
                                                <span class="icon-name">pe-7s-music</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-mouse"></i>
                                                <span class="icon-name">pe-7s-mouse</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-more"></i>
                                                <span class="icon-name">pe-7s-more</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-moon"></i>
                                                <span class="icon-name">pe-7s-moon</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-monitor"></i>
                                                <span class="icon-name">pe-7s-monitor</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-micro"></i>
                                                <span class="icon-name">pe-7s-micro</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-menu"></i>
                                                <span class="icon-name">pe-7s-menu</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-map"></i>
                                                <span class="icon-name">pe-7s-map</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-map-marker"></i>
                                                <span class="icon-name">pe-7s-map-marker</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-mail"></i>
                                                <span class="icon-name">pe-7s-mail</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-mail-open"></i>
                                                <span class="icon-name">pe-7s-mail-open</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-mail-open-file"></i>
                                                <span class="icon-name">pe-7s-mail-open-file</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-magnet"></i>
                                                <span class="icon-name">pe-7s-magnet</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-loop"></i>
                                                <span class="icon-name">pe-7s-loop</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-look"></i>
                                                <span class="icon-name">pe-7s-look</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-lock"></i>
                                                <span class="icon-name">pe-7s-lock</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-lintern"></i>
                                                <span class="icon-name">pe-7s-lintern</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-link"></i>
                                                <span class="icon-name">pe-7s-link</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-like"></i>
                                                <span class="icon-name">pe-7s-like</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-light"></i>
                                                <span class="icon-name">pe-7s-light</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-less"></i>
                                                <span class="icon-name">pe-7s-less</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-keypad"></i>
                                                <span class="icon-name">pe-7s-keypad</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-junk"></i>
                                                <span class="icon-name">pe-7s-junk</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-info"></i>
                                                <span class="icon-name">pe-7s-info</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-home"></i>
                                                <span class="icon-name">pe-7s-home</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-help2"></i>
                                                <span class="icon-name">pe-7s-help2</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-help1"></i>
                                                <span class="icon-name">pe-7s-help1</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-graph3"></i>
                                                <span class="icon-name">pe-7s-graph3</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-graph2"></i>
                                                <span class="icon-name">pe-7s-graph2</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-graph1"></i>
                                                <span class="icon-name">pe-7s-graph1</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-graph"></i>
                                                <span class="icon-name">pe-7s-graph</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-global"></i>
                                                <span class="icon-name">pe-7s-global</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-gleam"></i>
                                                <span class="icon-name">pe-7s-gleam</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-glasses"></i>
                                                <span class="icon-name">pe-7s-glasses</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-gift"></i>
                                                <span class="icon-name">pe-7s-gift</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-folder"></i>
                                                <span class="icon-name">pe-7s-folder</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-flag"></i>
                                                <span class="icon-name">pe-7s-flag</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-filter"></i>
                                                <span class="icon-name">pe-7s-filter</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-file"></i>
                                                <span class="icon-name">pe-7s-file</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-expand1"></i>
                                                <span class="icon-name">pe-7s-expand1</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-exapnd2"></i>
                                                <span class="icon-name">pe-7s-exapnd2</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-edit"></i>
                                                <span class="icon-name">pe-7s-edit</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-drop"></i>
                                                <span class="icon-name">pe-7s-drop</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-drawer"></i>
                                                <span class="icon-name">pe-7s-drawer</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-download"></i>
                                                <span class="icon-name">pe-7s-download</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-display2"></i>
                                                <span class="icon-name">pe-7s-display2</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-display1"></i>
                                                <span class="icon-name">pe-7s-display1</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-diskette"></i>
                                                <span class="icon-name">pe-7s-diskette</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-date"></i>
                                                <span class="icon-name">pe-7s-date</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-cup"></i>
                                                <span class="icon-name">pe-7s-cup</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-culture"></i>
                                                <span class="icon-name">pe-7s-culture</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-crop"></i>
                                                <span class="icon-name">pe-7s-crop</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-credit"></i>
                                                <span class="icon-name">pe-7s-credit</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-copy-file"></i>
                                                <span class="icon-name">pe-7s-copy-file</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-config"></i>
                                                <span class="icon-name">pe-7s-config</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-compass"></i>
                                                <span class="icon-name">pe-7s-compass</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-comment"></i>
                                                <span class="icon-name">pe-7s-comment</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-coffee"></i>
                                                <span class="icon-name">pe-7s-coffee</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-cloud"></i>
                                                <span class="icon-name">pe-7s-cloud</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-cloc"></i>
                                                <span class="icon-name">pe-7s-clock</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-check"></i>
                                                <span class="icon-name">pe-7s-check</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-chat"></i>
                                                <span class="icon-name">pe-7s-chat</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-cart"></i>
                                                <span class="icon-name">pe-7s-cart</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-camera"></i>
                                                <span class="icon-name">pe-7s-camera</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-call"></i>
                                                <span class="icon-name">pe-7s-call</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-calculator"></i>
                                                <span class="icon-name">pe-7s-calculator</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-browser"></i>
                                                <span class="icon-name">pe-7s-browser</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-box2"></i>
                                                <span class="icon-name">pe-7s-box2</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-box1"></i>
                                                <span class="icon-name">pe-7s-box1</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-bookmarks"></i>
                                                <span class="icon-name">pe-7s-bookmarks</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-bicycle"></i>
                                                <span class="icon-name">pe-7s-bicycle</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-bell"></i>
                                                <span class="icon-name">pe-7s-bell</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-battery"></i>
                                                <span class="icon-name">pe-7s-battery</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-ball"></i>
                                                <span class="icon-name">pe-7s-ball</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-back"></i>
                                                <span class="icon-name">pe-7s-back</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-attention"></i>
                                                <span class="icon-name">pe-7s-attention</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-anchor"></i>
                                                <span class="icon-name">pe-7s-anchor</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-albums"></i>
                                                <span class="icon-name">pe-7s-albums</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-alarm"></i>
                                                <span class="icon-name">pe-7s-alarm</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out pe-7s-airplay"></i>
                                                <span class="icon-name">pe-7s-airplay</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-2 icon_box_width">
                                            <div class="icon_box">
                                                <i class="hvr-buzz-out"></i>
                                                <span class="icon-name"></span>
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

<!-- Mirrored from thememinister.com/adminpage/theme/adminpage_v2.0/icons_pe.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Oct 2023 10:41:12 GMT -->
</html>