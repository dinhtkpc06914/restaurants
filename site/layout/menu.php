<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.2/css/bootstrap.min.css" rel="stylesheet">
<link href="<?= $CONTENT_URL ?>/assets/css/menu.css" rel="stylesheet">

<body>
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+1 5589 55488 55</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Giờ hoạt động: 11AM - 23PM</span></i>
      </div>

      <div class="languages d-none d-md-flex align-items-center">
        <ul>
          <li>En</li>
          <li><a href="#">De</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><img style="width: 7rem;" src="<?= $CONTENT_URL ?>/assets/img/logongu.png" alt=""></li>
          <li class=" <?= $name_page == 'trang_chu' ? 'active' : '' ?>"><a
              href="<?= $SITE_URL ?>/trang-chinh/index.php">Trang chủ</a></li>
          <li><a " href=" #about">Về chúng tôi</a></li>
          <li><a href="<?= $SITE_URL ?>/mon-an/liet-ke.php">Thực đơn</a></li>
          <li class="<?= $name_page == 'dac_biet' ? 'active' : '' ?>"><a
              href="<?= $SITE_URL ?>/trang-chinh/index.php?dac_biet">Khuyến mãi</a></li>
          <li class=" <?= $name_page == 'su_kien' ? 'active' : '' ?>"><a
              href="<?= $SITE_URL ?>/trang-chinh/index.php?su_kien">Sự kiện</a></li>
          <li class="<?= $name_page == 'phong_trung_bay' ? 'active' : '' ?>"><a href="#gallery">Phòng trưng bày</a></li>

          <li class=" <?= $name_page == 'dat_bat' ? 'active' : '' ?>"><a
              href="<?= $SITE_URL ?>/trang-chinh/index.php?dat_ban">Đặt bàn</a></li>
          <li><a class="nav-link " href="#contact">Liên hệ</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <div class="ml-1">

        <form action="  <?= $SITE_URL ?>/mon-an/liet-ke.php" method="POST">
          <div class="search-box">
            <button class="btn-search" name="timkiem" type="submit"><i class="bi bi-search"></i></button>
            <input type="text " name="kyw" class="input-search" placeholder="Type to Search...">

          </div>
        </form>
      </div>

      <div class="widget-header d-flex ">

        <a href="<?= $SITE_URL . "/cart/list-cart.php" ?>"class="icon icon-sm "><i class="bi bi-basket"></i></a>
        <span class="badge badge-pill text-danger">
          <?php
          if (isset($_SESSION['total_cart'])) {
            echo $_SESSION['total_cart'];
          } else {
            echo 0;
          }
          ?>
        </span>
        <a href="#" class="icon icon-sm  " id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
          <?php
          if (isset($_SESSION['user']) && $_SESSION['user']['hinh'] != "") { ?>
            <img src="<?= $UPLOAD_URL . "/users/" . $_SESSION['user']['hinh'] ?>" width="60" height="50"
              class="mb-2 object-fit-cover" alt="" id="user-img" alt="">
          <?php } else { ?>
            <i class="bi bi-person"></i>
          <?php } ?>
        </a>
        <div class="text">

          <?php
          if (isset($_SESSION['user'])) { ?>
            <div class="text-white">
              <?= $_SESSION['user']['ho_ten'] ?>
            </div>
          <?php } else { ?>

          <?php } ?>
          <div class="dropdown-menu " aria-labelledby="dropdownMenu1" id="dropdown-menu">
            <?php
            if (isset($_SESSION['user'])) { ?>

              <?php if ($_SESSION['user']['vai_tro'] == 1) { ?>
                <a class="dropdown-item pl-3 py-2" href="<?= $ADMIN_URL . "/trang-chinh/" ?>">Quản trị
                  admin</a>
              <?php } ?>

              <a class="dropdown-item pl-3 py-2" href="<?= $SITE_URL . '/tai-khoan/cap-nhat-tk.php' ?>">Cập nhật tài
                khoản</a>
              <a class="dropdown-item pl-3 py-2" href="<?= $SITE_URL . '/tai-khoan/doi-mk.php' ?>">Đổi mật
                khẩu</a>
              <a class="dropdown-item pl-3 py-2" href="<?= $SITE_URL . '/cart/hoadon.php' ?>">Danh sách đơn hàng</a>
              <a class="dropdown-item pl-3 py-2" href="<?= $SITE_URL . '/tai-khoan/dang-nhap.php?btn_logout' ?>">Đăng
                xuất</a>


            <?php } else { ?>

              <a class="dropdown-item pl-3 py-2" href="<?= $SITE_URL . '/tai-khoan/dang-nhap.php' ?>">Đăng
                nhập</a>
              <a class="dropdown-item pl-3 py-2" href="<?= $SITE_URL . '/tai-khoan/dang-ky.php' ?>">Đăng
                ký</a>

            <?php } ?>
          </div>
        </div>
      </div>
    </div>

  </header>
  <!-- End Header -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>