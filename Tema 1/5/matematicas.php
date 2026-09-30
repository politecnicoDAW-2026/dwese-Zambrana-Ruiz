<?php
function digitos(int $num): int
{
    $num = abs($num);
    return strlen((string)$num);
}

function digitoN(int $num, int $pos): int
{
    $text = (string)abs($num);
    return (int)$text[$pos - 1];
}

function quitaPorDetras(int $num, int $amount): int
{
    $divisor = 10 ** $amount;
    return intdiv($num, $divisor);
}

function quitaPorDelante(int $num, int $amount): int
{
    $total = digitos($num);
    if ($amount >= $total) {
        return 0;
    }
    $divisor = 10 ** ($total - $amount);
    return $num % $divisor;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>matematicas</title>
</head>
<body>
    <h1>matematicas</h1>
    <h2>argumentos positionales</h2>
    <ul>
        <li>digitos(123456): <?php echo digitos(123456); ?></li>
        <li>digitoN(123456, 3): <?php echo digitoN(123456, 3); ?></li>
        <li>quitaPorDetras(123456, 2): <?php echo quitaPorDetras(123456, 2); ?></li>
        <li>quitaPorDelante(123456, 2): <?php echo quitaPorDelante(123456, 2); ?></li>
    </ul>
    <h2>argumentos con nombre</h2>
    <ul>
        <li>digitos(num: 987654): <?php echo digitos(num: 987654); ?></li>
        <li>digitoN(pos: 2, num: 987654): <?php echo digitoN(pos: 2, num: 987654); ?></li>
        <li>quitaPorDetras(amount: 3, num: 987654): <?php echo quitaPorDetras(amount: 3, num: 987654); ?></li>
        <li>quitaPorDelante(amount: 3, num: 987654): <?php echo quitaPorDelante(amount: 3, num: 987654); ?></li>
    </ul>
</body>
</html>