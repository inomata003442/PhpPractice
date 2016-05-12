<?php
//D026 一週間の予定
$plan = array();
for($i=0;$i<7;$i++){
    $plan[$i] = trim(fgets(STDIN));
}
$planStr = implode(' ', $plan);
echo substr_count($planStr, "no");
?>
