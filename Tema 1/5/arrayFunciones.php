<?php
require_once "biblioteca.php";

$functionNames = ["add", "subtract", "multiply", "divide"];

$a = 0;
$b = 0;

if (isset($_GET["a"]) && isset($_GET["b"])) {
    $a = $_GET["a"];
    $b = $_GET["b"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ArrayFunciones</title>
</head>
<body>
    <h1>ArrayFunciones</h1>
    <p>8000/?a=10&b=5</p>
    <?php if ($a) { ?>
        <h2>Results for <?php echo $a; ?> and <?php echo $b; ?></h2>
        <ul>
            <?php foreach ($functionNames as $name) { ?>
                <li><?php echo $name; ?>: <?php echo $name($a, $b); ?></li>
            <?php } ?>
        </ul>
    <?php } else { ?>
        <p>No numbers received.</p>
    <?php } ?>
</body>
</html>