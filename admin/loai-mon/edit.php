<div class="page-title">
    <div class="title_left">
        <h3>Sửa thông tin loại món</h3>
    </div>

</div>
<div class="row">
    <div class="col-md-10 col-sm-10 ">
        <div class="x_panel">
            <div class="x_title">
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <div class="card-body col-sm-12">
                    <form action="index.php?btn_update" method="POST" id="edit_loai" onsubmit="return validateForm()">
                       
                        <div class="mb-3">
                            <label for="ten_loai_mon" class="form-label">Tên loại</label>
                            <input type="text" name="ten_loai_mon" placeholder="Nhập tên loại" class="form-control"
                                 value="<?= $ten_loai_mon ?>">
                                <p id="ten_loai_mon_error" style="color: red;"></p>
                        </div>
                        <div class="mb-3">
                            <label for="mo_ta" class="form-label">Mô tả</label>
                            <textarea class="form-control" id="editor" name="mo_ta" placeholder="Nội dung mô tả..."
                                rows="4"> <?= $mo_ta ?></textarea>
                                <p id="mo_ta_error" style="color: red;"></p>
                        </div>
                        <div class="mb-3 text-center">
                            <input type="hidden" name="ma_loai_mon" value="<?= $ma_loai_mon ?>">
                            <input style="background-color: #2A3F54;" type="submit" name="btn_update" value="Cập nhật" class="btn btn-info mr-3">
                            <a  href="index.php?btn_list"><input type="button" class="btn btn-success"
                                    value="Danh sách" style="background-color: #2A3F54;"></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function validateForm() {
        var valid = true;

        // Reset error messages
        document.getElementsByName("ten_loai_mon").innerText = "";
       
        document.getElementsByName("mo_ta").innerText = "";

        // Validate Tên món ăn
        var ten_loai_mon = document.getElementsByName("ten_loai_mon")[0].value;
        if (ten_loai_mon.trim() === "") {
            document.getElementById("ten_loai_mon_error").innerText = "Vui lòng nhập tên loại bàn!";
            valid = false;
        }
       
        // Validate Mô tả món ăn
        var mo_ta = document.getElementsByName("mo_ta")[0].value;
        if (mo_ta.trim() === "") {
            document.getElementById("mo_ta_error").innerText = "Vui lòng nhập mô tả !";
            valid = false;
        }

        return valid;
    }
</script>
