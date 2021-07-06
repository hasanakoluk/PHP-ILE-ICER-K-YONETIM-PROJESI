<?php
class Content {
	function getContent() {
		require "../baglan.php";
		$sql = "SELECT * FROM content WHERE remove = 0";
		$result = $conn->query($sql);
		return $result;
	}
	
	function removeContent($id) {
		require "../baglan.php";
		$sql = "UPDATE content SET remove = '1' WHERE id='".$id."'";
		$result = $conn->query($sql);
		return $result;
	}
	
	function addContent($data) {
		require "../baglan.php";
		$sql = "INSERT INTO content(title,summary,description) VALUES ('".$data['addCntTitle']."','".$data['addCntSummary']."','".$data['addCntDescription']."')";
		$result = $conn->query($sql);
		return $result;		
	}
	
	function contentStatus($contentId) {
		require "../baglan.php";
		$sql = "SELECT status FROM content WHERE id = '".$contentId."'";
		$result = $conn->query($sql);
		$result = mysqli_fetch_array($result);
		return $result;
	}
	
	function changeStatus($contentId,$statuValue) {
		require "../baglan.php";
		if($statuValue == 0) {
			$newStatu = 1;
		} else {
			$newStatu = 0;
		}
		$sql = "UPDATE content SET status = '".$newStatu."' WHERE id='".$contentId."'";
		$result = $conn->query($sql);
		return $result;
	}
	
	function getContentById($contentId) {
		require $_SERVER['DOCUMENT_ROOT']."/smyrna/admin/baglan.php";
		$sql = "SELECT * FROM content WHERE remove = 0 AND id='".$contentId."'";
		$result = $conn->query($sql);
		$result = mysqli_fetch_array($result);
		return $result;
	}
	
	function updateContent($data,$contentId) {
		require "../baglan.php";
		$sql = "UPDATE content SET title = '".$data['addCntTitle']."',summary = '".$data['addCntSummary']."',description = '".$data['addCntDescription']."' WHERE id='".$contentId."'";
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