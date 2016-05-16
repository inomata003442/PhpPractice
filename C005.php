<?php
//C005 アドレス調査
$m = trim(fgets(STDIN));

for($i=0;$i<$m;$i++){
    $input = trim(fgets(STDIN));
    $address[$i] = explode('.', $input);
}

$result = array();
for($i=0;$i<$m;$i++){
    if(count($address[$i])==4){
        for($j=0;$j<4;$j++){
            if((0<=$address[$i][$j])&&($address[$i][$j]<=255)){
                    $result[$i] = 'True';
            }else{
                $result[$i] = 'False';
                break;
            }
        }
    }else{
        $result[$i] = 'False';
    }
}

for($i=0;$i<$m;$i++){
    if($i==$m-1){
        echo $result[$i];
    }else{
        echo $result[$i]. "\n";
    }
}
?>
