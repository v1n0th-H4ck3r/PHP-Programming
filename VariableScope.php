<?php
$x = 15;
$y = 10;

function myTest() {
    // Method 1
  global $x, $y;
  $y = $x + $y;
    // Method 2
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest();
echo $y;
?>