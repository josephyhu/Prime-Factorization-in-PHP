<?php
$stdin = fopen('php://stdin', 'r');
$n = 0;
$factors = [];

while ($n < 2 || !is_int($n)) {
  echo 'Enter an integer greater than 1 ';
  $n = intval(trim(fgets($stdin)));
}

function isPrime($n) {
  for ($i = 2; $i < $n; $i++) {
    if ($n % $i === 0) {
      return false;
    }
  }
  return $n;
}

for ($i = 2; $i <= $n; $i++) {
  if (isPrime($i) !== false) {
    if ($n % $i === 0) {
      array_push($factors, $i);
    }
  }
}

echo "n: " . $n . " prime factors: " . implode(', ', $factors) . "\n";