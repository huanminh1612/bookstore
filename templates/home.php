
<!-- Main -->
<div id="main">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../images/slider-image-4-1920x700.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../images/slider-image-5-1920x700.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../images/slider-image-6-1920x700.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../images/slider-image-7-1920x700.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <br>
    <br>

    <div class="inner">
        <!-- About Us -->
        <header id="inner">
            <h1 align="center">Chào mừng bạn đến với thế giới Sách</h1>
        </header>

        <br>

        <h2 class="h2">Sách nổi bật</h2>

        <!-- Products -->
        <div class="product-items">
            <?php
            $result = $bookQuery->getRangeListBook(1, 6);
            if ($result) {
                while ($row = mysqli_fetch_array($result)) {
                    $nameBook = $row['ten_san_pham'];
                    $identityBook = $row['id_san_pham'];
                    $bookDescription = $row['mo_ta_sach'];
                    $authorDetail = $authorQuery->getAuthor($row['id_tac_gia']);
                    $prodImageDetail = $prod_imageQuery->getFirstImageBook($row['id_san_pham']);
                    $nameAuthor = $authorDetail['ten_tac_gia'];
                    $bookPrice = number_format($row['gia_sach_giay'], 0, '', '.');
                    $linkImage = $prodImageDetail['link_hinh_anh'];
                    echo "<div class='product-item'>
                                                                <a class='product-link' href='index.php?id=product-details&act=index&id_san_pham=$identityBook'>
                                                                    <div class='prod-image'>
                                                                        <img src='../images/$linkImage' alt=''/>
                                                                    </div>
                                                                    <div>
                                                                        <strong>$nameBook</strong><br/>
                                                                        <p class='bookprice'>$bookPrice<sup>đ</sup></p>
                                                                        <p><b>Tác giả:</b> $nameAuthor</p>
                                                                    </div>
                                                                </a>
                                                             </div>";
                }
            }
            ?>
        </div>
        <p class="text-center"><a href="index.php?id=products&act=index">Xem nhiều sách hơn &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>
        <br>
        <h2 class="h2">Các bài viết đánh giá</h2>
        <div class="row">
            <div class="col-sm-6 text-center">
                <p class="m-n"><em>Việc đọc sách ebook đã mang tính hiện đại trong xu hướng hiện nay 
                        và rất may thế giới Sách cũng đã đáp ứng được điều đó.</em></p>

                <p><strong> - Chúa hề Deadline</strong></p>
            </div>

            <div class="col-sm-6 text-center">
                <p class="m-n"><em>"Thế giới Sách mang đến cho tôi những cuốn sách toẹt vời mà những trang web khác không có
                        . Tôi không thể nói nhiều hơn ngoài việc ngắn gọn 3 từ <b>I Love Thế Giới Sách <3</b>"</em></p>

                <p><strong>- Chúa hề</strong> </p>
            </div>
        </div>

        <p class="text-center"><a href="index.php?id=testimonials&act=index">Đọc các bài viết đánh giá khác &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>

        <br>

        <h2 class="h2">Blog</h2>

        <div class="row">
            <div class="col-sm-4 text-center">
                <img src="../images/blog-1-720x480.jpg" class="img-fluid" alt="" />

                <h2 class="m-n"><a href="#">Những điều thú vị khi đọc sách</a></h2>

                <p> Darkieeee &nbsp;|&nbsp; 17/12/2021 10:30</p>
            </div>

            <div class="col-sm-4 text-center">
                <img src="../images/blog-2-720x480.jpg" class="img-fluid" alt="" />

                <h2 class="m-n"><a href="#">Chọn lựa nơi tốt để đọc sách</a></h2>

                <p> Darkieeee &nbsp;|&nbsp; 17/12/2021 10:30</p>
            </div>

            <div class="col-sm-4 text-center">
                <img src="../images/blog-3-720x480.jpg" class="img-fluid" alt="" />

                <h2 class="m-n"><a href="#">Làm thế nào để lựa chọn sách phù hợp để đọc?</a></h2>

                <p> Darkieeee &nbsp;|&nbsp; 17/12/2021 10:30</p>
            </div>
        </div>

        <p class="text-center"><a href="index.php?id=blog&act=index">Đọc nhiều hơn &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>


    </div>
</div>

