<?php
//C021 暴風域に居ますか
$input_lines = trim(fgets(STDIN));
$int = explode(' ', $input_lines);
$xc = $int[0];
$yc = $int[1];
$r_1 = $int[2];
$r_2 = $int[3];
$n = trim(fgets(STDIN));

for($i=0;$i<$n;$i++){
    $input_lines2 = trim(fgets(STDIN));
    $xn_yn[$i] = explode(' ', $input_lines2);
    $xn[] = $xn_yn[$i][0];
    $yn[] = $xn_yn[$i][1];
}

$cond1 = pow($r_1, 2);
$cond2 = pow($r_2, 2);
for($h=0;$h<$n;$h++){
    $cond0X = pow($xn[$h] - $xc, 2);
    $cond0Y = pow($yn[$h] - $yc, 2);
    $cond0 = $cond0X + $cond0Y;
    if(($cond1 <= $cond0) && ($cond0<= $cond2)){
        $result[] = 'yes';
    }else{
        $result[] = 'no';
    }
}

for($j=0;$j<$n;$j++){
    if($j==$n-1){
        echo $result[$j];
    }else{
        echo $result[$j]. "\n";
    }
}
?>
