<?php
session_start();
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>ปฏิภาณ พงษ์เพ็ชร(นิว)</title>
</head>
<body>

<h1>เข้าสู่ระบบหลังบ้าน : ปฏิภาณ พงษ์เพ็ชร (นิว) </h1>
<form method="post" action="">
    Username <input type="text" name="auser" autofocus required> <br>
    Password <input type="password" name="apwd" required> <br>
    <button type="submit" name="Submit">Login</button>
</form>

<?php 
// Changed 'submit' to 'Submit' to match the button name
if(isset($_POST['Submit'])) {
    include_once("connectdb.php");
    
    // Using mysqli_real_escape_string to prevent basic SQL Injection
    $username = mysqli_real_escape_string($conn, $_POST['auser']);
    $password = mysqli_real_escape_string($conn, $_POST['apwd']);
    
    $sql = "SELECT * FROM admin WHERE a_username='{$username}' AND a_password='{$password}' LIMIT 1";
    $rs = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($rs);
    
    if($num == 1) {
        $data = mysqli_fetch_array($rs);
        $_SESSION['aid'] = $data['a_id'];
        $_SESSION['aname'] = $data['a_name'];
        
        echo "<script>";
        echo "window.location='index2.php';";
        echo "</script>";
    } else { 
        echo "<script>";
        echo "alert('ชื่อผู้ใช้ หรือ รหัสผ่านไม่ถูกต้อง');";
        echo "</script>";
    }
}
?>
</body>
</html>