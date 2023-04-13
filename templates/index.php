<?php
include_once '../class/book.php';
include_once '../class/author.php';
include_once '../class/book_image.php';
$bookQuery = new book();
$authorQuery = new author();
$prod_imageQuery = new book_image();
// session_start();
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Thế giới Sách</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" type="image/png" sizes="16x16" href="../admin/static/plugins/images/favicon.png">
    <noscript>
        <link rel="stylesheet" href="../assets/css/noscript.css" />
    </noscript>
    <style>
        .logo-container {
            display: flex;
        }

        .logo-container>div input {
            padding-top: 20px;
        }

        a.product-link {
            border-bottom: none;
        }

        .product-items {
            display: flex;
            width: 100%;
            flex-wrap: wrap;
            text-align: center;
            justify-content: space-around;
        }

        .product-items .product-item {
            width: 30%;
            height: auto;
            display: flex;
            justify-content: center;
        }

        .prod-image {
            height: 300px;
            width: 100%;
        }

        .prod-image img {
            width: 100%;
            padding: 10px;
            height: 100%;
        }

        p.bookprice {
            color: red;
            font-weight: bold;
            font-size: 14pt;
            margin: 0;
        }

        a.product-link:hover p.bookprice {
            color: #f2849e !important;
            font-weight: bold;
        }

        #footer {
            width: 100%
        }
    </style>
</head>

<body class="is-preload">
    <!-- Wrapper -->
    <div id="wrapper">

        <?php include_once("header.php"); ?>
        <?php
        if (isset($_GET['act']) && $_GET['act'] == 'index') {
            if (isset($_GET['id'])) {
                if ($_GET['id'] == 'products') {
                    include_once('products.php');
                } else if ($_GET['id'] == 'about') {
                    include_once('about.php');
                } else if ($_GET['id'] == 'blog') {
                    include_once('blog.php');
                } else if ($_GET['id'] == 'testimonials') {
                    include_once('testimonials.php');
                } else if ($_GET['id'] == 'terms') {
                    include_once('terms.php');
                } else if ($_GET['id'] == 'contact') {
                    include_once('contact.php');
                } else if ($_GET['id'] == 'product-details') {
                    include_once('product-details.php');
                } else if ($_GET['id'] == 'home') {
                    include_once("home.php");
                }
            }
        } else {
            include_once("home.php");
        }

        ?>
        <?php include_once("footer.php"); ?>

    </div>

</body>
<!-- Scripts -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/jquery.scrolly.min.js"></script>
<script src="../assets/js/jquery.scrollex.min.js"></script>
<script src="../assets/js/main.js"></script>

</html>