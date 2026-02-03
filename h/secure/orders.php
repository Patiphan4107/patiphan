<?php
    include_once("check_login.php");
    include_once("connectdb.php");
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการออเดอร์ | Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        body { font-family: 'Sarabun', sans-serif; background-color: #f8f9fa; }
        .sidebar { min-height: 100vh; background: linear-gradient(180deg, #ff85a2 0%, #70a1ff 100%); color: white; }
        .sidebar a { color: rgba(255,255,255,0.8); text-decoration: none; padding: 12px 20px; display: block; border-radius: 10px; margin: 5px 15px; }
        .sidebar a:hover, .sidebar a.active { background: rgba(255,255,255,0.2); color: white; }
        .main-content { padding: 20px; }
        .card-order { border: none; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); background: white; }
        .table thead { background: linear-gradient(to right, #fbc2eb, #a6c1ee); }
        .status-paid { background-color: #d1e7dd; color: #0f5132; }
        .status-pending { background-color: #fff3cd; color: #664d03; }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse p-0">
            <div class="text-center py-4">
                <i class="bi bi-person-circle fs-1"></i>
                <h5 class="mt-2">Admin Panel</h5>
            </div>
            <hr class="mx-3">
            <a href="index2.php"><i class="bi bi-speedometer2 me-2"></i> หน้าหลักแอดมิน</a>
            <a href="products.php"><i class="bi bi-box-seam me-2"></i> จัดการสินค้า</a>
            <a href="orders.php" class="active"><i class="bi bi-cart3 me-2"></i> จัดการออเดอร์</a>
            <a href="customers.php"><i class="bi bi-people me-2"></i> จัดการลูกค้า</a>
            <hr class="mx-3">
            <a href="logout.php" class="text-warning"><i class="bi bi-box-arrow-right me-2"></i> ออกจากระบบ</a>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">รายการสั่งซื้อ (Orders)</h1>
                <div class="btn-group shadow-sm">
                    <button class="btn btn-outline-secondary btn-sm">Export PDF</button>
                    <button class="btn btn-outline-secondary btn-sm">Excel</button>
                </div>
            </div>

            <div class="card card-order overflow-hidden">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead>
                            <tr class="text-dark">
                                <th class="px-4 py-3">เลขที่ออเดอร์</th>
                                <th>ชื่อลูกค้า</th>
                                <th>ยอดรวม</th>
                                <th>สถานะชำระเงิน</th>
                                <th>วันที่สั่งซื้อ</th>
                                <th class="text-center">รายละเอียด</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-4 fw-bold">#ORD-6901</td>
                                <td>คุณวรวุฒิ มานะ</td>
                                <td>฿1,250.00</td>
                                <td><span class="badge status-paid"><i class="bi bi-check-circle-fill me-1"></i>ชำระแล้ว</span></td>
                                <td>03/02/2026</td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-light border"><i class="bi bi-eye"></i> ดูข้อมูล</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 fw-bold">#ORD-6902</td>
                                <td>คุณนภา แจ่มใส</td>
                                <td>฿850.00</td>
                                <td><span class="badge status-pending"><i class="bi bi-clock-history me-1"></i>รอชำระเงิน</span></td>
                                <td>03/02/2026</td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-light border"><i class="bi bi-eye"></i> ดูข้อมูล</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>