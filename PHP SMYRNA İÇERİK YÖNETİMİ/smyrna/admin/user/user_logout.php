<?php
	require "../class/user_class.php";
	session_start();
	if($_SESSION['sessionUserName'] != "") {
		session_destroy();
		header("Location:../index.php");
	} else {
		header("Location:../index.php");
	}
	include "../sidebar.php";
	/*DELETE sorgusu örneklenecek.*/
?>