<?php

$serverName = "localhost";
$dbUserName = "root";
$dbUserPassword = "";
$dbName = "db_smyrna";


$conn = new mysqli($serverName,$dbUserName,$dbUserPassword,$dbName);

if($conn->connect_error) {
	echo "Bağlantı Kurulamadı. Hata: ".$conn->connect_error;
}

?>