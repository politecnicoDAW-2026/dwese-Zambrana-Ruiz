<?php
session_start();

require_once __DIR__ . '/db/users.php';

$errors = [];
$old = ['name' => '', 'surname' => '', 'email' => '', 'password' => ''];

if ($_SERVER["REQUEST_METHOD"] === 'POST') {

    $name     = trim($_POST['name'] ?? '');
    $surname  = trim($_POST['surname'] ?? '');
    $email    = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    $old = ['name' => $name, 'surname' => $surname, 'email' => $email];

    if ($name === '' || !preg_match("/^[\p{L}\-' ]+$/u", $name)) {
        $errors[] = "El nombre no es válido.";
    }
    if ($surname === '' || !preg_match("/^[\p{L}\-' ]+$/u", $surname)) {
        $errors[] = "El apellido/usuario no es válido.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "El email no es válido.";
    }
    if (strlen($password) < 6) {
        $errors[] = "La contraseña debe tener al menos 6 caracteres.";
    }

    if (empty($errors)) {
        try {
            createUser($name, $surname, $email, $password);
            header("Location: ./index.php?status=success");
            exit;
        } catch (PDOException $e) {
            $errors[] = "Error de base de datos: " . $e->getMessage();
        }
    }
}

function errors($s): string {
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo usuario</title>
</head>
<body>
<h1>Nuevo usuario</h1>

<?php foreach ($errors as $error): ?>
    <p style="color:red"><?= errors($error) ?></p>
<?php endforeach; ?>

<form action="" method="post">
    <label>Nombre: <br><input type="text" name="name" value="<?= errors($old['name']) ?>"></label><br>
    <label>Apellido: <br><input type="text" name="surname" value="<?= errors($old['surname']) ?>"></label><br>
    <label>Contraseña: <br><input type="password" name="password"></label><br>
    <label>Email: <br><input type="email" name="email" value="<?= errors($old['email']) ?>"></label><br><br>
    <button type="submit">Enviar</button>
    <button type="reset">Borrar los datos introducidos</button>
</form>
</body>
</html>