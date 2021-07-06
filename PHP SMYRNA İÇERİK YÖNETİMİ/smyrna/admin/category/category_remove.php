<?php
	require "../class/category_class.php";
	session_start();
	if($_SESSION['sessionUserName'] != "") {
		echo " Kategori Yönetimine Hoşgeldiniz, ".$_SESSION['sessionUserName'];
		echo "<br>";
		if(isset($_GET['ctgid'])) {			
			$category = new Category();
			$result = $category->removeCategory($_GET['ctgid']);
			if($result == 1) {
				header("location:category.php");
			} else {
				echo "Bir hata oluştu!";
			}
		} else {
			header("location:category.php");
		}
	} else {
		header("Location:../index.php");
	}
	include "../sidebar.php";
	/*DELETE sorgusu örneklenecek.*/
?>