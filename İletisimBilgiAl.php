<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>İletişim Bilgi Al</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="Styleİletisim.css">
 
</head>
<body>
  <div class="container mt-5">
    <h1>Gönderilen Bilgiler</h1>
    <table class="table table-bordered">
      <tr>
        <th>Alan</th>
        <th>Değer</th>
      </tr>
              
        <td>Ad</td>
        <td><?php echo isset($_POST['ad']) ? $_POST['ad'] : ''; ?></td>
      </tr>
      <tr>
        <td>Soyad</td>
        <td><?php echo isset($_POST['soyad']) ? $_POST['soyad'] : ''; ?></td>
      </tr>
      <tr>
        <td>E-posta Adresi</td>
        <td><?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?></td>
      </tr>
      <tr>
        <td>Telefon Numarası</td>
        <td><?php echo isset($_POST['telefon']) ? $_POST['telefon'] : ''; ?></td>
      </tr>
      <tr>
        <td>Mesaj</td>
        <td><?php echo isset($_POST['mesaj']) ? $_POST['mesaj'] : ''; ?></td>
      </tr>
    </table>
  </div>
  <table>
            <tr>
                <td>
                    <p class="menu2">
                        <a href="index.html" class="menu">Anasayfaya Dön</a>
                    </p>
                </td>
                <td>
                    <a class="menu" href="sehrim.html">ŞEHRİM</a>
                </td>
                <td>
                  <a class="menu" href="iletişimVue.js.html">İLETİŞİM (Vue.js kullanarak kontrol sağlanan)</a>
              </td>
            </tr>
        </table>
</body>
</html>
