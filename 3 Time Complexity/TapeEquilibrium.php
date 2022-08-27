<?php
//Answered by: https://www.alessiocantarella.it/codility/tape-equilibrium/
function solution($A) {
  $n = count($A);
  $s = 0;
  foreach ($A as $a) {
    $s += $a;
  }
  $r = 100000;
  $s1 = 0;
  for ($p = 1; $p < $n; $p++) {
    $s1 += $A[$p - 1];
    $s2 = $s - $s1;
    $t = abs($s1 - $s2);
    if ($t < $r) {
      $r = $t;
    }
  }
  return $r;
}

