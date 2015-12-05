<?php

include('input/day-2.php');

foreach ($input as $dimensions) {
    $l = $dimensions[0];
    $w= $dimensions[1];
    $h = $dimensions[2];
    
    //Grabbing smallest side by sorting and popping off the largest one
    $smallest = $dimensions;
    sort($smallest);
    array_pop($smallest);
    $slack = $smallest[0] * $smallest[1];
    
    $individualPaper = (2 * $l * $w) + (2 * $w * $h) + ( 2 * $h * $l ) + $slack;
    
    $totalPaper += $individualPaper;
    
    //ribboning that shit
    
    $bow = $l * $w * $h;
    $wrap = 2 * ($smallest[0] + $smallest[1]);
    
    $individualRibbon = $bow + $wrap;
    
    $totalRibbon += $individualRibbon;
    
    
}

echo 'Total Paper needed: '.$totalPaper;
echo '<br>Total Ribbon needed: '.$totalRibbon;



