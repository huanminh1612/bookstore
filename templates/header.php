<!-- Header -->
<?php
session_start();
?>
<header id="header">
    <div class="inner">
        <!-- Logo -->
        <div class="logo-container">
            <a href="index.php" class="logo">
                <img src="../logo/logo.jpg" width="100" height="100"> <span class="title">Thế giới Sách</span>
            </a>
            <div class="ml-auto">
                <form action="products.php">
                    <input type="text" name="product" placeholder="Tìm kiếm sách" required/>
                </form>
            </div>
        </div>
        <!-- Nav -->
        <nav>
            <ul>
                <li><a href="#menu"></a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- Menu -->
<nav id="menu">
    <h2>Menu</h2>
    <ul>
        <li><a href="index.php?id=home&act=index" class="active">Trang chủ</a></li>
        <li><a href="products.php">Xem danh mục sản phẩm</a></li>
        <li>
            <a href="#" class="dropdown-toggle">Giới thiệu</a>
            <ul>
                <li><a href="index.php?id=about&act=index">Giới thiệu trang web</a></li>
                <li><a href="index.php?id=blog&act=index">Blog</a></li>
                <li><a href="index.php?id=testimonials&act=index">Các bài viết đánh giá</a></li>
                <li><a href="index.php?id=terms&act=index">Điều khoản</a></li>
            </ul>
        </li>

        <li><a href="index.php?id=contact&act=index">Liên hệ với chúng tôi</a></li>
        
        <li><a href="../admin/templates/login.php">Đăng nhập admin</a></li>
        <?php
        if (isset($_SESSION["customer"])) {
            echo "<li>
                    <a href='#' class='dropdown-toggle'><i class='fas fa-user' style='padding-right: 0.2rem'></i> {$_SESSION['customer']['User']}</a>
                            <ul>
                        <li><a href='./customer/profile.php'><i class='fas fa-id-badge' style='padding-right: 0.6rem'></i> Hồ sơ</a></li>
                        <li><a href='./customer/change_password.php'><i class='fas fa-key' style='padding-right: 0.2rem'></i> Đổi mật khẩu</a></li>
                        <li><a href='./cart/'><i class='fas fa-shopping-cart' style='padding-right: 0.25rem'></i> Giỏ hàng</a></li>
                        <li><a href='invoice/'><i class='fas fa-receipt' style='padding-right: 0.7rem'></i> Đơn hàng</a></li>
                        <li><a href='../handle/handle_account.php?logout=logout'><i class='fas fa-sign-out-alt' style='padding-right: 0.35rem'></i> Đăng xuất</a></li>
                    </ul>
                </li>";
        } else {
            echo '<li><a href="./customer/login.php">Đăng nhập</a></li>';
        }
        ?>
    </ul>
</nav>