<?php
session_start();

$baslangic = $_POST['baslangic'];
$bitis = $_POST['bitis'];
$saat = $_POST['saat'];

    $sql = "SELECT 

    Yolculuk.YolculukID,
    Yolculuk.SurucuID,
    Yolculuk.Zaman,
    Surucu_Arac.AracID,
    Arac.YolcuMaxSayisi,
    
    Surucu.SAd,
    Surucu.SSoyad,
    k1.KonumIsmi AS Baslangic,
    k2.KonumIsmi AS Bitis
    
    FROM Yolculuk
    JOIN Surucu_Arac ON Yolculuk.SurucuID = Surucu_Arac.SurucuID
    JOIN Arac ON Surucu_Arac.SurucuID = Arac.AracID
    JOIN Surucu  ON Yolculuk.SurucuID = Surucu.SurucuID
    JOIN Konumlar k1 ON Yolculuk.BaslaID = k1.KonumID
    JOIN Konumlar k2 ON Yolculuk.BitisID = k2.KonumID
    WHERE k1.KonumIsmi = '$baslangic'
    and k2.KonumIsmi = '$bitis'
    and Yolculuk.Zaman = '$saat' ";
    

    $stmt = $conn->query($sql);
    $yollar = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>



<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Üniversite Ulaşım Yardım</title>
    <link rel="stylesheet" href="ilansayfasi.css">
</head>
<body>
    <header class="main-header">
        <h1><a href="index.php" class="sefo">UniBla</a></h1>
        <a href="profil.php" class="kullanici-btn">Kullanıcı ismi</a>
        <a href="arackayit.php" class="ilan-ekle-btn">Yolculuk Oluştur</a>
    </header>
    <div class="gorunmez"> </div>

    <?php foreach ($yollar as $yol): ?>
            <main class="ilan-container">
                    <div class="box box1"><?php echo htmlspecialchars($yol['k1.KonumIsmi']); → echo htmlspecialchars($yol['k2.KonumIsmi']); ?></div>
                    <div class="box box2"><?php echo htmlspecialchars($yol['Yolculuk.Zaman']); ?></div>
                    <div class="box box3"><?php echo htmlspecialchars($yol['Surucu.SAd']);   echo htmlspecialchars($yol['Surucu.SSoyad']);            echo htmlspecialchars($yol['Arac.YolcuMaxSayisi']);?></div>
                    <div class="box box4"><a href="#"> Rezerve </a></div>
            </main> 
    <?php endforeach; ?>

        
    </main>
    <div class="gorunmez"> </div>
    <div class="gorunmez"> </div>

    <footer class="main-footer">
        <p>&copy; 2025 ÜniBla - Tüm hakları saklıdır.</p>
        <p>İletişim: unibla@ornekmail.com</p>
    </footer>
</body>
</html>