<?php
//C010 安息の地を求めて
$input_lines = trim(fgets(STDIN));
$abr = explode(' ', $input_lines);
$a = $abr[0];
$b = $abr[1];
$r = $abr[2];
$n = trim(fgets(STDIN));
for($i=0;$i<$n;$i++){
    $input_lines2 = trim(fgets(STDIN));
    $shade[$i] = explode(' ', $input_lines2);
}
var_dump($shade);
for($j=0;$j<$n;$j++){
    if(pow($shade[$j][0] - $a, 2) + pow($shade[$j][1] - $b, 2) >= pow($r, 2)){
        $result[] = 'silent';
    }else{
        $result[] = 'noisy';
    }
}

for($k=0;$k<$n;$k++){
    if($k>=$n-1){
        echo $result[$k];
    }else{
        echo $result[$k]. "\n";
    }
}

?>
