<?php
require_once "euros.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Euros</title>
</head>
<body>
    <h1>Calculadora de Euros</h1>
    <h2>Euro / peseta -> (1/166.36)</h2>
    <ul>
        <li>1000 pesetas = <?php echo pesetasToEuros(1000); ?> euros</li>
        <li>50 euros = <?php echo eurosToPesetas(50); ?> pesetas</li>
    </ul>
    <h2>Euros a pesos argentinos (1888.38)</h2>
    <ul>
        <li>1000 pesos = <?php echo pesetasToEuros(1000, 1888.33); ?> euros</li>
        <li>50 euros = <?php echo eurosToPesetas(50, 1888.38); ?> pesos</li>
    </ul>
</body>
</html>