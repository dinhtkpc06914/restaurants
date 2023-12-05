<!-- ======= Book A Table Section ======= -->
<?php
// Trong phần HTML của trang

?>
<?php
require_once "../../dao/dat_ban.php"
  ?>
<style>
 body{
    margin-top: 150px; /* Điều chỉnh margin-top để cân bằng với chiều cao của thanh điều hướng */
    font-family: 'Arial', sans-serif;
    background-image: url(<?= $CONTENT_URL ?>/assets/img/events-bg.jpg);
        background-size: 100%;
      
  }
  #db{
    padding: 40px;
    background-color: rgba(0, 0, 0, 0.7); /* Background mờ để làm nổi bật form */
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);   
    margin-bottom: 2rem;
  }
  .error-message {
    color: #FF0000; /* Màu đỏ */
    font-size: 14px;
  }

  .has-error input {
    border: 1px solid #FF0000; /* Màu đỏ cho border khi có lỗi */
  }
</style>
<body>
  
<section id="book-a-table" class="book-a-table">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <p>Đặt bàn</p>
    </div>

    <form action="<?= $SITE_URL . '/dat-ban/index.php' ?>" method="post" role="form" enctype="multipart/form-data"
      data-aos="fade-up" data-aos-delay="100"  onsubmit="return validateForm();">
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
          <div class="validate"> </div>
        </div>

        <div class="col-lg-4 col-md-6 form-group mt-5">
          <input type="number" class="form-control " name="people" id="people" placeholder="Số lượng người"
            data-rule="minlen:1" data-msg="Please enter at least 1 chars">
          <div class="validate"></div>
          <input type="hidden" class="form-control" name="trang_thai" id="trang_thai" placeholder="trạng thái"
            data-rule="minlen:1" data-msg="Please enter at least 1 chars">
        </div>
      </div>
      <div class="col-lg-4 col-md-6 form-group mt-3 mr-2">
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
    
      <div class="text-center"><button type="submit" class="btn text-white form-control">Đặt bàn</button></div>
    </form>

  </div>
</section><!-- End Book A Table Section -->
</body>
<script>
  function validateForm() {
    var isValid = true;

    // Reset mọi trạng thái lỗi và màu sắc trước khi kiểm tra lại
    resetForm();

    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var date = document.getElementById('date').value;
    var time = document.getElementById('time').value;
    var people = document.getElementById('people').value;
    var maLoaiBan = document.getElementById('ma_loai_ban').value;

    // Kiểm tra lỗi cho từng trường và hiển thị thông báo
    if (name.trim() === "") {
      showError('name', 'Vui lòng nhập tên của bạn');
      isValid = false;
    }

    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      showError('email', 'Vui lòng nhập một địa chỉ email hợp lệ');
      isValid = false;
    }

    if (phone.trim() === "") {
      showError('phone', 'Vui lòng nhập số điện thoại');
      isValid = false;
    }
    if (date.trim() === "") {
      showError('date', 'Vui lòng chọn ngày đặt');
      isValid = false;
    }
    if (time.trim() === "") {
      showError('time', 'Vui lòng chọn giờ đặt ');
      isValid = false;
    }
    if (people.trim() === "") {
      showError('people', 'Vui lòng chọn số lượng người  ');
      isValid = false;
    }
    // Thêm các kiểm tra khác cho date, time, people, maLoaiBan nếu cần

    return isValid; // Nếu không có lỗi, cho phép form được submit
  }

  function showError(field, message) {
    var errorMessage = document.createElement('div');
    errorMessage.className = 'error-message';
    errorMessage.innerHTML = message;

    var inputField = document.getElementById(field);
    inputField.classList.add('has-error');
    inputField.parentNode.appendChild(errorMessage);
  }

  function resetForm() {
    var errorMessages = document.querySelectorAll('.error-message');
    errorMessages.forEach(function (element) {
      element.remove();
    });

    var inputFields = document.querySelectorAll('.has-error');
    inputFields.forEach(function (element) {
      element.classList.remove('has-error');
    });
  }
</script>