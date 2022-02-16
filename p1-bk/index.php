<?php

###Variables###
//Accept strings from our HTML form.
$inputString = $_REQUEST['string'];
$alphaString = preg_replace("/[^A-Za-z]/", '', $inputString);
$stringLength = strlen($alphaString);
$alphaStringReversed = strrev($alphaString);

###Functions###
function palindromeAnalysis($stringToAnalyze){
    //Clean String Input of any non alphabetic characters
    $alphaString = preg_replace("/[^A-Za-z]/", '', $stringToAnalyze);

    //Reverse the string for comparison
    $reversedAlphaString = strrev($alphaString);

    //Analyze string for palindrome
    $stringCompare = strcasecmp($alphaString, $reversedAlphaString);

    //If Comparison evaluates to zero then we have a palindrome
    if($stringCompare == 0){
        return 'Yes';
    }
    else{
        return 'No';
    }
}

function vowelCount($stringToAnalyze){
    //Clean String Input of any character other than vowels
    $vowelString = preg_replace("/[^AEIOUaeiou]/", '', $stringToAnalyze);

    //Count string length of remaining chracters which are vowels
    $vowelCount = strlen($vowelString);

    return $vowelCount;
}

require 'index-view.php';