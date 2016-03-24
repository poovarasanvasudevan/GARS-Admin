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

    <link
            href="../node_modules/admin-lte/css/tiny-calendar.min.css"
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

    <link rel="stylesheet" href="../node_modules/angular-tooltips/dist/angular-tooltips.min.css" />
    <link rel="stylesheet" href="../node_modules/angular-wizard/dist/angular-wizard.min.css" />
    <link rel="stylesheet" href="../node_modules/admin-lte/plugins/iCheck/all.css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="skin-purple-light fixed body" ng-app="global">
<div class="content-wrapper" ng-controller="maincontroller" style="margin-left: 0px; height: 100%;">