<?php
//C025 ファックスの用紙回収
$m = trim(fgets(STDIN)); //一回で運べる枚数
$n = trim(fgets(STDIN)); //今日一日に届くファックスの回数

//faxのデータ fax[$i][0]=時間 fax[$i][1]=分 fax[$i][2]=枚数
for($i=0;$i<$n;$i++){
    $inputline = trim(fgets(STDIN));
    $fax[$i] = explode(' ', $inputline);
}
//時間台で分ける
$j = 0; //$fax_At_Hourの初期値
for($i=0;$i<$n;$i++){
    if($i==0){
        $fax_At_Hour[$j][] = $fax[$i][2];
    }else{
        if($fax[$i][0]==$fax[$i-1][0]){ //時間が前の時間と同じ時
            $fax_At_Hour[$j][] = $fax[$i][2];
        }else{
            $j = $j+1; //入れる場所を変える
            $fax_At_Hour[$j][] = $fax[$i][2];
        }
    }
}
//計算開始
$k = count($fax_At_Hour); //個数をforの上限値として定義
for($i=0;$i<$k;$i++){
    $faxSum = array_sum($fax_At_Hour[$i]);
    $result[] = ceil($faxSum / $m);
}
//計算結果を表示
echo array_sum($result);
?>
