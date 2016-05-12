<?php
//D012　絶対値を求めよ

(int)$input_lines = fgets(STDIN);
(int)$int = explode(' ', $input_lines);

$div = floor($int[0] / $int[1]);
$rem = $int[0] % $int[1];
echo $div. " ". $rem;
?>
