<?php
//D004 文字列の結合
$times = trim(fgets(STDIN));
$echolists = "Hello". " ";
$lists = array();
for($i=0;$i<$times;$i++){
    $lists[$i] = trim(fgets(STDIN));
    $echolists .= $lists[$i];
    $echolists .= ",";
}
$echolists = substr($echolists,0,-1);
$echolists .= ".";
echo $echolists;
?>
