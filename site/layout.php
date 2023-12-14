
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TĐP RESTAURANT</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->

  <link href="<?=$CONTENT_URL?>/assets/img/logongu.png" rel="icon">
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="<?=$CONTENT_URL?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?=$CONTENT_URL?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?=$CONTENT_URL?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=$CONTENT_URL?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?=$CONTENT_URL?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?=$CONTENT_URL?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?=$CONTENT_URL?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=$CONTENT_URL?>/assets/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- ======= Top Bar ======= -->
  <?php 
    include '../layout/menu.php';
   
    ?>
  <main id="main">
  <?php 
    include $VIEW_NAME;
    ?>
  </main><!-- End #main -->
  <?php 
    include '../layout/footer.php';
    ?>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?=$CONTENT_URL?>/assets/vendor/aos/aos.js"></script>
  <script src="<?=$CONTENT_URL?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=$CONTENT_URL?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?=$CONTENT_URL?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?=$CONTENT_URL?>/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?=$CONTENT_URL?>/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?=$CONTENT_URL?>/assets/js/main.js"></script>

</body>

</html>