<?php 


$i = 0;
$key = 'ckczppom';

while( substr($hash,0,6) !== '000000' )
{
    $hash = md5($key.$i);
    $i++;
}

echo $i - 1;
echo '<br>'.md5($key. ($i - 1) );
?>