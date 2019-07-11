<?php
//PHP/Laravel 03 課題
//課題1
$name = "kuroda";
if ($name ==$name){
    echo "私は　あなたの　名前です";
}else{
    "あなたの名前ではありません";
}
echo "\n";

//課題2
for ($i=0; $i < 10000; $i++){
    $total +=$i;
}
echo $total;
echo "\n";

//課題3
$fruits = array("梨", "みかん","ぶどう","ライチ","桃");

foreach($fruits as $fruits){
    echo $fruits;
    echo "\n";
}

//課題4

$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i++){
  if(($i % 5) == 0){
    echo $i . "\n";
  }
}
