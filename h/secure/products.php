<?php
    include_once("check_login.php");
    include_once("connectdb.php");
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการสินค้า | Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        body { font-family: 'Sarabun', sans-serif; background-color: #f8f9fa; }
        .sidebar { min-height: 100vh; background: linear-gradient(180deg, #ff85a2 0%, #70a1ff 100%); color: white; }
        .sidebar a { color: rgba(255,255,255,0.8); text-decoration: none; padding: 12px 20px; display: block; border-radius: 10px; margin: 5px 15px; }
        .sidebar a:hover, .sidebar a.active { background: rgba(255,255,255,0.2); color: white; }
        .main-content { padding: 20px; }
        .card-product { border: none; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); background: white; }
        .product-img { width: 60px; height: 60px; object-fit: cover; border-radius: 8px; border: 1px solid #eee; }
        .btn-add-product { background: linear-gradient(to right, #ff85a2, #fbc2eb); color: white; border: none; font-weight: bold; }
        .btn-add-product:hover { opacity: 0.9; color: white; }
        .table thead { background-color: #f0f7ff; color: #555; }
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
            <a href="products.php" class="active"><i class="bi bi-box-seam me-2"></i> จัดการสินค้า</a>
            <a href="orders.php"><i class="bi bi-cart3 me-2"></i> จัดการออเดอร์</a>
            <a href="customers.php"><i class="bi bi-people me-2"></i> จัดการลูกค้า</a>
            <hr class="mx-3">
            <a href="logout.php" class="text-warning"><i class="bi bi-box-arrow-right me-2"></i> ออกจากระบบ</a>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">คลังจัดการสินค้า</h1>
                <button class="btn btn-add-product rounded-pill px-4 shadow-sm">
                    <i class="bi bi-plus-circle me-1"></i> เพิ่มสินค้าใหม่
                </button>
            </div>

            <div class="card card-product overflow-hidden">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead>
                            <tr>
                                <th class="px-4 py-3 text-center">รูปภาพ</th>
                                <th>ชื่อสินค้า</th>
                                <th>หมวดหมู่</th>
                                <th>ราคา (บาท)</th>
                                <th>คงเหลือ</th>
                                <th class="text-center">จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <img src="blue bear" class="product-img" alt="product">
                                </td>
                                <td>
                                    <div class="fw-bold text-primary">ตุ๊กตาหมีสีฟ้า</div>
                                    <small class="text-muted">SKU: PM-001</small>
                                </td>
                                <td>ตุ๊กตา</td>
                                <td>290.00</td>
                                <td>
                                    <span class="badge bg-success-subtle text-success px-3">80 ชิ้น</span>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group shadow-sm">
                                        <button class="btn btn-sm btn-white text-primary border-end"><i class="bi bi-pencil-square"></i></button>
                                        <button class="btn btn-sm btn-white text-danger"><i class="bi bi-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <img src="img/pink_bear.jpg" class="product-img" alt="product">
                                </td>
                                <td>
                                    <div class="fw-bold text-primary">ตุ๊กตาหมีสีชมพู</div>
                                    <small class="text-muted">SKU: BD-099</small>
                                </td>
                                <td>ตุ๊กตา</td>
                                <td>290.00</td>
                                <td>
                                    <span class="badge bg-danger-subtle text-danger px-3">25 ชิ้น (เหลือน้อย)</span>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group shadow-sm">
                                        <button class="btn btn-sm btn-white text-primary border-end"><i class="bi bi-pencil-square"></i></button>
                                        <button class="btn btn-sm btn-white text-danger"><i class="bi bi-trash"></i></button>
                                    </div>
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