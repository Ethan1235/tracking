<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NeuBoard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- Fonts  -->
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/simple-line-icons.css">
    <!-- Switchery -->
    <link rel="stylesheet" href="/css/switchery.min.css">
    <!-- CSS Animate -->
    <link rel="stylesheet" href="/css/animate.css">

    <!-- Custom styles for this theme -->
    <link rel="stylesheet" href="/css/main.css">
    <!-- Feature detection -->
    <script src="/js/modernizr-2.6.2.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/vendor/html5shiv.js"></script>
    <script src="assets/js/vendor/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <section id="main-wrapper" class="theme-default">
        @include('layouts._header')
        @include('layouts._sidebar_left')
        @yield('content')
    </section>
        @include('layouts._sidebar_right')
        @include('layouts._config')

    <!--Global JS-->
    <script src="/js/jquery-1.11.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.navgoco.min.js"></script>
    <script src="/js/pace.min.js"></script>
    <script src="/js/jquery.fullscreen-min.js"></script>
    <script src="/js/app.js"></script>
    <!--Page Level JS-->
    <script src="/js/jquery.countTo.js"></script>
    <script src="/js/skycons.js"></script>
    <script src="/js/moment.min.js"></script>
    <script src="/js/daterangepicker.js"></script>


    <!--Page Leve JS -->
    <script src="/js/jquery.dataTables.js"></script>
    <script src="/js/dataTables.bootstrap.js"></script>
    <script>
    $(document).ready(function() {
        $('#example').dataTable();
    });
    </script>




</body>
</html>
