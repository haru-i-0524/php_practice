<?php

//1.$nameに名前を代入し、if文で$nameがtrueのとき「私は名前です」
//falseなら「あなたの名前ではありません」と表示するよう実装
$name = "haruka";
if ($name == "haruka") {
    echo "私は" . $name . "です";
} else {
    echo "あなたの名前ではありません";
}

echo "\n";

//2.for文を使って、1から10000までの合計の値を表示
$total = 0;
for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;

echo "\n";

//3.$fruits に配列で好きなフルーツを5こ代入し、foreach文で順番に出力
$fruits = array("apple", "orange", "lemon", "banana", "strawberry");
foreach ($fruits as $fruit) {
    echo $fruit;
    echo "\n";
}

echo "\n";

//4.【応用】 次のプログラムのバグを修正し、1から100までの間で5の倍数のみ表示するようにしてみてください。
/*
//for文の始めの値を定義する         
$start = 1;                         
//for文の終わりの値を定義する
$end = 100;

for($i = $start; $i < $end; $i++){  ←<を<=に

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){                  
    echo $i                         ←最後に;をつける
                                    ←echo "\n";をいれる
  }
}
*/

$start = 1;
$end = 100;
for ($i = $start; $i <= $end; $i++) {
    if ($i % 5 == 0) {
    echo $i;
    echo "\n";
    }
}
