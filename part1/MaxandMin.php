<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Examples</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="" rel="stylesheet">
</head>
<body>
<form action="MaxandMin.php" method="GET">
    <div><span>第一个数:</span><input type="text" name="s1"></div>
    <div><span>第二个数:</span><input type="text" name="s2"></div>
    <div><span>第三个数:</span><input type="text" name="s3"></div>
    <input type="submit">
</form>
</body>
</html>

<?php

if (isset($_GET['s1'], $_GET['s2'], $_GET['s3'])) {

    $s1 = $_GET['s1'];
    $s2 = $_GET['s2'];
    $s3 = $_GET['s3'];
    // $temp = ($s1>$s2)? $s1 : $s2;
    // $max = ($temp>$s3)? $temp : $s3;
    $max = (($s1 > $s2) ? $s1 : $s2) > $s3 ? (($s1 > $s2) ? $s1 : $s2) : $s3;
    // $min = min($s1, $s2, $s3);
    // echo "三个数的最大值为:$max 最小值为: $min<br>";
    echo "三个数的最大值为:$max<br>" . '最小值为:' . min($s1, $s2, $s3);

}


?>