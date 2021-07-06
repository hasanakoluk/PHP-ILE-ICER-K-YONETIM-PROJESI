<?php
	require "class/user_class.php";
	session_start();
	if($_POST) {
		$user = new User();
		$result = $user->getUser($_POST);
		if($result->num_rows > 0) {
			$_SESSION["sessionUserName"] = $_POST['kAdi'];
			header("Location:main.php");
		} else {
			echo "Hatalı Giriş! Tekrar Deneyiniz.";
		}
	} else {
		session_destroy();
	}
	
?>
<form action="" method="POST">	
	<input type="text" name="kAdi" placeholder="Kullanıcı Adınız"></input>
	<input type="password" name="kPass" placeholder="Şifreniz"></input>
	<input type="submit" name="uSubmit" value="Giriş Yap" title="Giriş Yap"></input>
</form>