<?php include 'baglanti.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
    <link rel="stylesheet" href="Giris.css">
</head>
<body>
    <div class="login-container">
        <h1>Giriş Yap</h1>

        <!-- Hata Mesajını Göster -->
        <?php if (!empty($error_message)): ?>
            <p class="alert"><?php echo $error_message; ?></p>
        <?php endif; ?>

        <form action="GirisBE.php" method="POST">
            <label for="Email">E-mail</label>
            <input type="email" id="Email" name="Email" placeholder="E-mailinizi girin" required>

            <label for="Password">Şifre</label>
            <input type="password" id="Password" name="Password" placeholder="Şifrenizi girin" required>
            <input type="hidden" name="Kontrol" value="1" />
            <label for="Checkbox">ㅤㅤㅤㅤㅤㅤㅤㅤㅤSürücüyüm</label>
            <input type="checkbox" id="Kontrol" name="Kontrol" value="0">
            
            

            <button type="submit">Giriş Yap</button>
        </form>
        <div class="register-link">
            <p>Hesabınız yok mu? <a href="Kayit.php">Kaydol</a></p>
        </div>
    </div>
</body>
</html>
