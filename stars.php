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

?>