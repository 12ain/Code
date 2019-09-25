<?php
$arr = [];
$arr[2] = "apple2";
$arr[5] = "bananana5";
$arr[1] = "xxx1";
$arr[] = "sss";

$second = next($arr);
$thrid = next($arr);

var_dump($arr);
echo "<br>";

var_dump(key($arr));
echo "<br>";

var_dump(current($arr));
echo "<br>";

var_dump($second);
echo "<br>";

var_dump($thrid);
echo "<br>";