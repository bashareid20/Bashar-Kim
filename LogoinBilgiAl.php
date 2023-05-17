<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $kullanici_adi = $_POST["kullanici_adi"];
  $sifre = $_POST["sifre"];

  if ($kullanici_adi == "ahmet" && $sifre == "93ıudj") {
    // Kullanıcı adı ve şifre doğru ise index.html sayfasına yönlendirme
    header("Location: index.html");
    exit();
  } else {
    // Kullanıcı adı veya şifre hatalı ise hata mesajı gösterme
    echo "Kullanıcı adı veya şifre hatalı.";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Ana Sayfa</title>
</head>
<body>
  <h1>Ana Sayfa</h1>

  <form action="anasayfa.php" method="post">
    <input type="text" name="kullanici_adi" placeholder="Kullanıcı Adı" required>
    <input type="password" name="sifre" placeholder="Şsifre" required>
    <input type="submit" value="Gönder">
  </form>
</body>
</html>
