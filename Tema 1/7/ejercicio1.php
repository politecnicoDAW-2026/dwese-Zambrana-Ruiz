<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php if(!isset($_POST['name'])) { ?>
    <?php
    echo '<pre>';
    var_dump($_POST);
    echo '<br>';
    echo '<br>';
    echo '</pre>';
    ?>
    <form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label>Nombre:
            <input type="text" required pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñÜü\s]+" name="name" id="name">
        </label>
        <label>Apellidos:
            <input type="text" required pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñÜü\s]+" name="surname">
        </label>
        <label>Edad:
            <input type="text" required name="age"><br>
        </label>
        <label>Peso:
            <input type="text" required maxlength="3" name="weight">
        </label>
        <label>Sexo:
            <label>Masculino
                <input type="radio" name="gender" value="male">
            </label>
            <label>Femenino
                <input type="radio" name="gender" value="female">
            </label>
        </label><br>
        <label>Estado civil:
            <label>Casado
                <input type="radio" name="civilState" value="married">
            </label>
            <label>Soltero
                <input type="radio" name="civilState" value="notMarried">
            </label>
            <label>Otro
                <input type="radio" name="civilState" value="another">
            </label>
        </label><br>
        <label>Aficiones:
            <label>Cine
                <input type="checkbox" name="likesMovies" value="true">
            </label>
            <label>Literatura
                <input type="checkbox" name="likesLiterature" value="true">
            </label>
            <label>Tebeos
                <input type="checkbox" name="likesComics" value="true">
            </label>
            <label>Deportes
                <input type="checkbox" name="likesSports" value="true">
            </label>
            <label>Música
                <input type="checkbox" name="likesMusic" value="true">
            </label>
            <label>Televisión
                <input type="checkbox" name="likesTv" value="true">
            </label>
        </label><br>
        <input type="submit" value="send">
    </form>
<?php } else {

    function test_input($data) {
        if (is_null($data)) { return "";}
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    echo '<pre>';
    var_dump($_POST);
    echo '<br>';
    echo '</pre>';

    $name = test_input($_POST['name']);
    $surname = test_input($_POST['surname']);
    $age = test_input($_POST['age']);
    $weight = test_input($_POST['weight']);
    $gender = test_input($_POST['gender']);
    $civilState = test_input($_POST['civilState']);


    echo 'Nombre: '.$name.'<br>';
    echo 'Apellidos: '.$surname.'<br>';
    echo 'Edad: '.$age.'<br>';
    echo 'Peso: '.$weight.'<br>';
    if (is_null($gender)) {
        echo 'Género: '.$gender.'<br>';
    }
    if (is_null($civilState)) {
        echo 'Estado civil: '.$civilState.'<br>';
    }

    echo '<br><a href="ejercicio1.php">volver</a>';
} ?>
</body>
</html>