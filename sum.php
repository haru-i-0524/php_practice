<?php

//1.引数に数値を指定して実行すると、数値を２倍にして返す関数を作成
function double($number) {
   return $number *2;
}

echo double(10);

echo "\n";

?>
<?php

//2.$aと$bを仮引数に持ち、$aと$bを足した結果を返す関数を作成

function f($a, $b){
    return $a + $b;
}

echo f(1, 2);

echo "\n";

?>
<?php

//3.$arrという配列の仮引数を持ち、数値が入った配列array(1, 3, 5, 7, 9)を渡すと
//その要素すべてをかけた結果を返す関数を作成

function product($arr){
    $result = 1;
    foreach ($arr as $num){
        $result *= $num;
    }
    return $result;
}

echo product(array(1, 3, 5, 7, 9));

echo "\n";

?>
<?php

// 4.次のプログラムは、配列の中で一番大きい値を返すmax_arrayという関数を実装しようとしている。
// 途中の部分を完成させよ
/*
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
 }

 return $max_number;
 }
*/

function max_array($arr) {
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a){
            $max_number = $a;
        }
    }
    return $max_number;
}

echo max_array(array(5, 8, 6, 1, 7, 2, 4, 9, 3));

echo "\n";
?>
<?php
// 5.次のビルトイン関数の用途、使い方を調べて実際に使用

// ●strip_tags 
// 　→ 文字列からHTMLおよびPHPタグを取り除く
$str = "<h1>あいうえお</h1>";
echo strip_tags($str);
echo "\n";

// ●array_push
// 　→ 配列の最後に要素を追加する
$fruits = ['apple', 'orenge', 'melon'];

array_push($fruits, 'banana', 'pineapple');
print_r($fruits);
echo "\n";

// ●array_marge
//　 → 配列の要素の最後にひとつまたは複数の配列を結合する
$array01 = array(1, 2, 3);
$array02 = array(10, 20, 30);

$result = array_merge($array01, $array02);
print_r($result);
echo "\n";

// ●time
// 　→ 現在時刻のUNIXタイムスタンプを取得
// ●mktime
// 　→ 指定した日時のUNIXタイムスタンプを取得
echo '現在のUnixタイムスタンプ：'.time();
echo "\n";

$timestamp = mktime(0, 0, 0, 8, 30, 2020);
echo '2020/8/30のタイムスタンプ：'.$timestamp;
echo "\n";

// ●date
// 　→ ローカルの日付/時刻を書式化
date_default_timezone_set('Asia/Tokyo');
echo date("Y/m/d H:i:s");
echo "\n";

?>