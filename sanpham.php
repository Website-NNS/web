<?php include 'inc/header.php' ;?>
<?php include 'inc/sale.php' ;?>

<section>
	<div class="main-breac">
		<div class="container">
				<span><a href="./" class="clblack">Trang chủ</a></span>
				<span style="margin: 0 7px;"><i class="fas fa-angle-right"></i></span>
				<span class="clpink">Sản phẩm</span>
		</div>
	</div>   
	<div class="main-wraper">
	<div class="clear20"></div>
	<div class="container">
			<div class="row">
				<?php 
					include 'inc/danhmuc.php';
				?>
				<div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 order-lg-2 order-md-1 order-1">
				<h4 class="nomargin text-uppercase clredt">SẢN PHẨM</h4><br>
				<div class="clear20"></div>
				<div class="row flex-wrap list-spc">
					<?php
						$showProduct = $product -> getproduct_feathered_9();
						if($showProduct) {
							while ($result = $showProduct ->fetch_assoc()) {
					?>
						<div class="col-xl-4 col-md-6 col-sm-6 col-xs-6 col-6">
							<a href="chitietsp.php?proid=<?php echo $result['sanpham_id'] ?>">
							<div class="item-pro">
								<div class="home-product__item-img" style="background-image:url(./img/<?php echo $result['hinh']; ?>);"></div>
								<div class="ct-item-pro">
									<p class="bold"><a href="?quanly=chitietsp&id=<?php echo $result['sanpham_id'] ?>" class="clpink item-name"><?php echo $result['sanpham_name'] ?></a></p>
									<div class="clear10"></div>
									<div class="flex-bw">
										<p class="old-pri"><?php echo number_format($result['sanpham_gia'])." đ" ; ?></p>
										<p class="new-pri bold"><?php echo number_format($result['sanpham_giakhuyenmai'])." đ" ; ?></p>
									</div>
									<div class="clear10"></div>
									<a href="chitietsp.php?proid=<?php echo $result['sanpham_id'] ?>" class="addtocart">Xem Sản Phẩm </a>
								</div>
							</div>
							</a>
						</div>
					<?php } }?>
				</div>
				<!-- <div class="clear20"></div> -->
				<?php
            //    include('include/pagination.php');
      	   ?>

				<!-- <div class="clear40"></div> -->
				</div>
			</div>
		</div>
	</div>
	<div class="main-hotline-tuvan">
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
</section>
<?php include 'inc/footer.php' ;?>

