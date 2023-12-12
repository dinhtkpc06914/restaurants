<div class="page-title">
    <div class="title_left">
        <h3>Thêm mới loại món ăn</h3>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
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
                        <label for="ten_loai_mon" class="form-label">Tên loại món</label>
                        <input  type="text" name="ten_loai_mon" class="form-control"  placeholder="Nhập tên loại...">
                        <p id="ten_loai_mon_error" style="color: red;"></p>
                    </div>
                    <div class="mb-3">
                        <label for="mo_ta" class="form-label">Mô tả</label>
                        <textarea id="editor"  class="form-control" name="mo_ta" placeholder="Nội dung mô tả..." rows="4"></textarea>
                        <p id="mo_ta_error" style="color: red;"></p>
                    </div>
                    <div class="mb-3 text-center">                   
                        <input style="background-color: #2A3F54;" type="submit" name="btn_insert" value="Thêm mới" class="btn btn-info mr-3">
                        <a href="index.php?btn_list"><input type="button" class="btn text-white" value="Danh sách" style="background-color: #2A3F54;"></a>
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

        var ten_loai_mon = document.getElementsByName("ten_loai_mon")[0].value;
        var mo_ta = document.getElementsByName("mo_ta")[0].value;

        // Kiểm tra trường 'ten_loai_mon'
        if (ten_loai_mon.trim() === "") {
            document.getElementById("ten_loai_mon_error").innerText = "Vui lòng nhập Tên loại món.";
            valid = false;
        } else {
            document.getElementById("ten_loai_mon_error").innerText = "";
        }

        // Kiểm tra trường 'mo_ta'
        if (mo_ta.trim() === "") {
            document.getElementById("mo_ta_error").innerText = "Vui lòng nhập Mô tả.";
            valid = false;
        } else {
            document.getElementById("mo_ta_error").innerText = "";
        }

        return valid;
    }
</script>
