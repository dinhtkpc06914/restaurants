<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="<?= $ADMIN_URL ?>/trang-chinh/" class="nav-item nav-link" class="site_title"><i
                    class="fa fa-paw text-white"></i> <span class="fw-bold text-white">RESTAURANT!</span></a>
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
                                    <img src="<?= $UPLOAD_URL . "/users/" . $_SESSION['user']['hinh'] ?>" width="30"
                                        height="70" class="img-circle profile_img" alt="">
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
                        <a href="<?= $ADMIN_URL ?>/trang-chinh/" class="nav-link"><i class="fa fa-home"></i> Trang
                            chủ</a>
                    </li>
                    <li class="nav-item">
                        <a><i class="fa fa-edit"></i> Quản lý <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li class="nav-item"><a href="<?= $ADMIN_URL ?>/khach-hang/index.php?btn_list"
                                    class="nav-link">Quản Lý Khách hàng</a></li>
                            <li class="nav-item"><a href="<?= $ADMIN_URL ?>/nhan-vien/index.php?btn_list"
                                    class="nav-link">Quản Lý Nhân Viên</a></li>
                            <li class="nav-item"><a href="<?= $ADMIN_URL ?>/loai-ban/index.php?btn_list"
                                    class="nav-link">Quản lý loại bàn</a></li>
                            <li class="nav-item"><a href="<?= $ADMIN_URL ?>/mon-an/index.php?btn_list"
                                    class="nav-link">Quản lý món ăn</a></li>
                            <li class="nav-item"><a href="<?= $ADMIN_URL ?>/loai-mon/index.php?btn_list"
                                    class="nav-link">Quản lý loại món ăn</a></li>
                            <li class="nav-item"><a href="<?= $ADMIN_URL ?>/binh-luan/index.php?btn_list"
                                    class="nav-link">Quản lý bình luận</a></li>
                            <li class="nav-item"><a href="<?= $ADMIN_URL ?>/hoa-don/index.php?btn_list"
                                    class="nav-link">Quản lý đơn đặt món</a></li>
                            <li class="nav-item"><a href="<?= $ADMIN_URL ?>/dat-ban/index.php?btn_list"
                                    class="nav-link">Quản lý đặt bàn</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a><i class="fa fa-user"></i> Tài khoản <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li class="nav-item"><a href="#">Thay đổi thông tin</a></li>
                            <li class="nav-item"><a href="#">Thoát</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="<?= $ADMIN_URL ?>/thong-ke/index.php?btn_list" class="nav-link"><i
                                class="fa fa-bar-chart-o"></i> THỐNG KÊ <span class="fa fa-chevron-down"></span></a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- <ul class="nav child_menu">
                            <li><a href="#">Báo cáo bán hàng</a></li>
                            <li><a href="#">Báo cáo nhân viên</a></li>

                        </ul> -->
        </li>

        </ul>
    </div>

</div>
<!-- /sidebar menu -->

<!-- /menu footer buttons -->

<!-- /menu footer buttons -->
</div>
</div>