
<?php
include("style.css");
$username = $_POST["username"];
$password = $_POST["password"];
$boba = $_POST["boba"];
$mammoth = $_POST["mammoth"];
$dino = $_POST["dino"];
$shipping = $_POST["shipping"];

echo "Welcome, $username! Your password is: $password<br><br>Here is your receipt:";
echo "<table border = \"1\" style= border-collapse: collapse>";
echo "<tr>";
echo "<td></td>";
echo "<td>Quantity</td>";
echo "<td>Cost Per Item</td>";
echo "<td>Subtotal</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Boba plush</td>";
echo "<td>$boba</td>";
echo "<td>$5.00</td>";
$subtotal1=$boba*5;
echo "<td>$$subtotal1</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Mammoth plush</td>";
echo "<td>$mammoth</td>";
echo "<td>$2.50</td>";
$subtotal2=$mammoth*2.5;
echo "<td>$$subtotal2</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Dinosaur plush</td>";
echo "<td>$dino</td>";
echo "<td>$7.50</td>";
$subtotal3=$dino*7.5;
echo "<td>$$subtotal3</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Shipping</td>";
echo "<td>$shipping</td>";
echo "<td></td>";
$subtotal4=0;
if($shipping == "$50.00 over night")
{
$subtotal4=50;
}
if ($shipping == "$5.00 three day")
{
$subtotal4=5;
}
if ($shipping == "Free 7 day")
{
$subtotal4=0;
}
echo "<td>$$subtotal4</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Total Cost</td>";
echo "<td></td>";
echo "<td></td>";
$total = $subtotal1 + $subtotal2 + $subtotal3 + $subtotal4;
echo "<td>$$total</td>";
echo "</tr>";
echo "</table>"
?>
