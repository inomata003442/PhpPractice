<?php
//D007　N倍の文字列

(int)$input_lines = (int)trim(fgets(STDIN));
(int)$mag = (int)$input_lines;
$asterisque = null;

for($i=1;$i<=$mag;$i++){
    $asterisque .= '*';
}
echo $asterisque;
?>
