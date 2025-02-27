<?php
session_start();
$servername = "sql100.infinityfree.com";
$username = "if0_38392532";
$password = "blockhain31";
$dbname = "if0_38392532_unibla";

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname, 3306);,
 $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Hata raporlama modunu aç
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>