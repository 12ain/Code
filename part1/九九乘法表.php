<?php
echo "<table border='1'>";
echo 'PHP九九乘法表';
$i = 1;
while ($i <= 9) {
    echo '<tr>';
    $j = $i;
    while ($j <= 9) {
        echo "<td> $i " . 'x' . " $j = " . $i * $j . "</td>";
        $j++;
    }
    echo '</tr>';
    $i++;
}


echo '</table>';