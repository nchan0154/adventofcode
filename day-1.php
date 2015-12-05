<?php

include('input/day-1.php');

$total = 0;

for( $i = 0; $i <= strlen($input); $i++ ) {
    
    if (substr($input, $i, 1) === '(') {
        $total += 1;
    } else {
        $total -= 1;  
    }
    
    // if ($total === -1) {
    //     echo $i+1.'<br>';
    // } 
    
} 

echo $total;

?>

