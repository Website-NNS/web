<?php
	include 'inc/header.php';
	include 'inc/sale.php';
	// include 'inc/slider.php';
?>
<?php
	if(isset($_GET['brandid']) && $_GET['brandid']!=NULL){
		$id = $_GET['brandid'];
	}
	
	// if($_SERVER['REQUEST_METHOD'] === 'POST') {
	// 	$catName = $_POST['catName'];
	// 	$addtoCart = $ct -> add_to_cart($quantity,$id);
	// }
?>
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
			<div class="col-xl-4 col-lg-3 col-md-12 order-lg-1 order-md-2 order-2">
				<div class="block-aside">
					<h4 class="tit-aside"><i class="fas fa-list-ul"></i> DANH MỤC</h4>
					<div class="ct-aside">

					<?php 
						$showCat = $cat -> show_category();
						if($showCat){
							while($result_showCat = $showCat -> fetch_assoc()){
					?>
						<a href="productbycat.php?catid=<?php echo $result_showCat['category_id'] ?>" class=""><img src="./img/diamond.png"><span><?php echo $result_showCat['category_name'] ?></span></a>
					<?php }} ?>

					</div>
				</div>
				<div class="block-aside">
					<h4 class="tit-aside"><i class="fas fa-award"></i> THƯƠNG HIỆU</h4>
					<div class="ct-aside">
					<?php
						$show_brand = $brand->show_brand();
						if($show_brand){
							while($result_showBrand = $show_brand->fetch_assoc()){
					?>
						<a href="productbybrand.php?brandid=<?php echo $result_showBrand['brand_id'] ?>" class="
						<?php 
							if($id == $result_showBrand['brand_id']){
								echo "active";
							}
						?>
						"><img src="./img/diamond.png"><span><?php echo $result_showBrand['brand_name'] ?></span></a>
					<?php }} ?>
					</div>
				</div>
				<div class="block-aside">
					<div class="center"><img src="img/quangcao.jpg"></div>
				</div>
				<div class="block-aside">
						<h4 class="tit-aside"><i class="far fa-edit"></i> BÀI VIẾT MỚI NHẤT</h4>
						<div class="ct-aside">
							<a href="bai-viet.html"><img src="./img/diamond.png"><span class="category-baiviet">Sự khác biệt giữa tết miền Bắc và tết miền Nam</span></a>
							<a href="bai-viet.html"><img src="./img/diamond.png"><span class="category-baiviet">Thăm 5 làng gói bánh chưng nổi tiếng miền Bắc</span></a>
							<a href="bai-viet.html"><img src="./img/diamond.png"><span class="category-baiviet">Phong tục đón tết nguyên đán của người Việt Nam</span></a>
							<a href="bai-viet.html"><img src="./img/diamond.png"><span class="category-baiviet">Nét đẹp tết cổ truyền dân tộc</span></a>
							<a href="bai-viet.html"><img src="./img/diamond.png"><span class="category-baiviet">Gợi ý 16 món quà Noel ý nghĩa cho bạn gái</span></a>
							<a href="bai-viet.html"><img src="./img/diamond.png"><span class="category-baiviet">Bí quyết để tặng quà sáng tạo và lãng mạn</span></a>
							<a href="bai-viet.html"><img src="./img/diamond.png"><span class="category-baiviet">Văn hóa và nghệ thuật tặng quà ý nghĩa</span></a>
						</div>
					</div>
				</div>
				<div class="col-xl-8 col-lg-9 col-md-12 col-sm-12 col-xs-12 order-lg-2 order-md-1 order-1">
				<?php
					$namebybrand = $brand -> get_name_by_brand($id);
					if($namebybrand) {
					$result_name = $namebybrand -> fetch_assoc();
				?>
				<h4 class="nomargin text-uppercase clredt">Thương hiệu
					: <?php echo $result_name['brand_name'] ?>
				</h4><br><?php } ?>
				<p class="des-dmbv">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<div class="clear20"></div>
				<div class="row flex-wrap list-spc">
					<?php
						$productbybrand = $brand -> get_product_by_brand($id);
						if($productbybrand) {
							while($result = $productbybrand -> fetch_assoc()) {
					?>
						<div class="col-xl-4 col-md-4 col-sm-6 col-xs-6 col-6">
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
									<a href="chitietsp.php?proid=<?php echo $result['sanpham_id'] ?>" class="addtocart">Xem Sản Phẩm</a>
								</div>
							</div>
							</a>
						</div>
					<?php } }?>
				</div>
				<div class="clear20"></div>

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
 <?php
	include 'inc/footer.php';
?>

