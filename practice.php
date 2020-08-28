<?php
echo 'hello php!';

echo "\n";

// 1.$aに3、$bに7という変数を代入し、$a+$bの結果を表示
$a = 3;
$b = 7;
echo $a + $b;

echo "\n";

// 2.$array_monthという配列に1月～12が月の文字列を代入し、echoで8月を表示
$array_month = ["1月","2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"];
echo $array_month[7];

echo "\n";

//3.$helloという変数に"Hello,"を、$nameという変数に自分の名前を、$worlcという変数に"'s World!"と代入して、
//各変数を連結させて#Hello,名前's World!"と表示

$hello = "Hello, ";
$name = "Haruka";
$world = "'s World!";
echo $hello . $name . $world;

echo "\n";

//4.$tech_boostに"tech"という文字列が代入されている。
//複合演算を使って、echo $tech_boostと実行すると「tech boost」と表示されるように実装

$tech_boost = "tech";
$tech_boost .= " boost";
echo $tech_boost;

echo "\n";

////5.次のプログラムのバグを見つけて修正する。
//$2018_calendar = {        ←$calendar_2018 {を[に
//  "January" => "1月",
//  "February" => "2月"、   ←、を,に
//  "March" => "3月",
//  "April" => "4月",
//  "May" => "5月",
//  "June" = "6月",         ←=を=>に
//  "July" => "7月",
//  "August" => "8月",
//  "September" => "9月",
//  "October" => 10月,      ←"10月"
//  "November" => "11月",
//  "December" => "12月"
//};                        ←}を]に
////12月を表示する
//echo $2018_calendar[December];    ←$calendar_2018["December"]に

$calendar_2018 = [
    "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

echo $calendar_2018["December"];

echo "\n";

