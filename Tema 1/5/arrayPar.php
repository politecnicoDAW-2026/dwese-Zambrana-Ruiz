<?php
function isEven(int $num): bool
{
    if ($num % 2 == 0) {
        return true;
    }
    return false;
}

function randomArray(int $size, int $min, int $max): array
{
    $result = [];
    for ($i = 0; $i < $size; $i++) {
        $result[] = rand($min, $max);
    }
    return $result;
}

function countEven(array &$array): int
{
    $count = 0;
    foreach ($array as $number) {
        if (isEven($number)) {
            $count++;
        }
    }
    return $count;
}

$numbers = randomArray(10, 1, 100);
$evenCount = countEven($numbers);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array par</title>
</head>
<body>
    <h2>Random array</h2>
    <ul>
        <?php foreach ($numbers as $number) { ?>
            <li> <?= $number; ?> - <?php if (isEven($number)) { echo "even"; } else { echo "odd"; } ?></li>
        <?php } ?>
    </ul>
    <p>Even numbers found: <?= $evenCount; ?></p>
</body>
</html>