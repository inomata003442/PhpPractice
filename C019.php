<?php
//C019 完全数とほぼ完全数
$q = trim(fgets(STDIN));

for($i=0;$i<$q;$i++){
    $num[] = trim(fgets(STDIN));
}

for($j=0;$j<$q;$j++){
    $divisor = 0;
    for($k=1;$k<$num[$j];$k++){
        if($num[$j]%$k==0){
            $divisor = $divisor + $k;
        }
    }
    if($num[$j] == $divisor){
        $result[] = 'perfect';
    }elseif(($num[$j]-$divisor)==1){
        $result[] = 'nearly';
    }else {
        $result[] = 'neither';
    }
}

for($l=0;$l<$q;$l++){
    if($l==$q-1){
        echo $result[$l];
    }else{
        echo $result[$l]. "\n";
    }
}

?>
