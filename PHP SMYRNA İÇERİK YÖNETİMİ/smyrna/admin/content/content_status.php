<?php
	require "../class/content_class.php";
	session_start();
	if($_SESSION['sessionUserName'] != "") {
		echo " Kullanıcı Yönetimine Hoşgeldiniz, ".$_SESSION['sessionUserName'];
		echo "<br>";
		if(isset($_GET['cid'])) {			
			$content = new Content();
			$contentStatuControl = $content->contentStatus($_GET['cid']);
			$result = $content->changeStatus($_GET['cid'],$contentStatuControl['status']);
			if($result == 1) {
				header("location:content.php");
			} else {
				echo "Bir hata oluştu!";
			}
		} else {
			header("location:content.php");
		}
	} else {
		header("Location:../index.php");
	}
	include "../sidebar.php";
	/*DELETE sorgusu örneklenecek.*/
?>