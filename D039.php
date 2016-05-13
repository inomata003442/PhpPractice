<?php
//D039 正三角形かどうか
$side[0] = trim(fgets(STDIN));
$side[1] = trim(fgets(STDIN));
$side[2] = trim(fgets(STDIN));

if(count(array_unique($side))===1){
    echo "YES";
}else{
    echo "NO";
}
?>
