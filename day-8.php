<?php

include('input/day-8.php');

$totalEscaped = 0;

for ($i = 0; $i <= count($input); $i++ ){
    echo $input[$i];
    $totalEscaped += strlen($input[$i]);
    echo $totalEscaped. '<br>';
}

echo $totalEscaped;

//Text editor solutions are great!

