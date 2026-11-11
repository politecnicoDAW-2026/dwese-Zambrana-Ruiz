<!DOCTYPE html>
<html lang="en">
<head>
    <title>Banco</title>
</head>
<body>
    <h1>Clientes del banco</h1>
    <table>
        <tr>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th>Provincia</th>
            <th>País</th>
            <th></th>
            <th></th>
        </tr>
<?php foreach ($dataBaseOutput as $userData): ?>
        <tr>
            <td><?= $userData['dni'] ?></td>
            <td><?= $userData['username'] ?></td>
            <td><?= $userData['phone'] ?></td>
            <td><?= $userData['address'] ?></td>
            <td><?= $userData['city'] ?></td>
            <td><?= $userData['country'] ?></td>
            <td><a href="./index.php?action=remove&dni=<?= $userData['dni'] ?>"><button>Eliminar</button></a></td>
            <td><a href="./index.php?action=edit&dni=<?= $userData['dni'] ?>"><button>Modificar</button></a></td>
        </tr>
<?php endforeach; ?>
    </table>
    <br>
    <li>
        <a href="../../../../disabled.index.php">
            <button>Insertar</button>
        </a>
    </li>
</body>
</html>