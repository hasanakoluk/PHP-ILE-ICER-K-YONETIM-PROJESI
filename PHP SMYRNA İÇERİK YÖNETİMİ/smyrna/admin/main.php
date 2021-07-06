<?php
	session_start();
	if($_SESSION['sessionUserName'] != "") {
		echo "Admin Paneline Hoşgeldiniz, ".$_SESSION['sessionUserName'];
	} else {
		header("Location:index.php");
	}
	include "sidebar.php";
?>