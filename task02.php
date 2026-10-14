<?php
function dog_bark(int $woof_nb): void
{
    if ($woof_nb <= 0) {
        echo "\n";
        return;
    }
    echo implode(" ", array_fill(0, $woof_nb, "woof")) . "\n";
}
?>