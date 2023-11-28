<div class="page-title">
    <div class="title_left">
        <h3>Thêm mới loại bàn</h3>
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
                <div class="card">
                    <div class="card-body">
                       
                            <form action="index.php" method="POST" id="add_loai" onsubmit="return validateForm()" >
                                <div class="mb-3" >
                                    <label for="ten_loai_ban" class="form-label">Tên loại bàn</label>
                                    <input type="text" name="ten_loai_ban" class="form-control"
                                        placeholder="Nhập tên loại..." id="ten_loai_ban">
                                    <p id="ten_loai_ban_error" style="color: red;"></p>
                                </div>
                                <div class="mb-3">
                                    <label  for="mo_ta" class="form-label">Mô tả</label>
                                    <textarea id="editor" class="form-control" name="mo_ta" placeholder="Nội dung mô tả..."
                                        rows="4"></textarea>
                                    <p id="mo_ta_error" style="color: red;"></p>
                                </div>
                                <div class="mb-3">
                                    <label for="mo_ta" class="form-label">Trạng thái </label>
                                    <input type="text" name="trang_thai" class="form-control">
                                    <p id="trang_thai_error" style="color: red;"></p>
                                </div>
                                <div class="mb-3 text-center">
                                    <input style="background-color: #2A3F54;" type="submit" name="btn_insert"
                                        value="Thêm mới" class="btn btn-info mr-3">
                                    <a href="index.php?btn_list"><input type="button" class="btn btn-success"
                                            value="Danh sách"></a>
                                </div>

                            </form>

                     

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
<script>
    function validateForm() {
        var valid = true;

        var ten_loai_ban = document.getElementsByName("ten_loai_ban")[0].value;
        var mo_ta = document.getElementsByName("mo_ta")[0].value;
        var trang_thai = document.getElementsByName("trang_thai")[0].value;

        // Kiểm tra trường 'ten_loai_ban'
        if (ten_loai_ban.trim() === "") {
            document.getElementById("ten_loai_ban_error").innerText = "Vui lòng nhập Tên loại bàn.";
            valid = false;
        } else {
            document.getElementById("ten_loai_ban_error").innerText = "";
        }

        // Kiểm tra trường 'mo_ta'
        if (mo_ta.trim() === "") {
            document.getElementById("mo_ta_error").innerText = "Vui lòng nhập Mô tả.";
            valid = false;
        } else {
            document.getElementById("mo_ta_error").innerText = "";
        }

        // Kiểm tra trường 'trang_thai'
        if (trang_thai.trim() === "") {
            document.getElementById("trang_thai_error").innerText = "Vui lòng nhập Trạng thái.";
            valid = false;
        } else {
            document.getElementById("trang_thai_error").innerText = "";
        }

        return valid;
    }
</script>
</script>