<?php
    session_start();
echo var_dump($_POST);
echo var_dump($_SESSION);
$isFormFieldValidated = true;
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        echo var_dump($_POST);
        echo var_dump($_SESSION);

        $_SESSION['name'] = checkNames( testInput($_POST['name']) );
        $_SESSION['surname'] = checkNames( testInput($_POST['surname']) );
        $_SESSION['password'] = testInput($_POST['password']);
        $_SESSION['governmentID'] = testInput($_POST['governmentID']);
        $_SESSION['governmentID'] =  preg_match('/^[0-9]{8}[A-Za-z]$/', $_SESSION['governmentID']) ? $_SESSION['governmentID'] : "" ;
        $_SESSION['gender'] = testInput($_POST['gender']);
        $_SESSION['spamSubscription'] = $_POST['spamSubscription'];

        var_dump($isFormFieldValidated);
        ($isFormFieldValidated) ? header("Location: ./form.php") : header("Location: ./logout.php");
        //header("Location: ./logout.php");//For some reason, PHP is IGNORING every single header except the last one, WHY???
        //die();
        //header("Location: ./form.php"); //It's so bad that I literally have another one, sending the user to another page, and it ignores it
    }

    function checkNames($string): string {
        return preg_match("/^[a-zA-Z-' ]*$/",$string) ? $string : "" ;
    }

    function testInput($string): string {
        global $isFormFieldValidated;
        if (is_null($string)) { $isFormFieldValidated = false; }
        $string = trim($string);
        $string = stripslashes($string);
        $string = htmlspecialchars($string);
        if ($string == "") $isFormFieldValidated = false;
        return $string;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Rellena tu CV</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label>Nombre: <br><input type="text" name="name" value="<?= $_SESSION['name'] ?? "" ?>"></label><br>
        <label>Apellidos: <br><input type="text" name="surname" value="<?= $_SESSION['surname'] ?? "" ?>"></label><br>
        <label>Contraseña: <br><input type="text" name="password" value="<?= $_SESSION['password'] ?? "" ?>"></label><br>
        <label>DNI: <br><input type="text" name="governmentID" value="<?= $_SESSION['governmentID'] ?? "" ?>"></label><br><br>
        <label>Sexo:</label><br>
        <label><input type="radio" name="gender" value="male" <?= isset($_SESSION['gender']) ? "checked" : "" ?> required> Masculino</label><br>
        <label><input type="radio" name="gender" value="female" <?= isset($_SESSION['gender']) ? "checked" : "" ?> required> Femenino</label><br><br>
        <br>
        <label><input type="checkbox" name="spamSubscription" <?= (isset($_SESSION['spamSubscription'])) ? "checked" : "" ?> value="true"> Quiero recibir spam.</label><br><br>
        <button type="submit">Enviar</button>
        <button type="reset">Borrar los datos introducidos</button>
    </form>
</body>
</html>