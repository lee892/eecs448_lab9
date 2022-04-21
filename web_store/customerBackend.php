<?php
echo "<link rel='stylesheet' href='styles.css'>";
$user = $_POST["username"];
$password = $_POST['password'];
$test = 'test';
echo "<p>Hello " . $user . ", your password is " . $password . "</p><br>";
$car = $_POST['car'];
$house = $_POST['house'];
$plane = $_POST['airplane'];

$carPrice = $car * 20000;
$housePrice = $house * 400000;
$planePrice = $plane * 50000;

$shipping = $_POST['ship'];
if ($shipping == 'free') {
    $shipPrice = 0;
} else if ($shipping == 'oneday') {
    $shipPrice = 50;
} else {
    $shipPrice = 5;
}

$total = $carPrice + $housePrice + $planePrice + $shipPrice;
echo "<p>Receipt:</p><br>";
echo "<table class=''>";
echo "<tr><th> </th><th>Quantity</th><th>Cost Per Item</th><th>Sub Total</th></tr>";
echo "<tr><th>Car</th><td>" . $car . "</td><td>$20000</td><td>$" . $carPrice . "</td></tr>";
echo "<tr><th>House</th><td>" . $house . "</td><td>$400000</td><td>$" . $housePrice . "</td></tr>";
echo "<tr><th>Airplane</th><td>" . $plane . "</td><td>$50000</td><td>$" . $planePrice . "</td></tr>";
echo "<tr><th>Shipping</th><td>" . $shipping . "</td><td>$" . $shipPrice . "</td></tr>";
echo "<tr><th>Total Cost</th><td>$" . $total . "</td></tr>";
echo "</table>"
?>