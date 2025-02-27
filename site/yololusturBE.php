<?php
include 'baglanti.php';

$baslangic = $_POST['baslangic'];
$bitis = $_POST['bitis'];
$saat = $_POST['saat'];
$sid=$_SESSION['user_id'];


$sql = "SELECT  Arac.YolcuMaxSayisi from Arac where AracID ='$sid'";
    $stmt = $conn->query($sql);
    $yolcu = $stmt->fetchAll(PDO::FETCH_ASSOC);

$sql3 = "SELECT KonumID from Konumlar where KonumIsmi='$bitis'";
    $stmt = $conn->query($sql);
$bitisid = $stmt->fetch();

$sql4 = "SELECT KonumID from Konumlar where KonumIsmi='$baslangic'";
    $stmt = $conn->query($sql);
    $baslangicid = $stmt->fetch();

echo $bitisid;
echo $baslangicid;
$sql2="INSERT INTO Yolculuk (SurucuID, BaslaID, BitisID, YolcuSayisi,Zaman)  VALUES ('$sid','$baslangicid','$bitisid','$yolcu','$saat')";

$stmt = $conn->prepare($sql2);
$stmt->execute();

?>