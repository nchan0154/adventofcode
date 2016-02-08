<?php

$lights;
$total;

foreach(file('input/day-18.txt', FILE_IGNORE_NEW_LINES) as $row => $input){
    for ($i = 0; $i < strlen($input); $i++){
        $input[$i] === '#'? $lights[$row][$i] = 1 : $lights[$row][$i] = 0;
    }
}

//turning all the corners on!
$lights[0][0] = $lights[0][99] = $lights[99][0] = $lights[99][99] = 1;

function countOn($l, $x, $y){
    return  $l[$x - 1][$y - 1] +
            $l[$x - 1][$y] + 
            $l[$x - 1][$y + 1] + 
            $l[$x][$y - 1] + 
            $l[$x][$y + 1] + 
            $l[$x + 1][$y - 1] + 
            $l[$x + 1 ][$y] + 
            $l[$x + 1][$y + 1];
}

function step($grid){
    $new = $grid;
    for ($j = 0; $j < 100; $j++){
        for ($k = 0; $k < 100; $k++){ 
            $on = countOn($grid, $j, $k);
            if ($grid[$j][$k] === 0 && $on === 3){
                $new[$j][$k] = 1;
            } else if ($grid[$j][$k] === 1 && $on != 3 && $on != 2){
                $new[$j][$k] = 0;
            }
        }
    }
    return $new;
}

for($l = 0; $l < 100; $l++){
    $lights = step($lights);
    $lights[0][0] = $lights[0][99] = $lights[99][0] = $lights[99][99] = 1;
}


//light visualization
foreach ($lights as $i){
echo '<br>';
for($l = 0; $l < 100; $l++){
    echo $i[$l] == 1? '#' : '.';
}
echo '<br>';
}

echo array_sum(array_map('array_sum', $lights));
