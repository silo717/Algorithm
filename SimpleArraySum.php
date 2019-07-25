<?php

/*
 * Complete the simpleArraySum function below.
 * By Susilo G 25 07 2019
 */
function simpleArraySum($ar) {
    /*
     * Write your code here.
     */
     $length = count($ar);
     $sum = 0;

     for($i=0;$i<=$length;$i++) {
         $sum=$sum+$ar[$i];
     }
     return $sum;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $ar_count);

fscanf($stdin, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = simpleArraySum($ar);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
