<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ol</title>
    <link rel="stylesheet" href="kaydol.css">
</head>
<body>
    <div class="register-container">
        <h1>Yolculuk Oluştur</h1>

        <!-- PHP Hata Mesajını Göster -->
        <?php if (!empty($error_message)): ?>
            <p class="alert"><?php echo $error_message; ?></p>
        <?php endif; ?>

        <form action="yololusturBE.php" method="POST">
         <?php
include 'baglanti.php';
$sql = "SELECT KonumIsmi FROM Konumlar";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($result) > 0) {
    echo '<div class="menu baslangic-menu">';
    echo '<label><strong>Başlangıç Noktası:</strong></label>';
    echo '<select name="baslangic" class="rota-box">';
    
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
    echo '<select name="bitis" class="rota-box">';
    
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
                <select name="saat" class="rota-box">
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

                        <button type="submit" class="search-btn"><a class="sefo">Yolculuk oluştur</a></button>

        </div>
</form>
        
    </div>
</body>
</html>
