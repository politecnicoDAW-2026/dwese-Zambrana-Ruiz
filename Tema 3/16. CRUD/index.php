<?php

require_once __DIR__ . '/db/users.php';

$users = getUsers()
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica CRUD</title>
</head>
<body>
<h1>Listado de los usuarios</h1>
<table>
    <tr>
        <td>Nombre de usuario</td>
        <td>Borrar</td>
        <td>Editar</td>
    </tr>
    <?php
        foreach ($users as $user) {
            echo "<tr>";
                echo "<td>" . $user['name'] . "</td>";
                echo "<td><a href='delete.php?id=$user[id]'><img src='assets/borrar.png'></a></td>";
                echo "<td><a href='edit.php?id=$user[id]'><img src='assets/editar.png'></a></td>";
            echo "</tr>";
        }
    ?>
</table>
<?php if($_GET['status'] == 'success') { ?>
    <p>Usuario creado con éxito</p>
<?php } ?>
<button>
    <a href="usuario_nuevo.php">Insertar nuevo usuario</a>
</button>
</body>
</html>