<?php
	session_start();
	
	if(empty($_SESSION['aid'])){
		echo "Ascess Denied !!!" ;
		echo "<mata http-equiv='refresh'content='3; url=index.php'>";
		exit;
	}
	
?>