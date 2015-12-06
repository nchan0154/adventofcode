<?php

$input = file_get_contents('input/day-3.php');

$santaHouse = [0,0];
$robotHouse = [0,0];
$visited = [];


for ($i = 0; $i <= strlen($input); $i++) {

    if ($i%2 ===  0){
        switch(substr($input, $i, 1)){
        case '<':
            $santaHouse[0] -= 1;
            break;
        case '>':
            $santaHouse[0] += 1;
            break;
        case '^':
            $santaHouse[1] += 1;
            break;
        case 'v':
            $santaHouse[1] -= 1;
            break;
        default: 
            break;
        }
        if (!in_array($santaHouse, $visited)){
        $visited[] = $santaHouse; 
        }
        
    } else {
        switch(substr($input, $i, 1)){
        case '<':
            $robotHouse[0] -= 1;
            break;
        case '>':
            $robotHouse[0] += 1;
            break;
        case '^':
            $robotHouse[1] += 1;
            break;
        case 'v':
            $robotHouse[1] -= 1;
            break;
        default: 
            break;    
        }
        if (!in_array($robotHouse, $visited)){
        $visited[] = $robotHouse; 
        }
    }
    
    
}

    var_dump($visited);


?>