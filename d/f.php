<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ผลการสมัครงาน - บริษัท ปฏิภาณ จำกัด</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    body {
        background-color: #e9ecef; /* พื้นหลังเดียวกับฟอร์มเพื่อให้เข้ากัน */
    }
    .result-container {
        max-width: 800px;
        margin-top: 50px;
        margin-bottom: 50px;
        padding: 40px;
        border: none;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        background-color: #ffffff;
    }
    .data-row {
        margin-bottom: 10px;
        padding: 5px 0;
        border-bottom: 1px dashed #ced4da;
    }
    .data-row:last-child {
        border-bottom: none;
    }
    .card-header-success {
        background-color: #28a745 !important; /* ใช้สีเขียวของ success ให้ชัดเจน */
        color: white;
    }
</style>
</head>

<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 result-container">

            <h2 class="text-center text-success mb-4 border-bottom pb-3">✅ ข้อมูลใบสมัครที่ส่งสำเร็จแล้ว</h2>
            <p class="text-center text-muted mb-4">บริษัท ปฏิภาณ จำกัด ขอขอบคุณที่ให้ความสนใจสมัครงานกับเรา</p>

            <div class="card shadow-sm border-success">
                <div class="card-header card-header-success">
                    <h5 class="mb-0">รายละเอียดการสมัครงาน</h5>
                </div>
                <div class="card-body">
                    <?php
                    // ฟังก์ชันสำหรับจัดแสดงข้อมูลในรูปแบบ Bootstrap Grid
                    function displayData($label, $value, $isLongText = false) {
                        // ใช้ isset() และ ?? เพื่อจัดการกรณีที่อาจจะไม่ได้ส่งข้อมูลมา (ถึงแม้ฟอร์มจะมี required แล้วก็ตาม)
                        $value_display = htmlspecialchars($value ?? 'ไม่ได้ระบุ');
                        $value_formatted = $isLongText ? nl2br($value_display) : $value_display;

                        echo '<div class="row data-row">';
                        echo '<div class="col-md-4 text-muted"><strong>'.$label.'</strong></div>';
                        echo '<div class="col-md-8">'.$value_formatted.'</div>';
                        echo '</div>';
                    }

                    // โค้ด PHP ที่รับและแสดงผลข้อมูลจากฟอร์ม
                    if(isset($_POST['Submit'])){
                        
                        // แสดงผลข้อมูลตามลำดับ
                        echo '<h6 class="text-primary mt-2 mb-3 border-bottom pb-1">ข้อมูลหลัก</h6>';
                        displayData("ตำแหน่งที่สมัคร", $_POST['position']);
                        displayData("คำนำหน้าชื่อ", $_POST['prefix']);
                        displayData("ชื่อ-สกุล", $_POST['fullname']);
                        displayData("วันเดือนปีเกิด", $_POST['birthdate']);
                        
                        echo '<h6 class="text-primary mt-4 mb-3 border-bottom pb-1">ข้อมูลการศึกษาและประสบการณ์</h6>';
                        displayData("ระดับการศึกษา", $_POST['education']);
                        displayData("ความสามารถพิเศษ", $_POST['skill'], true);
                        displayData("ประสบการณ์ทำงาน", $_POST['experience'], true);
                        
                    } else {
                        // **[จุดที่แก้ไข]: ลิงก์กลับไปที่ไฟล์ applicant_form.php**
                        echo "<p class='text-danger text-center'>⚠️ ไม่พบข้อมูลการส่งใบสมัคร กรุณาไปยังหน้าฟอร์มเพื่อกรอกข้อมูล.</p>";
                        echo '<div class="text-center"><a href="applicant_form.php" class="btn btn-warning mt-3">กลับไปหน้าฟอร์ม</a></div>';
                    }
                    ?>
                </div>
            </div>
             <p class="mt-4 text-center text-info">**หมายเหตุ:** ข้อมูลนี้เป็นเพียงการแสดงผลเพื่อตรวจสอบความถูกต้องเท่านั้น</p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>