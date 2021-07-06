<?php
	require "../class/user_class.php";
	session_start();
	if($_SESSION['sessionUserName'] != "") {
		echo " Kullanıcı Yönetimine Hoşgeldiniz, ".$_SESSION['sessionUserName'];
		echo "<br>";
		if($_POST) {
			$user = new User();
			$kontrolSonuc = $user->controlUser($_POST['newKAdi']);
			if($kontrolSonuc->num_rows > 0) {
				echo "Bu kullanıcı adı kullanılmaktadır. Başka bir kullanıcı adı deneyiniz.";
			} else {
				$result = $user->insertUser($_POST);
				if($result == 1) {
					header("Location:user.php");
				} else {
					echo "Bir hata oluştu!";
				}
			}
		}
	} else {
		header("Location:../index.php");
	}
	include "../sidebar.php";
?>
<form action="" method="POST">
	<input name="newKAdi" type="text" placeholder="Kullanıcı Adını Giriniz"></input>
	<input id="NewPassword" name="newKSifre" type="password" placeholder="Şifrenizi Belirleyiniz"></input>
	<input name="newKSubmit" type="submit" title="Kullanıcı Ekle" value="Kullanıcı Ekle"></input>
	<input type="checkbox" onclick="myFunction()"></input>Şifreyi Göster
</form>
<script>
	function myFunction() {
		var x = document.getElementById("NewPassword");
		if(x.type === "password") {
			x.type = "text";
		} else {
			x.type = "password";
		}
	}
</script>