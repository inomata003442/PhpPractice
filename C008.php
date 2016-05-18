<?php
//C008 文字列の抽出

$tag = explode(' ', trim(fgets(STDIN)));//tag[0]=タグA tag[1]=タグB
$inputline = trim(fgets(STDIN));//検索対象の文字列
$result = array();//念のため初期化

//抽出開始
$search_B = 0-strlen($tag[1]);//最初の$search_B+$strlen($tag[1])が０になるように初期化
for($i=0;;$i++){//次のタグが見つからずbreakするまで無限ループ
    $search_A = strpos($inputline, $tag[0], $search_B+strlen($tag[1]));//タグAが出てきた時の"<"の位置
    if($search_A===false){//==false だと0の時真を返してしまうので必ず===とすること
        break;
    }
    $search_B = strpos($inputline, $tag[1], $search_A+strlen($tag[0]));//タグBが出てきた時の"<"の位置
    if($search_B===false){
        break;
    }
    if($search_A+strlen($tag[0])==($search_B)){
        $result[] = '<blank>';
    }else{
        //抜き出したい文字列の最初の文字＝タグAの"<"の位置+タグAの文字数
        //抜き出したい文字数＝タグBの"<"位置-タグAの"<"位置-タグAの文字数
        $result[] = substr($inputline, $search_A+strlen($tag[0]), $search_B-$search_A-strlen($tag[0]));
    }
}
//結果表示
foreach($result as $echo_result){
    if($result===null){//ヌル避け
        //echo 'null';
        break;
    }else{
        echo $echo_result. "\n";
    }
}

?>
