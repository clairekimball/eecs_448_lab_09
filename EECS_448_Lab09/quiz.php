<html>
<body>
<?php
$cpu = $_POST["cpu"];
$elec = $_POST["elec"];
$alu = $_POST["alu"];
$brain = $_POST["brain"];
$joy = $_POST["joy"];
echo "Question 1: What does CPU stand for?<br>You answered: " . $cpu . "<br>Correct answer: Central Processing Unit<br><br>"; 
echo "Question 2: Which electronics component is used in first generation computers?<br>You answered: " . $elec . "<br>Correct answer: Vacuum Tubes<br><br>";
echo "Question 3: What does ALU stand for?<br>You answered: " . $alu . "<br>Correct answer: Arithmetic Logic Unit<br><br>"; 
echo "Question 4: Which part of the computer is considered the brain of the computer?<br>You answered: " . $brain . "<br>Correct answer: CPU<br><br>"; 
echo "Question 5: Joystick is ---?<br>You answered: " . $joy . "<br>Correct answer: An input device<br><br>"; 
$count = 0;
if ($cpu == "Central Processing Unit")
{
$count ++;
}
if ($elec == "Vacuum Tubes")
{
$count ++;
}
if ($alu == "Arithmetic Logic Unit")
{
$count ++;
}
if ($brain == "CPU")
{
$count ++;
}
if ($joy == "An input device")
{
$count ++;
}
echo "Total number correct: $count<br>";
$percent = ($count/5)*100;
echo "Percentage correct: $percent%";
?>
</body>
</html>
