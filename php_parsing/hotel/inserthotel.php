<?php

header("Access-Control-Allow-Origin: *");
include 'config.php';

$sql = "INSERT INTO tbl_hotel(nama_hotel,alamat_hotel,telp_hotel,email_hotel,img_url) 
        values(:nama,:alamat,:telp,:email,:img_url)";

$Nama = $_REQUEST['nama'];
$Alamat = $_REQUEST['alamat'];
$Telp = $_REQUEST['telp'];
$Email = $_REQUEST['email'];
$img = "http://10.17.21.88/directory/data/pictures/" . $_REQUEST['img_url'].".jpg";

try {
    $dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $dbh->prepare($sql);    
    $stmt->bindParam("Nama", $Nama);
    $stmt->bindParam("Alamat", $Alamat);
    $stmt->bindParam("Telp", $Telp);
    $stmt->bindParam("Email", $Email);
    $stmt->bindParam("img", $img);
    $stmt->execute();
    $dbh = null;
    echo "{'item':true}";
} catch (PDOException $e) {
    echo '{"error":{"text":' . $e->getMessage() . '}}';
}
?>
