<?php
include_once "Stack.php";

$array = [0, 1, 2 ,3, 4, 5, 6, 7, 8, 9];

$stack = new \reverse_array_by_stack\Stack();

while (!empty($array)) {
    $stack->push(array_shift($array));
}

while (!$stack->isEmpty()) {
    array_push($array, $stack->pop());
}

foreach ($array as $item) {
    echo $item . " ";
}