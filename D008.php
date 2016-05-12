<?php
//D008 単位の計算
$input_lines = trim(fgets(STDIN));
$int = $input_lines;

if($int%2!=0) {
    $echo = "odd";
}elseif($int%2==0){
    $echo = "even";
}else{
    $echo = "error";
}
echo $echo;
?>
