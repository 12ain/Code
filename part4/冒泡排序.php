<?php
$arr = array(1, 9, 8, 7, 6, 4, 5, 2, 3);
print_r($arr);
$len = count($arr)-1;
for ($i=0; $i < $len; $i++) { 
	for ($j=0;  $j < $len; $j++) { 
		if ($arr[$j] > $arr[$j+1]) {
			$temp = $arr[$j] ;
			$arr[$j] = $arr[$j+1];
			$arr[$j+1] = $temp;
		}
	}
}
print_r($arr);