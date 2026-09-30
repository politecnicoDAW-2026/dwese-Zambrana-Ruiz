<?php
function pesetasToEuros($amount, $rate = 166.36)
{
    return $amount / $rate;
}

function eurosToPesetas($amount, $rate = 166.36)
{
    return $amount * $rate;
}