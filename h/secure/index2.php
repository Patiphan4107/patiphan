<?php
    include_once("check_login.php");
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard | ระบบจัดการหลังบ้าน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            background-color: #f8f9fa;
        }
        /* Sidebar Style */
        .sidebar {
            min-height: 100vh;
            background: linear-gradient(180deg, #ff85a2 0%, #70a1ff 100%);
            color: white;
        }
        .sidebar a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            transition: 0.3s;
            display: block;
            padding: 12px 20px;
            border-radius: 10px;
            margin: 5px 15px;
        }
        .sidebar a:hover, .sidebar a.active {
            background: rgba(255,255,255,0.2);
            color: white;
        }
        .main-content {
            padding: 20px;
        }
        .card-custom {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            transition: 0.3s;
        }
        .card-custom:hover {
            transform: translateY(-5px);
        }
        .welcome-text {
            color: #ff85a2;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse p-0">
            <div class="text-center py-4">
                <i class="bi bi-person-circle fs-1"></i>
                <h5 class="mt-2">Admin Panel</h5>
                <small class="opacity-75">ยินดีต้อนรับคุณ <?php echo $_SESSION['aname']; ?></small>
            </div>
            <hr class="mx-3">
            <a href="index2.php" class="active"><i class="bi bi-speedometer2 me-2"></i> หน้าหลักแอดมิน</a>
            <a href="products.php"><i class="bi bi-box-seam me-2"></i> จัดการสินค้า</a>
            <a href="orders.php"><i class="bi bi-cart3 me-2"></i> จัดการออเดอร์</a>
            <a href="customers.php"><i class="bi bi-people me-2"></i> จัดการลูกค้า</a>
            <hr class="mx-3">
            <a href="logout.php" class="text-warning"><i class="bi bi-box-arrow-right me-2"></i> ออกจากระบบ</a>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
            </div>

            <div class="row g-4">
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="card card-custom p-3 text-center">
                        <i class="bi bi-bag-check fs-1 text-primary"></i>
                        <h4 class="mt-2">150</h4>
                        <p class="text-muted mb-0">รายการสั่งซื้อ</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="card card-custom p-3 text-center">
                        <i class="bi bi-box fs-1 text-danger"></i>
                        <h4 class="mt-2">45</h4>
                        <p class="text-muted mb-0">สินค้าทั้งหมด</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="card card-custom p-3 text-center">
                        <i class="bi bi-people fs-1 text-info"></i>
                        <h4 class="mt-2">1,200</h4>
                        <p class="text-muted mb-0">ลูกค้าสมาชิก</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="card card-custom p-3 text-center">
                        <i class="bi bi-graph-up-arrow fs-1 text-success"></i>
                        <h4 class="mt-2">฿45,000</h4>
                        <p class="text-muted mb-0">รายได้รวม</p>
                    </div>
                </div>
            </div>

            <div class="mt-5 card card-custom p-4">
                <h4 class="welcome-text"><i class="bi bi-megaphone me-2"></i>ประกาศจากระบบ</h4>
                <p>ยินดีต้อนรับเข้าสู่ระบบจัดการข้อมูลหลังบ้าน </p>
            </div>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>