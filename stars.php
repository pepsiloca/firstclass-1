<style>

*{
    font-family:"Courier New";
    line-height:10px;
}
</style>

<?php

//印星星

for($i=0;$i<5;$i++){

    for($j=0;$j<($i+1);$j++){

        echo "*";
    }

    echo "<br>";
}

echo "<hr>";

for($i=0;$i<5;$i++){

    for($j=0;$j<(5-$i);$j++){

        echo "*";
    }

    echo "<br>";
}

echo "<hr>";

for($i=5;$i>0;$i--){

    for($j=0;$j<$i;$j++){

        echo "*";
    }

    echo "<br>";
}

//正三角形

echo "<hr>";

for($i=0;$i<5;$i++){

    for($k=0;$k<(4-$i);$k++){
        echo "&nbsp;";
    }

    for($j=0;$j<($i*2+1);$j++){

        echo "*";  //not break space
    }

    echo "<br>";
}

//菱形

echo "<hr>";

for($i=0;$i<5;$i++){

    for($k=0;$k<(4-$i);$k++){
        echo "&nbsp;";
    }

    for($j=0;$j<($i*2+1);$j++){

        echo "*";  //not break space
    }

    echo "<br>";
}

for($i=3;$i>=0;$i--){

    for($k=0;$k<(4-$i);$k++){
        echo "&nbsp;";
    } 

    for($j=0;$j<($i*2+1);$j++){

        echo "*";  //not break space
    }

    echo "<br>";
}

//解法二
echo "<hr>";


for($i=0;$i<9;$i++){

    //利用判斷式來決定t的值,再用t的值來決定空白及星星的數量    
    if($i<=4){
        $t=$i;
    }else{
        $t=8-$i;
    }

    //印空白
    for($k=0;$k<(4-$t);$k++){
        echo "&nbsp;";
    }

    //印星星
    for($j=0;$j<($t*2+1);$j++){

        echo "*";  //not break space
    }

    //斷行
    echo "<br>";

}


//矩形
echo "<hr>";
for($i=0;$i<5;$i++){

    if($i==0 || $i==4){
        
        for($j=0;$j<5;$j++){
            echo "*";
        }
        
    }else{

        for($k=0;$k<5;$k++){
            if($k==0 || $k==4){
                echo "*";
            }else{
                echo "&nbsp;";
            }
        }
    }

    echo "<br>";
}
//矩形
echo "<hr>";

$x=20;

for($i=0;$i<$x;$i++){

    if($i==0 || $i==($x-1)){
        
        for($j=0;$j<$x;$j++){
            echo "*";
        }
        
    }else{

        for($k=0;$k<$x;$k++){
            if($k==0 || $k==($x-1) || $k==$i || $k==($x-$i-1)){
                echo "*";
            }else{
                echo "&nbsp;";
            }
        }
    }

    echo "<br>";
}

?>

<!-- &nbsp;&nbsp;&nbsp;&nbsp;*<br>
&nbsp;&nbsp;&nbsp;***<br>
&nbsp;&nbsp;*****<br>
&nbsp;*******<br>
*********<br> -->