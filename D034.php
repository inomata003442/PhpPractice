<?php
//D034 どれにしようかな
$int = trim(fgets(STDIN));
$choice = 21 % $int;
if($choice==0){
    $choice = $int;
}
echo $choice;
?>
