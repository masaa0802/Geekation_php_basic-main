﻿<?php
// 連想配列に国と都市を格納し
// ○○の首都は○○です。
// という形でループ構文を使用してすべて出力してください。

// 日本、アメリカ、イギリス、フランス
// 東京、ワシントン、ロンドン、パリ

$arry = ['日本'=>'東京','アメリカ'=>'ワシントン','イギリス'=>'ロンドン','フランス'=>'パリ'];

foreach($arry as $key => $val){
  echo "<div>{$key}の首都は{$val}です。</div>";
}