<?php
require 'connect.php';
	if ($_POST) {
		$id = $_POST['id'];
		$bname = $_POST['bname'];
		$bprice = $_POST['bprice'];
		$btime = $_POST['btime'];
		$btype = $_POST['btype'];

		$sql = "UPDATE book SET bname='{$bname}',bprice='{$bprice}',btime='{$btime}',btype='{$btype}' WHERE id = {$id}";
    	// echo "$sql";
    	$db->query($sql);
        header('Refresh:2;url=index.php');
        exit('数据更新成功');
	}
?>