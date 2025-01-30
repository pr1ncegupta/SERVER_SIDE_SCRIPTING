<?php
$text = "madam"; // Change this value to test with different strings

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
