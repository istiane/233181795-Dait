<?php
// Fibonacci sequence loop (even numbers only)
$num1 = 0; $num2 = 1; $count = 0;
while ($count++ < 10) {
    $fib = $num1 + $num2;
    $num1 = $num2;
    $num2 = $fib;
    if ($fib % 2 == 0) echo $fib . "\n";
}

echo "\nFizzBuzz loop from 1 to 100:\n";
// FizzBuzz loop from 1 to 100
for ($i = 1; $i <= 100; $i++) {
    echo ($i % 3 == 0 && $i % 5 == 0) ? "FizzBuzz\n" : 
         ($i % 3 == 0 ? "Fizz\n" : 
         ($i % 5 == 0 ? "Buzz\n" : $i . "\n"));
}
?>
<?php
// Fibonacci sequence loop (even numbers only)
$num1 = 0; $num2 = 1; $count = 0;
while ($count++ < 10) {
    $fib = $num1 + $num2;
    $num1 = $num2;
    $num2 = $fib;
    if ($fib % 2 == 0) echo $fib . "\n";
}

echo "\nFizzBuzz loop from 1 to 100:\n";
// FizzBuzz loop from 1 to 100
for ($i = 1; $i <= 100; $i++) {
    echo ($i % 3 == 0 && $i % 5 == 0) ? "FizzBuzz\n" : 
         ($i % 3 == 0 ? "Fizz\n" : 
         ($i % 5 == 0 ? "Buzz\n" : $i . "\n"));
}
?>
