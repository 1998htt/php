<?php
//$x=5;
//$y=6;
//$z=$x+$y;
//echo $z;


//$x=5; // 全局作用域
//function myTest() {
//  $y=10; // 局部作用域
//  echo "<p>测试函数内部的变量：</p>";
// // echo "变量 x 是：$x";
//  echo "<br>";
//  echo "变量 y 是：$y";
//}
//
//myTest();
//echo "<p>测试函数之外的变量：</p>";
//echo "变量 x 是：$x";
//echo "<br>";
////echo "变量 y 是：$y";
//

//$x = 1;
//$y = 2;
//function myTest(){
//    global $x,$y;
//    echo $x + $y;
//}
//myTest();

function myTest(){
    static $a=0;
    echo "<h1>$a</h1>";
    $a++;

}
myTest();
myTest();
myTest();

//$x = 3;
//$y = 3.14;
//$z = true;
//var_dump($x);
//var_dump($y);
//var_dump($z);

$car = array("BMW","V","a");
var_dump($car);
?>


