<?php

function fibonacci($n) {
    if ($n <= 0) return 0;
    if ($n == 1) return 1;

    $a = 0;
    $b = 1;

    for ($i = 2; $i <= $n; $i++) {
        $c = $a + $b;
        $a = $b;
        $b = $c;
    }

    return $b;
}

$n = 10;
echo "Fibonacci dari $n adalah " . fibonacci($n);

// 1 1 2 3 5 8 13 21 34 55