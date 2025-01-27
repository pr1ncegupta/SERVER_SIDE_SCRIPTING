<!DOCTYPE html>
<html>
<body>

<?php
$x = 5;
$y = 10;

function add($x, $y) {
    return ($x + $y);
}

function sub($x, $y) {
    return ($x - $y);
}

function multiply($x, $y) {
    return ($x * $y);
}

function divide($x, $y) {
    if ($y != 0) {
        return ($x / $y);
    } else {
        return "Division by zero error!";
    }
}

echo "Addition: " . add($x, $y) . "<br>";
echo "Subtraction: " . sub($x, $y) . "<br>";
echo "Multiplication: " . multiply($x, $y) . "<br>";
echo "Division: " . divide($x, $y) . "<br>";

?>

</body>
</html>
