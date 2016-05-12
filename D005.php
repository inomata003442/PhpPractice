<?php
//D005 等差数列
$int = fgets(STDIN);
$sequence = explode(' ',$int);
$m = $sequence[0];
$n = $sequence[1];
$echoSequence = $sequence[0];
$echoSequence .= " ";
for($i=2;$i<11;$i++){
    $sequence[i] = $m + $n;
    $echoSequence .= $sequence[i];
    $echoSequence .= " ";
    $m = $sequence[i];
}
$echoSequence = substr($echoSequence,0,-1);
echo $echoSequence;
?>
