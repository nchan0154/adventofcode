<?php

$wires = [];
$input = [];

foreach(file('input/day-7.txt', FILE_IGNORE_NEW_LINES) as $command){
    array_push($input, $command); 
    
}

var_dump($input);

while (count($input) > 0){
    foreach ($input as $i -> $in){
        if (preg_match('/(.+) -> (.+)/', $in, $matches) === 1){
            
        }
    }
}



