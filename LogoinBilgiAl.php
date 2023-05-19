<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="Logoin.js"></script>
    <link rel="stylesheet" href="StyleLogoin.css">
    <title>Giriş Sayfası</title>
</head>
<body>
<?php
    // Form gönderildiğinde çalışacak kod
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $_kullaniciAdi = $_POST['KullaniciAdi'];
        $_sifre = $_POST['sifre'];

        // Kullanıcı adı ve şifre doğrulama
        if ($_kullaniciAdi === 'b22128899030@sakarya.edu.tr' && $_sifre === 'b22128899030') {
            echo '<h1>Doğru bilgiler! Giriş başarılı!</h1>';
        } else {
            echo '<h1>Hatalı bilgiler! Giriş başarısız!</h1>';
        }
    }
    ?>
    <div class="container">
        <h1>Giriş Yap</h1>
        <form action="" method="post" id="loginForm" onsubmit="return validateForm()">
            <label for="KullaniciAdi">Kullanıcı Adı</label>
            <input type="text" id="KullaniciAdi" name="KullaniciAdi" placeholder="G221111111@sakarya.edu.tr">

            <label for="sifre">Şifre</label>
            <input type="password" id="sifre" name="sifre" placeholder="Şifre">

            <input type="submit" value="Giriş Yap">
        </form>
        <p id="message"></p>
    </div>

    <p style="text-align: center;">
        <a href="index.html" class="menu">Anasayfaya Dön</a>
        <a href="../Bashar-Kim/sehrim.html" class="menu">Şehrim</a>
        <a href="hakkimda.html" class="menu">Hakkımda</a>
    </p>
    <script>
        function validateForm() {
            var sifre = document.getElementById('sifre').value;
            var KullaniciAdi = document.getElementById('KullaniciAdi').value;
            
            if (!sifre || !KullaniciAdi ) {
                alert('Tüm alanları doldurunuz.');
                return false;
            }
        }
    </script>

   
</body>
</html>
