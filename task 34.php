<?php
$months = array("January", "February", "March", "April", "May", "June");
$valueToDelete = "March";

echo "Original array: ";
print_r($months);

foreach ($months as $key => $month) {
  if ($month === $valueToDelete) {
    unset($months[$key]);
  }
}

echo "Updated array: ";
print_r($months);
?>
