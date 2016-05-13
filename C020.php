<?php
//C20 残り物の量
$input_lines = trim(fgets(STDIN));
$mpq = explode(' ',$input_lines);
$m = $mpq[0];
$p = $mpq[1];
$q = $mpq[2];

$process = $m - ($m * $p) / 100;
echo $process - ($process * $q) / 100;
?>
