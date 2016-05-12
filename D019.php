<?php
//D019 文字列からN番目

$input_lines = trim(fgets(STDIN));
$lists = explode(' ',$input_lines);

echo substr($lists[0], $lists[1]-1, 1);
?>
