<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load("current", {
        packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Loại', 'Số Lượng'],
            <?php
            foreach ($items as $item) {
                echo "['$item[ten_loai_mon]',     $item[so_luong]],";
            }
            ?>
        ]);

        var options = {
            title: 'TỶ LỆ HÀNG HÓA',
            is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
    }
</script>
</head>

<div class="page-title">
    <div class="title_left">
        <h3>BIỂU ĐỒ THỐNG KÊ</h3>
    </div>

</div>
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <div class="row mt-5">

                    <div class="mx-auto ">
                        <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
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
</div>