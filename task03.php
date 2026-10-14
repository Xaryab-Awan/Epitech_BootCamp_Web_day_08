<?php

function get_shortest(array $strings): string
{
    $str = $strings[0];
    foreach ($strings as $string) {
        if (strlen($string) < strlen($str)) {
            $str=$string;
        }
    }
    return $str;
}
?>