<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('page-title', 'Page Title') - Tyloo.fr Backend</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <link href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <link href="{{ asset('assets/backend/css/AdminLTE.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend/css/skins/skin-blue.min.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper">
    <!-- Main Header -->
    <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
            <!-- Mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>T</b>.fr</span>
            <!-- Logo for regular state and mobile devices -->
            <span class="logo-lg"><b>TYLOO</b>.fr</span>
        </a>
        <!-- /Logo -->

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="{{ asset('assets/backend/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs">{{ $user->name }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="{{ asset('assets/backend/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">

                                <p>
                                    {{ $user->name }}
                                    <small>{{ $user->role() }}</small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- /Main Header -->

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ asset('assets/backend/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>{{ $user->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <!-- search form (Optional) -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </form>

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">
                <li class="header">HEADER</li>
                <!-- Optionally, you can add icons to the links -->
                <li class="active"><a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                <li class="treeview">
                    <a href="{{ URL::route('admin.blog.index') }}"><i class="fa fa-files-o"></i> <span>Blog</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="{{ URL::route('admin.blog.index') }}"><i class="fa fa-eye"></i> List Posts</a></li>
                        <li><a href="{{ URL::route('admin.blog.create') }}"><i class="fa fa-plus"></i> Add a Post</a></li>
                        <li class="treeview">
                            <a href="{{ URL::route('admin.tags.index') }}"><i class="fa fa-tags"></i> <span>Tags</span> <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="{{ URL::route('admin.tags.index') }}"><i class="fa fa-eye"></i> List Tags</a></li>
                                <li><a href="{{ URL::route('admin.tags.create') }}"><i class="fa fa-plus"></i> Add a Tag</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="{{ URL::route('admin.works.index') }}"><i class="fa fa-file-image-o"></i> <span>Works</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="{{ URL::route('admin.works.index') }}"><i class="fa fa-eye"></i> List Works</a></li>
                        <li><a href="{{ URL::route('admin.works.create') }}"><i class="fa fa-plus"></i> Add a Work</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="{{ URL::route('admin.users.index') }}"><i class="fa fa-users"></i> <span>Users</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="{{ URL::route('admin.users.index') }}"><i class="fa fa-eye"></i> List Users</a></li>
                        <li><a href="{{ URL::route('admin.users.create') }}"><i class="fa fa-plus"></i> Add an User</a></li>
                    </ul>
                </li>
                <li><a href="{{ URL::route('admin.settings.edit') }}"><i class="fa fa-cogs"></i> <span>Settings</span></a></li>
            </ul>
        </section>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>@yield('page-title', 'Page Header')</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
                <li class="active">@yield('breadcrumb-title', 'Dashboard')</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            @yield('content')
        </section>
    </div>

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
            Powered by Laravel &amp; AdminLTE
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 1988-2015 <a href="http://www.tyloo.fr">Tyloo.fr</a>.</strong> All rights reserved.
    </footer>
</div>

<script src="{{ asset('assets/frontend/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/app.min.js') }}"></script>
</body>
</html>
