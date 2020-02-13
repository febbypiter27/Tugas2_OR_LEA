<?php
  session_start();
  $koneksi = new mysqli("localhost","root","","pickabook");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Pick-a-boo(k)</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <!-- logo halaman -->
  <!-- <link href="img/favicon.png" rel="icon"> -->
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700|Raleway:400,700&display=swap"
    rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <nav class="navbar navbar-light custom-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">Pick-a-boo(k).</a>

      <nav class="nav navbar-defult">
        <div class="container">
          <ul class="nav navbar-nav">
            <div class="d-flex flex-row-reverse">
              <div class="p-2"><a href="home.php">Home</a></div>
              <div class="p-2"><a href="keranjang.php">Keranjang</a></div>
              <div class="p-2"><a href="login.php">Login</a></div>
              <div class="p-2"><a href="checkout.php">Checkout</a></div>
            </div>
          </ul>
        </div>
      </nav>
    </div>
  </nav>

  <hr>

  <main id="main">

    <!-- <div class="site-section site-buku"> -->
      <br>
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-md-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-up">
            <h4>"The more you read, the more things you will know. The more that you learn, the more places you'll go."</h4>
            <p class="mb-0">- Dr. Seuss</p>
          </div>
          <div class="col-md-12 col-lg-6 text-left text-lg-right" data-aos="fade-up" data-aos-delay="100">
            <div id="filters" class="filters">
              <a href="#" data-filter="*" class="active">All</a>
              <a href="#" data-filter=".fiksi">fiksi</a>
              <a href="#" data-filter=".bantuan diri">bantuan diri</a>
              <a href="#" data-filter=".fantasi">fantasi</a>
              <a href="#" data-filter=".komik">komik</a>
            </div>
          </div>
        </div>
        
        <div id="buku-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">


          <?php $ambil = $koneksi->query("SELECT * FROM buku"); ?>
          <?php while($perbuku = $ambil->fetch_assoc()){ ?>
          <div class="col-md-3">
            <div class="thumbnail">
              <img src="../cover_buku/<?php echo $perbuku['cover_buku']; ?>" width="200">
              <div class="option">
                <h1></h1>
                <h6><?php echo $perbuku['judul_buku']; ?></h6>
                <h6>Rp <?php echo number_format($perbuku['harga_buku']); ?></h6>
                <a href="beli.php?id=<?php echo $perbuku['id_buku']; ?>" class="btn btn-outline-primary">Beli</a>
                <h2></h2>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>

  </main>
  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <p class="mb-1">&copy; Copyright Pick-a-boo(k). All Rights Reserved</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Vendor JS Files -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/jquery/jquery-migrate.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/easing/easing.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
  <script src="vendor/isotope/isotope.pkgd.min.js"></script>
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

</body>

</html>
