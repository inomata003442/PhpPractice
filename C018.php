<?php
//C018 何人前作れる？
$n = trim(fgets(STDIN)); //レシピに書かれている食材の数
//↓↓レシピに書かれている食材の名前と数(一人前)↓↓
//$recipe[$i][0]=名前、$recipe[$i][1]=数
for($i=0;$i<$n;$i++){
    $inputline = trim(fgets(STDIN));
    $recipe[$i] = explode(' ', $inputline);
}
$m = trim(fgets(STDIN)); //あなたが所持している食材の数
//↓↓あなたが所持している食材の名前と数↓↓
//$have[$i][0]=名前、$have[$i][1]=数
for($i=0;$i<$m;$i++){
    $inputline = trim(fgets(STDIN));
    $have[$i] = explode(' ', $inputline);
}

//計算開始　食材はそれぞれ何人分あるか
for($i=0;$i<$n;$i++){
    $serve[$i] = 0; //とりあえず 0 を入れておく
    for($j=0;$j<$m;$j++){
        if($recipe[$i][0]===$have[$j][0]){
            $serve[$i] = floor($have[$j][1] / $recipe[$i][1]);
        }
    }
}
//結果
echo min($serve);
?>
