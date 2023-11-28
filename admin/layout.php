<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./content-admin/images/favicon.ico" type="image/ico" />

    <title>RESTAURANT</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script src="<?= $CONTENT_ADMIN ?>/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <link href="<?= $CONTENT_ADMIN ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= $CONTENT_ADMIN ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= $CONTENT_ADMIN ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?= $CONTENT_ADMIN ?>/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="<?= $CONTENT_ADMIN ?>/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"
        rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?= $CONTENT_ADMIN ?>/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="<?= $CONTENT_ADMIN ?>/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?= $CONTENT_ADMIN ?>/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md bg-white">
    <div class="container body">
 
        <div class="main_container">
            <?php require "menu.php";
            ?>
        </div>
        <div class="main_container">
            
            <div class="col-md-12 right_col ">
            <?php include $VIEW_NAME ?> 
        </div>

        <?php require "footer.php";
        ?>
        <!-- /footer content -->
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
   
    <!-- Bootstrap -->
    <script src="<?= $CONTENT_ADMIN ?>/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="<?= $CONTENT_ADMIN ?>/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?= $CONTENT_ADMIN ?>/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?= $CONTENT_ADMIN ?>/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?= $CONTENT_ADMIN ?>/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?= $CONTENT_ADMIN ?>/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?= $CONTENT_ADMIN ?>/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?= $CONTENT_ADMIN ?>/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?= $CONTENT_ADMIN ?>/vendors/Flot/jquery.flot.js"></script>
    <script src="<?= $CONTENT_ADMIN ?>/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?= $CONTENT_ADMIN ?>/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?= $CONTENT_ADMIN ?>/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?= $CONTENT_ADMIN ?>/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?= $CONTENT_ADMIN ?>/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?= $CONTENT_ADMIN ?>/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?= $CONTENT_ADMIN ?>/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?= $CONTENT_ADMIN ?>/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?= $CONTENT_ADMIN ?>/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?= $CONTENT_ADMIN ?>/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?= $CONTENT_ADMIN ?>/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?= $CONTENT_ADMIN ?>/vendors/moment/min/moment.min.js"></script>
    <script src="<?= $CONTENT_ADMIN ?>/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?= $CONTENT_ADMIN ?>/build/js/custom.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
    <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

</body>
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
</html>