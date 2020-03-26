<style>

*{
    font-family:"Courier New";
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
?>

<!-- &nbsp;&nbsp;&nbsp;&nbsp;*<br>
&nbsp;&nbsp;&nbsp;***<br>
&nbsp;&nbsp;*****<br>
&nbsp;*******<br>
*********<br> -->