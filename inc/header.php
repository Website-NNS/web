<?php
    include 'lib/session.php';
    Session::init();
    ob_start();
?>
<?php
    include_once 'lib/database.php';
    include_once 'helpers/format.php';
    spl_autoload_register(function($class){
		include_once "classes/".$class.".php";
	});

   $db = new Database();
   $fm = new Format();
   $cs = new customer();
   $ct = new cart();
   $us = new user();
   $cat = new category();
   $brand = new brand();
   $product = new product();
?>

<?php
   header("Cache-Control: no-cache, must-revalidate");
   header("Pragma: no-cache"); 
   header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
   header("Cache-Control: max-age=2592000");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang='vi'>
<head>
   <meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta content='index,follow,all' name='robots'/>
	<link rel="shortcut icon" href="./img/ttp.png" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="./css/lightslider.css" /> 
	<link rel="stylesheet" href="./css/nivo-slider.css">   
	<link rel="stylesheet" href="./css/style.css" />
	<title>pharmacy</title>
	<meta name="description" content="" />
</head>
<body>

<header>
   <div class="container">
      <div class="flex-bw hide991" id="navbar">
         <a href="./" class="logo"><img src="img/ttp.png"></a>
         <div class="right-header">
            <div class="right-header-bottom">
               <ul class="ul-main-menu">
                  <li><a href="index.php">Trang Ch???</a> </></li>
                  <li class="has-sub">
                     <a href="sanpham.php">S???n ph???m <i class="fas fa-sort-down"></i></a>
                     <ul class="ul-sub-menu menu-sanpham">
                        <?php
                           $showCat = $cat -> show_category();
                           if($showCat) {
                              while($result = $showCat ->fetch_assoc()) {
                        ?>
                           <li><a href="productbycat.php?catid=<?php echo $result['category_id'] ?>"><?php echo $result['category_name'] ?></a></li>
                        <?php }} ?>
                     </ul>
                  </li>
                  <li class="has-sub">
                     <a href="sanpham.php">Th????ng hi???u <i class="fas fa-sort-down"></i></a>
                     <ul class="ul-sub-menu thuonghieu">
                     <?php
                        $show_brand = $brand->show_brand();
                        if($show_brand){
                           while($result = $show_brand->fetch_assoc()){
                     ?>
                        <li><a href="productbybrand.php?brandid=<?php echo $result['brand_id'] ?>"><?php echo $result['brand_name'] ?></a></li>
                     <?php }} ?>
                     </ul>
                  </li>
                  <li class="position-relative">
                     <a href="giohang.php">
                        Gi??? h??ng<i class="fa-solid fa-cart-shopping cart-icon"></i>
                     </a>
                     <span class="giohang-span">
                        <?php
                           $check_cart = $ct -> check_cart();
                           if($check_cart){
                                 $qty = session::get("qty");
                                 echo $qty;
                           }else{
                                 echo "0";
                           }
                        ?>
                     </span>
                  </li>
                  
                  <?php
                     if(isset($_GET['customerid'])){
                        $delCart = $ct -> del_all_data_cart();
                        session::destroy();
                     }
                  ?>
                  <?php 
                     $login_check = Session::get('customer_login');
                     if($login_check) {
                     echo "<li><a href='profile.php'>Kh??ch h??ng</a></li>";
                  ?>
                  <li><a href="?customerid=<?php echo Session::get('customer_id')?>" onclick="return confirm('B???n c?? mu???n ????ng xu???t kh??ng?')">????ng Xu???t</a></li>
               <?php }else{ ?>
                  <li><a href="login.php">????ng Nh???p</a></li>
               <?php } ?>

                  <form action="timkiem.php" method="POST">
                     <div class="search-toggle">
                        <input type="text"  placeholder="B???n mu???n mua g???" name="search_product" id="search_product" required=""/>
                           <button class="btn" name="search_button" id="search_button">
                              <i class="fa fa-search"></i>
                           </button>
                     </div>
                  </form>
               </ul>
            </div>
         </div>
      </div>
<!-- search -->
<!-- ph???n phone -->

      <div class="show991">
            <div class="flex-bw">
            <span style="cursor:pointer;display: inline-block;color: #fff;" class="sp-sn"><i class="fas fa-bars fa-2x" onclick="openNav()"></i></span>
            <span style="cursor:pointer;display: inline-block;color: #fff;" class="sp-cn"><i class="fas fa-times fa-2x" onclick="closeNav()"></i></span>
            <a href="giohang.php" class="cart">
               <img src="img/bag.png">
            </a>
         </div>
      <a href="./" class="logo"><img src="img/ttp.png"></a>
    <!-- End Footer -->
         <!-- <div class="clear20 show488"></div> -->
<!-- menu an -->
         <div id="mySidenav" class="sidenav">
            <ul class="menu-mobile" id="accordion">

<!-- new    -->
<aside>
  <p> Menu </p>
  <a href="index.php">
    <i class="fa fa-user-o" aria-hidden="true"></i>
   Trang Ch???
  </a>
  <a href="index.php">
    <i class="fa fa-user-o" aria-hidden="true"></i>
   Gi???i Thi???u
  </a>
  <a href="sanpham.php">
    <i class="fa fa-laptop" aria-hidden="true"></i>
    S???n Ph???m
  </a>
  <a href="chichietsanpham.php">
    <!-- <i class="fa fa-clone" aria-hidden="true"></i> -->
    Th????ng Hi???u SaLaNest
  </a>
  <a href="javascript:void(0)">
    <i class="fa fa-star-o" aria-hidden="true"></i>
    Th????ng Hi???u Gia B???o
  </a>
  <a href="chitietsp.php">
    <i class="fa fa-trash-o" aria-hidden="true"></i>
    V??? Ch??ng T??i
  </a>
  <a href="login.php">
   <i class="fa fa-trash-o" aria-hidden="true"></i>
    ????ng Nh???p
   </a>
   <a href="order.php">
   <i class="fa fa-trash-o" aria-hidden="true"></i>
    Gi??? H??ng
   </a>              
   <div class="clear40"></div>
  
</aside>
<!-- het new -->
               <!-- <li><a href="./">Trang ch???</a></li>
               <li><a href="gioi-thieu.html">Gi???i thi???u</a></li>
               <li class="hassub-mb panel">
                     <p class="phelp"><a href="?quanly=sanpham">S???n ph???m</a><a data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" class="a-icon"><i class="fas fa-angle-down"></i></a></p>
                     <ul class="sub-menu-mb accordion-collapse panel-collapse collapse" id="flush-collapseOne" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                     <?php
                        $showCat = $cat -> show_category();
                        if($showCat) {
                           while($result = $showCat ->fetch_assoc()) {
                     ?>

                        <li><a href="productbycat.php?catid=<?php echo $result['category_id'] ?>"><?php echo $result['category_name'] ?></a></li>
                        <?php }} ?>
                     </ul>
               </li>
               <li class="hassub-mb panel">
                     <p class="phelp"><a href="?quanly=sanpham">Th????ng hi???u</a><a data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo" class="a-icon"><i class="fas fa-angle-down"></i></a></p>
                     <ul class="sub-menu-mb accordion-collapse panel-collapse collapse" id="flush-collapseTwo" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                     <?php
                        $show_brand = $brand->show_brand();
                        if($show_brand){
                           while($result = $show_brand->fetch_assoc()){
                     ?>
                        <li><a href="productbybrand.php?brandid=<?php echo $result['brand_id'] ?>"><?php echo $result['brand_name'] ?></a></li>
                        <?php }} ?>
                     </ul>
               </li> -->
               <!-- <li class="hassub-mb panel">
                     <p class="phelp"><a href="qua-tang.html">Gi??? qu?? t???t</a><a data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo" class="a-icon"><i class="fas fa-angle-down"></i></a></p>
                     <ul class="sub-menu-mb accordion-collapse panel-collapse collapse" id="flush-collapseTwo" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <li><a href="qua-tang.html">Gi??? qu?? 1</a></li>
                        <li><a href="qua-tang.html">Gi??? qu?? 2</a></li>
                        <li><a href="qua-tang.html">Gi??? qu?? 3</a></li>
                     </ul>
               </li> -->
               <!-- <li><a href="">T?? v???n</a></li>
               <li><a href="">Li??n h???</a></li> -->
            </ul>
         </div>


         <!-- het menu an -->
      </div>
      
   </div>
   
</header>
