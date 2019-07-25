<?php

/* By Susilo G 25 7 2019
 * Complete the 'diagonalDifference' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

function diagonalDifference($arr) {
    $length = count($arr);
    $leftsum = 0;
    $rightsum = 0;

    $row = $length-1;

    for($col=0;$col<$length;$col++) {
        $leftsum += $arr[$col][$col];
        $rightsum += $arr[$col][$row--];
    }
    $diff = $leftsum - $rightsum;
    return abs($diff);

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr = array();

for ($i = 0; $i < $n; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);
