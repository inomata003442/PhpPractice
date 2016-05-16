<?php
//C028 単語テストの採点
$n = trim(fgets(STDIN));

for($i=0;$i<$n;$i++){
    $input = trim(fgets(STDIN));
    $spell[$i] = explode(' ', $input);
}

$point = 0;
for($i=0;$i<$n;$i++){
    if(strlen($spell[$i][0])==strlen($spell[$i][1])){
        $sentence = strlen($spell[$i][0]);
        $miss = 0;
        for($j=0;$j<$sentence;$j++){
            if(substr($spell[$i][0], $j, 1)===substr($spell[$i][1], $j, 1)){
                continue;
            }else{
                $miss = $miss+1;
            }
        }
        if($miss==0){
            $point = $point+2;
        }elseif($miss==1){
            $point = $point+1;
        }else{
            continue;
        }
    }else{
        continue;
    }
}
echo $point;

?>
