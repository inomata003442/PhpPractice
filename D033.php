<?php
//D033 頭文字
$input_lines = trim(fgets(STDIN));
$fullName = explode(' ',$input_lines);
$initial = array();
$initial[0] = substr($fullName[0],0,1);
$initial[1] = substr($fullName[1],0,1);
echo $initial[0]. ".". $initial[1];
?>
