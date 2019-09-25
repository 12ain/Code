<?php
require 'connect.php';
	if ($_POST) {
		$bname = $_POST['bname'];
		$bprice = $_POST['bprice'];
		$btime = $_POST['btime'];
		$btype = $_POST['btype'];

		$sql = "INSERT INTO book (bname, bprice, btime, btype) values('{$bname}',{$bprice},'{$btime}','$btype')";
    	// echo "$sql";
    	$db->query($sql);
        header('Refresh:2;url=index.php');
        exit('添加成功');
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>添加数据</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
</head>
<body>
    <div class="main">
    <form action="add.php" method="post">
    	<div><span>书名:</span><input type="text" name="bname"></div>
    	<div><span>价格:</span><input type="text" name="bprice"></div>
    	<div><span>时间:</span><input type="text" name="btime"></div>
    	<div><span>种类:</span><input type="text" name="btype"></div>
    	<div><input type="submit"> <input type="reset"></div>
    </form>
    </div>
</body>
</html>