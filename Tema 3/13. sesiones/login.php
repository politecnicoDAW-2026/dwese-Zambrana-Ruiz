<?php
    if (isset($_POST['userName']) && isset($_POST['userPassword'])) {
        session_start();
        if (test_input($_POST['userName']) == 'AZR' && test_input($_POST['userPassword']) == '2dciclo') {
            header("Location: ./form.php");
        }
    }

function test_input($data): string {
    if (is_null($data)) { return "";}
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label>Nombre de usuario: <input type="text" name="userName"></label><br>
        <label>Contraseña: <input type="text" name="userPassword"></label><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>