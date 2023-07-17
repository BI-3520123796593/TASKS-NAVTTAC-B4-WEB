<?php
function sortArray($array) {
  sort($array);
  return $array;
}

$numbers = array(5, 2, 8, 1, 3);
$sortedNumbers = sortArray($numbers);

echo "Original array: ";
print_r($numbers);

echo "Sorted array: ";
print_r($sortedNumbers);
?>
