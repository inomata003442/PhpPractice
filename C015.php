<?php
//C015 ポイントカードの計算
$n = trim(fgets(STDIN));

for($i=0;$i<$n;$i++){
    $input_lines = trim(fgets(STDIN));
    $receipt[$i] = explode(' ', $input_lines);
}

for($i=0;$i<$n;$i++){
    if(preg_match("[3+]", $receipt[$i][0])){
        $points[$i] = floor($receipt[$i][1] * 0.03);
    }elseif(preg_match("[5+]", $receipt[$i][0])){
        $points[$i] = floor($receipt[$i][1] * 0.05);
    }else{
        $points[$i] = floor($receipt[$i][1] * 0.01);
    }
}
echo array_sum($points);
?>
