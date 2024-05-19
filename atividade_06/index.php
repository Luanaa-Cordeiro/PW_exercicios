<?php
$a = 5;
$b = 2;

$c = $a;
$a = $b;
$b = $c;

echo "Os valores são: " . "<br>" . $a ."<br>". $b;
