<?php

//actual input is 29,000,000 but we're taking off one 0!
$input = 2900000;

//Fairly certain this solution is correct but it's timing out! let's try JS
function listFactor($n){
    $factors = array();
    for ($x = 1; $x <= sqrt(abs($n)); $x++){
        if ($n % $x == 0){
            $z = $n/$x; 
            array_push($factors, $x, $z);
           }
    }
    return array_unique($factors);
}

function countPresents($i){
    return array_sum(listFactor($i));
}
    
$result = 0;
$i = 0;
while ($result !== $input){  
    $i++;
    $result = countPresents($i);
}

echo $i;
    