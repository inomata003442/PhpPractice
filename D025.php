<?php
//D025 数字の出力

$int = trim(fgets(STDIN));
echo str_pad($int, 3, 0, STR_PAD_LEFT);
?>
