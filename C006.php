<?php
//C006 ハイスコアランキング
$inputline = explode(' ', trim(fgets(STDIN)));
$numItem = $inputline[0];//アイテムの個数
$people = $inputline[1];//ユーザーの数
$top = $inputline[2];//トップ何人まで出力するか
$itemScore = explode(' ', trim(fgets(STDIN)));

//ユーザーデータ格納（各アイテムの個数）
for($i=0;$i<$people;$i++){
    $userData[$i] = explode(' ', trim(fgets(STDIN)));
}

//計算開始　スコアを計算する
for($i=0;$i<$people;$i++){
    for($j=0;$j<$numItem;$j++){
        $result[$i][$j] = $itemScore[$j] * $userData[$i][$j];
        $userScore[$i] = round(array_sum($result[$i]));
    }
}
//ソートしてからトップいくつまでを表示
rsort($userScore);
for($i=1;$i<=$top;$i++){
    if($i>=$top){
        echo $userScore[$i-1];
    }else{
        echo $userScore[$i-1]. "\n";
    }
}
?>
