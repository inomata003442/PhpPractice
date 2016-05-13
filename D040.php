<?php
//D040 連休の天気
for($i=0;$i<7;$i++){
    $pop[$i] = trim(fgets(STDIN));
    if($pop[$i]<=30){
            $popUnder30[$i] = $pop[$i];
    }
}
echo count($popUnder30);
?>
