<?php

$jam=10;

if($jam < "10"){
    echo "Have a good morning!";
} elseif ($jam < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night";
}

echo "\n";
$favcolor = "red";
switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:    
        echo "Your favorite color is neither red, blue, or green!";
} echo"\n";

?>