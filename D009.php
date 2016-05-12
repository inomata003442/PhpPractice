<?php
//D009　西暦の計算
$input_lines = trim(fgets(STDIN));
$years = explode(" ",$input_lines);
$a = $years[0];
$b = $years[1];

$difference = $b - $a;
echo $difference;
?>
