<?php
declare(strict_types=1);

function fizzBuzz(int $i): string {
  if ($i % 15 === 0) {
    return "FizzBuzz";
  } elseif ($i % 3 === 0) {
    return "Fizz";
  } elseif ($i % 5 === 0) {
    return "Buzz";
  } else {
    return (string)$i;
  }
}

for ($i = 1; $i < 101; $i++) {
  echo fizzBuzz($i), PHP_EOL;
}
?>
