<?php
$monAnList = mon_an_select_all();
// Lấy danh sách loại món

?>
<?php
// Lấy danh sách món ăn từ cơ sở dữ liệu
$limit = 6; // Số lượng sản phẩm trên mỗi trang
$page = isset($_GET['page']) ? $_GET['page'] : 1; // Trang hiện tại, mặc định là trang 1

$monAnList = mon_an_select_page1("ma_mon_an", $limit, $page);
?>
<!-- ======= Menu Section ======= -->
<!-- ======= Menu Section ======= -->
<section id="menu-section" class="menu section-bg">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <p>Những món ăn ngon miệng của chúng tôi</p>
    </div>
    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-12 d-flex justify-content-center">
        <!-- Trong đoạn mã HTML -->
       
      </div>
    </div>

    <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
      <?php foreach ($monAnList as $monAn): ?>
        <div class="col-lg-6 menu-item filter-starters">
          <img src="<?= $UPLOAD_URL . '/products/' . $monAn['hinh'] ?>" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">
              <?= $monAn['ten_mon_an'] ?>
            </a>
            <?php if ($monAn['gia_giam'] > 0): ?>
              <span class="discount-price">
                <?= number_format($monAn['don_gia'] - $monAn['gia_giam'],0,".",".") ?>đ
              </span>
              <span class="original-price"><del>
                  <?= number_format($monAn['don_gia'],0,".",".") ?>đ
                </del></span>
            <?php else: ?>
              <span class="original-price">
                <?= number_format($monAn['don_gia'],0,".",".") ?>đ
              </span>
            <?php endif; ?>
          </div>     
          <a   href="<?= $SITE_URL . '/mon-an/chi-tiet.php?ma_mon_an=' . $monAn['ma_mon_an'] ?>"
            class=" btn-book animate "><button class="text-white"  style="background-color: #cda45e; border-radius: 4px;">Xem món</button> </a>
        </div>
      <?php endforeach; ?>
    </div>
    <!-- Thêm phần phân trang -->
    <div class="row">
    <div class="col-lg-12 d-flex justify-content-center">
        <?php
        // Tổng số trang
        $totalPages = ceil($_SESSION['total_pro'] / $limit);

        // Hiển thị mũi tên 'Qua lại'
        if ($_SESSION['page'] > 1) {
            echo '<a class="nav-link scrollto mt-5" href="?page=' . ($_SESSION['page'] - 1) . '">&#9668; Quay lại</a>';
        }

        // Hiển thị link phân trang
        for ($i = 1; $i <= $totalPages; $i++) {
            echo '<a class="nav-link scrollto mt-5" href="?page=' . $i . '">' . $i . '</a> ';
        }

        // Hiển thị mũi tên 'Tiếp theo'
        if ($_SESSION['page'] < $totalPages) {
            echo '<a class="nav-link scrollto mt-5" href="?page=' . ($_SESSION['page'] + 1) . '">Tiếp theo &#9658;</a>';
        }
        ?>
    </div>
</div>
  </div>
  
</section>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
 $(document).on('click', '.nav-link, #menu-flters li', function (e) {
  e.preventDefault();

  var link = $(this).attr('href') || $(this).data('filter');
  var categoryId = $(this).data('category-id');

  $.ajax({
    url: link,
    type: 'GET',
    data: { category: link, category_id: categoryId },
    success: function (data) {
      console.log(data);
      $('#menu-section').html($(data).find('#menu-section').html());
    }
  });
});</script>
<style>
  .discount-price {
    color: red;
    /* Màu chữ của giá giảm */
    font-weight: bold;
    /* Chữ đậm */
  }

  .original-price {
    text-decoration: line-through;
    /* Gạch chân đơn giá gốc */
    color: #777;
    /* Màu chữ của đơn giá gốc */
  }
</style> <!-- End Menu Section -->