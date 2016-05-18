<?php
//B021　複数形への変換

$n = trim(fgets(STDIN));//入力される単語の数

//単語追加
for($i=0;$i<$n;$i++){
    $word[$i] = trim(fgets(STDIN));
}

//比較用配列
$match_list = array("s", "o", "x", "f", "y", "a", "i", "u", "e", "o");
$match_list2 = array("sh", "ch", "fe");

//変換開始
//$word[0]から順番に見ていく

//語尾1文字が"s","o","x"のどれかの時"es"を追加
    if(){
        $result[$i] = $word[$i]. "es";
    }
//語尾2文字を法則にしたがって置換

//結果表示
var_dump($result);

?>
