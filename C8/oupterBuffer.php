
<?php ob_start();  // turns on the buffer 
require "../head.php";

for ($i=0;$i<10;$i++){
    echo "Outputs nonsingular number !!! : ";
    echo $i . "</br>";
    if ($i%2 == 0){   
        ob_flush(); // output buffer to the web 
    }
    else {
        ob_clean(); // clear buffer 
    }
    ob_clean();
}
ob_end_clean(); //clearns the output buffer and turns off the buffer  

require "../tail.php";
;?>