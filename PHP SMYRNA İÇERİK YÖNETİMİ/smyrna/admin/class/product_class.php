<?php
class Product {
	function getProduct() {
		require "../baglan.php";
		$sql = "SELECT * FROM product";
		$result = $conn->query($sql);
		return $result;
	}
	
	function getProductCategoryName($id) {
		require "../baglan.php";
		$sql = "SELECT * FROM category WHERE id = '".$id."'";
		$result = $conn->query($sql);
		$result = mysqli_fetch_array($result);
		return $result;
	}	
	
	function getSubCategory() {
		require $_SERVER['DOCUMENT_ROOT']."/smyrna/admin/baglan.php";
		$sql = "SELECT * FROM category WHERE remove = 0 AND status = 0 AND level <> 0";
		$result = $conn->query($sql);
		return $result;
	}
	
	function removeProduct($id) {
		require "../baglan.php";
		$sql = "DELETE FROM product WHERE id='".$id."'";
		$result = $conn->query($sql);
		return $result;
	}
	
	function addProduct($data,$image) {
		require "../baglan.php";
		if(isset($data['prdBestProduct'])) {
			$bestProduct = 0;
		} else {
			$bestProduct = 1;
		}
		if(isset($data['prdBestSeller'])) {
			$bestSeller = 0;
		} else {
			$bestSeller = 1;
		}
		$sql = "INSERT INTO	product(
		title,
		summary,
		description,
		installment_options,
		price,
		sale_price,
		category,
		image,
		product_code,
		stock,
		age_range,
		best_product,
		best_seller) 
		VALUES (
		'".$data['addPrdTitle']."',
		'".$data['addPrdSummary']."',
		'".$data['addPrdDescription']."',
		'".$data['addPrdInstallment']."',
		'".$data['addPrdPrice']."',
		'".$data['addPrdSalePrice']."',
		'".$data['ctgCategory']."',
		'".$image."',
		'".$data['addPrdStockCode']."',
		'".$data['addPrdStockNumber']."',
		'".$data['prdAgeRank']."',
		'".$bestProduct."',
		'".$bestSeller."')";
		$result = $conn->query($sql);
		return $result;		
	}
	
	function getProductById($productId) {
		require $_SERVER['DOCUMENT_ROOT']."/smyrna/admin/baglan.php";
		$sql = "SELECT * FROM product WHERE id='".$productId."'";
		$result = $conn->query($sql);
		$result = mysqli_fetch_array($result);
		return $result;
	}
	
	function getMainCategory() {
		require $_SERVER['DOCUMENT_ROOT']."/smyrna/admin/baglan.php";
		$sql = "SELECT * FROM category WHERE remove = 0 AND status = 0";
		$result = $conn->query($sql);
		return $result;
	}
	
	function getHomePageSubCategory() {
		require $_SERVER['DOCUMENT_ROOT']."/smyrna/admin/baglan.php";
		$sql = "SELECT * FROM category WHERE remove = 0 AND status = 0 AND level <> 0 AND showhomepage = 0 LIMIT 3";
		$result = $conn->query($sql);
		return $result;
	}
	
	function getCategoryByLevel($level) {
		require $_SERVER['DOCUMENT_ROOT']."/smyrna/admin/baglan.php";
		$sql = "SELECT * FROM category WHERE remove = 0 AND level='".$level."'";
		$result = $conn->query($sql);
		return $result;
	}
	
	function updateProduct($data,$productId) {
		require "../baglan.php";
		if(isset($data['prdBestProduct'])) {
			$productBestProduct = 0;
		} else {
			$productBestProduct = 1;
		}
		if(isset($data['prdBestSeller'])) {
			$productBestSeller = 0;
		} else {
			$productBestSeller = 1;
		}
		$sql = "UPDATE product SET 
		title = '".$data['addPrdTitle']."',
		summary = '".$data['addPrdSummary']."',
		description = '".$data['addPrdDescription']."',
		installment_options = '".$data['addPrdInstallment']."',
		price = '".$data['addPrdPrice']."',
		sale_price = '".$data['addPrdSalePrice']."',
		category = '".$data['ctgCategory']."',
		product_code = '".$data['addPrdStockCode']."',
		stock = '".$data['addPrdStockNumber']."',
		age_range = '".$data['prdAgeRank']."',
		best_product = '".$productBestProduct."',
		best_seller = '".$productBestSeller."' 
		WHERE id='".$productId."'";
		$result = $conn->query($sql);
		return $result;
	}
	
	function updateCategoryWithImage($data,$categoryId, $image) {
		require "../baglan.php";
		if(isset($data['prdBestProduct'])) {
			$productBestProduct = 0;
		} else {
			$productBestProduct = 1;
		}
		if(isset($data['prdBestSeller'])) {
			$productBestSeller = 0;
		} else {
			$productBestSeller = 1;
		}
		$sql = "UPDATE product SET 
		title = '".$data['addPrdTitle']."',
		summary = '".$data['addPrdSummary']."',
		description = '".$data['addPrdDescription']."',
		installment_options = '".$data['addPrdInstallment']."',
		price = '".$data['addPrdPrice']."',
		sale_price = '".$data['addPrdSalePrice']."',
		category = '".$data['ctgCategory']."',
		product_code = '".$data['addPrdStockCode']."',
		stock = '".$data['addPrdStockNumber']."',
		age_range = '".$data['prdAgeRank']."',
		best_product = '".$productBestProduct."',
		image = '".$image."',
		best_seller = '".$productBestSeller."' 
		WHERE id='".$productId."'";
		$result = $conn->query($sql);
		return $result;
	}
	
	function getBestProduct() {
		require $_SERVER['DOCUMENT_ROOT']."/smyrna/admin/baglan.php";
		$sql = "SELECT * FROM product WHERE best_product = 0 LIMIT 5";
		$result = $conn->query($sql);
		return $result;
	}
}
?>