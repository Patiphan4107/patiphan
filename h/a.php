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
<h1>a.php</h1>

<?php 
	$_SESSION['name'] = "ปฏิภาณ พงษ์เพ็ชร" ; 
	$_SESSION['nickname'] = "นิว" ;
	echo $_SESSION['name']. "<br>" ;
	echo $_SESSION['nickname']. "<br>" ;
?>
</body>
</html>
