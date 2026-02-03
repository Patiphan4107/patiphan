<?php
    include_once("check_login.php");
    include_once("connectdb.php"); // ดึงไฟล์เชื่อมต่อฐานข้อมูลมาเผื่อไว้ดึงข้อมูลลูกค้า
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการลูกค้า | Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        body { font-family: 'Sarabun', sans-serif; background-color: #f8f9fa; }
        .sidebar { min-height: 100vh; background: linear-gradient(180deg, #ff85a2 0%, #70a1ff 100%); color: white; }
        .sidebar a { color: rgba(255,255,255,0.8); text-decoration: none; padding: 12px 20px; display: block; border-radius: 10px; margin: 5px 15px; }
        .sidebar a:hover, .sidebar a.active { background: rgba(255,255,255,0.2); color: white; }
        .main-content { padding: 20px; }
        .card-table { border: none; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); background: white; }
        .table thead { background-color: #fbc2eb; } /* สีชมพูอ่อนสำหรับหัวตาราง */
        .btn-add { background-color: #ff85a2; color: white; border: none; }
        .btn-add:hover { background-color: #ef7491; color: white; }
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
            <a href="orders.php"><i class="bi bi-cart3 me-2"></i> จัดการออเดอร์</a>
            <a href="customers.php" class="active"><i class="bi bi-people me-2"></i> จัดการลูกค้า</a>
            <hr class="mx-3">
            <a href="logout.php" class="text-warning"><i class="bi bi-box-arrow-right me-2"></i> ออกจากระบบ</a>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">จัดการข้อมูลลูกค้า</h1>
                <button class="btn btn-add rounded-pill px-4 shadow-sm">
                    <i class="bi bi-plus-lg me-1"></i> เพิ่มลูกค้าใหม่
                </button>
            </div>

            <div class="card card-table overflow-hidden">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead>
                            <tr>
                                <th class="px-4 py-3">ID</th>
                                <th>ชื่อ-นามสกุล</th>
                                <th>อีเมล</th>
                                <th>เบอร์โทรศัพท์</th>
                                <th>วันที่สมัคร</th>
                                <th class="text-center">จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-4">C001</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="bg-light rounded-circle p-2 me-2 text-primary">
                                            <i class="bi bi-person"></i>
                                        </div>
                                        สมชาย รักดี
                                    </div>
                                </td>
                                <td>somchai@example.com</td>
                                <td>081-234-5678</td>
                                <td>01/02/2026</td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button>
                                    <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
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