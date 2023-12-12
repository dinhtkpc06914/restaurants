<!-- ======= Book A Table Section ======= -->
<?php
// Trong phần HTML của trang

?>
<?php
require_once "../../dao/dat_ban.php"
  ?>
<style>
  body {
    background-image: url(<?= $CONTENT_URL ?>/assets/img/hero-bg.jpg);
    margin-top: 120px;
    /* Điều chỉnh margin-top để cân bằng với chiều cao của thanh điều hướng */
    font-family: 'Arial', sans-serif;

    background-size: 100%;

  }

  #db {
    padding: 40px;
    background-color: rgba(0, 0, 0, 0.7);
    /* Background mờ để làm nổi bật form */
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    margin-bottom: 2rem;
  }

  .error-message {
    color: #FF0000;
    /* Màu đỏ */
    font-size: 14px;
  }

  .has-error input {
    border: 2px solid #FF0000;
    /* Màu đỏ cho border khi có lỗi */
  }
</style>

<body>
  <section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">
      <div class="card">
        <form action="<?= $SITE_URL . '/dat-ban/index.php' ?>" method="post" role="form" enctype="multipart/form-data"
          data-aos="fade-up" data-aos-delay="100" onsubmit="event.preventDefault(); validateForm();">
          <div class="row justify-content-center">
            <div class="col-lg-10 col-md-6 form-group">
              <div class="section-title text-center">
                <p>Đặt bàn</p>
              </div>
              <input type="text" name="name" class="form-control " id="name" placeholder="Tên của bạn"
                data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <p id="name_error" class="text-danger"></p>
              <input type="email" class="form-control mt-4 " name="email" id="email" placeholder="Email của bạn"
                data-rule="email" data-msg="Please enter a valid email">
              <p id="email_error" class="text-danger"></p>
              <label for="date" class="text-dark">Ngày</label>
              <input type="date" name="date" class="form-control mt-2" id="date" data-rule="minlen:4"
                data-msg="Vui lòng nhập ít nhất 4 ký tự">
              <p id="date_error" class="text-danger"></p>
              <label for="time" class="text-dark">Giờ</label>
              <input type="time" class="form-control" name="time" id="time" data-rule="minlen:4"
                data-msg="Vui lòng nhập ít nhất 4 ký tự">
              <p id="time_error" class="text-danger"></p>
              <input type="number" class="form-control mt-4" name="people" id="people" placeholder="Số lượng người"
                data-rule="minlen:1" data-msg="Please enter at least 1 chars">
              <p id="people_error" class="text-danger"></p>
              <input type="hidden" class="form-control mt-3" name="trang_thai" id="trang_thai" placeholder="trạng thái"
                data-rule="minlen:1" data-msg="Please enter at least 1 chars">
              <input type="text" class="form-control mt-4" name="phone" id="phone" placeholder="Số điện thoại"
                data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <p id="phone_error" class="text-danger"></p>
              <label for="ma_loai_ban" class="text-dark">Loại bàn</label>
              <select class="form-control " name="ma_loai_ban" id="ma_loai_ban" data-rule="required"
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
              <p id="ma_loai_ban_error" class="text-danger"></p>
              <textarea class="form-control mt-4" name="message" rows="5" placeholder="Lời nhắn"></textarea>
              <p class="text-danger"></p>
              <button style="background-color: #cda45e" type="submit"
                class="col-sm-12 btn btn-outline-dark text-white mt-4 ">Đặt bàn</button>
            </div>


          </div>

        </form>
      </div>


    </div>
  </section><!-- End Book A Table Section -->
</body>
<script>
  function validateForm() {
    var valid = true;
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var date = document.getElementById("date").value;
    var time = document.getElementById("time").value;
    var people = document.getElementById("people").value;
    var phone = document.getElementById("phone").value;
    var currentDate = new Date();
    var selectedDate = new Date(date + "T" + time);
    function validatePhoneNumber(phoneNumber) {
      // Use regular expression to validate the phone number format
      var phoneRegex = /^[0-9]{10}$/;
      // Check if the phone number matches the format
      return phoneRegex.test(phoneNumber);
    }

  

   

    if (name === "") {
      document.getElementById("name_error").innerText = "Vui lòng nhập tên của bạn!";
      valid = false;
    } else {
      document.getElementById("name_error").innerText = "";
    }

    if (email === "") {
      document.getElementById("email_error").innerText = "Vui lòng nhập email!";
      valid = false;
    } else {
      document.getElementById("email_error").innerText = "";
    }

    if (date === "") {
      document.getElementById("date_error").innerText = "Vui lòng chọn ngày đặt!";
      valid = false;
    } else if (selectedDate < currentDate) {
      document.getElementById("date_error").innerText = "Vui lòng chọn ngày ở tương lai!";
      valid = false;
    } else {
      // Remove the duplicate error message for date
      document.getElementById("date_error").innerText = "";
    }

    if (time === "") {
      document.getElementById("time_error").innerText = "Vui lòng chọn giờ đặt!";
      valid = false;
    } else {
      document.getElementById("time_error").innerText = "";
    }

    if (people === "") {
      document.getElementById("people_error").innerText = "Vui lòng chọn số người!";
      valid = false;
    } else {
      document.getElementById("people_error").innerText = "";
    }

    if (phone === "") {
      document.getElementById("phone_error").innerText = "Vui lòng nhập số điện thoại!";
      valid = false;
    } else if (!validatePhoneNumber(phone)) {
      document.getElementById("phone_error").innerText = "Số điện thoại không hợp lệ";
      valid = false;
    } else {
      document.getElementById("phone_error").innerText = "";
    }

    return valid;
  }
</script>
