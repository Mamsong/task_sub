<?php
$name = "Mami";
if($name == "Mami"){
    echo "私は".$name."です";
}else{
    echo "あなたの名前ではありません";
}

for($i=1;$i<=10000;$i++){
    echo $i;
}

$fruits = array("apple","lemon","grape","banan","melon");
foreach($fruits as $fruit){
    echo $fruit;
}


/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
  }
}