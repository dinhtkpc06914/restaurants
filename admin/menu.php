<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="<?= $ADMIN_URL ?>/trang-chinh/" class="nav-item nav-link" class="site_title"><i class="fa fa-paw text-white"></i> <span class="fw-bold text-white">RESTAURANT!</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="<?= $CONTENT_ADMIN ?>/images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a href="<?= $ADMIN_URL ?>/trang-chinh/" class="nav-item nav-link"><i class="fa fa-home"></i> Trang chủ<span ></span></a>

                    </li>
                    <li><a><i class="fa fa-edit"></i> Quản lý <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li> <a href="<?= $ADMIN_URL ?>/khach-hang/index.php?btn_list" class="nav-item nav-link">Quản Lý Khách hàng</a></li>
                            <li><a href="<?= $ADMIN_URL ?>/ban-an/index.php?btn_list" class="nav-item nav-link">Quản lý bàn ăn</a></li>
                            <li><a href="<?= $ADMIN_URL ?>/loai-ban/index.php?btn_list" class="nav-item nav-link">Quản lý loại bàn</a></li>
                            <li><a href="#">Quản lý món ăn</a></li>
                            <li><a href="#">Quản lý loại món ăn</a></li>
                            <li><a href="#">Quản lý hóa đơn</a></li>
                            <li><a href="#">Quản lý bình luận</a></li>
                            <li><a href="#">Quản lý đặt bàn</a></li>
                           

                        </ul>
                    </li>
                    <li><a><i class="fa fa-user"></i> Tài khoản <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#">Thay đổi thông tin</a></li>
                            <li><a href="#">Thoát</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-bar-chart-o"></i> Báo cáo <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#">Báo cáo bán hàng</a></li>
                            <li><a href="#">Báo cáo nhân viên</a></li>

                        </ul>
                    </li>

                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->

        <!-- /menu footer buttons -->
    </div>
</div>