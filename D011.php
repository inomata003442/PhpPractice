<?php
//D011 アルファベットで何番目
$alpha = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$abc = str_split($alpha);

$input_lines = trim(fgets(STDIN));
$str = $input_lines;

for($i=0;$i<=25;$i++){
    if($abc[$i]==$str){
        $num = $i+1;
        echo $num;
    }
}
?>
