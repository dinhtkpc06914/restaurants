 <!-- ======= Footer ======= -->
 <style>
        .success-message {
            display: none;
            color: green;
        }
    </style>
 <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Restaurantly</h3>
              <p>
               Quốc lộ 1A <br>
                Thường thạnh, Cái răng, Cần Thơ<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Trang chủ</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Giới thiệu</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Dịch vụ</a></li>
          
              <li><i class="bx bx-chevron-right"></i> <a href="#">Chính sách bảo mật</a></li>
            </ul>
          </div>

        
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Nhập email nếu bạn cần hỗ trợ</h4>
        
            <form id="subscribeForm" action="../layout/index.php" method="post" target="_self" >
              <input type="hidden" name="id">
              <input type="email" name="email"><input class="btn_submittt" type="submit" value="Gửi">
            </form>
            <h4 id="successMessage" class="success-message">Cảm ơn bạn đã quan tâm ! chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất.</h4>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Restaurantly</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer>
  <script>
        document.getElementById('subscribeForm').addEventListener('submit', function (event) {
            event.preventDefault();

            // Tạm thời ẩn form và hiển thị thông báo
            document.getElementById('subscribeForm').style.display = 'none';
            document.getElementById('successMessage').style.display = 'block';

            // Gửi dữ liệu form đến server
            var formData = new FormData(this);
            fetch('../layout/index.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => console.log(data))
            .catch(error => console.error(error));
        });
    </script>
  
