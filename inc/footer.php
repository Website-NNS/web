<footer id="footer">
   <div class="footer-top">
      <div class="clear40"></div>
      <div class="container">
            <div class="row">
               <div class="col-md-4 col-sm-4">
                  <h4 class="tit-ft">VỀ CHÚNG TÔI</h4>
                  <p class="clwhite">Thập toàn đại bổ chuyên các sản phẩm cao cấp từ thiên nhiên tốt cho sức khỏe, giúp tăng cường sinh lực, làm chậm quá trình lão hóa, giúp bạn có một cơ thể khỏe mạnh cường tráng, chống lại tuổi già và bệnh tật</p>
               </div>
               <div class="clear20 show767"></div>
               <div class="col-md-4 col-sm-4">
                  <h4 class="tit-ft">THÔNG TIN LIÊN HỆ</h4>
                  <p class="clwhite">Trụ sở chính: 60 Nguyễn Đình Chiểu, P.Đakao, Q.1, TPHC</p>
                  <p class="clwhite">VPĐD: 14 Phạm Quý Thích, P.Tân Quý, Q.Tân Phú, TPHCM</p>
                  <p class="clwhite">Điện thoại: (+84) 28. 38 12 17 19</p>
                  <p class="clwhite">Email: info@123corp.vn</p>
               </div>
               <div class="clear20 show767"></div>
               <div class="col-md-4 col-sm-4">
                  <h4 class="tit-ft">THÔNG TIN LIÊN HỆ</h4>
                  <div class="fanpage">
                     <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=191508515071315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                  </div>
               </div>
            </div>
      </div>
      <div class="clear40"></div>
   </div>
   <div class="copyright">
      <div class="container">
            <div class="flex-bw">
               <p>Copyright 2018 © Công ty TNHH 123CORP</p>
               <p>Hiệu quả phụ thuộc vào cơ địa mỗi người(*) </p>
            </div>
      </div>
   </div>

<!--    
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="social-links">
                        <a class="social-btn" href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="social-btn" href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a class="social-btn" href="#">
                            <i class="fab fa-google"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    -->

</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div title="Về đầu trang" id="top-up"><i class="fas fa-chevron-circle-up"></i></div>
<script>
    var offset = 500;
    var duration = 100;
    $(function(){
    $(window).scroll(function () {
    if ($(this).scrollTop() > offset)
    $('#top-up').fadeIn(duration);else
    $('#top-up').fadeOut(duration);
    });
    $('#top-up').click(function () {
    $('body,html').animate({scrollTop: 0}, duration);
    });
    });
</script>
<script src="js/lightslider.js"></script>
<script src="js/jquery.nivo.slider.pack.js"></script>
<script src="js/main.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function() {
	    jQuery('#mainSlider').nivoSlider({
	        directionNav: false,
	        animSpeed: 500,
	        effect: 'random',
	        slices: 18,
	        pauseTime: 5000,
	        pauseOnHover: false,
	        controlNav: false,
	    });
    });
</script>
<!--  slick -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<!-- /slick -->
</body>
</html>
<?php ob_end_flush(); ?>