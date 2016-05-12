<?php
//D017 最大と最小
$lists = array();
for($i=0;$i<5;$i++){
$lists[$i] = trim(fgets(STDIN));
}
echo max($lists). "\n";
echo min($lists);
?>
