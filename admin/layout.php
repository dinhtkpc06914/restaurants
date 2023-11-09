<?php  check_login();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>iCREAM-Kem ngon khó cưỡng</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../../content/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../../content/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../content/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <nav class="row">
            <?php
            include 'menu.php';
            ?>

        </nav>
        <div class="row">
            <?php include $VIEW_NAME; ?>
        </div>
    </div>
    <?php
    include 'footer.php';
    ?>



    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../../content/lib/easing/easing.min.js"></script>
    <script src="../../content/lib/waypoints/waypoints.min.js"></script>
    <script src="../../content/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../../content/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="../../content/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="../../content/mail/jqBootstrapValidation.min.js"></script>
    <script src="../../content/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="../../content/js/main.js"></script>
    <script>
        // =============Check delete=================//
        function checkDelete() {
            var x = confirm("Bạn muốn xóa không ?")
            if (x) {
                return true;
            } else {
                return false;
            }

        }
        // =============Auto resize textarea=================//

        function expandTextarea(id) {
            document.getElementById(id).addEventListener('keyup', function () {
                this.style.overflow = 'hidden';
                this.style.minHeight = '106.8px';
                this.style.height = 0;
                this.style.height = this.scrollHeight + 'px';
            }, false);
        }
        expandTextarea('txtarea');
    </script>


    <!-- Toast message -->
    <script>
        $(document).ready(function () {
            $('.toast').toast('show');
        });
    </script>

    <!--  chọn và bỏ chọn các loại trên trang list.php. -->
    <script>
        $(document).ready(function () {
            var checkboxItem = ":checkbox";
            $("#select-all").click(function () {
                if (this.checked) {
                    $(checkboxItem).each(function () {
                        this.checked = true;
                    });
                } else {
                    $(checkboxItem).each(function () {
                        this.checked = false;
                    });
                }
            });

            $("#deleteAll").click(function () {
                if ($(":checked").length === 0) {
                    alert("Vui lòng chọn ít nhất một mục!");
                    return false;
                }
            })
        });
    </script>
</body>

</html>