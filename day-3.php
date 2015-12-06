<?php

$input = file_get_contents('input/day-3.php');
$house = [0,0];
$visited = [[0,0]];

for ($i = 0; $i < strlen($input); $i++) {

    switch (substr($input, $i, 1)){
        case '<':
            $house[0] -= 1;
            break;
        case '>':
            $house[0] += 1;
            break;
        case '^':
            $house[1] += 1;
            break;
        case 'v':
            $house[1] -= 1;
            break;
    }
    
    if (!in_array($house, $visited)){
        $visited[] = $house; 
    }
}

echo count($visited);

?>