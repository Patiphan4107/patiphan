<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ระบบจัดการข้อมูลสินค้า - ปฏิภาณ พงษ์เพ็ชร(นิว)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Sarabun', sans-serif; background-color: #f8f9fa; }
        .table-img { object-fit: cover; border-radius: 5px; }
    </style>
</head>

<body>
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center mb-4">ปฏิภาณ พงษ์เพ็ชร (นิว)</h1>
            
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <form method="post" action="" class="row g-3">
                        <div class="col-md-8 offset-md-1">
                            <div class="input-group">
                                <span class="input-group-text bg-primary text-white">ค้นหาสินค้า</span>
                                <input type="text" name="a" class="form-control" placeholder="พิมพ์ชื่อสินค้าที่ต้องการ..." autofocus value="<?php echo @$_POST['a']; ?>">
                                <button type="submit" name="Submit" class="btn btn-primary px-4">ค้นหา</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped mb-0">
                            <thead class="table-dark">
                                <tr>
                                    <th class="text-center">Order ID</th>
                                    <th>สินค้า</th>
                                    <th>ประเภท</th>
                                    <th>วันที่</th>
                                    <th>ประเทศ</th>
                                    <th class="text-end">จำนวนเงิน</th>
                                    <th class="text-center">รูปภาพ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include_once("connectdb.php");
                                    $kw = isset($_POST['a']) ? mysqli_real_escape_string($conn, $_POST['a']) : "";
                                    
                                    $sql = "SELECT * FROM popsupermarket WHERE p_product_name LIKE '%{$kw}%'";
                                    $rs = mysqli_query($conn, $sql);
                                    $total = 0;
                                    
                                    if(mysqli_num_rows($rs) > 0) {
                                        while ($data = mysqli_fetch_array($rs)){
                                            $total += $data['p_amount'];
                                ?>
                                <tr>
                                    <td class="text-center"><?php echo $data['p_order_id'];?></td>
                                    <td><strong><?php echo $data['p_product_name'];?></strong></td>
                                    <td><span class="badge bg-info text-dark"><?php echo $data['p_category'];?></span></td>
                                    <td><?php echo date('d/m/Y', strtotime($data['p_date']));?></td>
                                    <td><?php echo $data['p_country'];?></td>
                                    <td class="text-end text-primary fw-bold"><?php echo number_format($data['p_amount'], 2);?></td>
                                    <td class="text-center">
                                        <img src="<?php echo $data["p_product_name"];?>.jpg" width="50" height="50" class="table-img shadow-sm" onerror="this.src='https://via.placeholder.com/50?text=No+Img'">
                                    </td>
                                </tr>
                                <?php 
                                        } 
                                    } else {
                                        echo "<tr><td colspan='7' class='text-center py-4 text-muted'>ไม่พบข้อมูลสินค้า</td></tr>";
                                    }
                                ?>
                            </tbody>
                            <tfoot class="table-light">
                                <tr>
                                    <td colspan="5" class="text-end fw-bold">ยอดรวมสุทธิ:</td>
                                    <td class="text-end text-danger fw-bold h5"><?php echo number_format($total, 2);?></td>
                                    <td></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            
            <p class="text-center mt-3 text-muted small">© 2024 New Shop System</p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>