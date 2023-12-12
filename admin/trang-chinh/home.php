<?php
require_once "../../dao/pdo.php";
?>
<div class="container bg-light">
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
						<div class="stats-figure">
							<?= $loai ?>
						</div>
					</div><!--//app-card-body-->
					<a class="app-card-link-mask" href="<?= $ADMIN_URL ?>/loai-mon/index.php?btn_list"></a>
				</div><!--//app-card-->
			</div><!--//col-->

			<div class="col-6 col-lg-3">
				<div class="app-card app-card-stat shadow-sm h-100">
					<div class="app-card-body p-3 p-lg-4">
						<h4 class="stats-type mb-1">Món ăn</h4>
						<div class="stats-figure">
							<?= $mon_an ?>
						</div>
					</div><!--//app-card-body-->
					<a class="app-card-link-mask" href="<?= $ADMIN_URL ?>/mon-an/index.php?btn_list"></a>
				</div><!--//app-card-->
			</div><!--//col-->
			<div class="col-6 col-lg-3">
				<div class="app-card app-card-stat shadow-sm h-100">
					<div class="app-card-body p-3 p-lg-4">
						<h4 class="stats-type mb-1">Bình Luận</h4>
						<div class="stats-figure">
							<?= $binh_luan ?>
						</div>
					</div><!--//app-card-body-->
					<a class="app-card-link-mask" href="<?= $ADMIN_URL ?>/binh-luan/index.php"></a>
				</div><!--//app-card-->
			</div><!--//col-->


			<div class="col-6 col-lg-3">
				<div class="app-card app-card-stat shadow-sm h-100">
					<div class="app-card-body p-3 p-lg-4">
						<h4 class="stats-type mb-1">Khách Hàng</h4>
						<div class="stats-figure">
							<?= $khach_hang ?>
						</div>

					</div><!--//app-card-body-->
					<a class="app-card-link-mask" href="<?= $ADMIN_URL ?>/khach-hang/"></a>
				</div><!--//app-card-->
			</div><!--//col-->

		</div><!--//row-->
		<div class="col-12 col-lg-6">
			<div class="app-card app-card-chart h-100 shadow-sm">
				<div class="app-card-header p-3">
					<div class="row justify-content-between align-items-center">
						<div class="col-auto">
							<h4 class="app-card-title">Thống Kê Số Lượng Món Ăn Trong Danh Mục</h4>
						</div><!--//col-->
						<div class="col-auto">
							<div class="card-header-action">

							</div><!--//card-header-actions-->
						</div><!--//col-->
					</div><!--//row-->
				</div><!--//app-card-header-->
				<div class="app-card-body p-3 p-lg-4">
					<div class="chart-container">
						<canvas id="myChart1"></canvas>
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

</div>

		<?php
		$mon_luot_xem = [];

		// Tạo mảng kết hợp ánh xạ tên phòng đến số lượt xem
		foreach ($items as $item) {
			$mon_luot_xem[$item['ten_mon_an']] = $item['luot_xem'];
		}

		// Xáo trộn các số lượt xem
		$luot_xem_random = array_values($mon_luot_xem);
		shuffle($luot_xem_random);

		// Chỉ lấy 8 phần tử đầu tiên sau khi đã xáo trộn
		$luot_xem_random = array_slice($luot_xem_random, 0, 8);

		// Tạo mảng kết hợp mới từ tên phòng và số lượt xem đã được xáo trộn
		$mon_luot_xem_random = [];
		foreach ($luot_xem_random as $luot_xem) {
			// Lấy tên phòng từ mảng gốc và ánh xạ số lượt xem đã xáo trộn vào mỗi tên phòng
			$ten_mon_an = array_keys($mon_luot_xem, $luot_xem)[0];
			if (mb_strlen($ten_mon_an, 'UTF-8') > 10) {
				$ten_mon_an = mb_substr($ten_mon_an, 0, 10, 'UTF-8') . '...';
			}
			$mon_luot_xem_random[$ten_mon_an] = $luot_xem;
		}

		?>
		<script>
    const data = {
        labels: <?php echo json_encode(array_keys($mon_luot_xem_random)) ?>,
        datasets: [{
            label: 'Số lượt xem của các món ăn',
            data: <?php echo json_encode(array_values($mon_luot_xem_random)) ?>,
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
		<?php
		// Sử dụng PDO
		$servername = "localhost";
		$username = "root";
		$password = "";
		try {
			$conn = new PDO("mysql:host=$servername;dbname=duan1", $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$dem = 'SELECT loai_mon.ten_loai_mon, COUNT(mon_an.ma_mon_an) AS soluongmon
            FROM mon_an
            JOIN loai_mon ON mon_an.ma_loai_mon = loai_mon.ma_loai_mon
            GROUP BY loai_mon.ma_loai_mon';

			$result = $conn->query($dem);

			while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
				$ten_loai_mon[] = $row['ten_loai_mon'];
				$soluong[] = $row['soluongmon'];
			}
			// Tiếp theo là mã JavaScript
			?>
			<script>
				const labels1 = <?php echo json_encode($ten_loai_mon) ?>;
				const data1 = {
					labels: labels1,
					datasets: [{
						label: 'Món ăn trong danh mục',
						data: <?php echo json_encode($soluong) ?>,
						fill: false,
						borderColor: 'rgb(75, 192, 192)',
						tension: 0.1
					}]
				};
				const config1 = {
					type: 'line',
					data: data1,
				};

				var myChart1 = new Chart(
					document.getElementById('myChart1'),
					config1
				);
			</script>
			<?php
		} catch (PDOException $e) {
			echo "Lỗi kết nối: " . $e->getMessage();
		}
		?>
		</script>