<?php
// 引数として数値を渡すと+1して返す関数を作り、
// 返り値を出力してください。
$numbers = [54];

function sum($numbers) {
  $sum = 1;
  foreach($numbers as $num){
    $sum += $num;
  }
  return $sum;
}
$result = sum($numbers);
echo "{$result}";