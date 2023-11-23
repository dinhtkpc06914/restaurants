<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.2/css/bootstrap.min.css" rel="stylesheet">

<style>

*{
  box-sizing: border-box;
}

.search-box{
  width: fit-content;
  height: fit-content;
  position: relative;
}
.input-search{
  height: 50px;
  width: 50px;
  border-style: none;
  padding: 10px;
  font-size: 18px;
  letter-spacing: 2px;
  outline: none;
  border-radius: 25px;
  transition: all .5s ease-in-out;
  background-color:#cda45e;;
  padding-right: 40px;
  color:#fff;
}
.input-search::placeholder{
  color:rgba(255,255,255,.5);
  font-size: 18px;
  letter-spacing: 2px;
  font-weight: 100;
}
.btn-search{
  width: 50px;
  height: 50px;
  border-style: none;
  font-size: 20px;
  font-weight: bold;
  outline: none;
  cursor: pointer;
  border-radius: 50%;
  position: absolute;
  right: 0px;
  color:#ffffff ;
  background-color:transparent;
  pointer-events: painted;  
}
.btn-search:focus ~ .input-search{
  width: 200px;
  border-radius: 0px;
  background-color: transparent;
  border-bottom:1px solid rgba(255,255,255,.5);
  transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
}
.input-search:focus{
  width: 200px;
  border-radius: 0px;
  background-color: transparent;
  border-bottom:1px solid rgba(255,255,255,.5);
  transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
}
#user-img{
  border-radius: 50%;
}
#dropdown-menu{
  background-color: #0c0b09;
}
#dropdown-menu a{
  color: #cda45e;
}
.widget-header{
padding: 10px ;
}
</style>

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
  <header id="header" class="fixed-top d-flex align-items-cente ml-5  ">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="<?= $SITE_URL ?>/trang-chinh/index.php">Trang chủ</a></li>
          <li><a class="nav-link scrollto" href="#about">Về chúng tôi</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#specials">Khuyến mãi</a></li>
          <li><a class="nav-link scrollto" href="#events">Sự kiện</a></li>
          <li><a class="nav-link scrollto" href="#chefs">Đầu bếp</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Phòng trưng bày</a></li>
          <li><a class="nav-link scrollto" href="#contact">Liên hệ</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- navbar -->
      <!-- Tìm kiếm  -->
      <div class="search-box">
    <button class="btn-search"><i class="bi bi-search"></i></button>
    <input type="text" class="input-search" placeholder="Type to Search...">
    
  </div>
  <div class="widget-header d-flex ">
                
                <a href="<?= $SITE_URL . "/cart/list-cart.php" ?>" class="icon icon-sm "><i
                         class="bi bi-basket  "></i></a>
                <span class="badge badge-pill badge-danger notify">
                    <?php
                    if (isset($_SESSION['total_cart'])) {
                        echo $_SESSION['total_cart'];
                    } else {
                        echo 0;
                    }
                    ?>
                </span>
                <a href="#" class="icon icon-sm  " id="dropdownMenu1" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <?php
                        if (isset($_SESSION['user']) && $_SESSION['user']['hinh'] != "") { ?>
                        <img src="<?= $UPLOAD_URL . "/users/" . $_SESSION['user']['hinh'] ?>" width="60" height="50"
                        class="mb-2 object-fit-cover" alt="" id="user-img" alt="">
                        <?php } else { ?>
                        <i class="bi bi-person" ></i>
                        <?php }  ?>
                    </a>
                    <div class="text" >       
                   
                        <?php
                        if (isset($_SESSION['user'])) { ?>
                        <div class="text-white"><?= $_SESSION['user']['ho_ten'] ?></div>
                        <?php } else { ?>
                      
                        <?php }  ?>
                        <div class="dropdown-menu " aria-labelledby="dropdownMenu1" id="dropdown-menu">
                            <?php
                            if (isset($_SESSION['user'])) { ?>

                            <?php if ($_SESSION['user']['vai_tro'] == 1) { ?>
                            <a class="dropdown-item pl-3 py-2" href="<?= $ADMIN_URL . "/trang-chinh/" ?>">Quản trị
                                admin</a>
                            <?php }  ?>

                            <a class="dropdown-item pl-3 py-2"
                                href="<?= $SITE_URL . '/tai-khoan/cap-nhat-tk.php' ?>">Cập nhật tài khoản</a>
                            <a class="dropdown-item pl-3 py-2" href="<?= $SITE_URL . '/tai-khoan/doi-mk.php' ?>">Đổi mật
                                khẩu</a>
                            <a class="dropdown-item pl-3 py-2"
                                href="<?= $SITE_URL . '/tai-khoan/dang-nhap.php?btn_logout' ?>">Đăng xuất</a>


                            <?php } else { ?>

                            <a class="dropdown-item pl-3 py-2" href="<?= $SITE_URL . '/tai-khoan/dang-nhap.php' ?>">Đăng
                                nhập</a>
                            <a class="dropdown-item pl-3 py-2" href="<?= $SITE_URL . '/tai-khoan/dang-ky.php' ?>">Đăng
                                ký</a>

                            <?php }  ?>
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