<?php
// By Susilo G // 25 07 2019
// Complete the aVeryBigSum function below.
function aVeryBigSum($ar) {
    $n = count($ar);
    $sum = 0;
    for($i=0;$i<$n;$i++) {
        $sum = $ar[$i]+$sum;
    }
    return $sum;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $ar_count);

fscanf($stdin, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = aVeryBigSum($ar);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
