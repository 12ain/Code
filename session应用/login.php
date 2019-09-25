<?php
if (isset($_POST)) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	session_start();
	$data = ['user' => 'test', 'password' => '111'];

}
exit("请输入数据后提交");

	

?>