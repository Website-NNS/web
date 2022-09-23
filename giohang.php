<?php include 'inc/header.php' ;?>
<?php include 'inc/sale.php' ;?>

<?php
	if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['capnhat'])) {
		$cartId = $_POST['cartId'];
		$quantity = $_POST['quantity'];
		$update_quantity_cart = $ct -> update_quantity_cart($quantity,$cartId);
		echo "<meta http-equiv='refresh' content='0;URL=?id=live'>";

	}
	if(isset($_GET['cartid']) && $_GET['cartid']!=NULL){
        $cartDel = $_GET['cartid'];
		$cartDel = $ct->del_cart($cartDel);
    }
?>


<?php
	if(!isset($_GET['id'])) {
		echo "<meta http-equiv='refresh' content='0;URL=?id=live'>";
	}
?>

<section>
	<div class="main-breac">
		
		<div class="container">
			<span><a href="./" class="clblack">Trang chủ</a></span>
			<span style="margin: 0 7px;"><i class="fas fa-angle-right"></i></span>
			<span class="clpink">Giỏ hàng</span>
		</div>
	</div>   
	<div class="main-wraper">
		<div class="clear20"></div>
		<div class="container">
			<div class="bang-giohang">
				<h3 class="nomargin bold clred">Giỏ hàng</h3>
				<?php 
					if(isset($update_quantity_cart)){ 
						echo $update_quantity_cart ; 
					}elseif(isset($cartDel)){
						echo $cartDel;
					}else{
						echo "<div class='clear40'></div>";
					}
				?>
				<?php
					$check_cart = $ct -> check_cart();
					if($check_cart){
				?>
               <form action="" method="POST">
                  <table>
                     <tr class="hide480">
                        <th style="width: 10%;">STT</th>
                        <th style="width: 20%;">Hình ảnh</th>
                        <th style="width: 30%">Tên sản phẩm</th>
                        <th style="width: 25%;">Số lượng</th>
                        <th style="width: 20%;">Giá</th>
                        <th style="width: 30%;">Giá tổng</th>
                        <th style="width: 10%;">Xóa</th>
                     </tr>
					 <?php
						$get_product_cart = $ct -> get_product_cart();
						$subTotal = 0;
						$total = 0;
						$gtotal = 0;
						$qty = 0;
						if($get_product_cart){
							$i = 0;
							while($result = $get_product_cart -> fetch_assoc()){
								$total = $result['price'] * $result['quantity'];
								$qty = $qty + $result['quantity'];
								$subTotal += $total ;
								$gtotal = $subTotal;
								$i++;
						?>
                     <tr>
                        <td><?php echo $i ?></td>
                        <td><img src="./img/<?php echo $result['img'] ?>" width="120" height="120"></td>
                        <td><p class="bold"><?php echo $result['productName'] ?></p></td>
                        <td data-label="số lượng :">
							<form action="" method="post">
								<input  type="hidden" name="cartId" value="<?php echo $result['cartId'] ?>"/>
								<input class="cart-sl" type="number" name="quantity" value="<?php echo $result['quantity'] ?>" min="1"/>
								<input class="cart-up" type="submit" name="capnhat" value="Cập nhật"/>
							</form>
                        </td>
                        <td data-label="Giá :"><p class="bold"><?php echo number_format($result['price'])."đ"  ?></p></td>
                        <td data-label="giá tổng :"><p class="bold"><?php echo number_format($total)."đ"; ?></p></td>
                        <td><a  href="?cartid=<?php echo $result['cartId'] ?>" onclick="return confirm('Bạn có muốn xoá không?')" class="clred"><i class="fas fa-trash-alt"></i></a></td>
                     </tr>

                     <?php }} ?>
                  </table>
               </form>

				<table style="float:right;text-align:left;" width="40%">
					<tr>
					<div class="clear40"></div>
					<h3 class="nomargin bold clredt">Tổng tiền thanh toán</h3>
					<div class="clear20"></div>
					<h4 class="nomargin bold clred">
						<?php 
							echo number_format($gtotal).'vnđ';
							session::set('qty',$qty);
						?>
					</h4>
					<div class="clear20"></div>
				</table>
				<?php 
				}else{
					echo "<p class='cart-empty'>Chưa có sản phẩm nào trong giỏ hàng.</p>";
				}
				?>
			</div>
			<div class="clear40"></div>
			<div class="shopping">
				<div class="shopleft">
					<a href="sanpham.php"><button class="custom-btn btn-7"><span>Quay lại cửa hàng</span></button></a>
				</div>
				<div class="shopright">
					<a href="login.php"><button type="button" class="check-out-btn">Thanh toán</button></a>
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

