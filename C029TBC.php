<?php
//C029 旅行の計画
//失敗 イチから作り直し

$inputline = explode(' ', trim(fgets(STDIN)));
$holiday = $inputline[0];//連休の日数
$travel = $inputline[1];//旅行の日数
for($i=0;$i<$holiday;$i++){
    $pop[$i] = explode(' ', trim(fgets(STDIN)));//[0]日付,[1]降水確率
}

//計算開始 連休中のある日付からtravel日数分の降水確率値を合計する
//なおかつ参照する日付が飛び出ないようにする
if(($holiday==1)&&($travel==1)){//＜修正＞$holiday=1,$travel=1の時動かなくなるのを防ぐ
    echo "1". " ". "1";
}else{
    for($i=0;$i<=$holiday-$travel;$i++){
        $sumPop[$i][0] = 0;//0で初期化
        for($j=0;$j<$travel;$j++){
            $sumPop[$i][0] += $pop[$i+$j][1];
            if($j==0){
                $sumPop[$i][1] = $pop[$i+$j][0];//最初の日付を付与する
            }
            if($j==($travel-1)){//＜修正＞$travelが 1 の時動かなかったので分離
                $sumPop[$i][2] = $pop[$i+$j][0];//最後の日付を付与する
            }
        }
    }
    //降水確率の平均値を求める
    for($i=0;$i<count($sumPop);$i++){
        $avePop[$i] = round($sumPop[$i][0] / $travel);
    }
    //降水確率の平均が最も低い配列の最初の日付[1]と最後の日付[2]を返す
    $key = array_keys($avePop, min($avePop));//キーを返す
    echo $sumPop[($key[0])][1]. " ". $sumPop[($key[0])][2];//キーは共通しているので返せる
}
?>
