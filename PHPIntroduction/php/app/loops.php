<?php

$keylessArray = ['One', 2, 3.00, 4.01];
$keyValArray = [
    'key1' => 'val1',
    'key2' => 'val2',
    'key3' => 'val3',
    'key4' => 'val4',
];
$object = (object) $keyValArray;

echo PHP_EOL . 'For over keyless array' . PHP_EOL;
for ($i = 0; $i < count($keylessArray); $i++) {
    echo "The value of the keylessArray at index $i is $keylessArray[$i]." . PHP_EOL;
}

echo PHP_EOL . 'Foreach over Key Val Array' . PHP_EOL;
foreach ($keyValArray as $keyVar => $valVar) {
    echo "The value of the keylessArray at index $keyVar is $valVar." . PHP_EOL;
}

echo PHP_EOL . 'Foreach over object' . PHP_EOL;
foreach ($object as $objectKeyVar => $objectValVar) {
    echo "The value of the $objectKeyVar of the object is $objectValVar." . PHP_EOL;
}