<?php

function calc_average(array $numbers): float
{
    $sum = array_sum($numbers);
    $count = count($numbers);

    return round($sum / $count, 1);
}