<?php
//C013 嫌いな数字
$hateNum = trim(fgets(STDIN));
$total = trim(fgets(STDIN));
$okRoom = array();

$count = 0;
for($i=0;$i<$total;$i++){
    $num[$i] = trim(fgets(STDIN));
    if(preg_match("[$hateNum+]",$num[$i])){
        continue;
    }else{
        $okRoom[] = $num[$i];
        $count++;
    }
}
if($count==0){
    echo 'none';
}else{
    for($h=0;$h<$count-1;$h++){
        echo $okRoom[$h]. "\n";
    }
    echo $okRoom[$h];
}
?>
