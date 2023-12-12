<div class="page-title">
    <div class="title_left">
        <h3>SỬA THÔNG TIN LOẠI BÀN</h3>
    </div>
</div>
<div class="row">
    <div class="col-md-12 ">
        <div class="x_panel">
            <div class="x_title">
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <div class="card-body col-sm-12">
                    <form action="index.php?btn_update" method="POST" id="edit_loai" onsubmit="return validateForm()" >
                       
                        <div class="mb-3">
                            <label for="ten_loai_ban" class="form-label">Tên loại</label>
                            <input type="text" name="ten_loai_ban" id="ten_loai_ban" placeholder="Nhập tên loại" class="form-control"
                                value="<?= $ten_loai_ban ?>">
                                <p id="ten_loai_ban_error" style="color: red;"></p>
                        </div>
                        <div class="mb-3">
                            <label for="mo_ta" class="form-label">Mô tả</label>
                            <textarea id="editor" class="form-control" name="mo_ta"  placeholder="Nội dung mô tả..."
                                rows="4"> <?= $mo_ta ?></textarea>
                                <p id="mo_ta_error" style="color: red;"></p>
                        </div>
                      
                        <div class="mb-3 text-center">
                            <input  type="hidden" name="ma_loai_ban" value="<?= $ma_loai_ban ?>">
                            <input  style="background: #2A3F54;" type="submit" name="btn_update" value="Cập nhật" class="btn btn-info mr-3">
                            <a href="index.php?btn_list"><input  style="background: #2A3F54;" type="button" class="btn btn-success"
                                    value="Danh sách"></a>
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
        document.getElementsByName("ten_loai_ban").innerText = "";
        document.getElementsByName("trang_thai").innerText = "";
        document.getElementsByName("mo_ta").innerText = "";

        // Validate Tên món ăn
        var ten_loai_ban = document.getElementsByName("ten_loai_ban")[0].value;
        if (ten_loai_ban.trim() === "") {
            document.getElementById("ten_loai_ban_error").innerText = "Vui lòng nhập tên loại bàn!";
            valid = false;
        }
        var trang_thai = document.getElementsByName("trang_thai")[0].value;
        if (trang_thai.trim() === "") {
            document.getElementById("trang_thai_error").innerText = "Vui lòng chọn trạng thái !";
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
