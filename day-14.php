<?php

$allDeer = [];

foreach(file('input/day-14.txt', FILE_IGNORE_NEW_LINES) as $input){
    list($deer, , ,$speed, , ,$racing, , , , , , ,$rest, ) = split(' ', $input);
    $allDeer[$deer] = [
        'name' => $deer,
        'speed' => $speed,
        'racing' => $racing,
        'rest' => $rest,
        'total' => $racing + $rest
    ];
}


//Part 1
foreach($allDeer as $deer){
    $legs = floor(2503 / $deer['total']);
    $distanceTravelled = ($legs * $deer['speed'] * $deer['racing']) +  min($deer['racing'] , 2503 % $legs)   * $deer['speed'];
    echo $deer['name']. ' ' . $distanceTravelled.'<br>';
}




//Part 2. I definitely wish I had made a Reindeer class.
$points = array_fill_keys(array_keys($allDeer), 0);
for ($i = 1; $i <= 2503; $i++){
    $distances = [];
    foreach($allDeer as $deer){
        $legs = floor($i / $deer['total']);
        $deer['distance'] = $deer['speed'] * ($legs * $deer['racing'] + min($i % $deer['total'], $deer['racing']));

 
        //getting all the distances to an array
        $distances[$deer['name']] = $deer['distance'];
    }
    //checking the winner of each round
    foreach (array_keys($distances, max($distances)) as $name){
        $points[$name]++;
    }        
}  
var_dump($points);



    