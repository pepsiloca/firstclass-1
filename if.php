<?php


$score=50;
//if 判斷式



if($score>=60){
    echo "及格";
}else{
    echo "不及格";
}

echo "<hr>";
//判斷成績
/*
100~90 -> “A”
75~90 -> “B”
60~75 ->”C”
0~59 –>”D”
*/

$score=70;
echo "成績:" . $score;
echo "<br>";
echo "等級:";

if($score>=90){
    echo "A";
}else if($score >=75){
    echo "B";
}else if($score >=60){
    echo "C";
}else {
    echo "D";
}

echo "<br>";

//巢狀判斷式
if($score>=90){
    echo "A";
}else{
    if($score>=75){
        echo "B";
    }else{
        if($score>=60){
            echo "C";
        }else{
            echo "D";
        }
    }
}

//閏年判斷
/*
公元年分除以4不可整除，為平年。
    ->公元年分除以4可整除，為閏年。
公元年分除以4可整除但除以100不可整除，為閏年。
    ->公元年分除以4可整除 並且 除以100不可整除，為閏年。
公元年分除以100可整除但除以400不可整除，為平年。
    ->公元年分除以4可整除 並且 (年份除以100不可整除 或是 除以400可以整除) 為閏年。
公元年分除以400可整除但除以3200不可整除，為閏年。

*/

echo "<hr>";
$year=2000;
echo "西元年:".$year;
echo "<br>";
if( $year%4 == 0  &&  ($year%100 !=0 || $year%400==0)){

    echo "閏年";

}else{

    echo "平年";

}

?>