<?php

header("Access-Control-Allow-Origin: *");
include 'config.php';

$sql = "update tbl_pegawai set nama_hotel=?,alamat_hotel=?,telp_hotel=?,email_hotel=?,
    img_url=? where id=?";

$id = $_REQUEST['id'];
$NamaHotel = $_REQUEST['nama_hotel'];
$AlamatHotel = $_REQUEST['alamat_hotel'];
$TelpHotel = $_REQUEST['telp_hotel'];
$EmailHotel = $_REQUEST['email_hotel'];
$img = $_REQUEST['img_url'];


try {
    $dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);    
    $stmt = $dbh->prepare($sql);    
    $stmt->execute(array($NamaHotel,$AlamatHotel,$TelpHotel,$EmailHotel,$img));
    $dbh = null;
    echo "{'item':$id}";
} catch (PDOException $e) {
    echo '{"error":{"text":' . $e->getMessage() . '}}';
}
?>
