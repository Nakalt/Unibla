
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
    <link rel="stylesheet" href="giris2.css">
</head>
<body>
    <div class="login-container">
        <h1>Araç Kayıt</h1>

        <!-- Hata Mesajını Göster -->
        <?php if (!empty($error_message)): ?>
            <p class="alert"><?php echo $error_message; ?></p>
        <?php endif; ?>

        <form action="aracekle.php" method="POST">
            <label for="Marka">Marka</label>
            <input type="text" id="Marka" name="Marka" placeholder="Araç markasını girin" required>

            <label for="Model">Model</label>
            <input type="text" id="Model" name="Model" placeholder="Araç modelini girin" required>

            <label for="Renk">Renk</label>
            <input type="text" id="Renk" name="Renk" placeholder="Araç rengini girin" required>

            <label for="Yıl">Yıl</label>
            <input type="text" id="Yıl" name="Yıl" placeholder="Araç yılını girin" required>

            <label for="Yolcu">Max Yolcu</label>
            <input type="text" id="Yolcu" name="Yolcu" placeholder="Maksimum yolcu sayısını girin" required>

            <label>Araç Fotoğrafı:</label>
            <input type="file" name="foto" required>

            <button type="submit">Aracı Kaydet</button>
        </form>
       <!-- <div class="register-link">
            <p>Hesabınız yok mu? <a href="kaydol.php">Kaydol</a></p>
        </div>  -->
    </div>
</body>
</html>
