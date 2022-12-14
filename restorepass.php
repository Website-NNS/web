<?php
	include 'inc/header.php';
	include 'inc/sale.php';
?>

<div id="form_login">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <section class="">
          <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
            <div class="container">
              <div class="row gx-lg-5 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                  <h1 class="my-5 display-3 fw-bold ls-tight">
                      Giới Thiệu <br>
                      <span class="text-primary">Tiến Thịnh Phát</span>
                    </h1>
                    <p style="color: hsl(217, 10%, 50.8%)">
                      Công Ty SX TM XNK NGK TIẾN THỊNH PHÁT phát triển lĩnh vực sản xuất Yến sào, Bào ngư, Vi cá. Phát triển hệ thống showroom bán hàng trong cả nước và quốc tế. Định hướng phát triển thị trường năm 2020 đến 2025 sản phẩm yến sào thương hiệu " SALANEST " được định hình mang tầm kinh tế giá trị cao và phát triển tầm khu vực và quốc tế
                    </p>
                    <p><img src="img/ttp.png" alt=""></p>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0">
                  <div class="card">
                    <div class="clear20"></div>
                    <h5 class="color_login">Khôi phục mật khẩu</h5>
                    <div class="card-body py-5 px-md-5">
                        <?php 
                            // đổi mật khẩu
                                if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['restorepass'])) {
                                    $restorepass = $cs->restore_Pass($_POST);
                            }
                        ?>
                        <?php
                        if(isset($restorepass)){echo $restorepass;}else{echo "<div class='clear20'></div>";}
                        ?>
                        <div class="information-wrapper">
                        <form action="" method="post">
                        <div class="form-label-group position-relative">
                                <input name="passwordrestore" type="password" id="inputPassword" class="form-control toggle-pass-focus" placeholder="Password" required>
                                <div class="toggle-pass" onclick="togglePass()">
                                      <i class="eye eye-open fa-solid fa-eye" id="open"></i>
                                      <i class="eye eye-close fa-solid fa-eye-slash" id="close"></i>
                                    </div>
                                <label for="inputPassword">Mật khẩu mới</label>
                              </div>
                              <div class="form-label-group position-relative">
                                <input type="passwordrestore" id="inputPassword2" class="form-control toggle-pass-focus" placeholder="Password" required>
                                <div class="toggle-pass" onclick="togglePass2()">
                                      <i class="eye eye-open fa-solid fa-eye" id="open2"></i>
                                      <i class="eye eye-close fa-solid fa-eye-slash" id="close2"></i>
                                    </div>
                                    <span id="thongbao"></span>
                                <label for="inputPassword2">Nhập Lại mật khẩu mới</label>
                              </div> 
                            <input name="restorepass" class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="Xác nhận" style="border-radius: 10px;">
                      </form>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</div>
<script>
    $('#inputPassword, #inputPassword2').on('keyup', function () {
    if ($('#inputPassword').val() == $('#inputPassword2').val()) {
        $('#thongbao').html('Mật khẩu đúng').css('color', 'green');
    }else 
        $('#thongbao').html('Không trùng khớp').css('color', 'red');
    });
</script>
<?php 	include 'inc/footer.php';?>



