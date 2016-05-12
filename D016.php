<?php
//D016 N文字目まで出力
$str = trim(fgets(STDIN));
$num = trim(fgets(STDIN));
echo substr($str, 0, $num);
?>
