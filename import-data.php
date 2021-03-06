<?php
require __DIR__."/system/functions.php";
?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
  .center {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }
  </style>

  <title>Ürün Listesi | Kodluyoruz - Bootchamp</title>
</head>
<body class="bg-dark <?= darkMode("color") ?>">


  <div class="container">
    <div class="row">
      <!-- Odev-1 -->
      <div class="col-md-12">
        <div class="card <?= darkMode("border") ?>" style="margin: 2rem 0 1rem 0;">
          <div class="card-header bg-light <?= darkMode("color") ?>">
            <div class="container row">
              <div class="col-md-10">
                İçeri Aktar
              </div>
              <div class="col-md-2">
                <div class="btn-group d-flex justify-content-end">
                  <a href="index" class="btn btn-secondary btn-sm">Geri dön</a>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body">
            <p>
              <?php require __DIR__."/includes/alert.php"; ?>

              <form class="form" action="system/functions" method="post" enctype="multipart/form-data">
                <div class="col-md-8 offset-md-2">
                  <div class="form-group mt-3">
                    <label for="jsonFile">Dosya Seçiniz</label>
                    <input type="file" id="jsonFile" class="form-control" name="jsonFile">
                    <input type="hidden" name="tableName" value="products">
                    <div class="form-group mt-3">
                      <button type="submit" class="btn btn-primary" name="import">Gönder</button>
                    </div>
                  </div>
                </div>
              </form>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
</body>
</html>
