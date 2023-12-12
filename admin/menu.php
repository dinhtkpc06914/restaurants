<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>3SV</span></a>
                    </div>

                    <div class="clearfix"></div>
                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item dropdown">
                                    <div class="nav-dropdown">
                                        <a href="#" id="nav2" class="nav-item nav-link dropdown-toggle text-secondary"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <?php
                                            if (isset($_SESSION['user']) && $_SESSION['user']['hinh'] != "") { ?>
                                                <img src="<?= $UPLOAD_URL . "/users/" . $_SESSION['user']['hinh'] ?>"
                                                    width="30" height="70" class="img-circle profile_img" alt="">
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
                        <div class="profile_info">
                            <span>Welcome</span>
                            <div class="text-white">
                                <?= $_SESSION['user']['ho_ten'] ?>
                            </div>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li class="nav-item">
                                    <a href="<?= $ADMIN_URL ?>/trang-chinh/" class="nav-link"><i class="fa fa-home"></i>
                                        Trang
                                        chủ</a>
                                </li>
                                <li class="nav-item">
                                    <a><i class="fa fa-user"></i>Quản lý khách hàng<span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li class="nav-item"><a href="<?= $ADMIN_URL ?>/khach-hang/index.php?btn_add"
                                                class="nav-link">Thêm mới khách hàng </a></li>
                                        <li class="nav-item"><a href="<?= $ADMIN_URL ?>/khach-hang/index.php?btn_list"
                                                class="nav-link">Danh sách khách hàng </a></li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a><i class="fa fa-user"></i>Quản lý nhân viên<span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li class="nav-item"><a href="<?= $ADMIN_URL ?>/nhan-vien/index.php?btn_add"
                                                class="nav-link">Thêm mới nhân viên </a></li>
                                        <li class="nav-item"><a href="<?= $ADMIN_URL ?>/nhan-vien/index.php?btn_list"
                                                class="nav-link">Danh sách nhân viên </a></li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a><i class="fa fa-edit"></i>Quản lý loại bàn<span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li class="nav-item"><a href="<?= $ADMIN_URL ?>/loai-ban/index.php?btn_add"
                                                class="nav-link">Thêm mới loại bàn </a></li>
                                        <li class="nav-item"><a href="<?= $ADMIN_URL ?>/loai-ban/index.php?btn_list"
                                                class="nav-link">Danh sách loại bàn</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a><i class="fa fa-edit"></i>Quản lý danh mục<span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li class="nav-item"><a href="<?= $ADMIN_URL ?>/loai-mon/index.php?btn_add"
                                                class="nav-link">Thêm mới danh mục </a></li>
                                        <li class="nav-item"><a href="<?= $ADMIN_URL ?>/loai-mon/index.php?btn_list"
                                                class="nav-link">Tất cả danh mục</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a><i class="fa fa-edit"></i>Quản lý món ăn<span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li class="nav-item"><a href="<?= $ADMIN_URL ?>/mon-an/index.php?btn_add"
                                                class="nav-link">Thêm
                                                mới món ăn </a></li>
                                        <li class="nav-item"><a href="<?= $ADMIN_URL ?>/mon-an/index.php?btn_list"
                                                class="nav-link">Danh
                                                sách món ăn</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= $ADMIN_URL ?>/hoa-don/index.php?btn_list"><i
                                            class="fa fa-edit"></i>Quản lý đơn
                                        hàng<span></span></a>

                                </li>
                                <li class="nav-item">
                                    <a href="<?= $ADMIN_URL ?>/dat-ban/index.php?btn_list"><i
                                            class="fa fa-edit"></i>Quản lý đơn đặt
                                        bàn<span></span></a>

                                </li>
                                <li class="nav-item">
                                    <a href="<?= $ADMIN_URL ?>/binh-luan/index.php?btn_list"><i
                                            class="fa fa-comments"></i>Quản lý bình
                                        luận<span></span></a>

                                </li>
                                <li class="nav-item">
                                    <a href="<?= $ADMIN_URL ?>/thong-ke/index.php?btn_list" class="nav-link"><i
                                            class="fa fa-bar-chart-o"></i> THỐNG KÊ <span
                                            class="fa fa-chevron-down"></span></a>
                                </li>
                            </ul>
                        </div>
                       
                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                  
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                           

                            <li role="presentation" class="nav-item dropdown open">
                                <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1"
                                    data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">6</span>
                                </a>
                                <ul class="dropdown-menu list-unstyled msg_list" role="menu"
                                    aria-labelledby="navbarDropdown1">
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <div class="text-center">
                                            <a class="dropdown-item">
                                                <strong>See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->    
            <!-- /footer content -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

</body>

</html>