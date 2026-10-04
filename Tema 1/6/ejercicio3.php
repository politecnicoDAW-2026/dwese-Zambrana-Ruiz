<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table>
    <tr>
        <th>Cantidad</th>
        <th>Precio unitario</th>
    </tr>
    <tr>
        <td>Menos de 10 euros:</td>
        <td>2 euros</td>
    </tr>
    <tr>
        <td>Entre 10 y 30</td>
        <td>1.5 euros</td>
    </tr>
    <tr>
        <td>Más de 30</td>
        <td>1 euro</td>
    </tr>
</table>
<br>
<form action="/tema%202/formularios%201/backend3.php" method="post">
    <label for="amount">Cantidad de cuadernos a comprar:</label>
    <input type="text" name="amount" id="amount"/><br>
    <input type="submit" value="send">
</form>
</body>
</html>