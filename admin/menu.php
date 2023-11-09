<link href="img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">


<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- Libraries Stylesheet -->
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="css/style.css" rel="stylesheet">

<body>
    <div class="container-fluid bg-info py-3 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white pr-3" href="">FAQs</a>
                        <span class="text-white">|</span>
                        <a class="text-white px-3" href="">Help</a>
                        <span class="text-white">|</span>
                        <a class="text-white pl-3" href="">Support</a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;"></div>
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0">
            <a href="index.html" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-4 text-primary"><span class="text-secondary">A</span>DMIN</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0">
                    <a href="<?= $ADMIN_URL ?>/trang-chinh/" class="nav-item nav-link">Trang chủ</a>
                    <a href="<?= $ADMIN_URL ?>/loai-hang/index.php?btn_list" class="nav-item nav-link">Loại hàng</a>
                    <a href="<?= $ADMIN_URL ?>/khach-hang/index.php?btn_list" class="nav-item nav-link">Khách hàng</a>
                </div>
                <a href="" class="navbar-brand mx-5 d-none d-lg-block">
                    <h1 class="m-0 display-4 text-primary"><span class="text-secondary">A</span>DMIN</h1>
                </a>
                <div class="navbar-nav mr-auto py-0">
                    <a href="<?= $ADMIN_URL ?>/hang-hoa/index.php?btn_list" class="nav-item nav-link">Hàng hóa</a>
                    <a href="<?= $ADMIN_URL ?>/binh-luan/" class="nav-item nav-link">Bình luận</a>
                    <a href="<?= $ADMIN_URL ?>/thong-ke/" class="nav-item nav-link">Thống kê</a>

                </div>

            </div>
            `<div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <div class="nav-dropdown">
                            <a href="#" id="nav2" class="nav-item nav-link dropdown-toggle text-secondary"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <?php
                                if (isset($_SESSION['user']) && $_SESSION['user']['hinh'] != "") { ?>
                                    <img src="<?= $UPLOAD_URL . "/users/" . $_SESSION['user']['hinh'] ?>" width="30"
                                        height="30" class="mb-2 object-fit-cover rounded-circle" alt="">
                                <?php } else { ?>
                                    <i class="fa fa-user primary-color"></i>
                                <?php } ?>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end nav-link-menu">
                                <ul class="nav-list">
                                    <li><a href="<?= $SITE_URL . '/tai-khoan/dang-nhap.php?btn_logout' ?>"
                                            class="dropdown-item"><i class="fas fa-sign-out-alt"></i>
                                            Đăng xuất</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

    </div>

    </div>

</body>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>