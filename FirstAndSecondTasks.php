<?php
//First task
/**
 * @param int $number
 * @return string
 */
function hashOrder(int $number):string
{
    $numberAsString = strval($number);
    $paddedNumberAsString = str_pad($numberAsString, 7, '0', STR_PAD_LEFT);
    $reversedPaddedNumberAsString = strrev($paddedNumberAsString);

    $result = '';
    for ($i = 0; $i < 7; $i++) {
        $digit = intval($reversedPaddedNumberAsString[$i]);
        $resultDigit = 9 - $digit;
        $result .= $resultDigit;
    }

    return $result;
}

//Second Task
/**
 * @param string $s
 * @return int
 */
function findUniqueString(string $s): int {

    $splittedString = str_split(strtolower($s));
    $countValues = array_count_values($splittedString);

    foreach($splittedString as $key => $value) {
        if($countValues[$value] == 1) {
            return $key + 1;
        }
    }
    return -1;
}

