<?php

include 'baglanti.php';

$baslangic = $_POST['baslangic'];
$bitis = $_POST['bitis'];
$saat = $_POST['saat'];

   // $sql ="select ";
    

    //$stmt = $conn->query($sql);
    //$yollar = $stmt->fetch();


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
        <a href="profil.php" class="kullanici-btn"><?php echo htmlspecialchars($_SESSION['isim']); ?></a>
        <a href="#" class="ilan-ekle-btn">Yolculuk Oluştur</a>
    </header>
    <div class="gorunmez"> </div>


<main class="ilan-container">
        
            <div class="box box1">Sultan Bayezid KYK Erkek Yurdu → Egitim fakultesi</div>
            <div class="box box2">18:00:00</div>
            <div class="box box3">Sürücü:messi            Max yolcu: 3</div>
            <div class="box box4"><a href="#"> Rezerve </a></div>
            </main> 
         
    <main class="ilan-container">
            <div class="box box1">Yesilirmak kiz yurdu → Sultan Bayezid KYK Erkek Yurdu</div>
            <div class="box box2">10:30:00</div>
            <div class="box box3">Sürücü:selma            Max yolcu: 2</div>
            <div class="box box4"><a href="#"> Rezerve </a></div>
            </main>
    <main class="ilan-container">
            <div class="box box1">Egitim fakultesi → Tip fakultesi</div>
            <div class="box box2">06:00:00</div>
            <div class="box box3">Sürücü:selin            Max yolcu: 5</div>
            <div class="box box4"><a href="#"> Rezerve </a></div>
            </main>
    <main class="ilan-container">
            <div class="box box1">Yesilirmak kiz yurdu → Yuksekokul</div>
            <div class="box box2">12:00:00</div>
            <div class="box box3">Sürücü:mehmet            Max yolcu: 6</div>
            <div class="box box4"><a href="#"> Rezerve </a></div>
            </main>
            <main class="ilan-container">
            <div class="box box1">Yuksekokul → Sultan Bayezid KYK Erkek Yurdu</div>
            <div class="box box2">14:30:00</div>
            <div class="box box3">Sürücü:messi            Max yolcu: 4</div>
            <div class="box box4"><a href="#"> Rezerve </a></div>
            </main>
    <main class="ilan-container">
            <div class="box box1">Tip fakultesi → Husnusah Kiz yurdu</div>
            <div class="box box2">14:00:00</div>
            <div class="box box3">Sürücü:ahmet            Max yolcu: 23</div>
            <div class="box box4"><a href="#"> Rezerve </a></div>


        
    </main>
        
   <div class="gorunmez"> </div>
    <div class="gorunmez"> </div>

    <footer class="main-footer">
        <p>&copy; 2025 ÜniBla - Tüm hakları saklıdır.</p>
        <p>İletişim: unibla@ornekmail.com</p>
    </footer>
</body>
</html>