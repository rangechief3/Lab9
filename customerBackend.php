<?php

$cssStuff = '<link href="style.css"
rel="stylesheet">';

echo $cssStuff;

error_reporting(E_ALL);
ini_set("display_errors", 1);

function product($x, $y){
$z = $x*$y;
return $z;
}

$user = $_POST['username'];
$pass = $_POST['password'];
$item1 = $_POST['item1'];
$item2= $_POST['item2'];
$item3= $_POST['item3'];
$ship = $_POST['ship'];

if($ship === '7day'){
$shipType = '7 day shipping';
$shipCost = 0;
}
else if($ship === 'overnight'){
$shipType = 'Express shipping';
$shipCost = 50;
}
else{
$shipType = '3 day shipping';
$shipCost = 5;
}

$total = 0;

$sub1 = product(5, $item1);
$total = $total + $sub1;

$sub2 = product(10000, $item2);
$total = $total + $sub2;

$sub3 = product(10, $item3);
$total = $total + $sub3;

$total = $total + $shipCost;

echo "<h1>Hello! Thank you for shopping at ILoveLamps!</h1>";
echo "Username: " .$user. "<br>";
echo "Password: " .$pass. "<br><br>";

echo "Recipt";

echo ('<table>');
echo ('<tr><td></td>');
echo('<th scope="col">Quantity</th><th scope="col">Cost per Item</th><th scope="col">Subtotal</th>');
echo('</tr>');

echo('<tr>');
echo('<th scope="row">Pixar Lamp</th><td>' .$item1. '</td><td>5</td><td>' .$sub1. '</td>');
echo('</tr>');

echo('<tr>');
echo('<th scope="row">Duck Lamp</th><td>' .$item2. '</td><td>10,000</td><td>' .$sub2. '</td>');
echo('</tr>');

echo('<tr>');
echo('<th scope="row">Cool Lamp</th><td>' .$item3. '</td><td>10</td><td>' .$sub3. '</td>');
echo('</tr>');

echo('<tr>');
echo('<th scope="row">Shipping</th><td colspan="2">' .$shipType. '</td><td>' .$shipCost. '</td>');
echo('</tr>');

echo('<tr>');
echo('<th scope="row">Total Cost</th><td colspan="2"></td><td>' .$total. '</td>');
echo('</tr>');

echo ('</table>');

?>
