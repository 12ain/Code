<?php
if ($_GET) {
	$result = $_GET['test'];
	$righta = 0;
	$rightb = 0;
	foreach ($result as $key) {
		if($key == 1){
			$righta++;
		}
		else{
			$rightb++;
		}
	}
	if ($righta == 2 && $rightb == 0) {
		die( "回答正确");
	}
	else if($righta>0 && $rightb == 0){
		die("回答不完全正确");
	}
	else{
		die("回答错误");
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
    <form action="CheckBox.php">
    	<p>1.以下属于WEB开发语言的有哪几种?</p>
    	<span>MarkDown<input type="checkbox" name="test[]" value="0"></span>
    	<span>PHP<input type="checkbox" name="test[]" value="1"></span>
    	<span>flash<input type="checkbox" name="test[]" value="0"></span>
    	<span>ASP<input type="checkbox" name="test[]" value="1"></span>
    	<input type="submit">
    </form>
</body>
</html>
