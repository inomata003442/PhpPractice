<?php
    $a = trim(fgets(STDIN));
    $b = explode(' ',$a);

    if($b[0] > $b[1]){
        echo $b[0];
    }
    elseif($b[1] > $b[0]){
        echo $b[1];
    }
    elseif($b[0] === $b[1]){
        echo "eq";
    }
    else{
    }
?>
