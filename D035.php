<?php
//D034 日付のデータ
$input_lines = trim(fgets(STDIN));
$ymd = str_replace(' ','/',$input_lines);
echo $ymd;
?>
