<?php


function printMessage($message)
{
    echo $message;
}

$f = 4;
$count = file_get_contents("count.txt");
$count++;
file_put_contents('count.txt', $count);

echo $count;

printMessage('qqqqq');


$y = 5;

if ($y) {
    echo $y;
}


if (isset($z)) {
    echo $z;
}

$z = 0;

if (isset($z)) {
    echo $z;
}

if (!empty($z)) {
    echo $z;
}
