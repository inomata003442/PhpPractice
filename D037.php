<?php
//D037 花粉症でつらい
$emptyDay = trim(fgets(STDIN));
$remainDay = trim(fgets(STDIN));
$box = ceil($remainDay / $emptyDay);
echo $box;
?>
