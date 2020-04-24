<?php

$results = str_split($_REQUEST["q"]);
foreach ($results as $result) {
    $result = "'" . $result . "'";
}
for ($i=0; $i < count($results); $i++) {
    if (
            $i === 0 && 
            (is_numeric($results[$i]) !== true) &&
            $results[$i] !== '.') {
        die("Error: Cannot start equation with an operator.");
    } else if (
            isset($results[$i+1]) === true && 
            $results[$i] === '/' && 
            $results[$i+1] === '0') {
        die("Error: Cannot divide by 0.");
    } else if (
            is_numeric($results[count($results)-1]) !== true) {
        die("Error: Cannot end equation with an operator.");
    } else if (
            isset($results[$i+1]) === true &&
            is_numeric($results[$i]) !== true && 
            is_numeric($results[$i+1]) !== true &&
            $results[$i] !== "." && $results[$i+1] !== "."){
        die("Error: Cannot follow an operator with operator.");
    }  
}
    
$equation = implode('', $results);
$answer = eval ('return '.$equation.';');
echo $answer;

//$divide =[strpos($results, '/0'),strpos($results, '//'),strpos($results, '**'),strpos($results, '++'),strpos($results, '--'),
//    strpos($results, '*-'),strpos($results, '--'),strpos($results, '--'),strpos($results, '--'),strpos($results, '--'),
//    substr( $results, 0, 1 ) === "*",substr( $results, 0, 1 ) === "/",substr( $results, 0, 1 ) === "+",substr( $results, 0, 1 ) === "-"];
//
//if (in_array(true, $divide) === false)  {
//    $answer = eval('return '.$results.';');
//    echo $answer;
//} else {
//    echo "Error.";
//}
