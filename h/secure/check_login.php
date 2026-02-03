<?php
session_start();

if (empty($_SESSION['aid'])) {
    echo "Access Denied !!!";
    // แก้จาก <mata เป็น <meta และเพิ่มส่วนประกอบให้ครบ
    echo "<meta http-equiv='refresh' content='3; url=index.php'>";
    exit;
}
?>