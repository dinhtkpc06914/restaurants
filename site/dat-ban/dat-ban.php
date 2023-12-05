<!-- ======= Book A Table Section ======= -->
<?php
// Trong phần HTML của trang

?>
<?php
require_once "../../dao/dat_ban.php"
  ?>
<style>
  input[type="date"]::-webkit-calendar-picker-indicator,
  input[type="time"]::-webkit-calendar-picker-indicator {
    filter: invert(1);
  }

  /* Chỉnh màu của nền trong trường nhập ngày và giờ thành màu trắng */
  input[type="date"],
  input[type="time"] {
    background-color: #fff;
    color: #000;
    /* Chỉnh màu chữ nếu cần */
  }
</style>
<section id="book-a-table" class="book-a-table">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <p>Đặt bàn</p>
    </div>

    <form action="dat-ban-xu-ly.php " method="post" role="form" class="php-email-form"
      data-aos="fade-up" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-4 col-md-6 form-group">
          <input type="text" name="name" class="form-control" id="name" placeholder="Tên của bạn" data-rule="minlen:4"
            data-msg="Please enter at least 4 chars">
          <div class="validate"></div>
        </div>
        <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
          <input type="email" class="form-control" name="email" id="email" placeholder="Email của bạn" data-rule="email"
            data-msg="Please enter a valid email">
          <div class="validate"></div>
        </div>
        <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
          <input type="text" class="form-control" name="phone" id="phone" placeholder="Số điện thoại"
            data-rule="minlen:4" data-msg="Please enter at least 4 chars">
          <div class="validate"></div>
        </div>
        <div class="col-lg-4 col-md-6 form-group mt-3">
          <label for="date">Ngày</label>
          <input type="date" name="date" class="form-control" id="date" data-rule="minlen:4"
            data-msg="Vui lòng nhập ít nhất 4 ký tự">
          <div class="validate"></div>
        </div>

        <div class="col-lg-4 col-md-6 form-group mt-3">
          <label for="time">Giờ</label>
          <input type="time" class="form-control" name="time" id="time" data-rule="minlen:4"
            data-msg="Vui lòng nhập ít nhất 4 ký tự">
          <div class="validate"></div>
        </div>

        <div class="col-lg-4 col-md-6 form-group mt-3">
          <input type="number" class="form-control" name="people" id="people" placeholder="Số lượng người"
            data-rule="minlen:1" data-msg="Please enter at least 1 chars">
          <div class="validate"></div>
          <input type="hidden" class="form-control" name="trang_thai" id="trang_thai" placeholder="trạng thái"
            data-rule="minlen:1" data-msg="Please enter at least 1 chars">
        </div>
      </div>
      <div class="col-lg-4 col-md-6 form-group mt-3">
        <label for="ma_loai_ban">Loại bàn</label>
        <select class="form-control" name="ma_loai_ban" id="ma_loai_ban" data-rule="required"
          data-msg="Please select a table type">
          <?php
          // Lấy danh sách loại bàn
          $danhSachLoaiBan = layDanhSachLoaiBan();
          // Hiển thị danh sách loại bàn trong dropdown
          foreach ($danhSachLoaiBan as $loaiBan) {
            echo '<option value="' . $loaiBan['ma_loai_ban'] . '">' . $loaiBan['ten_loai_ban'] . '</option>';
          }
          ?>
        </select>
        <div class="validate"></div>
      </div>
      <div class="form-group mt-3">
        <textarea class="form-control" name="message" rows="5" placeholder="Lời nhắn"></textarea>
        <div class="validate"></div>
      </div>
      <div class="mb-3">
        <div class="loading">Đang tải</div>
        <div class="error-message"></div>
        <div class="sent-message">Yêu cầu đặt bàn của bạn đã được gửi. Chúng tôi sẽ gọi lại hoặc gửi Email để xác nhận
          việc đặt chỗ của bạn. Cảm ơn!</div>
      </div>
      <div class="text-center"><button type="submit" name="btn-insert">Đặt bàn</button></div>
    </form>

  </div>
</section><!-- End Book A Table Section -->