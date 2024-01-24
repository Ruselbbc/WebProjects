<?php
$values = [5, 34, 8, 77, 104, 33, 91, 28, 6];

$values = array_filter($values, function($val) {
    return $val % 2 == 0;
});

echo $values;


