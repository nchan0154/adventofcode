<?php
//need more memory, lol.
ini_set('memory_limit', '500M');

//Using that permutations function from Day 9! Starting off by manipulating the text input using good old search and replace.
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

$seating = [];
$happiness = [];
$people = [];
$happinessChange = 0;

foreach(file('input/day-13.txt', FILE_IGNORE_NEW_LINES) as $input){
    //Processing the text!
    $matches = split(' ',$input);
    $from = $matches[0];
    $to = $matches[9];
    $happy = (int)$matches[2];

    //getting all the people to an array! Gotta do both to and from or you'll miss one.
    if(!in_array($to, $people)) array_push($people, $to);
    if(!in_array($from, $people)) array_push($people, $from);
    
    //Getting everything to an array, getting  the net happiness from relationships so we're working withe one number!
    $happiness[$from][$to] = $happy;
    $happiness[$from][$to] += $happiness[$to][$from];
    $happiness[$to][$from] = $happiness[$from][$to];
}

//adding me in! this works but causes C9 to explode, oops!
    $people[] = 'Me';
    for ($i = 0; $i < count($people); $i++){
        $name = $people[$i];
        $happiness[$name]['Me'] = 0;
        $happiness['Me'][$name] = 0;
    }
    unset($happiness['Me']['Me']);


$permutations = pc_permute(array_values($people));

foreach ($permutations as $perm){
    for ($i = 0; $i < count($perm); $i++){
        $happinessChange += $happiness[$perm[$i]][$perm[$i+1]];
    }
    //the table is circular! This tripped me up
    $happinessChange += $happiness[$perm[0]][$perm[count($people)-1]];
    array_push($seating, $happinessChange);
    $happinessChange = 0;
}


echo max($seating);
?>