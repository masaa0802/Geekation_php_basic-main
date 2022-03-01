<?php
// 以下は1から100までの数字を順番に表示するプログラムです。
// その数が3で割り切れるなら"アホ"、5で割り切れるなら"わん"、
// 両方で割り切れるなら"アホわん"
// と表示してください。
// 判定は関数に記述し、関数を呼び出して結果表示すること
// ※余りの計算が分からなければ「php 四則演算」で検索
// 表示例）
// 1
// 2
// 3 アホ
// 4
// 5 わん
// 6 アホ
// 7
// 8
// 9 アホ
// 10 わん
// 11
// 12 アホ
// 13
// 14
// 15 アホわん
// .
// .
// 以下省略
function nabeatsu($i){
    // この関数内に処理を記述
    if ($i % 15 == 0 ) {
        echo 'アホわん';
    }elseif ($i % 5 ==0) {
        echo 'わん';
    }elseif ($i % 3 ==0) {
        echo 'アホ';
    }else {
        echo "$i";
    }
    echo '<br>';
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>世界のナベアツプログラム</title>
</head>
<body>
    <section>
        <?php 
            $endvalue = 100;
            for ($i = 1; $i <= $endvalue ; $i++) {
                echo nabeatsu($i);
            }
        ?>
    </section>
</body>
</html>