<html>
<body>
<?php 
echo "<table border = \"1\" style= border-collapse: collapse>";
for ($i = 0; $i<=100; $i++)
{
echo "<tr>";
for ($j= 0; $j<=100; $j++)
{
if ($i==0 && $j==0)
{
echo "<td> </td>";
}
else if ($i!=0 && $j !=0)
{
$product = $i*$j;
echo "<td>$product</td>";
}
else
{
$sum = $i + $j;
echo "<td>$sum</td>";
}
}
echo "<tr>";
}

echo "</table>";
?>
</body>
</html>
