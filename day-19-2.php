<?php

//$input = 'HCaF';

$input = 'CRnCaSiRnBSiRnFArTiBPTiTiBFArPBCaSiThSiRnTiBPBPMgArCaSiRnTiMgArCaSiThCaSiRnFArRnSiRnFArTiTiBFArCaCaSiRnSiThCaCaSiRnMgArFYSiRnFYCaFArSiThCaSiThPBPTiMgArCaPRnSiAlArPBCaCaSiRnFYSiThCaRnFArArCaCaSiRnPBSiRnFArMgYCaCaCaCaSiThCaCaSiAlArCaCaSiRnPBSiAlArBCaCaCaCaSiThCaPBSiThPBPBCaSiRnFYFArSiThCaSiRnFArBCaCaSiRnFYFArSiThCaPBSiThCaSiRnPMgArRnFArPTiBCaPRnFArCaCaCaCaSiRnCaCaSiRnFYFArFArBCaSiThFArThSiThSiRnTiRnPMgArFArCaSiThCaPBCaSiRnBFArCaCaPRnCaCaPMgArSiRnFYFArCaSiThRnPBPMgAr';


foreach(file('input/day-19.txt', FILE_IGNORE_NEW_LINES) as $line){
    list($in,$out) = explode(' => ', $line);
    $lookup[$out] = $in;
}

$steps = 0; 
$count = 1;
   
//part 2!  
while ($input != 'e'){
    foreach ($lookup as $in => $out){
        //originally tried str replace but substr replace was MUCH quicker
        $index = strpos($input, $in);
        if ($index !== false){
            $input = substr_replace($input, $out, $index, strlen($in));
            $steps++;
        }
    }
}

echo $steps;
