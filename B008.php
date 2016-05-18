<?php
//B008 地下アイドルの夢

$inputline = explode(' ', trim(fgets(STDIN)));
$fun = $inputline[0];//ファンクラブの人数
$live_times = $inputline[1];//ライブの回数

$result = 0;//0で初期化
if($live_times==0){
    //何もしない
}else{
    for($i=0;$i<$live_times;$i++){
        $live[$i] = explode(' ', trim(fgets(STDIN)));//i回目のライブでお客様がもたらす損益
    }
    for($i=0;$i<$live_times;$i++){
        $p_l[] = array_sum($live[$i]);//ライブごとに損益を合計
    }
    foreach($p_l as $key => $tmp){//$keyは使わなかったけど動くから残しときます
        if($tmp>0){
            $result += $tmp;//利益が出たライブの利益だけを結果に足し算していく
        }else{
            continue;
        }
    }
}
/*確認用
var_dump($live);
var_dump($p_l);
var_dump($result);
*/
//結果表示
if($live_times==0){
    echo "0";
}elseif($fun==0){
    echo "0";
}else{
    if($result==0){
        echo "0";
    }else{
        echo $result;
    }
}
?>
