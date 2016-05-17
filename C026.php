<?php
//C026 ウサギと人参
$inputline = trim(fgets(STDIN));
$nsp = explode(' ', $inputline);
//各数値を再定義
$n = $nsp[0]; //人参の数
$s = $nsp[1]; //糖分の基準値
$p = $nsp[2]; //許容誤差

for($i=1;$i<=$n;$i++){
    $inputline2 = trim(fgets(STDIN));
    $data[$i] = explode(' ', $inputline2); //人参のデータ
    $data[$i][2] = $i; //人参の番号
}
//処理開始 許容範囲内の人参を選別
for($i=1;$i<=$n;$i++){
    if(($s-$p<=$data[$i][1])&&($data[$i][1]<=$s+$p)){
        $weight[] = $data[$i][0]; //max()を使うので質量だけ別で格納
        $result[] = $data[$i];
    }else{
        continue;
    }
}
$int = count($result);
//番号が一番小さくて(=最初に見つかった)大きい人参を探し、echoして処理を終了する。
for($i=0;$i<$int;$i++){
    if($result[$i][0]==max($weight)){
        echo $result[$i][2];
        break;
    }
}
//そんな人参がなかった場合の処理
if($result==null){
    echo 'not found';
}

?>
