<?php
session_start();
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>เข้าสู่ระบบ | ปฏิภาณ พงษ์เพ็ชร</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            /* พื้นหลังไล่สี ชมพู-ฟ้า */
            background: linear-gradient(135deg, #fbc2eb 0%, #a6c1ee 100%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }
        .login-card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            overflow: hidden;
            background: #ffffff;
            max-width: 400px;
            width: 100%;
        }
        .card-header {
            background: #ff85a2; /* ชมพูเข้มขึ้นนิดนึง */
            color: white;
            text-align: center;
            padding: 2rem;
            border: none;
        }
        .btn-login {
            background: linear-gradient(to right, #ff85a2, #70a1ff);
            border: none;
            color: white;
            transition: 0.3s;
        }
        .btn-login:hover {
            opacity: 0.9;
            transform: translateY(-2px);
            color: white;
        }
        .form-control:focus {
            border-color: #ff85a2;
            box-shadow: 0 0 0 0.25 col-rgba(255, 133, 162, 0.25);
        }
    </style>
</head>
<body>

<div class="container">
    <div class="login-card mx-auto">
        <div class="card-header">
            <h3 class="mb-0 fw-bold">Admin Login</h3>
            <small>ระบบจัดการหลังบ้าน</small>
        </div>
        <div class="card-body p-4">
            <form method="post" action="">
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" name="auser" class="form-control form-control-lg" placeholder="กรอกชื่อผู้ใช้" autofocus required>
                </div>
                <div class="mb-4">
                    <label class="form-label">Password</label>
                    <input type="password" name="apwd" class="form-control form-control-lg" placeholder="กรอกรหัสผ่าน" required>
                </div>
                <button type="submit" name="Submit" class="btn btn-login btn-lg w-100 fw-bold">เข้าสู่ระบบ</button>
            </form>
        </div>
    </div>
</div>

<?php 
if(isset($_POST['Submit'])) {
    include_once("connectdb.php");
    
    $username = $_POST['auser'];
    $password = $_POST['apwd'];

    $stmt = mysqli_prepare($conn, "SELECT a_id, a_name, a_password FROM admin WHERE a_username = ? LIMIT 1");
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if($data = mysqli_fetch_array($result)) {
        if (password_verify($password, $data['a_password'])) {
            $_SESSION['aid'] = $data['a_id'];
            $_SESSION['aname'] = $data['a_name'];
            
            echo "<script>window.location='index2.php';</script>";
        } else {
            echo "<script>alert('ขออภัย! รหัสผ่านไม่ถูกต้อง');</script>";
        }
    } else { 
        echo "<script>alert('ไม่พบชื่อผู้ใช้นี้ในระบบ');</script>";
    }
    mysqli_stmt_close($stmt);
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>