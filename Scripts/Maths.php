<?php

//input from User
$input = $_REQUEST["q"];


//check to make sure each number only has one decimal point
$decimalCheck = preg_split('/[*|+|-|\/]/', $input);
foreach ($decimalCheck as $number) {
    if (substr_count($number, ".") > 1) {
        die("Error: Number can't have more than one decimal point.");
    }
}


//split equation by operators but keep operator at the end of string
$trimLeadingZeroes = preg_split('/(?<=[*|+|-|\/])/', $input, 0, PREG_SPLIT_NO_EMPTY);
foreach ($trimLeadingZeroes as &$trim) {
    //trim all leading '0's
    $trim = ltrim($trim, '0');
    $test = str_split($trim);

    //0 trimmed by 0 is null. If null, return the value of 0.
    if ($trim === NULL) {
        $trim = '0';
    }

    //if the first character of a string is an operator, add the trimmed '0' back into the equation.
    else if (is_numeric($test[0]) !== true) {
        $trim = '0' + $trim;
    }
}


//glue equation back together
$sanitizedInput = implode('', $trimLeadingZeroes);

//split equation by character
$results = str_split($sanitizedInput);



for ($i = 0; $i < count($results); $i++) {
    
    //If the index is [0] and the value is not a number
    if (
            $i === 0 &&
            (is_numeric($results[$i]) !== true) &&
            $results[$i] !== '.') {
        die("Error: Cannot start equation with an operator.");
    } 
    
    //If there is a following element in the array, current element is '/' and following element is '0'
    else if (
            isset($results[$i + 1]) === true &&
            $results[$i] === '/' &&
            $results[$i + 1] === '0') {
        die("Error: Cannot divide by 0.");
    } 
    
    //If the last element in the array is not a number
    else if (
            is_numeric($results[count($results) - 1]) !== true) {
        die("Error: Cannot end equation with an operator.");
    } 
    
    //If there is a following element in the array, current element is not a number, and following element is not a number 
    else if (
            isset($results[$i + 1]) === true &&
            is_numeric($results[$i]) !== true &&
            is_numeric($results[$i + 1]) !== true &&
            $results[$i] !== '.' && $results[$i + 1] !== '.') {
        die("Error: Cannot follow an operator with operator.");
    }
}


//glue equation back together
$equation = implode('', $results);

//make php run string as literal code
$answer = eval('return ' . $equation . ';');
echo $answer;
