<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ปฏิภาณ พงษ์เพ็ชร(นิว)</title>
</head>

<body>
<form method="post" action="">
เกรด <input type="number" name="a"  autofocus required>
<button type="submit" name="Submit">OK</button>
</form>
<?php
if (isset($_POST['Submit'])){
$score = $_POST['a'];

if ($score >= 80) {
    $grade = "A";
} elseif ($score >= 70) {
    $grade = "B";
} elseif ($score >= 60) {
    $grade = "C";
} elseif ($score >= 50) {
    $grade = "D";
} else {
    $grade = "F";
}

echo "คะแนน $score ได้เกรด $grade";
}
?>

</body>
</html>