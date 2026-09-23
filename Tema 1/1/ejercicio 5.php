<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ejercicio 5</title>
</head>
<body>
<table style="border: black 0.1rem solid;">
    <tr style="background-color: #e6ffe6">
        <th>Lunes</th>
        <th>Martes</th>
        <th>Miércoles</th>
        <th>Jueves</th>
        <th>Viernes</th>
    </tr>
    <tr>
        <td>IPE</td>
        <?php echo "<td>Desarrollo aplicaciones web</td>"?>
        <td>Desarrollo web entorno servidor</td>
        <?php echo "<td>Diseño de interfaces Web</td>"?>
        <td>Inglés</td>
    </tr>
    <?php
        echo "
            <td>IPE</td>
            <td>Desarrollo aplicaciones web</td>
            <td>Desarrollo web entorno servidor</td>
            <td>Diseño de interfaces Web</td>
            <td>Desarrollo web entorno servidor</td>
            "
    ?>
    <tr>
        <td>Desarrollo web entorno servidor</td>
        <?php echo "<td>Proyecto integrado</td>"?>
        <td>IPE</td>
        <?php echo "<td>Diseño de interfaces Web</td>"?>
        <td>Desarrollo web entorno servidor</td>
    </tr>
    <tr style="background-color: #e6f2ff">
    <?php
    echo "
            <td>Recreo</td>
            <td>Recreo</td>
            <td>Recreo</td>
            <td>Recreo</td>
            <td>Recreo</td>
            "
    ?>
    </tr>
    <tr>
        <td>Desarrollo web entorno servidor</td>
        <?php echo "<td>Proyecto integrado</td>"?>
        <td>Desarrollo web entorno cliente</td>
        <?php echo "<td>Optativa</td>"?>
        <td>Desarrollo web entorno cliente</td>
    </tr>
    </tr>
    <?php
    echo "
            <td>Desarrollo web entorno servidor</td>
            <td>Diseño de interfaces Web</td>
            <td>Desarrollo web entorno cliente</td>
            <td>Optativa</td>
            <td>Desarrollo web entorno cliente</td>
            "
    ?>
    <tr>
    </tr>
    <?php
    echo "
            <td>Inglés</td>
            <td>Diseño de interfaces Web</td>
            <td>Desarrollo web entorno cliente</td>
            <td>Optativa</td>
            <td>Desarrollo web entorno cliente</td>
            "
    ?>
    <tr>
</table>
</body>
</html>
