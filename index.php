<?php
//運算子 !
$a=true;
echo $a;
echo "<hr>";
echo !$a;


//運算子 ++  => $b=$b+1;
echo "<hr>";
$b=1;
echo $b++;
echo "<hr>";
echo $b+1;

echo "<hr>";
//算術運算子 + ,- ,* ,/

$a=2;
$b=5;
echo $a+$b;
echo "<hr>";
//字串運算子

$a="A";
$b="B";
echo $a;
echo "<br>";
echo $b;
$c=$a . $b ;
echo "<hr>";
echo $c;
echo "<hr>";
//字串運算子2

$a="A";
$b=1;
echo $a;
echo "<br>";
echo $b;
$c=$a . $b ;
$d=$a + $b ;
echo "<hr>";
echo $c;
echo "<hr>";
echo $d;
echo "<hr>";
//三元運算子
$a=5;

echo ($a>0)?"很貴":"免費";

echo "<hr>";

if($a>0){
    echo "很貴";
}else{
    echo "免費";
}

?>