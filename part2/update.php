<?php
	$id = isset($_GET['id']) ? (integer)$_GET['id'] : 0;
	if ($id == 0) {
		header('Refresh:2;url=index.php');
		echo "当前删除的项目不存在!";
		exit;
	}
	require('connect.php');
	$sql = "SELECT * FROM book";
	$mysql_result = $db -> query($sql);
	while($date=mysqli_fetch_array($mysql_result,MYSQLI_ASSOC)){
    if($date['id']==$id){
        $bname = $date['bname'];
		$bprice = $date['bprice'];
		$btime = $date['btime'];
		$btype = $date['btype'];
    }
}

?>
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
    <div class="main">
    <form action="update_item.php" method="post">
    	<input type="hidden" name="id" value="<?php echo $id ?>">
    	<div><span>书名:</span><input type="text" name="bname" value="<?php echo $bname ?>"></div>
    	<div><span>价格:</span><input type="text" name="bprice" value="<?php echo $bprice ?>"></div>
    	<div><span>时间:</span><input type="text" name="btime" value="<?php echo $btime ?>"></div>
    	<div><span>种类:</span><input type="text" name="btype" value="<?php echo $btype ?>"></div>
    	<div><input type="submit"> <input type="reset"></div>
    </form>
    </div>
</body>
</html>