<?php


$array = array();
array_push($array, 'String');
print_r($array);

$newArray = ['StringVal', 1.2343, 200];
$newArray[] = "Index 3 value";
echo "String Value $newArray[0]" . PHP_EOL;
print_r($newArray);

$keyValueArray = [
    'index0' => 'We can just make key value pairs',
    'index1' => 'Its pretty simple'
];
$keyValueArray['index2'] = 'If you forget one';
print_r($keyValueArray);


$object = new stdClass();
$object->dynamicProperty = "Dynamic Value";
$object->anotherDynamicProperty = 'another value';
$object->dynamicProperty = 2.0;
print_r($object);


