<!doctype html>
<html lang="th">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ปฏิภาณ พงษ์เพ็ชร(นิว)</title>
  <!-- เพิ่ม Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    h1 {
      text-align: center;
      margin-top: 30px;
      color: #343a40;
    }
    .container {
      max-width: 600px;
      margin-top: 30px;
      background-color: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .form-control, .form-select {
      margin-bottom: 15px;
    }
    .form-check-label {
      margin-left: 5px;
    }
    .btn {
      width: 100%;
    }
    .btn-reset {
      width: 48%;
      margin-right: 4%;
    }
    .btn-go {
      width: 48%;
    }
    .btn-print {
      width: 100%;
      margin-top: 15px;
    }
  </style>
</head>

<body>

  <div class="container">
    <h2>ChatGPT--ปฏิภาณ พงษ์เพ็ชร(นิว)</h2>
    <form method="post" action="">
      <div class="mb-3">
        <label for="fullname" class="form-label">ชื่อ-สกุล</label>
        <input type="text" class="form-control" name="fullname" id="fullname" required autofocus>
      </div>

      <div class="mb-3">
        <label for="phone" class="form-label">เบอร์โทร</label>
        <input type="text" class="form-control" name="phone" id="phone" required>
      </div>

      <div class="mb-3">
        <label for="height" class="form-label">ความสูง</label>
        <input type="number" class="form-control" name="height" id="height" max="220" required> ซม.
      </div>

      <div class="mb-3">
        <label for="color" class="form-label">สีที่ชอบ</label>
        <input type="color" class="form-control form-control-color" name="color" id="color">
      </div>

      <div class="mb-3">
        <label for="major" class="form-label">สาขาวิชา</label>
        <select name="major" id="major" class="form-select" required>
          <option value="การบัญชี">การบัญชี</option>
          <option value="การจัดการ">การจัดการ</option>
          <option value="การตลาด">การตลาด</option>
          <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
        </select>
      </div>

      <button type="submit" name="Submit" value="สมัครสมาชิก" class="btn btn-primary">สมัครสมาชิก</button>
      
      <div class="d-flex mt-3">
        <button type="reset" class="btn btn-secondary btn-reset">Reset</button>
        <button type="button" class="btn btn-info btn-go" onClick="window.location='https://msu.ac.th'">Go to MSU</button>
      </div>

      <button type="button" class="btn btn-warning btn-print" onClick="window.print()">พิมพ์</button>
    </form>

    <hr>

    <?php
    if(isset($_POST['Submit'])){
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        $height = $_POST['height'];
        $color = $_POST['color'];
        $major = $_POST['major'];

        echo "<h4>ข้อมูลที่กรอก:</h4>";
        echo "ชื่อ-สกุล: ".$fullname."<br>";
        echo "เบอร์โทร: ".$phone."<br>";
        echo "ความสูง: ".$height." ซม."."<br>";
        echo "สีที่ชอบ: ".$color."<br>";
        echo "สาขาวิชา: ".$major."<br>";
    }
    ?>
  </div>

  <!-- เพิ่ม Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
