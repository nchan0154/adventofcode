<?php

$input = 'CRnCaSiRnBSiRnFArTiBPTiTiBFArPBCaSiThSiRnTiBPBPMgArCaSiRnTiMgArCaSiThCaSiRnFArRnSiRnFArTiTiBFArCaCaSiRnSiThCaCaSiRnMgArFYSiRnFYCaFArSiThCaSiThPBPTiMgArCaPRnSiAlArPBCaCaSiRnFYSiThCaRnFArArCaCaSiRnPBSiRnFArMgYCaCaCaCaSiThCaCaSiAlArCaCaSiRnPBSiAlArBCaCaCaCaSiThCaPBSiThPBPBCaSiRnFYFArSiThCaSiRnFArBCaCaSiRnFYFArSiThCaPBSiThCaSiRnPMgArRnFArPTiBCaPRnFArCaCaCaCaSiRnCaCaSiRnFYFArFArBCaSiThFArThSiThSiRnTiRnPMgArFArCaSiThCaPBCaSiRnBFArCaCaPRnCaCaPMgArSiRnFYFArCaSiThRnPBPMgAr';

$lookup = $strings = [];

foreach(file('input/day-19.txt', FILE_IGNORE_NEW_LINES) as $line){
    list($in, $out) = explode(' => ', $line);
    $lookup[$in][] = $out;
}


//Part 1: looping through the lookup
foreach ($lookup as $in => $outputs){
    foreach($outputs as $out){
        $index = 0;
        //checking to make sure the substring is a molecule
        while(strpos($input, $in, $index) !== false) {
            //getting new position in a string and replacing it!
            $index = strpos($input, $in, $index);
            $new = substr_replace($input, $out, $index, strlen($in));
            $index += strlen($in);
            if (!in_array($new, $strings)){
                $strings[] = $new;
            }
        }
    }
}

var_dump($strings);
   
  
