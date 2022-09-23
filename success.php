<?php include 'inc/header.php' ;?>
<?php include 'inc/sale.php' ;?>
<?php
    if(isset($_GET['orderid']) && $_GET['orderid']=='order'){
		$customer_id = Session::get('customer_id');
        $insertOrder = $ct -> insertOrder($customer_id);
		$delCart = $ct -> del_all_data_cart();
		header('Location:success.php');
    }
?>
<p>Thanh toán thành công!</p>
<?php
	$customer_id = Session::get('customer_id');
    $get_amount = $ct -> getAmountPrice($customer_id);
    if($get_amount) {
        $amount = 0;
        while($result = $get_amount -> fetch_assoc()) {
        $price =  $result['price'];
        $amount += $price;
        $date = $result ['date_order'];
        }
    }
?> 
<p>Bạn đã mua hàng với giá: <?php echo number_format($amount) ."vnd"; ?> </p>
<p>Bạn đã mua hàng lúc: <?php  echo $date; ?> </p>
<p>CHúng tui sẽ xử lý</p>
<?php include 'inc/footer.php' ;?>
<!-- hhhhhhhhhhhhh -->
<!-- dskjadhsv -->
<!-- dfwefweqf2 -->