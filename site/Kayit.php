<?php include 'baglanti.php'; ?>

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
        <h1>Kayıt Ol</h1>

        <!-- PHP Hata Mesajını Göster -->
        <?php if (!empty($error_message)): ?>
            <p class="alert"><?php echo $error_message; ?></p>
        <?php endif; ?>

        <form action="KayitBE.php" method="POST">
            <label for="Name">İsim</label>
            <input type="text" id="Name" name="Name" placeholder="İsim girin" required>

            <label for="Surname">Soyisim</label>
            <input type="text" id="Surname" name="Surname" placeholder="Soyisim girin" required>

            <label for="username">Telefon Numarası</label>
            <input type="tel" id="Tel" name="Tel" placeholder="05XX XXX XX XX" maxlength="11" required>
    
            <label for="Email">E-posta Adresi</label>
            <input type="email" id="Email" name="Email" placeholder="E-posta girin" required>
            
            <label for="Password">Şifre</label>
            <input type="password" id="Password" name="Password" placeholder="Şifre girin" required>
<input type="hidden" name="Kontrol" value="1" />
            <label for="Checkbox">ㅤㅤㅤㅤㅤㅤㅤㅤㅤSürücüyüm</label>
            <input type="checkbox" id="Kontrol" name="Kontrol" value="0">
            

            
            <button type="submit">Kayıt Ol</button>
        </form>
        <div class="login-link">
            <p>Hesabınız var mı? <a href="Giris.php">Giriş Yap</a></p>
        </div>
    </div>
</body>
</html>
