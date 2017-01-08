<?php

require_once __DIR__ . '/base.php';

// Old way to do list

list($drink, $color, $power) = ['coffee', 'brown', 'caffeine'];

echo "<h3>Old way </h3>";
echo "$drink is $color and $power makes it special.<br>";

// Same thing using the new syntax
[$drink, $color, $power] = ['coffee', 'brown', 'caffeine'];

echo "<h3>New way </h3>";
echo "$drink is $color and $power makes it special.<br>";

echo "<pre>";
[$firstCar, $secondCar] = $repo->search('car');
var_dump($firstCar);

// Old Way to skip to a place in the array
list(,,,$thirdThing) = $repo->search(null);
echo "<h3>Old way </h3>";
var_dump($thirdThing);

// New Way to skip to a place in the array
[3 => $thirdThing] = $repo->search(null);
echo "<h3>New way </h3>";
var_dump($thirdThing);

// Supports the ability to specify keys
["drink" => $drink, "color" => $color, "power" => $power] = $data[0];
$data = [
    ['id' => 1, 'name' => 'Tom'],
    ['id' => 2, 'name' => 'Fred'],
];

foreach ($data as ['id' => $id, 'name' => $name]) {
    echo $id . ' '. $name.'<br>';
}



