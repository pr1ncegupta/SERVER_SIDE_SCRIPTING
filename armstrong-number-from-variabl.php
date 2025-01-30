//WRITE A PHP PROGRAM TO ACCEPT A NUMBER FROM THE FORM AND CHECK WHETHER IT IS ARMSTRONG.

<?php

echo "Enter the Number to Check: ";

$num = (int) trim(fgets(STDIN));


function isArmstrong($num) {
    $sum = 0;
    $temp = $num;
    $n = strlen((string)$num);

    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $n);
        $temp = (int)($temp / 10);
    }

    return ($sum == $num);
}


if (isArmstrong($num)) {
    echo $num . " is an Armstrong number.\n";
} else {
    echo $num . " is not an Armstrong number.\n";
}
?>
