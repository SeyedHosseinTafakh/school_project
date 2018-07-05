<!DOCTYPE html>
<html style="overflow-x:scroll;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('admin_panel/plugins/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('admin_panel/dist/css/adminlte.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('admin_panel/plugins/iCheck/flat/blue.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{asset('admin_panel/plugins/morris/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('admin_panel/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('admin_panel/plugins/datepicker/datepicker3.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('admin_panel/plugins/daterangepicker/daterangepicker-bs3.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('admin_panel/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    {{--<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">--}}
        {{--<!-- Left navbar links -->--}}
        {{--<ul class="navbar-nav">--}}
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>--}}
            {{--</li>--}}
        {{--</ul>--}}

        <!-- SEARCH FORM -->
        {{--<form class="form-inline ml-3">--}}
            {{--<div class="input-group input-group-sm">--}}
                {{--<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">--}}
                {{--<div class="input-group-append">--}}
                    {{--<button class="btn btn-navbar" type="submit">--}}
                        {{--<i class="fa fa-search"></i>--}}
                    {{--</button>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</form>--}}

        <!-- Right navbar links -->
        {{--<ul class="navbar-nav ml-auto">--}}
            {{--<!-- Messages Dropdown Menu -->--}}
            {{--<li class="nav-item dropdown">--}}
                {{--<a class="nav-link" data-toggle="dropdown" href="#">--}}
                    {{--<i class="fa fa-comments-o"></i>--}}
                    {{--<span class="badge badge-danger navbar-badge">3</span>--}}
                {{--</a>--}}
                {{--<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">--}}
                    {{--<a href="#" class="dropdown-item">--}}
                        {{--<!-- Message Start -->--}}
                        {{--<div class="media">--}}
                            {{--<img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">--}}
                            {{--<div class="media-body">--}}
                                {{--<h3 class="dropdown-item-title">--}}
                                    {{--Brad Diesel--}}
                                    {{--<span class="float-right text-sm text-danger"><i class="fa fa-star"></i></span>--}}
                                {{--</h3>--}}
                                {{--<p class="text-sm">Call me whenever you can...</p>--}}
                                {{--<p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- Message End -->--}}
                    {{--</a>--}}
                    {{--<div class="dropdown-divider"></div>--}}
                    {{--<a href="#" class="dropdown-item">--}}
                        {{--<!-- Message Start -->--}}
                        {{--<div class="media">--}}
                            {{--<img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">--}}
                            {{--<div class="media-body">--}}
                                {{--<h3 class="dropdown-item-title">--}}
                                    {{--John Pierce--}}
                                    {{--<span class="float-right text-sm text-muted"><i class="fa fa-star"></i></span>--}}
                                {{--</h3>--}}
                                {{--<p class="text-sm">I got your message bro</p>--}}
                                {{--<p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- Message End -->--}}
                    {{--</a>--}}
                    {{--<div class="dropdown-divider"></div>--}}
                    {{--<a href="#" class="dropdown-item">--}}
                        {{--<!-- Message Start -->--}}
                        {{--<div class="media">--}}
                            {{--<img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">--}}
                            {{--<div class="media-body">--}}
                                {{--<h3 class="dropdown-item-title">--}}
                                    {{--Nora Silvester--}}
                                    {{--<span class="float-right text-sm text-warning"><i class="fa fa-star"></i></span>--}}
                                {{--</h3>--}}
                                {{--<p class="text-sm">The subject goes here</p>--}}
                                {{--<p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- Message End -->--}}
                    {{--</a>--}}
                    {{--<div class="dropdown-divider"></div>--}}
                    {{--<a href="#" class="dropdown-item dropdown-footer">See All Messages</a>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<!-- Notifications Dropdown Menu -->--}}
            {{--<li class="nav-item dropdown">--}}
                {{--<a class="nav-link" data-toggle="dropdown" href="#">--}}
                    {{--<i class="fa fa-bell-o"></i>--}}
                    {{--<span class="badge badge-warning navbar-badge">15</span>--}}
                {{--</a>--}}
                {{--<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">--}}
                    {{--<span class="dropdown-item dropdown-header">15 Notifications</span>--}}
                    {{--<div class="dropdown-divider"></div>--}}
                    {{--<a href="#" class="dropdown-item">--}}
                        {{--<i class="fa fa-envelope mr-2"></i> 4 new messages--}}
                        {{--<span class="float-right text-muted text-sm">3 mins</span>--}}
                    {{--</a>--}}
                    {{--<div class="dropdown-divider"></div>--}}
                    {{--<a href="#" class="dropdown-item">--}}
                        {{--<i class="fa fa-users mr-2"></i> 8 friend requests--}}
                        {{--<span class="float-right text-muted text-sm">12 hours</span>--}}
                    {{--</a>--}}
                    {{--<div class="dropdown-divider"></div>--}}
                    {{--<a href="#" class="dropdown-item">--}}
                        {{--<i class="fa fa-file mr-2"></i> 3 new reports--}}
                        {{--<span class="float-right text-muted text-sm">2 days</span>--}}
                    {{--</a>--}}
                    {{--<div class="dropdown-divider"></div>--}}
                    {{--<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i--}}
                            {{--class="fa fa-th-large"></i></a>--}}
            {{--</li>--}}
        {{--</ul>--}}
    {{--</nav>--}}
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Alexander Pierce</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                Dashboard
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="pages/widgets.html" class="nav-link">
                            <i class="nav-icon fa fa-th"></i>
                            <p>
                                Widgets
                                <span class="right badge badge-danger">New</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-pie-chart"></i>
                            <p>
                                Charts
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/charts/chartjs.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>ChartJS</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/charts/flot.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Flot</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/charts/inline.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Inline</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-tree"></i>
                            <p>
                                UI Elements
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/UI/general.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>General</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/UI/icons.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Icons</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/UI/buttons.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Buttons</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/UI/sliders.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Sliders</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-edit"></i>
                            <p>
                                Forms
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/forms/general.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>General Elements</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/forms/advanced.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Advanced Elements</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/forms/editors.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Editors</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-table"></i>
                            <p>
                                Tables
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/tables/simple.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Simple Tables</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/tables/data.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Data Tables</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-header">EXAMPLES</li>
                    <li class="nav-item">
                        <a href="pages/calendar.html" class="nav-link">
                            <i class="nav-icon fa fa-calendar"></i>
                            <p>
                                Calendar
                                <span class="badge badge-info right">2</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-envelope-o"></i>
                            <p>
                                Mailbox
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/mailbox/mailbox.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Inbox</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/mailbox/compose.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Compose</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/mailbox/read-mail.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Read</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-book"></i>
                            <p>
                                Pages
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/examples/invoice.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Invoice</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/profile.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Profile</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/login.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Login</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/register.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Register</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/lockscreen.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Lockscreen</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-plus-square-o"></i>
                            <p>
                                Extras
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/examples/404.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Error 404</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/500.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Error 500</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/blank.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Blank Page</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="starter.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Starter Page</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-header">MISCELLANEOUS</li>
                    <li class="nav-item">
                        <a href="https://adminlte.io/docs" class="nav-link">
                            <i class="nav-icon fa fa-file"></i>
                            <p>Documentation</p>
                        </a>
                    </li>
                    <li class="nav-header">LABELS</li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-circle-o text-danger"></i>
                            <p class="text">Important</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-circle-o text-warning"></i>
                            <p>Warning</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-circle-o text-info"></i>
                            <p>Informational</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard hi</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v2</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                {{--<div class="row">--}}
                    {{--<div class="col-lg-3 col-6">--}}
                        {{--<!-- small box -->--}}
                        {{--<div class="small-box bg-info">--}}
                            {{--<div class="inner">--}}
                                {{--<h3>150</h3>--}}

                                {{--<p>New Orders</p>--}}
                            {{--</div>--}}
                            {{--<div class="icon">--}}
                                {{--<i class="ion ion-bag"></i>--}}
                            {{--</div>--}}
                            {{--<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- ./col -->--}}
                    {{--<div class="col-lg-3 col-6">--}}
                        {{--<!-- small box -->--}}
                        {{--<div class="small-box bg-success">--}}
                            {{--<div class="inner">--}}
                                {{--<h3>53<sup style="font-size: 20px">%</sup></h3>--}}

                                {{--<p>Bounce Rate</p>--}}
                            {{--</div>--}}
                            {{--<div class="icon">--}}
                                {{--<i class="ion ion-stats-bars"></i>--}}
                            {{--</div>--}}
                            {{--<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- ./col -->--}}
                    {{--<div class="col-lg-3 col-6">--}}
                        {{--<!-- small box -->--}}
                        {{--<div class="small-box bg-warning">--}}
                            {{--<div class="inner">--}}
                                {{--<h3>44</h3>--}}

                                {{--<p>User Registrations</p>--}}
                            {{--</div>--}}
                            {{--<div class="icon">--}}
                                {{--<i class="ion ion-person-add"></i>--}}
                            {{--</div>--}}
                            {{--<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- ./col -->--}}
                    {{--<div class="col-lg-3 col-6">--}}
                        {{--<!-- small box -->--}}
                        {{--<div class="small-box bg-danger">--}}
                            {{--<div class="inner">--}}
                                {{--<h3>65</h3>--}}

                                {{--<p>Unique Visitors</p>--}}
                            {{--</div>--}}
                            {{--<div class="icon">--}}
                                {{--<i class="ion ion-pie-graph"></i>--}}
                            {{--</div>--}}
                            {{--<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- ./col -->--}}
                {{--</div>--}}
                <!-- /.row -->
                <!-- Main row -->
                <div class="row">

                    <div class="row">
                        <div class="col-12">
                            <div class="card" style="direction: rtl;">
                                <div class="card-header">
                                    <h3 class="card-title">Responsive Hover Table</h3>

                                    <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>نام</th>
                                            <th>نام خانوادگی</th>
                                            {{--<th>نام مستعار</th>--}}
                                            <th>کد ملی</th>
                                            <th>وضعیت پرداخت</th>
                                            <th>اطلاعات بیشتر</th>
                                            {{--<th>تاریخ تولد</th>--}}
                                            {{--<th>شناسنامه حرف</th>--}}
                                            {{--<th>شناسنامه عدد</th>--}}
                                            {{--<th>شناسنامه رقمی</th>--}}
                                            {{--<th>روستا محل تولد</th>--}}
                                            {{--<th>استان محل تولد</th>--}}
                                            {{--<th>شهرستان محل تولد</th>--}}
                                            {{--<th>دین</th>--}}
                                            {{--<th>مذهب</th>--}}
                                            {{--<th>ادرس دقیق</th>--}}
                                            {{--<th>ادرس استان</th>--}}
                                            {{--<th>چندمین بچه ی خانواده</th>--}}
                                            {{--<th>ایمیل</th>--}}
                                            {{--<th>کد پستی</th>--}}
                                            {{--<th>محل صدور شناسنامه استان</th>--}}
                                            {{--<th>محل صدور شناسنامه شهرستان</th>--}}
                                            {{--<th>محل صدور شناسنامه بخش</th>--}}
                                            {{--<th>شماره تلفن منزل</th>--}}
                                            {{--<th>شماره زروری نام</th>--}}
                                            {{--<th>شماره زروری ثابت</th>--}}
                                            {{--<th>شماره زروری همراه</th>--}}
                                            {{--<th>شماره زروری نسبت با دانش اموز</th>--}}
                                        </tr>

                                        @foreach($users as $user)
                                        <tr>

                                            <td>{{$user->name}}</td>
                                            <td>                                            {{$user->last_name}}</td>
                                            {{--<td>{{$user->name_mostaar}}</td>--}}
                                            <td>{{$user->code_melli}}</td>
{{--                                            <td>{{array_sum($user->payments->pluck('amount')->to_array())}}</td>--}}
                                            <td>{{array_sum((array)$user->payments->pluck('amount'))}}</td>
                                            <td><a href="{{url('')

                                            }}"> اطلاعات بیشتر</a> </td>
                                            {{--<td>{{$user->tarikh_tavalod}}</td>--}}
                                            {{--<td>{{$user->shenasname_harf}}</td>--}}
                                            {{--<td>{{$user->shenasname_adad}}</td>--}}
                                            {{--<td>{{$user->shenasname_raghami}}</td>--}}
                                            {{--<td>{{$user->roosta_tavalod}}</td>--}}
                                            {{--<td>{{$user->ostane_tavalod}}</td>--}}
                                            {{--{{$user->shahrestane_tavalod}}--}}
                                            {{--{{$user->din}}--}}
                                            {{--{{$user->mazhab}}--}}
                                            {{--{{$user->address_daghigh}}--}}
                                            {{--{{$user->address_ostan}}--}}
                                            {{--{{$user->chandomin_bachehye_khanevade}}--}}
                                            {{--{{$user->email}}--}}
                                            {{--{{$user->code_posti}}--}}
                                            {{--{{$user->mahale_sodoore_ostan}}--}}
                                            {{--{{$user->mahale_sodoore_shahrestan}}--}}
                                            {{--{{$user->mahale_sodoore_bakhsh}}--}}
                                            {{--{{$user->phone_manzel}}--}}
                                            {{--{{$user->esme_phone_zaroori}}--}}
                                            {{--{{$user->phone_zaroori_sabet}}--}}
                                            {{--{{$user->phone_zaroori_hamrah}}--}}
                                            {{--{{$user->phone_zaroori_nesbat_ba_daneshamooz}}--}}
                                        </tr>
                                        @endforeach
                                        {{--<tr>--}}
                                            {{--<td>183</td>--}}
                                            {{--<td>John Doe</td>--}}
                                            {{--<td>11-7-2014</td>--}}
                                            {{--<td><span class="tag tag-success">Approved</span></td>--}}
                                            {{--<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>--}}
                                        {{--</tr>--}}
                                    </table>
                                </div>
                    {{--@foreach($users as $user)--}}
                    {{--{{$user->name}}--}}
                    {{--{{$user->last_name}}--}}
                    {{--{{$user->name_mostaar}}--}}
                    {{--{{$user->code_melli}}--}}
                    {{--{{$user->tarikh_tavalod}}--}}
                    {{--{{$user->shenasname_harf}}--}}
                    {{--{{$user->shenasname_adad}}--}}
                    {{--{{$user->shenasname_raghami}}--}}
                    {{--{{$user->roosta_tavalod}}--}}
                    {{--{{$user->ostane_tavalod}}--}}
                    {{--{{$user->shahrestane_tavalod}}--}}
                    {{--{{$user->din}}--}}
                    {{--{{$user->mazhab}}--}}
                    {{--{{$user->address_daghigh}}--}}
                    {{--{{$user->address_ostan}}--}}
                    {{--{{$user->chandomin_bachehye_khanevade}}--}}
                    {{--{{$user->email}}--}}
                    {{--{{$user->code_posti}}--}}
                    {{--{{$user->mahale_sodoore_ostan}}--}}
                    {{--{{$user->mahale_sodoore_shahrestan}}--}}
                    {{--{{$user->mahale_sodoore_bakhsh}}--}}
                    {{--{{$user->phone_manzel}}--}}
                    {{--{{$user->esme_phone_zaroori}}--}}
                    {{--{{$user->phone_zaroori_sabet}}--}}
                    {{--{{$user->phone_zaroori_hamrah}}--}}
                    {{--{{$user->phone_zaroori_nesbat_ba_daneshamooz}}--}}
                    {{--@endforeach--}}
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- Control Sidebar -->
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('admin_panel/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin_panel/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{asset('admin_panel/plugins/morris/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('admin_panel/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('admin_panel/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('admin_panel/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('admin_panel/plugins/knob/jquery.knob.js')}}"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="{{asset('admin_panel/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('admin_panel/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('admin_panel/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('admin_panel/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('admin_panel/plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin_panel/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('admin_panel/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin_panel/dist/js/demo.js')}}"></script>
</body>
</html>
