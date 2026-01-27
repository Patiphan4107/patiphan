<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ปฏิภาณ พงษ์เพ็ชร(นิว)</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    /* จำกัดความกว้างของฟอร์มให้อยู่ในกรอบสวยงาม */
    .form-container {
        max-width: 600px;
        margin-top: 50px;
        padding: 30px;
        border: 1px solid #dee2e6;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
    }
</style>
</head>

<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 form-container">
            <h2 class="text-center mb-4">Gemini - ปฏิภาณ พงษ์เพ็ชร (นิว)<h2>
            <form method="post" action="" class="needs-validation" novalidate>
                
                <div class="mb-3">
                    <label for="fullname" class="form-label">ชื่อ-สกุล *</label>
                    <input type="text" name="fullname" id="fullname" class="form-control" required autofocus>
                    <div class="invalid-feedback">กรุณากรอกชื่อ-สกุล</div>
                </div>
                
                <div class="mb-3">
                    <label for="phone" class="form-label">เบอร์โทร *</label>
                    <input type="text" name="phone" id="phone" class="form-control" required>
                    <div class="invalid-feedback">กรุณากรอกเบอร์โทร</div>
                </div>

                <label for="height" class="form-label">ความสูง *</label>
                <div class="input-group mb-3">
                    <input type="number" name="height" id="height" max="220" class="form-control" required>
                    <span class="input-group-text">ซม.</span>
                    <div class="invalid-feedback">กรุณากรอกความสูง (ไม่เกิน 220 ซม.)</div>
                </div>

                <div class="mb-3">
                    <label for="color" class="form-label">สีที่ชอบ</label>
                    <input type="color" name="color" id="color" class="form-control form-control-color">
                </div>

                <div class="mb-4">
                    <label for="major" class="form-label">สาขาวิชา</label>
                    <select name="major" id="major" class="form-select">
                        <option value="การบัญชี">การบัญชี</option>
                        <option value="การจัดการ">การจัดการ</option>
                        <option value="การตลาด">การตลาด</option>
                        <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                    </select>
                </div>
                
                <div class="d-grid gap-2 d-md-block mb-3">
                    <button type="submit" name="Submit" value="สมัครสมาชิก" class="btn btn-primary">สมัครสมาชิก</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <button type="button" onClick="window.location='https://msu.ac.th'" class="btn btn-info text-white">Go to MSU</button>
                    <button type="button" onClick="window.print()" class="btn btn-secondary">พิมพ์</button>
                </div>

            </form>
            
            <hr>
            
            <div class="mt-4 p-3 bg-light rounded">
                <h3 class="mb-3">ผลลัพธ์การสมัคร:</h3>
<?php
		if(isset($_POST['Submit'])){
		$fullname = htmlspecialchars($_POST['fullname']);
		$phone = htmlspecialchars($_POST['phone']);
		$height = htmlspecialchars($_POST['height']);
		$color = htmlspecialchars($_POST['color']);
		$major = htmlspecialchars($_POST['major']);
                    
		include_once("connectdb.php");
					
		$sql = "INSERT INTO register (r_id,r_name,r_phone,r_major,r_color,r_height) values
(NULL, '{$fullname}', '{$phone}' ,'{$major}', '{$color}', '{$height}');";
					mysqli_query($conn,$sql) or die ("insert ไม่ได้");
					echo "<script>";
					echo "alert('เพิ่มข้อมูลสำเร็จ');";
					echo "</script>";					
                }
?>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>



</body>
</html>