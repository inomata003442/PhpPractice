<?php
//D021 文字列の一致

$str1 = trim(fgets(STDIN));
$str2 = trim(fgets(STDIN));

if($str1==$str2){
    echo "Yes";
}else{
    echo "No";
}
?>
