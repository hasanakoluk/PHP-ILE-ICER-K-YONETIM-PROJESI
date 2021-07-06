<?php
class Category {
	function getCategory() {
		require "../baglan.php";
		$sql = "SELECT * FROM category WHERE remove = 0";
		$result = $conn->query($sql);
		return $result;
	}
	
	function getCategoryTitle($id) {
		require "../baglan.php";
		$sql = "SELECT * FROM category WHERE id = '".$id."'";
		$result = $conn->query($sql);
		$result = mysqli_fetch_array($result);
		return $result;
	}
	
	function removeCategory($id) {
		require "../baglan.php";
		$sql = "UPDATE category SET remove = '1' WHERE id='".$id."'";
		$result = $conn->query($sql);
		return $result;
	}
	
	function categoryStatus($categoryId) {
		require "../baglan.php";
		$sql = "SELECT status FROM category WHERE id = '".$categoryId."'";
		$result = $conn->query($sql);
		$result = mysqli_fetch_array($result);
		return $result;
	}
	
	function changeStatus($categoryId,$statuValue) {
		require "../baglan.php";
		if($statuValue == 0) {
			$newStatu = 1;
		} else {
			$newStatu = 0;
		}
		$sql = "UPDATE category SET status = '".$newStatu."' WHERE id='".$categoryId."'";
		$result = $conn->query($sql);
		return $result;
	}
	
	function addCategory($data,$image) {
		require "../baglan.php";
		if(isset($data['showHomePage'])) {
			$anasayfa = 0;
		} else {
			$anasayfa = 1;
		}
		$sql = "INSERT INTO category(title,description,level,showhomepage,image) VALUES ('".$data['addCtgTitle']."','".$data['addCtgDescription']."','".$data['ctgCategory']."','".$anasayfa."','".$image."')";
		$result = $conn->query($sql);
		return $result;		
	}
	
	function getMainCategory() {
		require $_SERVER['DOCUMENT_ROOT']."/smyrna/admin/baglan.php";
		$sql = "SELECT * FROM category WHERE remove = 0 AND status = 0 AND level = 0";
		$result = $conn->query($sql);
		return $result;
	}
	
	function getHomePageSubCategory() {
		require $_SERVER['DOCUMENT_ROOT']."/smyrna/admin/baglan.php";
		$sql = "SELECT * FROM category WHERE remove = 0 AND status = 0 AND level <> 0 AND showhomepage = 0 LIMIT 3";
		$result = $conn->query($sql);
		return $result;
	}
	
	function getCategoryById($categoryId) {
		require $_SERVER['DOCUMENT_ROOT']."/smyrna/admin/baglan.php";
		$sql = "SELECT * FROM category WHERE remove = 0 AND id='".$categoryId."'";
		$result = $conn->query($sql);
		$result = mysqli_fetch_array($result);
		return $result;
	}
	
	function getCategoryByLevel($level) {
		require $_SERVER['DOCUMENT_ROOT']."/smyrna/admin/baglan.php";
		$sql = "SELECT * FROM category WHERE remove = 0 AND level='".$level."'";
		$result = $conn->query($sql);
		return $result;
	}
	
	function updateCategory($data,$categoryId) {
		require "../baglan.php";
		if(isset($data['showHomePage'])) {
			$anasayfa = 0;
		} else {
			$anasayfa = 1;
		}
		$sql = "UPDATE category SET title = '".$data['addCntTitle']."', description = '".$data['addCntDescription']."', level = '".$data['ctgCategory']."', showhomepage = '".$anasayfa."' WHERE id='".$categoryId."'";
		$result = $conn->query($sql);
		return $result;
	}
	
	function updateCategoryWithImage($data,$categoryId, $image) {
		require "../baglan.php";
		if(isset($data['showHomePage'])) {
			$anasayfa = 0;
		} else {
			$anasayfa = 1;
		}
		$sql = "UPDATE category SET title = '".$data['addCntTitle']."', description = '".$data['addCntDescription']."', level = '".$data['ctgCategory']."', showhomepage = '".$anasayfa."', image = '".$image."' WHERE id='".$categoryId."'";
		$result = $conn->query($sql);
		return $result;
	}
	
	function removeUser($id) {
		require "../baglan.php";
		$sql = "UPDATE user SET remove = '1' WHERE id='".$id."'";
		$result = $conn->query($sql);
		return $result;
	}
	
	function controlUser($userName) {
		require "../baglan.php";
		$sql = "SELECT * FROM user WHERE username = '".$userName."'";
		$result = $conn->query($sql);
		return $result;
	}	
	
	function getUserInfo($userId) {
		require "../baglan.php";
		$sql = "SELECT * FROM user WHERE id = '".$userId."'";
		$result = $conn->query($sql);
		$result = mysqli_fetch_array($result);
		return $result;
	}
	
	function userUpdate($data,$userId) {
		require "../baglan.php";
		$sql = "UPDATE user SET username = '".$data['updateKAdi']."', password = '".$data['updateKSifre']."' WHERE id='".$userId."'";
		$result = $conn->query($sql);
		return $result;
	}	
}
?>