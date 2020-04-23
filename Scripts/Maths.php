<?php

$results = $_REQUEST["q"];
$divide = strpos($results, '/0');
if ($divide === false) {
    $answer = eval('return '.$results.';');
    echo $answer;
} else {
    echo "Cannot divide by 0";
}
