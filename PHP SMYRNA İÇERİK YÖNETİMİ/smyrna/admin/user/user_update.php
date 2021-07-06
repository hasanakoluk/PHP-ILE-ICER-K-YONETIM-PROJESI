<?php
	require "../class/user_class.php";
	session_start();
	if($_SESSION['sessionUserName'] != "") {
		echo " Kullanıcı Yönetimine Hoşgeldiniz, ".$_SESSION['sessionUserName'];
		echo "<br>";
		if($_POST) {			
			$user = new User();
			$kontrolSonuc = $user->controlUser($_POST['updateKAdi']);			
			if($kontrolSonuc->num_rows > 0) {
				$userInfo = $user->getUserInfo($_GET["uid"]);
				$userInfoName = $userInfo['username'];
				$userInfoPass = $userInfo['password'];
				echo "Bu kullanıcı adı kullanılmaktadır. Başka bir kullanıcı adı deneyiniz.";
			} else {
				$result = $user->userUpdate($_POST,$_GET["uid"]);
				if($result == 1) {
					header("Location:user.php");
				} else {
					echo "Bir hata oluştu!";
				}
			}
		} else {
			$user = new User();
			if(isset($_GET["uid"])) {
				$userInfo = $user->getUserInfo($_GET["uid"]);
				$userInfoName = $userInfo['username'];
				$userInfoPass = $userInfo['password'];
			} else {
				header("Location:user.php");
			}
		}
	} else {
		header("Location:../index.php");
	}
	include "../sidebar.php";
?>
<form action="" method="POST">
	<input name="updateKAdi" type="text" placeholder="Kullanıcı Adını Giriniz" value="<?php echo $userInfoName ?>"></input>
	<input id="NewPassword" name="updateKSifre" type="password" placeholder="Şifrenizi Belirleyiniz" value="<?php echo $userInfoPass ?>"></input>
	<input name="newKSubmit" type="submit" title="Güncelle" value="Güncelle"></input>
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