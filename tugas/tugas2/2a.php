<?php

$nd = "Harits Fadhil";
$nb = "Kurnia";

for ($i = 1; $i <= 100; $i++) {
  if ($i % 3 === 0 && $i % 5 === 0) {
    echo "$nd $nb ";
    echo "<br>";
  } elseif ($i % 3 === 0) {
    echo "$nd ";
    echo "<br>";
  } elseif ($i % 5 === 0) {
    echo "$nb ";
    echo "<br>";
  } else {
    echo "$i ";
    echo "<br>";
  }
}