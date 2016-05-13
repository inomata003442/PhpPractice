<?php
//D027 nまでの和
$int = trim(fgets(STDIN));
$factorial = 0;
for($i=1;$i<=$int;$i++){
    $factorial = $factorial + $i;
    /*if($i>50){
        break;
    }*/
}
echo $factorial;
?>
