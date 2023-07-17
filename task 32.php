<?php
$row = 1;
$maxRows = 8;

while ($row <= $maxRows) {
  $column = 1;

  while ($column <= $row) {
    echo "*";
    $column++;
  }

  echo "<br>";
  $row++;
}
?>
