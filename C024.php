<?php
//C024 ミニ・コンピューター
$n = trim(fgets(STDIN));

for($i=0;$i<$n;$i++){
    $input = trim(fgets(STDIN));
    $function[$i] = explode(' ', $input);
}

$var[0] = 0;
$var[1] = 0;
for($i=0;$i<$n;$i++){
    if($function[$i][0]=='SET'){
        $key = ($function[$i][1])-1; //keyを0基準に調整
        $var[$key] = $function[$i][2];
    }elseif($function[$i][0]=='ADD'){
        $var[1] = $var[0]+$function[$i][1];
    }elseif($function[$i][0]=='SUB'){
        $var[1] = $var[0]-$function[$i][1];
    }
}

echo implode(" ", $var);
?>
