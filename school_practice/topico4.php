<?php
const LF = "\n";
function sum($a, $b){
    if($a==0) return false;
    $sum =$a + $b;
    return $sum;
}

echo sum(0, 5) . LF;

echo("ha ha ha");



$x=12;
function double(&$x) {
    $x= $x*2;
    return $x;
}

echo double($x) . LF;  //24
echo $x . LF;           //12

function concat($str) {
    $str .="World";
}
$str = "Hello";
concat($str);
echo $str . LF;

$sum = function($a,$b){ return $a+$b;};

$a = array('a' => 'apple', 'b' => 'red', 'c' => array('x','y','z'));
print_r($a);
// or
$str = print_r($a, true);
echo "<!-- $str -->\n";

