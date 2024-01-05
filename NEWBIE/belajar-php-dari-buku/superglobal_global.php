<?php
$x = 100;
$y = 20 - 20;

function operasi(){
    $GLOBALS['Total'] = $GLOBALS['x'] - $GLOBALS['y'];
}
operasi();
echo $Total . PHP_EOL;

?>