<?php
// 以下をそれぞれ表示してください。
// 表示するタイミングによって自動で算出すること
// ・現在日時（yyyy年mm月dd日 H時i分s秒）
// ・現在日時から３日後
// ・現在日時から１２時間前
// ・2020年元旦から現在までの経過日数

// 日時がおかしい場合、PHPのタイムゾーン設定を行ってください

echo date('現在日時(Y年m月d日 H時i分s秒)');
echo "<br />";
echo date('現在日時から３日後(Y/m/d/H/i/s)',strtotime('+3 day'));
echo "<br />";
echo date('現在日時から１２時間前(Y/m/d/H/i/s)',strtotime('-12 hours'));
echo "<br />";


$today = date("Y-m-d");
$today = strtotime($today);
$day = strtotime('2020-01-01');
echo '2020年元旦から現在までの経過日数: ';
echo ($today - $day) / (60 * 60 * 24). '日';