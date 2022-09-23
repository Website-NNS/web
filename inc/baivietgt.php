
<div class="col-xl-3 col-lg-3 col-md-12 order-lg-1 order-md-2 order-2">
   <div class="block-aside">
      <h4 class="tit-aside"><i class="fas fa-list-ul"></i>Thông Tin</h4>
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
            while($result = $show_brand->fetch_assoc()){
      ?>
         <a href="productbybrand.php?brandid=<?php echo $result['brand_id'] ?>"><img src="./img/diamond.png"><span><?php echo $result['brand_name'] ?></span></a>
      <?php }} ?>
      </div>
   </div>
   <div class="block-aside">
      <div class="center"><img src="img/quangcao.jpg"></div>
   </div>
   <div class="block-aside">
      <h4 class="tit-aside"><i class="far fa-edit"></i> BÀI VIẾT MỚI NHẤT</h4>

   </div>
</div>