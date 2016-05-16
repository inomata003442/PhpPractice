<?php
//C023 クジの当選番号
$inputline = trim(fgets(STDIN));
$elect = explode(' ', $inputline);
$n = trim(fgets(STDIN));

for($i=0;$i<$n;$i++){
    $inputline2 = trim(fgets(STDIN));
    $num[$i] = explode(' ', $inputline2);
    if(array_intersect($num[$i],$elect)>=1){
        $intersect[$i] = array_intersect($num[$i],$elect);
        $result[] = count($intersect[$i]);
    }else{
        $result[] = 0;
    }
}

for($j=0;$j<$n;$j++){
    if($j>=$n-1){
        echo $result[$j];
    }else{
        echo $result[$j]. "\n";
    }
}
?>
