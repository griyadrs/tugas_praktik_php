<?php

// Calculate Area of ​​a Circle
function circleArea(int $diameter = 1) {
    $diameter *= $diameter * 3.14 / 4;
    return $diameter = round($diameter, 2);
}

// Input
$diameter = 20;

// Output
echo "<h3> Calculate Area of ​​a circle </h3>";

$total = circleArea($diameter); // Diameter = 10
echo "{$total}";

$total = circleArea(); // Diameter = default
echo "<br> {$total}";

// Temperature Conversion
function tempConversion(float $fahrenheit = 1) {
    $fahrenheit *= 1.8;
    return $fahrenheit += 32;
}

// Input
$celcius = 10;

// Output
echo "<h3> Temperature Conversion </h3>";

$total = tempConversion($celcius); // Celcius = 10
echo "{$celcius} Celcius = {$total} Fahrenhait <br>";

$total = tempConversion(); // Celcius = default
echo "1 Celcius = {$total} Fahrenhait <br>";

// Determining Odd or Even Numbers
function numCheck(int $number = 1) {
    if ($number % 2 == 0) { // Even Number
        return "{$number} is an even number";
    } else if ($number % 2 == 1) { // Odd Number
        return "{$number} is an odd number";
    }
}

// Input
$num = 18;

// Output
echo "<h3> Determining Odd or Even Numbers </h3>";

$total = numCheck($num); // Number = 18; 
echo "{$total} <br>";

$total = numCheck(); // Number = default;
echo "{$total} <br>";

// Calculating Purchase Discounts
function discount($price = 10000, $discount = 5) {
    $discount = $price / $discount;
    $price -= $discount;
    return "Total Discount Rp.{$discount} 
    <br> Total Prices Rp.{$price}";
}

// Input
$prices = 30000;
$d = 10;

// Output
echo "<h3> Calculating Purchase Discounts </h3> ";

$total = discount($prices, $d);
echo "{$total}";
