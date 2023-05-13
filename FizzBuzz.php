<?php

function fizzbuzz($n) {
  if ($n % 3 == 0 && $n % 5 == 0) {
    return "FizzBuzz";
  } elseif ($n % 3 == 0) {
    return "Fizz";
  } elseif ($n % 5 == 0) {
    return "Buzz";
  } else {
    return $n;
  }
}

for ($i = 1; $i <= 100; $i++) {
  echo fizzbuzz($i) . "\n";
}