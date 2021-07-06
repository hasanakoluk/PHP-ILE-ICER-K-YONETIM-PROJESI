<?php
	require "../class/category_class.php";
	session_start();
	if($_SESSION['sessionUserName'] != "") {
		echo " Kategori Yönetimine Hoşgeldiniz, ".$_SESSION['sessionUserName'];
		echo "<br>";
		if(isset($_GET['ctgid'])) {			
			$category = new Category();
			$contentStatuControl = $category->categoryStatus($_GET['ctgid']);
			$result = $category->changeStatus($_GET['ctgid'],$contentStatuControl['status']);
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