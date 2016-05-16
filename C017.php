<?php
//C017 ハイアンドロー・カードゲーム
$input_lines = trim(fgets(STDIN));
$dealer = explode(' ', $input_lines);
$n = trim(fgets(STDIN));

for($i=0;$i<$n;$i++){
    $input_lines2 = trim(fgets(STDIN));
    $player[$i] = explode(' ', $input_lines2);
}

for($j=0;$j<$n;$j++){
    if($player[$j][0]<$dealer[0]){
        $result[] = "High";
    }elseif($dealer[0]<$player[$j][0]){
        $result[] = "Low";
    }elseif($player[$j][0]==$dealer[0]){
        if($player[$j][1]<$dealer[1]){
            $result[] = "Low";
        }elseif($dealer[1]<$player[$j][1]){
            $result[] = "High";
        }
    }
}

for($k=0;$k<$n;$k++){
    if($k==$n-1){
        echo $result[$k];
    }else{
        echo $result[$k]. "\n";
    }
}
?>
