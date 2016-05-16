<?php
//C022 ローソク足
$n = trim(fgets(STDIN));

for($i=0;$i<$n;$i++){
    $input_lines = trim(fgets(STDIN));
    $stock[$i] = explode(' ', $input_lines);
    $high[] = $stock[$i][2];
    $low[] = $stock[$i][3];
}

echo $stock[0][0], ' ', $stock[$n-1][1], ' ',  max($high), ' ', min($low);
?>
