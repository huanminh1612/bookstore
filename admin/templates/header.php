<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
} else {
    $array = explode("/", $_SERVER['SCRIPT_NAME']);
    $current = end($array);

    if (!in_array($current, $_SESSION["user"]['Function'])) {
        header("Location: index.php");
    }
}
?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Antic+Slab&family=Pushster&display=swap');
</style>
<header class="topbar" data-navbarbg="skin5">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin6">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="index.php">
                <!-- Logo icon -->
                <b class="logo-icon">
                    <!-- Dark Logo icon -->
<!--                    <img src="../static/plugins/images/logo-icon.png" alt="homepage" />-->
                    <img src="../static/images/logo.jpg" alt="homepage" style="width: 33px; height: 31px"/>
                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span class="logo-text">
                            <!-- dark Logo text -->
                    <h3 style="color:black; margin-bottom: 0; font-family: 'Pushster', cursive;">Thế giới Sách<span style="color:black; margin-bottom: 0; font-family: 'Antic Slab', serif;">admin</span>
                    </h3>
<!--                            <img src="../static/plugins/images/logo-text.png" alt="homepage" />-->
                        </span>
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
               href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">

            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav ms-auto d-flex align-items-center">

                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== -->
                <li class=" in">
                    <form role="search" class="app-search d-none d-md-block me-3">
                        <input type="text" placeholder="Tìm kiếm..." class="form-control mt-0">
                        <a href="" class="active">
                            <i class="fa fa-search"></i>
                        </a>
                    </form>
                </li>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <li>
                    <a class="profile-pic" href="profile.php">
                        <img src="../static/plugins/images/users/varun.jpg" alt="user-img" width="36"
                             class="img-circle"><span class="text-white font-medium"><?php echo $_SESSION['user']['Name'] ?></span></a>
                </li>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
            </ul>
        </div>
    </nav>
</header>