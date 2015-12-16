<?php

foreach(file('input/day-16.txt', FILE_IGNORE_NEW_LINES) as $string){
    $input[] =  $string;
}

foreach($input as $key => $line){
    if (preg_match('/children: [^3]/', $line) ||
        preg_match('/cats: [0-7]/', $line) ||
        preg_match('/samoyeds: [^2]/', $line) ||
        preg_match('/pomeranians: [3-9]/', $line) ||
        preg_match('/akitas: [^0]/', $line) ||
        preg_match('/vizslas: [^0]/', $line) ||
        preg_match('/goldfish: [5-9]/', $line) ||
        preg_match('/trees: [0-3]/', $line) ||
        preg_match('/cars: [^2]/', $line) ||
        preg_match('/perfumes: [^1]/', $line)){
        unset($input[$key]);
    }
}

var_dump($input);