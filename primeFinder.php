<?php

function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}


function findPrimes($limit) {
    $primes = array();
    for ($i = 2; $i <= $limit; $i++) {
        if (isPrime($i)) {
            $primes[] = $i;
        }
    }
    return $primes;
}


$limit = 100; 
$primes = findPrimes($limit);
echo "Prime numbers up to $limit are: " . implode(", ", $primes);
?>
