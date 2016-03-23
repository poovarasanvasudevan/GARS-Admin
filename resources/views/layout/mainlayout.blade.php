<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $page_title or "AdminLTE Dashboard" }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="../node_modules/admin-lte/bootstrap/css/bootstrap.min.css" rel="stylesheet"
          type="text/css"/>
    <!-- Font Awesome Icons -->
    <link href="../node_modules/admin-lte/css/font-awesome.min.css"
          rel="stylesheet"
          type="text/css"/>
    <!-- Ionicons -->
    <link
            href="../node_modules/admin-lte/css/ionic.css"
            rel="stylesheet"
            type="text/css"/>
    <link
            href="../node_modules/admin-lte/css/style.css"
            rel="stylesheet"
            type="text/css"/>
    <!-- Theme style -->
    <link
            href="../node_modules/admin-lte/dist/css/AdminLTE.min.css"
            rel="stylesheet"
            type="text/css"/>
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="../node_modules/admin-lte/dist/css/skins/_all-skins.min.css" rel="stylesheet"
          type="text/css"/>

    <link rel="stylesheet" href="../node_modules/angular-tooltips/dist/angular-tooltips.min.css"/>
    <link rel="stylesheet" href="../node_modules/angular-wizard/dist/angular-wizard.min.css"/>
    <link rel="stylesheet" href="../node_modules/admin-lte/plugins/iCheck/all.css"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="fixed sidebar-mini skin-purple-light" ng-app="global">
<div class="wrapper" ng-controller="maincontroller">

    <!-- Header -->
    @yield("toolbar")


            <!-- Sidebar -->
    @include('layout.sidebar')

            <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{ $page_title or "Page Title" }}
                <small>{{ $page_description or null }}</small>
            </h1>
            <!-- You can dynamically generate breadcrumbs here -->
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            @yield('content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <!-- Footer -->
    @include('layout.footer2')

</div><!-- ./wrapper -->
<!-- jQuery 2.1.3 -->
<script src="../node_modules/admin-lte/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script src="../node_modules/admin-lte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="../node_modules/angular/angular.min.js"></script>
<script src="../node_modules/angular-wizard/dist/angular-wizard.min.js"></script>
<script src="../node_modules/angular-tooltips/dist/angular-tooltips.min.js"></script>
<script src="../node_modules/admin-lte/plugins/iCheck/icheck.min.js"></script>
<script src="../node_modules/myscript/main.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="../node_modules/admin-lte/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="../node_modules/admin-lte/dist/js/app.min.js" type="text/javascript"></script>
</body>
</html>