<?php
//递归
function fib($n)
{
    if ($n == 0 || $n == 1) {
        return $n;
    }
    return fib($n - 1) + fib($n - 2);
}

//循环
function fib1($n)
{
    $f0 = 0;
    $f1 = 1;
    $f2 = 0;
    if ($n == 0 || $n == 1) {
        return $n;
    }
    for ($i = 2; $i <= $n; $i++) {
        $f2 = $f0 + $f1;
        $f0 = $f1;
        $f1 = $f2;
    }
    return $f2;
}


//输出
$fibarray = array();
for ($i = 0; $i < 10; $i++) {
    $fibarray[$i] = fib($i);
//    echo fib($i) . ' ';
    echo $fibarray[$i] . ' ';
}
echo '<br>';
for ($i = 0; $i < 10; $i++) {
    echo fib1($i) . ' ';

}
