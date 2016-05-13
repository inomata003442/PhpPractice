<?php
//C13 嫌いな数字
$hateNum = trim(fgets(STDIN));
$total = trim(fgets(STDIN));
for($i=0;$i<$total;$i++){
    $num[$i] = trim(fgets(STDIN));
    if(preg_match("[$hateNum+]",$num[$i])){
        continue;
    }else{
        $okRoom = array($num[$i]);
    }
}
/*
foreach($okRoom as $var){
    echo $var. "\n";
}
*/
?>
