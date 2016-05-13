<?php
//D036 アットマーク
$input_lines = trim(fgets(STDIN));
$replaceAt = str_replace('at','@',$input_lines);
echo $replaceAt;
?>
