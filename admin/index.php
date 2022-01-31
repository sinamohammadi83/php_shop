<?php
    date_default_timezone_set("Asia/Tehran");
    $queryString = $_SERVER['QUERY_STRING'];
    include_once '../public/include/db.php';
    include_once '../Middleware/CheckPermissionMiddleware.php';
    $class_middleware = new CheckPermissionMiddleware();
    $class_middleware->middleware_auth();
    $class_middleware->middleware('admin-dashboard');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="public/images/favicon.ico">

    <title>Superieur Admin - Dashboard</title>

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="public/assets/vendor_components/bootstrap/dist/css/bootstrap.css">

    <!-- Bootstrap extend-->
    <link rel="stylesheet" href="public/css/bootstrap-extend.css">

    <!-- theme style -->
    <link rel="stylesheet" href="public/css/master_style.css">

    <!-- Superieur Admin skins -->
    <link rel="stylesheet" href="public/css/skins/_all-skins.css">

    <!-- daterange picker -->
    <link rel="stylesheet" href="public/assets/vendor_components/bootstrap-daterangepicker/daterangepicker.css">

    <!-- Morris charts -->
    <link rel="stylesheet" href="public/assets/vendor_components/morris.js/morris.css">

    <!-- Data Table-->
    <link rel="stylesheet" type="text/css" href="public/assets/vendor_components/datatable/datatables.min.css"/>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body class="hold-transition skin-info-light sidebar-mini rtl">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="index.html" class="logo">
            <!-- mini logo -->
            <div class="logo-mini">
                <span class="light-logo"><img src="public/images/logo-light.png" alt="logo"></span>
                <span class="dark-logo"><img src="public/images/logo-dark.png" alt="logo"></span>
            </div>
            <!-- logo-->
            <div class="logo-lg">
                <span class="light-logo"><img src="public/images/logo-light-text.png" alt="logo"></span>
                <span class="dark-logo"><img src="public/images/logo-dark-text.png" alt="logo"></span>
            </div>
        </a>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <div>
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
            </div>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <li class="search-box">
                        <a class="nav-link hidden-sm-down" href="javascript:void(0)"><i class="mdi mdi-magnify"></i></a>
                        <form class="app-search" style="display: none;">
                            <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                        </form>
                    </li>
                    <!-- User Account-->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="public/images/avatar/7.jpg" class="user-image rounded-circle" alt="User Image">
                        </a>
                        <ul class="dropdown-menu animated flipInY">
                            <!-- User image -->
                            <li class="user-header bg-img" style="background-image: url(../images/user-info.jpg)" data-overlay="3">
                                <div class="flexbox align-self-center">
                                    <img src="public/images/avatar/7.jpg" class="float-left rounded-circle" alt="User Image">
                                    <h4 class="user-name align-self-center">
                                        <span>Samuel Brus</span>
                                        <small>samuel@gmail.com</small>
                                    </h4>
                                </div>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-person"></i> My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-bag"></i> My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-email-unread"></i> Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-settings"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ion-log-out"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="p-10"><a href="javascript:void(0)" class="btn btn-sm btn-rounded btn-success">View Profile</a></div>
                            </li>
                        </ul>
                    </li>

                    <!-- Messages -->
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="mdi mdi-email"></i>
                        </a>
                        <ul class="dropdown-menu animated fadeInDown">

                            <li class="header">
                                <div class="bg-img text-white p-20" style="background-image: url(../images/user-info.jpg)" data-overlay="5">
                                    <div class="flexbox">
                                        <div>
                                            <h3 class="mb-0 mt-0">5 New</h3>
                                            <span class="font-light">Messages</span>
                                        </div>
                                        <div class="font-size-40">
                                            <i class="mdi mdi-email-alert"></i>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu sm-scrol">
                                    <li><!-- start message -->
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="public/images/user2-160x160.jpg" class="rounded-circle" alt="User Image">
                                            </div>
                                            <div class="mail-contnet">
                                                <h4>
                                                    Lorem Ipsum
                                                    <small><i class="fa fa-clock-o"></i> 15 mins</small>
                                                </h4>
                                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="public/images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
                                            </div>
                                            <div class="mail-contnet">
                                                <h4>
                                                    Nullam tempor
                                                    <small><i class="fa fa-clock-o"></i> 4 hours</small>
                                                </h4>
                                                <span>Curabitur facilisis erat quis metus congue viverra.</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="public/images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
                                            </div>
                                            <div class="mail-contnet">
                                                <h4>
                                                    Proin venenatis
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <span>Vestibulum nec ligula nec quam sodales rutrum sed luctus.</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="public/images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
                                            </div>
                                            <div class="mail-contnet">
                                                <h4>
                                                    Praesent suscipit
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <span>Curabitur quis risus aliquet, luctus arcu nec, venenatis neque.</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="public/images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
                                            </div>
                                            <div class="mail-contnet">
                                                <h4>
                                                    Donec tempor
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <span>Praesent vitae tellus eget nibh lacinia pretium.</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#" class="text-white bg-info">See all e-Mails</a></li>
                        </ul>
                    </li>
                    <!-- Notifications -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="mdi mdi-bell"></i>
                        </a>
                        <ul class="dropdown-menu animated fadeInDown">

                            <li class="header">
                                <div class="bg-img text-white p-20" style="background-image: url(../images/user-info.jpg)" data-overlay="5">
                                    <div class="flexbox">
                                        <div>
                                            <h3 class="mb-0 mt-0">7 New</h3>
                                            <span class="font-light">Notifications</span>
                                        </div>
                                        <div class="font-size-40">
                                            <i class="mdi mdi-message-alert"></i>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu sm-scrol">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-primary"></i> Nunc fringilla lorem
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#" class="text-white bg-danger">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks-->
                    <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="mdi mdi-bulletin-board"></i>
                        </a>
                        <ul class="dropdown-menu animated fadeInDown">

                            <li class="header">
                                <div class="bg-img text-white p-20" style="background-image: url(../images/user-info.jpg)" data-overlay="5">
                                    <div class="flexbox">
                                        <div>
                                            <h3 class="mb-0 mt-0">6 New</h3>
                                            <span class="font-light">Tasks</span>
                                        </div>
                                        <div class="font-size-40">
                                            <i class="mdi mdi-bulletin-board"></i>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu sm-scrol">
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Lorem ipsum dolor sit amet
                                                <small class="pull-right">30%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-danger" style="width: 30%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">30% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Vestibulum nec ligula
                                                <small class="pull-right">20%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-info" style="width: 20%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Donec id leo ut ipsum
                                                <small class="pull-right">70%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-success" style="width: 70%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">70% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Praesent vitae tellus
                                                <small class="pull-right">40%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-warning" style="width: 40%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">40% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Nam varius sapien
                                                <small class="pull-right">80%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-primary" style="width: 80%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">80% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Nunc fringilla
                                                <small class="pull-right">90%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-info" style="width: 90%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">90% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                </ul>
                            </li>
                            <li class="footer"><a href="#" class="text-white bg-warning">View all tasks</a></li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar-->
        <section class="sidebar">

            <!-- sidebar menu-->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="user-profile treeview">
                    <a href="index.html">
                        <img src="public/images/avatar/7.jpg" alt="user">
                        <span>
				<span class="d-block font-weight-600 font-size-16">Samuel Brus</span>
				<span class="email-id">samuel@gmail.com</span>
			  </span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="javascript:void()"><i class="fa fa-user mr-5"></i>My Profile </a></li>
                        <li><a href="javascript:void()"><i class="fa fa-money mr-5"></i>My Balance</a></li>
                        <li><a href="javascript:void()"><i class="fa fa-envelope-open mr-5"></i>Inbox</a></li>
                        <li><a href="javascript:void()"><i class="fa fa-cog mr-5"></i>Account Setting</a></li>
                        <li><a href="javascript:void()"><i class="fa fa-power-off mr-5"></i>Logout</a></li>
                    </ul>
                </li>
                <li class="header nav-small-cap"><i class="mdi mdi-drag-horizontal mr-5"></i>PERSONAL</li>

                <?php if ($class_middleware->gate('read-category') || $class_middleware->gate('create-category')): ?>
                    <li class="treeview <?php if ($queryString == 'c=category&a=add' || $queryString == 'c=category&a=list') { echo 'active';} ?>">
                        <a href="#">
                            <i class="mdi mdi-apps"></i>
                            <span>دسته بندی</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <?php if ($class_middleware->gate('create-category')): ?>
                                <li class="<?php if ($queryString == 'c=category&a=add') { echo 'active';} ?>"><a href="index.php?c=category&a=add"><i class="mdi mdi-toggle-switch-off"></i>ایجاد</a></li>
                            <?php endif; ?>
                            <?php if ($class_middleware->gate('read-category')): ?>
                                <li class="<?php if ($queryString == 'c=category&a=list') { echo 'active';} ?>"><a href="index.php?c=category&a=list"><i class="mdi mdi-toggle-switch-off"></i>لیست</a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
                <?php endif; ?>

                <?php if ($class_middleware->gate('read-brand') || $class_middleware->gate('create-brand')): ?>
                    <li class="treeview <?php if ($queryString == 'c=brand&a=add' || $queryString == 'c=brand&a=list') { echo 'active';} ?>">
                        <a href="#">
                            <i class="mdi mdi-apps"></i>
                            <span>برند</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <?php if ($class_middleware->gate('create-brand')): ?>
                                <li class="<?php if ($queryString == 'c=brand&a=add') { echo 'active';} ?>"><a href="index.php?c=brand&a=add"><i class="mdi mdi-toggle-switch-off"></i>ایجاد</a></li>
                            <?php endif; ?>
                            <?php if ($class_middleware->gate('read-brand')): ?>
                                <li class="<?php if ($queryString == 'c=brand&a=list') { echo 'active';} ?>"><a href="index.php?c=brand&a=list"><i class="mdi mdi-toggle-switch-off"></i>لیست</a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
                <?php endif; ?>

                <?php if($class_middleware->gate('update-settingadmin') || $class_middleware->gate('update-settinguser') || $class_middleware->gate('update-settingsite')): ?>
                    <li class="treeview <?php if ($queryString == 'c=setting&a=admin' || $queryString == 'c=setting&a=user' || $queryString == 'c=setting&a=site') { echo 'active';} ?>">
                        <a href="#">
                            <i class="mdi mdi-apps"></i>
                            <span>تنظیمات</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="<?php if ($queryString == 'c=setting&a=admin') { echo 'active';} ?>"><a href="index.php?c=setting&a=admin"><i class="mdi mdi-toggle-switch-off"></i>پنل ادمین</a></li>
                            <li><a href="index.php?c=setting&a=user"><i class="mdi mdi-toggle-switch-off"></i>پنل کاربر</a></li>
                            <li><a href="index.php?c=setting&a=site"><i class="mdi mdi-toggle-switch-off"></i>سایت</a></li>
                        </ul>
                    </li>
                <?php endif; ?>

                <?php if ($class_middleware->gate('read-product') || $class_middleware->gate('create-product')): ?>
                    <li class="treeview <?php if ($queryString == 'c=product&a=add' || $queryString == 'c=product&a=list') { echo 'active';} ?>">
                        <a href="#">
                            <i class="mdi mdi-apps"></i>
                            <span>محصول</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <?php if ($class_middleware->gate('create-product')): ?>
                            <li class="<?php if ($queryString == 'c=product&a=add') { echo 'active';} ?>"><a href="index.php?c=product&a=add"><i class="mdi mdi-toggle-switch-off"></i>ایجاد</a></li>
                            <?php endif; ?>
                            <?php if ($class_middleware->gate('read-product')): ?>
                            <li class="<?php if ($queryString == 'c=product&a=list') { echo 'active';} ?>"><a href="index.php?c=product&a=list"><i class="mdi mdi-toggle-switch-off"></i>لیست</a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
                <?php endif; ?>

                <?php if ($class_middleware->gate('read-role') || $class_middleware->gate('create-role')): ?>
                    <li class="treeview <?php if ($queryString == 'c=role&a=add' || $queryString == 'c=role&a=list') { echo 'active';} ?>">
                        <a href="#">
                            <i class="mdi mdi-apps"></i>
                            <span>نقش</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                            <?php if ($class_middleware->gate('create-role')): ?>
                                <li class="<?php if ($queryString == 'c=role&a=add') { echo 'active';} ?>"><a href="index.php?c=role&a=add"><i class="mdi mdi-toggle-switch-off"></i>ایجاد</a></li>
                            <?php endif; ?>
                            <?php if ($class_middleware->gate('read-role')): ?>
                                <li class="<?php if ($queryString == 'c=role&a=list') { echo 'active';} ?>"><a href="index.php?c=role&a=list"><i class="mdi mdi-toggle-switch-off"></i>لیست</a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
                <?php endif; ?>

                <?php if ($class_middleware->gate('read-user') || $class_middleware->gate('create-user')): ?>
                    <li class="treeview <?php if ($queryString == 'c=user&a=add' || $queryString == 'c=user&a=list') { echo 'active';} ?>">
                        <a href="#">
                            <i class="mdi mdi-apps"></i>
                            <span>کاربر</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                            <?php if ($class_middleware->gate('create-user')): ?>
                                <li class="<?php if ($queryString == 'c=user&a=add') { echo 'active';} ?>"><a href="index.php?c=user&a=add"><i class="mdi mdi-toggle-switch-off"></i>ایجاد</a></li>
                            <?php endif; ?>
                            <?php if ($class_middleware->gate('read-user')): ?>
                                <li class="<?php if ($queryString == 'c=user&a=list') { echo 'active';} ?>"><a href="index.php?c=user&a=list"><i class="mdi mdi-toggle-switch-off"></i>لیست</a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
                <?php endif; ?>

                <?php if ($class_middleware->gate('read-slider') || $class_middleware->gate('create-slider')): ?>
                    <li class="treeview <?php if ($queryString == 'c=slider&a=add' || $queryString == 'c=slider&a=list') { echo 'active';} ?>">
                        <a href="#">
                            <i class="mdi mdi-apps"></i>
                            <span>اسلایدر</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                            <?php if ($class_middleware->gate('create-slider')): ?>
                                <li class="<?php if ($queryString == 'c=slider&a=add') { echo 'active';} ?>"><a href="index.php?c=slider&a=add"><i class="mdi mdi-toggle-switch-off"></i>ایجاد</a></li>
                            <?php endif; ?>
                            <?php if ($class_middleware->gate('read-slider')): ?>
                                <li class="<?php if ($queryString == 'c=slider&a=list') { echo 'active';} ?>"><a href="index.php?c=slider&a=list"><i class="mdi mdi-toggle-switch-off"></i>لیست</a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
                <?php endif; ?>

                <?php if ($class_middleware->gate('read-property_group') || $class_middleware->gate('create-property_group')): ?>
                    <li class="treeview <?php if ($queryString == 'c=propertyGroup&a=add' || $queryString == 'c=propertyGroup&a=list') { echo 'active';} ?>">
                        <a href="#">
                            <i class="mdi mdi-apps"></i>
                            <span>گروه مشخصات</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                            <?php if ($class_middleware->gate('create-property_group')): ?>
                                <li class="<?php if ($queryString == 'c=propertyGroup&a=add') { echo 'active';} ?>"><a href="index.php?c=propertyGroup&a=add"><i class="mdi mdi-toggle-switch-off"></i>ایجاد</a></li>
                            <?php endif; ?>
                            <?php if ($class_middleware->gate('read-property_group')): ?>
                                <li class="<?php if ($queryString == 'c=propertyGroup&a=list') { echo 'active';} ?>"><a href="index.php?c=propertyGroup&a=list"><i class="mdi mdi-toggle-switch-off"></i>لیست</a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
                <?php endif; ?>

                <?php if ($class_middleware->gate('read-property') || $class_middleware->gate('create-property')): ?>
                    <li class="treeview <?php if ($queryString == 'c=property&a=add' || $queryString == 'c=property&a=list') { echo 'active';} ?>">
                        <a href="#">
                            <i class="mdi mdi-apps"></i>
                            <span>مشخصات</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                            <?php if ($class_middleware->gate('create-property')): ?>
                                <li class="<?php if ($queryString == 'c=property&a=add') { echo 'active';} ?>"><a href="index.php?c=property&a=add"><i class="mdi mdi-toggle-switch-off"></i>ایجاد</a></li>
                            <?php endif; ?>
                            <?php if ($class_middleware->gate('read-property')): ?>
                                <li class="<?php if ($queryString == 'c=property&a=list') { echo 'active';} ?>"><a href="index.php?c=property&a=list"><i class="mdi mdi-toggle-switch-off"></i>لیست</a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
                <?php endif; ?>

                <?php if ($class_middleware->gate('read-offer') || $class_middleware->gate('create-offer')): ?>
                    <li class="treeview <?php if ($queryString == 'c=offer&a=add' || $queryString == 'c=offer&a=list') { echo 'active';} ?>">
                        <a href="#">
                            <i class="mdi mdi-apps"></i>
                            <span>تخفیف</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                            <?php if ($class_middleware->gate('create-offer')): ?>
                                <li class="<?php if ($queryString == 'c=offer&a=add') { echo 'active';} ?>"><a href="index.php?c=offer&a=add"><i class="mdi mdi-toggle-switch-off"></i>ایجاد</a></li>
                            <?php endif; ?>
                            <?php if ($class_middleware->gate('read-offer')): ?>
                                <li class="<?php if ($queryString == 'c=offer&a=list') { echo 'active';} ?>"><a href="index.php?c=offer&a=list"><i class="mdi mdi-toggle-switch-off"></i>لیست</a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
                <?php endif; ?>

                <li>
                    <a href="pages/auth_login.html">
                        <i class="mdi mdi-directions"></i>
                        <span>Log Out</span>
                    </a>
                </li>

            </ul>
        </section>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <?php
            function dd($value)
            {
                var_dump($value);die();
            }
            function delete_image($image)
            {
                 unlink('../'.$image);
            }
            function uploder($image,$Directory,$rand=false)
            {
                if (!is_dir('../public/uploads/'.$Directory.'/'))
                {
                    mkdir('../public/uploads/'.$Directory.'/');
                }
                $name=$image['name'];
                if ($rand)
                {
                    $charecters = 'qwertyuiiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
                    $randomch='';
                    for ($i=0;$i<=40;$i++)
                    {
                        $randomch .= $charecters[rand(0,strlen($charecters)-1)];
                    }
                    $exp=explode('.',$name);
                    $end=end($exp);
                    $newname=$randomch . '.' . $end;
                    $baseaddress = '../public/uploads/'.$Directory.'/'.$newname;
                    $returnadd='public/uploads/'.$Directory.'/'.$newname;
                }else{
                    $imagename=$image['name'];
                    $baseaddress = '../public/uploads/'.$Directory.'/'.$imagename;
                    $returnadd='public/uploads/'.$Directory.'/'.$imagename;
                }

                $tmp=$image['tmp_name'];
                move_uploaded_file($tmp,$baseaddress);
                return $returnadd;
            }

            @$c=$_GET['c']?$_GET['c']:'index';
            @$a=$_GET['a']?$_GET['a']:'index';
            if (file_exists("controller/C$c.php"))
            {
                include_once "controller/C$c.php";
            }
            ?>
        </div>

    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right d-none d-sm-inline-block">
            <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Purchase Now</a>
                </li>
            </ul>
        </div>
        &copy; 2019 <a href="https://www.multipurposethemes.com/">Multi-Purpose Themes</a>. All Rights Reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-light">

        <div class="rpanel-title"><span class="btn pull-right"><i class="ion ion-close" data-toggle="control-sidebar"></i></span> </div>
        <!-- Create the tabs -->
        <ul class="nav nav-tabs control-sidebar-tabs">
            <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab">Tasks</a></li>
            <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab">General</a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-birthday-cake bg-danger"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Admin Birthday</h4>

                                <p>Will be July 24th</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-user bg-warning"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Jhone Updated His Profile</h4>

                                <p>New Email : jhone_doe@demo.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-envelope-o bg-info"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Disha Joined Mailing List</h4>

                                <p>disha@demo.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-file-code-o bg-success"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Code Change</h4>

                                <p>Execution time 15 Days</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Web Design
                                <span class="label label-danger pull-right">40%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 40%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Update Data
                                <span class="label label-success pull-right">75%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-success" style="width: 75%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Order Process
                                <span class="label label-warning pull-right">89%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-warning" style="width: 89%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Development
                                <span class="label label-primary pull-right">72%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-primary" style="width: 72%"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>

                    <div class="form-group">
                        <input type="checkbox" id="report_panel" class="chk-col-grey" >
                        <label for="report_panel" class="control-sidebar-subheading ">Report panel usage</label>

                        <p>
                            general settings information
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <input type="checkbox" id="allow_mail" class="chk-col-grey" >
                        <label for="allow_mail" class="control-sidebar-subheading ">Mail redirect</label>

                        <p>
                            Other sets of options are available
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <input type="checkbox" id="expose_author" class="chk-col-grey" >
                        <label for="expose_author" class="control-sidebar-subheading ">Expose author name</label>

                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <h3 class="control-sidebar-heading">Chat Settings</h3>

                    <div class="form-group">
                        <input type="checkbox" id="show_me_online" class="chk-col-grey" >
                        <label for="show_me_online" class="control-sidebar-subheading ">Show me as online</label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <input type="checkbox" id="off_notifications" class="chk-col-grey" >
                        <label for="off_notifications" class="control-sidebar-subheading ">Turn off notifications</label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            <a href="javascript:void(0)" class="text-red margin-r-5"><i class="fa fa-trash-o"></i></a>
                            Delete chat history
                        </label>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->



<!-- jQuery 3 -->
<script src="public/assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>

<!-- jQuery UI 1.11.4 -->
<script src="public/assets/vendor_components/jquery-ui/jquery-ui.js"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>

<!-- popper -->
<script src="public/assets/vendor_components/popper/dist/popper.min.js"></script>

<!-- date-range-picker -->
<script src="public/assets/vendor_components/moment/min/moment.min.js"></script>
<script src="public/assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Bootstrap 4.0-->
<script src="public/assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>

<!-- ChartJS -->
<script src="public/assets/vendor_components/chart.js-master/Chart.min.js"></script>

<!-- Slimscroll -->
<script src="public/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- FastClick -->
<script src="public/assets/vendor_components/fastclick/lib/fastclick.js"></script>

<!-- Morris.js charts -->
<script src="public/assets/vendor_components/raphael/raphael.min.js"></script>
<script src="public/assets/vendor_components/morris.js/morris.min.js"></script>

<!-- This is data table -->
<script src="public/assets/vendor_components/datatable/datatables.min.js"></script>

<!-- Superieur Admin App -->
<script src="public/js/template.js"></script>

<!-- Superieur Admin dashboard demo (This is only for demo purposes) -->
<script src="public/js/pages/dashboard.js"></script>

<!-- Superieur Admin for demo purposes -->
<script src="public/js/demo.js"></script>


</body>
</html>
