<?php
echo 'bai 4';

echo '<br>';

$arrProducts = [
    'a', 'b', 'c','d'
];

print_r($arrProducts);

echo '<br>';

echo count($arrProducts);

echo '<br>';

if (is_array($arrProducts)) {
    echo 'array';
} else {
    echo 'not array';
}

// cách 1:
$arrProducts[] = 'e';

print_r($arrProducts);

// cách 2:
array_push($arrProducts, 'f');
echo '<br>';

print_r($arrProducts);

// làm tròn
echo '<br>';
echo round(3.14);

$a = trim(' t3h '); // t3h

$arrProducts = [
    'a', 'b', 'c','d'
];

echo '<br>';
print_r($arrProducts);
echo '<br>';
var_dump($arrProducts);

$strProducts = json_encode($arrProducts);

echo '<br>';
var_dump($strProducts);
echo '<br>';
var_dump(json_decode($strProducts, true));