<?php
$str1 = 'open_door';
echo($str1) .'<br>';
$str2 = 'make_by_id';
echo($str2) .'<br>';


function segmentation($str){
	$str1 = explode('_', $str);
	for ($i=0; $i < count($str1) ; $i++) { 
		echo ucwords($str1[$i]);
	}
}


segmentation($str1);
echo '<br>';
segmentation($str2);
