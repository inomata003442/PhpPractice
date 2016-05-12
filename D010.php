<?php
//D010 Eメールアドレス
$lists = array();
for($i=0;$i<=1;$i++){
    $lists[$i] = trim(fgets(STDIN));
}
echo $lists[0]. "@". $lists[1]

?>
