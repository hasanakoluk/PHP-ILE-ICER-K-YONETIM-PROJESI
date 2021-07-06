<?php
class User {
	function getUser($data) {
		require "./baglan.php";
		$sql = "SELECT * FROM user WHERE status = 0 AND remove = 0 AND username = '".$data['kAdi']."' AND password = '".$data['kPass']."'";
		$result = $conn->query($sql);
		return $result;
	}
	
	function getAllUser() {
		require "../baglan.php";
		$sql = "SELECT * FROM user WHERE remove = 0";
		$result = $conn->query($sql);
		return $result;
	}
	
	function insertUser($data) {
		require "../baglan.php";
		$sql = "INSERT INTO user(username,password) VALUES ('".$data['newKAdi']."','".$data['newKSifre']."')";
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
	
	function userStatus($userId) {
		require "../baglan.php";
		$sql = "SELECT status FROM user WHERE id = '".$userId."'";
		$result = $conn->query($sql);
		$result = mysqli_fetch_array($result);
		return $result;
	}
	
	function changeStatus($userId,$statuValue) {
		require "../baglan.php";
		if($statuValue == 0) {
			$newStatu = 1;
		} else {
			$newStatu = 0;
		}
		$sql = "UPDATE user SET status = '".$newStatu."' WHERE id='".$userId."'";
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