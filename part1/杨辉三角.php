<?php
function yanghui($n){
    $arr=array();
    for($i=1;$i<=$n;$i++){
        for($j=1;$j<=$i;$j++){
            if($j==1||$j==$i){
                echo $arr[$i][$j]=1;
            }else{
                echo $arr[$i][$j]=$arr[$i-1][$j-1]+$arr[$i-1][$j];
            }
            echo "  ";
        }
        echo "<br/>";
    }
}
yanghui(10);
