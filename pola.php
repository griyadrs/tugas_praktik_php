<?php
// Declatariton Variable
$wide = 5;
$distance = 0;

// segitiga menurun
for ($col = 1; $col <= $wide; $col++) {
  for ($line = 1; $line <= $col; $line++) {
      echo "* ";
  }
  echo "<br>";
}
echo "<br>";
// Descending Triangle Refleksi
for ($col = $wide; $col >= 1; $col--) {
  for ($line = 1; $line <= $col; $line++) {
      echo "* ";
  }
  echo "<br>";
}
echo "<br>";
// Descending Triangle v2
for ($col = 1; $col <= $wide; $col++) {
  $distance++;
  for ($line = 1; $line <= $col; $line++) {
      if ($distance == 3 and $line == 2) {
          echo "# ";
      } elseif ($distance == 4 and $line == 2) {
          echo "# ";
      } elseif ($distance == 4 and $line == 3) {
          echo "# ";
      } else {
          echo "* ";
      }
  }
  echo "<br>";
}
echo "<br>";
// Rectangle
$distance = 0;
for ($col = 1; $col <= 3; $col++) {
  $distance++;
  for ($line = 1; $line <= $wide; $line++) {
      if ($distance == 2 and $line == 3) {
          echo "# ";
      } else {
          echo "* ";
      }
  }
  echo "<br>";
}
echo "<br>";
// Rectangle v2
for ($col = 1; $col <= 3; $col++) {
  $distance++;
  for ($line = 1; $line <= $wide; $line++) {
      if ($distance == 2 and $line == 3) {
          echo "# ";
      }
      else {
          echo "* ";
      }
  }
  echo "<br>";
}