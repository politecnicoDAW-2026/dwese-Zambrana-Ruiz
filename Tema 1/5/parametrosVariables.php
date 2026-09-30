<?php
function largest(): int
{
    $numbers = func_get_args();
    $biggest = $numbers[0];
    foreach ($numbers as $number) {
        if ($number > $biggest) {
            $biggest = $number;
        }
    }
    return $biggest;
}

function concatenate(...$words): string
{
    $result = "";
    foreach ($words as $word) {
        $result = $result . $word . " ";
    }
    return trim($result);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>parametrosVariables</title>
</head>
<body>
    <h1>Parametros variables</h1>
    <h2>Largest number</h2>
    <p>Numbers: 4, 27, 9, 15, 3</p>
    <p>Largest: <?php echo largest(4, 27, 9, 15, 3); ?></p>
    <h2>Concatenate words</h2>
    <p>Words: Linux, plasma, rs25, apollo11, xiaomi</p>
    <p>Result: <?php echo concatenate("Linux", "plasma", "rs25", "apollo11", "xiaomi"); ?></p>
</body>
</html>