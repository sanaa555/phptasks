<?php

$name = "sanaaa";
echo ("hello , $name");

echo ("*******************************************");

$x = 10;
$y = 5;

$sum = $x + $y;
$mul = $x * $y;
$sub = $x - $y;

echo "$x + $y = $sum\n";
echo "$x * $y = $mul\n";
echo "$x - $y = $sub\n";



echo ("*******************************************");

$A = 1;
$B = 2;
$C = 3;
$D = 4;


$X = ($A * $B) - ($C * $D);

echo "Difference = $X\n";

echo ("*******************************************");




$x = 13;
$y = 12;


$l_x = $x - floor($x / 10) * 10;
$l_y = $y - floor($y / 10) * 10;


$sum = $l_x + $l_y;


echo $sum . "\n";


echo ("*******************************************");



$X = 3569;


$first_digit = (int) strval($X)[0];

echo ($first_digit % 2 == 0) ? "EVEN" : "ODD";


echo ("*******************************************");




$a = 22;
$b = 10;
$k = 2;

if ($a % $k == 0 && $b % $k == 0) {
    echo "Both";
} elseif ($a % $k == 0) {
    echo "Memo";
} elseif ($b % $k == 0) {
    echo "Momo";
} else {
    echo "No One";
}

echo ("****************************************************");

$N = 39;

$first = (int) ($N / 10);
$second = $N % 10;

echo ($second != 0 && $first % $second == 0) || ($first != 0 && $second % $first == 0) ? "YES" : "NO";
