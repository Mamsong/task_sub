<?php
//1
function numberdouble($num){
    
    return $num*2;
    
}

//2
function takeoff($a, $b){
    
return $a+$b;
}

//3
function regular($arr){
    
    $coun = count($arr);
    
    $sum = 1;
    
    for($i = 0;$i < $coun;$i++){
        $sum *= $arr[$i];
    }
    return $sum;
    
}

echo regular(array(1,3,5,7,9));

//4
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
    if($max_number <= $a){
        $max_number = $a;
    }
 }

 return $max_number;
 }
 
 //5
 //strip_tags
 $str = "<h1>あいうえお</h1>";
 echo strip_tags($str);
 
 
 //array_push
 $stack = array("orange","banana");
 array_push($stack,"apple");
 print_r($stack);
 
 //array_merge
$array1 = array("water","coffe");
$array2 = array("cake","pasta");

$result = array_merge($array1,$array2);
print_r($result);

//time, mktime
echo time();

$timestamp = mktime(0,0,0,4,25,2020);
echo $timestamp;

//date
echo date("Y/m/d H:i:s");


?>



