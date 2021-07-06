<?php
	require "../class/user_class.php";
	session_start();
	if($_SESSION['sessionUserName'] != "") {
		echo " Kullanıcı Yönetimine Hoşgeldiniz, ".$_SESSION['sessionUserName'];
		echo "<br>";
		if(isset($_GET['uid'])) {
			$uid = $_GET['uid'];
			$user = new User();
			$result = $user->removeUser($uid);
			if($result == 1) {
				header("Location:user.php");
			} else {
				echo "Bir hata oluştu!";
			}
		} else {
			header("Location:user.php");
		}
	} else {
		header("Location:../index.php");
	}
	include "../sidebar.php";
?>