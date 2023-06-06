<?php


function factorial($input){

    $output = 1;
    for($i=1; $i<=$input; $i++){
        $output = $output*$i;
    }
    echo "The factorial Number is: ".$output."\n";
}
factorial(3);