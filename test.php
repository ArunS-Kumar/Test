<?php


function printStars($value)
{
    for($i=0;$i<=5;$i++){    
    for($j=0;$j<=$i;$j++){
        echo "*";
    }
    echo "<br/>";
}
}

printStars(5);


die();