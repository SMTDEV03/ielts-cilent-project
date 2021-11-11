<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />
    <!-- v4.0.0-alpha.6 -->
    <link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/style.css">
    <link rel="stylesheet" href="dist/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="dist/css/et-line-font/et-line-font.css">
    <link rel="stylesheet" href="dist/css/themify-icons/themify-icons.css">
    <!-- Chartist CSS -->
    <link rel="stylesheet" href="dist/plugins/chartist-js/chartist.min.css">
    <link rel="stylesheet" href="dist/plugins/chartist-js/chartist-init.css">
    <link rel="stylesheet" href="dist/plugins/chartist-js/chartist-plugin-tooltip.css">
    @yield('extra-css')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper boxed-wrapper">
        <x-admin.header />
        @yield('content') 
             
    </div>
</body>
    <!-- jQuery 3 -->
    <script src="dist/js/jquery.min.js"></script>
    <!-- v4.0.0-alpha.6 -->
    <script src="dist/bootstrap/js/bootstrap.min.js"></script>
    <!-- template -->
    <script src="dist/js/niche.js"></script>
    <!-- Chartjs JavaScript -->
    <script src="dist/plugins/chartjs/chart.min.js"></script>
    <script src="dist/plugins/chartjs/chart-int.js"></script>
    <!-- Chartist JavaScript -->
    <script src="dist/plugins/chartist-js/chartist.min.js"></script>
    <script src="dist/plugins/chartist-js/chartist-plugin-tooltip.js"></script>
    <script src="dist/plugins/functions/chartist-init.js"></script>
    @yield('extra-js')

</html>