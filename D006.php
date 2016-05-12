<?php
//D006 単位の計算
$input_lines = trim(fgets(STDIN));
$distance = explode(" ",$input_lines);
$n = (int)$distance[0];
$s = $distance[1];
if($s == 'km') {
    $mm = $n * 10 * 100 * 1000;
}elseif($s == 'm'){
    $mm = $n * 10 * 100;
}elseif($s == 'cm'){
    $mm = $n * 10;
}else{
    $mm = 'error';
}
echo $mm;
?>
