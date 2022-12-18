<?php
if(session_status() == PHP_SESSION_NONE){
	session_start();
}

require_once '../model/infinity_model.php';
if($_POST['ye']=="customer_cart_view_del"){
	$mode= new mode;
 if($mode->customer_cart_view_del($_POST['Booking_ID'])){
 	echo "delete success";
 }else{
 	echo "error";
 }
}else if($_POST['ye']=="payment_method"){
	$mode= new mode;
	 $mode->payment_method();
}else if($_GET['ye']=="cardit_card"){
	$mode= new mode;
	if($mode->cardit_card()==1){
		 echo "<script>alert('');location.href='../view/managepayment/credit_card.php'</script>";

	}else{
		 echo "<script>alert('Payment Successful');
		 location.href='../view/managepayment/cpayment_history.php'</script>";

	}

}
?>