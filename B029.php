<?php
//B029　地価の予想

$inputline = explode(' ', trim(fgets(STDIN)));
$xA = $inputline[0];//地点Aのx座標
$yA = $inputline[1];//地点Aのy座標
$k = trim(fgets(STDIN));//近場から順に何個見つけるか
$n = trim(fgets(STDIN));//地価が既知である地点の総数

//地点追加
for($i=0;$i<$n;$i++){
    $point[$i] = explode(' ', trim(fgets(STDIN)));
    //near[$i][0]=地点Aからの距離 near[$i][1]=値段
    $near[$i][0] = sqrt(pow(($xA-$point[$i][0]), 2)+pow($yA-$point[$i][1], 2));
    $near[$i][1] = $point[$i][2];
}

sort($near);//nearを昇順ソート(キーを維持しない)
$nearest_k = array_slice($near, 0, $k);//nearを上から順にＫ個スライス
foreach($nearest_k as $tmp){//値段だけ抽出
        $price[] = $tmp[1];
}
$result = array_sum($price) / $k;//平均値を結果に

//結果表示
echo round($result);

?>
