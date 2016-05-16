<?php
//C030 白にするか黒にするか
$input_lines = trim(fgets(STDIN));
$int = explode(' ', $input_lines);
$h = $int[0];
$w = $int[1];

for($i=0;$i<$h;$i++){
    $input_lines2 = trim(fgets(STDIN));
    for($j=0;$j<$w;$j++){
        $grayScale[$i] = explode(' ', $input_lines2);
        if($grayScale[$i][$j]<128){
            $grayScaleBin[$i][$j] =0;
        }else{
            $grayScaleBin[$i][$j] =1;
        }
    }
}
for($i=0;$i<$h;$i++){
    echo implode(" ", $grayScaleBin[$i]);
    if($i==$h-1){
        break;
    }else{
        echo "\n";
    }
}
?>
