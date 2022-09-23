<?php
if(isset($_POST['search_button'])){
   $tukhoa = $_POST['search_product'];	
   $sql_timkiem = mysqli_query($con,"SELECT * FROM tbl_sanpham WHERE sanpham_name LIKE '%$tukhoa%' OR sanpham_mota LIKE '%$tukhoa%'");		
   $title = $tukhoa;
}		
?> 
<section>
	<div class="main-breac">
		<div class="container">
				<span><a href="./" class="clblack">Trang chủ</a></span>
				<span style="margin: 0 7px;"><i class="fas fa-angle-right"></i></span>
				<span class="clpink">Tìm kiếm</span>
				<div class="clear20"></div>
				<div class="row flex-wrap list-spc">
		</div>
	</div>  

	<div class="container-fluid">
	<div class="clear20"></div>
   <div class="container">
      <div class="row">
         <?php 
            include('include/left.php');
         ?>
         <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-xs-12 order-lg-2 order-md-1 order-1">
            <?php 
               $count = mysqli_num_rows($sql_timkiem);
               if ($count === 0 ) {
                  echo "<h4 class='nomargin text-uppercase clredt'>không tìm thấy sản phẩm</h4><br>";
               }else{
            ?>
               <h4 class="nomargin text-uppercase clredt">kết quả tìm kiếm : <?php echo $title ?></h4><br>
            <?php } ?>
            <div class="row">
               <?php
                  while($row_timkiem = mysqli_fetch_array($sql_timkiem)) {
                     
               ?>

               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-6 col-6">
                  <a href="?quanly=chitietsp&id=<?php echo $row_timkiem['sanpham_id'] ?>">
                     <div class="item-pro">
                        <div class="home-product__item-img" style="background-image:url(./img/<?php echo $row_timkiem['hinh']; ?>);"></div>
                        <div class="ct-item-pro">
                           <p class="bold"><a href="?quanly=chitietsp&id=<?php echo $row_timkiem['sanpham_id'] ?>" class="clpink item-name"><?php echo $row_timkiem['sanpham_name'] ?></a></p>
                           <div class="clear10"></div>
                           <div class="flex-bw">
                              <p class="old-pri"><?php echo number_format($row_timkiem['sanpham_gia'])." đ" ; ?></p>
                              <p class="new-pri bold"><?php echo number_format($row_timkiem['sanpham_giakhuyenmai'])." đ" ; ?></p>
                           </div>
                           <div class="clear10"></div>
                           <form action="?quanly=giohang" method="post">
										<fieldset>
												<input type="hidden" name="tensanpham" value="<?php echo $row_timkiem['sanpham_name'] ?>" />
												<input type="hidden" name="sanpham_id" value="<?php echo $row_timkiem['sanpham_id'] ?>" />
												<input type="hidden" name="giasanpham" value="<?php echo $row_timkiem['sanpham_giakhuyenmai'] ?>" />
												<input type="hidden" name="hinhanh" value="<?php echo $row_timkiem['hinh'] ?>" />
												<input type="hidden" name="soluong" value="1" />
												<input type="submit" class="addtocart" name="themgiohang" value="Mua hàng"></input>
										</fieldset>
									</form>
                        </div>
                     </div>
                  </a>
               </div>
               <?php
                  // }else{
                  //    echo "<p class='nomargin text-uppercase clredt'>Không tìm thấy sản phẩm</p>";
                  // }
               }
               ?>
            </div>
         </div>
      </div>
   </div>
</section>
