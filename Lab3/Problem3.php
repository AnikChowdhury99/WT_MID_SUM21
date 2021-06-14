<?php  
    $length = 25;  
    $width = 20;  

    if($length===$width){
        echo 'The shape is a square';
    }
    else{
        echo "perimeter=". 2*($length+$width) ."<br>";
        echo "area of rectangle is $length * $width= " . ($length * $width) . "<br />";  
    }
?>