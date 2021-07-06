<?php
	require "../class/product_class.php";
	session_start();
	if($_SESSION['sessionUserName'] != "") {
		echo " Product Yönetimine Hoşgeldiniz, ".$_SESSION['sessionUserName'];
		echo "<br>";
		if(isset($_GET['prdid'])) {			
			$product = new Product();
			$result = $product->removeProduct($_GET['prdid']);
			if($result == 1) {
				header("location:product.php");
			} else {
				echo "Bir hata oluştu!";
			}
		} else {
			header("location:product.php");
		}
	} else {
		header("Location:../index.php");
	}
	include "../sidebar.php";
	/*DELETE sorgusu örneklenecek.*/
?>