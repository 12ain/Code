<?php
	$id = isset($_GET['id']) ? (integer)$_GET['id'] : 0;
	if ($id == 0) {
		header('Refresh:2;url=index.php');
		echo "当前删除的项目不存在!";
		exit;
	}
	require('connect.php');
	$sql = 'DELETE FROM book WHERE id = '.$id;
	// echo "$sql";
	$db->query($sql);
	header('Refresh:2;url=index.php');
	exit('删除成功');
?>