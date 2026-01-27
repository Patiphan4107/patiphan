<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ปฏิภาณ พงษ์เพ็ชร(นิว)</title>
</head>

<body>
<h1>ฟอร์มสมัครสมาชิก--ปฏิภาณ พงษ์เพ็ชร(นิว)</h1>
<form method="post" action="">
ชื่อ-สกุล<input type="text" name="fullname" required autofocus>*<br>
เบอร์โทร<input type="text" name="phone" required>*<br>
ความสูง<input type="number" name="height" max="220" required>ซม.*<br>
สีที่ชอบ<input type="color" name="color"><br>
สาขาวิชา
<select name="major">
	<option value="การบัญชี">การบัญชี</option>
    <option value="การจัดการ">การจัดการ</option>
    <option value="การตลาด">การตลาด</option>
    <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
</select><br>

<button type="submit" name="Submit" value="สมัครสมาชิก">สมัครสมาชิก</button>
<button type="reset">Reset</button>
<button type="button" onClick="window.location='https://msu.ac.th'">Go to MSU</button>
<button type="button" onClick="window.print()">พิมพ์</button>

</form>
<hr>
<?php
if(isset($_POST['Submit'])){
	$fullname = $_POST['fullname'];
	$phone = $_POST['phone'];
	$height = $_POST['height'];
	$color = $_POST['color'];
	$major = $_POST['major'];
	
	echo "ชื่อ-สกุล:".$fullname."<br>";
	echo "เบอร์โทร:".$phone."<br>";
	echo "ความสูง:".$height." ซม."."<br>"; // เพิ่มหน่วย ซม.
	echo "สีที่ชอบ:".$color."<br>";
	echo "สาขาวิชา:".$major."<br>";
}
?>
</body>
</html>