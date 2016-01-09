<?php

//                                                                                 //
//      “A palindrome is a word, phrase, number, or other sequence of characters   //
//                                    which reads the same backward or forward.”   //
//                                                                   - Wikipedia   //
//                                                                                 //

//
// Thinking recursively, we can say that:
//
// 1. A string of zero or one character is a palindrome.
// 2. Any other string is a palindrome if:
//    a. the first and last characters are the same,
//    b. excluding the first and last character, the string that
//       remains is a palindrome.
//

/**
 * Checks if a string is a palindrome.
 *
 * @param {string} $text - The text to test.
 * @return {boolean} true if $text is a palindrome, false otherwise.
 */
function isPalindrome($text) {

    // Let's cache the string length since we are using it more than once.
    $len = mb_strlen($text);

    // Matches rule 1.
    if ($len <= 1) {
        return true;
    }

    // Matches rule 2a.
    if (mb_substr($text, 0, 1) !== mb_substr($text, $len - 1, 1)) {
        return false;
    }

    // Matches rule 2b. Recursive invokes itself to verify rules 1 and 2a.
    return isPalindrome(mb_substr(1, $len - 2));
}

var_dump(isPalindrome(''));
// →  true

var_dump(isPalindrome('k'));
// →  true

var_dump(isPalindrome('foo'));
// →  false

var_dump(isPalindrome('racecar'));
// →  true

var_dump(isPalindrome('959'));
// →  true

var_dump(isPalindrome('Ana')); // What about upper/lower case?
// →  false


//
// About the last test, 'Ana', perhaps it is okay to leave client code to
// lowercase the string before invoking isPalindrome instead doing that
// inside the function itself.
//

$ana = mb_strtolower('Ana');
var_dump(isPalindrome($ana));
// →  true

//
// Also, what about things like 'a nut for a jar of tuna'? Should we just
// expect client code to remove spaces before testing for the “palindromeness”
// of the text?
//

