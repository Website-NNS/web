<?php include 'inc/header.php' ;?>
<section>
<?php include 'inc/sale.php' ;?>
   <div class="container container_slider">
      <div class="row">
         <div class="col-xl-12 col-12">
            <div class="main-banner">
               <div class="slider-wrapper">
                     <div id="mainSlider" class="nivoSlider">
                        <a href="javascript:void(0);"><img src="img/bn01.png" alt="banner" class="fullwidth"/></a>
                        <a href="javascript:void(0);"><img src="img/bn02.png" alt="banner" class="fullwidth"/></a>
                        <a href="javascript:void(0);"><img src="img/bn03.png" alt="banner" class="fullwidth"/></a>
                        <a href="javascript:void(0);"><img src="img/bn01.png" alt="banner" class="fullwidth"/></a>
                        <a href="javascript:void(0);"><img src="img/bn02.png" alt="banner" class="fullwidth"/></a>
                        <a href="javascript:void(0);"><img src="img/bn03.png" alt="banner" class="fullwidth"/></a>
                     </div>
               </div>
            </div>
         </div>   
   </div>
</div>
   <div class="main-sanphamchinh">
      <div class="clear40"></div>
      <div class="container">
         <h3 class="tit-pub">SẢN PHẨM NỔI BẬT</h3>
         <p class="center">Đối với chúng tôi, hành trình sáng tạo ra các Sản phẩm là một hành trình nhiều ý nghĩa. </p>
         <div class="clear20"></div>
         <div class="row">
            <?php
                $showProduct = $product -> getproduct_main();
                if($showProduct) {
                    while ($result = $showProduct ->fetch_assoc()) {
            ?>
               <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                  <a href="chitietsp.php?proid=<?php echo $result['sanpham_id'] ?>">
                     <div class="item-pro">
                        <div class="home-product__item-img" style="background-image:url(./img/<?php echo $result['hinh'] ?>);"></div>
                        <div class="ct-item-pro">
                           <p class="bold item-name"><?php echo $result['sanpham_name'] ?></p>
                           <div class="clear10"></div>
                           <div class="flex-bw">
                              <p class="old-pri"><?php echo number_format($result['sanpham_gia'])." đ" ; ?></p>
                              <p class="new-pri bold"><?php echo number_format($result['sanpham_giakhuyenmai'])." đ" ; ?></p>
                           </div>
                           <div class="clear10"></div>
                            <a href="chitietsp.php?proid=<?php echo $result['sanpham_id'] ?>" class="addtocart">Xem sản phẩm </a>
                        </div>
                        <div class="home-product__item-new">
                           <span class="home-product__item-new-chill">
                              Mới
                           </span>
                        </div>
                     </div>
                  </a>
               </div>
            <?php } } ?>
         </div>
         <div class="center">
            <a href="sanpham.php" class="viewall" style="margin-top:40px">XEM TẤT CẢ SẢN PHẨM</a>
         </div>
      </div>
      <div class="clear40"></div>
      </div>
      <div class="main-bnck">
      <div class="clear40"></div>
      <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <div class="ct-bnck">
                           <h3>Cam kết thập toàn đại bổ</h3>
                           <div class="clear20"></div>
                           <ul class="ul-ck">
                              <li><i class="fas fa-circle"></i> Nguồn gốc sản phẩm chuẩn 100%</li>
                              <li><i class="fas fa-circle"></i> Bán sản phẩm chất lượng như cam kết</li>
                              <li><i class="fas fa-circle"></i> Tư vấn có chuyên môn cao, tư vấn các sản phẩm phù hợp với nhu cầu.</li>
                              <li><i class="fas fa-circle"></i> Hạn chế tối đa bệnh tử thần: Ung thư – Tai biến – đau tim – tiểu đường – suy thận</li>
                           </ul>
                     </div>
                  </div>
               </div>
         </div>
         <div class="clear40"></div>
   </div>
   <div class="main-sanphamchinh">
   <div class="clear40"></div>
   <div class="container">
         <h3 class="tit-pub">QUÀ TẶNG Ý NGHĨA</h3>
         <p class="center">Mỗi hộp quà của Chúng tôi đều là những câu chuyện.<br>Mỗi sản phẩm của chúng tôi đều là một tác phẩm nghệ thuật.</p>
         <div class="clear20"></div>
         <div class="row flex-wrap tablet-grid">
            <div class="col-md-4 col-sm-4 col-xs-6 fwmb">
               <div class="item-pro">
                  <a href=""><img src="img/qt.jpg" class="fullwidth"></a>
                  <div class="ct-item-pro">
                     <p class="bold"><a href="" class="clpink">Túi quà Hạnh phúc</a></p>
                     <div class="clear10"></div>
                     <div class="flex-bw">
                        <p class="old-pri">3,500,000 đ</p>
                        <p class="new-pri bold">2,450,000 đ</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6 fwmb">
               <div class="item-pro">
                  <a href=""><img src="img/qt.jpg" class="fullwidth"></a>
                  <div class="ct-item-pro">
                     <p class="bold"><a href="" class="clpink">Túi quà Hạnh phúc</a></p>
                     <div class="clear10"></div>
                     <div class="flex-bw">
                        <p class="old-pri">3,500,000 đ</p>
                        <p class="new-pri bold">2,450,000 đ</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6 fwmb">
               <div class="item-pro">
                  <a href=""><img src="img/qt.jpg" class="fullwidth"></a>
                  <div class="ct-item-pro">
                     <p class="bold"><a href="" class="clpink">Túi quà Hạnh phúc</a></p>
                     <div class="clear10"></div>
                     <div class="flex-bw">
                        <p class="old-pri">3,500,000 đ</p>
                        <p class="new-pri bold">2,450,000 đ</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="clear20"></div>
      </div>
      <div class="main-hotline-tuvan" id="tuvan">
      <div class="container">
         <div class="flex-around">
            <div class="hotline">
               <img src="img/phone.png">
               <div class="so-hotline">
                  <p class="shl-top">HOTLINE 24/24</p>
                  <p class="shl-bottom">0945 518 538</p>
               </div>
            </div>
            <div class="tuvan">
               <p class="tv-tit">YÊU CẦU TƯ VẤN VÀ GỌI LẠI</p>
               <form class="form-tuvan">
                  <input type="text" placeholder="Nhập tên Quý khách" class="ip-tuvan" name="">
                  <input type="text" placeholder="Nhập số Điện thoại" class="ip-tuvan" name="">
                  <button type="submit" class="gui">GỬI</button>
               </form>
            </div>
         </div>
      </div>
      </div>
      <div class="main-news-home">
      <div class="clear40"></div>
      <div class="container">
         <h3 class="tit-pub">BÀI VIẾT MỚI</h3>
         <p class="center">Thông tin cần biết - Tư vấn - Hướng dẫn sử dụng</p>
         <div class="clear40"></div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="block-news-home">
                           <div class="flex-nh">
                              <a href="bai-viet.html" class="img-nh"><img src="img/nh.jpg" class="fullwidth"></a>
                              <div class="ct-nh">
                                 <p class="tit-nh"><a href="bai-viet.html" class="clblack">Ăn hạt dinh dưỡng có tốt ko</a></p>
                                 <p class="des-nh">Các mẹ , các anh , các chị nào lần đầu sử dụng các sản phẩm hạt dinh dưỡng thì Pink Seed em sẽ là lựa chọn tin cậy cho mọi người nhé</p>
                              </div>
                           </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="block-news-home">
                           <div class="flex-nh">
                              <a href="bai-viet.html" class="img-nh"><img src="img/nh.jpg" class="fullwidth"></a>
                              <div class="ct-nh">
                                 <p class="tit-nh"><a href="bai-viet.html" class="clblack">Ăn hạt dinh dưỡng có tốt ko</a></p>
                                 <p class="des-nh">Các mẹ , các anh , các chị nào lần đầu sử dụng các sản phẩm hạt dinh dưỡng thì Pink Seed em sẽ là lựa chọn tin cậy cho mọi người nhé</p>
                              </div>
                           </div>
                     </div>
                  </div>
               </div>
      </div>
      <div class="clear40"></div>
   </div>
</section>
<?php  include 'inc/footer.php' ; ?>
<!-- kkkkkkkkkkkkkkkkk -->
<!-- kkkkkkkkkkkkkkkkk -->