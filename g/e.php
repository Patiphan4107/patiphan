<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>สรุปยอดขาย - ปฏิภาณ พงษ์เพ็ชร(นิว)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;700&display=swap');
        body { font-family: 'Sarabun', sans-serif; background-color: #f8f9fa; }
        .chart-container { position: relative; height: 40vh; width: 100%; margin-bottom: 30px; }
    </style>
</head>

<body>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <h1 class="text-center mb-4 fw-bold text-primary">ปฏิภาณ พงษ์เพ็ชร (นิว)</h1>
            
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card shadow border-0 h-100">
                        <div class="card-header bg-white fw-bold">สัดส่วนยอดขายรายประเทศ</div>
                        <div class="card-body d-flex align-items-center">
                            <div class="chart-container">
                                <canvas id="salesPieChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card shadow border-0 h-100">
                        <div class="card-header bg-white fw-bold">รายละเอียดข้อมูล</div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th>ประเทศ</th>
                                            <th class="text-end">ยอดขาย (บาท)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            include_once("connectdb.php");
                                            $sql = "SELECT p_country, SUM(p_amount) AS total 
                                                    FROM popsupermarket GROUP BY p_country";
                                            $rs = mysqli_query($conn, $sql);
                                            
                                            $countries = [];
                                            $totals = [];

                                            while ($data = mysqli_fetch_assoc($rs)) {
                                                $countries[] = $data['p_country'];
                                                $totals[] = $data['total'];
                                        ?>
                                        <tr>
                                            <td><i class="bi bi-geo-alt-fill text-danger me-2"></i><?php echo $data['p_country']; ?></td>
                                            <td class="text-end fw-bold"><?php echo number_format($data['total'], 0); ?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> </div>
    </div>
</div>

<script>
    // ส่งข้อมูลจาก PHP ไปยัง JavaScript
    const countryLabels = <?php echo json_encode($countries); ?>;
    const salesData = <?php echo json_encode($totals); ?>;

    const ctx = document.getElementById('salesPieChart').getContext('2d');
    new Chart(ctx, {
        type: 'pie',
        data: {
            labels: countryLabels,
            datasets: [{
                label: 'ยอดขาย',
                data: salesData,
                backgroundColor: [
                    '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40'
                ],
                hoverOffset: 15
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom'
                }
            }
        }
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>