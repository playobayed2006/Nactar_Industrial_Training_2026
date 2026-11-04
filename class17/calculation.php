<?php

$a = 20;
$b = 10;

echo "Addition: " . ($a + $b) . "<br>";

echo "Subtraction: " . ($a - $b) . "<br>";

echo "Multiplication: " . ($a * $b) . "<br>";

echo "Division: " . ($a / $b) . "<br>";

echo "Modulus: " . ($a % $b) . "<br><hr><hr>";


#triangle area

$trianleArea = (1/2) * $a * $b;
echo "Triangle Area is: " . $trianleArea . "<br>";

#a+b whole square

$square = ($a + $b) ** 2;
echo "Square is: " . $square;


echo "<br><hr><hr>";

$num = 10;

if ($num % 2 == 0) {

    echo "Even Number";

} else {

    echo "Odd Number";

}

echo "<br><hr><hr>";


#input age : child, teenage, young, old 

$age = 500;

if ($age <= 7) {
    echo "You are a Child";
} elseif ($age <= 18) {
    echo "You are a teenager";
} elseif ($age <= 30) {
    echo "You are young";
} elseif ($age >30 && $age <100 ) {
    echo "You are old";
} else{
    echo "You are legend";
}



echo "<br><hr><hr>";
echo "<br><hr><hr>";


$bangla = 80;
$english = 60;
$math = 90;

$average = ($bangla + $english + $math) / 3;

if ($average >= 80 && $average <= 100) {
    echo "Grade: A+";
} elseif ($average >= 70 && $average < 80) {
    echo "Grade: A";
} elseif ($average >= 60 && $average < 70) {
    echo "Grade: A-";
} elseif ($average >= 50 && $average < 60) {
    echo "Grade: B";
} elseif ($average >= 40 && $average < 50) {
    echo "Grade: C";
} elseif ($average >= 33 && $average < 40) {
    echo "Grade: D";
} else {
    echo "Grade: F";
}










?>
