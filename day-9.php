<?php

//in all honestly I was completely stuck with this one! After reading through solutions I found many of them used external permutations functions, so here is my shot at using Bill O'Reilly's permutation function.


function pc_permute($items, $perms = array( )) {
    if (empty($items)) {
        $return = array($perms);
    }  else {
        $return = array();
        for ($i = count($items) - 1; $i >= 0; --$i) {
             $newitems = $items;
             $newperms = $perms;
         list($foo) = array_splice($newitems, $i, 1);
             array_unshift($newperms, $foo);
             $return = array_merge($return, pc_permute($newitems, $newperms));
         }
    }
    return $return;
}

$journeys = [];
$distances = [];
$cities = [];
$journeyLength = 0;

foreach(file('input/day-9.txt', FILE_IGNORE_NEW_LINES) as $input){
    //Processing the text!
    $matches = split(' ',$input);
    $from = $matches[0];
    $to =  $matches[2];
    $distance =  $matches[4];
    
    //getting all the cities to an array! Gotta do both to and from or you'll miss one.
    if(!in_array($to, $cities)) array_push($cities, $to);
    if(!in_array($from, $cities)) array_push($cities, $from);
    
    //Getting everything to an array!
    $distances[$to][$from] = $distances[$from][$to] = $distance;
}

$permutations = pc_permute(array_values($cities));


foreach ($permutations as $perm){
    //adding up the total journey length for every permutation!
    for ($i = 0; $i < count($perm); $i++){
        $journeyLength += $distances[$perm[$i]][$perm[$i+1]];
    }
    array_push($journeys, $journeyLength);
    $journeyLength = 0;
}

asort($journeys);
//first
echo reset($journeys) . "<br>";
//last
echo end($journeys);