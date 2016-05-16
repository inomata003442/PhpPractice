<?php
//C016 Leet文字列
$replaceList = array(
    'A'=>'4',
    'E'=>'3',
    'G'=>'6',
    'I'=>'1',
    'O'=>'0',
    'S'=>'5',
    'Z'=>'2');
$input_lines = trim(fgets(STDIN));
echo strtr($input_lines,$replaceList);
?>
