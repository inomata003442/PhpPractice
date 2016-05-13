<?php
//C14 ボールが入る箱
$input_lines = trim(fgets(STDIN));
$nr = explode(' ', $input_lines);
$n = $nr[0];
$r = $nr[1];

for($i=0;$i<$n;$i++){
    $input_lines2 = trim(fgets(STDIN));
    $box[$i] = explode(' ', $input_lines2);
}
for($i=0;$i<$n;$i++){
    if(min($box[$i])>=$r*2){
        echo $i+1;
            if($i==$n-1){
                break;
            }else{
                echo "\n";
            }
    }else{
        continue;
    }
}
?>
