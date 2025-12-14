<?php

$servername = "sql100.infinityfree.com";
$username = "if0_40450696";
$password = "b7q2zB0x4e";//d_g_z@rsjLNS\wH~UKJe
$dbname = "if0_40450696_cekbabaa";
$table = "aldim";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Bağlantı Başarısız: " . $conn->connect_error);
}


$ad      = $_POST['ad'];
$soyad   = $_POST['soyad'];
$bolum   = $_POST['bolum'];
$hobiler = $_POST['hobi'];



$sql = "INSERT INTO $table (ad, soyad, bolum, Hobi) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);


$stmt->bind_param("ssss", $ad, $soyad, $bolum, $hobiler);


if ($stmt->execute()) {
    echo "Kayıt başarıyla veritabanına eklendi.";
    
} else {
    echo "Hata oluştu: " . $stmt->error;
}


$stmt->close();
$conn->close();

?>