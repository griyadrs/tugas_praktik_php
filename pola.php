<?php
$wide = 5;
$hole = 0;
// segitiga colenurun
for ($col = 1; $col <= $wide; $col++) {
  for ($line = 1; $line <= $col; $line++) {
      echo "* ";
  }
  echo "<br>";
}
echo "<br>";
// segitiga colenurun refleksi
for ($col = $wide; $col >= 1; $col--) {
  for ($line = 1; $line <= $col; $line++) {
      echo "* ";
  }
  echo "<br>";
}
echo "<br>";
// segitiga colenurun v2
for ($col = 1; $col <= $wide; $col++) {
  $hole++;
  for ($line = 1; $line <= $col; $line++) {
      if ($hole == 3 and $line == 2) {
          echo "# ";
      } else if ($hole == 4 and $line == 2) {
          echo "# ";
      } else if ($hole == 4 and $line == 3) {
          echo "# ";
      } else {
          echo "* ";
      }
  }
  echo "<br>";
}
echo "<br>";
// persegi panjang
$hole = 0;
for ($col = 1; $col <= 3; $col++) {
  $hole++;
  for ($line = 1; $line <= $wide; $line++) {
      if ($hole == 2 and $line == 3) {
          echo "# ";
      } else {
          echo "* ";
      }
  }
  echo "<br>";
}
echo "<br>";
// persegi panlineang v2
for ($col = 1; $col <= 3; $col++) {
  $hole++;
  for ($line = 1; $line <= $wide; $line++) {
      if ($hole == 2 and $line == 3) {
          echo "# ";
      }
      else {
          echo "* ";
      }
  }
  echo "<br>";
}