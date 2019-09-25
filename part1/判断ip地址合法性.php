<?php

$ip = '192.168.255.1';
$ip1 = '192.168.256.256';

function segmentation($str){
	$str1 = explode('.', $str);
	$flag = 0;
	for ($i=0; $i < count($str1) ; $i++) { 
		if ($str1[$i] >= 0 && $str1[$i] <= 255) {
			$flag++;
		}
	}
	if ($flag == 4) {
		echo "合法的ip地址".'<br>';
	}
	else{
		echo "不合法的地址".'<br>';
	}
}


segmentation($ip);
segmentation($ip1);