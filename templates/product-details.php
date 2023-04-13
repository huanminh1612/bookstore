<?php
    include_once '../class/book.php';
    include_once '../class/author.php';
    include_once '../class/book_image.php';
    include_once '../class/publisher.php';
    $bookQuery = new book();
    $authorQuery = new author();
    $prod_imageQuery = new book_image();
    $publisherQuery = new publisher();
    // session_start();
?>
            <style>
                div.col-md-5 > img{
                    height:350px;
                }
                .product-not-found {
                    width:500px;
                    margin: auto;
                    text-align: center;
                }
                .product-not-found img{
                    width:500px;
                    display:block;
                }
                .error-code{
                    color: red;
                }
                .logo-container{
                    display:flex;
                }
                .prod-image img{
                    width: 55%;
                    height: 150px;
                }
                span.more-content{
                    display: none;
                }
                .read-more{
                    color: blue;
                }
                #footer{
                padding:100px;
            }
            </style>
	
				<!-- Main -->
					<div id='main'>
                                            <?php
                                                $idsanpham = isset($_GET['id_san_pham'])?$_GET['id_san_pham']:'';
                                                $book = $bookQuery -> findBook($idsanpham);
                                                if($book != array())
                                                {
                                                    $bookIdentity = $book['id_san_pham'];
                                                    $nameBook = $book['ten_san_pham'];
                                                    $authorDetail = $authorQuery -> getAuthor($book['id_tac_gia']);
                                                    $prodImagesLink = $prod_imageQuery ->getBookImages($book['id_san_pham']);
                                                    $publisherDetail = $publisherQuery -> getPublisher($book['id_nha_xuat_ban']);
                                                    $publisherName = $publisherDetail['ten_nha_xuat_ban'];
                                                    $nameAuthor = $authorDetail['ten_tac_gia'];
                                                    $yearPublish = $book['nam_xuat_ban'];
                                                    $bookDescription = $book['mo_ta_sach'];
                                                    $readmore = "";
                                                    if(strlen($bookDescription) > 500)
                                                    {
                                                        $morecontent = substr($bookDescription, 500, strlen($bookDescription));
                                                        $readmore  = "<span class='dots'>...</span>"
                                                                   . "<span class='more-content'>$morecontent</span>"
                                                                   . "<a class='read-more' href='#'> Đọc thêm</a>";
                                                        $bookDescription = substr($bookDescription,0,"500");
                                                    }
                                                    $bookLanguage = $book['ngon_ngu'];
                                                    $giasachgiay = number_format($book['gia_sach_giay'],0, '', '.')."<sup>đ</sup>";
                                                    $giaebook = number_format($book['gia_sach_ebook'],0, '', '.')."<sup>đ</sup>";
                                                    //hinh_anh_san_pham(id_hinh_anh,id_san_pham,link_hinh_anh)
                                                    $linkImage = 2; //index 2 contains the source of Image (count index from 0)
                                                    $firstImageLink = $prodImagesLink[0][$linkImage];
                                                    echo "<div class='inner'>
                                                            <h1>$nameBook</h1>
                                                            <div class='container-fluid'>
                                                                    <div class='row'>
                                                                            <div class='col-md-5'>
                                                                                <img src='../images/$firstImageLink' class='img-fluid' alt=''>
                                                                            </div>
                                                                            <div class='col-md-7'>
                                                                                <div id='book-author'><span><b>Tác giả:</b> $nameAuthor</span></div>
                                                                                <div id='book-year-publish'><span><b>Năm xuất bản:</b> $yearPublish</span></div>
                                                                                <div id='book-publisher'><span><b>Nhà xuất bản:</b> $publisherName</span></div>
                                                                                <div id='book-language'><span><b>Ngôn ngữ:</b> $bookLanguage</span></div>
                                                                                <div id='book-description'><p><span><b>Mô tả:</b><br/> $bookDescription</span>$readmore</p></div>
                                                                                <div class='row'>
                                                                            <div class='col-sm-4'>
                                                                                <label class='control-label'>Loại sách</label>
                                                                                    <div class='form-group'>
                                                                                        <select name='loai_sach' id='book-type'>
                                                                                            <option value='Book'>Sách in - $giasachgiay</option>
                                                                                            <option value='EBook'>Sách Ebook - $giaebook</option>
                                                                                        </select>
                                                                                    </div>
                                                                            </div>
                                                                            <div class='col-sm-8'>
                                                                                    <label class='control-label'>Số lượng mua</label>
                                                                                    <div class='row'>
                                                                                        <div class='col-sm-6'>
                                                                                            <div class='form-group'>
                                                                                                <input type='text' class='soluong' name='soluong' value='1' id='quantity' required>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class='col-sm-6'>
                                                                                            <input type='submit' class='primary add-to-cart' value='Thêm vào giỏ hàng'>
                                                                                        </div>
                                                                                    </div>
                                                                            </div>
                                                                            <div class='error-code'>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <br>
                                                            <div class='container-fluid'>
                                                                    <h2 class='h2'>Một số sách tương tự</h2>
                                                                    <!-- Products --> ";
                                                            $lsBook = $bookQuery ->findSimilarBook($idsanpham);
                                                            if($lsBook != array())
                                                            {
                                                                echo '<section class="tiles">';
                                                                foreach($lsBook as $value)
                                                                {
                                                                    $nameBook = $value['ten_san_pham'];
                                                                    $identityBook = $value['id_san_pham'];
                                                                    $bookDescription = $value['mo_ta_sach'];
                                                                    $authorDetail = $authorQuery -> getAuthor($value['id_tac_gia']);
                                                                    $prodImageDetail = $prod_imageQuery -> getFirstImageBook($value['id_san_pham']);
                                                                    $nameAuthor = $authorDetail['ten_tac_gia'];
                                                                    $linkImage = $prodImageDetail['link_hinh_anh'];
                                                                    echo "<article>
                                                                              <a href='index.php?id=product-details&act=index&id_san_pham=$identityBook'>
                                                                                  <div class='prod-image'>
                                                                                      <img src='../images/$linkImage' alt='' />
                                                                                  </div>
                                                                                  <div>
                                                                                     <h2>$nameBook</h2>
                                                                                     <span><b>Mã sách:</b> $identityBook</span><br/>
                                                                                     <p><b>Tác giả:</b> $nameAuthor</p>
                                                                                  </div>
                                                                              </a>
                                                                         </article>";
                                                                }
                                                                echo '</section>'
                                                                . '</div>';
                                                            }
                                                            else {
                                                                echo "<p>Không tìm thấy sách tương tự</p>"
                                                                . "</div>";
                                                            }
                                                    }else{
                                                        echo '<div class="product-not-found">'
                                                                . '<img src="../images/404-not-found-bunny.jpg" alt="image-from-alamy"/>'
                                                                . '<h2>Không tìm thấy sản phẩm mà bạn đang tìm </h2>'
                                                                . '<a href="index.php">Quay về trang chủ</a>'
                                                             .'</div>'
                                                        ;
                                                    }
                                            ?>
					</div>


                
                <script src='../assets/js/post_method.js'></script>
                <script type='text/javascript'>
                    $(document).ready(function(){
                        function isNumber(number){
                            return parseInt(number);
                        }
                        $(".read-more").click ((e) => {
                            e.preventDefault();
                            $(".dots").toggle();
                            $(".more-content").toggle();
                            if($(".read-more").text().trim() === "Đọc thêm"){
                                $(".read-more").text(" Thu gọn");
                            }
                            else {
                                $(".read-more").text(" Đọc thêm");
                            }
                        });
                        $(".add-to-cart").click ((e) => {
                            e.preventDefault();
                            var isLogin = <?php if(isset($_SESSION['customer'])){echo 1;}else{echo 0;}?>;
                            if(isLogin === 0)
                            {
                                post_to_url("./customer/login.php",{next:window.location.href});
                                return;
                            }
                            var quantityValue = $("#quantity").val();
                            if(!isNumber(quantityValue)){
                                $(".error-code").text("(*) Quantity must be an integer");
                            }
                            else {
                                var idsp = '<?php echo $_GET['id_san_pham'] ?>';
                                $.ajax({
                                    url: "../handle/handle_cart.php",
                                    type: "POST",
                                    data: {
                                        action: "add",
                                        id_san_pham: idsp, 
                                        loai_sach: $("#book-type").val(), 
                                        soluong: $("#quantity").val()
                                    },
                                    success: function(response)
                                    {
                                        var getData = JSON.parse(response);
                                        if(getData.success)
                                        {
                                            alert("Thêm vào giỏ hàng thành công");
                                        }
                                        else{
                                            alert(getData.message);
                                        }
                                    }    
                                });
                            }
                        });
                    });
                </script>