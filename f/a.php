<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <title>ปฏิภาณ พงษ์เพ็ชร(นิว)</title>
</head>

<body>
    <h1>ปฏิภาณ พงษ์เพ็ชร(นิว)</h1>

    <?php
        echo "บทที่ 10 PHP เบื้องต้น<br>";
        print "วิชา Web Programming<br>";
        
        $name = "Patiphan phongphet";
        $age = 25.5 ;
        //$name = "Somrak";
        
        echo gettype ($age);
        echo"<hr>";
        var_dump($name);
        echo "<hr>";
        
        echo $name;
        echo "<hr>";
        
        $a=10;
        $b=5;
        $c=2;
        $x=($a+$b)*$c;
        echo $x;
    ?>
    
</body>
</html>