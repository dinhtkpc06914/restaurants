<?php
require_once "../../dao/pdo.php";
?>
<div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    
			    <h1 class="app-page-title">Trang Chủ</h1>
			    
			    <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
				    <div class="inner">
					    <div class="app-card-body p-3 p-lg-4">
						    <h3 class="mb-3">Chào Mừng Bạn Đến Với Trang ADMIN!</h3>
						    <div class="row gx-5 gy-3">
						        <div class="col-12 col-lg-9">
							        
							        <div>Xin Bạn Hãy Sữa, Thêm, Xóa Cẩn Thận.</div>
							    </div><!--//col-->
						    </div><!--//row-->
						    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					    </div><!--//app-card-body-->
					    
				    </div><!--//inner-->
			    </div><!--//app-card-->
				    
			    <div class="row g-4 mb-4">
				    <div class="col-6 col-lg-3">
					    <div class="app-card app-card-stat shadow-sm h-100">
						    <div class="app-card-body p-3 p-lg-4">
							    <h4 class="stats-type mb-1">Loại món ăn</h4>
							    <div class="stats-figure"><?= $loai ?></div>
						    </div><!--//app-card-body-->
						    <a class="app-card-link-mask" href="<?= $ADMIN_URL?>/loai-mon/index.php?btn_list"></a>
					    </div><!--//app-card-->
				    </div><!--//col-->
				    
				    <div class="col-6 col-lg-3">
					    <div class="app-card app-card-stat shadow-sm h-100">
						    <div class="app-card-body p-3 p-lg-4">
							    <h4 class="stats-type mb-1">Món ăn</h4>
							    <div class="stats-figure"><?= $mon_an ?></div>
						    </div><!--//app-card-body-->
						    <a class="app-card-link-mask" href="<?= $ADMIN_URL?>/mon-an/index.php?btn_list"></a>
					    </div><!--//app-card-->
				    </div><!--//col-->
				    <div class="col-6 col-lg-3">
					    <div class="app-card app-card-stat shadow-sm h-100">
						    <div class="app-card-body p-3 p-lg-4">
							    <h4 class="stats-type mb-1">Bình Luận</h4>
							    <div class="stats-figure"><?= $binh_luan ?></div>
						    </div><!--//app-card-body-->
						    <a class="app-card-link-mask" href="<?= $ADMIN_URL?>/binh-luan/index.php"></a>
					    </div><!--//app-card-->
				    </div><!--//col-->
			

				<div class="col-6 col-lg-3">
					<div class="app-card app-card-stat shadow-sm h-100">
						<div class="app-card-body p-3 p-lg-4">
							<h4 class="stats-type mb-1">Khách Hàng</h4>
							<div class="stats-figure"><?= $khach_hang ?></div>
							
						</div><!--//app-card-body-->
						<a class="app-card-link-mask" href="<?= $ADMIN_URL?>/khach-hang/"></a>
					</div><!--//app-card-->
				</div><!--//col-->
			
			    </div><!--//row-->
			    <div class="row g-4 mb-4">
			        <div class="col-12 col-lg-6">
				        <div class="app-card app-card-chart h-100 shadow-sm">
					        <div class="app-card-header p-3">
						        <div class="row justify-content-between align-items-center">
							        <div class="col-auto">
						                <h4 class="app-card-title">Line Chart Example</h4>
							        </div><!--//col-->
							        <div class="col-auto">
								        <div class="card-header-action">
									        <a href="">More charts</a>
								        </div><!--//card-header-actions-->
							        </div><!--//col-->
						        </div><!--//row-->
					        </div><!--//app-card-header-->
					        <div class="app-card-body p-3 p-lg-4">
							    <div class="mb-3 d-flex">   
							        <select class="form-select form-select-sm ms-auto d-inline-flex w-auto">
									    <option value="1" selected>This week</option>
									    <option value="2">Today</option>
									    <option value="3">This Month</option>
									    <option value="3">This Year</option>
									</select>
							    </div>
						        <div class="chart-container">
				                    <canvas id="canvas-linechart" ></canvas>
						        </div>
					        </div><!--//app-card-body-->
				        </div><!--//app-card-->
			        </div><!--//col-->
			        <div class="col-12 col-lg-6">
				        <div class="app-card app-card-chart h-100 shadow-sm">
					        <div class="app-card-header p-3">
						        <div class="row justify-content-between align-items-center">
							        <div class="col-auto">
						                <h4 class="app-card-title">Thống Kê Lượt Xem Món Ăn</h4>
							        </div><!--//col-->
							        <div class="col-auto">
								        <div class="card-header-action">
								
								        </div><!--//card-header-actions-->
							        </div><!--//col-->
						        </div><!--//row-->
					        </div><!--//app-card-header-->
					        <div class="app-card-body p-3 p-lg-4">
						        <div class="chart-container">
									<canvas id="myChart"></canvas>
						        </div>
					        </div><!--//app-card-body-->
				        </div><!--//app-card-->
			        </div><!--//col-->
			        
			    </div><!--//row-->
			    
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
		<?php
			foreach($items as $item){
				extract($item);
				$ten[] = $item['ten_mon_an'];
				$luot_xem[] = $item['luot_xem'];
			}
		?>
		<script>
        const labels = <?php echo json_encode($ten) ?>;
        const data = {
            labels: labels,
            datasets: [{
                label: 'Số lượt xem của các phòng',
                data: <?php echo json_encode($luot_xem) ?>,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            }]
        };
        const config = {
            type: 'bar',
            data: data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
        };

        var myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>