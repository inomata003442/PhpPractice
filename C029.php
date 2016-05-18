<?php
//C029 旅行の計画

$inputline = explode(' ', trim(fgets(STDIN)));
$holiday = $inputline[0];//連休の日数
$travel = $inputline[1];//旅行の日数

for($i=0;$i<$holiday;$i++){
    $pop[$i] = explode(' ', trim(fgets(STDIN)));//[0]日付,[1]降水確率
}

$start = -1;//出発日を-1で初期化
$home = 0;//帰宅日を０で初期化
$avePop = 100;//降水確率の平均値を100で初期化
//計算開始 連休中のある日付からtravel日数分の降水確率値を合計する
//なおかつ参照する日付が飛び出ないようにする
for($i=0;$i<$holiday;$i++){
    if(($i+$travel)>$holiday){
        break;
    }else{
        $sumPop = 0;//0で初期化 降水確率の合計値
        for($j=0;$j<$travel;$j++){
            $sumPop += $pop[$i+$j][1];
        }
        //旅行開始日,帰宅日,降水確率の平均値を求める　
        //最後まで残るのは$avePopが最小、かつ$startが最小(最速)のデータ
        if($start<$pop[$i][0]){
            if($avePop>=($sumPop / $travel)){
                $start = $pop[$i][0];
                $home = $pop[$i+($j-1)][0];//$jは上のforで+1されているため-1して調整
                $avePop = ($sumPop / $travel);//降水確率の平均値
            }
        }
    }
}
//結果
echo $start. " ". $home;
?>
