<!DOCTYPE html>
<?php
    session_start();
    if (!isset($_SESSION["user"])) {
        header("Location: templates/login.php");
    } else {
        header("Location: templates/index.php");
    }
?>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Ample Admin Lite Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="static/plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="static/plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="static/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="static/css/style.min.css" rel="stylesheet">
</head>

<body>
    <script src="static/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="static/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="static/js/app-style-switcher.js"></script>
    <script src="static/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="static/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="static/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="static/js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="static/plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="static/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="static/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>