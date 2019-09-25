<?php
$s1 = rand(0, 100);
$s2 = rand(0, 100);
$s3 = rand(0, 100);

$result = $s1 > $s2 ? ($s1 < $s3 ? $s1 : ($s2 > $s3 ? $s2 : $s3)) : ($s2 < $s3 ? $s2 : ($s1 > $s3 ? $s1 : $s3));

echo min($s1, $s2, $s3) . '<br>';
echo $result . '<br>';
echo max($s1, $s2, $s3);