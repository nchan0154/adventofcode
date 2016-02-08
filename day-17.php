<?php

$input  = [50,44,11,49,42,46,18,32,26,40,21,7,18,43,10,47,36,24,22,40];

//reverse sorting so we can limit the amount of times we loop through!
rsort($input);
$count = array();

//using recursion! needed help on this one, but basically since the list is sorted from largest to smallest, we can use the following logic:
// if the number of the next bottle is equal to the amount remaining, it is a valid combination and we can add it to the count.
// if the amont remaining is greater, then we can run the function again, otherwise, we exit the function.
function fill($input, $remaining, $containerNumber) {
  global $count;
  while(count($input)) {
    $next = array_shift($input);
    if($next == $remaining){
        $count[$containerNumber]++;
    } else if($next < $remaining){
        fill($input, $remaining - $next, $containerNumber + 1);
    }
  }
}

fill($input,150,1);
echo array_sum($count);
var_dump($count);
