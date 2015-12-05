<?php

include('input/day-3.php');

$town = [];

class Santa {
    public $x = 0;
    public $y = 0;
    

    function visitHouse($i){
    global $input;
    global $town;
    $house = [$this->x,$this->y];
    
    switch (substr($input, $i, 1)){
        case '<':
            $this->x -= 1;
            break;
        case '>':
            $this->x += 1;
            break;
        case '^':
            $this->y += 1;
            break;
        case 'v':
            $this->y -= 1;
            break;
        }
        
        if (!in_array($house, $town)){
            $town[] = $house; 
        }
    
    }
}
    

$santa = new Santa;
$roboSanta = new Santa;

for ($i = 0; $i <= strlen($input); $i++) {
    
    if ($i % 2 === 0){
        $santa->visitHouse($i);
    } else {
        $roboSanta->visitHouse($i);
    }
    
}

echo count($town);


?>