<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/tema%202/formularios%201/backend2.php" method="post">
    <label for="soda">Bebida:</label>
    <select name="soda" id="soda">
        <option value="" selected>Elija una bebida</option>
        <option value="cocaCola">Coca-Cola</option>
        <option value="pepsi">Pepsi Cola</option>
        <option value="fantaNaranja">Fanta naranja</option>
        <option value="trinaManzana">Trina manzana</option>
    </select><br>
    <label for="amount">Cantidad:</label>
    <input type="text" name="amount" id="amount"/><br>
    <input type="submit" value="send">

</form>
</body>
</html>