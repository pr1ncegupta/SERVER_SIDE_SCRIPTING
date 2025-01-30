<?php

echo("Enter the text to Rev and Check Palindrome: ");
$text = (string) trim(fgets(STDIN)); 

function isPalindrome($str) {
    return (strcasecmp($str, strrev($str)) == 0);
}

$reversed = strrev($text);

echo "Original String: $text\n";
echo "Reversed String: $reversed\n";

if (isPalindrome($text)) {
    echo "'$text' is a palindrome.";
} else {
    echo "'$text' is not a palindrome.";
}
?>
