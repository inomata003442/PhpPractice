<?php
//D015 カウントダウン
(int)$i = trim(fgets(STDIN));

while ($i >0){
    echo $i. "\n";
    $i = $i-1;
}
?>
