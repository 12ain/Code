<?php
$arr = array(1, 9, 8, 7, 6, 4, 5, 2, 3);
print_r($arr);
$len = count($arr);
for ($i=0; $i < $len ; $i++) { 
	$min = $i;
	for ($j=$i+1; $j < $len; $j++) { 
		if ($arr[$j]<$arr[$min]) {
			$min = $j;	
		}
	}
		if ($min != $i) {
			$temp = $arr[$i];
			$arr[$i] = $arr[$min];
			$arr[$min] = $temp;
		}
}
print_r($arr);