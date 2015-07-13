<?php
header("Access-Control-Allow-Origin:*");
include 'config.php';

$sql = "select id,nama_hotel,alamat_hotel,telp_hotel,email_hotel,img_url from tbl_hotel where id=:id";

try {
	$dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);	
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $dbh->prepare($sql);  
	$stmt->bindParam("id", $_GET['id']);
	$stmt->execute();
	$hotel = $stmt->fetchObject();  
	$dbh = null;
	echo '{"item":'. json_encode($hotel) .'}'; 
} catch(PDOException $e) {
	echo '{"error":{"text":'. $e->getMessage() .'}}'; 
}

?>
