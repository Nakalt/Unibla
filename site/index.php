<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Üniversite Ulaşım Yardım</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="anasayfa">
    <header class="main-header">
        <h1>ÜniBla</h1>
        <?php include 'baglanti.php'; if (isset($_SESSION['user_id']) && ($_SESSION['user_id']!==NULL)) :?>
              <?php if($_SESSION['sofor']):?>
                <a href="#" class="oturum-btnacs"><?php echo htmlspecialchars($_SESSION['isim']);?></a>
                <a href="hesapcikis.php" class="ilan-ekle-btnacs">Çıkış yap</a>
                <a href="KayitAracFE.php" class="ilan-ekle-btnacs">Araç oluştur</a>
                <a href="yololustur.php" class="ilan-ekle-btnacs">Yolculuk Oluştur</a>
            <?php else :?>
                <a href="#" class="oturum-btnacy"><?php echo htmlspecialchars($_SESSION['isim']);?></a>
                <a href="hesapcikis.php" class="ilan-ekle-btnacy">Çıkış yap</a>
            <?php endif;?>               
    <?php else :?>
                 <a href="Giris.php" class="oturum-btn">Oturum Aç<p>
                <a href="Kayit.php" class="ilan-ekle-btnacs" >Yolculuk Oluştur</a>

    <?php endif;?>
        
        
    </header>
    
    <form method="POST" action="ilansayfasi.php">
        <div class="search-container">
<?php

$sql = "SELECT KonumIsmi FROM Konumlar";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($result) > 0) {
    echo '<div class="menu baslangic-menu">';
    echo '<label><strong>Başlangıç Noktası:</strong></label>';
    echo '<select id="baslangic" name="baslangic" class="rota-box">';
    
    foreach ($result as $row) {
        echo '<option value="' . htmlspecialchars($row['KonumIsmi']) . '">' . htmlspecialchars($row['KonumIsmi']) . '</option>';
    }
    
    echo '</select>';
    echo '</div>';
} else {
    echo 'No results found.';}

?>
<?php
include 'baglanti.php';
$sql = "SELECT KonumIsmi FROM Konumlar";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($result) > 0) {
    echo '<div class="menu bitis-menu">';
    echo '<label><strong>Bitiş Noktası:</strong></label>';
    echo '<select id="bitis" name="bitis" class="rota-box">';
    
    foreach ($result as $row) {
        echo '<option value="' . htmlspecialchars($row['KonumIsmi']) . '">' . htmlspecialchars($row['KonumIsmi']) . '</option>';
    }
    
    echo '</select>';
    echo '</div>';
} else {
    echo 'No results found.';}

?>


            <div class="menu saat-menu">
                <label><strong>Saat Aralığı:</strong></label>
                <select id= "saat" name="saat" class="rota-box">
                    <option value="06:00:00">06:00</option>
                    <option value="06:30">06:30</option>
                    <option value="07:00">07:00</option>
                    <option value="07:30">07:30</option>
                    <option value="08:00">08:00</option>
                    <option value="08:30">08:30</option>
                    <option value="09:00">09:00</option>
                    <option value="09:30">09:30</option>
                    <option value="10:00">10:00</option>
                    <option value="10:30">10:30</option>
                    <option value="11:00">11:00</option>
                    <option value="11:30">11:30</option>
                    <option value="12:00">12:00</option>
                    <option value="12:30">12:30</option>
                    <option value="13:00">13:00</option>
                    <option value="13:30">13:30</option>
                    <option value="14:00">14:00</option>
                    <option value="14:30">14:30</option>
                    <option value="15:00">15:00</option>
                    <option value="15:30">15:30</option>
                    <option value="16:00">16:00</option>
                    <option value="16:30">16:30</option>
                    <option value="17:00">17:00</option>
                    <option value="17:30">17:30</option>
                    <option value="18:00">18:00</option>
                    <option value="18:30">18:30</option>
                    <option value="19:00">19:00</option>
                    <option value="19:30">19:30</option>
                    <option value="20:00">20:00</option>
                    <option value="20:30">20:30</option>
                    <option value="21:00">21:00</option>
                    <option value="21:30">21:30</option>
                    <option value="22:00">22:00</option>
                    <option value="22:30">22:30</option>
                    <option value="23:00">23:00</option>
                    <option value="23:30">23:30</option>
                </select>
            </div>

                        <button type="submit" class="search-btn"><a class="sefo">Yolculuk Bul</a></button>

        </div>
    </form>

</body>
<footer class="second-footer">
    <div class="second-footer-class">
    <div class="secondkutu"><h1>Misyonumuz </h1><br><p>Ulaşımda pratik çözümlerle daha verimli bir deneyim sunmak için sürekli gelişen ve yenilikçi bir platform oluşturuyoruz. </p></div>
    <div class="secondkutu"><p>Günümüzün hızla değişen dünyasında, öğrencilerin ulaşım ihtiyaçlarını kolaylaştırmak ve onlara zamandan tasarruf sağlamak amacıyla sitemizi kurduk. Bu site, öğrencilere şehir içi ulaşımı en verimli şekilde planlamaları için yardımlaşma sağlıyor. Amacımız, öğrencilere günlük ulaşım süreçlerini daha hızlı ve stressiz bir şekilde yönetme imkanı tanımaktır.</p></div>
    <div class="secondkutu"><img src="amasya (2).png"></img></div>
    </div>
</footer>


<footer class="main-footer">
    <div class="footer-content">
        <p>&copy; 2025 ÜniBla - Tüm hakları saklıdır.</p>
        <p>İletişim: unibla@ornekmail.com</p>
    </div>
</footer>


</html>
