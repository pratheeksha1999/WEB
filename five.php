<?php
// PHP program to print prime numbers
// present in Fibonacci series.

// Function to check perfect square
function isSquare($n)
{
	$sr = (int)sqrt($n);
	return ($sr * $sr == $n);
}

// Prints all numbers less than or equal
// to n that are both Prime and Fibonacci.
function printPrimeAndFib($n)
{
	// Using Sieve to generate all primes
	// less than or equal to n.
	$prime = array_fill(0, $n + 1, true);
	for ($p = 2; $p * $p <= $n; $p++)
	{

		// If prime[p] is not changed,
		// then it is a prime
		if ($prime[$p] == true)
		{

			// Update all multiples of p
			for ($i = $p * 2;
				$i <= $n; $i += $p)
				$prime[$i] = false;
		}
	}

	// Now traverse through the range
	// and print numbers that are both
	// prime and Fibonacci.
	for ($i = 2; $i <= $n; $i++)
	if ($prime[$i] && (isSquare(5 * $i * $i + 4) > 0 ||
					isSquare(5 * $i * $i - 4) > 0))
		echo $i . " ";
}

// Driver Code
$n = 30;
printPrimeAndFib($n);

// This code is contributed by mits
?>

