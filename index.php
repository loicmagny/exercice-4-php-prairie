<?php
$x = 1;
$result1 = 0;
$result2 = 0;
while ($x <= 100):
    $result1 = $x % 3;
    $result2 = $x % 5;
    if ($result1 && $result2 == 0) {
      echo "FizzBuzz";
    }
    elseif ($result1 == 0) {
      echo "Fizz";
    }
    elseif ($result2 == 0) {
      echo "Buzz";
    }
    else {
      echo $x . ' ';
    }
    $x++;
  endwhile;
?>
