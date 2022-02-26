<?php
// 配列に「10,60,90,70,50」を点数として格納し
// それぞれをif文で

// 80点以上なら「優」
// 60点以上なら「良」
// 40点以上なら「可」
// それ以下なら「不可」

// という形で区別し、
// ○○点は「○」です。と出力してください。
$scores = [10,60,90,70,50];
$level = ['優','良','可','不可'];

$score = $scores[2];

if ($score >= 80){
  echo "{$score}点は{$level[0]}です。";
}elseif($score >= 60){
  echo "{$score}点は{$level[1]}です。";
}elseif($score >= 40){
  echo "{$score}点は{$level[2]}です。";
}else{
  echo "{$score}点は{$level[3]}です。";
}

