<?php include 'connect.php'; ?>
<!doctype html>
<html lang="tr">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Berrin Kocabıyık, Barış Ömer Döngel">
  <meta name="description" content="Falını paylaş veya diğer insanların fallarını yorumla.">
  <meta name="keywords" content="fal, kahve falı, tarrot, kahve, falcılık, fal bakma, falzade">

  <!-- Style CSS -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!--Fontawesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Giriş Yap</title>
</head>
<body id="login">
  <div class="container">
    <div class="row">
      <div class="col-md-7 p-4">
        <img src="assets/img/logo.png">
        <h3 class="montserrat pt-4 fw-bold">Falını paylaş veya diğer insanların fallarını yorumla. Yorumların beğenilirse bağış kazan !</h3>
      </div>
      <div class="col-md-5">
        <form class="bg-white p-5 montserrat rounded-3 shadow" action="system.php" name="signin" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <label>Fotoğraf Seçiniz</label>
            <input type="file" name="fotograf" required>
          </div>
          <div class="mb-3">
            <input type="text" name="kullanici_adi" placeholder="Kullanıcı Adı" class="form-control p-2" id="InputEmail" aria-describedby="emailHelp" required>
          </div>
          <div class="mb-3">
            <input type="password" name="kullanici_sifre" placeholder="Şifre" class="form-control p-2" required>
          </div>
          <div class="mb-3">
            <input type="text" name="isim" placeholder="İsim" class="form-control p-2" required>
          </div>
          <button type="submit" name="signin" class="btn btn-primary w-100 p-2">Kayıt Ol</button>
          <hr>
          <a class="text-decoration-none text-white btn btn-success w-100 p-2" href="login.php">Giriş Yap</a>
        </form>
      </div>
    </div>
  </div>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>